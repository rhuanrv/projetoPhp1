<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    
    echo "Obrigado, $nome. Recebemos sua mensagem: <br>";
    echo nl2br($mensagem);
}
?>
