<?php  
namespace Home\Controller;
use Think\Controller;

class RegisterController extends Controller{
	private $__file_name = '';
	public function index(){
		$mBank = json_decode($_POST['mBank'],true);

		if(IS_POST){
			$User = M('M_user');
			if($_FILES['file']){
				//上传头像的时候
				$status = $this->upload();
				// $status = 1;
				if($status){
                    $mBank['head_pic'] = $this->__file_name;
                    $mBank['password'] = md5($mBank['password']);
					$result = $User->add($mBank);
                    if($result){
                        $mBank['user_id'] = $result;
						myjson(200,'success','register',$mBank);
					}else{
						myjson(500,'error',$_POST);
					}
				}else{
					myjson(501,'error-img','register');
				}
			}else{
				//没有上传头像的时候
                $mBank['head_pic'] = 'default';
                $mBank['password'] = md5($mBank['password']);
                $result = $User->add($mBank);
                if($result){
                    $mBank['user_id'] = $result;
					myjson(200,'success','register',$mBank);
				}else{
					myjson(500,'error',$_POST);
				}
			}
		}else{
			myjson(400,'error-get','register',[]);
		}
	}

	public function upload(){
		$upload = new \Think\Upload();//实例化上传类
		// $upload->maxSize = 3145728 ;// 设置附件上传大小
	    // $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	    $upload->rootPath = './uploads/'; // 设置附件上传根目录
        $upload->savePath = 'head_pic/'; // 设置附件上传（子）目录
        $upload->autoSub = false;
	    $upload->saveExt = 'png';

	    // 上传单个文件 
	    $info   =   $upload->uploadOne($_FILES['file']);
	    if(!$info) {// 上传错误提示错误信息
	        return false;
	    }else{// 上传成功 获取上传文件信息
	        $this->__file_name = $info['savename'];
	        return true;
	    }
	}

}
?>
