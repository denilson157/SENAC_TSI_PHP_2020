<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <title>Meu site</title>
    </header>

<body>

    <main>
        <section class="container-form d-flex flex-column align-items-center justify-content-center px-4">
            <div class="my-5 text-center">
                <h2 class="h3 w-100 mx-auto">
                    Edite seu perfil
                </h2>
                <h2 class="h3 w-100 text-danger">
                    <?php
                    if (isset($errors) && count($errors) > 0)
                        foreach ($errors as $errors) {
                            echo $erro . "<br>";
                        }
                    ?>
                </h2>
            </div>
            <div>
                <form class="form-group" method="post" action="/SENAC_TSI_PHP_2020/usuario/view/edit/">
                    <div class="row">
                        <div class="col-12">
                            <label for="name">Nome</label>
                            <input type="text" id="name" class="form-control" required name="name" value=<?= $nome ?> />
                        </div>
                        <div class="col-12">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" class="form-control" required name="email" value=<?= $email ?> />
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="mx-auto">
                            <button class="btn btn-primary" type="submit" name="cadastrar">
                                Salvar
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </section>
    </main>
</body>

<html />