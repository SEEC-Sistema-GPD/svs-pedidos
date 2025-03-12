# Imagem base com PHP 8.1 e Apache
FROM php:8.1-apache

# Copia todo o conteúdo da pasta svs-pedidos para o diretório padrão do Apache
COPY svs-pedidos/ /var/www/html/

# Habilita o módulo mod_rewrite, se necessário pela aplicação
RUN a2enmod rewrite

# Exponha a porta 80 no container
EXPOSE 80
