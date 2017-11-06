<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\phpStudy\WWW\qiye\public/../application/index\view\article\index.html";i:1493090145;s:72:"D:\phpStudy\WWW\qiye\public/../application/index\view\public\header.html";i:1493117162;s:72:"D:\phpStudy\WWW\qiye\public/../application/index\view\public\footer.html";i:1494083345;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $confs['sitename']; ?></title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" media="all" href="__INDEX__/style/style.css" />       
<script src="__INDEX__/style/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jquery.js" type="text/javascript"></script>
    <script type="text/javascript" src="__ROOT__/Index/Tpl/Public/js/jquery.cookie.js"></script>
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
    <link rel="stylesheet" href="__INDEX__/style/article.css" type="text/css" />
<script language="javascript" type="text/javascript" src="__INDEX__/include/dedeajax2.js"></script>
<script language="javascript" type="text/javascript">
<!--

function postBadGood(ftype,fid)
{
    var taget_obj = document.getElementById(ftype+fid);
    var saveid = GetCookie('badgoodid');
    if(saveid != null)
    {
        var saveids = saveid.split(',');
        var hasid = false;
        saveid = '';
        j = 1;
        for(i=saveids.length-1;i>=0;i--)
        {
            if(saveids[i]==fid && hasid) continue;
            else {
                if(saveids[i]==fid && !hasid) hasid = true;
                saveid += (saveid=='' ? saveids[i] : ','+saveids[i]);
                j++;
                if(j==10 && hasid) break;
                if(j==9 && !hasid) break;
            }
        }
        if(hasid) { alert('您刚才已表决过了喔！'); return false;}
        else saveid += ','+fid;
        SetCookie('badgoodid',saveid,1);
    }
    else
    {
        SetCookie('badgoodid',fid,1);
    }
    myajax = new DedeAjax(taget_obj,false,false,'','','');
    myajax.SendGet2("/plus/feedback.php?aid="+fid+"&action="+ftype+"&fid="+fid);
}
function postDigg(ftype,aid)
{
    var taget_obj = document.getElementById('newdigg');
    var saveid = GetCookie('diggid');
    if(saveid != null)
    {
        var saveids = saveid.split(',');
        var hasid = false;
        saveid = '';
        j = 1;
        for(i=saveids.length-1;i>=0;i--)
        {
            if(saveids[i]==aid && hasid) continue;
            else {
                if(saveids[i]==aid && !hasid) hasid = true;
                saveid += (saveid=='' ? saveids[i] : ','+saveids[i]);
                j++;
                if(j==20 && hasid) break;
                if(j==19 && !hasid) break;
            }
        }
        if(hasid) { alert("您已经顶过该帖，请不要重复顶帖 ！"); return; }
        else saveid += ','+aid;
        SetCookie('diggid',saveid,1);
    }
    else
    {
        SetCookie('diggid',aid,1);
    }
    myajax = new DedeAjax(taget_obj,false,false,'','','');
    var url = "/plus/digg_ajax.php?action="+ftype+"&id="+aid;
    myajax.SendGet2(url);
}
function getDigg(aid)
{
    var taget_obj = document.getElementById('newdigg');
    myajax = new DedeAjax(taget_obj,false,false,'','','');
    myajax.SendGet2("/plus/digg_ajax.php?id="+aid);
    DedeXHTTP = null;
}
-->
</script>
<script type="text/javascript">

function ILike(th, v) {
    if (v) {
        $(th).addClass("single_views_over");
    }
    else {
        $(th).removeClass("single_views_over");
    }
}

</script>
 
