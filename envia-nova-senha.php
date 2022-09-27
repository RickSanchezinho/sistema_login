<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
								<button type="submit" class="btn btn-success">Acesso</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>