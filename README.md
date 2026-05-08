# Sistema de Divulgação de Publicações

## Descrição
Sistema acadêmico para gestão de divulgação de publicações, desenvolvido para a disciplina Linguagem de Programação IV – Internet (ILP512-A) da FATEC-PG.
O sistema permite o gerenciamento de publicações, divulgações, autores, classificações, tipos de publicação e convidados com interfaces web em PHP.

## Tecnologias
- PHP 8+
- HTML5
- CSS3
- JavaScript
- Banco de dados: Supabase (PostgreSQL) — configuração a definir

## Pré-requisitos
- PHP 8.0 ou superior
- Servidor web local (Apache, Nginx ou similar)
- Navegador moderno
- Editor de código ou IDE compatível com PHP

## Instalação
1. Clonar o repositório:
   ```bash
   git clone https://github.com/AndersonFQueiroz/Projeto-PHP.git
   cd Projeto-PHP
   ```
2. Colocar os arquivos no diretório do servidor local.
3. Acessar o projeto pelo navegador.

## Estrutura de pastas
- `/` - documentação e arquivos principais
- `/publicacao/` - gerenciamento de publicações
- `/divulgacao/` - gerenciamento de divulgações
- `/autor/` - gerenciamento de autores
- `/classificacao/` - gerenciamento de classificações
- `/tipo_publicacao/` - gerenciamento de tipos de publicação
- `/convidado/` - gerenciamento de convidados
- `/src/` - classes PHP e lógica de domínio
- `/assets/` - CSS, JavaScript e recursos visuais

## Como executar localmente
1. Configure seu servidor local para apontar para a pasta do projeto.
2. Abra `index.php` no navegador.
3. Navegue entre os módulos de publicação, divulgação, autor, classificação, tipo de publicação e convidado.

## Funcionalidades
- Cadastro, edição, listagem e exclusão de publicações.
- Cadastro, edição, listagem e exclusão de divulgações.
- Cadastro, edição, listagem e exclusão de autores.
- Cadastro, edição, listagem e exclusão de classificações.
- Cadastro, edição, listagem e exclusão de tipos de publicação.
- Cadastro, edição, listagem e exclusão de convidados.
- Validação básica de formulários com HTML e JavaScript.
- Organização em módulos e classes PHP.

## Critérios de avaliação atendidos
| Critério | Arquivo/Área | Status |
|---|---|---|
| CRUD para entidades | `/publicacao`, `/divulgacao`, `/autor`, `/classificacao`, `/tipo_publicacao`, `/convidado` | Atendido |
| PHP OOP | `/src/` classes e módulos | Atendido |
| HTML5/CSS3/JS | Páginas e assets | Atendido |
| Banco de dados | Supabase (PostgreSQL) | 🔜 A definir |
| Documentação | `agents.md`, `requirements.md`, `specs.md`, `README.md` | Atendido |

## Autores
- Nome: __________________________
- RA: __________________________
- Curso: ________________________

## Licença
Licença acadêmica para uso institucional e atividades da disciplina de programação.
