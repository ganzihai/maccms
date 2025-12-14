# 使用官方轻量级 PHP 7.4 Apache 镜像 (Maccms v10 对 7.4 兼容性最好)
FROM php:7.4-apache

# 1. 安装 Maccms 需要的 PHP 扩展 (gd, pdo_mysql, zip, opcache)
# 更新源并安装依赖库
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo_mysql zip opcache

# 2. 启用 Apache Rewrite 模块 (用于 Maccms 伪静态)
RUN a2enmod rewrite

# 3. 复制当前目录所有文件到容器的 Web 根目录
COPY . /var/www/html/

# 4. 设置权限，确保 www-data 用户可以写入 (关键，否则后台无法保存配置)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# 5. 清理 apt 缓存减小镜像体积
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
