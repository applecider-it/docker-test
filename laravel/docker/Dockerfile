FROM php:8.4

# 必要な拡張（最低限）
RUN docker-php-ext-install pdo pdo_mysql pcntl

# Git / unzip / curl / bash を追加
RUN apt-get update && apt-get install -y \
        git \
        unzip \
        bash \
        curl \
    && rm -rf /var/lib/apt/lists/*

# Composer インストール
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# npm用
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs

EXPOSE 8000
EXPOSE 5173

USER 1000:1000

WORKDIR /var/www/html
