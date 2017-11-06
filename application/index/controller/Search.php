<?php
namespace app\index\controller;
use app\index\model\Article;
use app\index\model\Cate;
class Search extends Common 
{
    public function index()
    {
       $article=new Article();
       $getSearchHotArticles=$article->getSearchHotArticles();

       $keywords=input('keywords');
       $serRes=db('article')->order('id desc')->where('title','like','%'.$keywords.'%')->paginate(1,false,$config = ['query'=>array('keywords'=>$keywords)]);;
       $page=$serRes->render();
       $this->assign('keywords',$keywords);
       $this->assign('hotArticles',$getSearchHotArticles);
       $this->assign('page',$page);
       $this->assign('serRes',$serRes); 
       return view();
      
    }

}
