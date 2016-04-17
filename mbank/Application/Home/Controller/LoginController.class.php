<?php  
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller{

	public function index(){
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