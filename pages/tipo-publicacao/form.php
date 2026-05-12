<?php
$titulo_pagina = isset($_GET['id']) ? 'Editar tipo' : 'Novo tipo de publicação';
$modulo_ativo = 'tipo_publicacao';
require_once dirname(__DIR__, 2) . '/header.php';
$id = isset($_GET['id']) ? htmlspecialchars((string) $_GET['id'], ENT_QUOTES, 'UTF-8') : '';
?>

        <header class="page-head">
            <div class="page-head__titles">
                <h1><?php echo isset($_GET['id']) ? 'Editar tipo' : 'Novo tipo de publicação'; ?></h1>
                <p class="page-head__meta">Classe <code>TipoPublicacao</code>: nome.</p>
            </div>
            <a class="btn btn--ghost" href="<?php echo nav_href('pages/tipo-publicacao/listar.php', $p); ?>">Voltar à lista</a>
        </header>

        <div class="form-shell">
            <form method="post" action="" data-validate="tipo_publicacao" novalidate>
                <?php if ($id !== '') : ?>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                <?php endif; ?>
                <div class="form-grid">
                    <div class="field">
                        <label for="nome">Nome do tipo</label>
                        <input type="text" id="nome" name="nome" required maxlength="120" autocomplete="off">
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn--primary"><?php echo $id !== '' ? 'Salvar' : 'Cadastrar'; ?></button>
                    <a class="btn btn--ghost" href="<?php echo nav_href('pages/tipo-publicacao/listar.php', $p); ?>">Cancelar</a>
                </div>
            </form>
        </div>

<?php require_once dirname(__DIR__, 2) . '/footer.php'; ?>
