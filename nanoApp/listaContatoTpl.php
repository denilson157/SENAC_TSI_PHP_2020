<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <center>
        <a href="./index.html">Cadastrar novo contato</a>
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
                    <th>
                        Ações
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($tabelas) > 0) foreach ($tabelas as $tabela) : ?>

                    <tr style="text-align:center;">
                        <td>
                            <?= $tabela['id'] ?>
                        </td>
                        <td>
                            <?= $tabela['nome'] ?>
                        </td>
                        <td>
                            <?= $tabela['cel'] ?>
                        </td>
                        <td>
                            <a href="apagaContato.php?id=<?= $tabela['id'] ?>">Apagar</a>
                            <a href="editaContato.php?id=<?= $tabela['id'] ?>">Editar</a>
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