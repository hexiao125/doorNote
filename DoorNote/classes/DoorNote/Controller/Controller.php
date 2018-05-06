<?php

//namespace DoorMsg\Controller;
//use \DoorMsg\Model\Message;

//use \DoorMsg\Integration\MsgStore;
//use \DoorMsg\Integration\UserRegistration;
//use \DoorMsg\Model\User; 
require_once 'classes/DoorMsg/Model/Message.php';
require_once 'classes/DoorMsg/Integration/MsgStore.php';

/**
 * This is the application's sole controller. All calls from view to lower layers pass through here.
 */
class Controller {

    private $msgStore;
  //  private $userRegistration;
    //private $loginUser;

    /**
     * Constructs a new instance.
     */
    public function __construct() {
        $this->msgStore = new MsgStore();
 //       $this->userRegistration = new UserRegistration();
              
    }

    public function addMsg(Message $message) {
        $this->msgStore->addMsg($message);
    }

    public function getMsg() {
        return $this->msgStore->getMsg();
    }
    
    public function deleteMsg() {
        return $this->msgStore->deleteMsg();
    }
/*  
 *   
    public function signupUser(User $user) {
        return $this->userRegistration->signupUser($user);
    }    
    
    public function userAuthen(User $user) {
        return $this->userRegistration->userAuthen($user);
    }
*/
}
