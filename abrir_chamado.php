<?php
	require_once "validador_acesso.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Uni Help Desk</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<style>
		.card-home {
			padding: 40px 0 0 0;
			width: 80%;
			margin: 0 auto;
		}		
	</style>

</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
		<a href="#" class="navbar-brand">
			<img src="logo.png" width="33" height="33" class="d-inline-block align-top">
			Uni Help Desk
		</a>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="logoff.php" class="nav-link">Sair</a>
			</li>
		</ul>
	</nav>
	<div class="container">
		<div class="row">
			<div class="card-home">
				<div class="card">
					<div class="card-header">
						Informe os dados do chamado
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col">
								<form method="post" action="registra_chamado.php">
									<div class="form-group">
										<label>Título do chamado</label>
										<input type="text" name="titulo" class="form-control" placeholder="Título">
									</div>

									<div class="form-group">
										<label>Categoria</label>
										<select class="form-control" name="categoria">
											<option disabled selected="true">Selecione</option>
											<option>Problema com algum software</option>
											<option>Problema com o Windows</option>
											<option>Problema com a rede</option>
											<option>Problema com a impressora</option>
											<option>Outro...</option>
										</select>
									</div>

									<div class="form-group">
										<label>Descrição</label>
										<textarea name="descricao" class="form-control" rows="3"></textarea>
									</div>

									<div class="row">
										<div class="col-6">
											<a href="home.php" class="btn btn-lg btn-secondary btn-block">Voltar</a>
										</div>

										<div class="col-6">
											<button class="btn btn-lg btn-info btn-block" type="submit">Abrir chamado</button>
										</div>
									</div>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>




