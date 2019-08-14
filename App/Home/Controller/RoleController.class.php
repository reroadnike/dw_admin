<?php
/*
**Author:lzp
**Time:2019-8-14
 */

namespace Home\Controller;
use Home\Controller\BaseController;

class RoleController extends BaseController {
	public function index() {
		if(IS_POST) {
			$r = file_get_contents('php://input');
			$r = explode('&',$r);
			foreach($r as $kk=>$vv) {
				$arr = explode('=',$vv);
				foreach($arr as $k=>$v) {
					if($k==0) {
						$key = $v;
					} else {
						$res[$key] = $v;
					}
				}
			}
            $page = $res['cPage'];
            if($page<=0) {
                $page = 1;
            }
            $pagenum = $res['pSize'];
            if($res['role_name']) {
                $map['role_name'] = array('like','%'.$res['role_name'].'%');
            }
            $count = D('Role')->count($map);
            $data = D('Role')->getAll($map,$field,$page,$pagenum);
            foreach ($data as $key => $value) {
            	$data[$key]['add_time'] = date('Y-m-d H:i:s',$value['add_time']);
            }
            $this->ajaxReturn(array('status'=>'success','data'=>$data,'totals'=>$count));
		}
		$this->display();
	}

	public function addRole() {
		if(IS_POST) {
			$rec = I('post.');
			$rec['add_time'] = time();
			$res = D('Role')->addRole($rec);
			if($res) {
				$result = array('err'=>0,'msg'=>'添加成功');
			} else {
				$result = array('err'=>1,'msg'=>'添加失败');
			}
			$this->ajaxReturn($result);
		}
		$this->display();
	}

	public function delRole() {
		if(IS_POST) {
			$id = I('post.id');
			$map['id'] = $id;
			$res = D('Role')->delRole($map);
			if($res) {
				$result = array('err'=>0,'msg'=>'删除成功');
			} else {
				$result = array('err'=>1,'msg'=>'删除失败');
			}
			$this->ajaxReturn($result);
		}
	}
}