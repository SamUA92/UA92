<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include("db.php"); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent and Pupil</title>
    <link rel="stylesheet" href="stylesheet.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        .container {
            margin: 20px;
        }
    </style>
</head>
<body>
    <h1>Parent and Pupil data</h1>
    <table>
        <thead>
            <tr>
                <th>ParentID</th>
                <th>PupilID</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $query = "SELECT * FROM `Parent_Pupil`;";
            $result = mysqli_query($conn, $query);
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach($rows as $row) {
                echo ("<tr>");
                echo ("<td>" . $row["ParentID"] . "</td>");
                echo ("<td>" . $row["PupilID"] . "</td>");
                echo ("</tr>");
            }
            ?>
        </tbody>
    </table>


</body>
</html>