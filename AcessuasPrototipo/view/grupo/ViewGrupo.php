<?php
class ViewGrupo {
    /*Form!*/
    public static $ibge = 'v13839';

    public static $codigo = 'grupoCodigo';
    public static $nome = 'v13845';
    public static $formaExecucao = 'v13850';
    public static $entidade = 'v13880';
    public static $coordenador = 'v13846';
    public static $tecnicoNivelSuperior = 'v13848';
    public static $tecnicoNivelMedio = 'v13849';
    public static $baseFisicaExecucao = 'v13851';

    public static $cras = 'v13841';

    public static $status = 'v13842';
    public static $ordenacao = 'v13843';
    
    /*Rotas!*/
    #public static $select = 'lista-grupo';
    public static $telaSearch = 'grupo-pesquisar';
    public static $telaInsert = 'grupo-incluir';
    public static $telaUpdate = 'grupo-alterar';
    public static $telaConclusion = 'grupo-concluir';
    
    //private static $actionSelect;
    public static $controlInsert = 'control-grupo-incluir';
    public static $controlUpdate = 'control-grupo-alterar';
    public static $controlDelete = 'control-grupo-inativar';
    public static $controlConclusion = 'control-grupo-concluir';
    
    public static $telaDetalha = 'grupo-detalhar';
    
    public static $telaConfirmaInsert = 'confirma-grupo-inserir';
    public static $telaConfirmaUpdate = 'confirma-grupo-alterar';
    public static $telaConfirmaDelete= 'confirma-grupo-inativar';
}
