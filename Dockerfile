# Sử dụng PHP 8.2 + Apache
FROM php:8.2-apache

# Cài các extension cần thiết
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy toàn bộ code vào thư mục web
COPY . /var/www/html/

# Phân quyền
RUN chown -R www-data:www-data /var/www/html

# Mở port
EXPOSE 80

# Khởi chạy Apache
CMD ["apache2-foreground"]
