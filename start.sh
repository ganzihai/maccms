#!/bin/bash

# 尝试修复 Volume 权限。优先使用 /usr/bin/chown，如果找不到则尝试 /bin/chown。
# 目标：/var/www/html/upload, /var/www/html/runtime, /var/www/html/addons

CHOWN_CMD="/usr/bin/chown"

# 检查 /usr/bin/chown 是否存在，如果不存在则尝试 /bin/chown
if [ ! -f $CHOWN_CMD ]; then
    CHOWN_CMD="/bin/chown"
    if [ ! -f $CHOWN_CMD ]; then
        echo "Error: chown command not found at /usr/bin/chown or /bin/chown. Skipping permission fix."
    fi
fi

if [ -f $CHOWN_CMD ]; then
    echo "Fixing permissions using: $CHOWN_CMD"
    $CHOWN_CMD -R www-data:www-data /var/www/html/upload
    $CHOWN_CMD -R www-data:www-data /var/www/html/addons
fi

# 启动 Apache Web 服务
exec apache2-foreground
