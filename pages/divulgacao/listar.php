<?php
$titulo_pagina = 'Divulgações';
$modulo_ativo = 'divulgacao';
require_once dirname(__DIR__, 2) . '/header.php';
?>

        <header class="page-head">
            <div class="page-head__titles">
                <h1>Divulgações</h1>
                <p class="page-head__meta">RF2 e RF9 — eventos de divulgação com convidado associado.</p>
            </div>
            <a class="btn btn--primary" href="<?php echo nav_href('pages/divulgacao/form.php', $p); ?>">Nova divulgação</a>
        </header>

        <div class="table-wrap">
            <table class="data-table">
                <thead>
                    <tr>
                        <th scope="col">Evento</th>
                        <th scope="col">Data</th>
                        <th scope="col">Convidado</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4" class="empty-state">
                            <p class="empty-state__icon">—</p>
                            <p>Nenhum registro carregado.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

<?php require_once dirname(__DIR__, 2) . '/footer.php'; ?>
