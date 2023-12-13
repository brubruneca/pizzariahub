<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<<<<<<< Updated upstream

<header>
        <h1>Cadastro de Clientes | Pizza HUB</h1>
    </header>

    <main class = "text">
        <?php
            $nome = $_GET ["nome"];
            $telefone = $_GET ["telefone"];
            $email = $_GET ["email"];

            echo "<p> Obrigado  por cadastrar-se em nosso site $nome Esperamos que desfrute de uma ótima experiência, agradecemos pela preferência e confiança em nossos serviços! <\p>"
=======
   <header>
     <h1>Resultado do processamento</h1>
   </header>
   
   <main>
        <?php
           $nome = $_GET["nome"];
           $sobrenome = $_GET["sobrenome"];

           echo "É um prazer te conhecer, $nome $sobrenome! Este é meu site";
>>>>>>> Stashed changes
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
   </main>
  
</body>
</html>