<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
class Common extends Controller
{
   public function __construct (){
    parent::__construct();
    if (!session('id') || !session('username')) {
        # code...
        $this->error('请您先登录系统！',url('login/index'));
    }

        $auth=new Auth();
        $request=Request::instance();
        $controller=$request->controller();
        $action=$request->action();
        $url=$controller.'/'.$action;
        $notCheck=array('Index/index','Admin/lst','Admin/logout');
        if (session('id')!==1) { 
          if(!in_array($url, $notCheck)){    
        		if(!$auth->check($url,session('id'))){
		    	$this->error('您没有足够权限，请与系统管理员联系！',url('index/index')); 
		       }
            }	
        }
     }
 }


