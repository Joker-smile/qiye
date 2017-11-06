<?php
namespace app\admin\validate;
use think\Validate;
class Conf extends validate
{
    protected $rule = [
        'cname'  =>  'unique:conf|require|max:60',
        'ename'  =>  'unique:conf|require|max:60',
        'type'   =>  'require',

    ]; 

    protected $message  =   [
        'cname.unique'  => '配置中文名称不得重复！',
        'cname.require' => '配置中文名称不得为空！',
        'ename.unique'  => '配置英文名称不得重复！',
        'ename.require' => '配置英文名称不得为空！',
        'type.require'  => '配置类型不得为空！'
    ]; 
     protected $scene=[
        'add'=>['cname','ename'],
    ];
}
