<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upload de Arquivos</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="text" name="nome" placeholder="Seu Nome">
		<input type="file" name="arquivo[]" multiple>
		<input type="submit" name="enviar">
	</form>

	<?php
		if (isset($_POST['enviar'])) {
			if (!empty($_FILES['arquivo']['name'])) {
			
				$nomeArquivo = $_FILES['arquivo']['name'];
				$tipo = $_FILES['arquivo']['type'];
				$nomeTemporario = $_FILES['arquivo']['tmp_name'];
				$tamanho = $_FILES['arquivo']['size'];
				$erros = array();

				for ($contador = 0; $contador < count($nomeArquivo); $contador++){
					$iteracao = $contador + 1;
				

					$tamanhoMaximo = 1024 * 1024 * 5; //5MB +-
					if ($tamanho[$contador] > $tamanhoMaximo) {
						$erros[] = "Seu arquivo excede o tamanho máximo.<br>";
					}

					$arquivosPermitidos = ["png","jpg","jpeg"];
					$extensao = pathinfo($nomeArquivo[$contador], PATHINFO_EXTENSION);
					if ( !in_array($extensao, $arquivosPermitidos)) {
						$erros[] = "Arquivo não permitido.<br>";
					}

					$typesPermitidos = ["image/png","image/jpg","image/jpeg"];

					if ( !in_array($tipo[$contador], $typesPermitidos)) {
						$erros[] = "Tipo de arquivo não permitido.<br>";
					}

					if (!empty($erros)) {
						foreach ($erros as $erro) {
							echo $erro;
						}
					}else{
						$caminho = "uploads/";
						$hoje = date("d-m-Y_h-i");
						$user = $_POST['nome'];
						$novoNome = $user."-".$nomeArquivo[$contador];

						if(move_uploaded_file($nomeTemporario[$contador], $caminho.$novoNome)){
							echo "Arquivo ".$iteracao." - Upload realizado com sucesso!<br>";
						}else{
							echo "Arquivo ".$iteracao." - Erro ao realizar upload.<br>";

				}

				}

				}


			}
		}


	?>
	
</body>
</html>