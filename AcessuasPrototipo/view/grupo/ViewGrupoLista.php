<?php
class ViewGrupoLista{
    public static function exibir(){
        /*as variáveis abaixo. serão utilizadas para aplicar os filtros necessários*/
        $cras = isset($_POST[ViewGrupo::$cras])?$_POST[ViewGrupo::$cras]:'';
        $status = isset($_POST[ViewGrupo::$status])?$_POST[ViewGrupo::$status]:'';
        $ordenacao = isset($_POST[ViewGrupo::$ordenacao])?$_POST[ViewGrupo::$ordenacao]:'';
        ?>
<td>CRAS: CRAS selecionado acima.</td><br><br>
        <table width="100%">
            <tr>
                <th>Código do Grupo
                </th>
                <th>
                    Nome do grupo
                </th>
                <th>
                    Status
                </th>
                <th>
                    Nº ofici.
                </th>
                <th>
                    Nº parti.
                </th>
                <th align="center">
                    Ações
                </th>
            </tr> 
            <?php
            $parImpar=0;
            for($id=1; $id <= 10; $id++){ 
            ?>
            <tr class="<?=($parImpar%2)===0?'par':'impar'?>">
                <td>
                    Nome do grupo <?=$id?>
                </td>
                <td>
                    <?php
                    if($id < 7){echo 'Ativo';}else
                    if($id < 9){echo 'Inativo';}else
                    {echo 'Pendente de conclusão';}
                    ?>
                </td>
                <td>
                    <?=($id+1)*12?>
                </td>
                <td>
                    <?=($id+1)*53?>
                </td>
                <td align="center">
                    <button 
                        name="<?=ViewGrupo::$codigo?>" 
                        value="<?=$id?>" 
                        class="<?=ViewModulo::$botaoParaTupla?>" 
                        form="<?=ViewModulo::$formName?>">
                        Detalhar grupo
                    </button>
                    <button 
                        type="hidden" 
                        name="<?=ViewGrupo::$codigo?>" 
                        value="<?=$id?>" 
                        class="<?=ViewModulo::$botaoParaTupla?>" 
                        form="<?=ViewModulo::$formName?>" 
                        formaction="<?=ViewModulo::$nucleo.ViewOficina::$telaDetalha?>">
                        Oficinas
                    </button>
                    <button 
                        type="hidden" 
                        name="<?=ViewGrupo::$codigo?>" 
                        value="<?=$id?>" 
                        class="<?=ViewModulo::$botaoParaTupla?>" 
                        form="<?=ViewModulo::$formName?>" 
                        formaction="<?=ViewModulo::$nucleo.ViewParticipante::$telaDetalha?>">
                        Participantes
                    </button>
                </td>
            </tr>
            <?php 
            $parImpar++;
            } 
            ?>
        </table>
        <?php
    }
}