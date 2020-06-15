<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
    session_start(); 
        //Incluindo a conexão com banco de dados   
    include_once("conexao.php");    
    //O campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['email'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);

            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_usuarios = "SELECT * FROM administracao WHERE email = '$usuario' && senha = '$senha'";
        $resultado_usuarios = mysqli_query($conn, $result_usuarios);
        $resultado = mysqli_fetch_assoc($resultado_usuarios);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
            $_SESSION['id'] = $resultado['id'];
            $_SESSION['nome'] = $resultado['nome'];
            $_SESSION['email'] = $resultado['email'];
            $_SESSION['senha'] = $resultado['senha'];
            header("Location: homeAdm.php");
            
        }else{    
            //Váriavel global recebendo a mensagem de erro
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: loginAdm.php");
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: loginAdm.php");
    }
?>
    </body>
</html>
