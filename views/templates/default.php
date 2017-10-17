<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $this->config['site_title']; ?></title>
        <link href="<?php echo BASE; ?>assets/css/default.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="topo">

        </div>
        <div class="menu">            
            <?php
            $this->loadMenu();
            ?>
        </div>
        <div class="container">

            <?php
            $this->loadViewInTemplate($viewName, $viewData);
            ?>

        </div>
        <div class="rodape">

        </div>

    </body>
</html>
