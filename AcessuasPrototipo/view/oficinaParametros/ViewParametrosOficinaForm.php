<?php
class ViewParametrosOficinaForm {
    public static function exibir($numero = ''){
        $deli = (!empty($numero)?';;':'');#delimitador
        ?>
<tr>
<td colspan="5">
    <label>
        <input 
            form="<?=ViewModulo::$formName?>" 
            value="1" 
            name="<?=ViewParametrosOficina::$paramentroDesenvolvimentoDeHabilidades.$deli.$numero?>" 
            type="checkbox" 
            <?=isset($_POST[ViewParametrosOficina::$paramentroDesenvolvimentoDeHabilidades.$deli.$numero])?'checked':''?>
        >Desenvolvimento de habilidades</label>
    </td>
</tr>
<tr>
    <td colspan="5">
        <label>
            <input 
                form="<?=ViewModulo::$formName?>" 
                value="2" 
                name="<?=ViewParametrosOficina::$paramentroAspectosDoMundoDoTrabalho.$deli.$numero?>" 
                type="checkbox" 
                <?=isset($_POST[ViewParametrosOficina::$paramentroAspectosDoMundoDoTrabalho.$deli.$numero])?'checked':''?>
            >Aspectos do mundo do trabalho</label>
    </td>
</tr>
<tr>
    <td colspan="5">
        <label>
            <input 
                form="<?=ViewModulo::$formName?>" 
                value="3" 
                name="<?=ViewParametrosOficina::$paramentroFormasDeInsercao.$deli.$numero?>" 
                type="checkbox" 
                <?=isset($_POST[ViewParametrosOficina::$paramentroFormasDeInsercao.$deli.$numero])?'checked':''?>
            >Formas de inserção</label>
    </td>
</tr>
<tr>
    <td colspan="5">
        <label>
            <input 
                form="<?=ViewModulo::$formName?>" 
                value="4" 
                name="<?=ViewParametrosOficina::$paramentroVivenciaProficional.$deli.$numero?>" 
                type="checkbox" 
                <?=isset($_POST[ViewParametrosOficina::$paramentroVivenciaProficional.$deli.$numero])?'checked':''?>
            >Vivência profissional</label>
    </td>
</tr>
<tr>
    <td colspan="5">
        <label>
            <input 
                form="<?=ViewModulo::$formName?>" 
                value="5" 
                name="<?=ViewParametrosOficina::$paramentroMapaDeOportunidadesLocalProjetoProfissional.$deli.$numero?>" 
                type="checkbox" 
                <?=isset($_POST[ViewParametrosOficina::$paramentroMapaDeOportunidadesLocalProjetoProfissional.$deli.$numero])?'checked':''?>
            >Mapa de oportunidades local/projeto profissional</label>
    </td>
</tr>
<tr>
    <td colspan="5">
        <label>
            <input 
                form="<?=ViewModulo::$formName?>" 
                value="99" 
                name="<?=ViewParametrosOficina::$paramentroOutros.$deli.$numero?>" 
                type="checkbox" 
                <?=isset($_POST[ViewParametrosOficina::$paramentroOutros.$deli.$numero])?'checked':''?>
            >Outros</label>
    </td>
</tr>
        <?php
    }
}
