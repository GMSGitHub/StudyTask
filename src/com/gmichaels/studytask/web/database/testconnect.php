<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>StudyTask: Lab #1</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    </head>
    <body>
        <form class="main" action="connecttodb.php" method="POST">
            <div class="customizePage">
                <label for="field1">URL: </label>
                <input type="text" class="fields" id="field1" name="url"/>
            </div>
            <div class="customizePage">
                <label for="field2">USER: </label>
                <input type="text" class="fields" id="field2" name="user"/>
            </div>
            <div class="customizePage">
                <label for="field3">PASS: </label>
                <input type="text" class="fields" id="field3" name="pass"/>
            </div>
            <div class="customizePage">
                <label for="field4">DB: </label>
                <input type="text" class="fields" id="field4" name="db_name"/>
            </div>
            <p align="center">
                <button class="buttons" name="testButtons" >Test Connect</button>
            </p>
    </form>
</body>
</html>