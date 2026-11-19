# Instrucoes do Claude Code

Ler e cumprir [AGENTS.md](AGENTS.md) em toda tarefa. Selecionar automaticamente skills pela relevancia da solicitacao, sem rodar todas. Para nova landing page e redesign visual, carregar `design-taste-frontend` (Taste Skill); para HTML/CSS/JS cliente, acessibilidade e compatibilidade, usar `modern-web-guidance`. Para backend/infraestrutura, nao invocar skills de design sem necessidade. Proteger dados reais, verificar navegador/Node do ambiente e nao publicar automaticamente.

Fontes: https://github.com/Leonxlnx/taste-skill e https://github.com/GoogleChrome/modern-web-guidance

## Ponytail nas tarefas de codigo

Sempre consultar a secao Ponytail de [AGENTS.md](AGENTS.md) antes de editar codigo. Aplicar automaticamente seus principios de escopo minimo completo, reutilizacao, seguranca e testes, sem depender da instalacao do plugin. Quando o plugin oficial Ponytail estiver disponivel **no Claude Code**, ele pode complementar essas instrucoes; nao presumir que esteja instalado, nem executar comandos `/plugin` ou hooks sem revisao. Nao fazer deploy ou merge automatico.

Instalacao opcional do plugin no Claude Code: https://github.com/DietrichGebert/ponytail/blob/main/INSTALL.md
