<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />

<link rel="stylesheet" type="text/css" href="/secms/Public/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/secms/Public/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/secms/Public/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/secms/Public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/secms/Public/admin/static/h-ui.admin/css/style.css" />

    <script type="text/javascript" charset="utf-8" src="/secms/Public/admin/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/secms/Public/admin/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/secms/Public/admin/ueditor/lang/zh-cn/zh-cn.js"></script>
	<script type="text/javascript" src="/secms/Public/admin/ueditor/ud_M.js"></script>


<title>新增文章 - 资讯管理 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-article-add" method="post" action="<?php echo ($add["url"]); ?>">		
    <?php if(is_array($table)): foreach($table as $k=>$modify): switch($modify['type']): case "title": ?><div class="row cl">
			          <label class="form-label col-xs-4 col-sm-2"><?php echo ($modify["field"]); ?>：</label>
			             <div class="formControls col-xs-8 col-sm-9">
				            <input type="text" class="input-text" value="<?php echo ($content["$k"]); ?>" placeholder="" id="articletitle" name="<?php echo ($modify["name"]); ?>">
			             </div>
		           </div><?php break;?>
			   <?php case "file": ?><div class="row cl">
			          <label class="form-label col-xs-4 col-sm-2"><?php echo ($modify["field"]); ?>：</label>
			             <div class="formControls col-xs-8 col-sm-9">
				            <input type="file" class="input-text" value="{<?php echo ($content["$k"]); ?>}" placeholder="" id="articletitle" name="<?php echo ($modify["name"]); ?>">
			             </div>
		           </div><?php break;?>
			   <?php case "select": ?><div class="row cl">
			          <label class="form-label col-xs-4 col-sm-2"><?php echo ($modify["field"]); ?>：</label>
			             <div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				               <select name="<?php echo ($modify["title"]); ?>" class="select">
							       <?php if(is_array($options)): foreach($options as $key=>$value): ?><option value=""><?php echo ($value); ?></option><?php endforeach; endif; ?>
				               </select>
				         </span> </div>
		           </div><?php break;?>
			   <?php case "text": ?><div class="row cl">
			           <label class="form-label col-xs-4 col-sm-2"><?php echo ($modify["field"]); ?>：</label>
			              <div class="formControls col-xs-8 col-sm-9">
				              <textarea name="<?php echo ($modify["name"]); ?>" id="editor"  type="text/plain" style="width:800px;height:300px;"><?php echo ($content["$k"]); ?></textarea>				
			              </div>
		            </div><?php break; endswitch; endforeach; endif; ?>	
	</form>
</article>

<!--_footer ��Ϊ����ģ������ȥ-->
<script type="text/javascript" src="/secms/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/secms/Public/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/secms/Public/admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/secms/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer ��Ϊ����ģ������ȥ-->

<!--�����·�д��ҳ��ҵ����صĽű�-->
<script type="text/javascript" src="/secms/Public/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/secms/Public/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/secms/Public/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">

</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>