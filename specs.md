# Especificação Técnica do Sistema

## Estrutura de Pastas
- `/` - raiz do projeto com documentação e arquivos principais.
- `/publicacao/` - páginas e formulários de publicações.
- `/divulgacao/` - páginas de gerenciamento de divulgações.
- `/autor/` - páginas para cadastro e listagem de autores.
- `/classificacao/` - páginas de classificação de autores.
- `/tipo_publicacao/` - páginas de tipos de publicação.
- `/convidado/` - páginas de cadastro de convidados.
- `/src/` - classes PHP e módulos de domínio.
- `/assets/` - CSS, JavaScript e recursos visuais.

## Principais Classes PHP

### `Publicacao`
- Métodos:
  - `__construct(array $dados)`
  - `validar(): bool`
  - `toArray(): array`
  - `carregar(array $dados): void`
- Descrição: representa a entidade de publicação e valida regras de dados básicos.

### `Divulgacao`
- Métodos:
  - `__construct(array $dados)`
  - `validar(): bool`
  - `toArray(): array`
  - `carregar(array $dados): void`
- Descrição: representa a divulgação e mantém dados de convidado e evento.

### `Autor`
- Métodos:
  - `__construct(array $dados)`
  - `validar(): bool`
  - `toArray(): array`
  - `carregar(array $dados): void`
- Descrição: gerencia informações de autor e associação a classificações.

### `Classificacao`
- Métodos:
  - `__construct(array $dados)`
  - `validar(): bool`
  - `toArray(): array`
  - `carregar(array $dados): void`
- Descrição: define a classificação do autor dentro da publicação.

### `TipoPublicacao`
- Métodos:
  - `__construct(array $dados)`
  - `validar(): bool`
  - `toArray(): array`
  - `carregar(array $dados): void`
- Descrição: organiza os tipos de publicação disponíveis.

### `Convidado`
- Métodos:
  - `__construct(array $dados)`
  - `validar(): bool`
  - `toArray(): array`
  - `carregar(array $dados): void`
- Descrição: representa os convidados vinculados às divulgações.

### `View`
- Métodos:
  - `render(string $template, array $dados = []): void`
  - `carregar_template(string $caminho): string`
  - `exibir_erro(string $mensagem): void`
- Descrição: controla a renderização de templates e apresentação.

### `Router`
- Métodos:
  - `registrar_rota(string $caminho, callable $acao): void`
  - `disparar(): void`
  - `obter_parametros(): array`
- Descrição: roteia requisições HTTP para as ações corretas.

## Rotas e Páginas do Sistema
- `index.php` - página inicial com navegação para os módulos.
- `publicacao/listar.php` - lista publicações.
- `publicacao/criar.php` - formulário de criação de publicação.
- `publicacao/editar.php` - formulário de edição de publicação.
- `divulgacao/listar.php` - lista divulgações.
- `divulgacao/criar.php` - formulário de criação de divulgação.
- `divulgacao/editar.php` - formulário de edição de divulgação.
- `autor/listar.php` - lista autores.
- `autor/criar.php` - formulário de criação de autor.
- `autor/editar.php` - formulário de edição de autor.
- `classificacao/listar.php` - lista classificações.
- `classificacao/criar.php` - formulário de criação de classificação.
- `classificacao/editar.php` - formulário de edição de classificação.
- `tipo_publicacao/listar.php` - lista tipos de publicação.
- `tipo_publicacao/criar.php` - formulário de criação de tipo de publicação.
- `tipo_publicacao/editar.php` - formulário de edição de tipo de publicação.
- `convidado/listar.php` - lista convidados.
- `convidado/criar.php` - formulário de criação de convidado.
- `convidado/editar.php` - formulário de edição de convidado.

## Mapeamento de Critérios de Avaliação
- Critério de CRUD: implementado em rotas de `listar`, `criar`, `editar`, `remover` para cada entidade.
- Critério de PHP OOP: classes em `/src/` como `Publicacao`, `Divulgacao`, `Autor`, `Classificacao`, `TipoPublicacao`, `Convidado`.
- Critério de HTML/CSS/JavaScript: páginas de interface e scripts de validação de formulários.
- Critério de Banco de Dados: planejado para Supabase (PostgreSQL) com seção marcada como "🔜 A definir".
- Critério de documentação: atendido por `agents.md`, `requirements.md`, `specs.md` e `README.md`.

## Banco de Dados
- Status: 🔜 A definir – Supabase (PostgreSQL)
- Observação: o modelo de banco de dados será documentado posteriormente.
