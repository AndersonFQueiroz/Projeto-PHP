<?php
/**
 * Publicação – excluir
 */
$titulo_pagina = 'Excluir publicação';
$modulo_ativo = 'publicacao';
require_once dirname(__DIR__, 2) . '/header.php';
$id = isset($_GET['id']) ? htmlspecialchars((string) $_GET['id'], ENT_QUOTES, 'UTF-8') : '';
?>

        <header class="page-head">
            <div class="page-head__titles">
                <h1>Excluir publicação</h1>
                <p class="page-head__meta">Confirme a exclusão apenas após validar o impacto nos vínculos.</p>
            </div>
            <a class="btn btn--ghost" href="<?php echo nav_href('pages/publicacao/listar.php', $p); ?>">Voltar</a>
        </header>

        <?php if ($id === '') : ?>
            <div class="alert alert--warn" role="alert">Nenhum identificador informado. Volte à lista e escolha um registro.</div>
        <?php else : ?>
            <div class="delete-panel">
                <h1>Registro #<?php echo $id; ?></h1>
                <p>Esta ação será processada pelo script PHP com PDO quando a exclusão estiver implementada no servidor.</p>
                <form method="post" action="" data-confirm-delete data-confirm-message="Excluir esta publicação permanentemente?">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="_method" value="delete">
                    <div class="form-actions">
                        <button type="submit" class="btn btn--danger">Confirmar exclusão</button>
                        <a class="btn btn--ghost" href="<?php echo nav_href('pages/publicacao/listar.php', $p); ?>">Cancelar</a>
                    </div>
                </form>
            </div>
        <?php endif; ?>

<?php require_once dirname(__DIR__, 2) . '/footer.php'; ?>
