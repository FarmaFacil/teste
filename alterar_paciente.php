
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title></title>
         <style>
        body {
            background-image:url(fundog.jpg);
        }
    </style>
    </head>
    <body><?php
       session_start();
include_once("conexao.php");
  
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
 
$sql = "UPDATE usuarios SET nome='$nome', rg='$rg', telefone='$telefone', cpf='$cpf', email='$email', senha='$senha', modified=NOW() WHERE id='$id'";
$result = mysqli_query($conn, $sql);
 
if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: listar_paciente.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: form_alterar_paciente?id=$id");
}
?>
  
    </body>
</html>
