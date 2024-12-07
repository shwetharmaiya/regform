# Use a lightweight PHP image as the base
FROM php:8.2-fpm-alpine

# Set the working directory
WORKDIR /

# Copy the application code
COPY . .

# Install dependencies
RUN apk add --no-cache \
    freetype \
    libjpeg-turbo \
    libpng \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql

# Expose the port for the PHP-FPM service
EXPOSE 8080

# Start the PHP-FPM service
CMD ["php-fpm"]