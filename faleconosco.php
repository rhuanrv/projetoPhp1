<?php
require_once 'TEMPLATES/topo.php';
require_once 'TEMPLATES/menu.php';
?>

<main>
    <h2>Fale Conosco</h2>
    
    <p>Tem alguma dúvida, sugestão ou quer compartilhar suas opiniões sobre o futebol? Entre em contato conosco preenchendo o formulário abaixo. Estamos ansiosos para ouvir você!</p>

    <form action="faleconosco.php" method="POST" class="form-fale-conosco">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="mensagem">Mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" required></textarea><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</main>


<?php require_once 'TEMPLATES/rodape.php'; ?>
