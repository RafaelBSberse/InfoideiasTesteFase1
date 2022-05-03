<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeculoAno</title>
</head>
<body style="background-color: #123449; height: 100vh; width: 100vw; padding: 0; margin: 0;">
    <div style="display: flex; justify-content: center; height: 10%; width: 100%; padding: 0; margin: 0; align-items: center;">
        <font face="Calibri" style="color: #d3d3d3; font-size: 45px;">Teste 1ª Fase - Infoideias Software e Consultoria</font>
    </div>
    <div style="height: 85%; width: 100%; padding: 0; margin: 0;">
        <div style="background-color: #fff; height: 100%; width: 95%; margin: auto; border-radius: 10px; padding: 20px; box-sizing: border-box;">
            <div style="font-family: Calibri">Atividade 1 - Função SeculoAno</div>
            <br/>
            <form method="post" action="#">
                <input type="text" placeholder="Digite o ano" name="ano" style="font-family: Calibri"/>
                <input type="submit" name="submit" value="enviar" style="font-family: Calibri"/>
            </form>
            <?php
                if (isset($_POST["submit"])){
                    SeculoAno($_POST["ano"]);
                }

                function SeculoAno($ano){
                    $sec = intdiv($ano, 100);
                    if($ano%100 != 0){
                        $sec += 1;
                    }

                    echo "<font face='Calibri''>$ano faz parte do seculo $sec</font>";
                }

            ?>
        </div>
    </div>
</body>
</html>
