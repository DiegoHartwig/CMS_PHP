<h1>Páginas</h1>
<a href="<?php echo BASE; ?>admin/addPagina">Nova Página</a><br/><br/>
<table border="0" width="100%">
    <tr>
        <th align="left">Id</th>
        <th align="left">URL</th>
        <th align="left">Titulo</th>
        <th align="left">Ação</th>
    </tr>
    <?php foreach ($paginas as $pagina): ?>
        <tr>
            <td><?php echo $pagina['id']; ?></td>
            <td><?php echo utf8_encode($pagina['titulo']); ?></td>
            <td><?php echo utf8_encode($pagina['url']); ?></td>
            <td><a href="<?php echo BASE; ?>admin/editarPagina/<?php echo $pagina['id']; ?>">Editar</a>
                <a href="<?php echo BASE; ?>admin/excluirPagina/<?php echo $pagina['id']; ?>">Excluir</a></td>
        <?php endforeach; ?>
    </tr>
</table>