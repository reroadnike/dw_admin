<?php
/*
**Author:lzp
**Time:2019-8-9
 */
namespace Home\Controller;
use Home\Controller\BaseController;

class AdminController extends BaseController {
	public function index() {
		if(IS_POST) {
            $ad = file_get_contents('php://input');
            $ad = explode('&',$ad);
            foreach($ad as $key => $value) {
                $arr[] = explode('=',$value);
                 foreach ($arr as $ke => $val) {
                     foreach ($val as $k => $v) {
                         if($k==0) {
                            $kk = $v;
                         } else {
                            $res[$kk] = $v;
                         }
                     }
                 }
            }
            $page = $res['cPage'];
            if($page<=0) {
                $page = 1;
            }
            $pagenum = $res['pSize'];
            if($res['user_name']) {
                $map['user_name'] = array('like','%'.$res['user_name'].'%');
            }
            $count = D('Admin')->count($map);
            $data = D('Admin')->getAll($map,$field,$page,$pagenum);
            foreach($data as $k => $v) {
                $data[$k]['add_time'] = date('Y-m-d H:i:s',$v['add_time']);
            }
            $this->ajaxReturn(array('status'=>'success','data'=>$data,'totals'=>$count));
		} else {
			$this->display();
		}
		
	}

	//修改状态禁用
	public function changeStatus() {
		if(IS_POST) {
            $id = I('post.id');
            $status = I('post.status');
            $map['id'] = $id;
            $data['status'] = $status;
            $res = D('Admin')->update($map,$data);
            if($res) {
                $data = array('err'=>0,'msg'=>"修改状态成功");
            } else {
                $data = array('err'=>1,'msg'=>"修改状态失败");
            }
            $this->ajaxReturn($data);
        }
	}


	//添加管理员
	public function addAdmin() {
		if(IS_POST) {
			$data['user_name'] = I('post.user_name');
			$data['salt'] = mt_rand(100000,999999);
			$data['password'] = md5(md5(123456).$data['salt']);
			$data['add_time'] = time();
			$res = D('Admin')->addAdmin($data);
			if($res) {
				$result = array('err'=>0,'msg'=>'管理员初始化成功');
			} else {
				$result = array('err'=>1,'msg'=>'添加失败');
			}
			$this->ajaxReturn($result);
		}
		$this->display();
	}


	//删除
	public function delAdmin() {
		if(IS_POST) {
			$id = I('post.id');
			$map['id'] = $id;
			$res = D('Admin')->delAdmin($map);
			if($res) {
				$result = array('err'=>0,'msg'=>'删除成功');
			} else {
				$result = array('err'=>1,'msg'=>'删除失败');
			}
			$this->ajaxReturn($result);
		}

	}

}