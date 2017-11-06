<?php
namespace app\admin\model;
use think\Model;
class Admin extends Model
{
  
  public function addadmin($data){
  if(empty($data) || !is_array($data)){
        return false;
    }
 if($data['password']){
        $data['password']=md5($data['password']);
    }
    $adminData=array();
    $adminData['username']=$data['username'];
    $adminData['password']=$data['password'];
    if($this->save($adminData)){
        $groupAccess['uid']=$this->id;
        $groupAccess['group_id']=$data['group_id'];
        db('auth_group_access')->insert($groupAccess);
        return true;
    }else{
        return false;
    }
      
    }
    public function getadmin(){
        return $this::paginate(5,true);
    }

  public function deladmin($id){
    if ($this::destroy($id)) {
      return 1;
    }else{
      return 2;
    }
  }
  public function login($data){
   $admin=Admin::getByUsername($data['username']);
   if ($admin) {

   if ($admin['password']==md5($data['password'])){
     
     session('id',$admin['id']);
     session('username',$admin['username']);
     
     return 2;//用户存在且密码正确；

   }else{

     return 3;//用户名正确，密码不正确；
   }

   }else{

    return 1;//用户不存在；
   }
  }
 }

