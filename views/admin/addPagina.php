<h1>Adicionar Página</h1>
<form method="POST">
    <label for="titulo">Titulo da página:</label><br/>
    <input type="text" name="titulo" /><br/><br/>

    <label for="url">URL do Menu:</label><br/>
    <input type="text" name="url" /><br/><br/>

    <label>Criar Menu automaticamente:</label>
    <input type="checkbox" name="criarMenu" value="sim" /><br/><br/>

    <label for="corpo">Conteúdo da página:</label><br/>
    <textarea name="corpo" id="corpo"></textarea><br/><br/>

    <input type="submit" value="Salvar" />
</form>
<script type="text/javascript" src="<?php echo BASE; ?>ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    window.onload = function () {
        CKEDITOR.replace("corpo");
    };
</script>

