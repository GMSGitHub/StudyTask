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
        $id_group = $_POST['groups_list'];
        $id_discipline = $_POST['disciplines_list'];
        $exam_date = $_POST['exam_date'];
        $id_teacher = $_POST['teacher'];
        $id_mark = $_POST['mark'];
        $stipend = $_POST['stipend'];

        $search_group_id = "SELECT id_group FROM  `groups` WHERE name_group =  '$id_group'";
        $search_group_id = mysql_fetch_row(mysql_query($search_group_id));
        $find_group_id=$search_group_id[0];

        $search_discipline_id = "SELECT id_discipline FROM  `disciplines` WHERE name_discipline =  '$id_discipline'";
        $search_discipline_id = mysql_fetch_row(mysql_query($search_discipline_id));
        $find_discipline_id=$search_discipline_id[0];

        $search_exam_date_id = "SELECT exam_date FROM  `disciplines` WHERE name_discipline =  '$id_discipline'";
        $search_exam_date_id = mysql_fetch_row(mysql_query($search_exam_date_id));
        $fined_exam_date_id=$search_exam_date_id[0];
        echo $fined_exam_date_id;

        $resultStudents = mysql_query("INSERT INTO students (surename, name, lastname, adres, id_group)
                                    VALUES ('$surename', '$name', '$lastname', '$adres', '$find_group_id')");


        $max_id='SELECT MAX(id_student) FROM students';
        $max_id=mysql_fetch_row(mysql_query($max_id));
        $id_student=$max_id[0];

        echo 'TESTRESULT-'.$find_discipline_id." : ".$fined_exam_date_id."<br>";
        $resultGeneral = mysql_query("INSERT INTO general (id_student, id_discipline, id_mark, stipend)
                                    VALUES ('$id_student' , '$id_discipline', '$id_mark', '$stipend')");

            if ($resultStudents == true) {

                echo 'INSERT student - ok';
                echo "<br>".$surename."<br>".$name."<br>".$lastname."<br>".$adres."<br>".$id_group."<br>";


            } else {

                echo 'Somthing wrong TABLE - student';

            }

        if ($resultGeneral == true) {

            echo 'INSERT general - ok';
            echo "<br>".$id_student."<br>".$id_discipline."<br>".$id_mark."<br>".$stipend."<br>";


        } else {

            echo 'Somthing wrong TABLE - general';

        }
?>
</form>
</body>
</html>