</head>
<body class="single2">
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

    <div id="wrapper">
        <div id="container">
            <div id="content">
                <div class="post" id="post-19563" style="border-right: solid 1px #000000; min-height: 1700px;
                    margin-top: 10px;">
                            <div class="path">
                               <a href='<?php echo url('index/index'); ?>'>主页</a> > 
                                  <?php if(is_array($getParents) || $getParents instanceof \think\Collection): $i = 0; $__LIST__ = $getParents;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$getParents): $mod = ($i % 2 );++$i;?>
                                <a href='<?php echo url('artlist/index',array('cateid'=>$getParents['id'])); ?>'><?php echo $getParents['catename']; ?></a> > 
                             <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                    <div class="single_entry single2_entry">
                        <div class="entry fewcomment">
                            <div class="title_container">
                                <h2 class="title single_title">
                                    <span><?php echo $articles['title']; ?></span><span class="title_date"></span></h2>
                                <p class="single_info">时间：<?php echo date("Y-m-d H:i",$articles['time']); ?>&nbsp;&nbsp;&nbsp;编辑：<?php echo $articles['author']; ?>&nbsp;&nbsp;&nbsp;阅读：<?php echo $articles['click']; ?></p>
                            </div>
                            <!-- <div class="xh_265x265">                                  
                                <img src="<?php echo $articles['thumb']; ?>" alt="<?php echo $articles['title']; ?>" style="vertical-align:middle;">
                            </div> -->
                            <div class="div-content">
                                <p><?php echo $articles['content']; ?></p>
                                <p class="pagepage"></p> 
                                <center id="pagenav">
                                    </center>
                                <div id="BottomNavOver" style="height: 80px;">
                                    <div style="float: left; font-size: 12px;">
                                        
                                    </div>
                                    <div style="float: right; padding-right: 20px; width: 120px;" class="div">
                                        <table cellpadding="0" cellspacing="0" border="0" style="background-color: transparent;
                                            border: 0px solid #EEEEEE; border-collapse: collapse; margin: 5px 0 10px;">
                                            <tr>
                                                <td style="border-width: 0px; padding: 0px; padding-right: 4px;">

                                                </td>
                                                <td style="border-width: 0px; padding: 0px;">
                                                    <!-- JiaThis Button BEGIN -->
                                                    <div class="jiathis_style">
                                                        <a class="jiathis_button_qzone"></a><a class="jiathis_button_tqq"></a><a class="jiathis_button_renren">
                                                        </a><a class="jiathis_button_kaixin001"></a><a href="http://www.jiathis.com/share"
                                                            class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
                                                    </div>
                                                    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1365565447348652"
                                                        charset="utf-8"></script>
                                                    <!-- JiaThis Button END -->
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div style="float: right; width: 60px; font-size: 12px;">
                                        分享至：</div>
                                    <div style="clear: both;">
                                    </div>
                                </div>
                            </div>
                            <div class="clear">
                            </div>
                            <div class="clear">
                            </div>
                            <div class="comments_wrap" style="margin-top: 35px;">
                                <a name="comment"></a>
  <div id="cyEmoji" role="cylabs" data-use="emoji"></div>
  <script type="text/javascript" charset="utf-8" src="https://changyan.itc.cn/js/lib/jquery.js"></script>
  <script type="text/javascript" charset="utf-8" src="https://changyan.sohu.com/js/changyan.labs.https.js?appid=cysIFYLzg"></script>
          <!--PC版-->
<div id="SOHUCS" sid="<?php echo $articles['id']; ?>"></div>
<script charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/changyan.js" ></script>
<script type="text/javascript">
window.changyan.api.config({
appid: 'cysIFYLzg',
conf: 'prod_d0e0a1cf4b75ce68b6e54a7943ef6bf0'
});
</script>
<div id="cyWallsplugin" role="cylabs" data-use="wallsplugin"></div>
<script type="text/javascript" charset="utf-8" src="http://changyan.itc.cn/js/??lib/jquery.js,changyan.labs.js?appid=cysIFYLzg"></script>
                            </div>
                            <div class="clear">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar">

  <script language="javascript" type="text/javascript">getDigg(382);</script>
<!-- 右侧 -->

         <div class="widget">

<div style="background: url('__INDEX__/images/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
</div>
<ul id="ulHot">
<?php if(is_array($hotArticles) || $hotArticles instanceof \think\Collection): $i = 0; $__LIST__ = $hotArticles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$articles): $mod = ($i % 2 );++$i;?>
<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
<div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="<?php echo url('article/index',array('artid'=>$articles['id'])); ?>" target="_blank"><img src="<?php echo $articles['thumb']; ?>" width="83" title="<?php echo $articles['title']; ?>" /></a></div>
<div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="<?php echo url('article/index',array('artid'=>$articles['id'])); ?>" target="_blank" title="<?php echo $articles['title']; ?>"><?php echo $articles['title']; ?></a></div>
</li>
<?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
      </div>
            
<div class="widget portrait">
    <div>
        <div class="textwidget">
            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1020733278&site=qq&menu=yes"><img src="__INDEX__/images/tg.jpg" alt="在线投稿" title="在线投稿" alt=""></a>       
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
    </div>
    <script type="text/javascript" src="__INDEX__/style/z700bike_global.js"></script>
    <script type="text/javascript" src="__INDEX__/style/z700bike_single.js"></script>
  
    <script type='text/javascript' src='/blog4./style/jquery.colorbox-min.js?ver=1.3.17.2'></script>


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
<script type="text/javascript" src="__INDEX__/style/z700bike_global.js">

    </script>
 <div id='content'>
</body>
</html>
