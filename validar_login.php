    <?php 

        session_start();


        //variavel que verifica se a autenticação foi realizada
        $usuario_autenticado = false;
        $usuario_id = null;
        $usuario_perfil_id = null;

        $perfis = [1 => 'adm', 2 => 'user'];

        // Usuarios do sistema
        $usuarios_app = [
            ['id' => 1, 'email' => 'iago.silva6969@gmail.com', 'senha' => '12345', 'perfil_id' => 1],
            ['id' => 2, 'email' => 'iago.bruno6969@gmail.com', 'senha' => '12345', 'perfil_id' => 2]
        ];


        // fazer o teste se existe um email e senha compativel
        foreach($usuarios_app as $user) {
            
            if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
                $usuario_autenticado = true;
                $usuario_id = $user['id'];
                $usuario_perfil_id = $user['perfil_id'];
            }
        }

        if($usuario_autenticado) {
            $_SESSION['autenticado'] = 'sim';
            $_SESSION['id'] = $usuario_id;
            $_SESSION['perfil_id'] = $usuario_perfil_id;
            header('Location: home.php');
        } else {
            header('Location: index.php?login=erro');
        }




        //  echo '<hr/>';
        //  echo $_GET['email'];
        //  echo $_GET['senha'];


        // echo '<hr/>';
        // echo $_POST['email'];
        // echo $_POST['senha'];

    ?>