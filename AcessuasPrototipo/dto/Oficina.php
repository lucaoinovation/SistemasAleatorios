<?php
class Oficina {
    public $codigoGrupo = null;
    public $codigo = null;
    public $data = null;
    public $conteudos = array();
    public $cargaHoraria = null;
    public $outros = null;
    
    public function __construct($oficina = null) {
        $this->setOficina($oficina);
    }
    
    public function setOficina($oficina = null){
        var_dump($oficina);
        if(!empty($oficina) && gettype($oficina) === 'array'){
            if(isset($oficina[ViewGrupo::$codigo])){ $this->codigoGrupo = $oficina[ViewGrupo::$codigo]; }
            if(isset($oficina[ViewOficina::$codigo])){ $this->codigo = $oficina[ViewOficina::$codigo]; }
            if(isset($oficina[ViewOficina::$data])){ $this->data = $oficina[ViewOficina::$data]; }
            
            if(isset($oficina[ViewParametrosOficina::$paramentroDesenvolvimentoDeHabilidades])){ 
                $this->conteudos[ViewParametrosOficina::$paramentroDesenvolvimentoDeHabilidades] = 
                    $oficina[ViewParametrosOficina::$paramentroDesenvolvimentoDeHabilidades];
            }
            if(isset($oficina[ViewParametrosOficina::$paramentroAspectosDoMundoDoTrabalho])){ 
                $this->conteudos[ViewParametrosOficina::$paramentroAspectosDoMundoDoTrabalho] = 
                    $oficina[ViewParametrosOficina::$paramentroAspectosDoMundoDoTrabalho];
            }
            if(isset($oficina[ViewParametrosOficina::$paramentroFormasDeInsercao])){ 
                $this->conteudos[ViewParametrosOficina::$paramentroFormasDeInsercao] = 
                    $oficina[ViewParametrosOficina::$paramentroFormasDeInsercao];
            }
            if(isset($oficina[ViewParametrosOficina::$paramentroVivenciaProficional])){ 
                $this->conteudos[ViewParametrosOficina::$paramentroVivenciaProficional] = 
                    $oficina[ViewParametrosOficina::$paramentroVivenciaProficional];
            }
            if(isset($oficina[ViewParametrosOficina::$paramentroMapaDeOportunidadesLocalProjetoProfissional])){ 
                $this->conteudos[ViewParametrosOficina::$paramentroMapaDeOportunidadesLocalProjetoProfissional] = 
                    $oficina[ViewParametrosOficina::$paramentroMapaDeOportunidadesLocalProjetoProfissional];
            }
            if(isset($oficina[ViewParametrosOficina::$paramentroOutros])){ 
                $this->conteudos[ViewParametrosOficina::$paramentroOutros] = 
                    $oficina[ViewParametrosOficina::$paramentroOutros];
            }
            if(isset($oficina[ViewOficina::$cargaHoraria])){ $this->cargaHoraria = $oficina[ViewOficina::$cargaHoraria]; }
            if(isset($oficina[ViewOficina::$outros])){ $this->outros = $oficina[ViewOficina::$outros]; }
            $mensagem = 'Grupo inicializado com sucesso!';
        }else{
            $mensagem = 'Erro: o grupo trago não é um array ou está vazio';
        }
        return $mensagem;
    }
    
    /**
     * Valida os dados do 
     * @param bool $update
     * @return string
     */
    public function validar($update = false){
        $retorno = '';
        
        $retorno .= !empty($this->codigoGrupo)?'':'codigoGrupo;;';
        $retorno .= !empty($this->data)?'':'data;;';
        $retorno .= !empty($this->cargaHoraria)?'':'cargaHoraria;;';
        if(count($this->conteudos) > 0){
            foreach($this->conteudos as $conteudo){
                if(empty($this->conteudo)){
                    if(strpos($retorno, 'conteudos;;') === false){
                        
                    }
                }
            }
        }else{
            $retorno .= 'conteudos;;';
        }
        $retorno .= !empty($this->outros)?'':'outros;;';
        
        if($retorno === '' && $update === true){
            $retorno = !empty($this->codigo)? $retorno:$retorno.'codigo;;';
        }
        return $retorno;
    }
}
