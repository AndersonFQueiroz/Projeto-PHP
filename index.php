<?php
/**
 * Dashboard — página inicial (SDP)
 * Sistema de Divulgação de Publicações — FATEC Praia Grande
 * ILP512-A · Prof. Jônatas Cerqueira Dias
 */

$titulo_pagina = 'Painel — Sistema de Divulgação de Publicações';
$modulo_ativo = 'inicio';
require_once __DIR__ . '/header.php';
?>

        <section class="sdp-hero" aria-labelledby="sdp-hero-titulo">
            <div class="sdp-container sdp-hero__grid">
                <div class="sdp-hero__copy">
                    <p class="sdp-eyebrow">4º semestre / 2026</p>
                    <h1 class="sdp-hero__title" id="sdp-hero-titulo">
                        Divulgação de publicações com
                        <em class="sdp-hero__accent">integridade acadêmica</em>
                    </h1>
                    <p class="sdp-hero__lead">
                        Projeto da disciplina <strong>Linguagem de Programação IV — Internet</strong>, desenvolvido por
                        <strong>Anderson e Douglas</strong>: gestão das entidades <em>publicação</em>, <em>divulgação</em>, <em>autor</em>,
                        <em>classificação</em>, <em>tipo de publicação</em> e <em>convidado</em>, com arquitetura em PHP orientado a objetos,
                        HTML5, CSS3 e JavaScript, validação no cliente e no servidor, e persistência planejada com PDO.
                    </p>
                    <div class="sdp-hero__actions">
                        <a class="btn btn--primary" href="<?php echo nav_href('pages/publicacao/listar.php', $p); ?>">Publicações</a>
                        <a class="btn btn--ghost" href="<?php echo nav_href('pages/divulgacao/listar.php', $p); ?>">Divulgações</a>
                    </div>
                </div>
                <div class="sdp-hero__visual">
                    <div class="sdp-dash-preview" role="img" aria-label="Ilustração: módulos do sistema SDP (não são registros reais)">
                        <div class="sdp-dash-preview__chrome">
                            <span class="sdp-dash-preview__dot"></span>
                            <span class="sdp-dash-preview__dot"></span>
                            <span class="sdp-dash-preview__dot"></span>
                            <span class="sdp-dash-preview__url">Projeto.PHP / visão geral</span>
                        </div>
                        <div class="sdp-dash-preview__modules">
                            <p class="sdp-dash-preview__modules-intro">Mapa das entidades — CRUD conforme RF1–RF6</p>
                            <div class="sdp-dash-preview__module-grid" aria-hidden="true">
                                <div class="sdp-dash-preview__module-tile">
                                    <span class="sdp-dash-preview__module-icon" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                                    </span>
                                    <span class="sdp-dash-preview__module-label">Publicação</span>
                                </div>
                                <div class="sdp-dash-preview__module-tile">
                                    <span class="sdp-dash-preview__module-icon" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 11 18-5v12L3 14v-3z"/><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"/></svg>
                                    </span>
                                    <span class="sdp-dash-preview__module-label">Divulgação</span>
                                </div>
                                <div class="sdp-dash-preview__module-tile">
                                    <span class="sdp-dash-preview__module-icon" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                                    </span>
                                    <span class="sdp-dash-preview__module-label">Autor</span>
                                </div>
                                <div class="sdp-dash-preview__module-tile">
                                    <span class="sdp-dash-preview__module-icon" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2H2v10l9.29 9.29c.94.94 2.48.94 3.42 0l6.58-6.58c.94-.94.94-2.48 0-3.42L12 2Z"/><path d="M7 7h.01"/></svg>
                                    </span>
                                    <span class="sdp-dash-preview__module-label">Classificação</span>
                                </div>
                                <div class="sdp-dash-preview__module-tile">
                                    <span class="sdp-dash-preview__module-icon" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 12-8.5 8.5c-.83.83-2.17.83-3 0 0 0 0 0 0-.83-.83-.83-2.17 0-3L12 9"/><path d="M17.64 15 22 10.64"/></svg>
                                    </span>
                                    <span class="sdp-dash-preview__module-label">Tipo</span>
                                </div>
                                <div class="sdp-dash-preview__module-tile">
                                    <span class="sdp-dash-preview__module-icon" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" x2="19" y1="8" y2="14"/><line x1="22" x2="16" y1="11" y2="11"/></svg>
                                    </span>
                                    <span class="sdp-dash-preview__module-label">Convidado</span>
                                </div>
                            </div>
                            <p class="sdp-dash-preview__modules-foot">Dados de exemplo aparecem após persistência com PDO</p>
                        </div>
                        <div class="sdp-dash-preview__halo" aria-hidden="true"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sdp-section" aria-labelledby="sdp-bento-titulo">
            <div class="sdp-container">
                <p class="sdp-eyebrow sdp-eyebrow--section">Seis entidades · Um modelo</p>
                <h2 class="sdp-section__title" id="sdp-bento-titulo">Módulos do sistema</h2>
                <p class="sdp-section__desc">Cada módulo oferece listagem, formulário e fluxo de exclusão, alinhados aos requisitos funcionais RF1–RF6 e às regras de vínculo RF7–RF9.</p>

                <div class="sdp-bento">
                    <article class="sdp-card sdp-card--lg sdp-card--glow group">
                        <div class="sdp-card__icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                        </div>
                        <h3 class="sdp-card__title">Publicações</h3>
                        <p class="sdp-card__text">RF1 — CRUD completo. Vínculos com autor, tipo de publicação e divulgação, conforme modelo de domínio.</p>
                        <a class="sdp-card__cta" href="<?php echo nav_href('pages/publicacao/listar.php', $p); ?>">Abrir publicações <span aria-hidden="true">→</span></a>
                        <div class="sdp-card__glow" aria-hidden="true"></div>
                    </article>
                    <article class="sdp-card sdp-card--sm group">
                        <div class="sdp-card__icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 11 18-5v12L3 14v-3z"/><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"/></svg>
                        </div>
                        <h3 class="sdp-card__title">Divulgações</h3>
                        <p class="sdp-card__text">RF2 · RF9 — eventos e convidados associados.</p>
                        <a class="sdp-card__cta" href="<?php echo nav_href('pages/divulgacao/listar.php', $p); ?>">Abrir <span aria-hidden="true">→</span></a>
                        <div class="sdp-card__glow" aria-hidden="true"></div>
                    </article>
                    <article class="sdp-card sdp-card--sm group">
                        <div class="sdp-card__icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </div>
                        <h3 class="sdp-card__title">Autores</h3>
                        <p class="sdp-card__text">RF3 · RF7 — classificação vinculada.</p>
                        <a class="sdp-card__cta" href="<?php echo nav_href('pages/autores/listar.php', $p); ?>">Abrir <span aria-hidden="true">→</span></a>
                        <div class="sdp-card__glow" aria-hidden="true"></div>
                    </article>
                    <article class="sdp-card sdp-card--sm group">
                        <div class="sdp-card__icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2H2v10l9.29 9.29c.94.94 2.48.94 3.42 0l6.58-6.58c.94-.94.94-2.48 0-3.42L12 2Z"/><path d="M7 7h.01"/></svg>
                        </div>
                        <h3 class="sdp-card__title">Classificações</h3>
                        <p class="sdp-card__text">RF4 — papéis de autoria.</p>
                        <a class="sdp-card__cta" href="<?php echo nav_href('pages/classificacao/listar.php', $p); ?>">Abrir <span aria-hidden="true">→</span></a>
                        <div class="sdp-card__glow" aria-hidden="true"></div>
                    </article>
                    <article class="sdp-card sdp-card--sm group">
                        <div class="sdp-card__icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 12-8.5 8.5c-.83.83-2.17.83-3 0 0 0 0 0 0-.83-.83-.83-2.17 0-3L12 9"/><path d="M17.64 15 22 10.64"/><path d="m21 5-2.64 2.64"/><path d="m14 5 4.24 4.24"/><path d="m12 13-1.95 1.95"/></svg>
                        </div>
                        <h3 class="sdp-card__title">Tipos</h3>
                        <p class="sdp-card__text">RF5 — tipos de publicação.</p>
                        <a class="sdp-card__cta" href="<?php echo nav_href('pages/tipo-publicacao/listar.php', $p); ?>">Abrir <span aria-hidden="true">→</span></a>
                        <div class="sdp-card__glow" aria-hidden="true"></div>
                    </article>
                    <article class="sdp-card sdp-card--sm group">
                        <div class="sdp-card__icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" x2="19" y1="8" y2="14"/><line x1="22" x2="16" y1="11" y2="11"/></svg>
                        </div>
                        <h3 class="sdp-card__title">Convidados</h3>
                        <p class="sdp-card__text">RF6 — convidados e divulgações.</p>
                        <a class="sdp-card__cta" href="<?php echo nav_href('pages/convidados/listar.php', $p); ?>">Abrir <span aria-hidden="true">→</span></a>
                        <div class="sdp-card__glow" aria-hidden="true"></div>
                    </article>
                </div>
            </div>
        </section>

        <section class="sdp-section" aria-labelledby="sdp-crit-titulo">
            <div class="sdp-container">
                <p class="sdp-eyebrow sdp-eyebrow--section">Seção III · Critérios (PHP)</p>
                <h2 class="sdp-section__title" id="sdp-crit-titulo">Rubrica mapeada no projeto</h2>
                <p class="sdp-section__desc">Critérios da avaliação em programação PHP traduzidos em módulos, código comentado, padrões de nomenclatura, OOP com herança nas camadas previstas, laços, arrays, fluxo (if/switch/ternário), funções e CRUD com PDO quando o banco for conectado.</p>

                <div class="sdp-criteria-grid">
                    <div class="sdp-crit-card"><span class="sdp-crit-card__tag">Documentação</span><p>Comentários e organização em camadas (apresentação, domínio, roteamento).</p></div>
                    <div class="sdp-crit-card"><span class="sdp-crit-card__tag">OO &amp; PDO</span><p>Classes de entidade, herança onde aplicável, instanciação e conexão PDO para persistência.</p></div>
                    <div class="sdp-crit-card"><span class="sdp-crit-card__tag">Lógica PHP</span><p>Operadores, arrays, for / foreach / while, if-else, switch e ternário no servidor.</p></div>
                    <div class="sdp-crit-card"><span class="sdp-crit-card__tag">RF10–RF11</span><p>Interface responsiva em HTML/CSS/JS e validação no front-end e no back-end.</p></div>
                </div>

                <div class="sdp-criteria-wide">
                    <ul class="sdp-criteria-list">
                        <li><strong>RF1–RF6</strong> — CRUDs: publicação, divulgação, autor, classificação, tipo de publicação, convidado.</li>
                        <li><strong>RF7–RF9</strong> — Vínculos: autor ↔ classificação; publicação ↔ autor, tipo e divulgação; divulgação ↔ convidado.</li>
                        <li><strong>RNF</strong> — PHP 8+, HTML5, CSS3, JS, snake_case / PascalCase conforme <code>requirements.md</code>.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="sdp-section sdp-section--tight" aria-labelledby="sdp-stack-titulo">
            <div class="sdp-container">
                <p class="sdp-eyebrow sdp-eyebrow--section">Arquitetura</p>
                <h2 class="sdp-section__title" id="sdp-stack-titulo">Stack documentada</h2>
                <div class="sdp-stack-row">
                    <span class="sdp-stack-pill"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg> PDO / PostgreSQL (planejado)</span>
                    <span class="sdp-stack-pill"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg> PHP 8+ orientado a objetos</span>
                    <span class="sdp-stack-pill"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/></svg> Validação cliente + servidor</span>
                </div>
            </div>
        </section>

        <section class="sdp-section" aria-labelledby="sdp-cta-final">
            <div class="sdp-container">
                <div class="sdp-final-cta">
                    <div class="sdp-final-cta__glow" aria-hidden="true"></div>
                    <p class="sdp-eyebrow sdp-eyebrow--on-dark">Próximo passo</p>
                    <h2 class="sdp-final-cta__title" id="sdp-cta-final">Conectar persistência e regras de negócio</h2>
                    <p class="sdp-final-cta__text">As telas estão prontas para receber os agentes de domínio, consultas SQL e transações via PDO, mantendo a separação entre roteamento, views e classes em <code>/classes</code>.</p>
                    <a class="btn btn--primary" href="<?php echo nav_href('pages/publicacao/form.php', $p); ?>">Nova publicação</a>
                </div>
            </div>
        </section>

<?php require_once __DIR__ . '/footer.php'; ?>
