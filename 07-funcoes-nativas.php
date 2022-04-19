<!DOCTYPE html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Nativas</title>
</head>
<body>
    
    <h1>Exemplos de Funções Nativas do PHP</h1>

    <h2>Strings</h2>
    <?php
        /* trim(param) > remove espaço antes e depois de strings */ 
        $nome = "  Rodrigo Pedroso  ";
        $nomeSemEspaca = trim($nome);
    ?>

    <pre><?=var_dump ($nome); ?></pre>
    <pre><?=var_dump ($nomeSemEspaca); ?></pre>

    <hr>
    <h3>str_replace</h3> 
    <!-- str_replace > troca de texto para outro texto -->
    <?php 
        $fraseFeia = "<p>Fulano é um bobão e xarope</p>";
        $fraseBonita = str_replace (
            ["bobão", "xarope"],
            ["cara legal", "Genial"],
            
            $fraseFeia
        );

        echo $fraseFeia;
        echo $fraseBonita;
    ?>

    <h3>explode()</h3>
    <!-- explode > indentifica o espaço entre elementos, que está sendo passado dentro da explore()  -->
    
    <?php
        $linguagens = "HTML - CSS - JS";        
        $arrayLinguagens = explode("-", $linguagens);
    ?>

    <pre><?=var_dump ($linguagens); ?></pre>
    <pre><?=var_dump ($arrayLinguagens); ?></pre> 
<hr>
    <h2>Arrays</h2>
        <h3>implode</h3>

        <?php
            $nomeLinguagens = ["HTML", "CSS", "JS"];
            $linguagens = implode(" / ", $nomeLinguagens);
        
        ?>
        <pre><?=var_dump($linguagens)?></pre>
        <pre><?=var_dump($nomeLinguagens)?></pre>
<hr>

        <h3>extract</h3>
        <?php
            $aluno = [
                "id" => "Rodrigo",
                "idade" => "23",
                "cidade" => "São Paulo",
                "estado" => "SP",
                "sexo" => "M"
            ];
            extract($aluno); // extract > extrai os dados do array e coloca em variáveis, axuliar a imprir os dados na tela
        ?>

            <p><?=$id?></p>
            <p><?=$idade?></p>
            <p><?=$cidade?></p>
            <p><?=$estado?></p>
            <p><?=$sexo?></p>
         


    <h2>Filtros</h2>

    <?php
        $email = "rodrigo@live.com";
        $ataque = "<script>
                        document.body.innerHTML = 'Sou ráqui!! mwahaha >.<'
                   </script>";
                
                // echo $ataque;

        $ataqueAnulado = filter_var($ataque, FILTER_SANITIZE_SPECIAL_CHARS);
                
        echo $ataqueAnulado;
    ?>

    

    <pre><?=var_dump(filter_var($email, FILTER_VALIDATE_EMAIL) ); ?></pre>


    <h2>Segurança (Criptografia)</h2>

    <?php
        $senha = "Rp582700+"; // texto puro ou plain text (sem segurança)

        /* Algoritmos mais comuns
            MD5, SHA1, SHA256, SHA512
        */

        $senhaMD5 = md5($senha);
        $senhaSHA1 = sha1($senha);
        $senhaSHA256 = hash("sha256", $senha);
        $senhaSHA512 = hash("sha512", $senha);


        //senha Segura > método recomendado atualmente
        $senhaSegura = password_hash($senha, PASSWORD_DEFAULT); //gera um has de senha 60 caractere
 
    ?>

    <p>senha (texto puro): <?=$senha?></p>
    <p>senha (MD5): <?=$senhaMD5?></p>
    <p>senha (SHA1): <?=$senhaSHA1?></p>
    <p>senha (SHA256): <?=$senhaSHA256?></p>
    <p>senha (SHA512): <?=$senhaSHA512?></p>
    <p>senha (Segura): <?=$senhaSegura?></p> <!--gera um hash de 128 caractere-->

    

    <?php
        $senhaDigitada = "Rp582700+";
        if(password_verify($senhaDigitada, $senhaSegura)){
            echo "Senha correta";
        }else{ 
            echo "Senha incorreta";
        }
    ?>

</body>
</html>