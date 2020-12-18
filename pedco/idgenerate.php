<?php  
include 'mainheader/dbcon.php';


 function create_code($conn) {

        $res = "SELECT * FROM farmer";

        $sql = mysqli_query($conn,$res);

        $result = mysqli_num_rows($sql);

        $res = $result + 1;

        $start="PD";

        switch (strlen($res)) {
            case 1:
                return  $start."00000" . $res;

            case 2:
                return $start."0000" . $res;

            case 3:
                return $start."000" . $res;

            case 4:
                return $start."00" . $res;

            case 5:
                return $start."0" . $res;

            case 6:
                return   $start.$res;

        }

 }


 function check_existence_code($code, $conn){

       $query= "SELECT * from farmer where fid = $code";

       $sql = mysqli_query($conn,$query);

       $result = mysqli_num_rows($sql);

       if($result>0){

           return true;

       } else {

           return false;
       }
 }


  function fetch_farmers($conn){

       $query = "SELECT * from farmer";

       $sql_records = mysqli_query($conn,$query);

       return $sql_records;
 }

function re_create_code($code) {

        $trailing_code = substr($code , -6);
        $res = (int) $trailing_code+1;
        $res = (string) $res;




        $start="PD";
        switch (strlen($res)) {
            case 1:
                return  $start."00000" . $res;
            case 2:
                return $start."0000" . $res;
            case 3:
                return $start."000" . $res;
            case 4:
                return $start."00" . $res;
            case 5:
                return $start."0" . $res;
            case 6:
                return   $start.$res;
        }
 }


?>