<?php
define('MODO_MANUTENCAO', true);
if(MODO_MANUTENCAO === true){
    error_reporting(E_ALL); ini_set("display_errors",1);
}else{
    error_reporting(0); ini_set("display_errors",0);
}
require_once("lib/Autoloader.php");
$pagina = isset($_GET["pagina"])?$_GET["pagina"]:null;
Fluxo::iniciarFluxo($pagina);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?=Fluxo::titulo($pagina)?></title>
        <meta name="viewport" content="width=device-width">
        
        <link rel="icon" type="image/png" href="img/favicon.png"/>
        <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
        
        <link rel="stylesheet" type="text/css" href="estilos/menu.css">
        <link rel="stylesheet" type="text/css" href="estilos/telaPrincipal.css">
        <link type="text/css" rel="stylesheet" href="estilos/botoes.css">
        <link type="text/css" rel="stylesheet" href="estilos/estilo.css">
        <link type="text/css" rel="stylesheet" href="estilos/modal.css">
        <link type="text/css" rel="stylesheet" href="estilos/rodape.css">
        
        <link type="text/css" rel="stylesheet" href="estilos/fixerUltimaHora.css">
        
        <script type="text/javascript" src="estilos/menu.js"></script>
        <script type="text/javascript" src="estilos/estilo.js"></script>
        <script type="text/javascript" src="estilos/rodape.js"></script>
        
        <script type="text/javascript" src="libClient/Oficina.js"></script>
        
        <!--script type="text/javascript" src="libClient/requisicoes.js"></script-->
        <!--script type="text/javascript" src="libClient/ativarBtn.js"></script-->
    </head>
    <body>
        <?php 
        $emailZoado = 'apapiplapsnopson.alburqueieironildonaldo@badassness.bichao.com.br';
        $emailMaisSerio = 'umCaraQualquerAi.comUmEmailGrandeQualquer@servidorQualquer.entidade.tip.pa';
        ViewModuloMenu::exibir(array($emailMaisSerio)); ?>
        <div class="conteudo" style="margin-top: 50px;">
            <?php 
            Comunicacao::criarFormulario();
            Fluxo::conteudo($pagina);
            ?>
        </div>
        
        <!--?php ViewModulo::rodape(); ?-->
    </body>
</html>