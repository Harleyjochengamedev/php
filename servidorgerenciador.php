<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="Viewport" content="width-device-width, initial-scale=1.0">
<tittle> gerenciador de tarefas</tittle>
</head>
<Body>
<forms>
<fieldset>
<legend> Nova tarefa </legend>
<label>
Tarefa:
<input type="text" name="nome"/>
</label>
<input type="submit" Value="Cadastrar"/>
</fieldset>
</forms>

<a href="indes.php">voltar</a>

<?php
echo $_GET["nome"];
?>

</Body>
</html>