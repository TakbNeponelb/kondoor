<?php

// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kondoor";

try{
    $connection = new mysqli($servername, $username, $password, $dbname);
    $select_db = mysqli_select_db($connection, $dbname);
} catch(mysqli_sql_exception $e){
    $fsmsg = "Ошибка с подключением!";
}

