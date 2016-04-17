<?php  
namespace Home\Controller;
use Think\Controller;

class TokenController extends Controller{

	public function createToken(){
		echo sha1('123');
	}
} 
?>