<?php
namespace app\admin\validate;
use think\Validate;
class Admin extends Validate
{

    protected $rule=[
        'username'=>'unique:admin|require|max:25',
        'password'=>'require|min:4',
    ];


    protected $message=[
        'username.require'=>'管理员名称不得为空！',
        'username.unique'=>'管理员名称不得重复！',
        'password.require'=>'管理员密码不得为空！',
        'password.min'=>'密码不得少于4位！',
    ];

    protected $scene=[
        'add'=>['username','password'],
        'edit'=>['username','password'=>'min:4'],
    ];





    

    




   

	












}
