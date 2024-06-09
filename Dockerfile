# Gunakan image resmi PHP sebagai base image
FROM php:8.0-cli

# Install dependensi yang diperlukan
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /app

# Copy proyek ke dalam container
COPY . /app

# Install dependensi PHP menggunakan Composer
RUN composer install

# Jalankan perintah bawaan ketika container berjalan
CMD ["composer", "test"]
