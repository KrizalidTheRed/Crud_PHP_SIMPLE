<?php
require 'config.php';

$usuario = [];

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');

if($id && $nome && $email){
    $sql = $pdo->prepare("DELETE usuario VALUE nome = :nome, email = :email WHERE id = :id");
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':email',$email);
    $sql->bindValue(':id',$id);
    $sql->execute();

    header("Location: index.php");

    exit;
}
else{
    header("Location: index.php");
    exit;
}