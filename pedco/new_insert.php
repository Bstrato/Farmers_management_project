<?php include 'new_conn.php'; ?>


<?php
// create a variable

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


//////////////////////////////////////////

mysqli_query($connect"INSERT INTO farmer(fid,fname,mname,sname,dob,sex,address,mob1,mob2,idtype,idnum,district,community) VALUES('$fid','$first_name','$middle_name','$surname','$dob','$sex','$address','$mob1','$mob2','$idtype','$idnum','$district','$community')");



			if(mysqli_affected_rows($connect) > 0){
				echo "<p>Employee Added</p>";

				} else {
					echo "Employee NOT Added<br />";
					echo mysqli_error ($connect);
				}




//Execute the query

//mysqli_query($connect"INSERT INTO employees1(first_name,last_name,department,email) VALUES('$first_name','$last_name','$department','$email')");

?>




