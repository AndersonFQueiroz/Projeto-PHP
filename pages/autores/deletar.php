<?php
$titulo_pagina = 'Excluir autor';
$modulo_ativo = 'autores';
require_once dirname(__DIR__, 2) . '/header.php';
$id = isset($_GET['id']) ? htmlspecialchars((string) $_GET['id'], ENT_QUOTES, 'UTF-8') : '';
?>

        <header class="page-head">
            <div class="page-head__titles">
                <h1>Excluir autor</h1>
                <p class="page-head__meta">Cheque dependências em publicações antes de remover.</p>
            </div>
            <a class="btn btn--ghost" href="<?php echo nav_href('pages/autores/listar.php', $p); ?>">Voltar</a>
        </header>

        <?php if ($id === '') : ?>
            <div class="alert alert--warn" role="alert">Nenhum identificador informado.</div>
        <?php else : ?>
            <div class="delete-panel">
                <h1>Autor #<?php echo $id; ?></h1>
                <p>Exclusão definitiva após confirmação no servidor.</p>
                <form method="post" action="" data-confirm-delete data-confirm-message="Excluir este autor?">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-actions">
                        <button type="submit" class="btn btn--danger">Confirmar exclusão</button>
                        <a class="btn btn--ghost" href="<?php echo nav_href('pages/autores/listar.php', $p); ?>">Cancelar</a>
                    </div>
                </form>
            </div>
        <?php endif; ?>

<?php require_once dirname(__DIR__, 2) . '/footer.php'; ?>
