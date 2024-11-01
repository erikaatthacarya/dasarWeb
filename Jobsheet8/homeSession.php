<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: sessionLoginForm.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p><a href="sessionLogout.php">Logout</a></p>
</body>
</html>
