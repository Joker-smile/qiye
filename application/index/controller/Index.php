<?php
namespace app\index\controller;
use app\index\model\Article;
use app\index\model\Cate;
class Index extends Common
{
    public function index()
    {
    $cate=new Cate();	
    //获取最新文章；	
    $articles=new Article();
    $getNewArticles=$articles->getNewArticles();
    //获取链接；
    $links=db('link')->order('sort desc')->select();
    //获取热门文章；
    $getHotIndexArticles=$articles->getIndexHotArticles();
    //获取推荐文章（轮播图文章）；
    $recommend=$articles->getRecArticles();
    //获取推荐栏目到主页；
    $getIndexRecommend=$cate->getIndexRecommend();
      $this->assign('getIndexRecommend',$getIndexRecommend);
      $this->assign('recommend',$recommend);
      $this->assign('indexHotArticles',$getHotIndexArticles);
      $this->assign('getNewArticles',$getNewArticles);
      $this->assign('link',$links);
        return view();
    }
}
