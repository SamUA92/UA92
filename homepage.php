<head>
<link rel="stylesheet" href="stylesheet.css">
</head>
<?php include 'header.php'; ?>
<div class="container">
    <h2>Contact Us</h2>
    <p>If you have any questions or need further information, please contact us using the form below:</p>
    <form action="contact_form.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        
        <input type="submit" value="Submit">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);


    if (!empty($name) && !empty($email) && !empty($message)) {
        echo "<div class='container'>";
        echo "<h2>Thank you for contacting us, $name!</h2>";
        echo "<p>We have received your message and will get back to you shortly.</p>";
        echo "</div>";
    } else {
        echo "<div class='container'>";
        echo "<h2>Oops! Something went wrong.</h2>";
        echo "<p>Please make sure all fields are filled out correctly.</p>";
        echo "</div>";
    }
}
?>
<?php include 'footer.php'; ?>