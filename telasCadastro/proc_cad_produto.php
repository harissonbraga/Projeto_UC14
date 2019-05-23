<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);
$codigo = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_STRING);
$data_de_vencimento = filter_input(INPUT_POST, 'data_de_vencimento', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";


$result_produto = "INSERT INTO produtos (nome, cor, codigo, data_de_vencimento, created) VALUES ('$nome', '$cor', '$codigo', '$data_de_vencimento', NOW())";
$resultado_produto = mysqli_query($conn, $result_produto);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Produto cadastrado com sucesso</p>"."b";
	header("Location: cad_produto.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Produto não foi cadastrado com sucesso</p>";
	header("Location: cad_produto.php");
}
