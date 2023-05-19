<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <style>
        body{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: white;
            text-align: center;
            background: linear-gradient(to left, blue, rgba(172, 4, 172, 0.575));
            display: flex;
            flex-direction: column;
            align-items: center;
        
        }
        .box_form{
            background-color: rgba(0, 0, 0, 0.466);
            width: 30%;
            border-radius: 10px;
            padding: 30px;
            
            
        }
        #num{
            padding: 5px;
            margin-bottom: 5px;
            border-radius: 5px;
            border: none;
            outline: none;
            width: 50%;
        }
            

        #num2{
            padding: 5px;
            margin-top: 5px;
            border-radius: 5px;
            border: none;
            outline: none;
            width: 50%;
            margin-bottom: 10px;
        }
        form{
            padding: 1em;
        }
        #enviar{
            background-color: rgba(0, 152, 253, 0.904);
            color: rgb(255, 255, 255);
            border-radius: 5px;
            border: none;
            outline: none;
            height: 25px;
        }
        #enviar:hover{
            background-color: rgba(0, 152, 253, 0.692) ;
        }
        #numero{
            padding-right: 15px;
        }
    </style>
</head>
<body>
    <h1>Tabuada por repetição</h1>
    <div class="box_form">
        <form action="index.php" method="post">
            <div>

                <label for="num" id="numero">Número:</label>

                <input type="number" name="valorx" id="num" placeholder="Digite um número"><br>
                
                <label for="num2">Repetições:</label>

                <input type="number" name="valorn" id="num2" placeholder="Digite a quantidade de Repetições">
                

            </div>
            <input type="submit" value="Enviar" id="enviar">
        </form>
        <div>
            <?php
                
                $number = $_POST['valorx'];
                $repeticoes = $_POST['valorn'];

                function tabuada($num, $contador, $final)
                {
                    echo "$num X $contador = " . $num * $contador . "</br>";

                    if($contador < $final) $contador++;
                    else return $num * $contador;

                    return tabuada($num, $contador, $final);
                }
                tabuada($number, 1, $repeticoes)
               
            ?>

           
        </div>
    </div>
</body>
</html>