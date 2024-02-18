<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imc e mais</title>
</head>
<body>
    <form>
        <fieldset>
        <legend>imc(indice de massa corporal)</legend>
        <label>
        peso(em kilograma):
        <input type="double" name="peso"/>
        </label>
        <label>
            altura(em metros)
            <input type="double" name="altura"/>
        </label>
        <input type="submit" value="calcular"/>
        </fieldset>
    </form>
        
    <?php
        if(isset($_GET['peso']) && isset($_GET['altura'])){
            $peso = $_GET['peso'];
            $altura = $_GET['altura'];
            $imc = $peso/($altura*$altura);
            echo "seu indice de massa corporal: ".$imc;
            if($imc <16){
                echo "baixo peso muito grave,por favor se alimentar melhor";
        }
        elseif($imc<16.99){
            echo "baixo peso grave, comer é viver!";
        }
        elseif($imc<18.49){
            echo "baixo peso, coma mais proteinas";
        }
        elseif($imc<24.99){
            echo "normalissimo,keep going!";
        }
        elseif($imc<29.99){
            echo "sobrepeso,cuidado";
        }
        elseif($imc<34.99){
            echo "obesidade nivel 1,procure um nutricionista e faça exercicios!";
        }
        elseif($imc<39.99){
            echo "obesidade nivel 2, procure nutricionista, faça exercicios e procure um cardiologista!";
        }
        elseif($imc>=40){
            echo "obesidade nivel 3,passe la no quilos mortais";
        }
        }
    ?>
    <a href="index.php">voltar</a>
    </body>
    </html>