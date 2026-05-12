<?php
$titulo_pagina = isset($_GET['id']) ? 'Editar classificação' : 'Nova classificação';
$modulo_ativo = 'classificacao';
require_once dirname(__DIR__, 2) . '/header.php';
$id = isset($_GET['id']) ? htmlspecialchars((string) $_GET['id'], ENT_QUOTES, 'UTF-8') : '';
?>

        <header class="page-head">
            <div class="page-head__titles">
                <h1><?php echo isset($_GET['id']) ? 'Editar classificação' : 'Nova classificação'; ?></h1>
                <p class="page-head__meta">Classe <code>Classificacao</code>: descricao.</p>
            </div>
            <a class="btn btn--ghost" href="<?php echo nav_href('pages/classificacao/listar.php', $p); ?>">Voltar à lista</a>
        </header>

        <div class="form-shell">
            <form method="post" action="" data-validate="classificacao" novalidate>
                <?php if ($id !== '') : ?>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                <?php endif; ?>
                <div class="form-grid">
                    <div class="field">
                        <label for="descricao">Descrição</label>
                        <input type="text" id="descricao" name="descricao" required maxlength="200" autocomplete="off">
                        <span class="field__hint">Ex.: “Coautor”, “Orientador”, “Revisor cego”.</span>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn--primary"><?php echo $id !== '' ? 'Salvar' : 'Cadastrar'; ?></button>
                    <a class="btn btn--ghost" href="<?php echo nav_href('pages/classificacao/listar.php', $p); ?>">Cancelar</a>
                </div>
            </form>
        </div>

<?php require_once dirname(__DIR__, 2) . '/footer.php'; ?>
