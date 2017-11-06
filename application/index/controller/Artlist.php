<?php
namespace app\index\controller;
use app\index\model\Article;
use app\index\model\Cate;
class Artlist extends Common 
{
    public function index()
    {
       $article=new Article();
       
       $cateid=input('cateid');
       $res=$article->getAllArticles($cateid);
       $getHotArticles=$article->getHotArticles($cateid);
       $page=$res->render();
       $this->assign('hotArticles',$getHotArticles);
       $this->assign('page',$page);
       $this->assign('article',$res); 
        //当前位置
       if(input('cateid')){
            $this->getPost(input('cateid'));
        }
       return view();
      
    }
    public function getPost($cateid){

       $cates=new cate();
       $getParents=$cates->getParents($cateid);
       $this->assign('getParents',$getParents);
        
    }
}
