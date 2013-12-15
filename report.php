<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="style.css" />
  <title>Anotações sobre o circo potiguar</title>
</head>
<body>


<?php
  $name = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $mensagem = $_POST['mensagem'];

  $to = 'fjasubinformatica@rn.gov.br';
  $subject = 'Anotações sobre o circo potiguar';
  $msg =  "Nome: $name \n" .
          "Email: $email\n" .
          "Telefone: $telefone\n" .
          "Mensagem: $mensagem";
  mail($to, $subject, $msg, 'From:' . $email);

  echo '<h1>Obrigado por enviar sua mensagem</h1>.<br /> <br />';

  echo 'Seu nome: ' . $name . '<br />';
  echo 'Seu email: ' . $email . '<br />';
  echo 'Seu telefone: ' . $telefone . '<br />';
  echo 'Mensagem: ' . $mensagem ;
?>

</body>
</html>
