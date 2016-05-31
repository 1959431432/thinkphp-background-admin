<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<title>admin for backend systems</title>
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


<body>

<!-- Left side content -->
<div id="leftSide">

    <div class="logo"><a href="index.html"><img src="/Public/images//logo.png" alt="" /></a></div>
    
    <div class="sidebarSep"></div>

    <!-- General balance widget -->
    <div class="genBalance">
        <a href="#" title="" class="amount">
            <span> 当前积分:</span>
            <span class="balanceAmount">
                <?php echo session('user.rank');?>
            </span>
        </a>
    </div>
    <!-- Next update progress widget -->
    <div class="nextUpdate">
        <ul>
            <li><img src="/Public/images//<?php echo ($_userGroup["img"]); ?>" title='<?php echo ($_userGroup["title"]); ?>' title='<?php echo ($_userGroup["title"]); ?>'> &nbsp; 下一等级:</li>
            <li>
                <?php  $progressWidth = $_user['level'] / $_nextGroup['integral'] * 100; $diffIntegral = $_nextGroup['integral'] - $_user['level']; if( $diffIntegral > 0 ){ echo '还需' . $diffIntegral; } else { echo '已是最高等级'; $progressWidth = 100; } ?></li>
        </ul>
        <div class="pWrapper"><div class="progressG" title="<?php echo ($progressWidth); ?>%"></div></div>
    </div>
    
    <div class="sidebarSep"></div>
    
    <!-- Left navigation -->
    <ul id="menu" class="nav">
        <?php if(is_array($_menu)): $i = 0; $__LIST__ = $_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menus): $mod = ($i % 2 );++$i; if($menus['children'] != false): ?><li class="<?php echo ($menus["class"]); ?>"><a class='exp inactive' href="#" title=""><span><?php echo ($menus["title"]); ?></span></a>
                    <ul class="sub">
                        <?php if(is_array($menus['children'])): $i = 0; $__LIST__ = $menus['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U($menu['url']);?>" title=""><?php echo ($menu["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </li>
            <?php else: ?>
                <li class="<?php echo ($menus["class"]); ?>"><a href="<?php echo U($menus['url']);?>" title=""><span><?php echo ($menus["title"]); ?></span></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>


<!-- Right side -->
<div id="rightSide">
    <!-- Top fixed navigation -->
    <div class="topNav">
        <div class="wrapper">
            <div class="welcome"><a href="#" title=""><img src="/Public/images//userPic.png" alt="" /></a><span>您好，<?php echo ($_user['username']); ?></span></div>
            <div class="userNav">
                <ul>
                    <li><a href="<?php echo U('setting/index');?>" title=""><img src="/Public/images//icons/topnav/profile.png" alt="" /><span>个人资料</span></a></li>
                    <li><a href="<?php echo U('order/index');?>" title=""><img src="/Public/images//icons/dark/cart.png" alt="" /><span>我的订单</span></a></li>
                    <li><a href="<?php echo U('Message/index');?>"><img src="/Public/images//icons/topnav/messages.png" alt=""><span>消息中心</span><span class="numberTop"><?php echo ($_msgNumber); ?></span></a>
                    </li>
                    <li><a href="<?php echo U('Public/logout');?>" title="退出客户端"><img src="/Public/images//icons/topnav/logout.png" alt="" /><span>退出</span></a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <!-- Responsive header -->
    <div class="resp">
        <div class="respHead">
            <a href="index.html" title=""><img src="/Public/images//loginLogo.png" alt="" /></a>
        </div>
        
        <div class="cLine"></div>
        <div class="smalldd">
            <span class="goTo"><img src="/Public/images//icons/light/home.png" alt="" />导航菜单</span>
            <ul class="smallDropdown">
                <?php if(is_array($_menu)): $i = 0; $__LIST__ = $_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menus): $mod = ($i % 2 );++$i; if($menus['children'] != false): ?><li class="<?php echo ($menus["class"]); ?>"><a class='exp' href="#" title=""><span><?php echo ($menus["title"]); ?></span></a>
                            <ul class="sub">
                                <?php if(is_array($menus['children'])): $i = 0; $__LIST__ = $menus['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U($menu['url']);?>" title=""><?php echo ($menu["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="<?php echo ($menus["class"]); ?>"><a href="<?php echo U($menus['url']);?>" title=""><span><?php echo ($menus["title"]); ?></span></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="cLine"></div>
    </div>


    <div class="line"></div>


    
	<div class="wrapper">
      <div class="bc">
          <ul id="breadcrumbs" class="breadcrumbs">
               <li class=""> <a href="<?php echo U('Index/index');?>">个人中心</a> </li>
               <li class="current"><a href="#">消息中心</a></li>
          </ul>
          <div class="clear"></div>
      </div>
      <div class="widget">
			<ul class="tabs">
				<li class="activeTab"><a href="#tab1">网站消息</a></li>
				<li><a href="#tab2">意见反馈</a></li>
			</ul>
			<div class="tab_container">
                <div id="tab1" class="tab_content">
                	<table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck display myTable">
		              <thead>
		                  <tr>
		                    <th>消息标题</th>
		                    <th>发送时间</th>
		                    <th>消息类型</th>
		                    <th>操作</th>
		                  </tr>
		              </thead>
		              <tbody>
		                <?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="gradeA">
		                        <td class="center searchContent"><?php echo ($vo["title"]); ?></td>
		                        <td class="center"><?php echo (date('Y-m-d',$vo["addtime"])); ?></td>
		                        <td class="center">
		                            <?php if(($vo["type"]) == "1"): ?>提醒
		                            <?php else: ?>
		                              紧急<?php endif; ?>
		                        </td>
		                        <td class="center">
		                            <a class='layer_iframe' href="<?php echo U('add',array('id'=>$vo['id']));?>">查看</a> &nbsp;&nbsp;
		                        </td>
		                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
		              </tbody>
		              <tfoot>
		                <tr>
		                    <td colspan="10" class='pagination'>
		                        <?php echo ($showPage); ?>
		                    </td>
		                </tr>
		              </tfoot>
		          </table>
                </div>
                <div id="tab2" class="tab_content" style="padding: 20px;">
                	<form class="form validate" method="post" action="<?php echo U('save');?>">
			        	<fieldset>
			                <div class="widget">
			                    <div class="title"><img src="/Public/images//icons/dark/alert.png" alt="" class="titleIcon" /><h6>意见反馈</h6></div>

			                    <div class="formRow">
			                        <label>反馈标题:<span class='req'>*</span></label>
			                        <div class="formRight">
			                            <input type="text" class="validate[required]" value="" name='title' id="title" />
			                            <!-- <span class="formNote">用户会员等级根据此项排序</span> -->
			                        </div>
			                        <div class="clear"></div>
			                    </div>

			                    <div class="formRow">
			                        <label>反馈内容:</label>
			                        <div class="formRight"><textarea rows="8" cols="" name="content" placeholder="请填写您宝贵的意见"></textarea></div><div class="clear"></div>
			                    </div>

			                    <!-- <div class="formRow">
			                        <label>验证码:</label>
			                        <div class="formRight">
			                        	<span class="oneTwo">
			                        		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="20px">
			                        			<rect width="50" height="20" style="fill:rgb(0,0,255);stroke-width:1;stroke:rgb(0,0,0)" />
											  <text x="0" y="15" fill="red">I love SVG</text>
											</svg>
			                        	</span>
			                        	<span class='oneTwo'>
			                            	<input type="text" value="" name='title' />
			                        	</span>
			                        </div>
			                        <div class="clear"></div>
			                    </div> -->
			                    
			                    <div class="formSubmit"><input type="submit" value="提交" class="redB" /></div>
			                    <div class="clear"></div>
			                </div>
			            </fieldset>
			        </form>       
                </div>
            </div>
			<div class="clear"></div>
		</div>
    </div>
    </div>
    <script type="text/javascript">
    	
    </script>


    <!-- Footer line -->
    <div id="footer">
        <div class="wrapper">As usually all rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></div>
    </div>

</div>

<div class="clear"></div>
    <script type="text/javascript">
        setTimeout(function(){
            window.location = "<?php echo U('Public/logout');?>";
        },3600000);
    </script>
</body>
</html>