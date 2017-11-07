<fieldset>
    <legend>Enviar Imagem</legend>

    <form method="POST" enctype="multipart/form-data">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" /><br/><br/>
        
        <label for="arquivo">Selecione uma imagem:</label>

        <input type="file" name="arquivo" /><br/><br/>

        <input type="submit" value="Enviar Imagem" />
    </form>
</fieldset>

<?php foreach ($imagens as $imagem): ?>

    <img src="<?php echo BASE; ?>/assets/images/galeria/<?php echo $imagem['url']; ?>" width="300" border="0" /><br/>
    <?php echo $imagem['titulo']; ?>
    <hr/>

<?php endforeach; ?>
