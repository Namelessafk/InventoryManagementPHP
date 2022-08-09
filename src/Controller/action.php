<?php
include('meta.php');

if($_POST['action']=='edit'){
    $data = array(
        ':Descricao'=> $_POST['Descricao'],
        ':CodigoDeBarra'=> $_POST['CodigoDeBarra']
    );
    $query ="
    UPDATE produto
    SET Descricao = :Descricao,
    CodigoDeBarra = :CodigoDeBarra
    WHERE
    CodigoDeBarra = :CodigoDeBarra
    ";
    $statement = $pdo->prepare($query);
    $statement -> execute($data);
    echo json_encode($_POST);
}
if($_POST['action']=='delete'){
    $query ="
    DELETE FROM produto
    WHERE CodigoDeBarra ='".$_POST["CodigoDeBarra"]."'  
    ";
    $statement = $pdo->prepare($query);
    $statement ->execute();
    echo json_encode($_POST);
}




?>