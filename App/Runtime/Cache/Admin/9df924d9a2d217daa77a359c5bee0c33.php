<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<title>网站后台管理系统</title>
<link href="/Public/Admin/css//main.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/css//style.css" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="/Public/Admin/js//jquery.min.js"></script>

<script type="text/javascript" src="/Public/Admin/js//plugins/spinner/ui.spinner.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/spinner/jquery.mousewheel.js"></script>


<script type="text/javascript" src="/Public/Admin/js//jquery-ui.min.js"></script>
<!-- 
<script type="text/javascript" src="/Public/Admin/js//plugins/charts/excanvas.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/charts/jquery.flot.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/charts/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/charts/jquery.flot.pie.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/charts/jquery.flot.resize.js"></script>
 -->
<script type="text/javascript" src="/Public/Admin/js//plugins/charts/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/forms/uniform.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/forms/jquery.validationEngine-zh-CN.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/forms/jquery.validationEngine.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/forms/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/forms/autogrowtextarea.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/forms/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/forms/jquery.dualListBox.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/forms/jquery.inputlimiter.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/forms/chosen.jquery.min.js"></script>

<script type="text/javascript" src="/Public/Admin/js//plugins/wizard/jquery.form.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/wizard/jquery.validate.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/wizard/jquery.form.wizard.js"></script>




<script type="text/javascript" charset="utf-8" src="/Public/Admin/js//plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/Admin/js//plugins/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/Public/Admin/js//plugins/ueditor/lang/zh-cn/zh-cn.js"></script>



<!-- <script type="text/javascript" src="/Public/Admin/js//plugins/uploader/plupload.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/uploader/plupload.html5.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/uploader/plupload.html4.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/uploader/jquery.plupload.queue.js"></script>
 -->

<script type="text/javascript" src="/Public/Admin/js//plugins/uploader/jquery.upload.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/Admin/js//plugins/uploader/html5uploader.css">


<script type="text/javascript" src="/Public/Admin/js//plugins/tables/jquery.datatable.min.js"></script>
<!-- 
<script type="text/javascript" src="/Public/Admin/js//plugins/tables/tablesort.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/tables/resizable.min.js"></script>
 -->
<script type="text/javascript" src="/Public/Admin/js//plugins/calendar.min.js"></script>

<script type="text/javascript" src="/Public/Admin/js//plugins/ui/jquery.tipsy.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/ui/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/ui/jquery.progress.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/ui/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/ui/jquery.colorpicker.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/ui/jquery.breadcrumbs.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/ui/jquery.sourcerer.js"></script>

<script type="text/javascript" src="/Public/Admin/js//plugins/layer/layer.js"></script>

<script type="text/javascript" src="/Public/Admin/js//custom.js"></script>


<body>

