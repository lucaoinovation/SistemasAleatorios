<?php
class ViewParametrosOficinaDetahar {
    public static function exibir($id){
        /** @todo esta variável de parâmentros deve buscar os parâmentros referentes a oficina informada, no banco de dados*/
        $assuntoArr = array('bla bla bla', 'bla bla', 'blabla', 'bla');
        #$assuntoArr = array('bla bla bla');
        ?>
        <td>
            <b>Conteúdo<?=count($assuntoArr)>1?'s':''?> trabalhado<?=count($assuntoArr)>1?'s':''?>:</b>
        </td>
        <td colspan="2">
        <?php
            $assuintos = '';
            foreach($assuntoArr as $assunto){
                $assuintos .= $assunto;
                if($assunto !== end($assuntoArr)){
                    $assuintos .= '; ';
                }
            }
            echo $assuintos;
        ?>
        </td>
        <?php
    }
}
