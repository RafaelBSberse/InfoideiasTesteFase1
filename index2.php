<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primos</title>
</head>
<body style="background-color: #123449; height: 100vh; width: 100vw; padding: 0; margin: 0;">
    <div style="display: flex; justify-content: center; height: 10%; width: 100%; padding: 0; margin: 0; align-items: center;">
        <font face="Calibri" style="color: #d3d3d3; font-size: 45px;">Teste 1ª Fase - Infoideias Software e Consultoria</font>
    </div>
    <div style="height: 85%; width: 100%; padding: 0; margin: 0;">
        <div style="background-color: #fff; height: 100%; width: 95%; margin: auto; border-radius: 10px; padding: 20px; box-sizing: border-box;">
            <div style="font-family: Calibri">Atividade 2 - Função Primos</div>
            <br/>
            <form method="post" action="#">
                <input type="text" placeholder="Digite o valor inicial" name="valorInicial" style="font-family: Calibri"/>
                <input type="text" placeholder="Digite o valor final" name="valorFinal" style="font-family: Calibri"/>
                <input type="submit" name="submit" value="enviar" style="font-family: Calibri"/>
            </form>
            <?php
                if (isset($_POST["submit"])){
                    Primos($_POST["valorInicial"], $_POST["valorFinal"]);
                }

                function Primos($valorInicial = null, $valorFinal = null){
                    $arr = [];

                    if($valorInicial + 1 > $valorFinal - 1 or $valorInicial == $valorFinal){
                        echo "Valores Invalidos";
                        return;
                    }

                    foreach(range($valorInicial + 1, $valorFinal - 1) as $num){
                        verificaPrimo($num) && array_push($arr, $num);
                    }

                    echo "<span style='font-family: Calibri'>Os numeros primos entre $valorInicial e $valorFinal são: </span>";
                    foreach($arr as $primo) {
                        echo "<span style='font-family: Calibri'>$primo </span>";
                    }
                }

                function verificaPrimo($number){
                    if ($number == 1)
                    return false;
                    for ($i = 2; $i <= $number/2; $i++){
                        if ($number % $i == 0)
                            return false;
                    }
                    return true;
                }
            ?>
        </div>
    </div>
</body>
</html>
