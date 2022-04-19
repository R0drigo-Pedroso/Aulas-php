<!DOCTYPE html>
<html pt-br>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h2 { 
            color: #008080;
            font-family: arial, sans-serif;
            font-size: 24px;
            font-style: normal;
            font-weight: bold;
            line-height: 35px;
            text-align: center;
        }

        ul {
            list-style: none;
            line-height: 2;
            background: #458645;
            color: white;
            text-transform: uppercase;
            padding: 10px;
            margin: 0;
            text-align: center;
        }

        p {
            font-family: arial, sans-serif;
            font-size: 25px;
            color: red;
            font-style: normal;
            font-weight: bold;
            line-height: 35px;
            text-align: center;
        }
    </style>

</head>
<body>
    
    <h1>Processamento de dados usando POST</h1>
    <hr>

    <?php 

    if( empty($_POST['nome']) || empty($_POST['email']) ) {
    ?>
        <p>Você deve preencher nome e e-mail!</p>";
    
    <?php
    } else {
        //capturando os dados transmitidos via POST
        $nome=filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email=filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $idade=filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
        $mensagem=filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_SPECIAL_CHARS);
    
        // usando o operador de coalescência nula ??
        // se houver interesses, armazene seus valores. Senão, deixe o array vazio
        // $interesses=$_POST["interesses"] ?? [];

        $interesses=filter_var_array($_POST["interesses"] ?? [], FILTER_SANITIZE_SPECIAL_CHARS);

        $informativos=filter_input(INPUT_POST, "informativos", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>

    <h2>Dados:</h2>
        <ul>
            <li>Nome: <?=$nome?></li>
            <li>Email: <?=$email?></li>
            <li>Idade: <?=$idade?></li>
            <li>Informativos: <?=$informativos?></li>


            <!-- !empty é para verificar se esta vazio, caso não espeja preenchido será execultado da mesma maneira -->
            <?php if( !empty($interesses) ){ ?> 

                <!-- Opção 1: implodir o array, transformando em string -->
                <li>Interesses: <?=implode(", ",$interesses)?></li>

                <li>Interesses: 
                    <ul>
                        <!-- Opção 2: Acessar o array usando loop -->
                        <?php foreach($interesses as $interesse){ ?>
                    
                            <li><?=$interesse?></li>
                        
                        <?php }; ?>
                    </ul>
                </li>
            <?php }?>

            <li>mensagem: <?=$mensagem?></li>
        </ul>

    <?php } ?> <!-- fim if/else da validação de campos obrigatórios -->
    
</body>
</html>