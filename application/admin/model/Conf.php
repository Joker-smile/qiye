<?php
namespace app\admin\model;
use think\Model;
class Conf extends Model
{
     public function getconf(){
        return $this::paginate(5,true);
    }
 }

