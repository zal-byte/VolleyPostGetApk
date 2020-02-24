<?php


	$nama = $_POST["nama"];
	$umur = $_POST["umur"];
	$alamat = $_POST["alamat"];
	$sekolah = $_POST["sekolah"];
	$status = $_POST["status"];


	$query = "insert into volley (`nama`,`umur`,`alamat`,`sekolah`,`status`) values ('$nama','$umur','$alamat','$sekolah','$status')";

	$res = array();
	$res['hasil'] = array();
	$con = mysqli_connect("localhost","database","root","volley");
	if(!$con){
		echo "error";
	}
	$sql = mysqli_query($con, $query);
	if($sql){
		$re["status"] = "success";
		$re["code"] = "200";
		array_push($res['hasil'], $re);
		echo json_encode($res);
		mysqli_close($con);
	}else{
		$re["status"] = "error";
		$re["code"] = "0";
		array_push($res['hasil'], $re);
		echo json_encode($res);
		mysqli_close($con);
	}

?>