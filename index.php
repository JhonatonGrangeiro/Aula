<?php
#error_reporting(0);
#ini_set("display_errors", 0 );

?>

<?php

	//Criamos uma função que irá retornar o conteúdo do arquivo.
	function ler_titulo(){
		//Variável arquivo armazena o nome e extensão do arquivo.
		$arquivo = "titulo.txt";
		
		//Variável $fp armazena a conexão com o arquivo e o tipo de ação.
		$fp = fopen($arquivo, "r");

		//Lê o conteúdo do arquivo aberto.
		$conteudo = fread($fp, filesize($arquivo));
		
		//Fecha o arquivo.
		fclose($fp);
		
		//retorna o conteúdo.
		return $conteudo;
	}

	$titulo = ler_titulo();

	?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=$titulo;?></title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 20px;
			background-color: #f5f5f5;
		}

		.container {
			max-width: 600px;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
		}

		h1 {
			text-align: center;
			margin-bottom: 30px;
		}
		
		h3 {
			text-align: center;
			margin-bottom: 30px;
		}
		h5 {
			text-align: right;
			margin-bottom: 30px;
		}

		.input-group {
			display: flex;
			margin-bottom: 20px;
		}

		.input-group input[type="text"],
		.input-group input[type="password"],
		.input-group textarea {
			flex: 1;
			padding: 10px;
			border-radius: 3px;
			border: 1px solid #ccc;
		}

		.input-group button {
			padding: 10px 20px;
			background-color: #007bff;
			border: none;
			color: #fff;
			border-radius: 3px;
			cursor: pointer;
		}

		.input-group button:hover {
			background-color: #0056b3;
		}

		.fill-option {
			margin-bottom: 20px;
		}

		.time-limit {
			margin-bottom: 20px;
		}

		.btn-consult {
			display: block;
			margin: 0 auto;
			padding: 10px 20px;
			background-color: #28a745;
			border: none;
			color: #fff;
			border-radius: 3px;
			cursor: pointer;
		}

		.btn-consult:hover {
			background-color: #1e7e34;
		}

		.site {
			text-align: center;
			background-color: black;
			padding: 10px;
			border: 2px solid black;
			color: white;
			font-weight: bold;
		}
	</style>
</head>
<body>

<?php

	//Criamos uma função que irá retornar o conteúdo do arquivo.
	function ler_editacodigo(){
		//Variável arquivo armazena o nome e extensão do arquivo.
		$arquivo = "editacodigo.txt";
		
		//Variável $fp armazena a conexão com o arquivo e o tipo de ação.
		$fp = fopen($arquivo, "r");

		//Lê o conteúdo do arquivo aberto.
		$conteudo = fread($fp, filesize($arquivo));
		
		//Fecha o arquivo.
		fclose($fp);
		
		//retorna o conteúdo.
		return $conteudo;
	}

	$editacodigo = ler_editacodigo();

	?>

<?php

	//Criamos uma função que irá retornar o conteúdo do arquivo.
	function ler_openai(){
		//Variável arquivo armazena o nome e extensão do arquivo.
		$arquivo_openai = "openai.txt";
		
		//Variável $fp armazena a conexão com o arquivo e o tipo de ação.
		$fp = fopen($arquivo_openai, "r");

		//Lê o conteúdo do arquivo aberto.
		$conteudo = fread($fp, filesize($arquivo_openai));
		
		//Fecha o arquivo.
		fclose($fp);
		
		//retorna o conteúdo.
		return $conteudo;
	}

	$openai = ler_openai();

	?>


<?php

	//Criamos uma função que irá retornar o conteúdo do arquivo.
	function ler_prompt(){
		//Variável arquivo armazena o nome e extensão do arquivo.
		$arquivo = "prompt.txt";
		
		//Variável $fp armazena a conexão com o arquivo e o tipo de ação.
		$fp = fopen($arquivo, "r");

		//Lê o conteúdo do arquivo aberto.
		$conteudo = fread($fp, filesize($arquivo));
		
		//Fecha o arquivo.
		fclose($fp);
		
		//retorna o conteúdo.
		return $conteudo;
	}

	$prompt = ler_prompt();

	?>






	<div class="container">
		<h1><?=$titulo;?></h1>
		

		
		<h3>Chave editacodigo</h3>
		<form method="post" action="bot.php">
			<div class="input-group">
				<input type="password" name="editacodigo" placeholder="SUA API DO EDITA CODIGO" value="<?=$editacodigo;?>">
				<button type="submit">Enviar</button>
			</div>
		</form>
		<br>

		<h3>API da openai</h3>
		<form method="post" action="bot.php">
			<div class="input-group">
				<input type="password" name="openai" placeholder="SUA API DA OPENAI" value="<?=$openai; ?>">
				<button type="submit">Enviar</button>
			</div>
		</form>
		<br>




		<h3>CADASTRO DO PROMPT</h3>
		<form method="post" action="bot.php">
			<div class="input-group">
				<textarea name="prompt" placeholder="Insira o prompt aqui" style="width: 100%; height: 200px;"><?=$prompt; ?></textarea>
			</div>
			<button class="btn-consult">Cadastrar Prompt</button>
		</form>

		<br>
</body>
</html>
