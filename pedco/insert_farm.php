<?php  
include 'mainheader/dbcon.php';


if (isset($_POST['submit'])){

	if(!empty($_POST['fid']) && !empty($_POST['farmsize']) && !empty($_POST['plantpop']) && !empty($_POST['plantdistance']) && !empty($_POST['plantyear']) && !empty($_POST['service']) && !empty($_POST['supervisor'])){
		
		$fid = $_POST['fid'];
		$farmsize = $_POST['farmsize'];
		$plantpop = $_POST['plantpop'];
		$distance = $_POST['plantdistance'];
		$plantyear =  $_POST['plantyear'];
		$service = $_POST['service'];
		$supervisor= $_POST['supervisor'];
		$new_date = date("Y-m-d", strtotime($plantyear));


	$sql = mysqli_query($conn, "INSERT INTO farm VALUES('', '$form_code', '$farmsize', '$plantpop', '$distance', '$new_date', '$service', '$supervisor')");


		if($sql === FALSE){

			$unsuccessful= "Unsuccessful";

		}

		else{

			
			header("Location:add_farm.php");

			exit;
		}
	
	}


}



?>