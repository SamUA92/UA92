<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Year Options</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<body>
    <ul>
    <li><a href="index.php">Home</a></li>
        <li><a href="viewclasses.php?year=Classes">Classes</a></li>
        <li><a href="viewpupils.php?Pupils">Pupils</a></li>
        <li><a href="viewparents.php?year=Parents">Parents</a></li>
        <li><a href="viewteachers.php?year=Teachers">Teachers</a></li>
        <li><a href="viewteachers.php?year=Salaries">Salaries</a></li>
        <li><a href="viewpupil.php?year=parent_pupil">Parent and Pupil</a></li>

    </ul>

    <h1>Select a class</h1>
    <form action="process.php" method="post">
        <button type="submit" name="option" value="enroll">Enroll</button>
        <form action="enroll.php" method="post">
        <form action="viewclasses.php" method="get">
            <button type="submit" name="option" value="view_class" class="view-class-button">View Class</button>
        </form>

    </form>
</body>
</html>
