FROM php:7.4-apache

# 1. 安装 Maccms 需要的 PHP 扩展和核心工具 (确保包含 chown)
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
RUN touch /usr/local/etc/php/conf.d/opcache-custom.ini \
    && echo "opcache.enable=1" >> /usr/local/etc/php/conf.d/opcache-custom.ini \
    && echo "opcache.memory_consumption=128" >> /usr/local/etc/php/conf.d/opcache-custom.ini \
    && echo "opcache.interned_strings_buffer=8" >> /usr/local/etc/php/conf.d/opcache-custom.ini \
    && echo "opcache.max_accelerated_files=10000" >> /usr/local/etc/php/conf.d/opcache-custom.ini \
    && echo "opcache.revalidate_freq=0" >> /usr/local/etc/php/conf.d/opcache-custom.ini \
    && echo "opcache.validate_timestamps=0" >> /usr/local/etc/php/conf.d/opcache-custom.ini 

# 3. 启用 Apache Rewrite 模块
RUN a2enmod rewrite

# 4. 复制启动脚本和代码
COPY start.sh /usr/local/bin/start.sh
COPY . /var/www/html/

# 5. 赋予启动脚本可执行权限
RUN chmod +x /usr/local/bin/start.sh

# 6. 设置权限 (构建时)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# 7. 清理 apt 缓存
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# 8. **【最关键的修复】** 使用自定义启动脚本作为容器入口
CMD ["/usr/local/bin/start.sh"]
