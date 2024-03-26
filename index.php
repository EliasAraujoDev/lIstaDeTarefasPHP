<?php
require_once 'controller/tarefaController.php';

$controller = new TarefaController();

// Verifica ação a ser executada
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $id = $_GET['id'] ?? null;

    switch ($action) {
        case 'adicionar':
            if (isset($_POST['adicionar'])) {
                $titulo = $_POST['titulo'];
                $descricao = $_POST['descricao'];
                $controller->adicionarTarefa($titulo, $descricao);
            }
            break;
        case 'concluir':
            if ($id !== null) {
                $controller->marcarTarefaComoConcluida($id);
            }
            break;
        case 'deletar':
            if ($id !== null) {
                $controller->deletarTarefa($id);
            }
            break;
        default:
            echo "Ação inválida!";
            break;
    }
}

$controller->exibirTarefasEFormulario();
?>
