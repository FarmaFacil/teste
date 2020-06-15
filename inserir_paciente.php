<html>
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        body {
            background-image:url(fundog.jpg);
        }
        .h1{
            color: white;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        <?php
        require 'conexao.php';
        
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $rg = $_POST['rg'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        
        $sql = "insert into usuarios (nome, cpf, telefone, rg, email, senha) values ('$nome','$cpf','$telefone','$rg','$email','$senha')";
        
        $result = mysqli_query($conn, $sql); 
        
        if ($result == true)
       {
            ?>
        <script>
            
            window.alert("Cadastro com sucesso");
        
        </script><br><br>
        
        <center>
            <h3><a href="Index.php">CONTINUAR</a></h3>
        </center>
        <?php
        
       
       }
       else
       {
           ?>
        <script>
            
            window.alert("Erro de cadastro");
            
        </script><br><br>
        <center>
            <h3><a href="frm_paciente.php">CADASTRAR-SE</a></h3>
        </center>
       <?php
       }
       ?>
    
    </body>
</html>
