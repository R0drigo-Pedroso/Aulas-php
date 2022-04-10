<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02 Arrays ou vetores</title>
</head>

    <style>

        main, h1 {
            display: flex;
            justify-content: center;
        }

        h1{
            text-transform: uppercase;
            color
        }

        section {
            background: #94b0b7;
            padding: 10px 20px 10px 0;
            color: white;
            border-radius: 20px;
            margin: 20px;
        }

        section:hover {
            color: #945151;y
            color: black;

            transition: all 2;
        }

        section li {
            line-height: 32px;
            font-size: 20px;
            list-style: none;
        }

    </style>

<body>
    
<h1>Usuario</h1>
    <?php
        $usuario1 = [ //Vetor
            //chave associativa (identicação => valor)
            "nome" => "Rodrigo Pedroso",
            "Idade" => 25,
            "sexo" => "M",
            "cidade" => "São Paulo",
            "email" => "rodrigo@hotmail.com",
            "senha" => "*********",
        ];

        $usuario2 = [ //Vetor
            //chave associativa (identicação => valor)
            "nome" => "Serafinina",
            "Idade" => 28,
            "sexo" => "F",
            "cidade" => "São Paulo",
            "email" => "seragfi@hotmail.com",
            "senha" => "*********",
        ];
    ?>

    <main>
        <section>
            <ul>
                <li>
                    Usario: <?=$usuario1["nome"]?>
                </li>

                <li>
                    Idade: <?=$usuario1["Idade"]?>
                </li>

                <li>
                    Sexo: <?=$usuario1["sexo"]?>
                </li>

                <li>
                    cidade: <?=$usuario1["cidade"]?>
                </li>

                <li>
                    Email: <?=$usuario1["email"]?>
                </li>

                <li>
                    Senha: <?=$usuario1["senha"]?>
                </li>
            </ul>
        </section>

        <section>
        <ul>
                <li>
                    Usario: <?=$usuario2["nome"]?>
                </li>

                <li>
                    Idade: <?=$usuario2["Idade"]?>
                </li>

                <li>
                    Sexo: <?=$usuario2["sexo"]?>
                </li>

                <li>
                    cidade: <?=$usuario2["cidade"]?>
                </li>

                <li>
                    Email: <?=$usuario2["email"]?>
                </li>

                <li>
                    Senha: <?=$usuario2["senha"]?>
                </li>
            </ul>
        </section>
    </main>

</body>
</html>