<html>
    <head>
        <meta charset="UTF-8">
        <title>Painel Administrativo - CMS</title>
        <link href="<?php echo BASE; ?>assets/css/admin.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="menu">            

        </div>
        <div class="container">

            <?php
            $this->loadViewInTemplate($viewName, $viewData);
            ?>

        </div>

    </body>
</html>
