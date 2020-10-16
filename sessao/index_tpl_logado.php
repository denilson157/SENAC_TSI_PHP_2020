<?php

include "./sessao.php";
include "./header.php";
?>
<main>
    <section class="container-form d-flex flex-column align-items-center justify-content-center px-4">
        <div class="my-5 text-center">
            <h2 class="h3 w-100 mx-auto">
                Bem vindo, <?= $_SESSION['login'] ?>
            </h2>
        </div>
    </section>
</main>
</body>

<html />