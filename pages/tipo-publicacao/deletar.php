<?php
$titulo_pagina = 'Excluir tipo de publicação';
$modulo_ativo = 'tipo_publicacao';
require_once dirname(__DIR__, 2) . '/header.php';
$id = isset($_GET['id']) ? htmlspecialchars((string) $_GET['id'], ENT_QUOTES, 'UTF-8') : '';
?>

        <header class="page-head">
            <div class="page-head__titles">
                <h1>Excluir tipo</h1>
                <p class="page-head__meta">Publicações que usam este tipo podem bloquear a exclusão.</p>
            </div>
            <a class="btn btn--ghost" href="<?php echo nav_href('pages/tipo-publicacao/listar.php', $p); ?>">Voltar</a>
        </header>

        <?php if ($id === '') : ?>
            <div class="alert alert--warn" role="alert">Nenhum identificador informado.</div>
        <?php else : ?>
            <div class="delete-panel">
                <h1>Tipo #<?php echo $id; ?></h1>
                <p>Confirmação enviada por POST ao back-end.</p>
                <form method="post" action="" data-confirm-delete data-confirm-message="Excluir este tipo de publicação?">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-actions">
                        <button type="submit" class="btn btn--danger">Confirmar exclusão</button>
                        <a class="btn btn--ghost" href="<?php echo nav_href('pages/tipo-publicacao/listar.php', $p); ?>">Cancelar</a>
                    </div>
                </form>
            </div>
        <?php endif; ?>

<?php require_once dirname(__DIR__, 2) . '/footer.php'; ?>
