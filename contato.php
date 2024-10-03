<?php
include_once('templates/topo.php'); 
?>
<div class="conteudo">
    <h1>Contato</h1>
    <form onsubmit="showPopup(); return false;">
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="E-mail para contato" required>
        </div>
        <div>
            <label for="mensagem">Mensagem:</label>
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

<script>
function showPopup() {
    alert("Nos comunicaremos em breve!");
    window.location.href = "index.php"; // Redireciona para a página inicial
}
</script>