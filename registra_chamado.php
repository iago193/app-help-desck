<?php 

    // echo '<pre>';
    // print_r($_POST);
    // echo '<pre/>';

    session_start();

    
    //estamos trabalhando na montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    //implode('#', '$_POST');


    
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria. '#' . $descricao . PHP_EOL;

    //abrindo arquivo
    $arquivo = fopen('arquivo.hd', 'a');
    //escrevendo o texto
    fwrite($arquivo, $texto);
    //fechando o arquivo
    fclose($arquivo);

    //print_r($texto);

    header('Location: abrir_chamado.php');
?>