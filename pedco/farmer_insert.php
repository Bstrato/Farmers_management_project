<?php 
require 'mainheader/dbcon.php';
//require_once('../mainheader/dbcon.php');

		$id = $_POST['id'];
		$farmerid = $_POST['fid'];
		$first_name = $_POST['fname'];
		$middle_name = $_POST['mname'];
		$surname = $_POST['sname'];
		$address = $_POST['address'];
		$mob1 = $_POST['mob1'];
		$mob2 = $_POST['mob2'];
		$idtype =  $_POST['idtype'];
		$idnum = $_POST['idnum'];
		$district =  $_POST['district'];
		$community = $_POST['community'];


		$sql = $con-> prepare("INSERT INTO farmer (id, fid, fname, mname, sname,address, pcontact, scontact, idtype, idnum, district, community) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

		
		$sql->bind_param("iissssiissss", $id, $farmerid, $first_name, $middle_name, $surname, $address, $mob1, $mob2, $idtype, $idnum, $district, $community);
		$exe =$sql->execute();

		echo $exe;
		echo "Registration Successful";

		$sql->close();
		$con->close();

?>