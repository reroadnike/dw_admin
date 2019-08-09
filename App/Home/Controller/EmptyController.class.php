<?php
/*
**Author:lzp
**Time:2019-8-9
 */
namespace Home\Controller;
use Home\Controller\BaseController;

class EmptyController extends BaseController {
	public function _empty() {
		$this->errorEmpty();
	}

	protected function errorEmpty() {
		$this->display('error/404');
	}
}