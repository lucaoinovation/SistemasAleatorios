<?php
class ViewOficina {
    /*Campos!*/
    public static $codigo = 'oficinaCodigo';
    public static $data = 'v13857';
    public static $cargaHoraria = 'v13858';
    public static $outros = 'v13855';

    /*Constantes!*/
    public static $cargaHorariaMinia = '90';
    
    /*Rotas!*/
    //public static $select = 'oficina-detalhar';
    //public static $search = 'oficina-pesquisa';
    public static $telaInsert = 'oficina-incluir';
    public static $telaUpdate = 'oficina-alterar';
    //private static $delete;
    
    //private static $actionSelect;
    public static $controlInsert = 'control-oficina-incluir';
    public static $controlUpdate = 'control-oficina-alterar';
    public static $controlDelete = 'control-oficina-excluir';
    
    public static $telaDetalha = 'oficina-detalhar';
    
    public static $telaConfirmaInsert = 'control-oficina-incluir';
    public static $telaConfirmaUpdate = 'detalhar-altera-oficina';
    public static $telaConfirmaDelete = 'detalhar-exclui-oficina';
    
}
