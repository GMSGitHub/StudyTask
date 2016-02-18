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
                <input type="text" class="fields" id="field5" name="group"/>
            </div>
            <div class="customizePage">
                <label for="field6">Преподаватель: </label>
                <input type="text" class="fields" id="field6" name="teacher"/>
            </div>
            <div class="customizePage">
                <label for="field7">Дисциплина: </label>
                <input type="text" class="fields" id="field7" name="discipline"/>
            </div>
            <div class="customizePage">
                <label for="field8">Дата Экзамена: </label>
                <input type="text" class="fields" id="field8" name="exam_date"/>
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
            <button class="buttons" name="postButton">
                <a href="task2web_page_insert.php">Execute</a>
            </button>
            <button class="buttons">
                <a href="../index.php" >Cancel</a>
            </button>
        </form>
    </body>
</html>