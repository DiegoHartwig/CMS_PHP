<html>
    <head>
        <meta charset="UTF-8">
        <title>Acesso Restrito - Painel Administrativo</title>
        <link href="<?php echo BASE; ?>assets/css/admin.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="menu">  
            <ul>
                <a href="<?php echo BASE; ?>admin"<li>Páginas</li></a> 
                <a href="<?php echo BASE; ?>admin/menus"<li>Menus</li></a>
            </ul>
        </div>
        <div class="container">
            <?php
            $this->loadViewInTemplate($viewName, $viewData);
            ?>
        </div>
    </body>
</html>
