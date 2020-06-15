<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Paciente</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
        body {
            background-image:url(fundog.jpg);
        }
        .form-group{
            margin-top: 5px;
            color: white;
        }
        .container h2{
            text-align: center;
            
        }
        #tamanho{
            width: 100%;    
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
<script type="text/javascript">
			function abrir(){
				document.getElementById('popup').style.display = 'block';
			}
			function fechar(){
				document.getElementById('popup').style.display =  'none';
			}
		</script>
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
        <a class="navbar-brand" href="homePaciente.php">Remédio Fácil</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
          
 <ul class="nav navbar-nav navbar-right">
        <li><a href="sair.php"> <span class="glyphicon glyphicon-log-in"></span>&nbspDeslogar</a></li>
      </ul>
      
      <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="form-group">
        <?php
    session_start();
    echo "Usuário: ". $_SESSION['nome'];    
?>
      </div></div>
    </form>


     


    </div>
  </div>
</nav>
  
    <div class="container">
        <h2>Notificação</h2><br>
    <input id="tamanho"  type="text" disabled="disabled">
    <br><br><br>
    
    <h2>Enviar Documentos</h2><br>
    <div id="popup" class="popup">
        <a href="javascript: fechar();"><img src="img/x.png"></a><br>
			<h2>Escolher</h2><br>	
                        <table border="0">
    <tr>
        <td><center><input type="file" value="Escolher"/></center><br></td>
        <td><center><input type="file" value="+"/></center><br></td>
        <td><center><input type="file" value="+"/></center><br></td>
    </tr>
 
</table>
		</div>
    <center><a  href="javascript: abrir();"><button class="btn-danger">Abrir Página</button></a><br>
    <br><br><br>
    
    <h2>Checagem de Medicamentos</h2><br>
    <input id="tamanho"  type="text" disabled="disabled">
    <br><br><br>
    
    <h2>Retirar Medimentos</h2><br>
    <div id="popup" class="popup">
        <a href="javascript: fechar();"><img src="img/x.png"></a><br>
			<h2>Data para Retirar Medicamento</h2><br>	
                        
		</div>
		
		<!--ações para o popup -->
                <center><a  href="javascript: abrir();"><button class="btn-danger">Abrir Página</button></a><br>
    <br><br><br><br><br>
    <a  href="#"><button type="button" class="btn btn-success">Enviar</button></a></center><br><br><br><br><br>
</div>
    
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                    <div class="social-media"><center>
                         <a href="https://www.facebook.com/Rem%C3%A9dio-F%C3%A1cil-112894010455313/?modal=admin_todo_tour"> <i class="fa fa-facebook fa-2x"> &nbsp</i></a>
                         <a href="https://twitter.com/FacilRemedio"> <i class="fa fa-twitter fa-2x"> &nbsp</i></a>
                         <a href="#"> <i class="fa fa-linkedin fa-2x"> &nbsp</i></a>
                         <a href="#"> <i class="fa fa-instagram fa-2x"> &nbsp</i></a>
                    </div></center>
                </div>
            </div> 
        </div>
        <div class="footer-bottom"><center>
        <div class="container">
            <p class="pull-left"><center> Copyright © All right reserved.</center> </p>
        </div>
        </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


        
    </body>
</html>
