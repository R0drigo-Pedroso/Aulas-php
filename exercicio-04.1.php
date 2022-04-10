<!DOCTYPE html>
<html pt-br>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio php</title>

    <style>
        
        table {
          background: #F2CD88;
          margin: 0 auto;
          width: 50%;
          text-align: center;
          border-collapse: separate;
          text-transform: uppercase;
          line-height: 2.5em;
          border-radius: 10px;
        }

        td,th {
            border-radius: 3px;
        }

        th {
            background-color: #261003;
            
            color: white;
        }

        tr:nth-child(odd){
            background-color: #0476D9;
            color: white;
        }

    </style>

</head>
<body>
    
    <?php

        $numbers = 1;

        $tager = [
            "html" => "Estruturação",
            "CSS" => "estilo",
            "JS" => "Liguagem",
            "PHP" => "Bando de Dados"
        ]
    ?>

        <table>
            <th>ID</th>
            <th>Liguagem</th>
            <th>Descrição</th>
    <?php

     foreach ($tager as $tag => $value) {
    ?>
        <tr>    
            <td><?=$numbers++;?></td>
            <td><?=$tag?></td>    
            <td><?=$value?></td>
        </tr>
   <?php 
        }
    ?>
        
        </table>

</body>
</html>