<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $dept = $_POST['department'];
    $gender = $_POST['gender'];
    $others = $_POST['others'];
    $phone = $_POST['regPhone'];
    $password = password_hash($_POST['regPassword'], PASSWORD_DEFAULT);

    $hobbies = isset($_POST['hobbies']) ? implode(",", $_POST['hobbies']) : "";

    $stmt = $conn->prepare("INSERT INTO users 
        (first_name,last_name,department,gender,hobbies,others,phone,password)
        VALUES (?,?,?,?,?,?,?,?)");

    $stmt->bind_param("ssssssss", $fname,$lname,$dept,$gender,$hobbies,$others,$phone,$password);

    if ($stmt->execute()) {
        echo "<script>alert('Registered Successfully!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Phone already exists!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="reg-container">
    <h2>Registration Form</h2>

    <form method="POST" onsubmit="return validateRegisterForm()">

        <div class="form-grid">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="firstName" required>
            </div>

            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="lastName" required>
            </div>

            <div class="form-group">
                <label>Department</label>
                <select name="department">
                    <option>Software Engineering</option>
                    <option>Computer Science and Engineering</option>
                    <option>Electronics and Communication Engineering</option>
                    <option>Electrical and Power Control Engineering</option>
                </select>
            </div>
        </div>

        <div class="form-grid">

            <div class="form-group">
                <span>Gender</span>
                <label><input type="radio" name="gender" value="male" required> Male</label>
                <label><input type="radio" name="gender" value="female"> Female</label>
            </div>

            <div class="form-group">
                <span>Hobbies</span>
                <label><input type="checkbox" name="hobbies[]" value="reading"> Reading</label>
                <label><input type="checkbox" name="hobbies[]" value="sports"> Sports</label>
                <label><input type="checkbox" name="hobbies[]" value="music"> Music</label>
            </div>

            <div class="form-group">
                <label>Others</label>
                <textarea name="others"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="regPhone" id="regPhone" required>
            <small id="regPhoneError" class="error"></small>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="regPassword" id="regPassword" required>
            <small id="regPasswordError" class="error"></small>
        </div>

        <div class="buttons-center">
            <button type="submit" class="login-btn">Register</button>
        </div>

    </form>
</div>

<script src="script.js"></script>

</body>
</html>