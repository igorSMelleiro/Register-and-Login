<?php
$nome =$_POST['nome'];
$senha =$_POST['senha'];

$conexao = mysqli_connect('localhost','root','','banco');

$sql = "select * from cadastro where nome='$nome'  and senha='$senha'";


  $resultado = mysqli_query($conexao,$sql);

$dados = [];

while ($linha = mysqli_fetch_assoc($resultado))
  $dados[]= $linha;

    if(count($dados) != 1 ){
      echo "erro";
    }



 ?>
