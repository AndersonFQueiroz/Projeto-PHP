# Sistema de Divulgação de Publicações (SDP)

[![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/pt-BR/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://developer.mozilla.org/pt-BR/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript)

Sistema acadêmico para **gerenciamento da divulgação de publicações**, desenvolvido na disciplina **Linguagem de Programação IV — Internet (ILP512-A)** da **FATEC Praia Grande** (Centro Paula Souza), com **Professor Jônatas Cerqueira Dias**.

O projeto cobre o ciclo de vida das entidades de domínio — publicações, divulgações, autores, classificações, tipos de publicação e convidados — com **PHP orientado a objetos**, camada de apresentação em **HTML5/CSS3/JS** e arquitetura em camadas (apresentação, classes de domínio e roteamento). A persistência com **PDO / PostgreSQL** (por exemplo via Supabase) está prevista nas especificações.

---

## Sumário

- [Visão geral](#visão-geral)
- [Interface (frontend atual)](#interface-frontend-atual)
- [Tecnologias](#tecnologias-utilizadas)
- [Estrutura do repositório](#estrutura-do-repositório)
- [Instalação e execução local](#instalação-e-execução-local)
- [Funcionalidades](#funcionalidades)
- [Critérios de avaliação](#critérios-de-avaliação)
- [Documentação complementar](#documentação-complementar)
- [Autores](#autores)
- [Licença](#licença)

---

## Visão geral

- **Gestão** de publicações e vínculos com autores, tipos e divulgações (requisitos RF1 e relacionamentos RF7–RF9).
- **Divulgações e convidados** com telas de CRUD alinhadas ao modelo de dados.
- **Interface responsiva** com validação no cliente (`data-validate` em formulários) e preparação para validação no servidor quando o back-end persistir dados.
- **Painel inicial** (`index.php`) com hero, mapa visual das entidades, grade estilo *bento* e seções de contexto acadêmico/rubrica.

---

## Interface (frontend atual)

O front segue a direção **Midnight Neo-SaaS** (referência: produtos como Linear, Vercel e documentação premium): escuro, institucional e legível, sem aparência genérica de “startup de IA”.

| Aspecto | Detalhes |
|--------|----------|
| **Paleta** | Fundo preto; cartões em tons frios; marca em vermelho institucional; realces com **OKLCH** e *fallback* em hex/rgba para navegadores sem suporte. |
| **Tipografia** | **Bricolage Grotesque** (títulos) e **Inter** (corpo), carregadas via Google Fonts. |
| **Layout global** | Orbs de ambiente fixos (`sdp-ambient`), **barra de navegação flutuante** com logo FATEC, links dos módulos, *toggle* mobile com `aria-expanded`, link “pular para o conteúdo” e rodapé com créditos da disciplina. |
| **Logo** | Arquivo `FatecPG logo.png` em `assets/brand/` (caminho resolvido com prefixo relativo para funcionar dentro de `pages/...`). |
| **Componentes** | Botões primários/ghost, cartões com brilho sutil, tabelas (`data-table`), *empty states*, alertas, cabeçalhos de página (`page-head`) e formulários com agrupamento `.field`. |
| **JavaScript** | `assets/js/main.js`: menu mobile, validação por tipo de formulário, confirmação de exclusão (`data-confirm-delete`). |

Telas de **listar / form / deletar** existem para cada módulo em `pages/<entidade>/`, todas usando o mesmo `header.php` e `footer.php` para consistência visual.

---

## Tecnologias utilizadas

- **PHP 8+** (classes em `classes/`, inclusão de templates)
- **HTML5** semântico e acessibilidade básica (landmarks, `aria-*`, *skip link*)
- **CSS3** moderno (variáveis, `color-mix` com fallback, *grid*, *flex*)
- **JavaScript** (vanilla, IIFE estrita)
- **Supabase (PostgreSQL)** — configuração de banco conforme evolução do projeto (`config/database.php` não versionado; ver `.gitignore`)

---

## Estrutura do repositório

| Caminho | Função |
|---------|--------|
| `index.php` | Painel inicial e ponto de entrada principal |
| `header.php` / `footer.php` | Shell HTML, navegação, prefixo de URLs e fechamento da página |
| `pages/publicacao/` | CRUD de publicações (listar, form, deletar) |
| `pages/divulgacao/` | CRUD de divulgações |
| `pages/autores/` | CRUD de autores |
| `pages/classificacao/` | CRUD de classificações |
| `pages/tipo-publicacao/` | CRUD de tipos de publicação |
| `pages/convidados/` | CRUD de convidados |
| `classes/` | Entidades de domínio, `View.php`, `Router.php` |
| `assets/css/style.css` | Design system SDP (Midnight Neo-SaaS) |
| `assets/js/main.js` | Comportamento global (nav + validação) |
| `assets/brand/` | Marca institucional (logo FATEC PG) |

A classe `View` inclui `header.php`, o template em `pages/<nome>.php` e `footer.php`, mantendo o mesmo *look and feel* em todas as rotas renderizadas por ela.

---

## Instalação e execução local

1. **Clone** o repositório:
   ```bash
   git clone https://github.com/AndersonFQueiroz/Projeto-PHP.git
   cd Projeto-PHP
   ```
2. Configure um servidor local (**Apache**, **Nginx** ou `php -S localhost:8000` na raiz do projeto).
3. Abra no navegador a URL do servidor (por exemplo `http://localhost:8000`).

> A conexão com banco (Supabase/PostgreSQL via PDO) será detalhada quando a camada de persistência for integrada; até lá, as listagens exibem estados vazios informativos.

---

## Funcionalidades

- **CRUD** de publicação, divulgação, autor, classificação, tipo de publicação e convidado (interfaces prontas).
- **Navegação** entre módulos com destaque do item ativo.
- **Validação de formulários** no front-end por módulo; exclusão com confirmação.
- **Organização** em módulos PHP, convenções de nomenclatura e documentação em arquivos de requisitos e especificação.

---

## Critérios de avaliação

| Critério | Mapeamento no projeto | Status |
|----------|------------------------|--------|
| CRUD completo para cada entidade | Pastas em `pages/<entidade>/` | Atendido (UI) |
| Uso de PHP orientado a objetos | Classes em `classes/` | Atendido |
| Interface com HTML5/CSS3/JS | Páginas + `assets/` | Atendido |
| Banco de dados | Supabase (PostgreSQL) / PDO | A definir na integração |
| Documentação técnica | `agents.md`, `requirements.md`, `specs.md`, `README.md` | Atendido |

---

## Documentação complementar

- `requirements.md` — requisitos funcionais e não funcionais  
- `specs.md` — especificação e modelo de informação  
- `agents.md` — papéis dos agentes de software (visão acadêmica)  
- `prompt de design.md` — diretrizes do tema *Midnight Neo-SaaS* (opcional para reprodução do visual)

---

## Autores

- **Nome:** __________________________  
- **RA:** __________________________  
- **Curso:** ________________________  

*(Equipe citada no painel: Anderson e Douglas — preencha os campos acima conforme orientação da disciplina.)*

---

## Licença

Licença acadêmica para uso institucional e atividades da disciplina de programação.
