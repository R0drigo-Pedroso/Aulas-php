<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de processamento</title>
</head>
<body>

    <h1>Formulario de processamento</h1>
    <hr>

    <!-- <form action="" method="post">
        <p>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </p>

        <p>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" value="">
        </p>

        <button type="submit" name="enviar">Enviar</button>
    </form> -->
    
    <?php
    // Detectar quando o formulário é acionado
    if(isset($_POST['enviar'])){

        if(empty($_POST['nome'])){
        
        ?>    
            <p>Preencha os campos!</p>
            <p><a href="10-formulario-processamento-elimitar-campos.php">Voltar</a></p>
            
        <?php
            } else{
                $nome = filter_var($_POST['nome'], FILTER_SANITIZE_SPECIAL_CHARS);
                $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);    

                ?>
                    <section>  
                        <h2>Dados</h2>
                        <p>Nome: <?=$nome?></p>
                        <p>E-mail: <?=$email?></p>
                        <p><a href="10-formulario-processamento-elimitar-campos.php">Voltar</a></p>
                    </section>
            
            <?php
            }
        } else { ?>
             <form action="" method="post">
                <p>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome">
                </p>

                <p>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" value="">
                </p>

                <button type="submit" name="enviar">Enviar</button>
            </form>

        <?php } ?>

</body>
</html>