# 仿bilibili视频弹幕播放器

在线演示：[http://code.qkongtao.cn/video/player/?url=http://upyun.qkongtao.cn/AList/%E8%8D%89%E5%B8%BD%E4%B8%80%E4%BC%99%E6%82%AC%E8%B5%8F%E4%BB%A4%E4%BC%A0%E9%81%8D%E5%85%A8%E4%B8%96%E7%95%8C.mp4](http://code.qkongtao.cn/video/player/?url=http://upyun.qkongtao.cn/AList/%E8%8D%89%E5%B8%BD%E4%B8%80%E4%BC%99%E6%82%AC%E8%B5%8F%E4%BB%A4%E4%BC%A0%E9%81%8D%E5%85%A8%E4%B8%96%E7%95%8C.mp4)

## 播放器简介
一款防bilibili的播放器，支持弹幕和后台管理，主要是这个播放器是仿B站的，很简洁，特别合适用来web开发。

## 功能特色
插件功能：弹幕后台、前置广告、暂停广告、会员去广告，记忆回放，自动下一集

插件支持：.m3u8、.mp4、.flv 等常见视频格式，注意：不支持 （MP4） H265 格式的视频

插件兼容：电脑、手机端

**可以用来作为一款友好的视频播放器，用于web视频播放**

## 运行环境
nginx或apache

PHP7.X

Mysql ≥ 5.5

## 播放器界面展示
1. 后台登录
![在这里插入图片描述](https://img-blog.csdnimg.cn/93ef33bd67234153965a40c4e680e208.png#pic_center)


2. 后台相关设置管理
![在这里插入图片描述](https://img-blog.csdnimg.cn/4e4c0ed1bed04e04ba7ddc646ed7cb28.png#pic_center)
![在这里插入图片描述](https://img-blog.csdnimg.cn/2aa38abe3cbd4830884bf287c8aa540d.png#pic_center)


3. 播放器界面
![在这里插入图片描述](https://img-blog.csdnimg.cn/62fc91aa23a846e8becef14c435c11b8.png#pic_center)


4. web页面中使用效果
![在这里插入图片描述](https://img-blog.csdnimg.cn/8ebdbbeb0c4048aeb571e3016620167b.png#pic_center)


## 安装步骤
1. 解压到网站根目录

2. 登录 你的域名/dmku 进行配置数据库

3. 修改播放器后台账号密码 dmku/config.inc.php

4. 登录后台 你的域名/admin 账号和密码为第3步修改的账号密码（默认账号：admin；默认密码：123456）

5. 播放器功能可后台设置

## 使用方法
参数说明（player/index.php）
```php
"av":'<?php echo($_GET['av']);?>',//B站av号，用于调用弹幕
"url":"<?php echo($_GET['url']);?>",//视频链接
"id":"<?php echo($_GET['url']);?>",//视频id
"sid":"<?php echo($_GET['sid']);?>",//集数id
"pic":"<?php echo($_GET['pic']);?>",//视频封面
"title":"<?php echo($_GET['name']);?>",//视频标题
"next":"<?php echo($_GET['next']);?>",//下一集链接
"user": '<?php echo($_GET['user']);?>',//用户名
"group": "<?php echo($_GET['group']);?>",//用户组
```

1. 基础请求
```
https://域名/player/?url=视频链接
如：
http://code.qkongtao.cn/video/player/?url=http://upyun.qkongtao.cn/AList/%E8%8D%89%E5%B8%BD%E4%B8%80%E4%BC%99%E6%82%AC%E8%B5%8F%E4%BB%A4%E4%BC%A0%E9%81%8D%E5%85%A8%E4%B8%96%E7%95%8C.mp4
```

2. 高级带参请求
除了 url 参数，其他都可以省略
`http://域名/player/?url=视频链接&next=下个视频链接&sid=1&pic=视频封面图片链接&user=游客&group=1&name=测试`
3. 在web页面中使用
```html
<iframe
        src="http://code.qkongtao.cn/video/player/?url=http://upyun.qkongtao.cn/AList/%E8%8D%89%E5%B8%BD%E4%B8%80%E4%BC%99%E6%82%AC%E8%B5%8F%E4%BB%A4%E4%BC%A0%E9%81%8D%E5%85%A8%E4%B8%96%E7%95%8C.mp4"
        allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen"
        oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen" width="750px" height="550px"
        frameborder="0">
</iframe>
```

示例如下：
```html
<!DOCTYPE html>
<html lang="en">
<style>
    iframe {
        display: block;
        margin: 50px auto;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>测试哔哩播放器</title>
</head>

<body>
    <h2 style="text-align: center;">iframe测试哔哩播放器</h2>
    <iframe
        src="http://code.qkongtao.cn/video/player/?url=http://upyun.qkongtao.cn/AList/%E8%8D%89%E5%B8%BD%E4%B8%80%E4%BC%99%E6%82%AC%E8%B5%8F%E4%BB%A4%E4%BC%A0%E9%81%8D%E5%85%A8%E4%B8%96%E7%95%8C.mp4"
        allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen"
        oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen" width="750px" height="550px"
        frameborder="0">
    </iframe>
</body>
</html>
```
![在这里插入图片描述](https://img-blog.csdnimg.cn/afb184dc2f774c31b6d52de4c38f4668.png#pic_center)



