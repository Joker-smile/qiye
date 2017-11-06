<?php
namespace app\admin\controller;
use app\admin\model\Admin;
use think\Controller;
class Login extends Controller 
{
    public function index(){
     if (request()->isPost()) {
        // $this->check(input('code'));
        $code=input('code');
        $this->check($code);
        $admin=new Admin();
        $num=$admin->login(input('post.'));
       if ($num=='1') {
           $this->error('用户名或密码不正确！请重新输入!');
       }elseif ($num=='2') {
           $this->success('登陆成功！',url('index/index'));
       }else{
           $this->error('用户名或密码不正确！请重新输入!');
       }
     }
     return view();   
    }

    public function check($code='')
    {
        $captcha = new \think\captcha\Captcha();
        if (!$captcha->check($code)) {
            $this->error('验证码错误');
        } else {
            return true;
        }
    }

    
}
