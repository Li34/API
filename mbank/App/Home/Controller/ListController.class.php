<?php  
namespace Home\Controller;
use Think\Controller;

class ListController extends Controller{
	public function index(){
		$Bill = M('Bill');
		$mBank = json_decode($_POST['mBank'],true);
		$where['date'] = array('like',$mBank['month'].'%'); 
		$billList = $Bill->where($where)->order('-date')->select();
		$totalPay = 0;
		$totalIncome = 0;

		for($i=0;$i<count($billList);$i++){
			if($billList[$i]['isincome']){
				$totalIncome += $billList[$i]['money'];
			}else{
				$totalPay += $billList[$i]['money'];
			}
		}
		$obj = array(
			'nowArr'=>$billList,
			'total'=>array(
					'pay'=>$totalPay,
					'income'=>$totalIncome
				)
			);
		
		// echo count($totalIncome);
		echo json_encode($obj);
	}

}



?>