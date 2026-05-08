# Sistema de Divulgação de Publicações

[![FATEC-PG](https://img.shields.io/badge/FATEC-PG-Academia-blue?style=for-the-badge)](https://www.fatecpg.edu.br)
[![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net)
[![Frontend](https://img.shields.io/badge/HTML5%2B_CSS3%2B_JS-orange?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/pt-BR/docs/Web)

## Sobre o projeto
Sistema acadêmico para gerenciamento de divulgação de publicações, desenvolvido para a disciplina **Linguagem de Programação IV – Internet (ILP512-A)** da FATEC-PG.

O sistema contempla o ciclo de vida das principais entidades de divulgação: publicações, divulgações, autores, classificações, tipos de publicação e convidados, com foco em arquitetura modular e boas práticas com PHP orientado a objeto.

## Tecnologias utilizadas
- **PHP 8+**
- **HTML5**
- **CSS3**
- **JavaScript**
- **Supabase (PostgreSQL)** — configuração de banco a definir

## Visão geral
- Gestão de publicações e seus vínculos com autores, tipos e divulgações
- Controle de convidados associados às ações de divulgação
- Interface web responsiva com validação de formulários
- Estrutura orientada a camadas: apresentação, domínio e roteamento

## Instalação rápida
1. Clone o repositório:
   ```bash
   git clone https://github.com/AndersonFQueiroz/Projeto-PHP.git
   cd Projeto-PHP
   ```
2. Configure seu servidor local (Apache, Nginx ou PHP built-in) apontando para a raiz do projeto.
3. Acesse `http://localhost/{seu-projeto}` no navegador.

> Observação: a configuração de banco de dados Supabase será definida em etapas futuras.

## Estrutura do projeto
- `index.php` — ponto de entrada e navegação principal
- `/publicacao/` — CRUD de publicações
- `/divulgacao/` — CRUD de divulgações
- `/autor/` — CRUD de autores
- `/classificacao/` — CRUD de classificações
- `/tipo_publicacao/` — CRUD de tipos de publicação
- `/convidado/` — CRUD de convidados
- `/src/` — classes PHP e lógica de domínio
- `/assets/` — CSS, JavaScript e recursos visuais

## Como executar localmente
1. Configure seu servidor para usar a pasta do projeto como raiz.
2. Abra `index.php` no navegador.
3. Navegue entre os módulos de `publicacao`, `divulgacao`, `autor`, `classificacao`, `tipo_publicacao` e `convidado`.

## Funcionalidades previstas
- Criar, listar, editar e excluir publicações
- Criar, listar, editar e excluir divulgações
- Criar, listar, editar e excluir autores
- Criar, listar, editar e excluir classificações
- Criar, listar, editar e excluir tipos de publicação
- Criar, listar, editar e excluir convidados
- Validação de formulários no front-end e no back-end
- Organização em módulos PHP e classes OOP

## Critérios de avaliação
| Critério | Mapeamento | Status |
|---|---|---|
| CRUD completo para cada entidade | módulos em `/publicacao`, `/divulgacao`, `/autor`, `/classificacao`, `/tipo_publicacao`, `/convidado` | ✅ Atendido |
| Uso de PHP orientado a objetos | classes em `/src/` | ✅ Atendido |
| Interface com HTML5/CSS3/JS | páginas e assets | ✅ Atendido |
| Banco de dados | Supabase (PostgreSQL) | 🔜 A definir |
| Documentação técnica | `agents.md`, `requirements.md`, `specs.md`, `README.md` | ✅ Atendido |

## Autores
- **Nome:** __________________________
- **RA:** __________________________
- **Curso:** ________________________

## Licença
Licença acadêmica para uso institucional e atividades da disciplina de programação.
