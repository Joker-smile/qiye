<?php
namespace app\index\controller;
use app\index\model\Cate;
use app\index\model\Article as ArticleModel;
class Article extends Common
{
    public function index()
    {

   if(input('artid')){
            $articles=db('article')->field('cateid')->find(input('artid'));
            $cateid=$articles['cateid'];
            $this->getPost($cateid);
        }
    $artid=input('artid');
    db('article')->where(array('id'=>$artid))->setInc('click');
    // db('article')->where(array('id'=>$artid))->setInc('zan');
    $articles=db('article')->find($artid);
    $hotArticles=new ArticleModel();
    $getHotArticles=$hotArticles->getHotArticles($articles['cateid']);
    $this->assign('hotArticles',$getHotArticles);
    $this->assign('articles',$articles);

       return view();
   }

    public function getPost($cateid){

       $cates=new cate();
       $getParents=$cates->getParents($cateid);
       $this->assign('getParents',$getParents);
        
    }
  
}
