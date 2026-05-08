# Agentes do Sistema de Divulgação de Publicações

## AgentePublicacao
- Responsabilidade: gerenciar lógica de negócio relacionada às publicações e seu fluxo de CRUD.
- Métodos principais:
  - `criar_publicacao(array $dados): void`
  - `obter_publicacao(int $id): array`
  - `listar_publicacoes(): array`
  - `atualizar_publicacao(int $id, array $dados): void`
  - `remover_publicacao(int $id): void`
- Dependências:
  - Validação de dados de publicação
  - Transformação de dados para exibição
  - Interface de apresentação (views)

## AgenteDivulgacao
- Responsabilidade: controlar regras de divulgação de eventos e ações relacionadas a convidados.
- Métodos principais:
  - `criar_divulgacao(array $dados): void`
  - `obter_divulgacao(int $id): array`
  - `listar_divulgacoes(): array`
  - `atualizar_divulgacao(int $id, array $dados): void`
  - `remover_divulgacao(int $id): void`
- Dependências:
  - Validação de dados de divulgação
  - Interface de roteamento/rotas
  - Módulos de publicação e convidados

## AgenteAutor
- Responsabilidade: gerenciar o cadastro e edição de autores e suas relações com publicações.
- Métodos principais:
  - `criar_autor(array $dados): void`
  - `obter_autor(int $id): array`
  - `listar_autores(): array`
  - `atualizar_autor(int $id, array $dados): void`
  - `remover_autor(int $id): void`
- Dependências:
  - Validação de dados de autor
  - AgenteClassificacao para relacionamento de papéis
  - AgentePublicacao para associação de autores a publicações

## AgenteClassificacao
- Responsabilidade: gerenciar classificações de autoria, como coautor e revisor.
- Métodos principais:
  - `criar_classificacao(array $dados): void`
  - `obter_classificacao(int $id): array`
  - `listar_classificacoes(): array`
  - `atualizar_classificacao(int $id, array $dados): void`
  - `remover_classificacao(int $id): void`
- Dependências:
  - Validação de nomenclatura e descrição
  - AgenteAutor para vinculação de classificações

## AgenteTipoPublicacao
- Responsabilidade: controlar tipos de publicação e categorizar conteúdos divulgados.
- Métodos principais:
  - `criar_tipo_publicacao(array $dados): void`
  - `obter_tipo_publicacao(int $id): array`
  - `listar_tipos_publicacao(): array`
  - `atualizar_tipo_publicacao(int $id, array $dados): void`
  - `remover_tipo_publicacao(int $id): void`
- Dependências:
  - Validação de tipo e formato
  - Interface de administração para cadastro de categorias
  - AgentePublicacao para classificação de publicações

## AgenteConvidado
- Responsabilidade: gerenciar convidados associados às divulgações e eventos.
- Métodos principais:
  - `criar_convidado(array $dados): void`
  - `obter_convidado(int $id): array`
  - `listar_convidados(): array`
  - `atualizar_convidado(int $id, array $dados): void`
  - `remover_convidado(int $id): void`
- Dependências:
  - Validação de dados de contato
  - AgenteDivulgacao para relacionar convidado com divulgação
  - Camada de apresentação para listagem e escolha de convidados

## AgenteView
- Responsabilidade: gerar a apresentação de dados para as páginas HTML e controlar templates.
- Métodos principais:
  - `render(string $template, array $dados = []): void`
  - `carregar_template(string $caminho): string`
  - `exibir_erro(string $mensagem): void`
- Dependências:
  - Agentes de domínio para fornecer dados
  - Recursos de HTML, CSS e JavaScript
  - Rotas do projeto

## AgenteRouter
- Responsabilidade: mapear requisições HTTP para páginas ou controladores adequados.
- Métodos principais:
  - `registrar_rota(string $caminho, callable $acao): void`
  - `disparar(): void`
  - `obter_parametros(): array`
- Dependências:
  - Ambiente de servidor web
  - Módulos de página e lógica de apresentação
  - AgenteView para renderizar respostas
