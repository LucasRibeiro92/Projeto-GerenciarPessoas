<?php

include __DIR__ . '/../inicio-html.php';

?>

    <a href='/nova-pessoa' class="btn btn-primary mb-2">
        Nova pessoa
    </a>

    <ul class="list-group">
        <?php foreach ($pessoas as $pessoa) { ?>
            <li class="list-group-item d-flex justify-content-between">
                <?= $pessoa->getNomePessoa(); ?>
                <span>
                    <a href="/alterar-curso?id=1" class="btn btn-info btn-sm">Alterar</a>
                    <a href="/excluir-curso?id=1" class="btn btn-danger btn-sm">Excluir</a>
                </span>
            </li>
        <?php } ?>
    </ul>

<?php

include __DIR__ . '/../fim-html.php';

?>