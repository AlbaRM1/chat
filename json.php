
[
<?php
$db = mysqli_connect("localhost","046460609_cod1","asd123asd","eduard1993_cod1");
$sql = mysqli_query($db,"SELECT * FROM `table1`");

while($res = mysqli_fetch_array($sql)){
    $id = $res["id"];
    $prof = $res["prof"];
    $dat = $res["dat"];
    $s = $res["st"];
    $nm = $res["name"];
    $img = $res["img"];

echo <<<html
{
            "id":"$id",
            "pr":"$prof",
            "d":"$dat",
            "st":"$s",
            "nm":"$nm",
            "img":"$img"
},
html;
}

?>



{
            "id":"",
            "pr":"",
            "d":"",
            "st":"",
            "nm":"",
            "img":""
}]