<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formulario.css">

</head>
<body>

<header>
        <h1>Cadastro de Clientes | Pizza HUB</h1>
    </header>

    <main class = "text">
        <?php
            $nome = $_GET ["nome"];
            $telefone = $_GET ["telefone"];
            $email = $_GET ["email"];

            echo "<p> Obrigado  por cadastrar-se em nosso site $nome Esperamos que desfrute de uma ótima experiência, agradecemos pela preferência e confiança em nossos serviços!<\p>"
        ?>

        <br><br>

        <button class = "button-home" >
            <a href="index.html"> Voltar a página inicial</a>
        </button>
    </main>

</body>
</html>