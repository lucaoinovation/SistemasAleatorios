<?php
class Comunicacao {
    /**
     * Método responsável por preparar inputs hiddens com base no post e adicioná-las ao pagina requerida
     */
    public static function criarFormulario(){
        $retorno = '';
        $retorno .= '<form id="'.ViewModulo::$formName.'" action="'.ViewModulo::$nucleo.ViewGrupo::$telaDetalha.'" method="post">';
        foreach($_POST as $indice => $valor){
            $retorno .= '<input form="'.ViewModulo::$formName.'" type="hidden" name="'.$indice.'" value="'.$valor.'">';
        }
        $retorno .= '</form>';
        echo $retorno;
    }
}
