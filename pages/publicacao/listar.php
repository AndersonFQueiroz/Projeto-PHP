<?php
/**
 * Publicação – listar
 * Sistema de Divulgação de Publicações – FATEC Praia Grande
 */
$titulo_pagina = 'Publicações';
$modulo_ativo = 'publicacao';
require_once dirname(__DIR__, 2) . '/header.php';
?>

        <header class="page-head">
            <div class="page-head__titles">
                <h1>Publicações</h1>
                <p class="page-head__meta">RF1 — CRUD de publicações com vínculos a autor, tipo e divulgação.</p>
            </div>
            <a class="btn btn--primary" href="<?php echo nav_href('pages/publicacao/form.php', $p); ?>">Nova publicação</a>
        </header>

        <div class="alert alert--info" role="status">
            Listagem preparada para integração com PDO. Enquanto isso, os registros aparecerão após a camada de persistência ser conectada ao banco.
        </div>

        <div class="table-wrap">
            <table class="data-table">
                <thead>
                    <tr>
                        <th scope="col">Título</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Divulgação</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5" class="empty-state">
                            <p class="empty-state__icon">—</p>
                            <p>Nenhum registro carregado.</p>
                            <p class="muted">Use <strong>Nova publicação</strong> após o back-end salvar dados.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

<?php require_once dirname(__DIR__, 2) . '/footer.php'; ?>
