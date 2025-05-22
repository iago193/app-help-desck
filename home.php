<?php 
    require_once("validar_acesso.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP Help Desck</title>
    <link rel="stylesheet" href="css/folha-de-estilo.css">

</head>
<body>
    
        <header>
            <div>
                <img src="imagens/logo.png" alt="">
                <h2>App Help Desck</h2>
            </div>
            <div class="btn-sair">
                <ul>
                    <li><a href="logoff.php">Sair</a></li>
                </ul>
            </div>
        </header>

        <main>
            <div class = "menu-container">
                <div class = "menu">
                    <div>
                        <h2>Menu</h2>
                    </div>
                    <div class = "container-menu-conteudo">
                        <div class = "menu-conteudo-1">
                            <a href="abrir_chamado.php">
                                <img src="imagens/formulario_abrir_chamado.png" alt="">
                            </a>
                        </div>
                        <div class = "menu-conteudo-2">
                            <a href="consultar_chamado.php">
                                <img src="imagens/formulario_consultar_chamado.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    
</body>
</html>