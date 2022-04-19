<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 07 - table</title>
</head>

    <style>
        
        body {
            background-color: #f5f5f5;
        }

        form input[type="text"] {
            width: 20%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        form input[type="number"] {
            width: 20%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        form select[name="fabricante"] {
            width: 20%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        form input[type="submit"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        form textarea[name="mensagem"] {
            width: 20%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

    </style>

<body>
    
    <h1>Exercicio de formulario para cadastro Produto</h1>
    <hr>

    <form action="exercicio07post.php" method="post">
        <p>
            <label for="prduto">Produto: </label>
            <input type="text" name="produto" id="produto">
        </p>

        <p>
            <label for="fabricante"> Fabricante: </label>
            
        <?php 
            $fabricantes=["fabricante 1", "fabricante 2", "fabricante 3","fabricante 4"];
        ?>
            <select name="fabricante" id="fabricante">
                <!-- Opção 2: Acessar o array usando loop -->
                <option></option>

                <?php foreach($fabricantes as $fabricante){ ?>
            
                    <option><?=$fabricante?></option>
                
                <?php }; ?>
            </select>
        </p>

        <p>
            <label for="preco"> Preço: </label>
            <input type="number" name="preco" id="preco" min="100" max="10000" step="0.01">
        </p>

        <p>
            <label for="mensagem">Mensagem: </label>
            <textarea name="mensagem" id="mensagem" cols="30" rows="6"></textarea>    
        </p>

        <button type="submit" name="enviar">Enviar dado</button>
    </form>
</body>
</html>