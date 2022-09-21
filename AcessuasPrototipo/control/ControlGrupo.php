<?php
class ControlGrupo {
    /*Interface*/
    public static function pesquisar()
    {
        ViewGrupoPesquisar::exibir();
        $filtrosSelecionados = (isset($_POST[ViewGrupo::$cras]) || isset($_POST[ViewGrupo::$status]));
        $filtrosSelecionados = $filtrosSelecionados && (!empty($_POST[ViewGrupo::$cras]) || !empty($_POST[ViewGrupo::$status]));
        if($filtrosSelecionados===true){
            ?><h3>Grupos</h3><?php
            ViewGrupoLista::exibir();
        }else{
            ?><h3>Selecione um filtro</h3><?php
        }
        ?>
        <div class="botoes">
            <input 
                value="Pesquisar grupos" 
                type="submit" 
                form="<?=ViewModulo::$formName?>" 
                formaction="<?=ViewModulo::$nucleo.ViewGrupo::$telaSearch?>"
            />
            <button disabled>Extrair (CSV ou Excel)</button>
            <input 
                value="Incluir grupo no CRAS selecionado" 
                type="submit" 
                form="<?=ViewModulo::$formName?>" 
                formaction="<?=ViewModulo::$nucleo.ViewGrupo::$telaInsert?>" 
                <?=$filtrosSelecionados===false?'disabled':''?>
            />
        </div>
        <?php
    }
    
    public static function incluir()
    {
        ViewGrupoFrom::exibir();
        ?>
        <div class="botoes">
            <button form="form" formaction="<?=ViewModulo::$nucleo.ViewGrupo::$telaSearch?>">Voltar a tela de listagem</button>
            <button form="form" formaction="<?=ViewModulo::$nucleo.ViewGrupo::$telaConfirmaInsert?>">Cadastrar grupo</button>
        </div>
        <?php
        self::incluirOficina();
        ViewOficinaForm::exibir();
        ?>
        <div class="botoes">
            <button class="incluirOficina">Incluir oficina</button>
            <button class="alterarOficina" disabled>Confirmar aterações</button>
        </div>
        <?php
        ViewOficinaLista::exibir();
    }
    public static function detalhar()
    {
        $status = isset($_POST[ViewGrupo::$status])?$_POST[ViewGrupo::$status]:'';
        ?>
        <h3>Grupo</h3>
        <?php ViewGrupoDetalhar::exibir(); ?>
        <div class="botoes">
            <input type="submit" value="Voltar a pesquisa de grupo" form="<?=ViewModulo::$formName?>" formaction="<?=ViewModulo::$nucleo.ViewGrupo::$telaSearch?>">
            <input type="submit" value="Alterar informações deste grupo" form="<?=ViewModulo::$formName?>" formaction="<?=ViewModulo::$nucleo.ViewGrupo::$telaUpdate?>">
            <input type="submit" value="Inativar este grupo" form="<?=ViewModulo::$formName?>" formaction="<?=ViewModulo::$nucleo.ViewGrupo::$telaConfirmaDelete?>">
            <?php if($status==='3'){?>
                <input type="submit" value="Concluir grupo" form="<?=ViewModulo::$formName?>" formaction="<?=ViewModulo::$nucleo.ViewGrupo::$telaConclusion?>">
            <?php }?>
        </div>
        <?php
        ?><h3>Oficinas</h3><?php
        /** @todo Modificar para a tela de listagem*/
        for($i = 1; $i <= 8; $i++){
            ViewOficinaDetalhar::exibir($i);
        }
        ?><h3>Participantes</h3><?php
        ViewParticipanteListar::exibir();
    }
    
    public static function concluir()
    {
        ?><h3>Grupo</h3><?php
        ViewGrupoDetalhar::exibir();
        ?>
        <div class="botoes">
            <input type="submit" value="Voltar ao detalhamento de grupo" form="<?=ViewModulo::$formName?>" formaction="<?=ViewModulo::$nucleo.ViewGrupo::$telaDetalha?>">
            <input type="submit" value="Concluir grupo de oficinas" form="<?=ViewModulo::$formName?>" formaction="<?=ViewModulo::$nucleo.ViewGrupo::$controlConclusion?>">
        </div>
        <?php
        ?><h3>Participantes</h3><?php
        ViewParticipanteListar::exibir();
        ?><h3>Oficinas</h3><?php
        /** @todo Modificar para a tela de listagem*/
        for($i = 1; $i <= 8; $i++){
            ViewOficinaDetalhar::exibir($i);
        }
    }
    
