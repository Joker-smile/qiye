<?php
namespace app\index\controller;
use app\index\model\Cate;
class Page extends Common
{
    public function index()
    {     

     // $cates=db('cate')->find(input('cateid'));
     // dump($cates);die;
   if(input('cateid')){
            $this->getPost(input('cateid'));
        }

       $this->getCate();
       return view();
   }

    public function getPost($cateid){

       $cates=new cate();
       $getParents=$cates->getParents($cateid);
       $this->assign('getParents',$getParents);
        
    }


    public function getCate(){
    	 $cates=db('cate')->find(input('cateid'));
    	 $this->assign('cates',$cates);
    }
}
