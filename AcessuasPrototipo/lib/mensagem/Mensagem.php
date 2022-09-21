<?php
class Mensagem {
    public function msgViaPost($mensagem, $pagina){
        $retorno = '<form method="post" action="'.$pagina.'" id="msg">
            <input type="hidden" value="'.$mensagem.'"/>
        </form>
        <script>
            $("#msg").submit();
        </script>';
        echo $retorno;
    
    }
    public static function exibirMsgAteCarregamento($mensagem = "Carregando, por favor aguarde..."){
        $retorno = '<h1 class="mensagemCarregando">'.$mensagem.'</h1>
        <script>
            mensagemCarregando = document.querySelectorAll(".mensagemCarregando")[0];
            window.addEventListener("load",
                function(event){
                    mensagemCarregando.style.display = "none";
                }
            );
        </script>';
        echo $retorno;
    }
    public static function exibirMsgPost(){
        $mensagem = "";
        $tipoDeMensagem = "";
        if(isset($_POST["mensagemDoSistema"]) and isset($_POST["mensagemDoSistemaTipo"])){
            $mensagem = $_POST["mensagemDoSistema"];
            if(isset($_POST["mensagemDoSistemaTipo"])){
                if($_POST["mensagemDoSistemaTipo"] == "positiva"){
                    $tipoDeMensagem = "mensagem-positiva";
                }else if($_POST["mensagemDoSistemaTipo"] == "negativa"){
                    $tipoDeMensagem = "mensagem-negativa";
                }else{
                    $tipoDeMensagem = "mensagem-neutra";
                }
            }else{
                $tipoDeMensagem = "menssagem-neutra";
            }

            $retorno = '<h1 class="'.$tipoDeMensagem.'">'.$mensagem.'</h1>';
            return $retorno;
        }
    }
}
