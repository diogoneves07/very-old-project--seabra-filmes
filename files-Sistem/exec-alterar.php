<?php
include('../Files-Add/canectar-ao-banco-d-neves-developer.php');

$filme=$_POST['filme'];

$ano=$_POST['ano'];
 $genero=$_POST['genero'];
 $atores=$_POST['atores'];
 $descricao=$_POST['descricao'];
 
 $valor=$_POST['valor'];
 $id=$_POST['id'];
$insert = $CONECTAR_A_BASE->prepare("UPDATE seabraFilmes SET filme=?, ano=?, genero=?, atores=?, descricao=?, valor=? WHERE id=?");

 $insert->bindValue(1, $filme);

 $insert->bindValue(2, $ano);

 $insert->bindValue(3, $genero);

 $insert->bindValue(4, $atores);

 $insert->bindValue(5, $descricao);

 $insert->bindValue(6, $valor);

 $insert->bindValue(7, $id);


 if($insert->execute()==true)
 {
     

 }
 exit(header("location: sistem-seabra-filmes.php?alterado=yes"));

?>