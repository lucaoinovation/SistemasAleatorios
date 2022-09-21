<?php
class ViewModuloMenu {
    public static function exibir($informacoesColaborador){
        $principal = 'Acessuas';
        $grupo = 'Grupos';
        $relatorio = 'Relatórios';
        
        $imprimir = '<div class="menu">
            <ul class="menu">
                <li class="logo">
                    <a href="'.ViewModulo::$nucleo.ViewModulo::$home.'">
                        <b>'.$principal.'</b>
                    </a>
                </li>
                <li>
                    <a href="'.ViewModulo::$nucleo.ViewGrupo::$telaSearch.'">'.$grupo.'</a>
                </li>
                <li>
                    <a href="'.ViewModulo::$nucleo.'relatorios'.'">'.$relatorio.'</a>
                </li>'.
                '<li class="sair">
                    <a href="'.ViewModulo::$nucleo.'sair">'.$informacoesColaborador[0].'</a>
                </li>'.
            '</ul>
        </div>';
        echo $imprimir;
    }
}
