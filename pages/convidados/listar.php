<?php
$titulo_pagina = 'Convidados';
$modulo_ativo = 'convidados';
require_once dirname(__DIR__, 2) . '/header.php';
?>

        <header class="page-head">
            <div class="page-head__titles">
                <h1>Convidados</h1>
                <p class="page-head__meta">RF6 — participantes associados às divulgações.</p>
            </div>
            <a class="btn btn--primary" href="<?php echo nav_href('pages/convidados/form.php', $p); ?>">Novo convidado</a>
        </header>

        <div class="table-wrap">
            <table class="data-table">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="3" class="empty-state">
                            <p class="empty-state__icon">—</p>
                            <p>Nenhum registro carregado.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

<?php require_once dirname(__DIR__, 2) . '/footer.php'; ?>
