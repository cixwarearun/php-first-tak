<?php

// Creating new mysqli object and connecting
$mysqli = new mysqli("localhost", "root","","logindb");


// Check for any error
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


// Storing post data into variables
$username = $_POST['user'];
$password = $_POST['pass'];




// Preparing Query
$sql = "SELECT * FROM users WHERE username ='".$username."' AND password = '".$password."'";

// Executing query
$result = $mysqli->query($sql);                

// Getting Result
$row = $result->fetch_assoc();
if($row['username']==$username && $row['password']== $password){
    echo "Login is successful";
}                 else{
    echo "failed to login";
}

// Closing the mysqli connection
$mysqli -> close();
?>