<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\phpStudy\WWW\qiye\public/../application/admin\view\login\index.html";i:1491812241;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>管理员登录</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__ADMIN__/style/bootstrap.css" rel="stylesheet">
    <link href="__ADMIN__/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="__ADMIN__/style/beyond.css" rel="stylesheet">
    <link href="__ADMIN__/style/demo.css" rel="stylesheet">
    <link href="__ADMIN__/style/animate.css" rel="stylesheet">
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <form action="" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">SIGN IN</div>
                <div class="loginbox-textbox">
                    <input value="admin" class="form-control" placeholder="username" name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="password" name="password" type="password">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" style="width:100px; height:37px;margin: 2px 0px 10px 0px; float:left;" name="code" type="text">
                    <img src="<?php echo captcha_src(); ?>" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random();" width="100" style="float:left; cursor:pointer;margin-left: 15px;height: 37px;margin-top: 2px;" alt="captcha" />
                </div>
                <div class="loginbox-submit" >
                    <input class="btn btn-primary btn-block" value="Login" style="margin-top: inherit;" type="submit">
                </div>
            
            </div>
                <div class="logobox">
                    <p class="text-center" style="padding-top:10px ">后台管理系统</p>
                </div>
        </form>
    </div>
    <!--Basic Scripts-->
    <script src="__ADMIN__/style/jquery.js"></script>
    <script src="__ADMIN__/style/bootstrap.js"></script>
    <script src="__ADMIN__/style/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="__ADMIN__/style/beyond.js"></script>




</body><!--Body Ends--></html>