<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/lIstaDeTarefasPHP/model/Task.php";


class TaskController {
    private $tarefas;

    public function __construct() {
        session_start();
        if (!isset($_SESSION['tarefas'])) {
            $_SESSION['tarefas'] = [];
        }
        $this->tarefas = &$_SESSION['tarefas'];
    }

    public function adicionarTarefa($titulo, $descricao) {
        $tarefa = new Task($titulo, $descricao);
        $this->tarefas[] = $tarefa;
    }

    public function getTarefas() {
        return $this->tarefas;
    }

    public function marcarTarefaComoConcluida($idTarefa) {
        if (isset($this->tarefas[$idTarefa])) {
            $this->tarefas[$idTarefa]->marcarComoConcluida();
        }
    }

    public function excluirTarefa($idTarefa) {
        if (isset($this->tarefas[$idTarefa])) {
            unset($this->tarefas[$idTarefa]);
        }
    }
}

?>