<!-- Left side content -->
<div id="leftSide">
    <div class="logo"><a href="index.html"><img src="/Public/Admin/images//logo.png" alt="" /></a></div>

    <div class="sidebarSep"></div>
    
    <!-- Left navigation -->
    <ul id="menu" class="nav">
        <?php if(is_array($_menu)): $i = 0; $__LIST__ = $_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menus): $mod = ($i % 2 );++$i; if($menus['children'] != false): ?><li class="<?php echo ($menus["class"]); ?>"><a class='exp' href="#" title=""><span><?php echo ($menus["title"]); ?></span></a>
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
            <div class="welcome"><a href="#" title=""><img src="/Public/Admin/images//userPic.png" alt="" /></a><span>您好，管理员</span></div>
            <div class="userNav">
                <ul>
                    <!-- <li><a href="#" title=""><img src="/Public/Admin/images//icons/topnav/profile.png" alt="" /><span>个人资料</span><span class="numberTop">？</span></a></li> -->
                    <li><a href="<?php echo U('options/index');?>" title=""><img src="/Public/Admin/images//icons/topnav/settings.png" alt="" /><span>设置</span></a></li>
                    <li><a href="<?php echo U('Public/logout');?>" title="退出客户端"><img src="/Public/Admin/images//icons/topnav/logout.png" alt="" /><span>退出</span></a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <!-- Responsive header -->
    <div class="resp">
        <div class="respHead">
            <a href="index.html" title=""><img src="/Public/Admin/images//loginLogo.png" alt="" /></a>
        </div>
        
        <div class="cLine"></div>
        <div class="smalldd">
            <span class="goTo"><img src="/Public/Admin/images//icons/light/home.png" alt="" />导航菜单</span>
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
    
    
    
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <!-- <h5>Dashboard</h5> -->
                <!-- <span>Do your layouts deserve better than Lorem Ipsum.</span> -->
            </div>
            <div class="middleNav">
                <ul>
                    <li class="mUser">
                        <a title="会员列表" class="tipN" href="<?php echo U('User/index');?>"><span class="users"></span></a>
                    </li>
                    <li class="mMessages">
                        <a title="网站消息" class='tipN' href="<?php echo U('Message/index');?>">
                            <span class="messages"></span>
                        </a>
                    </li>
                    <li class="mFiles">
                        <a href="<?php echo U('Activity/index');?>" title="优惠活动" class="tipN">
                            <span class="files"></span>
                        </a>
                    </li>
                    <li class="mOrders">
                        <a title="积分商品" class="tipN" href="<?php echo U('Shop/index');?>">
                            <span class="orders"></span>
                        </a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    
    <div class="line"></div>

    <!-- Page statistics area -->
    <div class="statsRow">
        <div class="wrapper statsItems">
        
            <!-- Stats item -->
            <div class="sItem ticketsStats">
                <h2><a title="" class="value"><?php echo ($statistics["today"]["register_number"]); ?><span>会员注册</span></a></h2>
                <span class="changes">
                    <!-- <span class="negBar" values="5,10,15,20,18,16,14,20,15,16"></span> -->
                    <?php echo backend_statistics( $statistics['counts']['register_number']);?>
                </span>
            </div>
        
            <!-- Stats item -->
            <div class="sItem visitsStats">
                <h2><a title="" class="value"><?php echo ($statistics["today"]["login_number"]); ?><span>会员登录</span></a></h2>
                <span class="changes">
                    <!-- <span class="posBar" values="5,10,15,20,18,16,14,20,15,16"></span> -->
                    <?php echo backend_statistics( $statistics['counts']['login_number']);?>
                </span>
            </div>
        
            <!-- Stats item -->
            <div class="sItem usersStats">
                <h2><a title="" class="value"><?php echo ($statistics["today"]["download"]); ?><span>软件下载</span></a></h2>
               
                <span class="changes">
                    <!-- <span class="zeroBar" values="5,10,15,20,18,16,14,20,15,16"></span> -->
                    <?php echo backend_statistics( $statistics['counts']['download']);?>
                </span>
            </div>
        
            <!-- Stats item -->
            <div class="sItem ordersStats">
                <h2><a title="" class="value"><?php echo ($statistics["today"]["link_number"]); ?><span>打开网站</span></a></h2>
                <span class="changes">
                    <!-- <span class="negBar" values="5,10,15,20,18,16,14,20,15,16"></span> -->
                    <?php echo backend_statistics( $statistics['counts']['link_number']);?>
                </span>
            </div>
        </div>
    </div>
    <div class="line"></div>
    
    <!-- Main content wrapper -->
    <div class="wrapper">
        
        <?php
 $admin_user = O('admin_user'); $admin_pass = O('admin_pass'); ?>
        <?php if($admin_user == 'admin' || $admin_pass == 'admin' ): ?><!-- Note -->
            <div class="nNote nInformation hideit">
                <p><strong>系统提醒: </strong>后台账户密码过去简单，<a href="<?php echo U('options/index');?>" title="">请重新设置。</a></p>
            </div><?php endif; ?>
        
    	<!-- Dynamic table -->
        <div class="widget">
            <div class="title"><img src="/Public/Admin/images//icons/dark/full2.png" alt="" class="titleIcon" /><h6>用户登录记录</h6></div>                          
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
                <tr>
                    <th>会员帐号</th>
                    <th>登录时间</th>
                    <th>登录IP</th>
                    <th>登录地址</th>
                </tr>
            </thead>
            <tbody style="text-align: center;">
                <?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><tr class="gradeA">
                        <td><?php echo ($user["username"]); ?></td>
                        <td><?php echo (date("Y-m-d H:i:s",$user["lastlogin"])); ?></td>
                        <td><?php echo ($user["lastip"]); ?></td>
                        <td><?php echo ($user["lastarea"]); ?></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
            </table>  
        </div>
    
    </div>


    <!-- Footer line -->
    <div id="footer">
        <div class="wrapper">As usually all rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></div>
    </div>

</div>



<div class="clear"></div>
    
    <script type="text/javascript">
        $(function(){
            oTable = $('.dTable').dataTable({
                "oLanguage" : { // 汉化
                    "sProcessing" : "正在加载数据...",
                    "sLengthMenu": "<span class='itemsPerPage'>每页显示:</span> _MENU_ <a class='add_link' href='<?php echo U('add');?>'>+ 添加</a>",
                    "sZeroRecords" : "没有您要搜索的内容",
                    "sInfo" : "从_START_ 到 _END_ 条记录——总记录数为 _TOTAL_ 条",
                    "sInfoEmpty" : "记录数为0",
                    "sInfoFiltered" : "(全部记录数 _MAX_  条)",
                    "sInfoPostFix" : "",
                    "sSearch" : "搜索",
                    "sUrl" : "",
                    "oPaginate" : {
                        "sFirst" : "第一页",
                        "sPrevious" : " 上一页 ",
                        "sNext" : " 下一页 ",
                        "sLast" : " 最后一页 "
                    }
                },
                "bJQueryUI": true,
                "sPaginationType": "full_numbers",
                "sDom": '<""l>t<"F"fp>',
            });
            //点击打开文件选择器  
            $("#upload").on('click', function() {
                $.ajaxFileUpload({  
                    url:"<?php echo U('upload');?>",  
                    secureuri:false,  
                    fileElementId:'fileToUpload',//file标签的id  
                    dataType: 'json',//返回数据的类型  
                    success: function (data, status) {
                        if( data.status == 1 ){
                            $('#hidden_inputFile').val( data.fileName );
                            $("#showImg").attr('src',"/<?php echo C('UPLOAD_CONFIG.rootPath');?>"+data.fileName)
                            layer.msg( '文件上传成功' , {icon: 6});
                        } else {
                            layer.msg( data.error , {icon: 5});
                        }
                    },  
                    error: function (data, status, e) {  
                        alert(e);  
                    }  
                }); 
            }); 

            var z = $("#breadcrumbs .current a").html();
            if( z ){
                var t = $('title').html();
                $('title').html( z+'_'+t );
            }

            setTimeout(function(){
                window.location = "<?php echo U('Public/logout');?>";
            },3600000);
        });  
    </script>
</body>
</html>