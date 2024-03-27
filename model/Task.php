<?php

class Task {
    private $titulo;
    private $descricao;
    private $dataCriacao;
    private $dataConclusao;

    public function __construct($titulo, $descricao) {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->dataCriacao = date('Y-m-d');
        $this->dataConclusao = null;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getDataCriacao() {
        return $this->dataCriacao;
    }

    public function getDataConclusao() {
        return $this->dataConclusao;
    }

    public function marcarComoConcluida() {
        $this->dataConclusao = date('Y-m-d');
    }
}

?>
