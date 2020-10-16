<?php

include "./sessao.php";
include "./header.php";

?>
<main class="container my-4">
    <p class="my-3 h4">Qual a possibilidade de você recomendar alguém para assistir as finais da NBA?</p>

    <form action="pesquisaSatisfacao.php" method="post">
        <div class="d-flex justify-content-between">
            <div>
                <label class="my-3"> Pouco provável</label>
            </div>

            <?php
            for ($i = 1; $i <= 10; $i++) {
            ?>
                <div>
                    <label class="d-block <?= $i <= 6 ? 'text-danger' : ($i > 6 && $i <= 8 ? "text-warning" : "text-success") ?>  font-weight-bold" for="<?= $i ?>"><?= $i ?></label>
                    <input type="radio" id="<?= $i ?>" name="nivelSatisfacao" value="<?= $i ?>">
                </div>
            <?php
            }
            ?>
            <div>
                <label class="my-3"> Muito provável</label>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div>
                <label class="d-block">Explique o motivo da sua nota</label>
                <textarea name="motivoNota" cols="50" rows="10"></textarea>

            </div>

        </div>

        <div class="row">

            <button type="submit" class=" mx-auto btn btn-success btn-round btn-sm my-3">
                Responder
            </button>
        </div>
    </form>
</main>
</body>

</html>