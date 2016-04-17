<?php  
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller{

	public function index(){
		$m_bank = json_decode($_POST['mBank'],true);
		if(IS_POST){
			$tb_user = M('M_user');
			$where['username'] = $m_bank['username'];
            $user = $tb_user->where($where)->select();
			if($user[0]['password']==$m_bank['password']){
				myjson(200,'success','login',$user[0]);
            }else{
				myjson(500,'密码错误','login',$user[0]);
			}

		}else{
			myjson(500,'error-get','login');
		}
		$array = array(
			'data'=>array(
				'id'=>1,
				'name'=>'jack'),
			'msg'=>'login'
			);
		$this->ajaxReturn($array);
	}
}

?>
