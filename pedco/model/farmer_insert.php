<?php 
require 'mainheader/dbcon.php';
//require_once('../mainheader/dbcon.php');

		//$id = $_POST['id'];
		$farmerid = $_POST['fid'];
		$first_name = $_POST['fname'];
		$middle_name = $_POST['mname'];
		$surname = $_POST['sname'];
		$dob = $_POST['dob'];
		$sex = $_POST['sex'];
		$address = $_POST['address'];
		$mob1 = $_POST['mob1'];
		$mob2 = $_POST['mob2'];
		$idtype =  $_POST['idtype'];
		$idnum = $_POST['idnum'];
		$district =  $_POST['district'];
		$community = $_POST['community'];


		$sql =$conn->prepare("insert into farmer ( fid, fname, mname, sname, dob, sex, address, $mob1 , $mob2, idtype, idnum, district, community) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

		
		$sql->bind_param("issssssiissss", $farmerid, $first_name, $middle_name, $surname, $dob, $sex, $address, $mob1, $mob2, $idtype, $idnum, $district, $community);

		$exe =$sql->execute();

		echo $exe;
		echo "Registration Successful";

		$sql->close();
		$conn->close();

?>