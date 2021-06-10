<?php
	session_start();
	date_default_timezone_set("Asia/Jakarta");

	require_once('../../requires/config.php');
	require_once('../../requires/fungsi.php');

	if($_POST["id"]) {

		$custid = $_POST["id"];

			$conn2 = mysqli_connect('localhost','root','root','poltek');
			$result = mysqli_query($conn2,"select * from customers where cust_id = $custid;");
			if(!$result){
				die();
				echo 'noresult';
			}else{
				$jumrec=mysqli_num_rows($result);
			}
			

			if($jumrec>0){
				$record = mysqli_fetch_array($result);
				$arr = array('id' => $record["cust_id"],
							 'nm' => $record["cust_name"],
							 'addr' => $record["cust_addr"],
							 'phone' => $record["cust_phone"],
							 'city' => $record["cust_city"]
							 );
			}
			else{
				$arr = array('id' => '0',
							 'nm' => '',
							 'addr' => '',
							 'phone' => '',
							 'city' => ''
							 );
			}

			echo json_encode( $arr );


	}
?>
