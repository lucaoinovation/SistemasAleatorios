<?php
class Grupo{
    private $cras = null;
    private $codigo = null;
    private $nome = null;
    
    private $formaExecucao = null;
    private $entidadeAtiva = null;
    
    private $coordenador = null;
    private $tecnicoNivelSuperior = null;
    private $tecnicoNivelMedio = null;
    
    private $status = null;
    
    private $dataInsercao = null;
    private $dataAtualizacao = null;
    private $cpfResponsavel = null;
    
    public function __construct($grupo = null) {
        $this->setGrupo($grupo);
    }
    
    public function setGrupo($grupo = null){
        if(!empty($grupo) && gettype($grupo) === 'array'){
            if(isset($grupo[ViewGrupo::$nome])){ $this->nome = $grupo[ViewGrupo::$nome]; }
            if(isset($grupo[ViewGrupo::$formaExecucao])){ $this->formaExecucao = $grupo[ViewGrupo::$formaExecucao]; }
            if(isset($grupo[ViewGrupo::$cras])){$this->cras = $grupo[ViewGrupo::$cras];}
            if(isset($grupo[ViewGrupo::$entidade])){ $this->entidadeAtiva = $grupo[ViewGrupo::$entidade]; }
            if(isset($grupo[ViewGrupo::$coordenador])){ $this->coordenador = $grupo[ViewGrupo::$coordenador]; }
            if(isset($grupo[ViewGrupo::$tecnicoNivelSuperior])){ $this->tecnicoNivelSuperior = $grupo[ViewGrupo::$tecnicoNivelSuperior]; }
            if(isset($grupo[ViewGrupo::$tecnicoNivelMedio])){ $this->tecnicoNivelMedio = $grupo[ViewGrupo::$tecnicoNivelMedio]; }
            if(isset($grupo[ViewGrupo::$codigo])){ $this->codigo = $grupo[ViewGrupo::$codigo]; }
            if(isset($grupo[ViewGrupo::$status])){ $this->status = $grupo[ViewGrupo::$status]; }
            $mensagem = 'Grupo inicializado com sucesso!';
        }else{
            $mensagem = 'Erro: o grupo trago não é um array ou está vazio';
        }
        return $mensagem;
    }
    
    public function getGrupo(){
        $retorno = array();
        $retorno['grupoVigencia'] = $this->dataVigencia;
        $retorno['grupoNomeFantazia'] = $this->nome;
        $retorno['formaExecucao'] = $this->formaExecucao;
        $retorno['v13841'] = $this->cras;
        $retorno['entidade'] = $this->entidadeAtiva;
        $retorno['coordenador'] = $this->coordenador;
        $retorno['tecnicoNivelSuperior'] = $this->tecnicoNivelSuperior;
        $retorno['tecnicoNivelMedio'] = $this->tecnicoNivelMedio;
        $retorno['codigoGrupo'] = $this->codigo;
        $retorno['status'] = $this->status;
        return $retorno;
    }
    
    /**
     * Valida os dados do 
     * @param bool $update
     * @return string
     */
    public function validar($update = false){
        $retorno = '';
        #$retorno .= !empty($this->dataVigencia)?'':'dataVigencia;;';
        $retorno .= !empty($this->nome)?'':'nome;;';
        $retorno .= !empty($this->formaExecucao) || $this->formaExecucao==='0'?'':'formaExecucao;;';
        $retorno .= !empty($this->entidadeAtiva) || $this->entidadeAtiva==='0'?'':'entidadeAtiva;;';
        $retorno .= !empty($this->coordenador) || $this->coordenador==='0'?'':'coordenador;;';
        $retorno .= !empty($this->tecnicoNivelSuperior) || $this->tecnicoNivelSuperior==='0'?'':'tecnicoNivelSuperior;;';
        $retorno .= !empty($this->tecnicoNivelMedio) || $this->tecnicoNivelMedio==='0'?'':'tecnicoNivelMedio;;';
        $retorno .= !empty($this->cras) || $this->cras==='0'?'':'cras;;';
        #$retorno .= !empty($this->cpfResponsavel)?'':'cpfResponsavel'; /** @todo reativar esta linha de código, quando a validação SAA foi implementada*/
        if($retorno === '' && $update === true){
            $retorno = !empty($this->codigo)? $retorno:$retorno.'codigo;;';
        }
        //$retorno = $retorno === ''?true:$retorno;
        return $retorno;
    }
    
    //geters'n'seters
    function getCodigo() {
        return $this->codigo;
    }

    function getDataVigencia() {
        return $this->dataVigencia;
    }

    function getNome() {
        return $this->nome;
    }

    function getFormaExecucao() {
        return $this->formaExecucao;
    }

    function getEntidadeAtiva() {
        return $this->entidadeAtiva;
    }

    function getCoordenador() {
        return $this->coordenador;
    }

    function getTecnicoNivelSuperior() {
        return $this->tecnicoNivelSuperior;
    }

    function getTecnicoNivelMedio() {
        return $this->tecnicoNivelMedio;
    }

    function getStatus() {
        return $this->status;
    }

    function getDataInsercao() {
        return $this->dataInsercao;
    }

    function getCpfResponsavelInsercao() {
        return $this->cpfResponsavelInsercao;
    }

    function getDataAtualizacao() {
        return $this->dataAtualizacao;
    }

    function getCpfResponsavelAlteracao() {
        return $this->cpfResponsavelAlteracao;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setDataVigencia($dataVigencia) {
        $this->dataVigencia = $dataVigencia;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setFormaExecucao($formaExecucao) {
        $this->formaExecucao = $formaExecucao;
    }

    function setEntidadeAtiva($entidadeAtiva) {
        $this->entidadeAtiva = $entidadeAtiva;
    }

    function setCoordenador($coordenador) {
        $this->coordenador = $coordenador;
    }

    function setTecnicoNivelSuperior($tecnicoNivelSuperior) {
        $this->tecnicoNivelSuperior = $tecnicoNivelSuperior;
    }

    function setTecnicoNivelMedio($tecnicoNivelMedio) {
        $this->tecnicoNivelMedio = $tecnicoNivelMedio;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setDataInsercao($dataInsercao) {
        $this->dataInsercao = $dataInsercao;
    }

    function setCpfResponsavelInsercao($cpfResponsavelInsercao) {
        $this->cpfResponsavelInsercao = $cpfResponsavelInsercao;
    }

    function setDataAtualizacao($dataAtualizacao) {
        $this->dataAtualizacao = $dataAtualizacao;
    }

    function setCpfResponsavelAlteracao($cpfResponsavelAlteracao) {
        $this->cpfResponsavelAlteracao = $cpfResponsavelAlteracao;
    }
    function getCras() {
        return $this->cras;
    }

    function getCpfResponsavel() {
        return $this->cpfResponsavel;
    }

    function setCras($cras) {
        $this->cras = $cras;
    }

    function setCpfResponsavel($cpfResponsavel) {
        $this->cpfResponsavel = $cpfResponsavel;
    }


}