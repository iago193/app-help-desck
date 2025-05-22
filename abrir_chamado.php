<?php 
    require_once("validar_acesso.php")
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

        <form action="registra_chamado.php" method="post">
            <div class="container-abrir-chamado">
                <h2>Abertura de chamados</h2>
                <div class="abrir-chamado">
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" placeholder="Titulo">

                    <label for="categoria">Escolha a categoria:</label>
                    <select name="categoria" id="categoria">
                        <option value="#">Categoria</option>
                        <option value="Teste-1">Teste 1</option>
                        <option value="Teste-2">Teste 2</option>
                        <option value="Teste-3">Teste 3</option>
                    </select>


                    <label for="descricao"> Descrição</label>
                    <textarea name="descricao" id=""></textarea>
                </div>

              <div class="button-titulo">
                <button>
                    <a href="home.php">Voltar</a>
                </button>
                <button style="background-color: #00e4ec;">Abrir</button>
              </div>

            </div>
        </form>
    
</body>
</html>