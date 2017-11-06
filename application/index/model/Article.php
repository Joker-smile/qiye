<?php
namespace app\index\model;
use app\index\model\Cate;
use think\Model;
class Article extends Model
{
     public function getAllArticles($cateid){
        $cate=new Cate();
        $allCateID=$cate->getchildrenid($cateid);
        $artRes=db('article')->where("cateid IN($allCateID)")->order('id desc')->paginate(8);
        return $artRes;
    }
    public function getHotArticles($cateid){
        $cate=new Cate();
        $allCateID=$cate->getchildrenid($cateid);
        $artHot=db('article')->where("cateid IN($allCateID)")->order('click desc')->limit(5)->select();
        return $artHot;
    }


    public function getSearchHotArticles(){
       $artRes=db('article')->order('click desc')->limit(5)->select();
        return $artRes; 
    }

    public function getNewArticles(){
    	$articles=db('article')->field('a.id,a.title,a.thumb,a.desc,a.time,a.zan,a.click,b.catename')->alias('a')->join('tp_cate b','a.cateid=b.id')->order('a.id desc')->limit(10)->select();
    	return $articles;
    }

    public function getIndexHotArticles(){
    	$hotArticles=db('article')->field('id,title,thumb')->order('click desc')->limit(5)->select();
    	return $hotArticles;
    }

    public function getRecArticles(){
    	$result=$this->where('recommend','=',1)->field('id,title,thumb')->order('id desc')->limit(4)->select();
    	return $result;
    }
 }

 