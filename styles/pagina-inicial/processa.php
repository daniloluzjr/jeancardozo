<?php
$para = 'daniloluz@aim.com';
$assunto = 'Mensagem do formulário do Site Jean Cardozo';
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$headers = "From: $nome <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-type: text/html\r\n";

$corpo = "Nome: $nome<br>";
$corpo .= "Telefone: $telefone<br>";
$corpo .= "Mensagem: $mensagem<br>";

mail($para, $assunto, $corpo, $headers);

echo 'Mensagem enviada com sucesso!';
?>

