# Use a imagem oficial do PHP 8.1
FROM php:8.1-fpm

# Instale as extensões PHP necessárias (exemplo: pdo, pdo_mysql)
RUN docker-php-ext-install pdo pdo_mysql

# Copie o código-fonte do Laravel para o contêiner
COPY . /var/www/html

# Defina o diretório de trabalho
WORKDIR /var/www/html

# Exponha a porta 9000 (usada pelo PHP-FPM)
EXPOSE 9000
