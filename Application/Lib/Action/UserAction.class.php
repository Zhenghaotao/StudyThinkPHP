<?php

    class UserAction extends Action{
        public function index(){
            $m = M('User')->select();
//            var_dump($m);
            $this->assign(data,$m);
            $this->display();
        }
        public function del(){
            $m=M('User');
            $id=$_GET['id'];
            $count=$m->delete($id);
            if($count > 0){
                $this->success('数据删除成功');
            } else {
                $this->error('数据删除失败');
            }
        }
        public function modify(){
            $m=M('User');
            $id=$_GET['id'];
            $value=$m->where('id='.$id)->find();
            $this->assign(data,$value);
            $this->display();
        }

        public function update(){
            $m = M('User');
            $data['id']=$_POST['id'];
            $data['username']=$_POST['username'];
            $data['sex']=$_POST['sex'];
            $count = $m->save($data);
            if($count > 0){
                $this->redirect('index');
            } else {
                $this->error('修改失败');
            }
        }

        /**
         * 添加页面
         */
        public function add(){
            $this->display();
        }

        /**
         * 添加用户
         */
        public function create(){
            $m = M('User');
            $username=$_POST['username'];
            $sex = $_POST['sex'];
            $m->username=$username;
            $m->sex=$sex;
            $count = $m->add();
            if($count > 0){
                $this->redirect('index');
            } else {
                $this->error('添加失败!');
            }
        }


    }



?>


