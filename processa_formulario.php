<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["firstname"];
    $sobrenome = $_POST["lastname"];
    $email = $_POST["e-mail"];
    $pais = $_POST["country"];
    $assunto = $_POST["subject"];

    $mensagem = "Nome: $nome $sobrenome\n";
    $mensagem .= "E-mail: $email\n";
    $mensagem .= "País: $pais\n";
    $mensagem .= "Assunto: $assunto\n";

    $destinatario = "apollo128w@gmail.com";
    $assunto_email = "Nova mensagem do formulário do site";

    // Você pode adicionar mais cabeçalhos conforme necessário
    $headers = "From: $email\r\n";

    // Envia o e-mail
    mail($destinatario, $assunto_email, $mensagem, $headers);
}
?>
