<?php
                        
                        include("Files-Add/canectar-ao-banco-d-neves-developer.php");
 ?>

<!DOCTYPE html>
    <html>
        <head>
            <title>
            SEABRA - FILMES, OS MELHORES FILMES, TODOS OS GÉNEROS, PRICIPAIS LANÇAMENTOS... VOCÊ ENCONTRA AQUI!
            </title>
            <meta name="viewport" content="width=440" >
            <link rel="stylesheet" type="text/css" href="css-boss-diogo-developer.css" />
        </head>
        <body>
            <header id="HEADER" >
                <div class="LOGO_MARCA_E_MENU" >
                    <div class="LOGO_MARCA_E_MENU_FIXED" >
                        <div class="LOGO_MARCA">
                        <a href="index.php" >
                            <h3>
                                <span>
                                SEABRA - FILMES
                                </span>
                            </h3>
                        </a>
                        </div>
                        <div class='itens-menu'>
                            <span onclick="SCROLL_ROLANTE_DIOGO_NEVES_DEV_F('#SECTION')" >
                                FILMES 
                            </span>
                            <span onclick="SCROLL_ROLANTE_DIOGO_NEVES_DEV_F('.iframe-localizacao')" >
                                SOBRE 
                            </span>
                        </div>
                    </div>
                </div>
            </header>
			<div class='logo'>
            <img   src="files-Medias/incones/3.jpg" />
           
            </div>
            <section id="SECTION" >

                <article>
                    <h3 class="MENSAGEM_DE_BOAS_VINDAS">
                    SEABRA - FILMES, OS MELHORES FILMES, TODOS OS GÉNEROS, PRICIPAIS LANÇAMENTOS... VOCÊ ENCONTRA AQUI!
                    </h3>
                    <?php
                    if(isset($_GET['filme-selecionado']) && !empty($_GET['filme-selecionado']))
                    {
                   
                        
 
                        try {
    $DADOS = $CONECTAR_A_BASE->prepare('SELECT * FROM seabraFilmes ORDER BY data_insersao DESC');
    if ($DADOS->execute()) {
     foreach($DADOS as $VALORES_DOS_REGISTROS) {
         if($VALORES_DOS_REGISTROS[9]==$_GET['filme-selecionado'])
         {
         
        echo"<div class='dados-filme'>
       
        <li>
            <strong>Filme:</strong> $VALORES_DOS_REGISTROS[0]
            </li>
            <li>
            <strong>Capa do filme:</strong> <br><img src='filmes/$VALORES_DOS_REGISTROS[6]'/>
            </li>
            <li>
            <strong>Lançado em:</strong> $VALORES_DOS_REGISTROS[1]
            </li>
           
            <li>
            <strong> Genéro:</strong> $VALORES_DOS_REGISTROS[2]
            </li>

            <li>
            <strong>Elenco:</strong> $VALORES_DOS_REGISTROS[3]
            </li>

            <li>
                <strong>Descrição:</strong> $VALORES_DOS_REGISTROS[4]
                
            </li>
            
            <li>
            <strong>Preço:</strong> $VALORES_DOS_REGISTROS[7]
            </li>
</div>";
         }
     }
    }
   }
   catch(PDOException $e) {

   }
}
?>
                                   <strong class='filmes-d'>Filmes Disponiveis!</strong>
         
                    <div class='filmes'>
                        <div>
                        <?php
                        
 
                        try {
    $DADOS = $CONECTAR_A_BASE->prepare('SELECT * FROM seabraFilmes ORDER BY data_insersao DESC');
    if ($DADOS->execute()) {
     foreach($DADOS as $VALORES_DOS_REGISTROS) {
         
        echo"<a href='index.php?filme-selecionado=$VALORES_DOS_REGISTROS[9]'>
        <figure>
        <img src='filmes/$VALORES_DOS_REGISTROS[6]' />
        <figcaption>
        <span>Filme: $VALORES_DOS_REGISTROS[0]</span>
        <span>Lamçamento: $VALORES_DOS_REGISTROS[1]</span>
        <span>Género: $VALORES_DOS_REGISTROS[2]</span>
        </figcaption>
        <hr>
        </figure></a>";
      
     }
    }
   }
   catch(PDOException $e) {

   } ?>


                        
                        </div>
                </div>
                <div class='localizacao'>
                
                <p>
                    <p>
                    O site foi desenvolvido por uma equipe de estudantes do IFBA - Seabra
                    </p>

                    <p>Localização - Google Maps;
                    </p>

                    
                   
                </p>
                    <iframe  class='iframe-localizacao' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.0639793401297!2d-41.62132868518541!3d-12.243947291336173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x769c038012868ff%3A0xf4e1a30a9eba7263!2sSindicato+dos+Trabalhadores+Rurais+de+Iraquara!5e0!3m2!1spt-BR!2sbr!4v1551651857680" allowfullscreen>
                    </iframe>
                    </div>
                </article>
                
            </section>
            <footer id="FOOTER">
                
                <div class="RODAPE_MENU">
                    <span >
                        <a href="index.php" title="Pagina inicial" style='color:white;'>
                            PAGINA INICIAL
                        </a>
                    </span>
                    <span onclick="SCROLL_ROLANTE_DIOGO_NEVES_DEV_F('#SECTION')" >
                        FILMES 
                    </span>
                    <span onclick="SCROLL_ROLANTE_DIOGO_NEVES_DEV_F('.iframe-localizacao')" >
                        SOBRE 
                    </span>
                </div>
               
                <li class="URL_RODAPE" >
                    © Todos os direitos reservados
                </li>
            </footer>
            
            <script src="java-script-boss.js"></script>
        </body>
    </html>
