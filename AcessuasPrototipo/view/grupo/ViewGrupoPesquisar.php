<?php
class ViewGrupoPesquisar {
    public static function exibir(){
        #$ibge = isset($_POST['ibge'])?$_POST['ibge']:'';
        ?>
        <fieldset>
            <legend>Pesquisa de grupos:</legend>
            <table class="noMargin meiaTela">
                <tr>
                    <td>
                        <b>
                            <span>Estado:</span>
                        </b>
                    </td>
                    <td>
                        <span id="spanEstado">Selecione uma unidade CRAS</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>
                            <span>Cidade:</span>
                        </b>
                    </td>
                    <td>
                        <span id="spanCidade">Selecione uma unidade CRAS</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>
                            <span>CRAS:</span> 
                        </b>
                    </td>
                    <td>
                        <select id="<?= ViewGrupo::$cras?>" name="<?= ViewGrupo::$cras?>" form="<?=ViewModulo::$formName?>">
                            <option value="">Selecione...</option>
                            <?php
                            $cras = isset($_POST[ViewGrupo::$cras])?$_POST[ViewGrupo::$cras]:'';
                            $crases = array();
                            for($i = 1; $i < 10; $i++){
                                $crases[$i] = 'CRAS '.($i);
                                #array_push();
                            }
                            foreach ($crases as $codigo => $valor){
                                ?><option value="<?=$codigo?>" <?=(string)$codigo===(string)$cras?'selected':''?>><?=$valor?></option><?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>
                            <span>Status do grupo:</span> 
                        </b>
                    </td>
                    <td>
                        <select name="v13842" form="<?=ViewModulo::$formName?>">
                            <option value="">Selecione...</option>
                            <?php
                            $status = isset($_POST[ViewGrupo::$status])?$_POST[ViewGrupo::$status]:'';
                            $statuses = array(
                                '1' => 'Ativo',
                                '2' => 'Inativo',
                                '3' => 'Pendente de conclusão',
                                '4' => 'Concluido'
                            );
                            foreach ($statuses as $codigo => $valor){
                                var_dump($codigo, $status);
                                ?><option value="<?=$codigo?>" <?=(string)$codigo===(string)$status?'selected':''?>><?=$valor?></option><?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>
                            <span>Ordenação:</span>
                        </b>
                    </td>
                    <td>
                        <select name="v13843" form="<?=ViewModulo::$formName?>">
                            <option value="">Selecione...</option>
                            <?php
                            $ordenacao = isset($_POST[ViewGrupo::$ordenacao])?$_POST[ViewGrupo::$ordenacao]:'';
                            $ordenacoes = array(
                                '1' => 'Número de Referência do CRAS',
                                '2' => 'Nome do CRAS',
                                '3' => 'Nome do grupo',
                                '4' => 'Status do grupo'
                            );
                            foreach ($ordenacoes as $codigo => $valor){
                                ?><option value="<?=$codigo?>" <?=(string)$codigo===(string)$ordenacao?'selected':''?>><?=$valor?></option><?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
            </table>
        </fieldset>
        <?php
    }
}
