<?php
class TarefaView {
    public function exibirTarefas($tarefas) {
        echo "<h2>Tarefas</h2>";
        echo "<ul>";
        foreach ($tarefas as $indice => $tarefa) {
            echo "<li>";
            echo "<strong>Título:</strong> " . $tarefa->getTitulo() . "<br>";
            echo "<strong>Descrição:</strong> " . $tarefa->getDescricao() . "<br>";
            echo "<strong>Data de Criação:</strong> " . $tarefa->getDataCriacao() . "<br>";
            echo "<strong>Concluída:</strong> " . ($tarefa->isConcluida() ? "Sim" : "Não") . "<br>";
            echo "<a href='index.php?action=concluir&id=$indice'>Marcar como Concluída</a> | ";
            echo "<a href='index.php?action=deletar&id=$indice'>Deletar</a>";
            echo "</li><br>";
        }
        echo "</ul>";
    }

    public function exibirMensagem($mensagem) {
        echo $mensagem . "<br>";
    }
}
?>
