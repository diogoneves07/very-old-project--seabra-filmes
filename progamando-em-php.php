<?php

if(isset($_GET['enviar']))
{
    function teste($part1,$part2)
    {
     echo $part1+$part2;
    }
    $get1= (int) $_GET['part1'];
    $get2= (int)$_GET['part2'];
    
    teste($get1,$get1);
}



?>
<form method="get">

<input type="text" name="part2">
<input type="text" name="part1">
<input type="submit" name="enviar">
</form>