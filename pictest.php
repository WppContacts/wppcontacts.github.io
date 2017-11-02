<?php

require_once "src/events/MyEvents.php";
require_once('src/whatsprot.class.php');

$username = "5491161663362";
$nickname = 'WhatSync';    // Your nickname, it will appear in push notifications
$password = "WkMBVC1qZT/CT/xk98MCREcJ3Mw="; // The one we got registering the number
$debug = true;
$log = true; 

// Create a instance of WhastPort.
$w = new WhatsProt($username, $nickname, $debug, $log);

$events = new MyEvents($w);
$events->setEventsToListenFor($events->activeEvents);

$w->connect(); // Connect to WhatsApp network
$w->loginWithPassword($password); // logging in with the password we got!
$number = "5491133209595"
$target = (int)$number;
$w->sendSync($target);
$w->sendGetProfilePicture($target, true);

  $w->pollMessage();
        $w->pollMessage();
            $w->pollMessage();
			  $w->pollMessage();
        $w->pollMessage();
            $w->pollMessage();
?>