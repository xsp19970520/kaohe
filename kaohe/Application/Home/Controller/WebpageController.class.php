<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type:text/html;charset=UTF-8"); 
class WebpageController extends Controller {

    function webpage()
    {
        
        if (!I('level')&&!I('page')) {
            $page ='9999';
            $level = '9999';
        }else{
            if (I('level')<=session('level')) {
                $this->error("你权限不够,无法访问！");
            }else{
            $page =I('page');
            $level = I('level');
        }
        }


        $m = M('level');
        $condition['level'] = $level;
        $m = $m->where($condition)->field('role')->find(); 
        $role = $m['role'];


        $User = M('role'); // 实例化User对象
        $where['role'] = $role;
        $count = $User->where($where)->count();// 查询满足要求的总记录数
        $pageNumber = ceil($count/'5');
        $page = $page;

        // 进行分页数据查询
        $list = $User->where($where)->field('username,role')->limit(($page-1)*5,$page*5)->select();

        $this->assign('level',$level);
        $this->assign('page',$page);
        $this->assign('list',$list);// 赋值数据集
        $this->assign('pageNumber',$pageNumber);// 赋值分页输出
        $this->display();

    }
    function roleAdd(){
        if(I('action')=="add"){
            var_dump(I('name'));
            $m = M('level');
            $b['role']=I('name')-"1";
            $m = $m->where($b)->field('role')->find();
            $role=$m['role'];
            $i =M('role');
            $data['username'] = I('name');
            $data['role'] = $role;
            $i->data($data)->save();

            
        }else{
            echo "没有确定";
        }
    }
    function roleSubtract(){
        if(I('action')=="subtract"){
            $m = M('level');
            $b['role']=I('name')+"1";
            $m = $m->where($b)->field('role')->find();
            $role=$m['role'];
            $i =M('role');
            $data['username'] = I('name');
            $data['role'] = $role;
            $i->data($data)->save();
        }else{
            echo "没有确定";
        }
    }
}