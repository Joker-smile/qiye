<?php
namespace app\admin\controller;
use app\admin\model\Article as ArticleModel;
use app\admin\model\Cate as CateModel;
use app\admin\Controller\Common;
use think\Db;
class Article extends Common
{

 
    // 文章列表
   public function lst(){
        $article=db('article')->field('a.*,b.catename')->alias('a')->join('tp_cate b','a.cateid=b.id')->order('a.id desc')->paginate(10);
        $page=$article->render();
        $this->assign('page',$page);
        $this->assign('article',$article);
        return view();
   }  
 

   
   public function add(){
    
       if (request()->isPost()) { 
          $data=input('post.');
          $data['time']=time();
          $article=new ArticleModel();
          $validate=\think\Loader::Validate('Article');
          if (!$validate->scene('add')->check($data)) {
           $this->error($validate->getError());
           } 
           $res=$article->save($data);
           if ($res) {
               $this->success('添加文章成功！',url('article/lst'));
           }else{
               $this->error('添加文章失败！');
           }
           }
      $cate=new CateModel();
      $cates=$cate->catetree();
      $this->assign('cates',$cates);
      return view();

   } 



   public function edit(){
     if(request()->isPost()){
          $data=input('post.');
          $validate=\think\Loader::Validate('Article');
          if (!$validate->scene('edit')->check($data)) {
           $this->error($validate->getError());
           } 
            $article=new ArticleModel();
            $save=$article->update($data);
            if($save){
                $this->success('修改文章成功！',url('lst'));
            }else{
                $this->error('修改文章失败！');
            }
            return;
        }
        $cate=new CateModel();
        $cates=$cate->catetree();
        $article=db('article')->where(array('id'=>input('id')))->find();
        $this->assign(array(
            'cates'=>$cates,
            'article'=>$article,
            ));
        return view();
   }  

   public function del(){
    if (ArticleModel::destroy(input('id'))){

    $this->success("文章删除成功！",url('article/lst'));
    }else{
      $this->error('文章删除失败！');
    }
   
   }

   
}
