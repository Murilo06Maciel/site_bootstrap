<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $como_conheceu = $_POST['como_conheceu'];
    $mensagem = $_POST['mensagem'];
    $novidades = isset($_POST['novidades']) ? 'Sim' : 'Não';
    $avaliacao = $_POST['avaliacao'];

    $to = 'hamburguerialanchesipatinga@gmail.com'; 
    $subject = 'Novo contato do formulário';
    $body = "Nome: $nome\nEmail: $email\nTelefone: $telefone\nEndereço: $endereco\nCidade: $cidade\nEstado: $estado\nComo conheceu: $como_conheceu\nMensagem: $mensagem\nGostaria de receber novidades: $novidades\nAvaliação: $avaliacao";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar a mensagem.";
    }
}
?>
