<?php
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conexao.php';
	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	
	$erro = false;
	
	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);
	
	if(in_array('',$dados)){
		$erro = true;
		$_SESSION['msg'] = "Necessário preencher todos os campos";
	}elseif((strlen($dados['senha'])) < 6){
		$erro = true;
		$_SESSION['msg'] = "A senha deve ter no minímo 6 caracteres";
	}elseif(stristr($dados['senha'], "'")) {
		$erro = true;
		$_SESSION['msg'] = "Caracter ( ' ) utilizado na senha é inválido";
	}else{
		$result_usuario = "SELECT id FROM usuarios WHERE rg='". $dados['rg'] ."'";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "Este usuário já está sendo utilizado";
		}
		
		$result_usuario = "SELECT id FROM usuarios WHERE email='". $dados['email'] ."'";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "Este e-mail já está cadastrado";
		}
	}
	
	
	//var_dump($dados);
	if(!$erro){
		//var_dump($dados);
		$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
		
		$result_usuario = "INSERT INTO usuarios (nome, email, telefone, rg, cpf, senha) VALUES (
						'" .$dados['nome']. "',
						'" .$dados['email']. "',
                                                    '" .$dados['telefone']. "',
                                                        '" .$dados['rg']. "',
                                                            '" .$dados['cpf']. "',
						'" .$dados['senha']. "'
						)";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if(mysqli_insert_id($conn)){
			$_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
			header("Location: login.php");
		}else{
			$_SESSION['msg'] = "Erro ao cadastrar o usuário";
		}
	}
	
}
?>


<html>
    <head>
    <title>Remédio Fácil | Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
    <script>

function formatar(src, mask)
{
  var i = src.value.length;
  var saida = mask.substring(0,1);
  var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
  {
                src.value += texto.substring(0,1);
  }
}

</script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">	
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Cadastro Paciente</title>
        <style>
        body {
            background-image:url(fundog.jpg);
            background-repeat: repeat;
        }
        .h1{
            color: white;
        }
    </style>
    </head>
    <body><center>
        
        
      <div class="login-form">
      <h1>REMÉDIO FÁCIL</h1>
          <br><br><br>
      <h6>CADASTRE-SE</h6>

      <form method="POST" action="inserir_paciente.php">
        <div class="textbox">
          <input type="text" name="nome" placeholder="NOME COMPLETO" required>
          <span class="check-message hidden">Necessário</span>
        </div>
          
          <div class="textbox">
              <input onkeypress="formatar(this,'00.000.000-0')" id=dta type="text" name="rg" placeholder="RG" maxLength=12 required>
          <span class="check-message hidden">Necessário</span>
        </div>
          
          <div class="textbox">
          <input onkeypress="formatar(this,'00 00000-0000')" id=dta type="text" name="telefone" placeholder="TELEFONE" maxLength=13 required>
          <span class="check-message hidden">Necessário</span>
        </div>
          
            <div class="textbox">
                <input onkeypress="formatar(this,'000.000.000-00')" id=dta type="text" name="cpf" placeholder="CPF" maxLength=14>
              
            </div>

        <div class="textbox">
          <input type="text" name="email" placeholder="EMAIL" required>
          <span class="check-message hidden">Necessário</span>
        </div>
        <div class="textbox">
            <input type="password" name="senha" placeholder="SENHA" maxLength=8 required>
            <span class="check-message hidden">Necessário</span>
          </div>

        <input type="submit" id="btnCadUsuario" value="CADASTRAR" class="login-btn" disabled>
        
      </form>

      <div class="dont-have-account">
        Ja possui uma conta?
        <a href="login.php">Conecte-se</a>
      </div>
    </div>

    <script type="text/javascript">
      $(".textbox input").focusout(function(){
        if($(this).val() == ""){
          $(this).siblings().removeClass("hidden");
          $(this).css("background","#554343");
        }else{
          $(this).siblings().addClass("hidden");
          $(this).css("background","#484848");
        }
      });

      $(".textbox input").keyup(function(){
        var inputs = $(".textbox input");
        if(inputs[0].value != "" && inputs[1].value){
          $(".login-btn").attr("disabled",false);
          $(".login-btn").addClass("active");
        }else{
          $(".login-btn").attr("disabled",true);
          $(".login-btn").removeClass("active");
        }
      });
    </script>
    
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       
    </body>
</html>
