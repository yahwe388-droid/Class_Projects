<?php
session_start();
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE phone=?");
    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {

            $_SESSION['user'] = $user['first_name'];

            header("Location: dashboard.php");
            exit();
        } else {
            echo "<script>alert('Wrong Password');</script>";
        }
    } else {
        echo "<script>alert('User not found');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Login Form</h2>

    <form method="POST" onsubmit="return validateForm()">
        <label>Phone Number:</label>
        <input type="text" name="phone" id="phone" required>
        <small id="phoneError" class="error"></small>

        <label>Password:</label>
        <input type="password" name="password" id="password" required>
        <small id="passwordError" class="error"></small>

        <div class="buttons">
            <button type="submit" class="login-btn" onclick="showLoading(this)">Login</button>
            <button type="reset" class="clear-btn">Clear</button>
        </div>

        <a href="register.php">Create New Account</a>
    </form>
</div>

<script src="script.js"></script>

</body>
</html>