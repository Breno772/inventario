# Inventário Minecraft - README

## Objetivo da Atividade
Este projeto tem como objetivo implementar um sistema de gerenciamento de inventário inspirado no jogo Minecraft, utilizando tecnologias como PHP, HTML e CSS com Bootstrap. O sistema permite adicionar, remover e visualizar itens de um inventário.

## O que é um inventário de um jogo?
Nos jogos eletrônicos, um inventário é um sistema que armazena e gerencia os itens adquiridos pelo jogador. No Minecraft, ele é essencial para organizar recursos, ferramentas e itens coletados durante o jogo, permitindo um gerenciamento eficiente dentro da gameplay.

## Quais sistemas interligam a funcionalidade?
O inventário interliga diferentes sistemas do jogo, como:
- **Armazenamento de dados:** O sistema salva os itens em um arquivo de texto (`inventario.txt`).
- **Autenticação:** O acesso ao inventário é protegido por uma página de login.
- **Interface gráfica:** Exibe o inventário e a barra rápida organizadamente.
- **Cadastro e remoção de itens:** Possibilita a adição e remoção de itens dinamicamente.

## Por que uma funcionalidade é importante?
O sistema de inventário é essencial para a organização de itens, facilitando a interação do usuário com os objetos disponíveis no jogo. Sem ele, o gerenciamento de recursos seria caótico e dificultaria a experiência do jogador.

## Implementação
### Front-End
#### Quais ferramentas/frameworks foram utilizadas e por quê?
- **HTML, CSS e Bootstrap:** Para criar uma interface responsiva e visualmente organizada, similar ao estilo do Minecraft.
- **Fonte personalizada:** A fonte do Minecraft foi utilizada para manter a identidade visual do jogo.

#### Como o layout foi feito? (Linhas x Colunas)
- O inventário é estruturado em uma grade (grid) com **9 colunas e 3 linhas**, totalizando 27 slots.
- Cada item é representado por um espaço contendo uma imagem e a quantidade.
- <img src="(https://github.com/user-attachments/assets/2234a9a5-1e6e-46bb-84ba-c195e1741917)" alt="Texto Alternativo">, width="50%. 


### Back-End
#### Quais ferramentas/linguagens foram utilizadas?
- **PHP:** Para processar a lógica do sistema, autenticação do usuário e manipulação dos itens.
- **Arquivo TXT:** Utilizado como banco de dados simples para armazenar os itens do inventário.

## Código PHP
#### O que o código faz? (Explicar as principais funcionalidades)
- **`index.php`**: Página inicial com um botão de entrada para a tela de login.
- **`login.php`**: Realiza a autenticação do usuário.
- **`cadastro.php`**: Permite adicionar itens ao inventário.
- **`inventario.php`**: Exibe os itens do inventário e a barra rápida.
- **`logout.php`**: Finaliza a sessão do usuário.

## Passo a passo para executar o sistema
1. Baixe ou clone o repositório do projeto.
2. Coloque os arquivos em um servidor local com suporte a PHP (XAMPP).
3. Inicie o servidor e acesse `index.php` pelo navegador.
4. Efetue login com as credenciais predefinidas.
5. Utilize as funcionalidades para cadastrar e visualizar itens.

## Hierarquia de diretórios do projeto
```
/inventario
│-- /assets
│ ├── /img (imagens do inventário e do fundo)
│ ├── /fonts (fonte Minecraft)
│-- /css
│ ├── style.css (estilização do sistema)
│-- /data
│ ├── inventario.txt (arquivo que armazena os itens)
│-- index.php (Tela de boas-vindas)
│-- login.php (Tela de login)
│-- inventario.php (Tela do inventário)
│-- cadastro.php (Cadastro de itens)
│-- logout.php (Finalização da sessão)
```
