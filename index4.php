<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SequenciaCrescente</title>
</head>
<body style="background-color: #123449; height: 100vh; width: 100vw; padding: 0; margin: 0;">
    <div style="display: flex; justify-content: center; height: 10%; width: 100%; padding: 0; margin: 0; align-items: center;">
        <font face="Calibri" style="color: #d3d3d3; font-size: 45px;">Teste 1ª Fase - Infoideias Software e Consultoria</font>
    </div>
    <div style="height: 85%; width: 100%; padding: 0; margin: 0;">
        <div style="background-color: #fff; height: 100%; width: 95%; margin: auto; border-radius: 10px; padding: 20px; box-sizing: border-box;">
            <div style="font-family: Calibri">Atividade 4 - Função SequenciaCrescente</div>
            <br/>
            <form method="post" action="#">
                <input type="text" name="array" placeholder="Digite os valores do Array com numeros separados por espaço. Ex: 12 15 13 20" style="font-family: Calibri; width: 430px;"/>
                <input type="submit" name="submit" value="Sortear" style="font-family: Calibri"/><br/><br/>
            </form>
            <?php
                if (isset($_POST["submit"])){
                    if(SequenciaCrescente(explode(" ", $_POST["array"]))){
                        echo "true";
                    } else {
                        echo "false";
                    };
                }

                function SequenciaCrescente($arr){
                    foreach($arr as $key => $value){
                        $arrayTemp = array_filter($arr, fn ($key2) => $key2 != $key, ARRAY_FILTER_USE_KEY);
                        if(ArrayEhCrescente(array_values($arrayTemp), count(array_values($arrayTemp)))){
                            return true;
                        }
                    }
                }
                
                function ArrayEhCrescente($arr, $len){
                    if ($len == 1 || $len == 0) return true;
                    if ($arr[$len - 1] <= $arr[$len - 2]) return false;
                    return ArrayEhCrescente($arr, $len - 1);
                }
            ?>
        </div>
    </div>
</body>
</html>
