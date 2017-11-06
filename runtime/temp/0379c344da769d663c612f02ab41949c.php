<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"D:\phpStudy\PHPTutorial\WWW\qiye\public/../application/index\view\page\index.html";i:1492681909;s:84:"D:\phpStudy\PHPTutorial\WWW\qiye\public/../application/index\view\public\header.html";i:1493117162;s:84:"D:\phpStudy\PHPTutorial\WWW\qiye\public/../application/index\view\public\footer.html";i:1494083345;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $confs['sitename']; ?></title>
<meta name="description" content=" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" media="all" href="__INDEX__/style/style.css" />
<script src="__INDEX__/style/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jquery.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jquery.error.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jtemplates.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jquery.form.js" type="text/javascript"></script>
    <script src="__INDEX__/style/lazy.js" type="text/javascript"></script>
    <script type="text/javascript" src="__INDEX__/style/wp-sns-share.js"></script>
    <script type="text/javascript" src="__INDEX__/style/voterajax.js"></script>
    <script type="text/javascript" src="__INDEX__/style/userregister.js"></script>
    <link rel="stylesheet" href="__INDEX__/style/pagenavi-css.css" type="text/css" media="all" />
    <link rel="stylesheet" href="__INDEX__/style/votestyles.css" type="text/css" />
    <link rel="stylesheet" href="__INDEX__/style/voteitup.css" type="text/css" />
    <style type="text/css">
        #wrapper
        {
            background-color: #ffffff;
        }
        .single_entry{margin-top:30px;}
    </style>
</head>
<body class="single2">

<script type="text/javascript">
    function showMask() {
        $("#mask").css("height", $(document).height());
        $("#mask").css("width", $(document).width());
        $("#mask").show();
    }  
</script>
<div id="mask" class="mask" onclick="CloseMask()"></div> 
<div id="header_wrap">
    <div id="header">
        <div style="float: left; width: 310px;">
            <h1>
                <a href="<?php echo url('index/index'); ?>" title=""></a>
                <div class="" id="logo-sub-class">
                </div>
            </h1>
        </div>
        <div id="navi">
<link rel="shortcut icon" href="__INDEX__/images/ico.ico" />
<ul id="jsddm">
<li><a class="navi_home" href="<?php echo url('index/index'); ?>">首页</a></li>
<?php if(is_array($cateres) || $cateres instanceof \think\Collection): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
<li><a <?php if($cate['children'] != 0): ?> class="havechild" <?php endif; ?> href="__CONTRALLER__<?php if($cate['type'] == 0): ?>artlist<?php elseif($cate['type'] == 2): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $cate['id']; ?>"><?php echo $cate['catename']; ?></a>
<?php if($cate['children'] != 0): ?>
<ul>
<?php foreach ($cate['children'] as $key => $value):?>
<li><a href="__CONTRALLER__<?php if($value['type'] == 0): ?>artlist<?php elseif($value['type'] == 2): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $value['id']; ?>"><?php echo $value['catename'];?></a></li>
<?php endforeach;?>
</ul>
<?php endif; ?>
 </li>
<?php endforeach; endif; else: echo "" ;endif; ?>
</ul>


            <div style="clear: both;">
            </div>

            
        </div>
        <div style="float: right; width: 209px;">
            <div class="widget" style="height: 30px; padding-top: 20px;">
                <div style="float: left;">
         <form  name="formsearch" action="<?php echo url('search/index'); ?>" method="post">               
                <input name="keywords" type="text" style="background-color: #000000;padding-left: 10px; font-size: 12px;font-family: 'Microsoft Yahei'; color: #999999;height: 29px; width: 160px; border: solid 1px #666666; line-height: 28px;" id="go" value="在这里搜索..." onfocus="if(this.value=='在这里搜索...'){this.value='';}"  onblur="if(this.value==''){this.value='在这里搜索...';}" />
        </form>
                        </div>
                <div style="float: left;">
                    <img src="__INDEX__/images/search-new.png" id="imgSearch" style="cursor: pointer; margin: 0px;
                        padding: 0px;" onclick="subForm()"  /></div>
                <div style="clear: both;">
                </div>
            </div>
        </div>
        
    </div>
</div>

</div>
    <div id="wrapper">
        
        <div class="single_entry page_entry">  
        <div class="path">
           <a href='<?php echo url('index/index'); ?>'>主页</a> > 
        <?php if(is_array($getParents) || $getParents instanceof \think\Collection): $i = 0; $__LIST__ = $getParents;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$getParents): $mod = ($i % 2 );++$i;?>
            <a href='<?php echo url('page/index',array('cateid'=>$getParents['id'])); ?>'><?php echo $getParents['catename']; ?></a> > 
         <?php endforeach; endif; else: echo "" ;endif; ?>
         </div>

            <div class="entry">

                <h2 style="margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 22px; vertical-align: baseline; font-family: 'Microsoft Yahei', 'Trebuchet MS', Arial, Tahoma, Helvetica, sans-serif; line-height: 26px; color: rgb(51, 51, 51);">
     <?php echo $cates['keyword']; ?></h2>
<p style="margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; line-height: 28px; color: rgb(102, 102, 102); font-family: 'Microsoft Yahei', 'Helvetica Neue', Arial, Helvetica, sans-serif;">
     <?php echo $cates['content']; ?>
    </p>

    <strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">描述</strong>：<strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><?php echo $cates['desc']; ?></strong></p>

                <div class="clear">
                </div>

                </div>
            </div>
    </div>

    </div>
 <div id="footer_wrap">
    <div id="footer">
        <div class="footer_navi">
            <ul class="menu">
                <?php if(is_array($recBottom) || $recBottom instanceof \think\Collection): $i = 0; $__LIST__ = $recBottom;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                <li id="menu-item-156" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-156">
                    <a href="http://127.0.0.1/qiye/public/index.php/index/<?php if($cate['type'] == 0): ?>artlist<?php elseif($cate['type'] == 2): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $cate['id']; ?>" target="_blank"><?php echo $cate['catename']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
         
            </ul>
        </div>
        <div class="footer_info">
            <span class="legal">Copyright &#169; 2016-2020  版权所有&#160;&#160;&#160;<a href="http://www.miitbeian.gov.cn ">
                ,闽ICP备16038037号</a>&#160;&#160;&#160;
        </div>
    </div>
</div>
<div style="display: none;" id="scroll">
</div>
<script type="text/javascript" src="__INDEX__/style/z700bike_global.js"></script>
</body>
</html>
