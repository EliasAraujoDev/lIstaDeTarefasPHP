<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
</head>
<body>
    <h1>Lista de Tarefas</h1>
    <h2>Adicionar Tarefa</h2>
    <form action="adicionar_tarefa.php" method="POST">
        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo"><br>
        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao"></textarea><br>
        <input type="submit" value="Adicionar Tarefa">
    </form>
    <h2>Tarefas</h2>
    <a href="visualizar_tarefas.php">Visualizar Tarefas</a>
</body>
</html>
