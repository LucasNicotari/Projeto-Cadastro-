<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  include "conexao.php";
 
  $nome = $_POST['nome'];
  $endereco = $_POST['endereco'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  $data_nascimento = $_POST['data_nascimento'];

  $sql = "INSERT INTO `pessoas`(`nome`, `endereco`, `telefone`, `email`, `data_nascimento`) VALUES ('$nome','$endereco','$telefone','$email','$data_nascimento')";

  if (mysqli_query($conn, $sql)) {
    echo "<span style=\"color:green;\">$nome cadastrado com sucesso!</span>";
  } else
    echo "<span style=\"color:red;\">$nome NÃO foi cadastrado!</span>";
  ?>
  <br><br>
  <button><a href="index.html">voltar</a></button>
</body>

</html>