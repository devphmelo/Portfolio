<?php

    $nome = htmlspecialchars($_POST['nome']);
    $email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
    $celular = htmlspecialchars($_POST['celular']);

    $destino = "pedro.henrique.dmm@gmail.com";
    $assunto = "Portfólio";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Celular: ".$celular;

    $cabeca = "From: pedro.henrique.dmm@gmail.com"."\n"."Reply-to: ".$email."\n"."X-Mailer:PHP/".phpversion();

    if(mail($destino,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }
    else{
        echo("Houve um erro ao enviar o email!");
    }
    
    


?>