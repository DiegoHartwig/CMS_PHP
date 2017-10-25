<h1>Configurações</h1>
<form method="POST">
    <label for="site_title">Título do Site</label>
    <input type="text" name="site_title" value="<?php echo $this->config['site_title']; ?>"<br/><br/>
    <br/><br/>

    <label for="home_welcome">Texto de boas vindas</label>
    <input type="text" name="home_welcome" value="<?php echo $this->config['home_welcome']; ?>"<br/><br/>
    <br/><br/>

    <label for="site_template">Template do site:</label><br/>
    <select name="site_template">
        <option value="default" <?php echo ($this->config['site_template'] == 'default') ? 'selected="selected"' : ''; ?>>Padrão</option>
        <option value="alternativo" <?php echo ($this->config['site_template'] == 'alternativo') ? 'selected="selected"' : ''; ?>>Alternativo</option>
    </select><br/><br/>

    <input type="submit" value="Salvar"/>

</form>