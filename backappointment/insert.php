<?php
include_once('conn.php');
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (!isset($_SESSION['user_id'])) {
  echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
  echo "
      <script>
      Swal.fire({
          title: 'Unauthorized!',
          text: 'You must be logged in to perform this action.',
          icon: 'warning',
          confirmButtonText: 'Login',
          background: '#fffbe6',
          color: '#333',
          iconColor: '#f59e0b',
          confirmButtonColor: '#2563eb',
      }).then(() => {
          window.location.href = 'login/login.html';
      });
      </script>";
  exit();
}


if (isset($_REQUEST['save'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $department = $_POST['department'];
  $date = $_POST['date'];
  $time = $_POST['time'];


  $sql = "INSERT INTO client (name, email, mobile , department , date , time )
     VALUES ('$name', '$email', '$mobile' , '$department' , '$date' , '$time')";

  if ($conn->query($sql) === TRUE) {
    $_SESSION['success_message'] = "Successful reservation ";
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
  }
}
if (isset($_POST['delete'])) {
  $id = intval($_POST['id']);

  $sql = "DELETE FROM client WHERE id = $id";

  if ($conn->query($sql) === TRUE) {
    $_SESSION['success_message'] = "Successfully cancelled";
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
  }
}


if (isset($_POST['update'])) {
  $id = intval($_POST['id']);

  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $department = $_POST['department'];
  $date = $_POST['date'];
  $time = $_POST['time'];

  $sql = "UPDATE client SET 
              name='$name', 
              email='$email', 
              mobile='$mobile', 
              department='$department', 
              date='$date', 
              time='$time' 
          WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
    $_SESSION['success_message'] = "Modified successfully";
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
  }
}

if (isset($_SESSION['success_message'])) {
  echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
  echo "
      <script>
      Swal.fire({
        title: 'Success!',
        text: '" . $_SESSION['success_message'] . "',
        icon: 'success',
        confirmButtonText: 'Ok',
        background: '#f0f9ff', 
        color: '#1e293b',      
        iconColor: '#10b981',   
        confirmButtonColor: '#2563eb', 
        width: '500px',
        confirmButtonText: 'Yes'
      });
      </script>";
  unset($_SESSION['success_message']);
}
?>



<!-- $stmt = $conn->prepare("INSERT INTO client (name, email, mobile, department, date, time) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $mobile, $department, $date, $time);
    $stmt->execute();
    $stmt->close();

     ✅ 
  
-->