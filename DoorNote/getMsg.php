<?php
//ini_set('display_errors', 'On');

use \DoorMsg\Util\Util;
//use DoorMsg\Controller\SessionManager;

require_once 'classes/DoorMsg/Util/Util.php';
//Util::initRequest();

require_once 'classes/DoorMsg/Controller/Controller.php';
require_once 'classes/DoorMsg/Controller/SessionManager.php';
require_once 'classes/DoorMsg/Model/Message.php';
require_once 'classes/DoorMsg/Integration/MsgStore.php';

$controller = SessionManager::getController();
echo \json_encode($controller->getMsg());
SessionManager::storeController($controller);

