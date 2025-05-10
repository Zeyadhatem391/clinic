<?php
 $servername = "localhost";
 $db_username = "root"; 
 $db_password = "";    
 $dbname = "appointment";   
 $conn = new mysqli($servername, $db_username, $db_password, $dbname);

 if ($conn->connect_error) {
    die("erorr : " . $conn->connect_error);
}
?>