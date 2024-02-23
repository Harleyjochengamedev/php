<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste de superglobais</title>
</head>
<body>
    <form method="get">
        <fieldset>
            <legend>entrar no sistema</legend>
            <label>
                email:
                <input type="email" name="email">
            </label>
            <label>
                senha:
                <input type="password" name="senha">
            </label>
            <input type="submit" value="entrar">
            <input type="reset" value="reiniciar valores">
        </fieldset>
    </form>
    <?php
    if(isset($_GET["email"]) && isset($_GET["senha"])){
        $email =$_GET["email"];
        $senha =$_GET["senha"];
        echo "<marquee>seu email:".$email."sua senha:".$senha."</marquee>";
    }
    ?>
    <form name="form1" method="post">
        <input type="radio" name="tamanho"value="mais" checked>
        fonte_grande
        <input type="radio" name="tamanho"value="menos">
        fonte_pequena
        <input type="submit" name="submit"value="enviar">
    </form>
    <?php
    if(isset($_POST["tamanho"])){
        $tamanho = $_POST["tamanho"];
        if($tamanho == "mais"){
            echo "<h1>bem-vindo,como foi seu carnaval no ano de".date("y")."?</h1>";
    }
    else{
        echo "<h5>bem-vindo,como foi seu carnaval no ano de".date("y")."?</h5>";
    }
}
?>
    <form method="post">
        <fieldset>
            <legend>comentarios</legend>
            <textarea name="comentario">apresente seus comentario aqui...</textarea>
            <input type="submit" value="publicar">
        </fieldset>
    </form>
    <?php
       if(isset($_POST["comentario"])){
        echo "<mark>".$_POST["comentario"]."</mark>";
        echo "<p>";
       }
       ?>
</body>
</html>