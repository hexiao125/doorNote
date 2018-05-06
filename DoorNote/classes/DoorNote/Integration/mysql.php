<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Create database
/*$sql = "CREATE DATABASE DoorMsg";
$conn->query($sql);

$sql = "CREATE TABLE Messages (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        message VARCHAR(300) NOT NULL)";
$conn->query($sql);
        
 
$conn->close();
?>*/

