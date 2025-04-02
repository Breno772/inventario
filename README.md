# Inventário Minecraft - README

## Objetivo da Atividade
Este projeto tem como objetivo implementar um sistema de gerenciamento de inventário inspirado no jogo Minecraft, utilizando tecnologias como PHP, HTML e CSS com Bootstrap. O sistema permite adicionar e visualizar itens de um inventário.

## O que é um inventário de um jogo?
Nos jogos eletrônicos, um inventário é um sistema que armazena e gerencia os itens adquiridos pelo jogador. No Minecraft, ele é essencial para organizar recursos, ferramentas e itens coletados durante o jogo, permitindo um gerenciamento eficiente dentro da gameplay.

## Quais sistemas interligam a funcionalidade? **`projeto`**
O inventário interliga diferentes sistemas do jogo, como:
- **Armazenamento de dados:** O sistema salva os itens em um arquivo de texto (`inventario.txt`).
- **Autenticação:** O acesso ao inventário é protegido por uma página de login.
- **Interface gráfica:** Exibe o inventário e a barra rápida organizadamente.
- **Cadastro de itens:** Possibilita a adição de itens.

## Por que uma funcionalidade é importante? **`jogo`**
O sistema de inventário é importante porque permite que o jogador organize e use seus itens de forma fácil. Sem ele, seria muito difícil encontrar e gerenciar os objetos coletados no jogo. Ele ajuda a manter tudo organizado, tornando a experiência mais prática e divertida.

## Por que uma funcionalidade é importante? **`projeto`**
A funcionalidade do inventário no meu projeto é essencial para organizar os itens de maneira clara e acessível. Ela permite que os usuários visualizem seus itens, adicionem novos e utilizem a barra rápida para acesso rápido. Sem essa funcionalidade, a navegação e o gerenciamento de itens seriam confusos e menos intuitivos.

## Implementação
### Front-End
#### Quais ferramentas/frameworks foram utilizadas e por quê?
- **HTML, CSS e Bootstrap:** Para criar uma interface responsiva e visualmente organizada, similar ao estilo do Minecraft.
- **Fonte personalizada:** A fonte do Minecraft foi utilizada para manter a identidade visual do jogo.

#### Como o layout foi feito? (Linhas x Colunas)
- O inventário é estruturado em uma grade (grid) com **9 colunas e 3 linhas**, totalizando 27 slots.
- Cada item é representado por um espaço contendo uma imagem e a quantidade.
![3](https://github.com/user-attachments/assets/6c355581-4c25-4c8d-8bc6-182879020f5c)



### Back-End
#### Quais ferramentas/linguagens foram utilizadas?
- **PHP:** Para processar a lógica do sistema, autenticação do usuário e manipulação dos itens.
 


- **Arquivo TXT:** Utilizado como banco de dados simples para armazenar os itens do inventário.
   ![txt](https://github.com/user-attachments/assets/79aa2e82-9387-4a60-b2ed-85f1c8605d09)


## Código PHP
#### O que o código faz? (Explicar as principais funcionalidades)
- **`index.php`**: Página inicial com um botão de entrada para a tela de login.
  ![1](https://github.com/user-attachments/assets/60b8ec5e-b74a-4a0c-aeb7-a089ea0006f5)
- **`login.php`**: Realiza a autenticação do usuário.
  ![2](https://github.com/user-attachments/assets/374f57f4-0ce1-4662-9b98-e7fbb4ca8c59) ![login](https://github.com/user-attachments/assets/95e55a98-0d7e-4633-b926-99b1c600a2dd)
- **`cadastro.php`**: Permite adicionar itens ao inventário.
 ![4](https://github.com/user-attachments/assets/46cbcd9c-98fe-456e-962f-589c55acf6d8) ![cadastro](https://github.com/user-attachments/assets/23bf8d18-37b1-49be-8fab-42442b8ea781)
- **`inventario.php`**: Exibe os itens do inventário.
  ![3](https://github.com/user-attachments/assets/72c2171b-98d5-4147-a734-b9a6a8b8b4d9) ![inventario](https://github.com/user-attachments/assets/0be271d7-4162-462a-8ca0-04f277c5cf7d)
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
