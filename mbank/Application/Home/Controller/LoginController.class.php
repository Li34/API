<?php  
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller{

	public function index(){
		$m_bank = json_decode($_POST['mBank'],true);
		if(IS_POST){
			$tb_user = M('M_user');
			$where['username'] = $m_bank['username'];
            $user = $tb_user->where($where)->find();
            if($user){
            	if($user['password']==$m_bank['password']){
					myjson(200,'success','login',$user);
	            }else{
					myjson(1001,'密码错误','login',$user);
				}
            }else if($user==null){
            	myjson(1002,'用户不存在','login');
            }else{
            	myjson(1003,'数据库错误','login');
            }
			
		}else{
			myjson(500,'error-get','登录');
		}
	}
}

?>
