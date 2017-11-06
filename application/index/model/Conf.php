<?php
namespace app\index\model;
use think\Model;
class Conf extends Model
{
     public function getconf(){
        $conf=$this::field('ename,value')->select();
        return $conf;
    }
 }

