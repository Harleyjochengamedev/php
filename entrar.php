<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
</head>
<body>
    <form method="post" action="">
    <fieldset>
    <legend>login</legend>
    <label> usuario: <input type="text" name="usuario" id="">
    </label>
     <label>senha: <input type="password" name="senha" id="">
     </label>
     <input type="submit" value="entrar">
    </fieldset>
    </form>
<?php
    if (isset($_POST['usuario']) && isset($_POST['senha'])){
        if($_POST['usuario']!= 'user'){
            echo'Usuario Inexistente';
        }
        if($_POST['senha']!= '12345678'){
            echo 'Senha Incorreta';
        }
        if ($_POST["usuario"]=='user' && $_POST['senha'] == "12345678"){
            echo"Entrando no Sistema, vai demorar até no próximo ano bissexto";
            session_start();
            $_SESSION["usuario"] = $_POST['usuario'];
            header("Location: sisteminha.php",true);
        }
    }else{
        echo "Não preenchestes todos os campos";
    }
?>
</body>
</html>