<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Cadastrar</title>		
	</head>
	<body>
		<div id="divFundao">
	    <div id="divFundao2">
	    	
		<a href="cad_produto.php">Cadastrar</a><br>
		<a href="index.php">Listar</a><br>

		<center>
			<div id="divFundao3">
		<br><br><br><br><br>
		
		<h1>Cadastrar Produto</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_cad_produto.php">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome do Produto"><br><br>
			
			<label>Cor: </label>
			<input type="text" name="cor" placeholder="Digite a cor do Produto"><br><br>
			
			<label>Código: </label>
			<input type="text" name="codigo" placeholder="Digite o Código do Produto"><br><br>
			
			<label>Data de Vencimento: </label>
			<input type="text" name="data_de_vencimento" placeholder="Digite a Data de Vencimento"><br><br>
			
			<input type="submit" value="Cadastrar">
			</center>
			</div>
			</div>
		</form>

		<style>
			#divFundao3{ 
				
 width: 500px; height: 500px;
background-color: #CFCFCF;      
             position: absolute;
  left: 650px;
  top: 150px;
}

			#divFundao2{ 
 width: auto; height: 55px;
background-color: #CFCFCF;      
              
}

#divFundao{ 
 width: auto; height: 950px;
 background-image: linear-gradient(to top, gray, white);     
              
}

		</style>
	</body>
</html>