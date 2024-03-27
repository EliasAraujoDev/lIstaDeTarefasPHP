<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/lIstaDeTarefasPHP/controller/TaskController.php";

$controller = new TaskController();

// Verifica se uma tarefa foi marcada como concluída
if (isset($_GET['concluir']) && isset($_GET['id'])) {
    $idTarefa = $_GET['id'];
    $controller->marcarTarefaComoConcluida($idTarefa);
    header("Location: visualizar_tarefas.php");
    exit();
}

// Verifica se uma tarefa foi excluída
if (isset($_GET['excluir']) && isset($_GET['id'])) {
    $idTarefa = $_GET['id'];
    $controller->excluirTarefa($idTarefa);
    header("Location: visualizar_tarefas.php");
    exit();
}

$tarefas = $controller->getTarefas();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Tarefas</title>
</head>
<body>
    <h1>Visualizar Tarefas</h1>
    <?php if (empty($tarefas)): ?>
        <p>Nenhuma tarefa disponível.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($tarefas as $tarefa): ?>
                <li>
                    <strong>Título:</strong> <?php echo $tarefa->getTitulo(); ?><br>
                    <strong>Descrição:</strong> <?php echo $tarefa->getDescricao(); ?><br>
                    <strong>Data de Criação:</strong> <?php echo $tarefa->getDataCriacao(); ?><br>
                    <?php if ($tarefa->getDataConclusao() != null): ?>
                        <strong>Data de Conclusão:</strong> <?php echo $tarefa->getDataConclusao(); ?><br>
                    <?php endif; ?>
                    <a href="visualizar_tarefas.php?concluir=true&id=<?php echo array_search($tarefa, $tarefas); ?>">Marcar como Concluída</a>
                    <a href="visualizar_tarefas.php?excluir=true&id=<?php echo array_search($tarefa, $tarefas); ?>">Excluir</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <a href="index.php">Voltar para Adicionar Tarefa</a>
</body>
</html>
