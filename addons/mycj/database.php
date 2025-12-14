<?php
//v10.7.4 新增播放器弹幕数据表，记录弹幕数据
if(empty($col_list[$pre.'danmuku_list'])){
	//新增字段
	$sql .= "DROP TABLE IF EXISTS `".$pre."danmuku_list`;CREATE TABLE `".$pre."danmuku_list` ( `cid` int(10) NOT NULL AUTO_INCREMENT COMMENT '弹幕id', `id` varchar(32) NOT NULL COMMENT '弹幕池id', `text` varchar(200) NOT NULL COMMENT '弹幕内容', `color` varchar(20) NOT NULL COMMENT '弹幕颜色', `videotime` float(24,3) NOT NULL COMMENT '时间点', `time` datetime DEFAULT NULL COMMENT '发送时间', `referer` text COMMENT '来源网址', `user_id` int(10) DEFAULT '0' COMMENT '用户ID', `user_ip` varchar(150) DEFAULT NULL COMMENT '用户IP', `vod_name` varchar(255) DEFAULT NULL COMMENT '视频名称', PRIMARY KEY (`cid`), KEY `id` (`id`), KEY `videotime` (`id`,`videotime`) ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COMMENT='弹幕数据表';";
	$sql .="\r";
}
//v10.7.4 新增数据替换日志表，记录替换日志
if(empty($col_list[$pre.'replace_log'])){
	$sql .= "DROP TABLE IF EXISTS `".$pre."replace_log`;CREATE TABLE `".$pre."replace_log` ( `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id', `time` datetime DEFAULT NULL COMMENT '执行时间', `name` varchar(20) DEFAULT NULL COMMENT '资源站名称', `type` varchar(20) DEFAULT NULL COMMENT '类型', `old` varchar(200) DEFAULT NULL COMMENT '旧内容', `new` varchar(200) DEFAULT NULL COMMENT '新内容', `sql` varchar(200) DEFAULT NULL COMMENT '替换SQL语句', `beizhu` varchar(200) DEFAULT NULL COMMENT '备注', PRIMARY KEY (`id`), KEY `id` (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COMMENT='替换日志表';";
	$sql .="\r";
}