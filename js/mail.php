<?php
// Recebendo dados do formulário
$name = $_POST['nome-completo'];
$rua = $_POST['rua-avenida'];
$numero = $_POST['nemero'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telCelular = $_POST['tel-cel'];
$telFixo = $_POST['tel-fixo'];
$telRecado = $_POST['tel-recados'];
$email = $_POST['email'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$possuiCnh = $_POST['possui-cnh'];
$cnh = $_POST['cnh'];
$ctps = $_POST['ctps'];
$serie = $_POST['serie'];
$formacao = $_POST['formacao'];
$estCivil = $_POST['estado-civil'];
$dependentes = $_POST['dependentes'];
$quantos = $_POST['quantos-dep'];
$subject = "Mensagem do Site";

$headers = "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Dados que serão enviados
$corpo = "Formulário da página TRABALHE CONOSCO <br>";
$corpo .= "Nome: " . $name . " <br>";
$corpo .= "Rua / Avenida: " . $rua . " <br>";
$corpo .= "Numero: " . $numero . " <br>";
$corpo .= "CEP: " . $cep . " <br>";
$corpo .= "Bairro: " . $bairro . " <br>";
$corpo .= "Complemento: " . $complemento . " <br>";
$corpo .= "Cidade: " . $cidade . " <br>";
$corpo .= "Estado: " . $estado . " <br>";
$corpo .= "Telefone Celular: " . $telCelular . " <br>";
$corpo .= "Telefone Fixo: " . $telFixo . " <br>";
$corpo .= "Telefone Recado: " . $telRecado . " <br>";
$corpo .= "Email: " . $email . " <br>";
$corpo .= "RG: " . $rg . " <br>";
$corpo .= "CPF: " . $cpf . " <br>";
$corpo .= "Possui CNH: " . $possuiCnh . " <br>";
$corpo .= "CNH: " . $cnh . " <br>";
$corpo .= "Carteira: " . $ctps . " <br>";
$corpo .= "Serie: " . $serie . " <br>";
$corpo .= "Formação: " . $formacao . " <br>";
$corpo .= "Estado Civil: " . $estCivil . " <br>";
$corpo .= "Possui Dependentes: " . $dependentes . " <br>";


// Email que receberá a mensagem (Não se esqueça de substituir)
$email_to = 'contato@javagas.com.br';

// Enviando email
$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $corpo, $headers);

if ($status):
  // Enviada com sucesso
  header('location:index.php?status=sucesso');
else:
  // Se der erro
  header('location:index.php?status=erro');
endif;
?>