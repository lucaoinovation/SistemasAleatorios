<?php
class Fluxo{
    
    public static function iniciarFluxo($pagina = null){
        if($pagina == null){
            echo 'Aguarde um momento...';
            header('Location: '.ViewModulo::$nucleo.ViewModulo::$home);
        }
    }
    
    public static function conteudo($pagina = null){
        echo Mensagem::exibirMsgAteCarregamento();
        echo Mensagem::exibirMsgPost();
        if(isset(self::getEstrutura($pagina)['arquivo'])){
            if(strpos(self::getEstrutura($pagina)['arquivo'],'@') > 0){
                $actionMethod = explode('@', self::getEstrutura($pagina)['arquivo']);
                $objeto = $actionMethod[0];
                $metodo = $actionMethod[1];
                (new $objeto)->$metodo();
            }else{
                include_once self::getEstrutura($pagina)['arquivo'];
            }
        }else{
            if(strpos(self::getEstrutura('erro-404')['arquivo'],'@') > 0){
                $actionMethod = explode('@', self::getEstrutura('erro-404')['arquivo']);
                $objeto = $actionMethod[0];
                $metodo = $actionMethod[1];
                (new $objeto)->$metodo();
            }else{
                include_once self::getEstrutura('erro-404')['arquivo'];
            }
        }
    }
    
    public static function titulo($pagina = null){
        if(isset(self::getEstrutura($pagina)['titulo'])){
            return self::getEstrutura($pagina)['titulo'];
        }else if($pagina = null){
            return 'Erro 404';/** @todo pode acontecer o erro de um retorno especifico neste trecho ou a omissão do mesmo */
        }else{
            return 'Erro 404';
        }
    }
    
    private static function getEstrutura($pagina = null){
        $arquivoDeControleDeFluxo = 'Fluxo.ini';
        #var_dump(parse_ini_file($arquivoDeControleDeFluxo, true)[$pagina]);
        if(isset(parse_ini_file($arquivoDeControleDeFluxo, true)[$pagina]) && $pagina != null){
            if($pagina != null){
                return parse_ini_file($arquivoDeControleDeFluxo, true)[$pagina];
            }else{
                return parse_ini_file($arquivoDeControleDeFluxo, true);
            }
        }else{
            return 'erro-404';
        }
    }
}