<?php

	$connect = mysqli_connect("localhost","database","root","volley");

	$query = "select * from volley";

	$res = array();
	$res["result"] = array();


	$sql = mysqli_query($connect, $query);
	if($sql){

		while($row = mysqli_fetch_array($sql)){

		$ko["response"] = "200";
		$ko["nama"] = $row["nama"];
		$ko["umur"] = $row["umur"];
		$ko["alamat"] = $row["alamat"];
		$ko["sekolah"] = $row["sekolah"];
		$ko["status"] = $row["status"];
		array_push($res["result"], $ko);
		}
		echo json_encode($res)."<br/>";
		mysqli_close($connect);
	
	}else{
		$ko["response"] = "error";
		array_push($res["result"], $ko);
		echo json_encode($res);
		mysqli_close($connect);
	}



?>