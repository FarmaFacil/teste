
<html>
    <head>
    <title>Remédio Fácil | Login</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">	
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Cadastro Aluno</title>
        <style>
        body {
            background-image:url(fundog.jpg);
            background-repeat: repeat;
        }
        .h1{
            color: white;
        }
        .login-form{
            margin-top: 90px;
        }
    </style>
    </head>
    <body><center>
        
        
      <div class="login-form">
      <h1>REMÉDIO FÁCIL</h1>
          <br><br><br>
      <h6>CONECTE-SE</h6>

      <form method="POST" action="valida.php">
        <div class="textbox">
          <input type="text" name="email" placeholder="EMAIL" required>
          <span class="check-message hidden">Necessário</span>
        </div>
          
          <div class="textbox">
              <input type="password" name="senha" placeholder="SENHA" required>
          <span class="check-message hidden">Necessário</span>
        </div>
          
          

        <input type="submit" value="CONECTAR" class="login-btn" disabled>
        
      </form>

      <div class="dont-have-account">
        Não possui uma conta?
        <a href="frm_paciente.php">Cadastre-se</a>
      </div>
    </div>

         <?php 
			//Recuperando o valor da variável global, os erro de login.
			if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }?>
        </p>
        <p>
            <?php 
			//Recuperando o valor da variável global, deslogado com sucesso.
            if(isset($_SESSION['logindeslogado'])){
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>
        </p>
        
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
