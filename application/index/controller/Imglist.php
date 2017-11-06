<?php
namespace app\index\controller;
use app\index\model\Cate;
use app\index\model\Article;
class Imglist extends Common
{
    public function index()
    {
    $cateid=input('cateid');
    $article=new Article();
    $articles=$article->getAllArticles($cateid);
    $page=$articles->render();
    $this->assign('page',$page);
    $this->assign('articles',$articles);
       if($cateid){
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
