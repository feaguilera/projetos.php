<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Estrutura de repetição Tabuada - Curso PHP -eXript</title>
</head>

<body>

    <?php
        $tab = 0;
        if(isset($_POST["edTABUADA"])){
            $tab = $_POST["edTABUADA"];
            if(!    ($tab)){
                echo "<br>O valor numerico informado não é  numero.<br>";
            }else{

                for($num=0; $num<=10; $num++){
                    //0x$tab = $nm * $tab
                    echo $num . "x" . $tab . "=" . ($num * $tab) . "<br>";
                }
            }
        }

       
    ?>
    <form method="post">
        <input type="text" name="edTABUADA">
        <input type="submit">

    </form>

</body>
</html>
