<?php
$titulo_pagina = isset($_GET['id']) ? 'Editar divulgação' : 'Nova divulgação';
$modulo_ativo = 'divulgacao';
require_once dirname(__DIR__, 2) . '/header.php';
$id = isset($_GET['id']) ? htmlspecialchars((string) $_GET['id'], ENT_QUOTES, 'UTF-8') : '';
?>

        <header class="page-head">
            <div class="page-head__titles">
                <h1><?php echo isset($_GET['id']) ? 'Editar divulgação' : 'Nova divulgação'; ?></h1>
                <p class="page-head__meta">Classe <code>Divulgacao</code>: evento, data, id_convidado.</p>
            </div>
            <a class="btn btn--ghost" href="<?php echo nav_href('pages/divulgacao/listar.php', $p); ?>">Voltar à lista</a>
        </header>

        <div class="form-shell">
            <form method="post" action="" data-validate="divulgacao" novalidate>
                <?php if ($id !== '') : ?>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                <?php endif; ?>
                <div class="form-grid">
                    <div class="field">
                        <label for="evento">Nome do evento</label>
                        <input type="text" id="evento" name="evento" required maxlength="255" autocomplete="off">
                    </div>
                    <div class="field">
                        <label for="data">Data</label>
                        <input type="date" id="data" name="data" required>
                    </div>
                    <div class="field">
                        <label for="id_convidado">Convidado</label>
                        <select id="id_convidado" name="id_convidado" required>
                            <option value="">Selecione…</option>
                            <option value="1">Convidado exemplo 1</option>
                            <option value="2">Convidado exemplo 2</option>
                        </select>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn--primary"><?php echo $id !== '' ? 'Salvar' : 'Cadastrar'; ?></button>
                    <a class="btn btn--ghost" href="<?php echo nav_href('pages/divulgacao/listar.php', $p); ?>">Cancelar</a>
                </div>
            </form>
        </div>

<?php require_once dirname(__DIR__, 2) . '/footer.php'; ?>
