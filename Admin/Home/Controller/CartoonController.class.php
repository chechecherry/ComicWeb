<?php
namespace Home\Controller;
class CartoonController extends AclController {
    public function add(){
        $this->display();
    }
    //添加卡通内容
    public function insert(){
    $cartoon=M('Cartoon');
    $cartoon->create();
    $cartoon->content=htmlspecialchars($_POST['content']);
    $cartoon->time=date("Y-m-d h:m:s");
    if($cartoon->add()){
    //echo $cartoon->getLastSql();
    	$this->success('发布成功',U(add));
    }
    }
    //查看卡通内容
    public function listAll(){
    	$cartoon=M('Cartoon');
    	$rows=$cartoon->select();
        $this->assign(rows,$rows);
        $this->display();
    	
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}