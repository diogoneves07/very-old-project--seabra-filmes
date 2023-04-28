<?php 

include('../Files-Add/canectar-ao-banco-d-neves-developer.php');
 $filme=$_POST['filme'];

 $ano=$_POST['ano'];
 $genero=$_POST['genero'];
 $atores=$_POST['atores'];
 $descricao=$_POST['descricao'];
 $capa_filme=$_FILES['capa_filme'];
 $capa_arquivo_nome=$_POST['capa_arquivo_nome'];
 $valor=$_POST['valor'];
 $data_insersao=$_POST['data_insersao'];

 

 $NOME_DA_MIDIA=$capa_arquivo_nome;



        $NOME_DA_MIDIA=preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/ç/","/Ç/"),explode(" ","a A e E i I o O u U n N c C"),$NOME_DA_MIDIA);

        $NOME_DA_MIDIA=preg_replace('/[^ _[:alnum:]-]/', '',$NOME_DA_MIDIA);


        $NOME_DA_MIDIA=str_replace("_","-",$NOME_DA_MIDIA);


        $NOME_DA_MIDIA=str_replace(" ","-",$NOME_DA_MIDIA);


        $NOME_DA_MIDIA=str_replace("---","-",$NOME_DA_MIDIA);


        $NOME_DA_MIDIA=str_replace("--","-",$NOME_DA_MIDIA);



$DATA_TIME=explode(" ",$NOME_DA_MIDIA."-".$data_insersao);

$DATA_TIME=implode("-",$DATA_TIME);

 $DATA_TIME=explode(":",$DATA_TIME);

 $DATA_TIME=implode("-",$DATA_TIME);

 $DATA=$data_insersao;

 $TIPO_DE_ARQUIVO=explode(".",$capa_filme['name']);


         
        
         $foto = $capa_filme;

        $imagem=$foto;

 $name=$capa_arquivo_nome;

 $name_2 = $NOME_DA_MIDIA;
 $name=$name_2."G";
        if ($imagem['type']=="image/jpeg") { if(imagecreatefromjpeg($imagem['tmp_name'])==true){ $img = imagecreatefromjpeg($imagem['tmp_name']);

} $name_com_estensao=$name.".jpg";

 $NOME=$name_2;


} else if ($imagem['type']=="image/gif") { if(imagecreatefromgif($imagem['tmp_name'])==true){ $img = imagecreatefromgif($imagem['tmp_name']);

} 
$name_com_estensao=$name.".gif";

 $NOME=$name_2;

} else if ($imagem['type']=="image/png") { if(imagecreatefrompng($imagem['tmp_name'])==true){ $img = imagecreatefrompng($imagem['tmp_name']);

}  $name_com_estensao=$name.".png";


} $x = imagesx($img);

 $y = imagesy($img);

 $LARGURA=$x;

 $ALTURA=$y;

 $autura =$y;

 $largura=$x;

 $nova = imagecreatetruecolor($largura, $autura);
$LOCAL_PARA_GURDAR_IMAGENS='../filmes';
 imagecopyresampled($nova, $img, 0, 0, 0, 0, $largura, $autura, $x, $y);

 if ($imagem['type']=="image/jpeg") { $local="$LOCAL_PARA_GURDAR_IMAGENS/$name".".jpg";

        imagejpeg($nova, $local);

} else if ($imagem['type']=="image/gif") { $local="$LOCAL_PARA_GURDAR_IMAGENS/$name".".gif";

        imagejpeg($nova, $local);

} else if ($imagem['type']=="image/png") { $local="$LOCAL_PARA_GURDAR_IMAGENS/$name".".png";

        imagejpeg($nova, $local);

} imagedestroy($img);

 imagedestroy($nova);

 $capa_arquivo_nome=$name_com_estensao;


$insert = $CONECTAR_A_BASE->prepare("INSERT INTO seabraFilmes(filme, ano, genero, atores, descricao, capa_arquivo_nome, valor, data_insersao) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");

 $insert->bindValue(1, $filme);

 $insert->bindValue(2, $ano);

 $insert->bindValue(3, $genero);

 $insert->bindValue(4, $atores);

 $insert->bindValue(5, $descricao);


 $insert->bindValue(6, $capa_arquivo_nome);

 $insert->bindValue(7, $valor);

 $insert->bindValue(8, $data_insersao);


 if($insert->execute()==true){ 

        exit(header("location: sistem-seabra-filmes.php?inserido=yes"));
}  ?>