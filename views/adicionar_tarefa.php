<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/lIstaDeTarefasPHP/controller/TaskController.php";

$controller = new TaskController();
$controller->adicionarTarefa($_POST['titulo'], $_POST['descricao']);

header("Location: index.php");
?>
