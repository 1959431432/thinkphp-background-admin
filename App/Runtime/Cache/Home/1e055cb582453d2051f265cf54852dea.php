<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<title>注册新会员</title>
<link href="/Public/css//main.css" rel="stylesheet" type="text/css" />
<link href="/Public/css//style.css" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="/Public/js//jquery.min.js"></script>

<script type="text/javascript" src="/Public/js//plugins/spinner/ui.spinner.js"></script>
<script type="text/javascript" src="/Public/js//plugins/spinner/jquery.mousewheel.js"></script>


<script type="text/javascript" src="/Public/js//jquery-ui.min.js"></script>
<!-- 
<script type="text/javascript" src="/Public/js//plugins/charts/excanvas.min.js"></script>
<script type="text/javascript" src="/Public/js//plugins/charts/jquery.flot.js"></script>
<script type="text/javascript" src="/Public/js//plugins/charts/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="/Public/js//plugins/charts/jquery.flot.pie.js"></script>
<script type="text/javascript" src="/Public/js//plugins/charts/jquery.flot.resize.js"></script>
 -->
<script type="text/javascript" src="/Public/js//plugins/charts/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="/Public/js//plugins/forms/uniform.js"></script>
<script type="text/javascript" src="/Public/js//plugins/forms/jquery.validationEngine-zh-CN.js"></script>
<script type="text/javascript" src="/Public/js//plugins/forms/jquery.validationEngine.js"></script>
<script type="text/javascript" src="/Public/js//plugins/forms/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="/Public/js//plugins/forms/autogrowtextarea.js"></script>
<script type="text/javascript" src="/Public/js//plugins/forms/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="/Public/js//plugins/forms/jquery.dualListBox.js"></script>
<script type="text/javascript" src="/Public/js//plugins/forms/jquery.inputlimiter.min.js"></script>
<script type="text/javascript" src="/Public/js//plugins/forms/chosen.jquery.min.js"></script>

<script type="text/javascript" src="/Public/js//plugins/wizard/jquery.form.js"></script>
<script type="text/javascript" src="/Public/js//plugins/wizard/jquery.validate.min.js"></script>
<script type="text/javascript" src="/Public/js//plugins/wizard/jquery.form.wizard.js"></script>




<script type="text/javascript" charset="utf-8" src="/Public/js//plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/js//plugins/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/Public/js//plugins/ueditor/lang/zh-cn/zh-cn.js"></script>



<!-- <script type="text/javascript" src="/Public/js//plugins/uploader/plupload.js"></script>
<script type="text/javascript" src="/Public/js//plugins/uploader/plupload.html5.js"></script>
<script type="text/javascript" src="/Public/js//plugins/uploader/plupload.html4.js"></script>
<script type="text/javascript" src="/Public/js//plugins/uploader/jquery.plupload.queue.js"></script>
 -->

<script type="text/javascript" src="/Public/js//plugins/uploader/jquery.upload.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/js//plugins/uploader/html5uploader.css">


<script type="text/javascript" src="/Public/js//plugins/tables/jquery.datatable.min.js"></script>
<!-- 
<script type="text/javascript" src="/Public/js//plugins/tables/tablesort.min.js"></script>
<script type="text/javascript" src="/Public/js//plugins/tables/resizable.min.js"></script>
 -->
<script type="text/javascript" src="/Public/js//plugins/calendar.min.js"></script>

<script type="text/javascript" src="/Public/js//plugins/ui/jquery.tipsy.js"></script>
<script type="text/javascript" src="/Public/js//plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="/Public/js//plugins/ui/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="/Public/js//plugins/ui/jquery.progress.js"></script>
<script type="text/javascript" src="/Public/js//plugins/ui/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="/Public/js//plugins/ui/jquery.colorpicker.js"></script>
<script type="text/javascript" src="/Public/js//plugins/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="/Public/js//plugins/ui/jquery.breadcrumbs.js"></script>
<script type="text/javascript" src="/Public/js//plugins/ui/jquery.sourcerer.js"></script>

<script type="text/javascript" src="/Public/js//plugins/layer/layer.js"></script>

<script type="text/javascript" src="/Public/js//custom.js"></script>

</head>


<body style="background: none;">
<!-- Main content wrapper -->
<div class="loginWrapper">
    <div class="loginLogo"><img src="/Public/images//loginLogo.png" alt="" /></div>
    <div class="widget">
        <div class="title"><img src="/Public/images//icons/dark/files.png" alt="" class="titleIcon" /><h6>注册新会员</h6></div>
        <form action="" class="form validate" method="post">
            <fieldset>
                <div class="formRow">
                    <label for="username">帐号:</label>
                    <div class="loginInput"><input type="text" name="username" class="validate[required]" id="username" /></div>
                    <div class="clear"></div>
                </div>
                
                <div class="formRow">
                    <label for="password">密码:</label>
                    <div class="loginInput"><input type="password" name="password" class="validate[required]" id="password" /></div>
                    <div class="clear"></div>
                </div>
                
                <div class="loginControl">
                    <div class="rememberMe"><a href="<?php echo U('Public/login');?>">已有帐号？立即登录</a></div>
                    <input type="submit" value="注册" class="dredB logMeIn" />
                    <div class="clear"></div>
                </div>
            </fieldset>
        </form>
    </div>
</div>    
<div class="clear"></div>
</body>
</html>