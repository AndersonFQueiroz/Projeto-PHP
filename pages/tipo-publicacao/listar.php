<?php
$titulo_pagina = 'Tipos de publicação';
$modulo_ativo = 'tipo_publicacao';
require_once dirname(__DIR__, 2) . '/header.php';
?>

        <header class="page-head">
            <div class="page-head__titles">
                <h1>Tipos de publicação</h1>
                <p class="page-head__meta">RF5 — categorização utilizada em publicações.</p>
            </div>
            <a class="btn btn--primary" href="<?php echo nav_href('pages/tipo-publicacao/form.php', $p); ?>">Novo tipo</a>
        </header>

        <div class="table-wrap">
            <table class="data-table">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
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
