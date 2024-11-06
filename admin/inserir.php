<?php
include_once("../config.inc.php");

// Verifica se os dados foram enviados pelo formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura e sanitiza os dados do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

    // Insere os dados no banco de dados
    $sql = mysqli_query($conexao,"INSERT INTO contato (nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')");
    echo "</h2>Mensagem enviada com sucesso!</h2>";
}
?>