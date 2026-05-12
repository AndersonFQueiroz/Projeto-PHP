<?php
/**
 * Publicação – formulário (criar / editar)
 */
$titulo_pagina = isset($_GET['id']) ? 'Editar publicação' : 'Nova publicação';
$modulo_ativo = 'publicacao';
require_once dirname(__DIR__, 2) . '/header.php';
$id = isset($_GET['id']) ? htmlspecialchars((string) $_GET['id'], ENT_QUOTES, 'UTF-8') : '';
?>

        <header class="page-head">
            <div class="page-head__titles">
                <h1><?php echo isset($_GET['id']) ? 'Editar publicação' : 'Nova publicação'; ?></h1>
                <p class="page-head__meta">Campos alinhados à classe <code>Publicacao</code> (titulo, resumo, id_autor, id_tipo_publicacao, id_divulgacao).</p>
            </div>
            <a class="btn btn--ghost" href="<?php echo nav_href('pages/publicacao/listar.php', $p); ?>">Voltar à lista</a>
        </header>

        <div class="form-shell">
            <form method="post" action="" data-validate="publicacao" novalidate>
                <?php if ($id !== '') : ?>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                <?php endif; ?>
                <div class="form-grid">
                    <div class="field">
                        <label for="titulo">Título</label>
                        <input type="text" id="titulo" name="titulo" required maxlength="255" autocomplete="off">
                    </div>
                    <div class="field">
                        <label for="resumo">Resumo</label>
                        <textarea id="resumo" name="resumo" required></textarea>
                    </div>
                    <div class="field">
                        <label for="id_autor">Autor</label>
                        <select id="id_autor" name="id_autor" required>
                            <option value="">Selecione…</option>
                            <option value="1">(exemplo) Autor 1</option>
                            <option value="2">(exemplo) Autor 2</option>
                        </select>
                        <span class="field__hint">Opções reais virão do banco após integração.</span>
                    </div>
                    <div class="field">
                        <label for="id_tipo_publicacao">Tipo de publicação</label>
                        <select id="id_tipo_publicacao" name="id_tipo_publicacao" required>
                            <option value="">Selecione…</option>
                            <option value="1">Artigo</option>
                            <option value="2">Resumo expandido</option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="id_divulgacao">Divulgação</label>
                        <select id="id_divulgacao" name="id_divulgacao" required>
                            <option value="">Selecione…</option>
                            <option value="1">Evento modelo A</option>
                            <option value="2">Evento modelo B</option>
                        </select>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn--primary"><?php echo $id !== '' ? 'Salvar alterações' : 'Cadastrar'; ?></button>
                    <a class="btn btn--ghost" href="<?php echo nav_href('pages/publicacao/listar.php', $p); ?>">Cancelar</a>
                </div>
            </form>
        </div>

<?php require_once dirname(__DIR__, 2) . '/footer.php'; ?>
