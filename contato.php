<?php
include_once('templates/topo.php'); 
?>
<div class="conteudo">
    <h1>Contato</h1>
    <form action="admin/inserir.php" method="POST">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="E-mail para contato" required>
        </div>
        <div>
            <label for="assunto">Assunto:</label>
            <input type="text" id="assunto" name="assunto" placeholder="Assunto da mensagem" required>
        </div>
        <div>
            <label for="mensagem">Mensagem:</label>
			<br>
            <textarea id="mensagem" name="mensagem" rows="6" placeholder="Podemos ajudar?" required></textarea>
        </div>
        <div>
            <button type="submit">Enviar Mensagem</button>
        </div>
    </form>
</div>
<?php
include_once('templates/rodape.php'); 
?>
