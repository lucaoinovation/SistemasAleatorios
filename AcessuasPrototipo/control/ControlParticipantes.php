<?php
class ControlParticipantes {
    public static function detalhar($id = ''){
        $statusGrupo = isset($_POST[ViewGrupo::$status])?$_POST[ViewGrupo::$status]:'';
        ?>
        <h3>Grupo</h3>
        <?php ViewGrupoDetalhar::exibir($id); ?>
        <h3>Participantes</h3>
        <?php ViewParticipanteListar::exibir($id); ?>
        <div class="botoes">
            <button 
            form="<?= ViewModulo::$formName?>"
            formaction="<?= ViewModulo::$nucleo.ViewGrupo::$telaSearch?>"
            >Voltar a pesquisa de grupos</button>
            <?php if($statusGrupo!=='4'){?>
            <button
                form="<?= ViewModulo::$formName ?>"
                formaction="<?= ViewModulo::$nucleo.ViewParticipante::$telaVincular?>"
                name="<?= ViewOficina::$codigo?>" >
                Vincular participantes
            </button>
            <?php } ?>
        </div>
        <?php
    }
    
    public static function vincular(){
        ?>
        <h3>Grupo</h3>
        <?php ViewGrupoDetalhar::exibir(); ?>
        <h3>Participantes a serem adicionados ao grupo</h3>
        <?php ViewParticipanteListarVinculo::exibir(); ?>
        <h3>Todos os participantes</h3>
        <?php ViewParticipantePesquisar::exibir(); ?>
        <div class="botoes">
            <button
                form="<?= ViewModulo::$formName ?>"
                formaction="<?= ViewModulo::$nucleo.ViewParticipante::$telaVincular?>"
                name="<?= ViewOficina::$codigo?>" >
                Alterar filtros
            </button>
        </div>
        <?php ViewParticipanteListar::exibir(); ?>
        <div class="botoes">
            <button
                form="<?= ViewModulo::$formName ?>"
                formaction="<?= ViewModulo::$nucleo.ViewParticipante::$telaDetalha?>"
                name="<?= ViewOficina::$codigo?>" >
                Não confirmar
            </button>
            <button
                form="<?= ViewModulo::$formName ?>"
                formaction="<?= ViewModulo::$nucleo.ViewParticipante::$controlVincular?>"
                name="<?= ViewOficina::$codigo?>" >
                Confirmar novos vinculos
            </button>
        </div>
        <?php
    }
    
    public static function excluir(){
        ?>
        <h3>Grupo</h3>
        <?php ViewGrupoDetalhar::exibir(); ?>
        <h3>Participantes</h3>
        <?php ViewParticipanteDetalhar::exibir(); ?>
        <div class="botoes">
            <button
                form="<?= ViewModulo::$formName ?>"
                formaction="<?= ViewModulo::$nucleo.ViewParticipante::$telaDetalha?>"
                name="<?= ViewOficina::$codigo?>" >
                Não confirmar
            </button>
            <button 
                form="<?= ViewModulo::$formName ?>"
                formaction="<?= ViewModulo::$nucleo.ViewParticipante::$controlExcluir?>" > 
                Confirmar exclusão
            </button>
        </div>
        <?php
    }
}
