<?php
class Autoloader{
    function __construct(){
        $this->incluirCaminho();
        spl_autoload_register(
            function($classe) {
                require_once $classe.'.php';
            }
        );
    }
    
    public static function incluirCaminho(){
        set_include_path(
            get_include_path().PATH_SEPARATOR.
            #incluxão de bibliotecas
            __DIR__.DIRECTORY_SEPARATOR.'estrutura'.PATH_SEPARATOR.
            __DIR__.DIRECTORY_SEPARATOR.'mensagem'.PATH_SEPARATOR.
            __DIR__.DIRECTORY_SEPARATOR.'comunicacao'.PATH_SEPARATOR.
            
            #incluxão de modulos
            __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'control'.PATH_SEPARATOR.
            __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'dto'.PATH_SEPARATOR.
            __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'view'.PATH_SEPARATOR.
            __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR.'principal'.PATH_SEPARATOR.
            __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR.'grupo'.PATH_SEPARATOR.
            __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR.'modulo'.PATH_SEPARATOR.
            __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR.'oficina'.PATH_SEPARATOR.
            __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR.'oficinaParametros'.PATH_SEPARATOR.
            __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR.'participante'.PATH_SEPARATOR.
            __DIR__
        );
    }
}
(new Autoloader());