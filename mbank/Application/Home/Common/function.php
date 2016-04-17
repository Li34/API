<?php
function myjson($code,$message,$resp,$data=array()){
		if(!is_numeric($code)) {
			return '';
		}

		$result = array(
			'code' => $code,
			'message' => $message,
			'resp' => $resp,
			'data' => $data
		);

		echo json_encode($result);
		exit;
	}

