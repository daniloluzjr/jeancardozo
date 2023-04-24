<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Informações do formulário
  $nome = $_POST["nome"];
  $telefone = $_POST["telefone"];
  $mensagem = $_POST["mensagem"];

  // Endereço de e-mail para o qual enviar a mensagem
  $destinatario = "daniloluz@aim.com";

  // Assunto do e-mail
  $assunto = "Nova mensagem do site";

  // Corpo da mensagem
  $corpo = "Nome: " . $nome . "\n";
  $corpo .= "Telefone: " . $telefone . "\n";
  $corpo .= "Mensagem: " . $mensagem . "\n";

  // Cabeçalhos do e-mail
  $headers = "De: danilojun@gmail.com\r\n";
  $headers .= "Responder para: " . $nome . " <" . $email . ">\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

  // Envia o e-mail
  if (mail($destinatario, $assunto, $corpo, $headers)) {
    echo "Mensagem enviada com sucesso!";
  } else {
    echo "Erro ao enviar a mensagem.";
  }
}
?>
