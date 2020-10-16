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
                    Faça login para prosseguir
                </h2>
                <h2 class="h3 w-100 text-danger">
                    <?php
                    if (isset($msg))
                        echo $msg;
                    ?>
                </h2>
            </div>
            <div>
                <form class="form-group" method="post">
                    <div class="row">
                        <div class="col-12">
                            <label for="login">Login</label>
                            <input type="login" id="login" class="form-control" required name="login" />
                        </div>
                        <div class="col-12">
                            <label for="password">Senha</label>
                            <input type="password" id="password" class="form-control" required name="password" />
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="mx-auto">
                            <button class="btn btn-primary" type="submit" name="entrar">
                                Entrar
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mx-auto">
                            <div class="text-center">
                                <p class="mb-0">Ainda não está cadastrado?</p>
                                <a class="text-center" href="../register/"> Cadastre-se agora</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>

<html />