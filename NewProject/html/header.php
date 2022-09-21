<?php 
	include_once 'config.php';
?>
<style>
	img { 
		width: 50px;
		height: 50px;
	}
</style>

<nav class="navbar navbar-light navbar-expand-lg nav">
    <a class="btn" href="index.php"> 
        <img src="img/icone.jpg">
    </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarPrincipal">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarPrincipal">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item mb-2 mb-lg-0 ml-0 ml-lg-2 text-center">
                <div class="btn-group w-100">
                    <a class="btn btn-outline-danger w-100" href="quem-somos.php">
                        <h4 class="m-0">Quem somos</h4>
                    </a>
                </div>
            </li>
            <li class="nav-item mb-2 mb-lg-0 ml-0 ml-lg-2 text-center">
                <div class="btn-group w-100 d-flex">
                    <a class="btn btn-outline-danger" href="contato.php" style="flex: 1 1 auto;">
                        <h4 class="m-0">Fale conosco</h4>
                    </a>
                </div>
            </li>
			<li class="nav-item mb-2 mb-lg-0 ml-0 ml-lg-2 text-center">
                <div class="btn-group w-100 d-flex">
                    <a class="btn btn-outline-danger" href="login.php" style="flex: 1 1 auto;">
                        <h4 class="m-0">Faça seu login</h4>
                    </a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav justify-content-end">
            <div class="dropdown mb-2 mb-lg-0 ml-0 ml-lg-2">
                <button class="btn btn-secondary btn-block dropdown-toggle" data-toggle="dropdown">
                    <?//ControleAcesso::nomeSobrenome();?>
                </button>
                <div class="dropdown-menu mw-100">
                    <div class="mw-100 rolagem-inferior">
                        <button class="dropdown-item" disabled><?//ControleAcesso::email();?></button>
                        <button class="dropdown-item" disabled><?//ControleAcesso::cpfMascarado();?></button>
                        <button class="dropdown-item" disabled><?//ControleAcesso::modoAutenticacaoExtendido();?></button>
                    </div>
                </div>
            </div>
            <li class="nav-item mb-2 mb-lg-0 ml-0 ml-lg-2">
                <a class="btn btn-danger btn-danger-sair" href="autenticacao/desautenticar">
                    Sair
                </a>
            </li>
        </ul>
    </div>
</nav>

