<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'includes/rb.php';

//Подключение к БД
R::setup( 'mysql:host=localhost; dbname=g90239on_chat', 'g90239on_chat', '3OzD*wlY' );

//Получение инфы
$name = $_POST['name'];
$date = $_POST['date'];
$mes = $_POST['text'];

//Запись в БД
$user = R::dispense('user');
$user->name = $name;
$user->date = $date;
$user->mes = $mes;
R::store($user);

?>