    public static function excuir()
    {
        ?><h3>Deseja realmente inativar o grupo?</h3><?php
        ViewGrupoDetalhar::exibir();
        ?>
        <button 
            form="<?= ViewModulo::$formName?>"
            formaction="<?= ViewModulo::$nucleo.ViewGrupo::$telaDetalha?>" >
            Não confirmar
        </button>
        <button 
            form="<?= ViewModulo::$formName?>"
            name="<?= ViewGrupo::$codigo?>"
            formaction="<?= ViewModulo::$nucleo.ViewGrupo::$controlDelete?>" >
            Inativar grupo
        </button>
        <?php
    }
    public function alterar(){
        ViewGrupoFrom::exibir();
        ?>
        <div class="botoes">
            <button
                form="<?= ViewModulo::$formName?>"
                formaction="<?= ViewModulo::$nucleo.ViewGrupo::$telaDetalha?>"
                >
                Não confirmar
            </button>
            <button
                form="<?= ViewModulo::$formName?>"
                formaction="<?= ViewModulo::$nucleo.ViewGrupo::$telaConfirmaUpdate?>"
                >
                Confirmar alterações
            </button>
        </div>
        <?php
    }
    
    public function confirmarAlterar()
    {
        ?><h3>Confirmar dados do grupo?</h3><?php
        ViewGrupoDetalhar::exibir();
        ?>
        <div class="botoes">
        <button 
            form="<?= ViewModulo::$formName?>"
            formaction="<?= ViewModulo::$nucleo.ViewGrupo::$telaUpdate?>" >
            Cancelar alteração
        </button>
        <button 
            form="<?= ViewModulo::$formName?>"
            formaction="<?= ViewModulo::$nucleo.ViewGrupo::$controlUpdate?>" >
            Confirmar Alteração
        </button>
        </div>  
        <h3>Oficinas</h3><?php
        for($i = 1; $i <= 8; $i++){
            ViewOficinaDetalhar::exibir($i);
        }   
    }
    
    /*Controle*/
    public function controlAlterar (){
        $grupo = new Grupo($_POST);
        if($grupo->validar(true)===''){
            header('Location: '.ViewModulo::$nucleo.ViewGrupo::$telaDetalha);
        }else{
            header('Location: '.ViewModulo::$nucleo.ViewGrupo::$telaUpdate);
        }
    }
    
    public function controlExcluir (){
        header('Location: '.ViewModulo::$nucleo.ViewGrupo::$telaDetalha);
    }
    
    public function controlConcluir (){
        header('Location: '.ViewModulo::$nucleo.ViewGrupo::$telaDetalha);
    }
    
