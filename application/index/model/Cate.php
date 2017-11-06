<?php
namespace app\index\model;
use think\Model;
class Cate  extends Model
{

   public function getchildrenid($cateid){
        $cateres=$this->select();
        $arr=$this->_getchildrenid($cateres,$cateid);
        $arr[]=$cateid;
        $strId=implode(',', $arr);
        return $strId;
    }

    public function _getchildrenid($cateres,$cateid){
        static $arr=array();
        foreach ($cateres as $k => $v) {
            if($v['pid'] == $cateid){
                $arr[]=$v['id'];
                $this->_getchildrenid($cateres,$v['id']);
            }
        }

        return $arr;
    }
    
    public function getParents($cateid){
        $cateres=$this->field('id,pid,catename')->select();
        $cates=db('cate')->field('id,pid,catename')->find($cateid);
        $pid=$cates['pid'];
        if ($pid) {
      
          $arr=$this->_getParents($cateres,$pid);
        }
        $arr[]=$cates;
        return $arr;
    }

    public function _getParents($cateres,$pid){
        static $arr=array();
        foreach ($cateres as $k => $v) {
            if($v['id'] == $pid){
                $arr[]=$v;
                $this->_getchildrenid($cateres,$v['pid']);
            }
        }

        return $arr;
    }

    public function getIndexRecommend(){
      $result=$this->where('rec_index','=',1)->order('id desc')->select();
      return $result;
    }
    public function getBottomRecommend(){
      $result=$this->where('rec_bottom','=',1)->order('id desc')->select();
      return $result;
    }

    //     获取栏目；
    //     public function getCateInfo($cateid){
    //     $cateInfo=$this->field('catename,keywords,desc')->find($cateid);
    //     return $cateInfo;
    // }
 }

