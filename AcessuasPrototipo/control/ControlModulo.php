<?php
class ControlModulo {
    public function paginaNaoEncontrada(){
        $retorno = 
        '<div style="width: 100%;text-align: center;">
            <h3>Pagina não encontrada!</h3>
            <p>A pagina que você procurou não existe. Por favor, tente acessar as 
                paginas somente pelo menú superior</p>
        </div>';
        echo $retorno;
    }
}
