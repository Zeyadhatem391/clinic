<?php
session_start();
include("conn.php"); 

$name = $_POST['name'];
$Password = $_POST['pass'];

$sql = "SELECT * FROM users WHERE username = '$name' AND password = '$Password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['profile_image'] = $user['img']; 

    header("Location: http://localhost/clinic/index.php");
    exit();
} else {
    echo "error: " . $conn->error;
}
?>