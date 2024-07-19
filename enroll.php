<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Enroll</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div class="container">
        <h1>Enroll into a year group</h1>
        <p>Please fill out the form below to enroll in a course.</p>
        <form action="enroll.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label for="class">Preferred Class:</label>
            <select id="class" name="class" required>
                <option value="Reception Year">Reception Year</option>
                <option value="Year One">Year One</option>
                <option value="Year Two">Year Two</option>
                <option value="Year Three">Year Three</option>
                <option value="Year Four">Year Four</option>
                <option value="Year Five">Year Five</option>
                <option value="Year Six">Year Six</option>
            </select>
            
            <input type="submit" value="Enroll">
        </form>
    </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $class = htmlspecialchars($_POST["class"]);

    if (!empty($name) && !empty($email) && !empty($phone) && !empty($class)) {
        echo '<div class="container">';
        echo "<h2>Thank you for enrolling, $name!</h2>";
        echo "<p>We have received your enrollment for $class. We will contact you at $email or $phone shortly.</p>";
        echo '</div>';
    } else {
        echo '<div class="container">';
        echo "<h2>Oops! Something went wrong.</h2>";
        echo "<p>Please make sure all fields are filled out correctly.</p>";
        echo '</div>';
    }
}
?>
