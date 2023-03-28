<?php
require 'config.php';

$usuario = [];

$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $pdo->prepare("SELECT * FROM usuario WHERE id = :id");
    $sql->bindValue(':id',$id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $usuario = $sql->fetch(PDO::FETCH_ASSOC);

    }
    else{
        header("Location: index.php");
        exit;
    }
}
?>

<h1>Editar</h1>
<form method="post" action="editar_action.php">
    <input type="hidden" name="id" value="<?=$usuario['id'];?>">
    <label>
       Nome: <input type="text" name="nome" value="<?=$usuario['nome'];?>">
    </label>
    <label>
       Email: <input type="email" name="email" value="<?=$usuario['email'];?>">
    </label>
    <input type="submit" value="Atualizar"/>
</form>