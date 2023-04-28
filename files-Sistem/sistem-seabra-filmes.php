<?php
session_start();
include("../Files-Add/canectar-ao-banco-d-neves-developer.php");

?>

<!DOCTYPE html>
    <html>
        <head>
            <title>
                SISTEMA SEABRA - FILMES...
            </title>
            
            <meta name="viewport" content="width=440" >
            <link rel="stylesheet" type="text/css" href="../css-boss-diogo-developer.css" />
            <script>

                function confirmar(filme)
                {
                     var confirmar=confirm('Tem certeza que deseja apagar o filme?');
                     if(confirmar==true)
                     {
                         window.location.href=('apagando.php?apagar='+filme);
                     }
                }
                </script>

        </head>
        <body>
            <header id="HEADER" >
                <div class="LOGO_MARCA_E_MENU" >
                    <div class="LOGO_MARCA_E_MENU_FIXED" >
                        <div class="LOGO_MARCA" style='float:left;width:100%;text-align:center;'>
                        <a href="index.php" >
                            <h3 style='float:left;width:100%;text-align:center;'>
                                <span>
                                SEABRA - FILMES
                                </span>
                            </h3>
                        </a>
                        </div>
                        
                    </div>
                </div>
            </header>
            
            <section id="SECTION" >
                <div class='sistema'>
                <div class='mensagens'>
            <strong>Menssagens do sistema...</strong>
            <br>
            <?php
            echo '<p style="color:blue;">';
            if(isset($_GET['apagado']))
            {
                echo 'O filme foi apagado com susseso!';
            }
            else if(isset($_GET['inserido']))
            {
                echo 'O filme foi inserido com susseso!';

            }
            else if(isset($_GET['alterado']))
            {
                echo 'O filme foi alterado com susseso!';

            }
            else
            {
                echo 'Olá, seja bem vindo!';
            }
            echo '</p>';


            ?>

        </div>
                <fieldset>
                <?php
            
                
                if(!isset($_POST['submetendo']) && !isset($_SESSION['user']))
            {
                
            
            ?>
                    <h3>Login</h3>
                    <form action='' method='post' class='login-user'>
                    <label>Nome: <input type='name' name='name' /></label>

                    <label>Senha:<input type='password' name='password'/></label>

                    <button type='submit' name='submetendo' value='yes'>Enviar</button>
                    </form>

                    <?php
            
              
            }
            else
            {
                $user='eu';
                $senha='12345';
                if( isset($_SESSION['user']) || $user==$_POST['name'] && $senha==$_POST['password'])
                {
                    $_SESSION['user']=$user;
                    $_SESSION['password']=$senha;
                ?>
 <h3>Ações</h3>
                    <form action='' method='post'>
                    <button type='submit' name='inserir'>
                        <?php
                        include('imagens-do-sistema/alterar.svg');
                        ?>
                        <span>Inserir filme...</span>
                    </button>
                    <button type='submit' name='alterar'>
                    <?php
                        include('imagens-do-sistema/update.svg');
                        ?>
                        <span>Altera filme...</span>
                    </button>
                    <button style='padding-left:15px;' type='submit' name='apagar'>
                    <?php
                        include('imagens-do-sistema/delete.svg');
                        ?>
                        <span>Apagar filme...</span>
                    </button>

                    <button style='padding-left:15px;' type='submit' name='pedido'>
                    <?php
                        include('imagens-do-sistema/gallery.svg');
                        ?>
                        <span>Pedidos...</span>
                    </button>
                </form>



                <?php
                }
                else
                {
                    ?>
                     <h3>Login</h3>
                    <form action='' method='post' class='login-user'>
                    <label>Nome: <input type='name' name='name' /></label>

                    <label>Senha:<input type='password' name='password'/></label>

                    <button type='submit' name='submetendo' value='yes'>Enviar</button>
                    </form>
                    <?php
                    session_destroy();
                }

            }
            
            ?>
            
            
                </fieldset>
                <?php
                if(isset($_POST['inserir']))
                {
                    
                    echo'<fieldset>';
                    include('selecionar-para-inserir-dados.php');
                    echo'</fieldset>';

                }
                else if(isset($_GET['alterando']) && !empty($_GET['alterando']) && !isset($_POST['alterar']) && !isset($_POST['apagar']) && !isset($_POST['pedido']) )
                {
                    echo'<fieldset>';
                    include('aterando-dados.php');
                    echo'</fieldset>';

                }
               
                else if(isset($_POST['apagar']))
                {
                  


        
                   
                    echo'<article><div class="filmes">
                    <div>';
                    try {
                        $DADOS = $CONECTAR_A_BASE->prepare('SELECT * FROM seabraFilmes ORDER BY data_insersao DESC');
                        if ($DADOS->execute()) {
                         foreach($DADOS as $VALORES_DOS_REGISTROS) {
                             
                            echo "<figure onclick='confirmar($VALORES_DOS_REGISTROS[9])'>
                            <img src='../filmes/$VALORES_DOS_REGISTROS[6]' />
                            <figcaption>
                            <span>Filme: $VALORES_DOS_REGISTROS[0]</span>
                            <span>Lançamento: $VALORES_DOS_REGISTROS[1]</span>
                            <span>Género: $VALORES_DOS_REGISTROS[2]</span>
                            </figcaption>
                            <hr>
                            </figure>";
                          
                         }
                        }
                       }
                       catch(PDOException $e) {
                    
                       }
                    echo' </div>
                    </div></article>';

                }
                else if(isset($_POST['pedido']))
                {
                  


        
                   
                    echo'<article><div class="filmes">
                    <div>';
                    try {
                        $DADOS = $CONECTAR_A_BASE->prepare('SELECT * FROM pedidos ORDER BY data_insersao DESC');
                        if ($DADOS->execute()) {
                         foreach($DADOS as $VALORES_DOS_REGISTROS) {
                             
                            echo "<figure>
                            <figcaption>
                            <span>Cliente: $VALORES_DOS_REGISTROS[0]</span>
                            <span>Endereço: $VALORES_DOS_REGISTROS[1]</span>
                            <span>Contatos: $VALORES_DOS_REGISTROS[2]</span>
                            <span>Filme: $VALORES_DOS_REGISTROS[3]</span>
                            <span>Valor: $VALORES_DOS_REGISTROS[4]</span>
                            <span>Data: $VALORES_DOS_REGISTROS[5]</span>
                            </figcaption>
                            </figure>";
                          
                         }
                        }
                       }
                       catch(PDOException $e) {
                    
                       }
                    echo' </div>
                    </div></article>';

                }
               
                else if(isset($_POST['alterar']))
                {
                  


        
                    echo'<article><div class="filmes">
                    <div>';
                    try {
                        $DADOS = $CONECTAR_A_BASE->prepare('SELECT * FROM seabraFilmes ORDER BY data_insersao DESC');
                        if ($DADOS->execute()) {
                         foreach($DADOS as $VALORES_DOS_REGISTROS) {
                             
                            echo "<a href='sistem-seabra-filmes.php?alterando=$VALORES_DOS_REGISTROS[9]'>
                            <figure>
                            <img src='../filmes/$VALORES_DOS_REGISTROS[6]' />
                            <figcaption>
                            <span>Filme: $VALORES_DOS_REGISTROS[0]</span>
                            <span>Lançamento: $VALORES_DOS_REGISTROS[1]</span>
                            <span>Género: $VALORES_DOS_REGISTROS[2]</span>
                            </figcaption>
                            <hr>
                            </figure></a>";
                          
                         }
                        }
                       }
                       catch(PDOException $e) {
                    
                       }
                    echo' </div>
                    </div></article>';

                }
               
                ?>
                </div>
                
                
            </section>
            
        </body>
    </html>
