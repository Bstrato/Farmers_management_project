<?php 
session_start();
include 'mainheader/dbcon.php';
include 'idgenerate.php';


if (isset($_POST['submit'])){

	if(!empty($_POST['fid']) && !empty($_POST['fname']) && !empty($_POST['mname']) && !empty($_POST['sname']) && !empty($_POST['dob']) && !empty($_POST['sex']) && !empty($_POST['address']) && !empty($_POST['mob1']) && !empty($_POST['mob2']) && !empty($_POST['idtype']) && !empty($_POST['idnum']) && !empty($_POST['district']) && !empty($_POST['community'])){
		
		$fid = $_POST['fid'];
		$first_name = $_POST['fname'];
		$middle_name = $_POST['mname'];
		$surname = $_POST['sname'];
		$dob =  $_POST['dob'];
		$sex = $_POST['sex'];
		$address = $_POST['address'];
		$mob1 = $_POST['mob1'];
		$mob2 = $_POST['mob2'];
		$idtype =  $_POST['idtype'];
		$idnum = $_POST['idnum'];
		$district =  $_POST['district'];
		$community = $_POST['community'];
		$new_date = date("Y-m-d", strtotime($dob));

		//$sql = "INSERT INTO farmer (fname, mname, sname, dob, sex, address, pcontact, scontact, idtype, idnum, district,community) VALUES('$first_name', '$middle_name', '$surname', '$dob', '$sex', '$address', '$mob1', '$mob2', '$idtype', '$idnum', '$district', '$community')";

		//$run = mysqli_query($con, $sql) or die(mysqli_error());


		    $form_code = $fid;

    $checker=check_existence_code($form_code, $conn);

    while ($checker){

        $form_code=re_create_code($form_code);
        if(check_existence_code($form_code, $conn)){

            $checker=true;
        }else{
            $checker=false;

        }
    }



		$sql = mysqli_query($conn, "INSERT INTO farmer VALUES('', '$form_code', '$first_name', '$middle_name', '$surname', '$new_date', '$sex', '$address', '$mob1', '$mob2', '$idtype', '$idnum', '$district', '$community')");


		if($sql === FALSE){

			$unsuccessful= "Unsuccessful";

		}

		else{

			
			header("Location:add_farmer.php");

			exit;
		}
	
	}


}

?>




