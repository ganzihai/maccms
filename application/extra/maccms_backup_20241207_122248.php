<?php
return array (
  'db' => 
  array (
    'type' => 'mysql',
    'path' => '',
    'server' => '127.0.0.1',
    'port' => '3306',
    'name' => 'maccms10',
    'user' => 'root',
    'pass' => 'root',
    'tablepre' => 'mac_',
    'backup_path' => './application/data/backup/database/',
    'part_size' => 20971520,
    'compress' => 1,
    'compress_level' => 4,
  ),
  'site' => 
  array (
    'site_name' => '视频大全 - 杆子影视！',
    'site_url' => 'v.zznuo.com',
    'site_wapurl' => 'v.zznuo.com',
    'site_keywords' => '短视频,搞笑视频,视频分享,免费视频,在线视频,预告片',
    'site_description' => '提供最新最快的视频分享数据',
    'site_icp' => 'icp123',
    'site_qq' => '123456',
    'site_email' => '123456@test.cn',
    'install_dir' => '/',
    'site_logo' => 'static/images/logo.jpg',
    'site_waplogo' => 'static/images/logo.jpg',
    'template_dir' => 'mxone',
    'html_dir' => 'html',
    'site_polyfill' => '1',
    'mob_status' => '2',
    'mob_template_dir' => 'mxone',
    'mob_html_dir' => 'html',
    'site_tj' => '统计代码',
    'site_status' => '1',
    'site_close_tip' => '站点暂时关闭，请稍后访问',
    'ads_dir' => 'ads',
    'mob_ads_dir' => 'ads',
  ),
  'app' => 
  array (
    'pathinfo_depr' => '/',
    'suffix' => 'html',
    'popedom_filter' => '1',
    'cache_host' => '',
    'cache_port' => '',
    'cache_username' => 'ganzihai',
    'cache_password' => '54gerenwu',
    'cache_flag' => '342669e229',
    'cache_core' => '0',
    'cache_time' => '',
    'cache_page' => '0',
    'cache_time_page' => '',
    'compress' => '0',
    'input_type' => '1',
    'ajax_page' => '0',
    'wall_filter' => '0',
    'show' => '1',
    'show_verify' => '0',
    'search' => '1',
    'search_verify' => '0',
    'search_len' => '',
    'search_timespan' => '',
    'vod_search_optimise_cache_minutes' => 20160,
    'copyright_status' => '0',
    'copyright_notice' => '',
    'browser_junmp' => '0',
    'page_404' => '',
    'player_sort' => '0',
    'encrypt' => '0',
    'search_hot' => '',
    'art_extend_class' => '',
    'vod_extend_class' => '',
    'vod_extend_state' => '',
    'vod_extend_version' => '',
    'vod_extend_area' => '',
    'vod_extend_lang' => '',
    'vod_extend_year' => '',
    'vod_extend_weekday' => '',
    'actor_extend_area' => '',
    'filter_words' => '',
    'extra_var' => '',
    'collect_timespan' => '',
    'pagesize' => '',
    'makesize' => '',
    'admin_login_verify' => '1',
    'editor' => 'Umeditor',
    'lang' => 'zh-cn',
    'search_vod_rule' => '',
    'search_art_rule' => '',
    'vod_search_optimise' => '',
  ),
  'user' => 
  array (
    'status' => '1',
    'reg_open' => '1',
    'reg_status' => '1',
    'reg_phone_sms' => '0',
    'reg_email_sms' => '1',
    'email_white_hosts' => '',
    'email_black_hosts' => '',
    'reg_verify' => '1',
    'login_verify' => '0',
    'reg_points' => '10',
    'reg_num' => '1',
    'invite_reg_points' => '10',
    'invite_visit_points' => '1',
    'invite_visit_num' => '1',
    'reward_status' => '1',
    'reward_ratio' => '10',
    'reward_ratio_2' => '30',
    'reward_ratio_3' => '50',
    'cash_status' => '0',
    'cash_ratio' => '100',
    'cash_min' => '1',
    'trysee' => '0',
    'vod_points_type' => '1',
    'art_points_type' => '1',
    'portrait_status' => '1',
    'portrait_size' => '100x100',
    'filter_words' => 'admin,cao,sex,xxx',
  ),
  'gbook' => 
  array (
    'status' => '1',
    'audit' => '1',
    'login' => '1',
    'verify' => '1',
    'pagesize' => '20',
    'timespan' => '3',
  ),
  'comment' => 
  array (
    'status' => '1',
    'audit' => '0',
    'login' => '0',
    'verify' => '1',
    'pagesize' => '20',
    'timespan' => '3',
  ),
  'upload' => 
  array (
    'img_key' => 'baidu|douban|tvmao',
    'img_api' => '/img.php?url=',
    'thumb' => '1',
    'thumb_size' => '300x300',
    'thumb_type' => '2',
    'watermark' => '0',
    'watermark_location' => '7',
    'watermark_content' => 'test',
    'watermark_size' => '40',
    'watermark_color' => '#FF0000',
    'protocol' => 'https',
    'mode' => 'local',
    'keep_local' => '0',
    'remoteurl' => 'http://img.test.com/',
    'api' => 
    array (
      'ftp' => 
      array (
        'host' => '185.27.134.11',
        'port' => '21',
        'user' => 'if0_36759395',
        'pwd' => '774GErenwu',
        'path' => '/htdocs/img',
        'url' => 'https://ganzi.000.pe/img',
      ),
      'qiniu' => 
      array (
        'bucket' => 'zznuo',
        'accesskey' => 'cLkRr3p8geHYE2Va0Xye5OtpoNk97T4kn--vEYra',
        'secretkey' => 'Lwi_hCyBPVMQkmvynQmTS_BDQD9WYHnMLz-gOSG9',
        'url' => 'http://www.zznuo.com/img/',
      ),
      'weibo' => 
      array (
        'user' => '',
        'pwd' => '',
        'size' => 'large',
        'cookie' => '',
        'time' => '1546239694',
      ),
      'uomg' => 
      array (
        'openid' => '',
        'key' => '',
        'type' => 'sogou',
      ),
      'upyun' => 
      array (
        'bucket' => '',
        'username' => '',
        'pwd' => '',
        'url' => '',
      ),
      'rruu' => 
      array (
        'api' => 'https://sm.ms/api/v2/upload',
        'apiType' => '',
        'token' => 'VksUeVuE0V1YeN4qfKQKJkNzq3jdmSM0',
      ),
    ),
  ),
  'interface' => 
  array (
    'status' => 0,
    'pass' => 'P9NTKU3K2XFDY5DZ',
    'vodtype' => '动作片=动作',
    'arttype' => '头条=头条',
    'actortype' => '',
    'websitetype' => '',
  ),
  'pay' => 
  array (
    'min' => '10',
    'scale' => '1',
    'card' => 
    array (
      'url' => '',
    ),
    'alipay' => 
    array (
      'account' => '111',
      'appid' => '',
      'appkey' => '',
    ),
    'codepay' => 
    array (
      'appid' => '40625',
      'appkey' => '',
      'type' => '1,2',
      'act' => '0',
    ),
    'weixin' => 
    array (
      'appid' => '222',
      'mchid' => '',
      'appkey' => '',
    ),
    'zhapay' => 
    array (
      'appid' => '18039',
      'appkey' => '',
      'type' => '1,2',
      'act' => '2',
    ),
  ),
  'collect' => 
  array (
    'vod' => 
    array (
      'status' => '1',
      'hits_start' => '1',
      'hits_end' => '1000',
      'updown_start' => '1',
      'updown_end' => '1000',
      'score' => '1',
      'pic' => '0',
      'tag' => '0',
      'class_filter' => '1',
      'psename' => '1',
      'psernd' => '0',
      'psesyn' => '0',
      'pseplayer' => '0',
      'psearea' => '0',
      'pselang' => '0',
      'urlrole' => '0',
      'inrule' => ',f,g',
      'uprule' => ',a,b,c,d,j,n',
      'filter' => '色戒,色即是空',
      'namewords' => '第1季=第一季#第2季=第二季#第3季=第三季#第4季=第四季',
      'thesaurus' => ' =',
      'playerwords' => '',
      'areawords' => '',
      'langwords' => '',
      'words' => 'aaa#bbb#ccc#ddd#eee',
    ),
    'art' => 
    array (
      'status' => '1',
      'hits_start' => '1',
      'hits_end' => '1000',
      'updown_start' => '1',
      'updown_end' => '1000',
      'score' => '1',
      'pic' => '0',
      'tag' => '0',
      'psernd' => '0',
      'psesyn' => '0',
      'inrule' => ',b',
      'uprule' => ',a,d',
      'filter' => '无奈的人',
      'thesaurus' => '',
      'words' => '',
    ),
    'actor' => 
    array (
      'status' => '1',
      'hits_start' => '1',
      'hits_end' => '999',
      'updown_start' => '1',
      'updown_end' => '999',
      'score' => '0',
      'pic' => '0',
      'psernd' => '0',
      'psesyn' => '0',
      'uprule' => ',a,b,c',
      'filter' => '无奈的人',
      'thesaurus' => '',
      'words' => '',
      'inrule' => ',a',
    ),
    'role' => 
    array (
      'status' => '1',
      'hits_start' => '1',
      'hits_end' => '999',
      'updown_start' => '1',
      'updown_end' => '999',
      'score' => '0',
      'pic' => '0',
      'psernd' => '0',
      'psesyn' => '0',
      'uprule' => ',a,b,c',
      'filter' => '',
      'thesaurus' => '',
      'words' => '',
      'inrule' => ',a',
    ),
    'website' => 
    array (
      'status' => '1',
      'hits_start' => '',
      'hits_end' => '',
      'updown_start' => '',
      'updown_end' => '',
      'score' => '0',
      'pic' => '0',
      'psernd' => '0',
      'psesyn' => '0',
      'filter' => '',
      'thesaurus' => '',
      'words' => '',
      'inrule' => ',a',
      'uprule' => ',',
    ),
    'comment' => 
    array (
      'status' => '1',
      'updown_start' => '1',
      'updown_end' => '100',
      'psernd' => '0',
      'psesyn' => '0',
      'inrule' => ',b',
      'filter' => '',
      'thesaurus' => '',
      'words' => '',
      'uprule' => ',',
    ),
  ),
  'api' => 
  array (
    'vod' => 
    array (
      'status' => '1',
      'charge' => '0',
      'detail_inc_hits' => '0',
      'pagesize' => '20',
      'imgurl' => 'http://img.test.com/',
      'typefilter' => '',
      'datafilter' => ' vod_status=1',
      'cachetime' => '',
      'from' => '',
      'auth' => 'test.com#163.com',
    ),
    'art' => 
    array (
      'status' => '0',
      'charge' => '0',
      'pagesize' => '20',
      'imgurl' => '',
      'typefilter' => '',
      'datafilter' => 'art_status=1',
      'cachetime' => '',
      'auth' => '',
    ),
    'actor' => 
    array (
      'status' => '0',
      'charge' => '0',
      'pagesize' => '20',
      'imgurl' => '',
      'typefilter' => '',
      'datafilter' => 'actor_status=1',
      'cachetime' => '',
      'auth' => '',
    ),
    'role' => 
    array (
      'status' => '0',
      'charge' => '0',
      'pagesize' => '20',
      'imgurl' => '',
      'typefilter' => '',
      'datafilter' => 'role_status=1',
      'cachetime' => '',
      'auth' => '',
    ),
    'website' => 
    array (
      'status' => '0',
      'charge' => '0',
      'pagesize' => '20',
      'imgurl' => '',
      'typefilter' => '',
      'datafilter' => 'website_status=1',
      'cachetime' => '',
      'auth' => '',
    ),
  ),
  'connect' => 
  array (
    'qq' => 
    array (
      'status' => '0',
      'key' => 'aa',
      'secret' => 'bb',
    ),
    'weixin' => 
    array (
      'status' => '0',
      'key' => 'cc',
      'secret' => 'dd',
    ),
  ),
  'weixin' => 
  array (
    'status' => '0',
    'duijie' => 'wx.test.com',
    'sousuo' => 'wx.test.com',
    'token' => 'qweqwe',
    'guanzhu' => '欢迎关注',
    'wuziyuan' => '没找到资源，请更换关键词或等待更新',
    'wuziyuanlink' => 'demo.test.com',
    'bofang' => '0',
    'msgtype' => '0',
    'gjc1' => '关键词1',
    'gjcm1' => '长城',
    'gjci1' => 'http://img.aolusb.com/im/201610/2016101222371965996.jpg',
    'gjcl1' => 'http://www.loldytt.com/Dongzuodianying/CC/',
    'gjc2' => '关键词2',
    'gjcm2' => '生化危机6',
    'gjci2' => 'http://img.aolusb.com/im/201702/20172711214866248.jpg',
    'gjcl2' => 'http://www.loldytt.com/Kehuandianying/SHWJ6ZZ/',
    'gjc3' => '关键词3',
    'gjcm3' => '湄公河行动',
    'gjci3' => 'http://img.aolusb.com/im/201608/201681719561972362.jpg',
    'gjcl3' => 'http://www.loldytt.com/Dongzuodianying/GHXD/',
    'gjc4' => '关键词4',
    'gjcm4' => '王牌逗王牌',
    'gjci4' => 'http://img.aolusb.com/im/201601/201612723554344882.jpg',
    'gjcl4' => 'http://www.loldytt.com/Xijudianying/WPDWP/',
  ),
  'view' => 
  array (
    'index' => '0',
    'map' => '0',
    'search' => '0',
    'rss' => '0',
    'label' => '0',
    'vod_type' => '0',
    'vod_show' => '0',
    'art_type' => '0',
    'art_show' => '0',
    'topic_index' => '0',
    'topic_detail' => '0',
    'vod_detail' => '0',
    'vod_play' => '0',
    'vod_down' => '0',
    'art_detail' => '0',
  ),
  'path' => 
  array (
    'topic_index' => 'topic/index',
    'topic_detail' => 'topic/{id}/index',
    'vod_type' => 'vodtypehtml/{id}/index',
    'vod_detail' => 'vodhtml/{id}/index',
    'vod_play' => 'vodplayhtml/{id}/index',
    'vod_down' => 'voddownhtml/{id}/index',
    'art_type' => 'arttypehtml/{id}/index',
    'art_detail' => 'arthtml/{id}/index',
    'page_sp' => '_',
    'suffix' => 'html',
  ),
  'rewrite' => 
  array (
    'suffix_hide' => '0',
    'route_status' => '0',
    'status' => '0',
    'encode_key' => 'abcdefg',
    'encode_len' => '6',
    'vod_id' => '0',
    'art_id' => '0',
    'type_id' => '0',
    'topic_id' => '0',
    'actor_id' => '0',
    'role_id' => '0',
    'website_id' => '0',
    'route' => 'map   => map/index
rss/index   => rss/index
rss/baidu => rss/baidu
rss/google => rss/google
rss/sogou => rss/sogou
rss/so => rss/so
rss/bing => rss/bing
rss/sm => rss/sm

index-<page?>   => index/index

gbook-<page?>   => gbook/index
gbook$   => gbook/index

topic-<page?>   => topic/index
topic$  => topic/index
topicdetail-<id>   => topic/detail

actor-<page?>   => actor/index
actor$ => actor/index
actordetail-<id>   => actor/detail
actorshow/<area?>-<blood?>-<by?>-<letter?>-<level?>-<order?>-<page?>-<sex?>-<starsign?>   => actor/show

role-<page?>   => role/index
role$ => role/index
roledetail-<id>   => role/detail
roleshow/<by?>-<letter?>-<level?>-<order?>-<page?>-<rid?>   => role/show


vodtype/<id>-<page?>   => vod/type
vodtype/<id>   => vod/type
voddetail/<id>   => vod/detail
vodrss-<id>   => vod/rss
vodplay/<id>-<sid>-<nid>   => vod/play
voddown/<id>-<sid>-<nid>   => vod/down
vodshow/<id>-<area?>-<by?>-<class?>-<lang?>-<letter?>-<level?>-<order?>-<page?>-<state?>-<tag?>-<year?>   => vod/show
vodsearch/<wd?>-<actor?>-<area?>-<by?>-<class?>-<director?>-<lang?>-<letter?>-<level?>-<order?>-<page?>-<state?>-<tag?>-<year?>   => vod/search
vodplot/<id>-<page?>   => vod/plot
vodplot/<id>   => vod/plot


arttype/<id>-<page?>   => art/type
arttype/<id>   => art/type
artshow-<id>   => art/show
artdetail-<id>-<page?>   => art/detail
artdetail-<id>   => art/detail
artrss-<id>-<page>   => art/rss
artshow/<id>-<by?>-<class?>-<level?>-<letter?>-<order?>-<page?>-<tag?>   => art/show
artsearch/<wd?>-<by?>-<class?>-<level?>-<letter?>-<order?>-<page?>-<tag?>   => art/search

label-<file> => label/index

plotdetail/<id>-<page?>   => plot/plot
plotdetail/<id>   => plot/detail',
  ),
  'email' => 
  array (
    'type' => 'Phpmailer',
    'time' => '5',
    'nick' => 'test',
    'test' => '43099151@qq.com',
    'tpl' => 
    array (
      'test_title' => '【{$maccms.site_name}】测试邮件标题',
      'test_body' => '【{$maccms.site_name}】当您看到这封邮件说明邮件配置正确了！感谢支持开源程序！',
      'user_reg_title' => '【{$maccms.site_name}】的会员您好，请认真阅读邮件正文并按要求操作完成注册',
      'user_reg_body' => '【{$maccms.site_name}】的会员您好，注册验证码为：{$code}，请在{$time}分钟内完成验证。',
      'user_bind_title' => '【{$maccms.site_name}】的会员您好，请认真阅读邮件正文并按要求操作完成绑定',
      'user_bind_body' => '【{$maccms.site_name}】的会员您好，绑定验证码为：{$code}，请在{$time}分钟内完成验证。',
      'user_findpass_title' => '【{$maccms.site_name}】的会员您好，请认真阅读邮件正文并按要求操作完成找回',
      'user_findpass_body' => '【{$maccms.site_name}】的会员您好，找回验证码为：{$code}，请在{$time}分钟内完成验证。',
    ),
    'phpmailer' => 
    array (
      'host' => 'smtp.qq.com',
      'port' => '587',
      'secure' => 'tsl',
      'username' => 'ganzihai@qq.com',
      'password' => 'rjmofjlctybgbhhh',
    ),
  ),
  'play' => 
  array (
    'width' => '100%',
    'height' => '100%',
    'widthmob' => '100%',
    'heightmob' => '100%',
    'widthpop' => '0',
    'heightpop' => '600',
    'second' => '3',
    'prestrain' => '//union.maccms.site/html/prestrain.html',
    'buffer' => '//union.maccms.site/html/loading.html',
    'parse' => '',
    'autofull' => '1',
    'showtop' => '1',
    'showlist' => '1',
    'flag' => '0',
    'colors' => '000000,F6F6F6,F6F6F6,333333,666666,FFFFF,FF0000,2c2c2c,ffffff,a3a3a3,2c2c2c,adadad,adadad,48486c,fcfcfc',
  ),
  'sms' => 
  array (
    'type' => '',
    'sign' => '我的网站',
    'tpl_code_reg' => 'SMS_144850895',
    'tpl_code_bind' => 'SMS_144940283',
    'tpl_code_findpass' => 'SMS_144851023',
    'aliyun' => 
    array (
      'appid' => '',
      'appkey' => '',
    ),
    'qcloud' => 
    array (
      'appid' => '',
      'appkey' => '',
    ),
  ),
  'extra' => 
  array (
  ),
  'seo' => 
  array (
    'vod' => 
    array (
      'name' => '视频首页',
      'key' => '短视频,搞笑视频,视频分享,免费视频,在线视频,预告片',
      'des' => '提供最新最快的视频分享数据',
    ),
    'art' => 
    array (
      'name' => '文章首页',
      'key' => '新闻资讯,娱乐新闻,八卦娱乐,狗仔队,重大事件',
      'des' => '提供最新最快的新闻资讯',
    ),
    'actor' => 
    array (
      'name' => '演员首页',
      'key' => '大陆明星,港台明星,日韩明星,欧美明星,最火明星',
      'des' => '明星个人信息介绍',
    ),
    'role' => 
    array (
      'name' => '角色首页',
      'key' => '电影角色,电视剧角色,动漫角色,综艺角色',
      'des' => '角色人物介绍',
    ),
    'plot' => 
    array (
      'name' => '剧情首页',
      'key' => '剧情连载,剧情更新,剧情前瞻,剧情完结',
      'des' => '提供最新的剧情信息',
    ),
  ),
  'urlsend' => 
  array (
    'baidu' => 
    array (
      'token' => '111',
    ),
    'baidufast' => 
    array (
      'token' => '222',
    ),
  ),
);