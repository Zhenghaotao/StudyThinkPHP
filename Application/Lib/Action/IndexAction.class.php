<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
        //echo "Hello World!!!";
        $name="在搞thinkphp";
        $this->assign('data',$name);//把数据送到view上
        $this->display();//转到 Index/index.html
    }

    public function show(){
        echo '你的名字是: '.$_GET['name'].'你的年龄是: '.$_GET['age'];//url:Index/show/name/tony/age/19
    }
}