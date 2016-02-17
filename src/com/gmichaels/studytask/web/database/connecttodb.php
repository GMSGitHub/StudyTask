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
            <a href="testconnect.php">Back</a>
        </button>
    </p>
    <hr>
    <h3>
        <?php
        if( isset( $_POST['test_button'] ) )
            echo $_POST['user'];
        define(HOST, $_POST['url']);
        define(USERNAME, $_POST['user']);
        define(PASSWORD, $_POST['pass']);
        define(DATABASE, $_POST['db_name']);
        $Connect = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
        if (!$Connect) exit('Error connect to ['.DATABASE."]");
        if ($Connect) exit('Connect to ['.DATABASE."] complete.");
        ?>
    </h3>
</form>
</body>
</html>