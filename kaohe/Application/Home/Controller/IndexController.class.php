<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type:text/html;charset=UTF-8"); 
class IndexController extends Controller {
	function index(){
		session_unset();
		session_destroy();
        $this->display();

    }
    function login(){
        if(empty(I('username'))) {
        	$this->error('帐号错误！');
        }elseif (empty(I('password'))){
            $this->error('密码必须！');
        }
        $m=M('user');
		$username = trim(I('username'));
        $condition['username'] = $username;
        // 把查询条件传入查询方法
        $User = $m->where($condition)->find(); 
        $password = $User['password'];
        $db=M('role');
        $dbrole = $db->where($condition)->find();
        $role = $dbrole['role'];

        $data=M('level');
        $where['role'] = $role;
        $User = $data->where($where)->find();
        $level = $User['level'];
        if($password!=I('password')){
            $this->error('账号密码错误!');
        }else{
        	$_SESSION['username']=$username;
	        $_SESSION['level']=$level;
	        
	        $this->redirect('Webpage/webpage');
	    }
	}
}