<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>StudyTask: Lab #2</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    </head>
    <body>
        <form class="main" action="task2web_page_insert.php" method="POST">
            <p align="center">
                Добавление записи в базу данных.
            </p>
            <hr>
            <div class="customizePage">
                <label for="field1">Фамилия: </label>
                <input type="text" class="fields" id="field1" name="surename"/>
            </div>
            <div class="customizePage">
                <label for="field2">Имя: </label>
                <input type="text" class="fields" id="field2" name="name"/>
            </div>
            <div class="customizePage">
                <label for="field3">Отчество: </label>
                <input type="text" class="fields" id="field3" name="lastname"/>
            </div>
            <div class="customizePage">
                <label for="field4">Адрес: </label>
                <input type="text" class="fields" id="field4" name="adres"/>
            </div>
            <div class="customizePage">
                <label for="field5">Группа: </label>
                <?php
                $connect=mysql_connect('localhost','mysql','mysql') or die(mysql_error());
                mysql_select_db('web_schema',$connect) or die(mysql_error());
                $sql_query = "SELECT name_group FROM groups";
                $result = mysql_query($sql_query) or die(mysql_error());
                echo "<select class='fields' name='groups_list'>"."<option disabled>"."Выберите группу";
                    while($row = mysql_fetch_array($result)){
                    echo "<option value='".$row["name_group"]."'>".$row["name_group"]."</option>";
                    }mysql_free_result($result);
                    echo "</select>";
                ?>
            </div>
            <div class="customizePage">
                <label for="field6">Преподаватель: </label>
                <input type="text" class="fields" id="field6" name="teacher"/>
            </div>
            <div class="customizePage">
                <label for="field7">Дисциплина: </label>
                <?php
                $connect=mysql_connect('localhost','mysql','mysql') or die(mysql_error());
                mysql_select_db('web_schema',$connect) or die(mysql_error());
                $sql_query = "SELECT name_discipline FROM disciplines";
                $result = mysql_query($sql_query) or die(mysql_error());
                echo "<select class='fields' name='disciplines_list'>"."<option disabled>"."Выберите дисциплину"."</option>";
                while($row = mysql_fetch_array($result)){
                    echo "<option value='".$row["name_discipline"]."'>".$row["name_discipline"]."</option>";
                }mysql_free_result($result);
                echo "</select>";
                ?>
            </div>
            <div class="customizePage">
                <label for="field8">Дата Экзамена: </label>
                <?php
                $connect=mysql_connect('localhost','mysql','mysql') or die(mysql_error());
                mysql_select_db('web_schema',$connect) or die(mysql_error());
                $id_discipline = $_POST['disciplines_list'];
                $search_exam_date_id = "SELECT exam_date FROM  `disciplines` WHERE name_discipline =  '$id_discipline'";
                $search_exam_date_id = mysql_fetch_row(mysql_query($search_exam_date_id));
                $fined_exam_date_id=$search_exam_date_id[0];
                mysql_free_result($search_exam_date_id);
                echo $fined_exam_date_id;
                ?>
            </div>
            <div class="customizePage">
                <label for="field9">Оценка: </label>
                <input type="text" class="fields" id="field9" name="mark"/>
            </div>
            <div class="customizePage">
                <label for="field10">Стипендия: </label>
                <input type="text" class="fields" id="field10" name="stipend"/>
            </div>
            <hr>
            <input class="buttons" type="submit" name="submit" value="Execute">
            <button class="buttons">
                <a href="../index.php" >Cancel</a>
            </button>
        </form>
    </body>
</html>