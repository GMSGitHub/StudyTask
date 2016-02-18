<?php
$DB = @mysql_connect('localhost', 'mysql', 'mysql');
$TABLE = @mysql_select_db('web_schema', $DB);

if (!($DB AND $TABLE)) {

    echo 'Go Away Hacker :(';

}
?>
