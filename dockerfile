# Použití obrazu PHP s podporou pro Apache
FROM php:apache

# Instalace potřebných PHP rozšíření pro práci s MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Nastavení pracovního adresáře
WORKDIR /var/www/html

# Kopírování zdrojových souborů aplikace do kontejneru
COPY . .

# Exponování portu 80, který bude používán pro webový server
EXPOSE 80

# Spuštění Apache webového serveru
CMD ["apache2-foreground"]