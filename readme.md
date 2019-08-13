## Instalação de plugins necessários
Rodar o comando no terminal: `npm install gulp@3.9.1 gulp-connect-php browser-sync gulp.spritesmith gulp-newer gulp-imagemin vinyl-buffer gulp-sourcemaps gulp-sass gulp-plumber gulp-uglify gulp-concat gulp-rename merge-stream gulp-notify --save-dev`

## Carregar o Template
1. Alterar "nomedosite" pelo nome do site no arquivo gulpfile.js;
2. Após ter instalado todos os pacote npm, rodar no terminal o comando `gulp` para carregar o site no endereço padrão configurado: (http://localhost:8080/nomedosite/site/).

## Atualizar o CSS
Para atualizar o arquivo de css style.css basta alterar o arquivo style.scss da pasta dev/scss/ e salvar que será atualizado automaticamente.

## Atualizar o scripts.min.js
Para atualizar o arquivo scripts.min.js basta alterar o arquivo script.js da pasta dev/js/ e salvar que será atualizado automaticamente.

## Atualizar arquivo de sprites
Para atualizar o arquivo de sprites basta salvar a nova imagem dentro da pasta dev/sprites/ que o arquivo sprites.png da pasta site/img/ será atualizado automaticamente.
