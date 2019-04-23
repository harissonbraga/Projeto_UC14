<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Listar</title>		
	</head>
	<body>
	 <div id="divFundao">
	 <div id="divFundao2">
	 
	 <hr align="center" width="auto" size="0.3" color=black>
		<a href="cad_produto.php">Cadastrar</a><br>
		<hr align="center" width="auto" size="0.3" color=black>
		<a href="index.php">Listar</a><br>
		<hr align="center" width="auto" size="0.3" color=black>
		<center><h1>Listar Produtos</h1></center>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 3;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_produtos = "SELECT * FROM produtos LIMIT $inicio, $qnt_result_pg";
		$resultado_produtos = mysqli_query($conn, $result_produtos);
		while($row_produto = mysqli_fetch_assoc($resultado_produtos)){
			echo "<hr align='center' width='auto' size='0.3' color=white><hr>";
			echo "<br>Id: " . $row_produto['id'] . "<br>";
			echo "Nome: " . $row_produto['nome'] . "<br>";
			echo "Cor: " . $row_produto['cor'] . "<br>";
			echo "Codigo: " . $row_produto['codigo'] . "<br>";
			echo "Data de Vencimento: " . $row_produto['data_de_vencimento'] . "<br><hr>";
		
			echo "<a href='edit_produto.php?id=" . $row_produto['id'] . "'>Editar</a><br><hr>";
			
			echo "<a href='proc_apagar_produto.php?id=" . $row_produto['id'] . "'>Apagar</a><br><hr>";
			echo "<hr align='center' width='auto' size='0.3' color=white>";
			
		}
		
		//Paginção - Somar a quantidade de produtos
		$result_pg = "SELECT COUNT(id) AS num_result FROM produtos";
		$resultado_pg = mysqli_query($conn, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois
		$max_links = 2;
		echo "<a href='index.php?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='index.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='index.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='index.php?pagina=$quantidade_pg'>Ultima</a>";
		
		?>	
		</div>
		</div>
		</div> 

        
		
		<br>
		<br>
		<form action="../telas/saguao.php">
<input style="width: 100%;backgound-color: #6945ed;color: 
    black;font-size: 20px;" type="submit" value="Saguão">

</form>
<style>
#divFundao2{ 
 width: auto; height: 75px;
background-color: #CFCFCF;      
              
}
#divFundao{ 
 width: auto; height: 850px;
 background-image: linear-gradient(to top, gray, white);     
              
}

</style>
	</body>
</html>