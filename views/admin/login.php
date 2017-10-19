<form method="POST">
    <label for="email">Email:</label><br/>
    <input type="email" name="email" id="email"/>
    <br/><br/>

    <label for="senha">Senha:</label><br/>
    <input type="password" name="senha" id="senha"/>
    <br/><br/>

    <input type="submit" value="Login"/>

    <?php
    if (!empty($erro)) {
        echo $erro;
    }
    ?>
</form>    