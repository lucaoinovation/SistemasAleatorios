<?php
class ViewOficinaForm {
    public static function exibir($numero = ''){
        $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : '';
        if($pagina=== ViewGrupo::$telaInsert){
            $operacao = 'Formulário de inclusão';
        }else if ($pagina=== ViewOficina::$telaUpdate){/** @todo tem de trocar pra a tela de update do grupo*/
            $operacao = 'Modificação';
        }else{
            $operacao = '';
        }
        $deli = (!empty($numero)?';;':'');#delimitador
        
        ?>
        <fieldset>
            <legend><?=$operacao?> de oficina</legend>   
            <table class="noMargin" style="display: table;">
                <tr>
                    <td width="15%">
                        <b>
                            <span>Data da oficina: </span>
                        </b>
                    </td>
                    <!--form="<?=ViewModulo::$formName?>"-->
                    <td width="20%">
                        <input 
                            form="<?=ViewModulo::$formName?>"
                            type="date" 
                            name="<?=ViewOficina::$data.$deli.$numero?>" 
                            value="<?=isset($_POST[ViewOficina::$data.$deli.$numero]) ? $_POST[ViewOficina::$data.$deli.$numero] : ''?>"
                        />
                    </td>
                    <td>
                    </td>
                    <td width="26%">
                        <b>
                            <span>Carga horária (em minutos): </span>
                        </b>
                    </td>
                    <td width="10%">
                        <input 
                            form="<?=ViewModulo::$formName?>"
                            type="number" 
                            min="<?=ViewOficina::$cargaHorariaMinia?>"
                            name="<?=ViewOficina::$cargaHoraria.$deli.$numero?>" 
                            value="<?=isset($_POST[ViewOficina::$cargaHoraria.$deli.$numero]) ? $_POST[ViewOficina::$cargaHoraria.$deli.$numero] : ''?>"
                        />
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <b><span>Conteúdo(s) trabalhado(s):</span></b>
                    </td>
                </tr>
                    <td colspan="5">
                        <?php ViewParametrosOficinaForm::exibir($numero);?>
                    </td>
                <tr>
                    <td>
                        <b>
                            <span>Outros:</span>
                        </b>
                    </td>
                    <td colspan="4">
                        <textarea 
                            form="<?=ViewModulo::$formName?>"
                            name="<?=ViewOficina::$outros.$deli.$numero?>" 
                            maxlength="249"
                        ><?=isset($_POST[ViewOficina::$outros.$deli.$numero])?$_POST[ViewOficina::$outros.$deli.$numero]:''?></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <input 
                            form="<?=ViewModulo::$formName?>"
                            type="hidden" 
                            name="<?=ViewGrupo::$codigo.$deli.$numero?>" 
                            value="<?=isset($_POST[ViewGrupo::$codigo.$deli.$numero])?$_POST[ViewGrupo::$codigo.$deli.$numero]:''?>"
                        />
                        <input 
                            form="<?=ViewModulo::$formName?>"
                            type="hidden" 
                            name="<?=ViewOficina::$outros.$deli.$numero?>" 
                            value="<?=isset($_POST[ViewOficina::$outros.$deli.$numero])?$_POST[ViewOficina::$outros.$deli.$numero]:''?>"/>
                        <?php if($numero !== ''){ ?>
                            <hr>
                        <?php } ?>
                    </td>
                </tr>
            </table>
        </fieldset>
        <?php
    }
}
