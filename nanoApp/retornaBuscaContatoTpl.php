<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <center>
        <h2>Contatos encontrados</h2>

        <a href="./listaContato.php">Voltar para Lista</a>
        <a href="./buscaContato.html">Buscar novamente</a>
        <br><br>
        <table border="border" style="width: 35%;">
            <thead>
                <tr>
                    <th>
                        Id
                    </th>
                    <th>
                        Nome
                    </th>
                    <th>
                        Celular
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($contatos) > 0) foreach ($contatos as $contato) : ?>

                    <tr style="text-align:center;">
                        <td>
                            <?= $contato['id'] ?>
                        </td>
                        <td>
                            <?= $contato['nome'] ?>
                        </td>
                        <td>
                            <?= $contato['cel'] ?>
                        </td>
                    </tr>

                <?php
                endforeach
                ?>
            </tbody>
        </table>
    </center>
</body>

</html>