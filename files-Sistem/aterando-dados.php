<?php
if(isset($_GET['alterando']) && !empty($_GET['alterando']))
{
    try {
        $DADOS = $CONECTAR_A_BASE->prepare('SELECT * FROM seabraFilmes ORDER BY data_insersao DESC');
        if ($DADOS->execute()) {
         foreach($DADOS as $VALORES_DOS_REGISTROS) {
             if($VALORES_DOS_REGISTROS[9]==$_GET['alterando'])
             {
           
            echo'
            <form class="STTRI_POSTS" name="STTRI_POSTS" action="exec-alterar.php" method="POST" enctype="multipart/form-data" >
            <h3>Alterando Filmes...</h3>
            <div class="STTRI_POTS_INPUT" >
                <label>
               <span>
               filme: </span>
           <input class="Tema" type="text" name="filme" placeholder="Nome do filme." value="'.$VALORES_DOS_REGISTROS[0].'" required="" autofocus/>

           <input type="hidden" name="id"  value="'.$_GET['alterando'].'" />
           </label>
           
           
           <label>
               <span>
               ano: </span>
           <input class="Tema" type="text" name="ano" placeholder="Ano de lançamento." value="'.$VALORES_DOS_REGISTROS[1].'" required="" autofocus/>
           </label>
           
           
           
           <label>
               <span>
               genero: </span>
           <input class="Tema" type="text" name="genero" placeholder="Drama, Terror..." value="'.$VALORES_DOS_REGISTROS[2].'" required="" autofocus/>
           </label>
           
           
           
           
           <label>
               <span>
               atores: </span>
           <input class="Tema" type="text" name="atores" placeholder="Pricipais atores." value="'.$VALORES_DOS_REGISTROS[3].'" required="" autofocus/>
           </label>
           
           
           
           
           
           
           
           
           <label>
               <span>
               valor: </span>
           <input class="Tema" type="text" name="valor" placeholder="Preço do filme." value="'.$VALORES_DOS_REGISTROS[7].'" required="" autofocus/>
           </label>
           
           
           <article>
               <span style="margin-left:7%;">
               descrição: </span>
               <br>
               <textarea name="descricao">'.$VALORES_DOS_REGISTROS[4].'</textarea>
           </article>
           

            </div>
            <input class="INPUT_EMVIAR_DADOS_POTS"  style="width:200px;height:50px;" type="submit" value="Concluir" name="ENVIAR_POST">
            </form>
           ';
             }
         }
        }
       }
       catch(PDOException $e) {
    
       }
    
    }
?>