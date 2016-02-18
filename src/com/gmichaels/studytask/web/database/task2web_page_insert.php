<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>StudyTask: Lab #1</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>
<body>
<form class="main">
    <p align="center">
        <button class="buttons" name="testButtons">
            <a href="task2web_page.php">Back</a>
        </button>
    </p>
    <hr>
        <?php
require_once ('connect.php');
mysql_query("set names utf8");

        $surename = $_POST['surename'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $adres = $_POST['adres'];
        $id_group = $_POST['group'];
            $result2 = mysql_query("INSERT INTO students (surename, name, lastname, adres, id_group)
                                    VALUES ('$surename', '$name', '$lastname', '$adres', '$id_group')");


            if ($result2 == true) {

                echo 'reg okey!';

            } else {

                echo 'Somthing wrong';

            }

?>
</form>
</body>
</html>