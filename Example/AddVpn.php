<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title>Mikrotik API - Add VPN</title>
	
	<meta content="" name="keywords">
	<meta content="" name="author">
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>

<h1>Mikrotik API - Add VPN</h1>

<?php

include "./../Router.php";
$RouterApi = new MikrotikApi\Router();

if ($RouterApi->connect('192.168.0.1', 'user', 'password'))
{
   $RouterApi->comm("/ppp/secret/add", array(
       "name" => "user",
       "password" => "password",
       "remote-address" => "1.2.3.4",
       "comment" => "{VPN new user}",
       "service" => "pptp",
   ));
  
   $RouterApi->disconnect();
}

?>

</body>
</html>