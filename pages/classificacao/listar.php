<?php
$titulo_pagina = 'Classificações';
$modulo_ativo = 'classificacao';
require_once dirname(__DIR__, 2) . '/header.php';
?>

        <header class="page-head">
            <div class="page-head__titles">
                <h1>Classificações</h1>
                <p class="page-head__meta">RF4 — papéis de autoria (ex.: coautor, revisor).</p>
            </div>
            <a class="btn btn--primary" href="<?php echo nav_href('pages/classificacao/form.php', $p); ?>">Nova classificação</a>
        </header>

        <div class="table-wrap">
            <table class="data-table">
                <thead>
                    <tr>
                        <th scope="col">Descrição</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2" class="empty-state">
                            <p class="empty-state__icon">—</p>
                            <p>Nenhum registro carregado.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

<?php require_once dirname(__DIR__, 2) . '/footer.php'; ?>
