<h1>Páginas</h1>
<table border="0" width="100%">
    <tr>
        <th align="left">Id</th>
        <th align="left">Titulo</th>
        <th align="left">Ação</th>
    </tr>
    <?php foreach ($paginas as $pagina): ?>
        <tr>
            <td><?php echo $pagina['id']; ?></td>
            <td><?php echo utf8_encode($pagina['titulo']); ?></td>
            <td></td>
        <?php endforeach; ?>
    </tr>
</table>