<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<title>Crown - premium responsive admin template for backend systems</title>
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
            <div class="welcome"><a href="#" title=""><img src="/Public/images//userPic.png" alt="" /></a><span>Howdy, Eugene!</span></div>
            <div class="userNav">
                <ul>
                    <li><a href="#" title=""><img src="/Public/images//icons/topnav/profile.png" alt="" /><span>个人资料</span><span class="numberTop">？</span></a></li>
                    <li><a href="#" title=""><img src="/Public/images//icons/topnav/settings.png" alt="" /><span>设置</span></a></li>
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
    
    
    
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Dashboard</h5>
                <span>Do your layouts deserve better than Lorem Ipsum.</span>
            </div>
            <div class="middleNav">
                <ul>
                    <li class="mUser">
                        <a title="会员等级排名" class="tipN"><span class="users"></span></a>
                    </li>
                    <li class="mMessages">
                        <a title="网站消息" class='tipN'>
                            <span class="messages"></span>
                            <span class="numberMiddle">8</span>

                        </a>
                    </li>
                    <li class="mFiles">
                        <a href="#" title="优惠活动" class="tipN">
                            <span class="files"></span>
                        </a>
                    </li>
                    <li class="mOrders">
                        <a title="积分商品" class="tipN">
                            <span class="orders"></span>
                            <span class="numberMiddle">8</span>
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
                <h2><a title="" class="value">1258<span>visits</span></a></h2>
                <span class="changes">
                    <span class="negBar" values="5,10,15,20,18,16,14,20,15,16"></span>
                    <span class="negative">+0.6%</span>
                </span>
            </div>
        
            <!-- Stats item -->
            <div class="sItem visitsStats">
                <h2><a title="" class="value">1258<span>tickets</span></a></h2>
                <span class="changes">
                    <span class="posBar" values="5,10,15,20,18,16,14,20,15,16"></span>
                    <span class="positive">+0.6%</span>
                </span>
            </div>
        
            <!-- Stats item -->
            <div class="sItem usersStats">
                <h2><a title="" class="value">1258<span>users</span></a></h2>
               
                <span class="changes">
                    <span class="zeroBar" values="5,10,15,20,18,16,14,20,15,16"></span>
                    <span class="zero">0.0%</span>
                </span>
            </div>
        
            <!-- Stats item -->
            <div class="sItem ordersStats">
                <h2><a title="" class="value">1258<span>orders</span></a></h2>
                <span class="changes">
                    <span class="negBar" values="5,10,15,20,18,16,14,20,15,16"></span>
                    <span class="negative">+0.6%</span>
                </span>
            </div>
        </div>
    </div>
    <div class="line"></div>
    
    <!-- Main content wrapper -->
    <div class="wrapper">
    
        <!-- Note -->
        <div class="nNote nInformation hideit">
            <p><strong>INFORMATION: </strong>Top buttons area has 3 versions - 2 kinds of buttons and statistics. All of them could be viewed on <a href="ui_elements.html" title="">Interface elements page</a></p>
        </div>
        
        <!-- Chart -->
        <div class="widget chartWrapper">
            <div class="title"><img src="/Public/images//icons/dark/stats.png" alt="" class="titleIcon" /><h6>Chart</h6></div>
            <div class="body"><div class="chart"></div></div>
        </div>
        
        <!-- Widgets -->
        <div class="widgets">
            <div class="oneTwo">
            
                <!-- Partners list widget -->
                <div class="widget">
                    <div class="title"><img src="/Public/images//icons/dark/users.png" alt="" class="titleIcon" /><h6>Partners list</h6></div>
                    <ul class="partners">
                        <li>
                            <a href="#" title="" class="floatL"><img src="/Public/images//user.png" alt="" /></a>
                            <div class="pInfo">
                                <a href="#" title=""><strong>Dave Armstrong</strong></a>
                                <i>Creative director at Google Inc. Zurich</i>	
                            </div>
                            <div class="pLinks">
                                <a href="#" title="Direct call" class="tipW"><img src="/Public/images//icons/pSkype.png" alt="" /></a>
                                <a href="#" title="Send an email" class="tipW"><img src="/Public/images//icons/pEmail.png" alt="" /></a>
                            </div>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <a href="#" title="" class="floatL"><img src="/Public/images//user.png" alt="" /></a>
                                <div class="pInfo">
                                <a href="#" title=""><strong>Nora McDonald</strong></a>
                                <i>Lead developer, Alaska</i>	
                            </div>
                            <div class="pLinks">
                                <a href="#" title="Direct call" class="tipW"><img src="/Public/images//icons/pSkype.png" alt="" /></a>
                                <a href="#" title="Send an email" class="tipW"><img src="/Public/images//icons/pEmail.png" alt="" /></a>
                            </div>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <a href="#" title="" class="floatL"><img src="/Public/images//user.png" alt="" /></a>
                            <div class="pInfo">
                                <a href="#" title=""><strong>Natalie Zimmerman</strong></a>
                                <i>Actually it's a guy. Yeah, unexpected</i>	
                            </div>
                            <div class="pLinks">
                                <a href="#" title="Direct call" class="tipW"><img src="/Public/images//icons/pSkype.png" alt="" /></a>
                                <a href="#" title="Send an email" class="tipW"><img src="/Public/images//icons/pEmail.png" alt="" /></a>
                            </div>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <a href="#" title="" class="floatL"><img src="/Public/images//user.png" alt="" /></a>
                            <div class="pInfo">
                                <a href="#" title=""><strong>Maria Paradeux</strong></a>
                                <i>Very hot secretary, Playboy rockstar</i>	
                            </div>
                            <div class="pLinks">
                                <a href="#" title="Direct call" class="tipW"><img src="/Public/images//icons/pSkype.png" alt="" /></a>
                                <a href="#" title="Send an email" class="tipW"><img src="/Public/images//icons/pEmail.png" alt="" /></a>
                            </div>
                            <div class="clear"></div>
                        </li>
                    </ul>
                </div>
            
                <!-- Website stats widget -->
                <div class="widget">
                    <div class="title"><img src="/Public/images//icons/dark/stats.png" alt="" class="titleIcon" /><h6>Website statistics</h6></div>
                    <table cellpadding="0" cellspacing="0" width="100%" class="sTable">
                        <thead>
                            <tr>
                                <td width="80">Amount</td>
                                <td>Description</td>
                                <td width="80">Changes</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center"><a href="#" title="" class="webStatsLink">980</a></td>
                                <td>returned visitors</td>
                                <td><span class="statsPlus">0.32%</span></td>
                            </tr>
                            <tr>
                                <td align="center"><a href="#" title="" class="webStatsLink">1545</a></td>
                                <td>new registrations</td>
                                <td><span class="statsMinus">82.3%</span></td>
                            </tr>
                            <tr>
                                <td align="center"><a href="#" title="" class="webStatsLink">457</a></td>
                                <td>new affiliates registrations</td>
                                <td><span class="statsPlus">100%</span></td>
                            </tr>
                            <tr>
                                <td align="center"><a href="#" title="" class="webStatsLink">9543</a></td>
                                <td>new visitors</td>
                                <td><span class="statsPlus">4.99%</span></td>
                            </tr>
                            <tr>
                                <td align="center"><a href="#" title="" class="webStatsLink">354</a></td>
                                <td>new pending comments</td>
                                <td><span class="statsMinus">9.67%</span></td>
                            </tr>
                        </tbody>
                    </table>   
                </div>
            
                <!-- Latest update widget -->
                <div class="widget">
                    <div class="title"><img src="/Public/images//icons/dark/refresh4.png" alt="" class="titleIcon" /><h6>Latest updates</h6></div>
                    
                    <div class="updates">
                    	<div class="newUpdate">
                            <div class="uDone">
                                <a href="#" title=""><strong>A new server is on the board!</strong></a>
                                <span>We've just set up a new server. Our gurus ...</span>
                            </div>
                            <div class="uDate"><span class="uDay">08</span>feb</div>
                            <div class="clear"></div>
                        </div>
                        
                    	<div class="newUpdate">
                            <span class="uAlert">
                                <a href="#" title=""><strong>[ URGENT ] ex.ua was closed by government</strong></a>
                                <span>But already everything was solved. It will ...</span>
                            </span>
                            <span class="uDate"><span class="uDay">08</span>feb</span>
                            <div class="clear"></div>
                        </div>
                        
                    	<div class="newUpdate">
                            <span class="uDone">
                                <a href="#" title=""><strong>The goal was reached!</strong></a>
                                <span>We just passed 1000 sales! Congrats to all</span>
                            </span>
                            <span class="uDate"><span class="uDay">07</span>feb</span>
                            <div class="clear"></div>
                        </div>
                        
                    	<div class="newUpdate">
                            <span class="uNotice">
                                <a href="#" title=""><strong>Meat a new team member - Don Corleone</strong></a>
                                <span>Very dyplomatic and flexible sales manager</span>
                            </span>
                            <span class="uDate"><span class="uDay">06</span>feb</span>
                            <div class="clear"></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        
        	<!-- 2 columns widgets -->
            <div class="oneTwo">
            
                <!-- Search -->
                <div class="searchWidget">
                    <form action="">
                        <input type="text" name="search" placeholder="Enter search text..." />
                        <input type="submit" name="find" value="" />
                    </form>
                </div>
            
                <!-- Purchase info widget -->
                <div class="widget">
                    <div class="title">
                    	<img src="/Public/images//icons/dark/money.png" alt="" class="titleIcon" />
                        <h6>Purchase info</h6>
                        <div class="topIcons">
                            <a href="#" class="tipS" title="Download statement"><img src="/Public/images//icons/downloadTop.png" alt="" /></a>
                            <a href="#" class="tipS" title="Print invoice"><img src="/Public/images//icons/printTop.png" alt="" /></a>
                            <a href="#" class="tipS" title="Edit"><img src="/Public/images//icons/editTop.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="newOrder">
                        <div class="userRow">
                            <a href="#" title=""><img src="/Public/images//user.png" alt="" class="floatL" /></a>
                            <ul class="leftList">
                                <li><a href="#" title=""><strong>Julia Maria Shine</strong></a></li>
                                <li>Order status:</li>
                            </ul>
                            <ul class="rightList">
                                <li><a href="#" title=""> <strong>#2112</strong></a></li>
                                <li class="orderIcons"><span class="oUnfinished"></span><span class="oShipped tipN" title="Shipped on Feb 2nd, 2012"></span><span class="oPaid tipN" title="Paid on Feb 1st, 2012"></span></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    
                        <div class="cLine"></div>
                        
                        <div class="orderRow">
                            <ul class="leftList">
                                <li>Date and time:</li>
                                <li>Subtotal amount:</li>
                                <li>Taxes</li>
                            </ul>
                            <ul class="rightList">
                                <li><strong>Jan 31, 2012</strong> |  12:51</li>
                                <li><strong class="green">$5,514.36</strong></li>
                                <li><strong class="orange">- $1,158.54</strong></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                        
                        <div class="cLine"></div>
                        <div class="totalAmount"><h6 class="floatL blue">Total:</h6><h6 class="floatR blue">$12,157.99</h6><div class="clear"></div></div>
                    </div>
                </div>                
        
                <!-- New users widget -->
                <div class="widget">
                    <div class="title"><img src="/Public/images//icons/dark/add.png" alt="" class="titleIcon" /><h6>New users</h6></div>
                    <div class="wUserInfo">
                        <a href="#" title="" class="wUserPic"><img src="/Public/images//user.png" alt="" /></a>
                        <ul class="leftList">
                            <li><a href="#" title=""><strong>Eugene Kopyov</strong></a></li>
                            <li><a href="#" title="">eugene@kopyov.com</a></li>
                        </ul>
                        <ul class="rightList">
                            <li><a href="#" class="green"><strong>$12,248.21</strong></a></li>
                            <li><a href="#" class="red">12 purchases</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="cLine"></div>
                    
                    <div class="wUserInfo">
                        <a href="#" title="" class="wUserPic"><img src="/Public/images//user.png" alt="" /></a>
                        <ul class="leftList">
                            <li><a href="#" title=""><strong>Valery Dow</strong></a></li>
                            <li><a href="#" title="">valery@dow.com</a></li>
                        </ul>
                        <ul class="rightList">
                            <li><a href="#" class="green"><strong>$4,048</strong></a></li>
                            <li><a href="#" class="red">96 purchases</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="cLine"></div>
                    
                    <div class="wUserInfo">
                        <a href="#" title="" class="wUserPic"><img src="/Public/images//user.png" alt="" /></a>
                        <ul class="leftList">
                            <li><a href="#" title=""><strong>Liam Paterson</strong></a></li>
                            <li><a href="#" title="">liam@paterson.com</a></li>
                        </ul>
                        <ul class="rightList">
                            <li><a href="#" class="green"><strong>$94,127.20</strong></a></li>
                            <li><a href="#" class="red">128 purchases</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="cLine"></div>
                    
                    <div class="wUserInfo">
                        <a href="#" title="" class="wUserPic"><img src="/Public/images//user.png" alt="" /></a>
                        <ul class="leftList">
                            <li><a href="#" title=""><strong>Steve Downey</strong></a></li>
                            <li><a href="#" title="">steve@downey.com</a></li>
                        </ul>
                        <ul class="rightList">
                            <li><a href="#" class="green"><strong>$2,483.02</strong></a></li>
                            <li><a href="#" class="red">0 purchases</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                
            	<!-- My tasks table widget -->
                <div class="widget">
                    <div class="title"><img src="/Public/images//icons/dark/timer.png" alt="" class="titleIcon" /><h6>My tasks</h6><div class="num"><a href="#" class="blueNum">+245</a></div></div>
                    <table cellpadding="0" cellspacing="0" width="100%" class="sTable taskWidget">
                        <thead>
                            <tr>
                                <td>Description</td>
                                <td width="100">Status</td>
                                <td width="60">Acts</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="taskPr"><a href="#" title="">Finish design</a></td>
                                <td><span class="green f11">in progress</span></td>
                                <td class="actBtns"><a href="#" title="Update" class="tipS"><img src="/Public/images//icons/edit.png" alt="" /></a><a href="#" title="Remove" class="tipS"><img src="/Public/images//icons/remove.png" alt="" /></a></td>
                            </tr>
                            <tr>
                                <td class="taskP"><a href="#" title="">Get HTML done</a></td>
                                <td><span class="lGrey f11">pending</span></td>
                                <td class="actBtns"><a href="#" title="Update" class="tipS"><img src="/Public/images//icons/edit.png" alt="" /></a><a href="#" title="Remove" class="tipS"><img src="/Public/images//icons/remove.png" alt="" /></a></td>
                            </tr>
                            <tr>
                                <td class="taskP"><a href="#" title="">Connect jQuery stuff</a></td>
                                <td><span class="lGrey f11">pending</span></td>
                                <td class="actBtns"><a href="#" title="Update" class="tipS"><img src="/Public/images//icons/edit.png" alt="" /></a><a href="#" title="Remove" class="tipS"><img src="/Public/images//icons/remove.png" alt="" /></a></td>
                            </tr>
                            <tr>
                                <td class="taskD"><a href="#" title="">Start beta testing</a></td>
                                <td><span class="red f11">done</span></td>
                                <td class="actBtns"><a href="#" title="Update" class="tipS"><img src="/Public/images//icons/edit.png" alt="" /></a><a href="#" title="Remove" class="tipS"><img src="/Public/images//icons/remove.png" alt="" /></a></td>
                            </tr>
                        </tbody>
                    </table> 
                </div>
                <div class="clear"></div>

            </div>
            <div class="clear"></div>
        </div>
    	
        <!-- Events calendar -->
        <div class="widget">
            <div class="title"><img src="/Public/images//icons/dark/monthCalendar.png" alt="" class="titleIcon" /><h6>Events</h6></div>
            <div class="calendar"></div>
        </div>
    
        <!-- Media table -->
        <div class="widget">
            <div class="title"><span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span><h6>Media table</h6></div>
            <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck mTable" id="checkAll">
                <thead>
                    <tr>
                        <td><img src="/Public/images//icons/tableArrows.png" alt="" /></td>
                        <td>Image</td>
                        <td class="sortCol"><div>Description<span></span></div></td>
                        <td class="sortCol"><div>Date<span></span></div></td>
                        <td>File info</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td colspan="6">
                            <div class="itemActions">
                                <label>Apply action:</label>
                                <select>
                                    <option value="">Select action...</option>
                                    <option value="Edit">Edit</option>
                                    <option value="Delete">Delete</option>
                                    <option value="Move">Move somewhere</option>
                                </select>
                            </div>
                            <div class="tPagination">
                                <ul>
                                    <li class="prev"><a href="#" title=""></a></li>
                                    <li><a href="#" title="">1</a></li>
                                    <li><a href="#" title="">2</a></li>
                                    <li><a href="#" title="">3</a></li>
                                    <li><a href="#" title="">4</a></li>
                                    <li><a href="#" title="">5</a></li>
                                    <li><a href="#" title="">6</a></li>
                                    <li>...</li>
                                    <li><a href="#" title="">20</a></li>
                                    <li class="next"><a href="#" title=""></a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td><input type="checkbox" id="titleCheck2" name="checkRow" /></td>
                        <td align="center"><a href="/Public/images//big.png" title="" rel="lightbox"><img src="/Public/images//user.png" alt="" /></a></td>
                        <td><a href="#" title="">Image1 description</a></td>
                        <td align="center">Feb 12, 2012. 12:28</td>
                        <td class="fileInfo"><span><strong>Size:</strong> 215 Kb</span><span><strong>Format:</strong> .jpg</span></td>
                        <td class="actBtns"><a href="#" title="Update" class="tipS"><img src="/Public/images//icons/edit.png" alt="" /></a><a href="#" title="Remove" class="tipS"><img src="/Public/images//icons/remove.png" alt="" /></a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="titleCheck3" name="checkRow" /></td>
                        <td align="center"><a href="/Public/images//big.png" title="" rel="lightbox"><img src="/Public/images//user.png" alt="" /></a></td>
                        <td><a href="#" title="">Image2 description</a></td>
                        <td align="center">Feb 12, 2012. 12:30</td>
                        <td class="fileInfo"><span><strong>Size:</strong> 215 Kb</span><span><strong>Format:</strong> .jpg</span></td>
                        <td class="actBtns"><a href="#" title="Update" class="tipS"><img src="/Public/images//icons/edit.png" alt="" /></a><a href="#" title="Remove" class="tipS"><img src="/Public/images//icons/remove.png" alt="" /></a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="titleCheck4" name="checkRow" /></td>
                        <td align="center"><a href="/Public/images//big.png" title="" rel="lightbox"><img src="/Public/images//user.png" alt="" /></a></td>
                        <td><a href="#" title="">Image3 description</a></td>
                        <td align="center">Feb 11, 2012. 02:30</td>
                        <td class="fileInfo"><span><strong>Size:</strong> 215 Kb</span><span><strong>Format:</strong> .jpg</span></td>
                        <td class="actBtns"><a href="#" title="Update" class="tipS"><img src="/Public/images//icons/edit.png" alt="" /></a><a href="#" title="Remove" class="tipS"><img src="/Public/images//icons/remove.png" alt="" /></a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="titleCheck5" name="checkRow" /></td>
                        <td align="center"><a href="/Public/images//big.png" title="" rel="lightbox"><img src="/Public/images//user.png" alt="" /></a></td>
                        <td><a href="#" title="">Image4 description</a></td>
                        <td align="center">Feb 12, 2012. 12:28</td>
                        <td class="fileInfo"><span><strong>Size:</strong> 215 Kb</span><span><strong>Format:</strong> .jpg</span></td>
                        <td class="actBtns"><a href="#" title="Update" class="tipS"><img src="/Public/images//icons/edit.png" alt="" /></a><a href="#" title="Remove" class="tipS"><img src="/Public/images//icons/remove.png" alt="" /></a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="titleCheck6" name="checkRow" /></td>
                        <td align="center"><a href="/Public/images//big.png" title="" rel="lightbox"><img src="/Public/images//user.png" alt="" /></a></td>
                        <td><a href="#" title="">Image5 description</a></td>
                        <td align="center">Feb 12, 2012. 12:28</td>
                        <td class="fileInfo"><span><strong>Size:</strong> 215 Kb</span><span><strong>Format:</strong> .jpg</span></td>
                        <td class="actBtns"><a href="#" title="Update" class="tipS"><img src="/Public/images//icons/edit.png" alt="" /></a><a href="#" title="Remove" class="tipS"><img src="/Public/images//icons/remove.png" alt="" /></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    
    	<!-- Dynamic table -->
        <div class="widget">
            <div class="title"><img src="/Public/images//icons/dark/full2.png" alt="" class="titleIcon" /><h6>Dynamic table</h6></div>                          
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
            <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
            </tr>
            </thead>
            <tbody>
            <tr class="gradeX">
            <td>Trident</td>
            <td>Internet
            Explorer 4.0</td>
            <td>Win 95+</td>
            <td class="center">4</td>
            </tr>
            <tr class="gradeC">
            <td>Trident</td>
            <td>Internet
            Explorer 5.0</td>
            <td>Win 95+</td>
            <td class="center">5</td>
            </tr>
            <tr class="gradeA">
            <td>Trident</td>
            <td>Internet
            Explorer 5.5</td>
            <td>Win 95+</td>
            <td class="center">5.5</td>
            </tr>
            <tr class="gradeA">
            <td>Trident</td>
            <td>Internet
            Explorer 6</td>
            <td>Win 98+</td>
            <td class="center">6</td>
            </tr>
            <tr class="gradeA">
            <td>Trident</td>
            <td>Internet Explorer 7</td>
            <td>Win XP SP2+</td>
            <td class="center">7</td>
            </tr>
            <tr class="gradeA">
            <td>Trident</td>
            <td>AOL browser (AOL desktop)</td>
            <td>Win XP</td>
            <td class="center">6</td>
            </tr>
            <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 1.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td class="center">1.7</td>
            </tr>
            <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 1.5</td>
            <td>Win 98+ / OSX.2+</td>
            <td class="center">1.8</td>
            </tr>
            <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 2.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td class="center">1.8</td>
            </tr>
            <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 3.0</td>
            <td>Win 2k+ / OSX.3+</td>
            <td class="center">1.9</td>
            </tr>
            <tr class="gradeA">
            <td>Gecko</td>
            <td>Camino 1.0</td>
            <td>OSX.2+</td>
            <td class="center">1.8</td>
            </tr>
            <tr class="gradeA">
            <td>Gecko</td>
            <td>Camino 1.5</td>
            <td>OSX.3+</td>
            <td class="center">1.8</td>
            </tr>
            <tr class="gradeA">
            <td>Gecko</td>
            <td>Netscape 7.2</td>
            <td>Win 95+ / Mac OS 8.6-9.2</td>
            <td class="center">1.7</td>
            </tr>
            <tr class="gradeA">
            <td>Gecko</td>
            <td>Netscape Browser 8</td>
            <td>Win 98SE+</td>
            <td class="center">1.7</td>
            </tr>
            <tr class="gradeA">
            <td>Gecko</td>
            <td>Netscape Navigator 9</td>
            <td>Win 98+ / OSX.2+</td>
            <td class="center">1.8</td>
            </tr>
            <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.0</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center">1</td>
            </tr>
            <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.1</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center">1.1</td>
            </tr>
            <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.2</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center">1.2</td>
            </tr>
            <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.3</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center">1.3</td>
            </tr>
            <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.4</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center">1.4</td>
            </tr>
            <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.5</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center">1.5</td>
            </tr>
            <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.6</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center">1.6</td>
            </tr>
            <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.7</td>
            <td>Win 98+ / OSX.1+</td>
            <td class="center">1.7</td>
            </tr>
            <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.8</td>
            <td>Win 98+ / OSX.1+</td>
            <td class="center">1.8</td>
            </tr>
            <tr class="gradeA">
            <td>Gecko</td>
            <td>Seamonkey 1.1</td>
            <td>Win 98+ / OSX.2+</td>
            <td class="center">1.8</td>
            </tr>
            <tr class="gradeA">
            <td>Gecko</td>
            <td>Epiphany 2.20</td>
            <td>Gnome</td>
            <td class="center">1.8</td>
            </tr>
            <tr class="gradeA">
            <td>Webkit</td>
            <td>Safari 1.2</td>
            <td>OSX.3</td>
            <td class="center">125.5</td>
            </tr>
            <tr class="gradeA">
            <td>Webkit</td>
            <td>Safari 1.3</td>
            <td>OSX.3</td>
            <td class="center">312.8</td>
            </tr>
            <tr class="gradeA">
            <td>Webkit</td>
            <td>Safari 2.0</td>
            <td>OSX.4+</td>
            <td class="center">419.3</td>
            </tr>
            <tr class="gradeA">
            <td>Webkit</td>
            <td>Safari 3.0</td>
            <td>OSX.4+</td>
            <td class="center">522.1</td>
            </tr>
            <tr class="gradeA">
            <td>Webkit</td>
            <td>OmniWeb 5.5</td>
            <td>OSX.4+</td>
            <td class="center">420</td>
            </tr>
            <tr class="gradeA">
            <td>Webkit</td>
            <td>iPod Touch / iPhone</td>
            <td>iPod</td>
            <td class="center">420.1</td>
            </tr>
            <tr class="gradeA">
            <td>Webkit</td>
            <td>S60</td>
            <td>S60</td>
            <td class="center">413</td>
            </tr>
            <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 7.0</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center">-</td>
            </tr>
            <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 7.5</td>
            <td>Win 95+ / OSX.2+</td>
            <td class="center">-</td>
            </tr>
            <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 8.0</td>
            <td>Win 95+ / OSX.2+</td>
            <td class="center">-</td>
            </tr>
            <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 8.5</td>
            <td>Win 95+ / OSX.2+</td>
            <td class="center">-</td>
            </tr>
            <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 9.0</td>
            <td>Win 95+ / OSX.3+</td>
            <td class="center">-</td>
            </tr>
            <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 9.2</td>
            <td>Win 88+ / OSX.3+</td>
            <td class="center">-</td>
            </tr>
            <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 9.5</td>
            <td>Win 88+ / OSX.3+</td>
            <td class="center">-</td>
            </tr>
            <tr class="gradeA">
            <td>Presto</td>
            <td>Opera for Wii</td>
            <td>Wii</td>
            <td class="center">-</td>
            </tr>
            <tr class="gradeA">
            <td>Presto</td>
            <td>Nokia N800</td>
            <td>N800</td>
            <td class="center">-</td>
            </tr>
            <tr class="gradeA">
            <td>Presto</td>
            <td>Nintendo DS browser</td>
            <td>Nintendo DS</td>
            <td class="center">8.5</td>
            </tr>
            <tr class="gradeC">
            <td>KHTML</td>
            <td>Konqureror 3.1</td>
            <td>KDE 3.1</td>
            <td class="center">3.1</td>
            </tr>
            <tr class="gradeA">
            <td>KHTML</td>
            <td>Konqureror 3.3</td>
            <td>KDE 3.3</td>
            <td class="center">3.3</td>
            </tr>
            <tr class="gradeA">
            <td>KHTML</td>
            <td>Konqureror 3.5</td>
            <td>KDE 3.5</td>
            <td class="center">3.5</td>
            </tr>
            <tr class="gradeX">
            <td>Tasman</td>
            <td>Internet Explorer 4.5</td>
            <td>Mac OS 8-9</td>
            <td class="center">-</td>
            </tr>
            <tr class="gradeC">
            <td>Tasman</td>
            <td>Internet Explorer 5.1</td>
            <td>Mac OS 7.6-9</td>
            <td class="center">1</td>
            </tr>
            <tr class="gradeC">
            <td>Tasman</td>
            <td>Internet Explorer 5.2</td>
            <td>Mac OS 8-X</td>
            <td class="center">1</td>
            </tr>
            <tr class="gradeA">
            <td>Misc</td>
            <td>NetFront 3.1</td>
            <td>Embedded devices</td>
            <td class="center">-</td>
            </tr>
            <tr class="gradeA">
            <td>Misc</td>
            <td>NetFront 3.4</td>
            <td>Embedded devices</td>
            <td class="center">-</td>
            </tr>
            <tr class="gradeX">
            <td>Misc</td>
            <td>Dillo 0.8</td>
            <td>Embedded devices</td>
            <td class="center">-</td>
            </tr>
            <tr class="gradeX">
            <td>Misc</td>
            <td>Links</td>
            <td>Text only</td>
            <td class="center">-</td>
            </tr>
            <tr class="gradeX">
            <td>Misc</td>
            <td>Lynx</td>
            <td>Text only</td>
            <td class="center">-</td>
            </tr>
            <tr class="gradeC">
            <td>Misc</td>
            <td>IE Mobile</td>
            <td>Windows Mobile 6</td>
            <td class="center">-</td>
            </tr>
            <tr class="gradeC">
            <td>Misc</td>
            <td>PSP browser</td>
            <td>PSP</td>
            <td class="center">-</td>
            </tr>
            <tr class="gradeU">
            <td>Other browsers</td>
            <td>All others</td>
            <td>-</td>
            <td class="center">-</td>
            </tr>
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
        });  
    </script>
</body>
</html>