<?php
namespace app\admin\controller;
use app\admin\model\AuthGroup as AuthGroupModel;
use app\admin\model\AuthRule;
use app\admin\Controller\Common;
class AuthGroup extends Common
{
 
   public function lst(){
     
     $result=db('auth_group')->paginate(100);
     $page=$result->render();
     $this->assign('result',$result);
     $this->assign('page',$page);
    return view();
   }


   public function add(){
     if (request()->isPost()) {
        $data=input('post.');
        if($data['rules']){
                $data['rules']=implode(',', $data['rules']);
            }
        $result=db('auth_group')->insert($data);
        if ($result) {
             $this->success('添加用户组成功！',url('lst'));

        }else{
             $this->error('添加用户组失败！');
        }
     }
     $authGroupRes= new AuthRule();
     $authGroups=$authGroupRes->authRuletree();
     $this->assign('authGroups',$authGroups);
    return view();
   }



   public function edit(){
     $auth=new AuthGroupModel();
     if (request()->isPost()) {
       $data=input('post.');
       if($data['rules']){
                $data['rules']=implode(',', $data['rules']);
            }
       $auths=$auth->save($data,['id'=>input('id')]);
       if ($auths) {
         $this->success('修改用户组成功！',url('lst'));
       }else {
         $this->error('修改用户组失败！');
       }
     }
     $result=$auth->find(input('id'));
     $this->assign('result',$result);
     $authGroupRes= new AuthRule();
     $authGroups=$authGroupRes->authRuletree();
     $this->assign('authGroups',$authGroups);

    return view();
   }



   public function del(){
    $result=db('auth_group')->delete(input('id'));
    if ($result) {
      $this->success('删除用户组成功！',url('lst'));
    }else{
      $this->error('删除用户组失败！');
    }
   }
}
