<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi kredensial
    if ($username == "your_email@example.com" && $password == "0000") {
        $_SESSION['username'] = $username;
        header("Location: homeSession.php");
        exit();
    } else {
        echo "Username atau password salah!";
    }
}
?>
