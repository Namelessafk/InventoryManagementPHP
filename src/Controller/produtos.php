<?php
include 'meta.php';

$requestData=$_REQUEST;



function count_all_data($pdo){
    $query = "SELECT * FROM produto";
    $statement = $pdo->prepare($query);
    $statement -> execute();
    return $statement->rowCount();
}

if (!$pdo) {
    echo "conexão não existe.";
} else {
    $sql = $pdo->prepare("SELECT *
    FROM 
    produto");
    $sql->execute();
    $result = $sql->fetchAll();

    $data = array();
    
    foreach($result as $row){
        $dados = array();
        $dados[] = $row['Descricao'];
        $dados[] = $row['CodigoDeBarra'];

        $data[] = $row;
    }
    $output = array(
        'draw'=> intval($_POST['draw']),
        'recordsTotal' => count_all_data($pdo),       
        "data"=>$data);

    echo json_encode($output);
    
}


?>