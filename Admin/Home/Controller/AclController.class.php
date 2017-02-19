<?php
namespace Home\Controller;
use Think\Controller;
//权限设置
class AclController extends Controller {
    public function _initialize(){
    	if($_SESSION["admin_login"]!=1){
    		$this->error('未登录',U('Login/index'));
    		exit;
    	}
    }
}
