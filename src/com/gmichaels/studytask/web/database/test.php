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
                    <a href="../index.php">Back</a>
                </button>
            </p>
            <hr>
                <?php
                require 'connect.php';
                $sql_select = "SELECT
  `students`.`surename` , `students`.`name` , `students`.`lastname` , `students`.`adres` ,
  `groups`.`name_group` ,
  `disciplines`.`name_discipline` ,
  `teachers`.`surename_teacher` ,
  `marks`.`value_mark` ,
  `general`.`stipend`

FROM `general`

  INNER JOIN `students` ON `general`.`id_student` = `students`.`id_student`
  INNER JOIN `groups` ON `students`.`id_group` = `groups`.`id_group`
  INNER JOIN `disciplines` ON `general`.`id_discipline` = `disciplines`.`id_discipline`
  INNER JOIN `teachers` ON `disciplines`.`id_teacher` = `teachers`.`id_teacher`
  INNER JOIN `marks` ON `general`.`id_mark` = `marks`.`value_mark`
  GROUP BY `students`.`surename`";
                $result = mysql_query($sql_select);
                $row = mysql_fetch_array($result);
                do
                {
                    printf(
                        "<b>   Фамилия: </b>" . $row['surename'] .
                        "<b> | Имя: </b>" . $row['name'] .
                        "<b> | Отчество: </b>" . $row['lastname'].
                        "<b> | Адрес: </b>" . $row['adres'] .
                        "<b> | Группа: </b> " .$row['name_group'] .
                        "<b> | Дисциплина: </b>" .$row['name_discipline'] .
                        "<b> | Преподаватель: </b> " .$row['surename_teacher'] .
                        "<b> | Оценка: </b> " .$row['value_mark'] .
                        "<b> | Стипендия: </b> " .$row['stipend'] .
                        "<hr>"
                    );
                }
                while($row = mysql_fetch_array($result));
                ?>
        </form>
    </body>
</html>