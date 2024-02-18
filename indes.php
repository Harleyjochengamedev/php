<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="Viewport" content="width-device-width, initial-scale=1.0">
<tittle>  Primeiro programa, dia:</tittle>
</head>
<Body>
<?php 
echo "Olá mundo, hoje é" .date("d/m/Y");
echo "Agora são:" .date("H:i:s");
?>
<h1> Ano:  <?php echo date("Y"); ?> </h1>
<h2> Mes::  <?php echo date("m"); ?> </h2>
<p> Agora são: <?php echo date("h"); ?> horas e <?php echo date("i"); ?> minutos <?php echo date("A l")?> </p>
<table border="1">
<tr>
    <th>domingos</th>
    <th>segunda-feira</th>
    <th>terça-feira</th>
    <th>quarta-feira</th>
    <th>quinta-feira</th>
    <th>sexta-feira</th>
    <th>sabado</th>
</tr>
<?php linha(); ?>
<?php linha(); ?>
<?php linha(); ?>
</table>
<?php

function linha(){
    echo "<tr>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
</tr>
  ";
}
?>
<a href = "infoservidor.php">acessar informaçoes doservidor </a>
<a href ="gerenciadortarefas.php">acessar gerenciador de tarefas</a>
</body>
</html>

