<?php
session_start();

if(isset($_POST['login'])) {
    $_SESSION['studentID'] = $_POST['studentID'];
    header("Location: result.php");
}
?>

<form method="post">
    <h2>Student Login</h2>
    Enter Student ID: <input type="text" name="studentID" required>
    <br><br>
    <button name="login">Login</button>
</form>