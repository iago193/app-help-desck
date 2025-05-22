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
        </header>

        <div class = "login-container">
            <div class = "login">
                    <div>
                        <h2>Login</h2>
                    </div>
                    <form action="validar_login.php" method="post">
                        <div class = "login-input">
                            <input name="email" type="email" placeholder="Digite seu e-mail">
                            <input name="senha" type="password" placeholder="Digite sua senha">

                            <?php
                                if(isset($_GET['login']) && $_GET['login'] == 'erro') {
                            ?>

                            <div style = "color: red;">
                                    Usuario ou senha inválidos(s)
                            </div>

                            <?php } ?>


                            <?php
                                if(isset($_GET['login']) && $_GET['login'] == 'erro2') {
                            ?>

                            <div style = "color: red;">
                                    Faça login antes de acessar as páginas protegitas
                            </div>

                            <?php } ?>

                            <button type = "submit">Entrar</button>
                        </div>
                    </form>
            </div>
        </div>
    
</body>
</html>