<?php
namespace app\index\controller;
use think\Controller;
class Common extends controller
{
   public function _initialize(){
  
        //网站配置项
    	$this->getConf();
        //网站栏目导航
        $this->getNavCates();
        //底部导航信息
        $cateM=new \app\index\model\Cate();
        $recBottom=$cateM->getBottomRecommend();
        $this->assign('recBottom',$recBottom);
   }
   public function getNavCates(){

   	$cates=db('cate')->where(array('pid'=>0))->order('sort desc')->select();
   	 foreach ($cates as $key => $value) {
   	 	$children=db('cate')->where(array('pid'=>$value['id']))->select();
   	 	 if ($children) {
   	 	 	$cates[$key]['children']=$children;
   	 	 }else{
   	 	 	$cates[$key]['children']=0;
   	 	 }
   	 	 $this->assign('cateres',$cates);

   	 }
  }
  public function getConf(){
        $conf=new \app\index\model\Conf();
        $_confres=$conf->getConf();
        $confres=array();
        foreach ($_confres as $k => $v) {
            $confres[$v['ename']]=$v['value'];
        }
        $this->assign('confs',$confres);
    }



  
}
