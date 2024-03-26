<?php
require_once 'model/tarefa.php';
require_once 'view/tarefaView.php';

class TarefaController {
    private $listaTarefas;
    private $tarefaView;

    public function __construct() {
        $this->listaTarefas = array();
        $this->tarefaView = new TarefaView();
    }

    public function adicionarTarefa($titulo, $descricao) {
        $tarefa = new Tarefa($titulo, $descricao);
        $this->listaTarefas[] = $tarefa;
        $this->tarefaView->exibirMensagem("Tarefa adicionada com sucesso.");
    }

    public function deletarTarefa($indiceTarefa) {
        if (isset($this->listaTarefas[$indiceTarefa])) {
            unset($this->listaTarefas[$indiceTarefa]);
            $this->tarefaView->exibirMensagem("Tarefa deletada com sucesso.");
        } else {
            $this->tarefaView->exibirMensagem("Tarefa não encontrada.");
        }
    }

    public function marcarTarefaComoConcluida($indiceTarefa) {
        if (isset($this->listaTarefas[$indiceTarefa])) {
            $this->listaTarefas[$indiceTarefa]->concluirTarefa();
            $this->tarefaView->exibirMensagem("Tarefa marcada como concluída.");
        } else {
            $this->tarefaView->exibirMensagem("Tarefa não encontrada.");
        }
    }

    public function exibirTarefasEFormulario() {
        $this->tarefaView->exibirTarefas($this->listaTarefas);

        echo "<h2>Adicionar Nova Tarefa</h2>";
        echo "<form method='post' action='index.php?action=adicionar'>";
        echo "<label>Título:</label><br>";
        echo "<input type='text' name='titulo'><br>";
        echo "<label>Descrição:</label><br>";
        echo "<textarea name='descricao'></textarea><br>";
        echo "<input type='submit' name='adicionar' value='Adicionar'>";
        echo "</form>";
    }
}
?>
