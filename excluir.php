<?php
session_start();
include_once("conexao.php");

$usu_codigo = $_GET['codigo'];
echo $usu_codigo;

$result_usuario = "DELETE FROM pessoas WHERE cod_pessoa = '$usu_codigo'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if ($result_usuario) {
  echo "
    <script> 
      alert('Usuário deletado com sucesso!');
      location.href='pesquisa.php'; 
    </script>";
} else
  echo "
    <script>
      alert('Não foi possível deletar o usuário.'); 
      location.href='pesquisa.php';
    </script>";
