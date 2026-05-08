# Requisitos do Sistema

## Requisitos Funcionais (RF)
- RF1: CRUD completo para Publicação.
- RF2: CRUD completo para Divulgação.
- RF3: CRUD completo para Autores.
- RF4: CRUD completo para Classificação.
- RF5: CRUD completo para Tipo de Publicação.
- RF6: CRUD completo para Convidados.
- RF7: Cadastro de autores com vínculo de classificação.
- RF8: Cadastro de publicações com vínculo a autor, tipo de publicação e divulgação.
- RF9: Gerenciamento de divulgações com convidados associados.
- RF10: Listagem, criação, edição e exclusão com interfaces web responsivas.
- RF11: Validação de dados no front-end e no back-end em PHP.

## Requisitos Não Funcionais (RNF)
- RNF1: Aplicar padrão de código consistente e legível.
- RNF2: Usar PHP 8+ com orientação a objetos.
- RNF3: Utilizar HTML5 para estrutura das páginas.
- RNF4: Aplicar CSS3 para layout e responsividade.
- RNF5: Incluir JavaScript para interações e validação no cliente.
- RNF6: Modularização de responsabilidades em classes PHP.
- RNF7: Uso de nomes em snake_case para variáveis e métodos, PascalCase para classes.
- RNF8: Arquitetura organizada em camadas: apresentação, domínio e roteamento.
- RNF9: Documentação técnica e código comentado quando necessário.
- RNF10: Cumprir critérios acadêmicos de avaliação da disciplina.

## Requisitos Acadêmicos Mapeados
- Deve apresentar CRUD para entidades principais: mapeado em `publicacao`, `divulgacao`, `autor`, `classificacao`, `tipo_publicacao`, `convidado`.
- Deve utilizar HTML, CSS e JavaScript: mapeado em páginas de interface web e validações de formulário.
- Deve demonstrar uso de PHP orientado a objetos: mapeado em classes como `Publicacao`, `Divulgacao`, `Autor`, `Classificacao`, `TipoPublicacao`, `Convidado`.
- Deve mostrar organização de projeto e documentação: mapeado nos arquivos `agents.md`, `requirements.md`, `specs.md` e `README.md`.
- Deve mencionar banco de dados utilizado: status "🔜 A definir – Supabase (PostgreSQL)".

## Requisitos de Banco
- Banco de dados: 🔜 A definir – Supabase (PostgreSQL)
- Configuração de conexão: 🔜 A definir
- Schema e migrations: 🔜 A definir
