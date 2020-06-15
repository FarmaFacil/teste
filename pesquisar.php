
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Administração</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
        body {
            background-image:url(fundog.jpg);
        }
        .container h2{
            text-align: center;
            
        }
        #tamanho{
            height: 100px;
        }
        .footer{
        padding-bottom: 20px; 
        background-color: #161616;
        padding-top:35px;
    }
    .footer-bottom{ 
        background-color: #161616;
    }
    
    .fa{
        font-size: 100px;
    }
    .popup{
				position: fixed;
				top: 0; bottom: 0; 
				left: 0; right:0;
				margin: auto;
				width: 70%;
				height: 70%;
				padding: 15px;
				border: solid 1px #4c4d4f;
				background: #f5f5f5;
				display: none;
			}
                        .popup img{
                            width: 20px;
                            height: 20px;
                        }
    
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="homeAdm.php">Farmácia Fácil</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"> <?php
    session_start();
    echo "Usuário: ". $_SESSION['nome'];    
?>
            </a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Fornecedor<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Adicionar</a></li>
            <li><a href="#">Recibos</a></li>
            <li><a href="#">Medicamentos</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Estoque<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Adicionar</a></li>
            <li><a href="#">Verificação</a></li>
            <li><a href="#">Histórico</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pacientes<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="listar_paciente.php">Listar</a></li>
            <li><a href="frm_paciente.php">Adicionar</a></li>
            <li><a href="pesquisar.php">Pesquisar</a></li>
          </ul>
        </li>
      </ul>
          
 <ul class="nav navbar-nav navbar-right">
     <li><a href="sairAdm.php"> <span class="glyphicon glyphicon-log-in"></span>&nbspDeslogar</a></li>
      </ul>
      

    </div>
  </div>
</nav>
    
<center><h1>Pesquisar Usuário</h1>
		
		<form method="POST" action="">
                    <div class="form-group">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome">
			
			<input name="SendPesqUser" type="submit" value="Pesquisar">
                        </form></div><br><br></center>
		
		<?php
                include_once 'conexao.php';
		$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
		if($SendPesqUser){
			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
			$result_usuario = "SELECT * FROM usuarios WHERE nome LIKE '%$nome%'";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
                        ?>
                        <table class="table table-dark table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Rg</th>
				<th>Telefone</th>
				<th>Cpf</th>
				<th>E-mail</th>
                                <th>Informações</th>
				
			</tr>
		</thead>
		<tbody><?php
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){?>
				<td><?php echo $row_usuario['id']; ?></td>
					<td><?php echo $row_usuario['nome']; ?></td>
					<td><?php echo $row_usuario['rg']; ?></td>
					<td><?php echo $row_usuario['telefone']; ?></td>
					<td><?php echo $row_usuario['cpf']; ?></td>
					<td><?php echo $row_usuario['email']; ?></td>
					<div id="popup" class="popup">
                                            <a href="javascript: fechar();"><img src="img/x.png"></a><br>
                                            <center><h4>Medicamentos Retirados</h4><br></center>
                                            <ul>
                                                <li>Medicamentos</li>
                                                <li>Retiradas</li>
                                            </ul>
                                        </div>
                                          <td>  <a  href="javascript: abrir();"><button class="btn btn-outline-primary view_data" id="<?php echo $row_usuario['id']; ?>">Visualizar</button></a></td>
                                        
                                </tr><?php
			}
		}
		?>
                                <script type="text/javascript">
			function abrir(){
				document.getElementById('popup').style.display = 'block';
			}
			function fechar(){
				document.getElementById('popup').style.display =  'none';
			}
		</script>
	</body>
</html>