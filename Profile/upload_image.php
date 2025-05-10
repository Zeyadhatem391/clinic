<?php
session_start();
include("../login/conn.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login/login.html");
    exit();
}

if (isset($_POST['upload'])) {
    $user_id = $_SESSION['user_id'];

    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {
        $imageName = time() . '_' . basename($_FILES['profile_image']['name']);
        $targetPath = "../assets/Uplods/" . $imageName;

        if (!is_dir("../assets/Uplods")) {
            mkdir("../assets/Uplods", 0777, true);
        }

        if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $targetPath)) {
            $sql = "UPDATE users SET img = '$imageName' WHERE id = $user_id";
            if ($conn->query($sql) === TRUE) {
                $_SESSION['profile_image'] = $imageName;
                header("Location: profile.php");
                exit();
            } else {
                echo "Database error: " . $conn->error;
            }
        } else {
            echo "Error in uploading image.";
        }
    } else {
        echo "No image uploaded or upload error.";
    }
}
?>
