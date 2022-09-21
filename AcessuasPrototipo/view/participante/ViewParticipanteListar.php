<?php
class ViewParticipanteListar {
    public static function exibir(){
        $grupoCodigo = isset($_POST[ViewGrupo::$codigo])?$_POST[ViewGrupo::$codigo]:'';
        $status = isset($_POST[ViewGrupo::$status])?$_POST[ViewGrupo::$status]:'';
        $pagina = isset($_GET['pagina'])?$_GET['pagina']:'';
        
        $mostraBtn = ($pagina === ViewParticipante::$telaDetalha?true:false);
        $vinculacaoMode = ($pagina === ViewParticipante::$telaVincular?true:false);
        ?>
        <table>
            <tr>
                <?php if($pagina=== ViewGrupo::$telaConclusion){?>
                    <th width="2%">75%</th>
                <?php } ?>
                <th>Nome</th>
                <?php if($mostraBtn===false){?>
                    <th>Nome da mãe do participante</th>
                <?php } ?>
                <th>Data de nascimento</th>
                <?php if($pagina===ViewParticipante::$telaDetalha || $pagina===ViewParticipante::$telaVincular){?>
                    <th align="center" width="20%">Ações</th>
                <?php } ?>
            </tr>
            <?php $parImpar=0;for($i = 1; $i <= 25; $i++){ ?>
                    <tr class="<?=($parImpar%2)===0?'par':'impar'?>">
                        <?php if($pagina=== ViewGrupo::$telaConclusion){?>
                            <td>
                                <input type="checkbox" name="<?=$i?>"/>
                            </td>
                        <?php } ?>
                        <td>
                            Participante <?=$i?>
                        </td>
                        <?php if($mostraBtn===false){?>
                            <td>
                                Nome da mãe do participante <?=$i?>
                            </td>
                        <?php } ?>
                        <td>
                            <?php
                            $mes = 12-$i;
                            if($mes < 0){ $mes = -$mes; }
                            if($mes === 0){ $mes = 2; }
                            if($mes > 12){ $mes = 9; }
                            ?>
                            <?=31-$i?>/<?=$mes;?>/<?=2018-($i*2)?>
                        </td>
                        <?php if($pagina===ViewParticipante::$telaDetalha){?>
                            <td align="center">
                                <button 
                                    form="<?=ViewModulo::$formName?>" 
                                    name="<?= ViewParticipante::$codigo?>" 
                                    value="<?=$i?>" 
                                    class="<?=ViewModulo::$botaoParaTupla?>"
                                    formaction="<?= ViewModulo::$nucleo.ViewParticipante::$telaExcluir?>"
                                >
                                    Desvincular este participante
                                </button>
                            </td>
                        <?php }if($pagina===ViewParticipante::$telaVincular){ ?>
                            <td align="center">
                                <button class="tupla">Adicionar a lista de vinculos</button>
                            </td>
                        <?php } ?>
                    </tr>
            <?php $parImpar++; }?>
        </table>
        <?php
    }
}
