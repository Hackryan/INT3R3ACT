#!/bin/bash

# Step 1: Install required packages and perform updates
echo "Step 1: Installing required packages and performing updates..."
apt install -y git apache2 php cloudflared god python python-is-python3
apt -y update
apt -y upgrade
clear

# Configuration file paths
SMTP_CONFIG_FILE="config_smtp.json"
TELEGRAM_CONFIG_FILE="config_telegram.json"

# Check and create Database folder if it doesn't exist
DATABASE_FOLDER="Database"
if [ ! -d "$DATABASE_FOLDER" ]; then
    mkdir "$DATABASE_FOLDER"
    chmod 777 "$DATABASE_FOLDER"
fi

# Check and create .host folder if it doesn't exist
HOST_FOLDER=".host"
if [ ! -d "$HOST_FOLDER" ]; then
    mkdir "$HOST_FOLDER"
    chmod 777 "$HOST_FOLDER"
fi

# Check and create .tunnels_log folder if it doesn't exist
TUNNELS_LOG_FOLDER=".tunnels_log"
if [ ! -d "$TUNNELS_LOG_FOLDER" ]; then
    mkdir "$TUNNELS_LOG_FOLDER"
    chmod 777 "$TUNNELS_LOG_FOLDER"
fi

# Check and create .cloudfl.log file if it doesn't exist
CLOUDFL_LOG_FILE=".cloudfl.log"
if [ ! -f "$TUNNELS_LOG_FOLDER/$CLOUDFL_LOG_FILE" ]; then
    touch "$TUNNELS_LOG_FOLDER/$CLOUDFL_LOG_FILE"
    chmod 777 "$TUNNELS_LOG_FOLDER/$CLOUDFL_LOG_FILE"
fi

# Configuration file path
CONFIG_FILE="config.json"

# Function to create or update the configuration file
create_or_update_config() {
    local telegram_bot_token=""
    local telegram_chat_id=""
    local host=""
    local port=""
    local node_app_path=""

    echo "Enter your configuration values:"
    read -p "Telegram Bot Token: " telegram_bot_token
    read -p "Telegram Chat ID: " telegram_chat_id
    read -p "Host: " host
    read -p "Port: " port
    read -p "Node.js App Path: " node_app_path

    cat <<EOF > $CONFIG_FILE
{
  "TELEGRAM_BOT_TOKEN": "$telegram_bot_token",
  "TELEGRAM_CHAT_ID": "$telegram_chat_id",
  "host": "$host",
  "port": "$port",
  "node_app_path": "$node_app_path"
}
EOF

    echo "Configuration file '$CONFIG_FILE' has been created/updated."
}

# Check if the configuration file already exists
if [ -f "$CONFIG_FILE" ]; then
    read -p "Configuration file '$CONFIG_FILE' already exists. Do you want to update it? (y/n): " choice
    if [ "$choice" = "y" ] || [ "$choice" = "Y" ]; then
        create_or_update_config
    else
        echo "No changes were made to the configuration file."
    fi
else
    create_or_update_config
fi
