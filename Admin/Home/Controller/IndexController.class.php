<?php
namespace Home\Controller;
//后台首页展示
class IndexController extends AclController {
    public function index(){
        $this->display();
    }
    
}