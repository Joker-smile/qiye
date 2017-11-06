<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"D:\phpStudy\WWW\qiye\public/../application/index\view\index\index.html";i:1493117158;s:72:"D:\phpStudy\WWW\qiye\public/../application/index\view\public\header.html";i:1493117162;s:72:"D:\phpStudy\WWW\qiye\public/../application/index\view\public\footer.html";i:1494083345;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<title><?php echo $confs['sitename']; ?></title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" media="all" href="__INDEX__/style/style.css" />
    <script type="text/javascript" src="__INDEX__/style/jquery-1.4.1.min.js"></script>
    <script type="text/javascript" src="__INDEX__/style/jquery.js"></script>
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
<script type="text/javascript">
    function IFocuse(th, o) {
        var t = $(th);
        var c = t.attr("class");
        if (o) {
            t.removeClass(c).addClass(c+"-over");
        }
        else {
            t.removeClass(c).addClass(c.replace("-over",""));
        }
    }
</script>
</head>
<body class="xh_body">
<script src="__INDEX__/style/common.js" type="text/javascript"></script>
 <script>
 function subForm()
 {

 formsearch.submit();
 //form1为form的id
 }
 </script>
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
    <div id="xh_wrapper">

    
       
<input type="hidden" id="hdUrlFocus" />
    <div class="xh_h_show">
        <div class="xh_h_show_in">
        <div id="zSlider">
            <div id="picshow">
    <div id="picshow_img">
        <ul>
                <?php if(is_array($recommend) || $recommend instanceof \think\Collection): $i = 0; $__LIST__ = $recommend;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rec): $mod = ($i % 2 );++$i;?>
                <li style="display: list-item;"><a href="<?php echo url('article/index',array('artid'=>$rec['id'])); ?>" target="_blank">
                <img src="<?php echo $rec['thumb']; ?>" alt="<?php echo $rec['title']; ?>"><span><?php echo $rec['title']; ?></span>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
<div id="select_btn">
    <ul>
        <li class="current"></li><li class=""></li><li class=""></li><li class=""></li>
    </ul>
</div>
            <div class="focus-bg-title"><div id="focus-left" class="arrow-left" onmouseover="IFocuse(this,true)" onmouseout="IFocuse(this,false)"></div>
            <div id="focus-center" class="focus-title">
            <div style="float:left;width:580px;padding-left:10px;font-size:18px;" id="focus-tl-s"></div>
            <div style="float:right;width:200px;"></div>
            </div>
            <div id="focus-right" class="arrow-right"></div></div>
            </div>
            <div id="picshow_right">
      <a href="" target="_blank">
    <img src="__INDEX__/images/php.jpg" alt="你的日子如何，你的力量也如何！" width="255px" height="420px"></a>
   
            <div id="picshow_right_cover" onclick="goanewurl()" style="cursor:pointer;position:absolute;top:495px;font-size:14px;width:213px;height:45px;line-height:45px;padding-left:42px;color:#ffffff;zoom:1;background-image:url(__INDEX__/images/focus-left-bg.png); background-repeat:no-repeat; background-color:#01A1ED;"></div>
            </div>
        </div>
    </div>
    <div id="xh_container">
    <a name="new"></a>
        <div id="xh_content" style="padding-right:10px;">
            <div class="xh_area_h_3">
                 <div class="xh_area_title">
                    <a href="javascript:" class="t">New 最近更新</a> <span class="r">
                    <?php if(is_array($getIndexRecommend) || $getIndexRecommend instanceof \think\Collection): $i = 0; $__LIST__ = $getIndexRecommend;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                    <a href="__CONTRALLER__<?php if($cate['type'] == 0): ?>artlist<?php elseif($cate['type'] == 2): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $cate['id']; ?>" target="_blank"><?php echo $cate['catename']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                     </span>
                </div>
                <br>
     <?php if(is_array($getNewArticles) || $getNewArticles instanceof \think\Collection): $i = 0; $__LIST__ = $getNewArticles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$articles): $mod = ($i % 2 );++$i;?>                       
    <div class="xh_post_h_3 ofh">
                            <div class="xh_265x265">
                                <a target="_blank" href="<?php echo url('Article/index',array('artid'=>$articles['id'])); ?>" title="<?php echo $articles['title']; ?>">
                                    <img src="<?php echo $articles['thumb']; ?>" alt="<?php echo $articles['title']; ?>" height="240" width="400"></a></div>
                            <div class="r ofh">
                                <h2 class="xh_post_h_3_title ofh">
                                    <a target="_blank" href="<?php echo url('Article/index',array('artid'=>$articles['id'])); ?>" title="<?php echo $articles['title']; ?>"><?php echo $articles['title']; ?></a>
                                </h2>
                                <span class="time"><?php echo date("Y-m-d H:i",$articles['time']); ?></span>
                                <div class="xh_post_h_3_entry ofh">
                                   <?php echo $articles['desc']; ?>...
                                </div>
                                <div class="b">
                                     <span title="<?php echo $articles['zan']; ?>人赞" class="xh_love"><span class="textcontainer"><span><?php echo $articles['zan']; ?></span></span> <span class="bartext"></span></span> <span title="<?php echo $articles['click']; ?>人浏览" class="xh_views"><?php echo $articles['click']; ?></span>
                                </div>
                            </div>
                            <span class="cat"><a href="<?php echo url('Artlist/index',array('cateid'=>$articles['id'])); ?>" title="查看 <?php echo $articles['catename']; ?> 中的全部文章"
                                rel="category tag"><?php echo $articles['catename']; ?></a></span>
                        </div>
     <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
        </div>
        <div id="xh_sidebar">

         <div class="widget">

