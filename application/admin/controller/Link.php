<?php
namespace app\admin\controller;
use app\admin\model\Link as LinkModel;
use app\admin\Controller\Common;
class Link extends Common
{
    public function lst()
    {
        $link=new LinkModel();
        if(request()->isPost()){
            $sorts=input('post.');
            foreach ($sorts as $key => $value) {
                $link->update(['id'=>$key,'sort'=>$value]);
            }
            $this->success('更新排序成功！',url('lst'));
            return;
        }
        $links=$link->order('sort desc')->paginate(3);
        $page=$links->render();
        $this->assign('page',$page);
        $this->assign('links',$links);
        return view();
  }
 
   public function add(){
       $link=new LinkModel();
       if (request()->isPost()) {
          $data=input('post.');
          $validate=\think\Loader::Validate('Link');
          if (!$validate->scene('add')->check($data)) {
           $this->error($validate->getError());
           } 

           $res=$link->save($data);
           if ($res) {
               $this->success('添加链接成功！',url('link/lst'));
           }else{
               $this->error('添加链接失败！');
           }
           }
      return view();
   } 

   public function edit(){
     $link=new LinkModel();
     if (request()->isPost()) {
     $data=input('post.');
          $validate=\think\Loader::Validate('Link');
          if (!$validate->scene('edit')->check($data)) {
           $this->error($validate->getError());
           } 
         $res=$link->save($data,['id'=>input('id')]);
          if ($res!==false) {
               $this->success('修改链接成功！',url('link/lst'));
           }else{
               $this->error('修改链接失败！');
           } 
     }
     $links=$link->find(input('id'));
     $this->assign('links',$links);

    return view();
   }  

   public function del(){
    
    $link=db('link')->delete(input('id'));
    if ($link) {
        $this->success('链接删除成功！',url('lst'));
    }else{
        $this->error('链接删除失败！');
    }
   }

}
