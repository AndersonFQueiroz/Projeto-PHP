<?php
$titulo_pagina = isset($_GET['id']) ? 'Editar autor' : 'Novo autor';
$modulo_ativo = 'autores';
require_once dirname(__DIR__, 2) . '/header.php';
$id = isset($_GET['id']) ? htmlspecialchars((string) $_GET['id'], ENT_QUOTES, 'UTF-8') : '';
?>

        <header class="page-head">
            <div class="page-head__titles">
                <h1><?php echo isset($_GET['id']) ? 'Editar autor' : 'Novo autor'; ?></h1>
                <p class="page-head__meta">Classe <code>Autor</code>: nome, email, id_classificacao.</p>
            </div>
            <a class="btn btn--ghost" href="<?php echo nav_href('pages/autores/listar.php', $p); ?>">Voltar à lista</a>
        </header>

        <div class="form-shell">
            <form method="post" action="" data-validate="autor" novalidate>
                <?php if ($id !== '') : ?>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                <?php endif; ?>
                <div class="form-grid">
                    <div class="field">
                        <label for="nome">Nome completo</label>
                        <input type="text" id="nome" name="nome" required maxlength="200" autocomplete="name">
                    </div>
                    <div class="field">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" required autocomplete="email">
                    </div>
                    <div class="field">
                        <label for="id_classificacao">Classificação</label>
                        <select id="id_classificacao" name="id_classificacao" required>
                            <option value="">Selecione…</option>
                            <option value="1">Coautor</option>
                            <option value="2">Revisor</option>
                        </select>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn--primary"><?php echo $id !== '' ? 'Salvar' : 'Cadastrar'; ?></button>
                    <a class="btn btn--ghost" href="<?php echo nav_href('pages/autores/listar.php', $p); ?>">Cancelar</a>
                </div>
            </form>
        </div>

<?php require_once dirname(__DIR__, 2) . '/footer.php'; ?>
