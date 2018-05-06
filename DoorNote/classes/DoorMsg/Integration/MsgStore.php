<?php

//namespace DoorMsg\Integration;

//use DoorMsg\Model\Message;
require_once 'classes/DoorMsg/Model/Message.php';
/**
 * A facade for the conversation data store. Manages all create/read/update/delete operations on 
 * entries in the conversation.
 */
class MsgStore {

    private $servername = "localhost";
    private $username = "root";
    private $password = "root";

    /**
     * Creates a new instance.
     */
    public function __construct() {
    }

    /**
     * Appends a new entry to the current conversation.
     * 
     * @param \Chat\Model\Entry $entry The entry to append.
     */
    public function addMsg(Message $message) {
        // Create connection
        $conn = new mysqli($this->servername, $this->username, $this->password);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        // Add new message to database
        $username = $message->getUserName();
        $msg = $message->getMessage();
        $sql = "USE DoorMsg;";
        $conn->query($sql);
        $sql =  "INSERT INTO Messages(username, message) VALUES('$username', '$msg')";
        $conn->query($sql);  
        $conn->close(); 
    }

    public function getMsg() {
        // Create connection
        $conn = new mysqli($this->servername, $this->username, $this->password);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
       
        // Get the last message from database
        $sql = "USE DoorMsg;";
        $conn->query($sql);
        $sql =  "SELECT username, message FROM Messages ORDER BY id DESC LIMIT 1";
        $result = $conn->query($sql);  
        $conn->close(); 
        
        $row = $result->fetch_assoc();
        $username = $row["username"];
        $msg = $row["message"];
        return new Message($username, $msg); 
    }  
    
    public function deleteMsg() {
        // Create connection
        $conn = new mysqli($this->servername, $this->username, $this->password);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $sql = "USE DoorMsg;";
        $conn->query($sql);
        $sql =  "DELETE FROM Messages";
        $conn->query($sql);  
        $conn->close(); 
    }
}