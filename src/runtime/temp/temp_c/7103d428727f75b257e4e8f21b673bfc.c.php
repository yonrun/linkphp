<?php if (!defined('LINKPHP_VERSION')) exit(); /*O:26:"linkphp\template\view\Link":7:{s:34:" linkphp\template\view\Link temp_c";N;s:40:" linkphp\template\view\Link temp_content";N;s:32:" linkphp\template\view\Link tVar";a:1:{s:7:"linkphp";s:7:"linkphp";}s:13:"compiler_file";s:477:"<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8" />
	<meta name="LinkPHP" content="LiuJun" />
    <link href="Public/Default/css/index.css" type="text/css" rel="stylesheet" />
    <link href="Public/Default/css/common.css" type="text/css" rel="stylesheet" />

	<title>{$linkphp}</title>
</head>

<body>
{$linkphp}
    <form>
	<input type="hidden" name="md5" value="md5365a7a18bb61ced7cc38e422ae157ea0" /></form>
</body>
</html>";s:12:" * _compiler";O:25:"linkphp\template\Compiler":1:{s:31:" linkphp\template\Compiler _tag";O:20:"linkphp\template\Tag":1:{s:25:" linkphp\template\Tag tag";a:6:{s:2:"if";a:1:{i:0;s:5:"tagIf";}s:6:"elseif";a:1:{i:0;s:9:"tagElseif";}s:4:"else";a:1:{i:0;s:7:"tagElse";}s:6:"switch";a:1:{i:0;s:9:"tagSwitch";}s:4:"case";a:1:{i:0;s:7:"tagCase";}s:7:"default";a:1:{i:0;s:10:"tagDefault";}}}}s:9:" * config";a:9:{s:18:"default_temp_theme";s:7:"default";s:20:"default_theme_suffix";s:5:".html";s:10:"temp_cache";b:0;s:16:"set_left_limiter";s:1:"{";s:17:"set_right_limiter";s:1:"}";s:16:"view_replace_str";a:0:{}s:13:"storage_drive";s:4:"File";s:10:"cache_time";s:4:"1800";s:18:"tpl_replace_string";a:0:{}}s:32:" linkphp\template\Engine storage";O:29:"linkphp\template\storage\File":0:{}}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8" />
	<meta name="LinkPHP" content="LiuJun" />
    <link href="Public/Default/css/index.css" type="text/css" rel="stylesheet" />
    <link href="Public/Default/css/common.css" type="text/css" rel="stylesheet" />

	<title><?php echo $linkphp; ?></title>
</head>

<body>
<?php echo $linkphp; ?>
    <form>
	<input type="hidden" name="md5" value="md5365a7a18bb61ced7cc38e422ae157ea0" /></form>
</body>
</html>