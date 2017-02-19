<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //将数据传递给首页
    	$cartoon=M('Cartoon');
    	//order id降序排列 ，先添加的排到后面
    	$rows=$cartoon->order('id desc')->select();
    	$this->assign('rows',$rows);
        $this->display();
    }
   
    //首页展示数据
   
}