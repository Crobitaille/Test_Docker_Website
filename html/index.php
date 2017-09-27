<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <h1> THis is an obvious change</h1>
    <p> MORE CHANGES </p>
    <table>
    <tr>
    <th> ID </th>
    <th> First Name </th>
    <th> Salary </th>
    </tr>
    <?php
        $json = file_get_contents('http://website_api:80/api.php');
        $result = json_decode($json, true);
        foreach ($result as $row) {
            echo("<tr>");
            echo("<td>" . $row['id'] . "</td>");
            echo("<td>" . $row['name'] . "</td>");
            echo("<td>" . $row['salary'] . "</td>");
            echo("</tr>");
        }
    ?>
    </table>
</body>
</html>
