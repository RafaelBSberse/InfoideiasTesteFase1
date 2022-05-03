<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ValoresQueNãoRepetem</title>
</head>
<body style="background-color: #123449; height: 100vh; width: 100vw; padding: 0; margin: 0;">
    <div style="display: flex; justify-content: center; height: 10%; width: 100%; padding: 0; margin: 0; align-items: center;">
        <font face="Calibri" style="color: #d3d3d3; font-size: 45px;">Teste 1ª Fase - Infoideias Software e Consultoria</font>
    </div>
    <div style="height: 85%; width: 100%; padding: 0; margin: 0;">
        <div style="background-color: #fff; height: 100%; width: 95%; margin: auto; border-radius: 10px; padding: 20px; box-sizing: border-box;">
            <div style="font-family: Calibri">Atividade 3 - Função ValoresQueNaoRepetem</div>
            <br/>
            <form method="post" action="#">
                <input type="submit" name="submit" value="Sortear" style="font-family: Calibri"/><br/><br/>
            </form>
            <?php
                if (isset($_POST["submit"])){
                    Sortear();
                }

                function Sortear(){
                    $arr = [];

                    foreach(range(0, 19) as $key){
                        $arr[$key] = rand(0, 10);
                    }  

                    echo "<div style='font-family: Calibri'>Array: </div>";
                    print_r($arr);

                    $arr = array_count_values($arr);
                    
                    echo "<br/><br/><div style='font-family: Calibri'>Valores que não repetem: </div>";
                    foreach($arr as $key => $value){
                        if ($value == 1) echo "$key ";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
