<?php
namespace app\admin\model;
use think\Model;
class AuthRule extends Model
{
 
 public  function authRuletree(){
   $authRules=$this->order('sort desc')->select();
   return $this->sort($authRules);

  }
 public function sort($data,$pid=0){
       static $arr=array();
       foreach ($data as $key => $value) {
         if ($value['pid']==$pid) {
           $value['dataid']=$this->getparentid($value['id']);//
           $arr[]=$value;
           $this->sort($data,$value['id']);
         }
       }
       return $arr;
   }
 public function getchildren($authRuleid){
    $authRules=$this->select();
    return $this->getchildrenid($authRules,$authRuleid);
   }
 public function getchildrenid($authRules,$authRuleid){
    static $arr=array();
    foreach ($authRules as $key => $value) {
      # code...
      if ($value['pid']==$authRuleid) {
        $arr[]=$value['id'];
        $this->getchildrenid($authRules,$value['id']);
      }
    }
    return $arr;
  }


//获取上级id
  public function getparentid($authRuleId){
        $AuthRuleRes=$this->select();
        return $this->_getparentid($AuthRuleRes,$authRuleId,True);
    }

    public function _getparentid($AuthRuleRes,$authRuleId,$clear=False){
        static $arr=array();
        if($clear){
        	$arr=array();
        }
        foreach ($AuthRuleRes as $k => $v) {
            if($v['id'] == $authRuleId){
                $arr[]=$v['id'];
                $this->_getparentid($AuthRuleRes,$v['pid'],False);
            }
        }
        asort($arr);
        $arrStr=implode('-', $arr);
        return $arrStr;
    }

 }

