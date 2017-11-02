<?php

// This file is part of a tutorial on the blog of Philipp C. Heckel, July 2013
// http://blog.philippheckel.com/2013/07/07/send-whatsapp-messages-via-php-script-using-whatsapi/

require_once('src/Registration.php');
require_once('src/whatsprot.class.php');

$username = "5491161663362";
$nickname = 'WhatSync';    // Your nickname, it will appear in push notifications
$password = "WkMBVC1qZT/CT/xk98MCREcJ3Mw="; // The one we got registering the number
$debug = true;
$log = true; 
$number =  "5491133209595"; // change this to any number

// Create a instance of WhastPort.
$w = new WhatsProt($username, $nickname, $debug, $log);

$w->connect(); // Connect to WhatsApp network
$w->loginWithPassword($password); // logging in with the password we got!

$w->sendPresenceSubscription($number)
?>