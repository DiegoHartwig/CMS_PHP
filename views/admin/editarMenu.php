<h1>Editar Menu</h1>
<form method="POST">
    <label for="nome">Descrição</label>
    <input type="text" name="nome" id="nome" value="<?php echo $menu['nome']; ?>"/>
    <br/><br/>

    <label for="url">URL</label>
    <input type="text" name="url" id="url" value="<?php echo $menu['url']; ?>"/>
    <br/><br/>

    <input type="submit" value="Salvar"/>
</form>