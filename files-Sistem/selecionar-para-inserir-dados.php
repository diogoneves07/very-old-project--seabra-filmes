<?php 

$DIA=date('d'); $MES=date('m'); $ANO=date('Y'); $HORA=date('H'); $MINUTOS=date('i'); $SEGUNDOS=date('s'); $DATE_PARA_BD=$ANO."-".$MES."-".$DIA." ".$HORA.":".$MINUTOS.":".$SEGUNDOS; ?>
 <form class="STTRI_POSTS" name="STTRI_POSTS" action="inserindo-dados-imagens.php" method="POST" enctype="multipart/form-data" >
 <h3>Inserindo Filmes...</h3>
 <div class="STTRI_POTS_INPUT" >
     <label>
    <span>
    filme: </span>
<input class="Tema" type="text" name="filme" placeholder="Nome do filme." required="" autofocus/>
</label>


<label>
    <span>
    ano: </span>
<input class="Tema" type="text" name="ano" placeholder="Ano de lançamento." required="" autofocus/>
</label>



<label>
    <span>
    genero: </span>
<input class="Tema" type="text" name="genero" placeholder="Drama, Terror..." required="" autofocus/>
</label>




<label>
    <span>
    atores: </span>
<input class="Tema" type="text" name="atores" placeholder="Pricipais atores." required="" autofocus/>
</label>








<label>
    <span>
    valor: </span>
<input class="Tema" type="text" name="valor" placeholder="Preço do filme." required="" autofocus/>
</label>


<article>
    <span style='margin-left:7%;'>
    descrição: </span>
    <br>
    <textarea name='descricao'></textarea>
</article>

 <label>
    <span>
    data:</span>
<input type="text" name="data_insersao" required="" placeholder="Formato aceito ex: 2019-02-06 16:03:35" value="<?php echo $DATE_PARA_BD; ?>
" placeholder="OBS:Insira corretamente!"/>
</label>

 <label>
    <span>
    Nome do arquivo:</span>
<input type="text" maxlength="165" placeholder="Evite caracteres especiais." name="capa_arquivo_nome" required="" />
</label>
 <label>
    <span>
    mídia - png, jpg, gif:</span>
<input type="file" class="INPUT_TIPE_FILE" name="capa_filme" value="diogo" required="" />
</label>
 </div>
 <input class="INPUT_EMVIAR_DADOS_POTS"  style='width:200px;height:50px;' type="submit" value="Concluir" name="ENVIAR_POST">
 </form>
