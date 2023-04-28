<?php
include('Files-Add/canectar-ao-banco-d-neves-developer.php');

$cliente=$_POST['cliente'];
$contato=$_POST['contato'];
$endereco=$_POST['endereco'];
$data=$_POST['data'];
$valor=$_POST['valor'];
$id_produto=$_POST['id_produto'];




$insert = $CONECTAR_A_BASE->prepare("INSERT INTO pedidos(cliente, endereco, contatos, id_produto, valor, data_insersao) VALUES(?, ?, ?, ?, ?, ?)");

 $insert->bindValue(1, $cliente);

 $insert->bindValue(2, $endereco);

 $insert->bindValue(3, $contato);

 $insert->bindValue(4, $id_produto);

 $insert->bindValue(5, $valor);


 $insert->bindValue(6, $data);

 


 if($insert->execute()==true){ 

        exit(header("location: index.php?pedido-feito=yes"));
} 

?>