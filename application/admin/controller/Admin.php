<?php
namespace app\admin\controller;
use app\admin\model\Admin as AdminModel;
use app\admin\Controller\Common;
use think\Db;
class Admin extends Common
{
       public function lst()
    {   $auth=new Auth();
        $admin=new AdminModel();
        $adminres=$admin->getadmin();
        foreach ($adminres as $k => $v) {
            $_groupTitle=$auth->getGroups($v['id']);
            // dump($_groupTitle);die;
            $groupTitle=$_groupTitle[0]['title'];
            $v['groupTitle']=$groupTitle;
        }
        $this->assign('adminres',$adminres);
        return view();
  }


    
    
     public function add()
    {

    	if (request()->isPost()) {
    		# code...
    		// $result=db('admin')->insert(input('post.'));
    		//$result=Db::table('tp_admin')->insert(input('post.'));
          $data=input('post.');
          $validate=\think\Loader::Validate('Admin');
          if (!$validate->scene('add')->check($data)) {
           $this->error($validate->getError());
           } 
    		$admin=new AdminModel();
    		$result=$admin->addadmin($data);
    	    if ($result) {
    	    	$this->success('添加管理员成功！',url('lst'));
    	    }else{
    	    	$this->error('添加管理员失败！');
    	    }
    	    return;
    	}
        $authGroups=db('auth_group')->select();
        $this->assign('authGroups',$authGroups);
        return view();
    }

     public function edit($id)

    {     

      $admin=db('admin')->field('id,username,password')->find($id);
    if (request()->isPost()) {

    	$data=input('post.');
          $validate=\think\Loader::Validate('Admin');
          if (!$validate->scene('edit')->check($data)) {
           $this->error($validate->getError());
           } 
    	if (!$data['username']) {
    		$this->error('管理员名称不得为空！');
    	}
    	if (!$data['password']) {
    		$data['password']=$admin['password'];
    	}else{
    		$data['password']=md5($data['password']);
    	}
    	// $res=db('admin')->update($data);
    	$admins=new AdminModel();
    	$res=$admins->save(['username'=>$data['username'],'password'=>$data['password']],['id'=>$data['id']]);
      db('auth_group_access')->where(array('uid'=>$data['id']))->update(['group_id'=>$data['group_id']]);
    	if ($res!==false) {
    		$this->success('管理员修改成功！',url('lst'));
    	}else{
    		$this->error('管理员修改失败！');
    	}
    	if (!$admnin) {
    		$this->error('该管理员不存在！');
    	}
    }   
        $authGroupAccess=db('auth_group_access')->where(array('uid'=>$id))->find();
        $authGroups=db('auth_group')->select();
        $this->assign('groupId',$authGroupAccess['group_id']);
        $this->assign('authGroups',$authGroups);
        $this->assign('admin',$admin);
        return view();
    }

    public function del($id){
     
     $admin=new AdminModel();
     $result=$admin->deladmin($id);
     if ($result=='1') {
         # code...
         $this->success('管理员删除成功！',url('lst'));
     }else{
        $this->error('管理员删除失败！');
     }
    }
  public function logout(){
    session(null);
    $this->success('退出系统成功！',url('login/index'));
  }



}
