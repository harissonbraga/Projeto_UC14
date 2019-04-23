<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);
$codigo = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_STRING);
$data_de_vencimento = filter_input(INPUT_POST, 'data_de_vencimento', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "Nome: $cor <br>";
//echo "Nome: $codigo <br>";
//echo "Nome: $data_de_vencimento <br>";


$result_produto = "UPDATE produtos SET nome='$nome', cor='$cor', codigo='$codigo', data_de_vencimento='$data_de_vencimento', modified=NOW() WHERE id='$id'";
$resultado_produto = mysqli_query($conn, $result_produto);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Produto editado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Produto não foi editado com sucesso</p>";
	header("Location: editar.php?id=$id");
}
