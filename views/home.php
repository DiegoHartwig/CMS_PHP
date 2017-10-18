<div class="home_banner" style="background-image: url('<?php echo BASE . 'assets/images/' . $this->config['home_banner']; ?>')"></div>

<div class="home_banner_texto"><?php echo $this->config['home_welcome'] ?></div>

<div class="home_comentario">
    <h3>Comentários</h3>
    <?php foreach ($comentarios as $comentItem): ?>
        <strong><?php echo utf8_encode($comentItem['nome']); ?></strong><br/>
        <?php echo utf8_encode($comentItem['texto']); ?>
        <hr/>
    <?php endforeach; ?>
</div>

<div class="home_cta">
    Gostaria de conhecer nossos serviços?<br/>
    <a href="<?php echo BASE . 'servicos'; ?>"><div>Serviços</div></a>
</div>