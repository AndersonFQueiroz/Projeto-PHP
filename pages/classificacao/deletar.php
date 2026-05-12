<?php
$titulo_pagina = 'Excluir classificação';
$modulo_ativo = 'classificacao';
require_once dirname(__DIR__, 2) . '/header.php';
$id = isset($_GET['id']) ? htmlspecialchars((string) $_GET['id'], ENT_QUOTES, 'UTF-8') : '';
?>

        <header class="page-head">
            <div class="page-head__titles">
                <h1>Excluir classificação</h1>
                <p class="page-head__meta">Autores vinculados podem impedir a exclusão no servidor.</p>
            </div>
            <a class="btn btn--ghost" href="<?php echo nav_href('pages/classificacao/listar.php', $p); ?>">Voltar</a>
        </header>

        <?php if ($id === '') : ?>
            <div class="alert alert--warn" role="alert">Nenhum identificador informado.</div>
        <?php else : ?>
            <div class="delete-panel">
                <h1>Classificação #<?php echo $id; ?></h1>
                <p>Confirme para enviar a solicitação de exclusão ao PHP.</p>
                <form method="post" action="" data-confirm-delete data-confirm-message="Excluir esta classificação?">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-actions">
                        <button type="submit" class="btn btn--danger">Confirmar exclusão</button>
                        <a class="btn btn--ghost" href="<?php echo nav_href('pages/classificacao/listar.php', $p); ?>">Cancelar</a>
                    </div>
                </form>
            </div>
        <?php endif; ?>

<?php require_once dirname(__DIR__, 2) . '/footer.php'; ?>
