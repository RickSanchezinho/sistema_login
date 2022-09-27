<?php

	if($_POST){

		//CURL
		$curl = curl_init();

		//Definições da requisição com curl
		curl_setopt_array($curl,[
			CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => [
				'secret' => '6Lcf5xUiAAAAAF9kFwi6tYn1HF2G1-gNCDgDbZRs',
				'response' => $_POST['g-recaptcha-response'] ?? ''
			]
		]);

		//Executa a requisição
		$response = curl_exec($curl);

		//fecha a conexão curl
		curl_close($curl);

		//response em array

		$responseArray = json_decode($response,true);

		//sucesso do recptcha
		$sucess = $responseArray['success'] ?? false;

		echo $sucess ? "usuário logado com sucesso!" : "ReCAPTCHA Inválido";

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<script>
		function validarPost(){
			//verifica se o recaptcha foi selecionado
			if(grecaptcha.getResponse() != "") return true;

			//erro: não selecionado 
			alert('Selecione a caixa de "não sou um robô"');
			return false;
		}

	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 offset-lg-4 mt-5">
				<div class="card bg-light">
					<div class="card-body">
						<h5 class="card-title">Acesso Restrito</h5>
						<form action="verificar.php" method="POST" onsubmit="return validarPost()">
							<div class="mb-3">
								<input type="email" name="email" class="form-control" placeholder="E-mail">
							</div>
							<div class="mb-3">
								<input type="password" name="senha" placeholder="Senha" class="form-control">
							</div>
							<div class="mb-3">
								<a href="esqueceu-senha.php">Esqueceu a senha?</a>
							</div>
							<div class="mb-3">
							<div class="g-recaptcha" data-sitekey="6Lcf5xUiAAAAAAfntz9XgC65ZXh_vjcVDFu2owU6"></div>
								<button type="submit" class="btn btn-success">Acesso</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>