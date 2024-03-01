<?php
    session_start();
    echo "Bem-vindo, Usuário: ".$_SESSION['usuario'];
    function pagina_index(){
        echo '<h1>Titulo 1</h1>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        <h2>Titulo 2</h2>
        <p>shgrtrfthcfghtyibv nfgvjtyncvmjkbn.</p>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusões: <?php echo $_SESSION['usuario']; ?></title>
</head>
<body>
    <a href="sair.php">Sair</a>
    <?php
        pagina_index()
    ?>
</body>
</html>