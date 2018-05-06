<?php
//ini_set('display_errors', 'On');

use \DoorMsg\Util\Util;
//use DoorMsg\Controller\SessionManager;
//use \DoorMsg\Model\Message;

require_once 'classes/DoorMsg/Util/Util.php';
Util::initRequest();

require_once 'classes/DoorMsg/Controller/Controller.php';
require_once 'classes/DoorMsg/Controller/SessionManager.php';

$_SESSION[username] = 'John Doe';
$_SESSION[login] = true;

//$_SESSION[controller] = new Controller();
if (!empty($_POST[newMsg]) && $_SESSION[login]) {
    $msg_obj = new Message($_SESSION[username], $_POST[newMsg]);
    $controller =  SessionManager::getController();
    $controller->addMsg($msg_obj);
    SessionManager::storeController($controller);
}
$_SESSION[message] = serialize($msg_obj);
//include DOORMSG_VIEWS . 'homepage.php';
//echo $_POST[newMsg];
//include DOORMSG_VIEWS . 'test.php';