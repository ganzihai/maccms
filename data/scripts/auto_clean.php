<?php
// 加载CMS核心文件
define('ROOT_PATH', '/www/wwwroot/dy.zznuo.com/');
require ROOT_PATH . 'ganzi.php';

// 启动会话（如果尚未启动）
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 模拟管理员登录状态
$_SESSION['admin_id'] = 1;       // 管理员ID
$_SESSION['admin_name'] = 'ganzihai'; // 管理员账号
$_SESSION['role_id'] = 1;        // 超级管理员权限

// 直接调用控制器方法（需确认系统架构）
$result = \app\admin\controller\Vod::delRepeat([
    'repeat' => 1,
    'retain' => 'max'
]);

// 结果处理
if ($result['code'] == 1) {
    file_put_contents(ROOT_PATH.'data/logs/clean.log', 
        date('Y-m-d H:i:s')." 删重成功\n", FILE_APPEND);
    exit(json_encode(['status'=>1, 'msg'=>'操作成功']));
} else {
    file_put_contents(ROOT_PATH.'data/logs/clean_error.log', 
        date('Y-m-d H:i:s')." 失败：{$result['msg']}\n", FILE_APPEND);
    exit(json_encode(['status'=>0, 'msg'=>$result['msg']]));
}
