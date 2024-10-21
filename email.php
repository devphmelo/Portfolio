<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $celular = addcslashes($_POST['celular']);

    $destino = "pedro.henrique.dmm@gmail.com";
    $assunto = "Portfólio";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Celular: ".$celular;

    $cabeca = "From: pedro.henrique.dmm@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($destino,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }
    else{
        echo("Houve um erro ao enviar o email!");
    }
    


?>