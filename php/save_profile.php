<?php
    session_start();
    include ("data_base.php");


if (isset($_POST['done'])) {


$surname = $_POST["surname"];
$sex = $_POST["sex"];
$login = $_SESSION['login'];


 $sql = mysql_query("UPDATE users SET 
    name = '{$name}',
    surname = '{$surname}',
    sex = '{$sex}'
    WHERE login = '{$login}'");






}
    ?>