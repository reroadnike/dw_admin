<?php
/*
**Author:lzp
**Time:2019-8-8
 */
namespace Home\Controller;
use Think\Controller;

class BaseController extends Controller {
	public function _initialize() {
		if(empty($_SESSION['admin'])){
                header("location:".U('Login/index'));
        }
        $controller = CONTROLLER_NAME;
        $action = ACTION_NAME;
        $this->assign('controller',$controller);
        $this->assign('action',$action);
	}

	public function _empty(){
        $this->display('error/404');
    }

}