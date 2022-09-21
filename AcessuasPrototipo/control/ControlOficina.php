<?php
class ControlOficina {
    /*Interface*/
    public function detalhar(){
        ?><h3>Grupo</h3><?php
        ViewGrupoDetalhar::exibir();
        ?>
        <div class="botoes">
            <button 
            form="<?= ViewModulo::$formName?>"
            formaction="<?= ViewModulo::$nucleo.ViewGrupo::$telaSearch?>"
            >Voltar a pesquisa de grupos</button>
        </div>
        <?php
        ?><h3>Oficinas</h3><?php
        for($i = 1; $i < 8; $i++){ 
            ViewOficinaDetalhar::exibir();
            ?>
        <div class="botoes">
            <button 
                formaction="<?= ViewModulo::$nucleo.ViewOficina::$telaUpdate?>" 
                form="<?= ViewModulo::$formName?>" 
                name="<?= ViewOficina::$codigo?>" 
                value="<?=$i?>">
                Alterar oficina
            </button>
            <button  
                value="<?=$i?>"
                name="<?= ViewOficina::$codigo?>"
                form="<?= ViewModulo::$formName?>"
                formaction="<?= ViewModulo::$nucleo.ViewOficina::$telaConfirmaDelete?>">
                Inativar oficina
            </button>
        </div>
        <?php    
        }
        ?><h3>Participantes</h3><?php
        ViewParticipanteListar::exibir($id);
    }
    public function excuir(){
        ?><h3>Grupo</h3><?php
        ViewGrupoDetalhar::exibir();
        ?><h3>Deseja realmente inativar oficina?</h3><?php
        ViewOficinaDetalhar::exibir();
        ?>
        <div class="botoes">
            <button
                form="<?= ViewModulo::$formName ?>"
                formaction="<?= ViewModulo::$nucleo.ViewOficina::$telaDetalha?>"
                name="<?= ViewOficina::$codigo?>" >
                Não confirmar
            </button>
            <button 
                form="<?= ViewModulo::$formName ?>"
                formaction="<?= ViewModulo::$nucleo.ViewOficina::$controlDelete?>" > 
                Confirmar inativação
            </button>
        </div>
        <?php
    }
    public function alterar(){
        ViewOficinaForm::exibir();
        ?>
        <div class="botoes">
            <button
                form="<?= ViewModulo::$formName?>"
                formaction="<?= ViewModulo::$nucleo.ViewOficina::$telaDetalha?>"
                >
                Não confirmar
            </button>
            <button
                form="<?= ViewModulo::$formName?>"
                formaction="<?= ViewModulo::$nucleo.ViewOficina::$telaConfirmaUpdate?>"
                >
                Confirmar alterações
            </button>
        </div>
        <?php
    }
    
    public function confirmarAlterar(){
        ?><h3>Grupo</h3><?php
        ViewGrupoDetalhar::exibir();
        ?><h3>Confirmar alterações da oficina?</h3><?php
        ViewOficinaDetalhar::exibir();
        ?>
        <div class="botoes">
            <button
                form="<?= ViewModulo::$formName ?>"
                formaction="<?= ViewModulo::$nucleo.ViewOficina::$telaUpdate?>"
                name="<?= ViewOficina::$codigo?>"
                >
            Cancelar alteração
            </button>             
            <button 
                form="<?= ViewModulo::$formName ?>"
                formaction="<?= ViewModulo::$nucleo.ViewOficina::$controlUpdate?>" 
                > 
                Confirmar alterações
            </button>
        </div>
            <?php   
    }
    
    /*Controle*/
    public function controlAlterar(){
        $oficuna = new Oficina($_POST);
        var_dump($oficuna->validar(true));die;
        header('Location: '.ViewModulo::$nucleo.ViewOficina::$telaDetalha);
    }
    
    public function controlExcluir (){
        header('Location: '.ViewModulo::$nucleo.ViewOficina::$telaDetalha);
    }
}
