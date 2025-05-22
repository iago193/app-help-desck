<?php 
    require_once("validar_acesso.php")
?>




<?php 

    //chamados
    $chamados = [];

    //abrir o arquivo.hd
    $arquivo = fopen('../../app_help_desck/arquivo.hd', 'r');

    //enquanto houver registros (linhas) a serem recuperados
    while(!feof($arquivo)) { //testa pelo fim de um arquivo
        //linhas
       $registro = fgets($arquivo);

       $chamados[] = $registro;

    }

    //fechar o arquivo aberto
    fclose($arquivo);
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

        <div class="container-chamado">
            <div class="chamado">
                <div class="titulo-topo">
                    <h5>Consultar chamado</h5>
                </div>

                <?php foreach($chamados as $chamado) {?>            

                <?php 
                    $chamados_dados = explode('#', $chamado);


                    //
                    if($_SESSION['perfil_id'] == 2) {
                       //só vamos exibir o chamado, se ele foi criado pelo usuário
                       if($_SESSION['id'] != $chamados_dados[0]) {
                            continue;
                       }

                    }
                    if(count($chamados_dados) < 3) {
                        continue;
                    }
                ?>

                <div class="conteudo-chamdo">
                    <h2>Titulo chamado: <?=$chamados_dados[1]?></h2>
                    <h4>Categoria: <?=$chamados_dados[2]?></h4>
                    <p>Descrição do chamado: <?=$chamados_dados[3]?></p>
                </div>

                <?php } ?>

                <button onclick="window.location.href='home.php'">Voltar</button>
            </div>
        </div>
    
</body>
</html>