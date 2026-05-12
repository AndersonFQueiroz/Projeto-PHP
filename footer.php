<?php
/**
 * Footer — SDP Midnight Neo-SaaS
 * Inclua sempre após header.php ($p e nav_href).
 */

if (!isset($p)) {
    $p = '';
}
if (!function_exists('nav_href')) {
    function nav_href(string $caminho_relativo_raiz, string $prefixo): string
    {
        return htmlspecialchars($prefixo . ltrim($caminho_relativo_raiz, '/'), ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('sdp_logo_url')) {
    function sdp_logo_url(string $prefixo): string
    {
        $path = 'assets/brand/' . rawurlencode('FatecPG logo.png');

        return nav_href($path, $prefixo);
    }
}
?>
    </main>
    <footer class="sdp-footer">
        <div class="sdp-container sdp-footer__inner">
            <div class="sdp-footer__brand">
                <img class="sdp-footer__logo" src="<?php echo sdp_logo_url($p); ?>" width="100" height="32" alt="Logo FATEC Praia Grande" decoding="async" onerror="this.style.display='none'">
                <div class="sdp-footer__text">
                    <p class="sdp-footer__title"><strong>Anderson</strong> — Sistema de Divulgação de Publicações</p>
                    <p class="sdp-footer__meta">FATEC Praia Grande · Centro Paula Souza · <abbr title="Linguagem de Programação IV – Internet">ILP512-A</abbr> · Prof. Jônatas Cerqueira Dias</p>
                </div>
            </div>
            <div class="sdp-footer__links">
                <a class="sdp-footer__link" href="<?php echo nav_href('index.php', $p); ?>">Painel</a>
                <a class="sdp-footer__link" href="<?php echo nav_href('pages/publicacao/listar.php', $p); ?>">Publicações</a>
                <span class="sdp-footer__stack">PHP 8+ · HTML5 · CSS3 · JavaScript</span>
            </div>
        </div>
    </footer>
    <script src="<?php echo nav_href('assets/js/main.js', $p); ?>" defer></script>
</body>
</html>
