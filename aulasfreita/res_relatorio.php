<?php

$nome           = $_POST["nome"];
$escolaridade   = $_POST["escolaridade"];
$sexo           = $_POST["sexo"];

echo"<h5>seu nome é ".$nome."</h5></br>";
echo"<h5> $nome tem escolaridade  ensino ".$escolaridade.".</h5></br>";
echo"<h5>".$nome." seu sexo é ".$sexo.".</h5></br>";

foreach($_POST["hobby"] as $value){
    echo $value."<br>";
}

