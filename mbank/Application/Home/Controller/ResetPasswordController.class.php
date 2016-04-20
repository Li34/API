<?php
namespace Home\Controller;
use Think\Controller;

class ResetPasswordController extends Controller{

	public function index(){
		$m_bank = json_decode($_POST['mBank'],true);
		if(IS_POST){
			$tb_user = M('M_user');
			$where['user_id'] = $m_bank['user_id']; 
			$user = $tb_user->where($where)->find();
			if($user){
				if($user['password'] == $m_bank['old_pwd']){
					$update['password'] = $m_bank['new_pwd']; 
					$result = $tb_user->save($update);
					if($result==1){
						myjson(200,'success','resetpassword');
					}else{
						myjson(1004,'数据库更新错误','resetpassword');
					}
				}else{
					myjson(1005,'密码错误','resetpassword');
				}
			}else{
				myjson(1003,'数据库错误','resetpassword');
			}
		}else{
			myjson(500,'error-get','resetpassword');
		}
	}
}