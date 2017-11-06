<?php
namespace app\admin\controller;
use app\admin\model\Conf as ConfModel;
use app\admin\Controller\Common;
class Conf extends Common
{
    public function lst()
    {   
      $conf=new ConfModel();
     if (request()->isPost()) {
         $data=input('post.');
         foreach ($data as $key => $value) {
             $conf->update(['id'=>$key,'sort'=>$value]); 
        }     
         if ($conf) {
                 $this->success('排序成功！',url('lst'));
             }
         return;
     }
        $res=$conf->order('sort desc')->paginate(4);
        $page=$res->render();
        $this->assign('conf',$res);
        $this->assign('page',$page);    
        return view();
  }
 
   public function add(){
      if (request()->isPost()) {
       $data=input('post.');
       $conf=new ConfModel();
       $validate=\think\Loader::Validate('Conf');
        if (!$validate->scene('add')->check($data)) {
          $this->error($validate->getError());
           } 
           if($data['values']){
                $data['values']=str_replace('，', ',', $data['values']);
            }
           $res=$conf->save($data);
       if ($res) {
         $this->success('添加配置成功！',url('lst'));

       }else{
         $this->error('添加配置失败！');
       }
      }

      return view();
   } 

   public function edit(){
    $conf=new confModel();
     if (request()->isPost()) {
     $data=input('post.');
          // $validate=\think\Loader::Validate('Conf');
          // if (!$validate->check($data)) {
          //  $this->error($validate->getError());
          //  } 
           if($data['values']){
                $data['values']=str_replace('，', ',', $data['values']);
            }
         $res=$conf->save($data,['id'=>input('id')]);
          if ($res!==false) {
               $this->success('修改配置成功！',url('conf/lst'));
           }else{
               $this->error('修改配置失败！');
           } 
     }
     $confs=$conf->find(input('id'));
     $this->assign('conf',$confs);

    return view();
   }  

   public function del(){
    $conf=db('conf')->delete(input('id'));
    if ($conf) {
        $this->success('配置删除成功！',url('lst'));
    }else{
        $this->error('配置删除失败！');
    }
   }
   public function conf(){
    if (request()->isPost()) {
      $data=input('post.');
      //将二维数组拆分为一维数组；
      $confarr=db('conf')->field('ename')->select();
      $_confarr=array();
      foreach ($confarr as $key => $value) {
        $_confarr[]=$value['ename'];
      }
      //将表单提交过来的数据分离出ename；
      $formarr=array();
      foreach ($data as $key => $value) {
      $formarr[]=$key;
      }
      //检查表单提交过来的数据有没有在$_confarr中；
      $checkarr=array();
      foreach ($_confarr as $key => $value) {
       if (!in_array($value,$formarr)) {
         $checkarr[]=$value;
       }
      }
      // dump($checkarr);die;
     //对复选框进行修改；
      if ($checkarr) {
        foreach ($checkarr as $key => $value) {
          confModel::where('ename',$value)->update(['value'=>'']);
        }
        
      }

      if ($data) {
        foreach ($data as $key => $value) {
           confModel::where('ename',$key)->update(['value'=>$value]);
        }
        $this->success('修改配置成功！',url('conf')); 
      }
    }
    $conf=ConfModel::order('sort desc')->select();
    $this->assign('conf',$conf);    
    return view();
   }

}
