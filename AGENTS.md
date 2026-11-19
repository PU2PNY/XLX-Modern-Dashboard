# Selecao automatica de skills por relevancia

## Prioridade
Em toda tarefa, antes de editar, identificar o tipo de trabalho e consultar apenas os SKILL.md das habilidades locais apropriadas (quando instaladas). Nao iniciar processos residentes para skills, nem executar todas indiscriminadamente.

| Trabalho | Skill e comportamento |
|---|---|
| Novo site, landing page, pagina comercial, redesign visual amplo de site | `design-taste-frontend` (Taste Skill), e `modern-web-guidance` quando houver HTML/CSS/JS ou requisitos de compatibilidade |
| Correcao pontual de interface, acessibilidade, CSS, responsividade, Web APIs, desempenho no navegador | `modern-web-guidance`. Taste Skill somente se a solicitacao envolver a experiencia ou identidade visual |
| Auditoria visual de site e melhorias de conversao | Taste Skill; consultar MWG para acessibilidade e performance, sem copiar template inteiro para app existente |
| Teste funcional em navegador | `playwright-cli` se disponivel, ou os verificadores do Taste em ambiente local/preview |
| Sistema de design e polimento de componentes | `design-md-library` ou `impeccable`, se instaladas e aplicaveis |
| Backend, radio, API, integracao WhatsApp, banco, seguranca de servidor, Docker, CI, scripts e deploy | Nenhuma dessas skills de frontend salvo se houver subparte client-side; usar ferramentas tecnicas apropriadas |

## Operacao
- Para MWG: pesquisar um conceito de 2 a 5 palavras em ingles usando `modern-web-guidance search "responsive data table"`, ler IDs retornados e obter a orientacao com `modern-web-guidance retrieve "<id-retornado>"`. Aplicar Baseline e fallbacks, sem APIs experimentais automaticamente.
- Para Taste: ler `design-taste-frontend/SKILL.md` antes de iniciar um build/redesign. Avaliar tipologia da pagina, preservar identidade visual e dados verdadeiros, preparar um ambiente local/preview, e rodar checagens com Node 22+ e Chrome/Chromium onde disponiveis. Nao disparar o gate em paginas de producao ou alteracoes de backend.
- Os agentes detectam skills por metadados (frontmatter e descricao), e a tarefa orienta qual ativar. Se houver outras skills instaladas, considerar apenas as que se aplicam, sem executar scripts nao revisados.
- Duas skills aplicaveis: Taste orienta composicao visual e MWG orienta interoperabilidade web, acessibilidade e performance. Requisitos do produto e acoes do usuario prevalecem sobre regras esteticas. Nao inventar precos, contatos, depoimentos ou caracteristicas; nao omitir contatos reais por causa de exemplos do Taste Skill.
- Fazer diff, testes e plano de reversao para mudancas. Nao publicar, migrar, alterar servicos em producao ou instalar atualizacoes irrestritas apenas por carregar uma skill. Verificar primeiro se Chrome e Node 22 existem na maquina usada.

Fontes oficiais:
- https://github.com/GoogleChrome/modern-web-guidance
- https://github.com/Leonxlnx/taste-skill

## Ponytail — padrao de implementacao conservador

Aplicar estes principios em toda tarefa que altere codigo, mesmo quando o plugin Ponytail nao estiver instalado no ambiente:
- Antes de editar, inspecionar os trechos afetados e mapear consumidores, testes, fixtures, configuracoes, contratos de API e possiveis impactos em dados.
- Preferir a menor alteracao **completa, legivel e verificavel**. Reutilizar helpers, componentes e dependencias ja presentes. Evitar dependencias, camadas, flags e funcionalidades especulativas.
- Corrigir a causa comum do defeito, nao mascarar sintomas em cada tela ou empresa. Verificar todos os chamadores ao modificar comportamentos compartilhados.
- Nao sacrificar validacao, autenticacao, autorizacao, isolamento multiempresa, seguranca, tratamento de erros, acessibilidade, compatibilidade nem calibracao de hardware e protocolos para reduzir linhas.
- Mudancas de logica nao trivial, pagamentos, dados, permissoes, integracoes, scripts ou seguranca exigem teste focado ou verificacao reproduzivel. Informar verificacoes executadas, nao executadas e riscos residuais.
- Nao executar hooks, instaladores ou scripts de terceiros sem revisar sua origem e conteudo. Nao presumir que plugins ou skills estejam instalados; seguir estas regras como alternativa.
- Estas orientacoes complementam as skills de frontend acima; nao as substituem. Priorizar requisitos do projeto, seguranca e intencao do usuario. Trabalhar em branch/PR e nao fazer merge, deploy, migracao, reinicio ou alteracao de producao automaticamente.

Referencia oficial: https://github.com/DietrichGebert/ponytail/blob/main/AGENTS.md
