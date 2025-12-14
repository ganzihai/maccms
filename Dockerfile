# 使用官方轻量级 PHP 7.4 Apache 镜像 (Maccms v10 对 7.4 兼容性最好)
FROM php:7.4-apache

# 1. 安装 Maccms 需要的 PHP 扩展和核心工具 (gd, pdo_mysql, zip, opcache, coreutils)
# 更新源并安装依赖库
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    unzip \
    coreutils \
    \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo_mysql zip opcache

# 2. 【核心优化】配置 Opcache
# ... (其余配置保持不变)
RUN touch /usr/local/etc/php/conf.d/opcache-custom.ini \
    && echo "opcache.enable=1" >> /usr/local/etc/php/conf.d/opcache-custom.ini \
    && echo "opcache.memory_consumption=128" >> /usr/local/etc/php/conf.d/opcache-custom.ini \
    && echo "opcache.interned_strings_buffer=8" >> /usr/local/etc/php/conf.d/opcache-custom.ini \
    && echo "opcache.max_accelerated_files=10000" >> /usr/local/etc/php/conf.d/opcache-custom.ini \
    && echo "opcache.revalidate_freq=0" >> /usr/local/etc/php/conf.d/opcache-custom.ini \
    && echo "opcache.validate_timestamps=0" >> /usr/local/etc/php/conf.d/opcache-custom.ini 

# 3. 启用 Apache Rewrite 模块 (用于 Maccms 伪静态)
RUN a2enmod rewrite

# 4. 复制当前目录所有文件到容器的 Web 根目录
COPY . /var/www/html/

# 5. 设置权限，确保 www-data 用户可以写入 (关键，否则后台无法保存配置)
# 这一步使用 chown 是在 Dockerfile 编译阶段，此时 chown 通常可用，但我们添加 coreutils 确保其健壮性。
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# 6. 清理 apt 缓存减小镜像体积
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
