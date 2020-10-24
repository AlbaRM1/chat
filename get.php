<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Подключение к БД
$db = mysqli_connect("localhost","g90239on_chat","3OzD*wlY","g90239on_chat");
$sql = mysqli_query($db,"SELECT * FROM `user`");


while($res = mysqli_fetch_array($sql)){
    $name = $res["name"];
    $mes = $res["mes"];
    $date = $res["date"];

    echo '<div class="message"><img src="" class="img1"><div class="name1">'.$name.'</div><div class="date">'.$date.'</div><div class="mess">'.$mes.'</div></div>';
}

?>