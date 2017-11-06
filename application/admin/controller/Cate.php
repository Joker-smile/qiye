<?php
namespace app\admin\controller;
use app\admin\model\Cate as CateModel;
use app\admin\model\Article as ArticleModel;
use app\admin\Controller\Common;
class Cate extends Common
{
    //前置操作
    protected $beforeActionList = [
        // 'first',
        // 'second' =>  ['except'=>'hello'],
        'delsoncate'  =>  ['only'=>'del'],
    ];
 
    // 栏目列表
   public function lst(){
     $cate=new CateModel();
     if (request()->isPost()) {
         $data=input('post.');
         foreach ($data as $key => $value) {
             $cate->update(['id'=>$key,'sort'=>$value]); 
        }     
         if ($cate) {
                 $this->success('排序成功！',url('lst'));
             }
         return;
     }
     $cates=$cate->catetree();
     $this->assign('cates',$cates);

    return view();
   }  
 
   public function add(){
       $cate=new CateModel();
       if (request()->isPost()) {
          $data=input('post.');
          $validate=\think\Loader::Validate('Cate');
          if (!$validate->scene('add')->check($data)) {
           $this->error($validate->getError());
           } 
           $res=$cate->save($data);

           if ($res) {
               $this->success('添加栏目成功！',url('cate/lst'));
           }else{
               $this->error('添加栏目失败！');
           }
           }

      $cates=$cate->catetree();
      $this->assign('cates',$cates);
      return view();
   } 

   public function edit(){
     $cate=new CateModel();
     if (request()->isPost()) {
        $data=input('post.');
          // $validate=\think\Loader::Validate('Cate');
          // if (!$validate->scene('edit')->check($data)) {
          //  $this->error($validate->getError());
          //  } 
         $res=$cate->update($data);
          if ($res) {
               $this->success('修改栏目成功！',url('cate/lst'));
           }else{
               $this->error('修改栏目失败！');
           } 
     }
     $cateres=$cate->find(input('id'));
     $cates=$cate->catetree();
     $this->assign(array(
        'cates'=>$cates,
        'cateres'=>$cateres
        ));

    return view();
   }  

   public function del(){
    
    $cate=db('cate')->delete(input('id'));
    if ($cate) {
        $this->success('栏目删除成功！',url('lst'));
    }else{
        $this->error('栏目删除失败！');
    }
   }

   public function delsoncate(){
      // echo "111"; die;
      // echo input('id');die;判断是否可以接收到id
      $cateid=input('id');//要删除的id；
      $cate=new CateModel();
      $sonids=$cate->getchildren($cateid);
      $allcateid=$sonids;
      $allcateid[]=$cateid;
      foreach ($allcateid as $key => $value) {
          $article=new ArticleModel;
          $article->where(array('cateid'=>$value))->delete();
      }
      // dump($sonids);die;
      if ($sonids) {
          db('cate')->delete($sonids);
      }
   }
}
  