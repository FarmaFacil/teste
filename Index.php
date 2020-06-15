<!DOCTYPE html>
<html lang="en">
<head>
  <title>Página Inicial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style type="text/css">
    body {
            background-image:url(fundog.jpg);
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
    .container1{
        text-align: justify;
        padding: 50px;
    }
    .container1 p{
        font-size: 20px;
    }
    .fundo{
        margin-left: 7.8%;
  margin-right: 7.7%;
  background-color: #222222;
  text-align: justify-all;
  color: white;
  font-size: 15px;
  font-family:arial;
  margin-bottom: 100px;
  box-shadow: 10px 10px 20px;
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
        <a class="navbar-brand" href="Index.php">Remédio Fácil</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    

 <ul class="nav navbar-nav navbar-right">
     <li><a href="frm_paciente.php"><span class="glyphicon glyphicon-user"></span>&nbsp Cadastrar-se</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp Conecte-se</a></li>
      </ul>

    </div>
  </div>
</nav>
  <div class="container">

    <!-- Iniciando o carrousel -->
    <div class="carousel slide" data-ride="carousel" id="galeria">
    <!-- Bolinhas de navegação -->
    <ol class="carousel-indicators">
        <li data-target="#galeria" data-slide-to="0" class="active"></li>
        
        <li data-target="#galeria" data-slide-to="1"></li>
        
        <li data-target="#galeria" data-slide-to="2"></li>
        
        <li data-target="#galeria" data-slide-to="3"></li>
    </ol>
        
        <!-- Imagens da galeria -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/img1.png" style="width: 100%">
                
            <!-- Div para legendas-->
            <div class="carousel-caption">
                <!--<h3>Pôr do Sol</h3>
                <p>Prainha de Mendonça</p>-->
                </div>
                
            </div> 
            
            <div class="item">
                <img src="img/img2.png" style="width: 100%">
            <!-- Div para legendas-->
                <div class="carousel-caption">
                <!--<h3>Pôr do Sol</h3>
                <p>Prainha de Mendonça</p>-->
                </div>
            </div>
            
            <div class="item">
                <img src="img/img3.png" style="width: 100%">
            <!-- Div para legendas-->
                <div class="carousel-caption">
                <!--<h3>Pôr do Sol</h3>
                <p>Prainha de Mendonça</p>-->
                </div>
            </div>
            
            <div class="item">
                <img src="img/img4.png" style="width: 100%">
            <!-- Div para legendas-->
                <div class="carousel-caption">
                <!--<h3>Pôr do Sol</h3>
                <p>Prainha de Mendonça</p>-->
                </div>
            </div>
        </div> 
        
<!-- Adicionando botão esq e dir-->
<a class="left carousel-control" href="#galeria" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>    
</a>
        
<a class="right carousel-control" href="#galeria" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>    
</a>
           
    </div>
  </div><br>
    <div class="fundo"  >
<div class="container1">
    <h2>Para que serve esse site?</h2>
    <br>
    <p>Esse site foi desenhado e desenvolvido para você que deseja retirar medicamentos em farmácias de forma fácil e rápida, é simples, você fara seu cadastro e pronto, agora e só aguardar o recebimento de uma notificação que seu remédio está pronto pra retirar, e é claro se você preferir pode enviar sua receita direto do site para o farmacêutico, assim você não vai esquece-la ou precisara levar ela pra lá e pra cá. Desde já agradecemos sua visita seja bem-vindo(a) 	
        😉
    </p>
    <br><br>
    <h2>Como usar?</h2>
    <br>
    <p>Desenhamos e o programamos para ser o mais fácil e pratico possível para eficácia na usabilidade, ele é auto indicativo para pessoas que têm aquela dificuldade de usar o computador
 😅 </p>
    <br><br>
    <h2>Como vou saber quando posso retirar o medicamento?</h2>
    <br>
    <p>Você poderá retirar o medicamento assim que receber a notificação de retirada, pelo próprio sistema
 😆 </p>
    <br><br>
    <h2>Como retirar os medicmentos?</h2>
    <br>
    <p>Quando você receber a notificação de que seu remédio está disponível, você irá comparecer ao posto de saúde mais próximo e apresentara seu código de usuário ao farmacêutico e pronto ele vai separar seus medicamentos e lhe entregara você apenas vai confirmar o recebimento se seus remédios estão de acordo e tudo mais olhe direitinho em, se tudo estiver em ordem aperte o botão confirmar e pronto, isso confirmara que você recebeu.
 🤓 </p>
    <br><br>
    <h2>Sobre</h2>
    <br>
    <p>Somos um grupo independente de pessoas que teve a ideia de poder ajudar e contribuir um pouco âmbito de reduzir e melhor o atendimento de hospitais públicos (farmácia publica).
    </p>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div></div>
    
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
