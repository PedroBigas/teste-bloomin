# Teste para Desenvolvimento Web

Este repositório contém um teste para desenvolvimento web, utilizando tecnologias modernas para estruturação de um site.

## Tecnologias Utilizadas
- **PHP**: Para modularização e inclusão de arquivos dinâmicos.
- **HTML**: Estrutura do site.
- **SASS**: Pré-processador CSS para melhor organização dos estilos.
- **Bootstrap 5**: Framework CSS para estilização responsiva e componentes prontos.

## Estrutura do Projeto
```
/
|-- css/         # Arquivos CSS compilados
|-- fonts/       # Fontes utilizadas
|-- img/         # Imagens do projeto
|-- inc/         # Arquivos PHP auxiliares
|-- js/          # Scripts JavaScript
|-- scss/        # Arquivos SASS (pré-processador CSS)
|-- .htaccess    # Configurações do servidor
|-- index.php    # Página principal
|-- readme.md    # Documentação do projeto
```

## Como Instalar e Rodar
1. Clone o repositório:
   ```sh
   git clone https://github.com/PedroBigas/teste-bloomin.git
   ```
2. Acesse a pasta do projeto:
   ```sh
   cd teste-bloomin
   ```
3. Instale as dependências do Bootstrap 5 (caso necessário):
   ```sh
   npm install bootstrap
   ```
4. Compile os arquivos SASS:
   ```sh
   sass --watch style.scss:../css/style.css
   ```
5. Execute um servidor local (caso não tenha um ambiente LAMP/WAMP/XAMPP):
   ```sh
   php -S localhost:8000
   ```
6. Acesse no navegador:
   ```
   http://localhost:8000
   ```
