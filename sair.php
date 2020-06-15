<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
    session_start();   
    unset(
        $_SESSION['id'],
        $_SESSION['nome'],
        $_SESSION['email'],
        $_SESSION['senha']
    );  
    $_SESSION['logindeslogado'] = "Deslogado com sucesso";
    //redirecionar o usuario para a página de login
    header("Location: Index.php");
?>
    </body>
</html>
