<?php
namespace Home\Controller;
use Think\Controller;
//模块： login,check,checkout
class LoginController extends Controller {
    public function index(){
        //登录首页
        $this->display();
    }
    public function check(){
    	//验证
    	$user=M('user');
    	$code=$_POST["code"];
    	/*$_SESSION['test']="sdfsdafcxxxccxxx-".$code;
    	  var_dump(check_verify($code));
    	  $_SESSION['td']="secondeforTEST-".$code;
    	   dump($_SESSION);
     */
    	$username=$_POST['username'];
    	$password=md5($_POST['password']);
    	if(empty($username)&&empty($password)){
    		$this->error("用户名和密码不能为空");
    	}elseif(!check_verify($code)){
    		$this->error("验证码不正确");
    	}
        else{
    		$where="username='{$username}' and password='{$password}' and isadmin=1";
    			//echo $where;
    			$row=$user->where($where)->find();
    			if($row){
    				$_SESSION["admin_username"]=$username;
    				$_SESSION["admin_login"]=1;//快速判断
    				$this->success("登录成功",U("index/index"));
    			}else{
    				$this->error("用户信息有误，查找失败");
    			}
    	}
 
		  /*  if(!check_verify($code)){
			$this->error('验证码错误');
			}else{
				$where="username='{$_POST['username']}' and password='{$_POST['password']}' and isadmin=1";
    			echo $where;*/
    			//$user->where($where)->find();
				//}
		    		//$this->error("验证码有误！",U('index'));
    	//}else{
    		
   
    }
    public function logout(){
    	//注销
    }
    
    
   //生成验证码
    public function verify(){
   //配置修改
    	$config =    array(
    'fontSize'    =>    18,    // 验证码字体大小
    'length'      =>    3,     // 验证码位数
    	'imgaeW'=>  50,
    	'imageH'=>  35,
);
	    $Verify = new \Think\Verify($config);
	    $Verify->entry();
	   
    }
    
    //校对验证码
    // array('verify_code'=>'当前验证码的值','verify_time'=>'验证码生成的时间戳')

    
}