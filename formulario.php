<?php
$to = "daniloluz@daim.com";
$subject = "Nova mensagem do site";
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];
$message = "E-mail: ".$email."\n\nTelefone: ".$telefone."\n\nMensagem:\n".$mensagem;
$headers = "From: ".$email;
mail($to, $subject, $message, $headers);
echo "Obrigado pela mensagem! Entraremos em contato em breve.";
?>
