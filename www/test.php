<?php 
include "./_pdo.php";


//Connecting to a database file
$db_file = "./ideal_software.sqlite3";
PDO_Connect("sqlite:$db_file");


//Fetching data
$fruits = PDO_FetchAll("SELECT * FROM admin WHERE id = 1");
$fruits2 = PDO_FetchOne("SELECT DATE('now')");


// print_r ($fruits2);
// echo '<br>';
// echo $fruits2;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDEAL</title>
</head>
<body>
    <center>
        <h1>
        This is my first app with SQLite3
        </h1>
        <h1>
        <?php print_r ($fruits[0]['userid']); ?>
        </h1>
        <h1>
        <?php print_r ($fruits[0]['password']); ?>
        </h1>
        <h1>
        <?php print_r ($fruits2); ?>
        </h1>
    </center>
</body>
</html>
