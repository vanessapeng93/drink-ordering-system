<?php

	$connect = mysqli_connect("localhost", "root", "", "test");
	$res = array();
	$id = $_POST['order_id'];

	

	$sql = "UPDATE `orders` SET `paid`= 1 WHERE `id`='$id'";	

		
		if (mysqli_query($connect, $sql)) {
			$res['status'] = 'success';
		    $res['msg']    = 'Paid successful';
		} else {
		
			$res['status'] = 'error';
		    $res['msg']    = 'Paid Failed';
		}
		

	echo json_encode($res);	


?>