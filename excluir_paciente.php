<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title></title>
         <style>
        body {
            background-image:url(fundo.jpg);
        }
    </style>
    </head>
    <body>
        <?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$sql = "DELETE FROM usuarios WHERE id='$id'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Usuário apagado com sucesso</p>";
		header("Location: listar_paciente.php");
                ?><script>
            
            window.alert("Cadastro com sucesso");
        
        </script><?php
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o usuário não foi apagado com sucesso</p>";
		header("Location: listar_paciente.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário</p>";
	header("Location: listar_paciente.php");
}
    ?>
    </body>
</html>
