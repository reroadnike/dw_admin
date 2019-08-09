<?php
/*
**Author:lzp
**Time:2019-8-8
 */
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller {
	public function index() {
		$this->display();
	}

	public function checkLogin() {
		if(IS_POST) {
	        $rec = I('post.');
	        $map['user_name'] = $rec['user_name'];
        	$res = D('Admin')->getOne($map);
	        if(!$res){
	            $result = array('err'=>2,'msg'=>"账号错误");
	        }else{
	           if(md5($rec['password'].$res['salt']) == $res['password']){
	                $_SESSION['admin']['id'] = $res['id'];
	                $_SESSION['admin']['user_name'] = $res['user_name'];
	                $_SESSION['admin']['status'] = $res['status'];
	                $result = array('err'=>0,'msg'=>"登陆成功");
	           }else{
	                $result = array('err'=>1,'msg'=>"密码错误");
	           }
	        }
		}
	    $this->ajaxReturn($result);
	}


	public function outlogin(){
        session('[destroy]');
        header("location:".U('Login/index'));
    }


    public function checkPass() {
    	if(empty($_SESSION['admin'])){
                header("location:".U('Login/index'));
        }
        if(IS_POST) {
        	$rec = I('post.password');
            $salt = mt_rand(100000,999999);
            $password = md5($rec.$salt);
            $user_id = $_SESSION['admin']['id'];
            $data['id'] = $user_id;
            $data['password'] = $password;
            $data['salt'] = $salt;
            $info = D('Admin')->editAdmin($data);
            if($info) {
                session(null);
                $result = array('err'=>0,'msg'=>'修改成功，返回登录...');
            } else {
                $result = array('err'=>1,'msg'=>'密码修改失败');
            }
	    	$this->ajaxReturn($result);
        }
        $this->display();
    }
}