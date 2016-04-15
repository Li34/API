<?php  
namespace Home\Controller;
use Think\Controller;

class SyncController extends Controller{
	public function index(){
		$Bill = M('Bill');
		$billList = json_decode($_POST['mBank'],true);
		if(is_null($billList)){
			echo "null";
		}
		$idList = array();
		for ($i=0; $i < count($billList); $i++) { 
			$result = $Bill->add($billList[$i]);

			if($result){
				$id = $billList[$i]['bill_id'];
				array_push($idList,$id);
			}
		}

		// echo $this->ajaxReturn($idList);
		echo json_encode($idList);
	}

}



?>