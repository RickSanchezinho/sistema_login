<?php

    session_start();
    ob_start();
    include_once 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Recuperar Senha</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>

<?php

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    var_dump($dados);

    if (!empty($dados['SendRecupSenha'])) {

    }

    $query_usuario = "SELECT id, nome, usuario
    FROM usuarios
    WHERE usuario =: usuario
    LIMIT 1 ";

    $result_usuario_usuario = $conn->prepare($query_usuario);
    $result_usuario->bindParam(':usuario', $dados['usuario'], PDO::PARAM_STR);
    $result_usuario->execut();


?>
<div class="container">
		<div class="row">
			<div class="col-lg-4 offset-lg-4 mt-5">
				<div class="card bg-light">
					<div class="card-body">
						<h5 class="card-title">Redefinir Senha</h5>
						<form action="verificar.php" method="POST" onsubmit="return validarPost()">
							<div class="mb-3">
								<input type="email" name="email" class="form-control" placeholder="E-mail">
							</div>
								<button type="submit" class="btn btn-success" value="Recuperar" name="SendRecupSenha">Redefinir</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>