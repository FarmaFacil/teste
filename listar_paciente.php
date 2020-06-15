<html>
    <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Lista de Cadastro</title>
        <style>
        body {
            background-image:url('fundog.jpg');
        }
    </style>
    </head>
    <body><center><BR><BR><h1>LISTA DE CADASTRO</h1><br>
        <?php
        require 'conexao.php';
        

		
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 5;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$sql = "SELECT * FROM usuarios LIMIT $inicio, $qnt_result_pg";
		$result = mysqli_query($conn, $sql);
		if(($result) AND ($result->num_rows != 0)){
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
				
                                <th>Alterar</th>
                                <th>Excluir</th>
			</tr>
		</thead>
		<tbody>
                <?php }
			while($row_usuario = mysqli_fetch_assoc($result)){
				?>
				<tr>
					<td><?php echo $row_usuario['id']; ?></td>
					<td><?php echo $row_usuario['nome']; ?></td>
					<td><?php echo $row_usuario['rg']; ?></td>
					<td><?php echo $row_usuario['telefone']; ?></td>
					<td><?php echo $row_usuario['cpf']; ?></td>
					<td><?php echo $row_usuario['email']; ?></td>
					
					<th><?php echo "<a href='form_alterar_paciente.php?id=" . $row_usuario['id'] . "'>Alterar</a>";?> </th>
                                        <th><?php echo "<a href='excluir_paciente.php?id=" . $row_usuario['id'] . "' data-confirm='Tem certeza de que deseja excluir o item selecionado?'>Excluir</a>"; ?></th>
                                        
                                </tr>
                <?php
                                }?>
		</tbody>
	</table>
	<?php
		
		//Paginção - Somar a quantidade de usuários
		$result_pg = "SELECT COUNT(id) AS num_result FROM usuarios";
		$resultado_pg = mysqli_query($conn, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois
		$max_links = 2;
		echo "<a href='listar_paciente.php?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='listar_paciente.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='listar_paciente.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='listar_paciente.php?pagina=$quantidade_pg'>Ultima</a>";
                
		?>		
	</body>
</html>
         <br><br>
     
         
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
                <script src="js/personalizado.js"></script>
    </body>
</html>
