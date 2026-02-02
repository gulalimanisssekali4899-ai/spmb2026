<?php 
session_start();
include 'config.php';

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $query = mysqli_query($db, $sql);

    if(mysqli_num_rows($query) > 0) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: listsiswa.php');
    } else {
        echo "<script>alert('Login gagal!'); window.location.href='login.php';</script>";
    }
}


?>