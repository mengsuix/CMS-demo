<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/secms/Public/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/secms/Public/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/secms/Public/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/secms/Public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/secms/Public/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>资讯列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 客服中心  <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="<?php echo U('Kfzx/see');?>" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
    <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a class="btn btn-primary radius"   href="<?php echo U('Html/html?name=kfzxAdd');?>"><i class="Hui-iconfont">&#xe600;</i> 添加问题</a></div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
			<thead>
				<tr class="text-c">
					<th >ID</th>
					<th >字段值</th>
					<th >操作</th>
				</tr>
			</thead>
			<tbody>
			  <?php if(is_array($field)): foreach($field as $key=>$value): ?><tr class="text-c">
					<td><?php echo ($id++); ?></td>
					<td><?php echo ($value); ?></td>
					<td class="f-14 td-manage"><a style="text-decoration:none" class="ml-5"  href="<?php echo U('Html/html',array('name' => 'kfzxModify','id' => $vo['id']) );?>" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="drop()" href="#" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr><?php endforeach; endif; ?>
			</tbody>
		</table>
	</div>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/secms/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/secms/Public/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/secms/Public/admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/secms/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/secms/Public/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/secms/Public/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/secms/Public/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
function drop()
{
   if(confirm('确定删除?'))
   {       
	   location.href = "<?php echo U('Kfzx/drop',array('id' => $vo['id']) );?>";
   }
   return false;
}
</script> 
</body>
</html>