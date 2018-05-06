<?php

//namespace DoorMsg\Model;
/**
 * Holds one entry in the conversation.
 */
class Message implements \JsonSerializable {

    private $username;
    private $message;
    private $timestamp;

    public function __construct($username, $message) {
        $this->username = $username;
        $this->message = $message;
        $this->timestamp = time();
    }

    public function getUserName() {
        return $this->username;
    }

    public function getMessage() {
        return $this->message;
    }
    
    public function getTimestamp() {
        return $this->timestamp;
    }


    public function jsonSerialize() {
        $json_obj = new \stdClass;
        $json_obj->userName = \json_encode($this->username);
        $json_obj->message = \json_encode($this->message, JSON_UNESCAPED_UNICODE);
        $json_obj->timestamp = \json_encode($this->timestamp);
        return $json_obj;
    }
    
}
