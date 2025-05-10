<?php
session_start();
include("conn.php");

$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$text2 = "<h2>Password does not meet the requirements:</h2> 
<h4><li>Contains 8 letters or numbers</li></h4>
<h4><li>Must contain a special code :{!,@,#,$,%,^,&,*,/}</li></h4>";

if (strlen($password) >= 8 && preg_match('/[!@#$%^&*(),.?":{}|<>_-]/', $password)) {

    $sql = "INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$password')";
    $result = $conn->query($sql);
    
    if ($result) {
        $_SESSION['user_id'] = $conn->insert_id; 
        $_SESSION['username'] = $name;
        $_SESSION['profile_image'] = 'default.png'; 
        header("Location: http://localhost/clinic/index.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "$text2";
}

?>