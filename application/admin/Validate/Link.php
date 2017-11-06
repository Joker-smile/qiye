<?php
namespace app\admin\validate;
use think\Validate;
class Link extends validate
{
    protected $rule = [
        'title'  =>  'unique:link|require|max:25',
        'desc'   =>  'require',
        'url'    =>  'require|url'
    ]; 

    protected $message  =   [
        'title.unique'  => '链接标题不得重复！',
        'title.require' => '链接名称不得为空！',
        'title.max'     => '链接名称最多不能超过25个字符',
        'desc.require'  => '描述不得为空！',
        'url.require'   => 'url不得为空',
    ]; 
     protected $scene=[
        'add'=>['title','url','desc'],
        'edit'=>['title','url'],
    ];
}
