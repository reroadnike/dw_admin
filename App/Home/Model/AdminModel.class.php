<?php
/*
**Author:lzp
**Time:2019-8-8
 */
namespace Home\Model;
use Think\Model\RelationModel;
class AdminModel extends RelationModel {

    //获取多条数据
    public function getAll($map,$field='*',$page=1,$pagenum=999999,$order='id asc') {
        $data = $this->where($map)->limit(($page-1)*$pagenum,$pagenum)->field($field)->order($order)->select();
        return $data;
    }

    //获取单条数据
    public function getOne($map){
        $res = $this->where($map)->find();
        return $res;
    }

    //计算总数
    public function count($map) {
        $res = M('Admin')->where($map)->count();
        return $res;
    }

    //更改
    public function update($map,$data) {
        $res = $this->where($map)->save($data);
        return $res;
    }


    //添加管理员
    public function addAdmin($data) {
        $res = $this->data($data)->add();
        return $res;
    }

    //删除
    public function delAdmin($map) {
        $res = $this->where($map)->delete();
        return $res;
    }

}