<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type:text/html;charset=UTF-8"); 
class RegisterController extends Controller {
	function register(){
        if (I('level')) {
            $level =I('level');
            
        }
        $this->assign('level',$level);
        $this->display();
    }
    function add(){
        
        if(empty(I('username'))) {
            $this->error('帐号错误！');
        }elseif (empty(I('password'))){
            $this->error('密码必须！');
        }
        $User = M('User');
        // 创建数据后写入到数据库
        $data['username'] = trim(I('username'));
        $data['password'] = trim(I('password'));
        $User->data($data)->add();

        $m = M('role');
        // 创建数据后写入到数据库
        $data['username'] = trim(I('username'));
        $data['role'] = trim(I('role'));
        $m->data($data)->add();
        $this->success(“注册成功”,"/kaohe",3);

    }
}