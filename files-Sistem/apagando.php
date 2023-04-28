<?php
session_start();
include("../Files-Add/canectar-ao-banco-d-neves-developer.php");


try { $DADOS = $CONECTAR_A_BASE->prepare("DELETE FROM seabrafilmes WHERE id=?");

    $DADOS->bindValue(1, $_GET['apagar']);

 if ($DADOS->execute()) 
 {
    exit(header("location: sistem-seabra-filmes.php?apagado=yes"));

} 
    
 } catch (PDOException $erro) { 
    

    } 
?>