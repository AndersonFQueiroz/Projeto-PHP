<?php
/**
 * Header — Midnight Neo-SaaS (SDP)
 * Sistema de Divulgação de Publicações — FATEC Praia Grande
 * ILP512-A · Prof. Jônatas Cerqueira Dias
 */

if (!isset($titulo_pagina)) {
    $titulo_pagina = 'Sistema de Divulgação de Publicações';
}
if (!isset($modulo_ativo)) {
    $modulo_ativo = '';
}

function prefixo_ate_raiz_projeto(): string
{
    $raiz_projeto = realpath(__DIR__);
    $dir_script = realpath(dirname($_SERVER['SCRIPT_FILENAME'] ?? ''));
    if ($raiz_projeto === false || $dir_script === false) {
        return '';
    }
    $raiz_projeto = str_replace('\\', '/', $raiz_projeto);
    $dir_script = str_replace('\\', '/', $dir_script);
    if (!str_starts_with($dir_script, $raiz_projeto)) {
        return '';
    }
    $rel = trim(substr($dir_script, strlen($raiz_projeto)), '/');
    if ($rel === '') {
        return '';
    }
    $passos = substr_count($rel, '/') + 1;

    return str_repeat('../', $passos);
}

$p = prefixo_ate_raiz_projeto();

function nav_href(string $caminho_relativo_raiz, string $prefixo): string
{
    return htmlspecialchars($prefixo . ltrim($caminho_relativo_raiz, '/'), ENT_QUOTES, 'UTF-8');
}

/** Logo institucional (coloque o arquivo em assets/brand/). */
function sdp_logo_url(string $prefixo): string
{
    $arquivo = 'FatecPG logo.png';
    $path = 'assets/brand/' . rawurlencode($arquivo);

    return nav_href($path, $prefixo);
}

?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema acadêmico de divulgação de publicações — ILP512-A FATEC Praia Grande">
    <title><?php echo htmlspecialchars($titulo_pagina, ENT_QUOTES, 'UTF-8'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,300;12..96,500;12..96,700;12..96,800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo nav_href('assets/css/style.css', $p); ?>">
</head>
<body class="sdp-body">
    <div class="sdp-ambient" aria-hidden="true">
        <div class="sdp-ambient__orb sdp-ambient__orb--top"></div>
        <div class="sdp-ambient__orb sdp-ambient__orb--right"></div>
    </div>
    <a class="skip-link" href="#conteudo-principal">Ir para o conteúdo</a>

    <div class="sdp-nav-shell">
        <nav class="sdp-float-nav" aria-label="Navegação principal">
            <div class="sdp-float-nav__inner">
                <a class="sdp-brand" href="<?php echo nav_href('index.php', $p); ?>">
                    <span class="sdp-brand__logo-wrap">
                        <img
                            class="sdp-brand__logo"
                            src="<?php echo sdp_logo_url($p); ?>"
                            width="120"
                            height="40"
                            alt="FATEC Praia Grande"
                            decoding="async"
                            onerror="this.style.visibility='hidden'; var el=this.nextElementSibling; if(el) el.classList.remove('is-hidden');"
                        >
                        <span class="sdp-brand__fallback is-hidden" aria-hidden="true"></span>
                    </span>
                    <span class="sdp-brand__text">
                        <span class="sdp-brand__title">Projeto PHP Jonatas</span>
                        <span class="sdp-brand__subtitle">Divulgação de publicações</span>
                    </span>
                </a>
                <button type="button" class="sdp-nav-toggle" id="nav-toggle" aria-expanded="false" aria-controls="nav-principal">
                    <span class="sdp-nav-toggle__bar"></span>
                    <span class="sdp-nav-toggle__bar"></span>
                    <span class="sdp-nav-toggle__bar"></span>
                    <span class="visually-hidden">Menu</span>
                </button>
                <div class="sdp-float-nav__links" id="nav-principal">
                    <ul class="sdp-nav-list">
                        <li><a class="sdp-nav-link<?php echo $modulo_ativo === 'inicio' ? ' is-active' : ''; ?>" href="<?php echo nav_href('index.php', $p); ?>">Início</a></li>
                        <li><a class="sdp-nav-link<?php echo $modulo_ativo === 'publicacao' ? ' is-active' : ''; ?>" href="<?php echo nav_href('pages/publicacao/listar.php', $p); ?>">Publicações</a></li>
                        <li><a class="sdp-nav-link<?php echo $modulo_ativo === 'divulgacao' ? ' is-active' : ''; ?>" href="<?php echo nav_href('pages/divulgacao/listar.php', $p); ?>">Divulgações</a></li>
                        <li><a class="sdp-nav-link<?php echo $modulo_ativo === 'autores' ? ' is-active' : ''; ?>" href="<?php echo nav_href('pages/autores/listar.php', $p); ?>">Autores</a></li>
                        <li><a class="sdp-nav-link<?php echo $modulo_ativo === 'classificacao' ? ' is-active' : ''; ?>" href="<?php echo nav_href('pages/classificacao/listar.php', $p); ?>">Classificações</a></li>
                        <li><a class="sdp-nav-link<?php echo $modulo_ativo === 'tipo_publicacao' ? ' is-active' : ''; ?>" href="<?php echo nav_href('pages/tipo-publicacao/listar.php', $p); ?>">Tipos</a></li>
                        <li><a class="sdp-nav-link<?php echo $modulo_ativo === 'convidados' ? ' is-active' : ''; ?>" href="<?php echo nav_href('pages/convidados/listar.php', $p); ?>">Convidados</a></li>
                    </ul>
                    <a class="sdp-nav-pill" href="<?php echo nav_href('pages/publicacao/listar.php', $p); ?>">Para as publicações</a>
                </div>
            </div>
        </nav>
    </div>

    <main class="sdp-main" id="conteudo-principal">
