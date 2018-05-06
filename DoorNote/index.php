<?php
//ini_set('display_errors', 'On');

//namespace DoorMsg\View;

use DoorMsg\Util\Util;

require_once 'classes/DoorMsg/Util/Util.php';
Util::initRequest();


$_SESSION[page] = 'index.php';
$_SESSION[username] = 'John Doe';
$_SESSION[login] = true;

include DOORMSG_VIEWS . 'homepage.php';