    //**privates
    /**
     * Este método cria um script js, capaz de processar um minicrud para as oficinas, na tela de cadastro de grupo.
     * Tira os dados de oficina preenchidos no formulário acima e incluir-los numa tabela logo abaixo.
     * Ele foi criado dentro do PHP para fácil sincronização os campos predelimitados.
     * Ainda não está finalizado, onde pode ser migrado para um arquivo js que trabalha somente com as variaveis criadas previamente no PHP
     */
    private static function incluirOficina(){
        ?>
        <script>
        oficinas = [];
        window.addEventListener("load",function(){
            corpoDaTabela = document.getElementsByClassName("listaDeOficina")[0];
            btnAdicionarGrupo = document.querySelectorAll("button.incluirOficina")[0];
            
            if(typeof(btnAdicionarGrupo) !== "undefined"){
                btnAdicionarGrupo.addEventListener("click", function(){addOficinaNaLista();});
            }else{
                console.log("Botão de inserção oficina não encontrado!!!");
            }
        });
        
        
        function alterarOficina(id){
            funcaoFinalizar = function(){finalizarAlteracaoDeOficina(id);};
            document.getElementsByName("<?=ViewOficina::$data?>")[0].value = oficinas[id]["<?=ViewOficina::$data?>"];
            document.getElementsByName("<?=ViewOficina::$cargaHoraria?>")[0].value = oficinas[id]["<?=ViewOficina::$cargaHoraria?>"];
            document.getElementsByName("<?=ViewParametrosOficina::$paramentroDesenvolvimentoDeHabilidades?>")[0].checked = oficinas[id]["<?=ViewParametrosOficina::$paramentroDesenvolvimentoDeHabilidades?>"] === "1";
            document.getElementsByName("<?=ViewParametrosOficina::$paramentroAspectosDoMundoDoTrabalho?>")[0].checked = oficinas[id]["<?=ViewParametrosOficina::$paramentroAspectosDoMundoDoTrabalho?>"] === "2";
            document.getElementsByName("<?=ViewParametrosOficina::$paramentroFormasDeInsercao?>")[0].checked = oficinas[id]["<?=ViewParametrosOficina::$paramentroFormasDeInsercao?>"] === "3";
            document.getElementsByName("<?=ViewParametrosOficina::$paramentroVivenciaProficional?>")[0].checked = oficinas[id]["<?=ViewParametrosOficina::$paramentroVivenciaProficional?>"] === "4";
            document.getElementsByName("<?=ViewParametrosOficina::$paramentroMapaDeOportunidadesLocalProjetoProfissional?>")[0].checked = oficinas[id]["<?=ViewParametrosOficina::$paramentroMapaDeOportunidadesLocalProjetoProfissional?>"] === "5";
            document.getElementsByName("<?=ViewParametrosOficina::$paramentroOutros?>")[0].checked = oficinas[id]["<?=ViewParametrosOficina::$paramentroOutros?>"] === "99";
            document.getElementsByName("<?=ViewOficina::$outros?>")[0].value = oficinas[id]["<?=ViewOficina::$outros?>"];
            
            btnAlteraGrupo = document.querySelectorAll("button.alterarOficina")[0];
            btnAlteraGrupo.addEventListener('click',funcaoFinalizar);
            
            btnAdicionarGrupo.disabled = true;
            btnAlteraGrupo.disabled = false;
        }
        
        function finalizarAlteracaoDeOficina(id){
            btnAlteraGrupo.removeEventListener('click',funcaoFinalizar);
            
            oficina["<?=ViewOficina::$data?>"] = document.getElementsByName("<?=ViewOficina::$data?>")[0].value;
            oficina["<?=ViewOficina::$cargaHoraria?>"] = document.getElementsByName("<?=ViewOficina::$cargaHoraria?>")[0].value;
            oficina["<?=ViewParametrosOficina::$paramentroDesenvolvimentoDeHabilidades?>"] = document.getElementsByName("<?=ViewParametrosOficina::$paramentroDesenvolvimentoDeHabilidades?>")[0].checked?"1":'';
            oficina["<?=ViewParametrosOficina::$paramentroAspectosDoMundoDoTrabalho?>"] = document.getElementsByName("<?=ViewParametrosOficina::$paramentroAspectosDoMundoDoTrabalho?>")[0].checked?"2":'';
            oficina["<?=ViewParametrosOficina::$paramentroFormasDeInsercao?>"] = document.getElementsByName("<?=ViewParametrosOficina::$paramentroFormasDeInsercao?>")[0].checked?"3":'';
            oficina["<?=ViewParametrosOficina::$paramentroVivenciaProficional?>"] = document.getElementsByName("<?=ViewParametrosOficina::$paramentroVivenciaProficional?>")[0].checked?"4":'';
            oficina["<?=ViewParametrosOficina::$paramentroMapaDeOportunidadesLocalProjetoProfissional?>"] = document.getElementsByName("<?=ViewParametrosOficina::$paramentroMapaDeOportunidadesLocalProjetoProfissional?>")[0].checked?"5":'';
            oficina["<?=ViewParametrosOficina::$paramentroOutros?>"] = document.getElementsByName("<?=ViewParametrosOficina::$paramentroOutros?>")[0].checked?"99":'';
            oficina["<?=ViewOficina::$outros?>"] = document.getElementsByName("<?=ViewOficina::$outros?>")[0].value;
            

            if(oficinaValida(oficina)){
                oficinas[id] = oficina;
                document.getElementsByName("<?=ViewOficina::$data?>")[0].value = "";
                document.getElementsByName("<?=ViewOficina::$cargaHoraria?>")[0].value = "";
                document.getElementsByName("<?=ViewParametrosOficina::$paramentroDesenvolvimentoDeHabilidades?>")[0].checked = false;
                document.getElementsByName("<?=ViewParametrosOficina::$paramentroAspectosDoMundoDoTrabalho?>")[0].checked = false;
                document.getElementsByName("<?=ViewParametrosOficina::$paramentroFormasDeInsercao?>")[0].checked = false;
                document.getElementsByName("<?=ViewParametrosOficina::$paramentroVivenciaProficional?>")[0].checked = false;
                document.getElementsByName("<?=ViewParametrosOficina::$paramentroMapaDeOportunidadesLocalProjetoProfissional?>")[0].checked = false;
                document.getElementsByName("<?=ViewParametrosOficina::$paramentroOutros?>")[0].checked = false;
                document.getElementsByName("<?=ViewOficina::$outros?>")[0].value = "";
                
                btnAdicionarGrupo.disabled = false;
                btnAlteraGrupo.disabled = true;
                listar(corpoDaTabela);
            }
        }
        
        function retirarOficina(idOficina){
            if (idOficina > -1) {
                oficinas.splice(idOficina, 1);
            }
            if(oficinas.length < 8){btnAdicionarGrupo.disabled = false;}
            listar(corpoDaTabela);
        }
        
        function addOficinaNaLista(){
            oficina = [];
            oficina["<?=ViewOficina::$data?>"] = document.getElementsByName("<?=ViewOficina::$data?>")[0].value;
            oficina["<?=ViewOficina::$cargaHoraria?>"] = document.getElementsByName("<?=ViewOficina::$cargaHoraria?>")[0].value;
            oficina["<?=ViewParametrosOficina::$paramentroDesenvolvimentoDeHabilidades?>"] = document.getElementsByName("<?=ViewParametrosOficina::$paramentroDesenvolvimentoDeHabilidades?>")[0].checked?"1":'';
            oficina["<?=ViewParametrosOficina::$paramentroAspectosDoMundoDoTrabalho?>"] = document.getElementsByName("<?=ViewParametrosOficina::$paramentroAspectosDoMundoDoTrabalho?>")[0].checked?"2":'';
            oficina["<?=ViewParametrosOficina::$paramentroFormasDeInsercao?>"] = document.getElementsByName("<?=ViewParametrosOficina::$paramentroFormasDeInsercao?>")[0].checked?"3":'';
            oficina["<?=ViewParametrosOficina::$paramentroVivenciaProficional?>"] = document.getElementsByName("<?=ViewParametrosOficina::$paramentroVivenciaProficional?>")[0].checked?"4":'';
            oficina["<?=ViewParametrosOficina::$paramentroMapaDeOportunidadesLocalProjetoProfissional?>"] = document.getElementsByName("<?=ViewParametrosOficina::$paramentroMapaDeOportunidadesLocalProjetoProfissional?>")[0].checked?"5":'';
            oficina["<?=ViewParametrosOficina::$paramentroOutros?>"] = document.getElementsByName("<?=ViewParametrosOficina::$paramentroOutros?>")[0].checked?"99":'';
            oficina["<?=ViewOficina::$outros?>"] = document.getElementsByName("<?=ViewOficina::$outros?>")[0].value;
            
            if(oficinaValida(oficina)){
                oficinas.push(oficina);
                document.getElementsByName("<?=ViewOficina::$data?>")[0].value = "";
                document.getElementsByName("<?=ViewOficina::$cargaHoraria?>")[0].value = "";
                document.getElementsByName("<?=ViewParametrosOficina::$paramentroDesenvolvimentoDeHabilidades?>")[0].checked = false;
                document.getElementsByName("<?=ViewParametrosOficina::$paramentroAspectosDoMundoDoTrabalho?>")[0].checked = false;
                document.getElementsByName("<?=ViewParametrosOficina::$paramentroFormasDeInsercao?>")[0].checked = false;
                document.getElementsByName("<?=ViewParametrosOficina::$paramentroVivenciaProficional?>")[0].checked = false;
                document.getElementsByName("<?=ViewParametrosOficina::$paramentroMapaDeOportunidadesLocalProjetoProfissional?>")[0].checked = false;
                document.getElementsByName("<?=ViewParametrosOficina::$paramentroOutros?>")[0].checked = false;
                document.getElementsByName("<?=ViewOficina::$outros?>")[0].value = "";
            }
            if(oficinas.length >= 8){btnAdicionarGrupo.disabled = true;}
            listar(corpoDaTabela);
        }
        
        function oficinaValida(oficina){
            if((oficina["<?=ViewParametrosOficina::$paramentroOutros?>"] === "99" && oficina["<?=ViewOficina::$outros?>"] !== "")||oficina["<?=ViewParametrosOficina::$paramentroOutros?>"] === ""){
                if(
                    oficina["<?=ViewOficina::$data?>"] !== "" &&
                    oficina["<?=ViewOficina::$cargaHoraria?>"] !== "" &&
                    (oficina["<?=ViewParametrosOficina::$paramentroDesenvolvimentoDeHabilidades?>"] === "1" || 
                    oficina["<?=ViewParametrosOficina::$paramentroAspectosDoMundoDoTrabalho?>"] === "2" || 
                    oficina["<?=ViewParametrosOficina::$paramentroFormasDeInsercao?>"] === "3" || 
                    oficina["<?=ViewParametrosOficina::$paramentroVivenciaProficional?>"] === "4" || 
                    oficina["<?=ViewParametrosOficina::$paramentroMapaDeOportunidadesLocalProjetoProfissional?>"] === "5" ||
                    oficina["<?=ViewParametrosOficina::$paramentroOutros?>"] === "99")
                ){
                    return true;
                }else{
                    return false;
                }
            }
            return false;
        }
        
        function listar(corpoDaTabela){
            if(typeof(corpoDaTabela) !== "undefined"){
                textoListagemGrupo = "";
                for(i = 0; i < oficinas.length; i++){
                    if(typeof(oficinas[i]) !== "undefined"){
                        data = oficinas[i]["<?=ViewOficina::$data?>"];
                        data = data.split("-");
                        data = data[2]+"/"+data[1]+"/"+data[0];
                        dataInput = 
                        "<input "+
                            "type="+'"'+"hidden"+'"'+" "+
                            "name="+'"<?=ViewOficina::$data?>;;'+(i+1)+'"'+
                            "value="+'"'+oficinas[i]["<?=ViewOficina::$data?>"]+'"'+
                        "/>";

                        cargaHoraria = oficinas[i]["<?=ViewOficina::$cargaHoraria?>"]+" minutos";
                        cargaHorariaInput = 
                        "<input "+
                            "type="+'"'+"hidden"+'"'+" "+
                            "name="+'"<?=ViewOficina::$cargaHoraria?>;;'+(i+1)+'"'+
                            "value="+'"'+oficinas[i]["<?=ViewOficina::$cargaHoraria?>"]+'"'+
                        "/>";

                        conteudos = [];
                        if(oficinas[i]["<?=ViewParametrosOficina::$paramentroDesenvolvimentoDeHabilidades?>"]==="1"){ conteudos.push("Desenvolvimento de habilidades"); }
                        if(oficinas[i]["<?=ViewParametrosOficina::$paramentroAspectosDoMundoDoTrabalho?>"]==="2"){ conteudos.push("Aspectos do mundo do trabalho"); }
                        if(oficinas[i]["<?=ViewParametrosOficina::$paramentroFormasDeInsercao?>"]==="3"){ conteudos.push("Formas de inserção"); }
                        if(oficinas[i]["<?=ViewParametrosOficina::$paramentroVivenciaProficional?>"]==="4"){ conteudos.push("Vivência profissional"); }
                        if(oficinas[i]["<?=ViewParametrosOficina::$paramentroMapaDeOportunidadesLocalProjetoProfissional?>"]==="5"){ conteudos.push("Mapa de oportunidades local/projeto profissional"); }
                        if(oficinas[i]["<?=ViewParametrosOficina::$paramentroOutros?>"]==="99"){ conteudos.push(oficinas[i]["<?=ViewOficina::$outros?>"]+" (Outros)"); }
                        textConteudos = "";
                        for(j = 0; j < conteudos.length; j++){
                            textConteudos = textConteudos+conteudos[j];
                            if(j < conteudos.length-1){
                                textConteudos = textConteudos+"; ";
                            }else{
                                textConteudos = textConteudos+".";
                            }
                        }
                        conteudosInput1 =
                        "<input "+
                            "type="+'"'+"hidden"+'"'+" "+
                            "name="+'"<?= ViewParametrosOficina::$paramentroDesenvolvimentoDeHabilidades?>;;'+(i+1)+'"'+
                            "value="+'"'+oficinas[i]["<?= ViewParametrosOficina::$paramentroDesenvolvimentoDeHabilidades?>"]+'"'+
                        "/>";
                        conteudosInput2 =
                        "<input "+
                            "type="+'"'+"hidden"+'"'+" "+
                            "name="+'"<?= ViewParametrosOficina::$paramentroAspectosDoMundoDoTrabalho?>;;'+(i+1)+'"'+
                            "value="+'"'+oficinas[i]["<?= ViewParametrosOficina::$paramentroAspectosDoMundoDoTrabalho?>"]+'"'+
                        "/>";
                        conteudosInput3 =
                        "<input "+
                            "type="+'"'+"hidden"+'"'+" "+
                            "name="+'"<?= ViewParametrosOficina::$paramentroFormasDeInsercao?>;;'+(i+1)+'"'+
                            "value="+'"'+oficinas[i]["<?= ViewParametrosOficina::$paramentroFormasDeInsercao?>"]+'"'+
                        "/>";
                        conteudosInput4 =
                        "<input "+
                            "type="+'"'+"hidden"+'"'+" "+
                            "name="+'"<?= ViewParametrosOficina::$paramentroVivenciaProficional?>;;'+(i+1)+'"'+
                            "value="+'"'+oficinas[i]["<?= ViewParametrosOficina::$paramentroVivenciaProficional?>"]+'"'+
                        "/>";
                        conteudosInput5 = "";
                        "<input "+
                            "type="+'"'+"hidden"+'"'+" "+
                            "name="+'"<?= ViewParametrosOficina::$paramentroMapaDeOportunidadesLocalProjetoProfissional?>;;'+(i+1)+'"'+
                            "value="+'"'+oficinas[i]["<?= ViewParametrosOficina::$paramentroMapaDeOportunidadesLocalProjetoProfissional?>"]+'"'+
                        "/>";
                        conteudosInput99 = "";
                        "<input "+
                            "type="+'"'+"hidden"+'"'+" "+
                            "name="+'"<?= ViewParametrosOficina::$paramentroOutros?>;;'+(i+1)+'"'+
                            "value="+'"'+oficinas[i]["<?= ViewParametrosOficina::$paramentroOutros?>"]+'"'+
                        "/>";
                        conteudosTextInput99 =
                        "<input "+
                            "type="+'"'+"hidden"+'"'+" "+
                            "name="+'"<?=ViewOficina::$outros?>;;'+(i+1)+'"'+
                            "value="+'"'+oficinas[i]["<?=ViewOficina::$outros?>"]+'"'+
                        "/>";
                        
                        textoListagemGrupo += 
                        "<tr class="+(i%2===0?"par":"impar")+">"+
                            "<td>"+data+dataInput+"</td>"+
                            "<td>"+cargaHoraria+cargaHorariaInput+"</td>"+
                            "<td>"+
                                textConteudos+
                                conteudosInput1+
                                conteudosInput2+
                                conteudosInput3+
                                conteudosInput4+
                                conteudosInput5+
                                conteudosInput99+
                                conteudosTextInput99+
                            "</td>"+
                            "<td align="+'"'+"center"+'"'+">"+
                                "<button class="+'"'+"tupla"+'"'+" onclick="+'"'+"retirarOficina("+i+")"+'"'+">Retirar oficina</button>"+
                                "<button class="+'"'+"tupla"+'"'+" onclick="+'"'+"alterarOficina("+i+")"+'"'+">Alterar oficina</button>"+
                            "</td>"+
                        "</tr>";
                    }
                }
                corpoDaTabela.innerHTML = textoListagemGrupo;
            }
        }
        </script>
        <?php
    }
}
