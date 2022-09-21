<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Oficina</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#"><i class="fa fa-2x fa-car"></i></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cliente</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="index.php?page=c_cliente">Cadastrar</a>
						<a class="dropdown-item" href="index.php?page=l_cliente">Listar Cliente Cadastrado</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Veículo</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="index.php?page=c_veiculo">Cadastrar</a>
						<a class="dropdown-item" href="index.php?page=l_veiculo">Listar Veículo Cadastrado</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ordem de Serviço</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="index.php?page=c_orderserv">Cadastrar</a>
						<a class="dropdown-item" href="index.php?page=l_orderserv">Listar Ordem de Serviço</a>
					</div>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="sair.php">Sair</a>
				</li>
			</ul>
		</div>
	</nav>
	<?php session_start();
	echo "Administrador: " . @$_SESSION['usuarioNome'];
	?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php
				include("dao/conexao.php");
				switch (@$_REQUEST["page"]) {
					case "c_veiculo";
						include("cadastrar_veiculo.php");
						break;

					case "s_veiculo";
						include("salvar_veiculo.php");
						break;

					case "e_veiculo";
						include("editar_veiculo.php");
						break;

					case "l_veiculo";
						include("listar_veiculo.php");
						break;

					case "c_cliente";
						include("cadastrar_cliente.php");
						break;

					case "s_cliente";
						include("salvar_cliente.php");
						break;

					case "l_cliente";
						include("listar_cliente.php");
						break;

					case "e_cliente";
						include("editar_cliente.php");
						break;

					case "c_user";
						include("cadastrar_user.php");
						break;

					case "c_orderserv";
						include("cadastrar_orderserv.php");
						break;

					case "e_orderserv";
						include("editar_orderserv.php");
						break;

					case "s_orderserv";
						include("salvar_orderserv.php");
						break;

					case "l_orderserv";
						include("listar_orderserv.php");
						break;
				}
				?>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.2.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>