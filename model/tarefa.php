<?php
class Tarefa {
    private $titulo;
    private $descricao;
    private $dataCriacao;
    private $dataConclusao;
    private $concluida;

    public function __construct($titulo, $descricao) {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->dataCriacao = date('Y-m-d H:i:s');
        $this->concluida = false;
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

    public function isConcluida() {
        return $this->concluida;
    }

    public function concluirTarefa() {
        $this->concluida = true;
        $this->dataConclusao = date('Y-m-d H:i:s');
    }
}
?>
