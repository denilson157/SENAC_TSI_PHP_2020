<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <center>
        <h2>Edite seu Contato</h2>
        <br><br>
        <?php
        if (isset($msg)) echo "Contato Editado";
        ?>
        <br><br>
        <form method="post" action="./editaContato.php">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?= $contato['nome'] ?>" />
            <label for="cel">Celular:</label>
            <input type="text" id="cel" name="celular" value="<?= $contato['celular'] ?>" />
            <input type="hidden" name="id" value="<?= $contato['id'] ?>">
            <button type="submit">Editar</button>
        </form>
    </center>
</body>

</html>