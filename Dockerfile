FROM php:7.0-apache

MAINTAINER Michael Araujo <michaeldouglas010790@gmail.com>

# Variavel do caminho da aplicação
ENV HOME=/var/www/php

# Informa a pasta de trabalho da aplicação
WORKDIR $HOME/melhoridade/

# Retorna para o usuário root
USER root

# Configuração do apache
ADD config/apache-config.conf /etc/apache2/sites-enabled/000-default.conf

# Copia a aplicação
COPY ./ $HOME/melhoridade/

# Bibliotecas de MSSQL para o PHP
RUN docker-php-ext-install pdo pdo_mysql

# Habilita a porta 80 do apache.
EXPOSE 80

# Inicia o Apache
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]