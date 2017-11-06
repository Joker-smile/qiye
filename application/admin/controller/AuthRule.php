<?php
namespace app\admin\controller;
use app\admin\model\AuthRule as AuthRuleModel;
use app\admin\Controller\Common;
class AuthRule extends Common
{
    //前置操作
    protected $beforeActionList = [
        // 'first',
        // 'second' =>  ['except'=>'hello'],
        'delsonauthRules'  =>  ['only'=>'del'],
    ];

    public function lst()
    {
     $authRule=new AuthRuleModel();
      if (request()->isPost()) {
         $data=input('post.');
         foreach ($data as $key => $value) {
             $authRule->update(['id'=>$key,'sort'=>$value]); 
        }     
         if ($authRule) {
                 $this->success('排序成功！',url('lst'));
             }
         return;
     }
       $authRules=$authRule->authRuletree();
        $this->assign('auth',$authRules);
        
        return view();
  }
 


   public function add(){
    $authRule=new AuthRuleModel();
       if (request()->isPost()) {
         $data=input('post.');
         $plevel=db('auth_rule')->where('id',$data['pid'])->field('level')->find();
         // dump($plevel);die;
         if ($plevel) {
           $data['level']=$plevel['level']+1;
         }else{
            $data['level']=0;
         }
          $result=db('auth_rule')->insert($data);
           if ($result) {
             $this->success('添加权限成功！',url('lst'));

           }else{
             $this->error('添加权限失败!');
           }
       }
        $authRules=$authRule->authRuletree();
        $this->assign('auth',$authRules);
      return view();
   } 




   public function edit(){
    $authRule=new AuthRuleModel();
     if(request()->isPost()){
            $data=input('post.');
            $plevel=db('auth_rule')->where('id',$data['pid'])->field('level')->find();
            if($plevel){
                $data['level']=$plevel['level']+1;
            }else{
               $data['level']=0; 
            }
            $save=$authRule->save($data,['id'=>input('id')]);
            if($save!==false){
                $this->success('修改权限成功！',url('lst'));
            }else{
                $this->error('修改权限失败！');
            }
            return;
        }

      $authRules=$authRule->authRuletree();
      $authRuletree=$authRule->find(input('id'));
        $this->assign('auths',$authRuletree);
        $this->assign('auth',$authRules);

    return view();
   }  

   public function del(){
    $result=db('auth_rule')->delete(input('id'));
    if ($result) {
      $this->success('删除权限成功！',url('lst'));
    }else{
      $this->error('删除权限失败！');
    }

   }
   //使用前置方法进行删除；
   public function delsonauthRules(){
    
      $authRule=new AuthRuleModel();
      $authRules=$authRule->getchildren(input('id'));
      if ($authRules) {
        db('auth_rule')->delete($authRules);
      }

   }
    // public function del(){
    //     $authRule=new AuthRuleModel();
    //     $authRule->getparentid(input('id'));
    //     $authRuleIds=$authRule->getchildren(input('id'));
    //     $authRuleIds[]=input('id');
    //     $del= AuthRuleModel::destroy($authRuleIds);
    //     if($del){
    //         $this->success('删除权限成功！',url('lst'));
    //     }else{
    //         $this->error('删除权限失败！');
    //     }
    // }

}
