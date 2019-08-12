<?php
namespace Buss\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo "新增了一个模块success!!!!!!!";
    }

    public function test() {
    	echo '测试跑通';
    }
}