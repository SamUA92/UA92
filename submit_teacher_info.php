<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Information Form</title>
</head>
<body>
    <h2>Teacher Information Form</h2>
    <form action="submit_teacher_info.php" method="post">
        <label for="teacher_id">Teacher ID:</label><br>
        <input type="text" id="teacher_id" name="teacher_id" required><br><br>
        
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address" required><br><br>
        
        <label for="phone_number">Phone Number:</label><br>
        <input type="tel" id="phone_number" name="phone_number" required><br><br>
        
        <label for="annual_salary">Annual Salary:</label><br>
        <input type="number" id="annual_salary" name="annual_salary" required><br><br>
        
        <label for="background_check">Background Check (Yes/No):</label><br>
        <input type="text" id="background_check" name="background_check" required><br><br>
        
        <label for="class_id">Class ID:</label><br>
        <input type="text" id="class_id" name="class_id" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $teacher_id = htmlspecialchars($_POST['teacher_id']);
    $name = htmlspecialchars($_POST['name']);
    $address = htmlspecialchars($_POST['address']);
    $phone_number = htmlspecialchars($_POST['phone_number']);
    $annual_salary = htmlspecialchars($_POST['annual_salary']);
    $background_check = htmlspecialchars($_POST['background_check']);
    $class_id = htmlspecialchars($_POST['class_id']);

    // Here you can add code to save the form data to a database or perform other actions

    
  
} else {
    // Redirect back to the form if accessed directly
    header("Location: index.php");
    exit();
}
?>
