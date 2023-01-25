<?php
require "config.php";

$name = filter_input(INPUT_POST,"name");
$email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);

if($name && $email){

    $sql = $pdo -> prepare("INSERT INTO usuarios (nome,email) VALUES (:name :email)");
    $sql

}else{
    header("location: adicionar.php");
    exit;
}
?>