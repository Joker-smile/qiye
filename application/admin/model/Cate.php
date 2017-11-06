<?php
namespace app\admin\model;
use think\Model;
class Cate extends Model
{
  public  function catetree(){
   $cates=$this->order('sort desc')->select();
   return $this->sort($cates);

  }
   public function sort($data,$pid=0,$level=0){
       static $arr=array();
       foreach ($data as $key => $value) {
         if ($value['pid']==$pid) {
           $value['level']=$level;
           $arr[]=$value;
           $this->sort($data,$value['id'],$level+1);
         }
       }
       return $arr;
       return $level;
   }
   public function getchildren($cateid){
    $cates=$this->select();
    return $this->getchildrenid($cates,$cateid);
   }
  public function getchildrenid($cates,$cateid){
    static $arr=array();
    foreach ($cates as $key => $value) {
      # code...
      if ($value['pid']==$cateid) {
        $arr[]=$value['id'];
        $this->getchildrenid($cates,$value['id']);
      }
    }
    return $arr;
  }
 }

