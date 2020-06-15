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
    <body>
        <?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$sql = "SELECT * FROM usuarios WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row_usuario = mysqli_fetch_assoc($result);
?>
    <center><br><BR>
        <h1>Alterar Paciente</h1><br>   

	
		<form method="POST" action="alterar_paciente.php">
			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
			
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo" value="<?php echo $row_usuario['nome']; ?>"><br><br>

			<label>RG: </label>
			<input type="text" name="rg" placeholder="Digite o RG" value="<?php echo $row_usuario['rg']; ?>"><br><br>

			<label>Telefone: </label>
			<input type="text" name="telefone" placeholder="Digite o telefone" value="<?php echo $row_usuario['telefone']; ?>"><br><br>

			<label>CPF: </label>
			<input type="text" name="cpf" placeholder="Digite o CPF" value="<?php echo $row_usuario['cpf']; ?>"><br><br>
			
			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Digite o seu melhor e-mail" value="<?php echo $row_usuario['email']; ?>"><br><br>

			<label>Senha: </label>
			<input type="password" name="senha" placeholder="Digite a sua senha" value="<?php echo $row_usuario['senha']; ?>"><br><br>
			
                        <input type="submit" value="Alterar" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="listar_paciente.php">
                            <input type="submit" value="Voltar" class="btn btn-danger"></a>
		</form>
    </center>
    </body>
</html>
