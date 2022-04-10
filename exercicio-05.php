<!DOCTYPE html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de media</title>

    <style>
        section {
            text-align: center;
            margin: 0 auto;
            background-color: #f2f2f2;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            width: 30%;
            font-size: 2rem;
            box-shadow: 10px 10px 10px #ccc;
        }

        h1 {
            font-family: "Helvetica Neue",Helvetica,Arial;
            text-transform: uppercase;
            text-align: center;
        }
        p {
            font-family: sans-serif;
        }

        .Aprovado {
            color: blue;
        }

        .Reprovado {
            color: red;
        }
   </style>

</head>
<body>
    
    <section>
        <h1>Calculo do aluno!</h1>

        <?php
            function calculaMedia($n1, $n2, $n3, $n4 = 0){
                $media = ($n1 + $n2 + $n3 + $n4)/ 4;
                return $media;
            }

            function resultado($media){
                if($media >= 7){
                    return "Aprovado";
                }else{
                    return "Reprovado";
                }
            }

         $media = calculaMedia(7, 1, 2, 10);
        ?>
            <p>A media do aluno é: <?=$media?></p>
            
            <p class="<?=resultado($media)?>">
            <?=resultado($media)?>!</p>

</section>

</body>
</html>