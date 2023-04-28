<?php
$PAGINA="canectar-ao-banco-d-neves-developer.php";
if(basename($_SERVER["PHP_SELF"])==$PAGINA)
{
	exit(header("location:https:www.sttriraquara.com"));
}
try 
{
	$CONECTAR_A_BASE = new PDO("mysql:host=localhost;dbname=seabrafilmes", "root", "");
	$CONECTAR_A_BASE->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e) 
{
	echo $e;
}
?>