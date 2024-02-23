<?php
   include "index.php";
?>
<?php
   echo "<h1>Oi gentee!</h1>
   <h2>Bom dia!</h2>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <fieldset>
            <legend>
                Forca:
            </legend>
            <label> 1-LETRA: NOVE LETRAS </label><br>
            <label> 2-UM DOS PILARES DA PROGRAMAÇÃO ORIENTADO A OBJETOS. </label><br>
            <select name="letra" id="letra">
                <option value="nenhum">Nenhum</option>
                <option value="a">a</option>
                <option value="b">b</option>
                <option value="c">c</option>
                <option value="d">d</option>
                <option value="e">e</option>
                <option value="f">f</option>
                <option value="g">g</option>
                <option value="h">h</option>
                <option value="i">i</option>
                <option value="j">j</option>
                <option value="l">l</option>
                <option value="m">m</option>
                <option value="n">n</option>
                <option value="o">o</option>
                <option value="p">p</option>
                <option value="q">q</option>
                <option value="r">r</option>
                <option value="s">s</option>
                <option value="t">t</option>
                <option value="u">u</option>
                <option value="v">v</option>
                <option value="x">x</option>
                <option value="y">y</option>
                <option value="w">w</option>
                <option value="z">z</option>
            </select>
            <input type="submit" value="Jogar">
        </fieldset>
    </form>
    <?php
        if(isset($_GET['letra'])){
            if($_GET['letra']== 'a' || $_GET['letra']== 'b' || $_GET['letra']== 's' || $_GET['letra']== 't' || $_GET['letra']== 'r' || $_GET['letra']== 'c' || $_GET['letra']== 'o' ){
                if($_GET['letra']== 'a'){
                    echo " Primeira, Sexta e oitava letra";
                }
                if($_GET['letra'] == 'b'){
                    echo "Segunda letra";
                }
                if($_GET['letra'] == 's'){
                    echo "Terceira letra";
                }
                if($_GET['letra'] == 't'){
                    echo "Quarta letra";
                }
                if($_GET['letra'] == 'r'){
                    echo "Quinta letra";
                }
                if($_GET['letra'] == 'c'){
                    echo "Sétima letra";
                }
                if($_GET['letra'] == 'o'){
                    echo "Nona letra";
                }
            }else{
                echo "Não tem nessa palavra";
            }
        }

    ?>
</body>
</html>