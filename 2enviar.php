<?php

$nome = addslashes($_POST ['nome']);
$email = addslashes($_POST['e-mail']);
$celular = addslashes($_POST['celular']);

$para = "kfcardoso@uol.com.br";
$assunto = "Contato";

$corpo = "Nome: ".$nome."\n"."email: "."\n"."celular: ".$celular;

$cabeca = "from kauanmiguelito.lc@gmial.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso");
}else{
    echo("Houve um erro ao enviar o e-mail");
}

?>