<div style="background: url('__INDEX__/images/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
</div>
<ul id="ulHot">
<?php if(is_array($indexHotArticles) || $indexHotArticles instanceof \think\Collection): $i = 0; $__LIST__ = $indexHotArticles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$articles): $mod = ($i % 2 );++$i;?>
<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
<div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="<?php echo url('article/index',array('artid'=>$articles['id'])); ?>" target="_blank">
<img src="<?php echo $articles['thumb']; ?>" width="83" title="<?php echo $articles['title']; ?>" /></a></div>
<div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="<?php echo url('article/index',array('artid'=>$articles['id'])); ?>" target="_blank" title="<?php echo $articles['title']; ?>"><?php echo $articles['title']; ?></a></div>
</li>
<?php endforeach; endif; else: echo "" ;endif; ?>

</ul>
                </div>
            
            <div class="widget portrait">
    <div>
        <div class="textwidget">
            <a href="/tougao.html"><img src="__INDEX__/images/tg.jpg" alt="投稿"></a><br><br>          
        </div>
    </div>
</div>
            <div class="widget links">
                <h3>
                    友情链接</h3>
                <ul>
                <?php if(is_array($link) || $link instanceof \think\Collection): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$link): $mod = ($i % 2 );++$i;?>
                <li><a href='<?php  if(strpos($link['url'], 'http://')!==0){echo 'http://'.$link['url'];}else{echo $link['url'];} ?>'   target='_blank'><?php echo $link['title']; ?></a> </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="boxBor" onclick="IBoxBor()" style="cursor:pointer;"></div>
    <input type="hidden" id="hdBoxbor" />
    <script type="text/javascript">

        $("#next-page").hover(function () { $(this).attr("src", "__INDEX__/images/next02.png"); }, function () { $(this).attr("src", "__INDEX__/images/next01.png"); });
        $("#last-page").hover(function () { $(this).attr("src", "__INDEX__/images/last02.png"); }, function () { $(this).attr("src", "__INDEX__/images/last01.png"); });

        $(function () {
            var imgHoverSetTimeOut = null;
            $('.xh_265x265 img').hover(function () {
                var oPosition = $(this).offset();
                var oThis = $(this);
                $(".boxBor").css({
                    left: oPosition.left,
                    top: oPosition.top,
                    width: oThis.width(),
                    height: oThis.height()
                });
                $(".boxBor").show();
                var urlText = $(this).parent().attr("href");
                $("#hdBoxbor").val(urlText);
            }, function () {
                imgHoverSetTimeOut = setTimeout(function () { $(".boxBor").hide(); }, 500);
            });
            $(".boxBor").hover(
                function () {
                    clearTimeout(imgHoverSetTimeOut);
                }
                , function () {
                    $(".boxBor").hide();
                }
            );
            });
            function IBoxBor() {
                window.open($("#hdBoxbor").val());
            }
            function goanewurl() {
                window.open($("#hdUrlFocus").val());
            }
</script>

    </div>
<div class="sitemap">
    <h4>
        SITE MAP</h4>
    <div class="l">
        <ul id="menu-sitemap" class="menu">
        <?php if(is_array($cateres) || $cateres instanceof \think\Collection): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
             <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a target="_blank" href="http://127.0.0.1/qiye/public/index.php/index/<?php if($cate['type'] == 0): ?>artlist<?php elseif($cate['type'] == 2): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $cate['id']; ?>/"><?php echo $cate['catename']; ?></a>
                <?php if($cate['children'] != 0): ?>
                <ul class="sub-menu">
                <?php foreach ($cate['children'] as $key => $value):?>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category">
                        <a target="_blank" href="http://127.0.0.1/qiye/public/index.php/index/<?php if($value['type'] == 0): ?>artlist<?php elseif($value['type'] == 2): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $value['id']; ?>"><?php echo $value['catename'];?></a>
                    </li>
                <?php endforeach;?>
                </ul>
                <?php endif; ?>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="r">
        <h5>
            FOLLOW ME</h5>
        
                        <img src="__INDEX__/images/weixin.jpg" alt="" title="扫描添加我微信" class="alignnone size-full wp-image-18966"
                            height="140" width="120"></a></div>
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
<html>
<script>document.getElementById("life"+"").style.display="n"+"o"+"ne";</script>