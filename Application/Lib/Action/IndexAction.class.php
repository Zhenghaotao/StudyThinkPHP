<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
        //echo "Hello World!!!";

        $m = M('User');
//        $arr=$m->select();
//        var_dump($arr);
//        $name="在搞thinkphp";
//        $arr = $m->find(2);
//        $arr = $m->where("id=2")->getField('username');
//        $this->assign('data',$arr );//把数据送到view上
//        $m->username='逗逗';//添加操作
//        $m->sex=1;
//        $m->add();
//        $m->delete(2);//删除
//        $data['id']=1; //更新
//        $data['username']='ruoshou';
//        $count=$m->where('id=1')->save($data);
//        echo 'count='.$count;
//        $m->where('id=4')->delete();
        $this->display();//转到 Index/index.html
    }

    public function show(){
        echo '你的名字是: '.$_GET['name'].'你的年龄是: '.$_GET['age'];//url:Index/show/name/tony/age/19
    }
}