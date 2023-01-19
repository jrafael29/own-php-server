<?php $path = explode('?', $_SERVER['REQUEST_URI'])[0]; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Meu site</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>

<body>
	<div class="container">
		<header>
			<nav class="navbar navbar-expand-lg bg-body-tertiary">
				<div class="container-fluid">
					<a class="navbar-brand" href="/">OWN</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav">
							<a <?php if($path == '/'): echo "class='nav-link active'"; else: echo "class='nav-link'"; endif; ?>  href="/">Home</a>
							<a <?php if($path == '/listar'): echo "class='nav-link active'"; else: echo "class='nav-link'"; endif; ?>  href="/listar">Listar</a>
							<a <?php if($path == '/cadastrar'): echo "class='nav-link active'"; else: echo "class='nav-link'"; endif; ?>  href="/cadastrar">Cadastrar</a>
						</div>
					</div>
				</div>
			</nav>
		</header>