#!/bin/bash

# Install Node.js modules using npm
npm install express mysql request axios

# Install PHP and related modules
sudo apt update
sudo apt install -y php-cli php-mysql php-curl

# Install Cloudflared
system_arch=$(uname -m)

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
sudo mv cloudflared /usr/local/bin/

echo "Installation complete."
