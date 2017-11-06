<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\phpStudy\WWW\qiye\public/../application/index\view\artlist\index.html";i:1492842382;s:72:"D:\phpStudy\WWW\qiye\public/../application/index\view\public\header.html";i:1493117162;s:72:"D:\phpStudy\WWW\qiye\public/../application/index\view\public\footer.html";i:1494083345;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $confs['sitename']; ?></title>
<meta name="description" content="" />
<meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" media="all" href="__INDEX__/style/style.css" />
    <script src="__INDEX__/style/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jquery.error.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jtemplates.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jquery.form.js" type="text/javascript"></script>
    <script src="__INDEX__/style/lazy.js" type="text/javascript"></script>
    <script type="text/javascript" src="__INDEX__/style/wp-sns-share.js"></script>
    <script type="text/javascript" src="__INDEX__/style/voterajax.js"></script>
    <script type="text/javascript" src="__INDEX__/style/userregister.js"></script>

    <link rel="stylesheet" href="__INDEX__/style/votestyles.css" type="text/css" />
    <link rel="stylesheet" href="__INDEX__/style/voteitup.css" type="text/css" />
   <link rel="stylesheet" href="__INDEX__/style/list.css" type="text/css" />
</head>
<body id="list_style_2" class="list_style_2">
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
    <div id="wrapper">
       

    <div id="xh_container">
        <div id="xh_content">
         
        <div class="path">
        <a href='<?php echo url('index/index'); ?>'>主页</a> > 
        <?php if(is_array($getParents) || $getParents instanceof \think\Collection): $i = 0; $__LIST__ = $getParents;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$getParents): $mod = ($i % 2 );++$i;?>
        <a href='<?php echo url('artlist/index',array('cateid'=>$getParents['id'])); ?>'><?php echo $getParents['catename']; ?></a> > 
         <?php endforeach; endif; else: echo "" ;endif; ?>
         </div>
        <div class="clear"></div>
            <div class="xh_area_h_3" style="margin-top: 40px;">
            <?php if(is_array($article) || $article instanceof \think\Collection): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?>
                        <div class="xh_post_h_3 ofh">
                            <div class="xh">
                                <a target="_blank" href="<?php echo url('article/index',array('artid'=>$article['id'])); ?>" title="<?php echo $article['title']; ?>">
                            <img src="<?php echo $article['thumb']; ?>" alt="<?php echo $article['title']; ?>" height="240" width="400"></a></div>
                            <div class="r ofh">
                                <h2 class="xh_post_h_3_title ofh" style="height:60px;">
                                    <a target="_blank" href="<?php echo url('article/index',array('artid'=>$article['id'])); ?>" title="<?php echo $article['title']; ?>"><?php echo $article['title']; ?></a>
                                </h2>
                                <span class="time"><?php echo date("Y年m月d日",$article['time']); ?></span>
                                <div class="xh_post_h_3_entry ofh" style="color:#555;height:80px; overflow:hidden;">
                                <?php echo $article['desc']; ?>
                                </div>
                                <div class="b">
                                <a href="<?php echo url('article/index',array('artid'=>$article['id'])); ?>" class="xh_readmore" rel="nofollow">read
                                more</a> 
                                <span title="<?php echo $article['zan']; ?>人赞" class="xh_love">
                                <span class="textcontainer">
                                <span><?php echo $article['zan']; ?></span>
                                </span> 
                                </span> 
                                <span title="<?php echo $article['click']; ?>人浏览" class="xh_views"><?php echo $article['click']; ?></span>
                                </div>
                            </div>
                        </div>                    
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    
                <div id="pagination">
                <div class="wp-pagenavi">
                <?php echo $page; ?>
                </div></div>
            </div>
        </div>
        <div id="xh_sidebar">        
<!-- 右侧 -->

         <div class="widget">

<div style="background: url('__INDEX__/images/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
</div>
<ul id="ulHot">
<?php if(is_array($hotArticles) || $hotArticles instanceof \think\Collection): $i = 0; $__LIST__ = $hotArticles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotArticles): $mod = ($i % 2 );++$i;?>
 <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
   <div style="float:left;width:85px;height:55px; overflow:hidden;">
          <a href="<?php echo url('article/index',array('artid'=>$hotArticles['id'])); ?>" target="_blank">
          <img src="<?php echo $hotArticles['thumb']; ?>" width="83" title="<?php echo $hotArticles['title']; ?>" /></a>
   </div>
    <div style="float:right;width:145px;height:52px; overflow:hidden;">
        <a href="<?php echo url('article/index',array('artid'=>$hotArticles['id'])); ?>" target="_blank" title="<?php echo $hotArticles['title']; ?>"><?php echo $hotArticles['title']; ?></a>
    </div>

 </li>
<?php endforeach; endif; else: echo "" ;endif; ?>

</ul>
         </div>
            
<div class="widget portrait">
    <div>
        <div class="textwidget">
         <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1020733278&site=qq&menu=yes"><img src="__INDEX__/images/tg.jpg" alt="在线投稿" title="在线投稿" alt="">
         </a><br><br>          
<script type="text/javascript">BAIDU_CLB_fillSlot("870073");</script>
<script type="text/javascript">BAIDU_CLB_fillSlot("870080");</script>
<script type="text/javascript">BAIDU_CLB_fillSlot("870081");</script>
        </div>
    </div>
</div>

        </div>
        <div class="clear">
        </div>
    </div>
    <div class="boxBor"></div>

    <div class="boxBor" onclick="IBoxBor()" style="cursor:pointer;"></div>
    <script type="text/javascript">
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
