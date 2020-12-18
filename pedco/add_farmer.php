<?php 
session_start();
include 'mainheader/mainheader.php';
include 'idgenerate.php';
$code = create_code($conn);


 ?>


		      <!-- Content -->
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="buy-form">
                          <h4 class="page-title" align="center">Add Farmer Record</h4>
                       

                        <form method="post" action="insert_farmer.php" class="form-signin">

                            <div class="row">

                                <div class="col-sm-6">
                                    <div id ="id" class="form-group">
                                        <label>ID</label>
                                        <input type="text" class="form-control" value="<?php echo $code; ?>" readonly="readonly" name="fid">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div id="fname" class="form-group">
                                        <label>First Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" required="required" name="fname">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div id="mname" class="form-group">
                                        <label>Middle Name</label>
                                        <input class="form-control" type="text" name="mname">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div id="sname" class="form-group">
                                        <label>Surname <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" required="required" name="sname">
                                    </div>
                                </div>



                              <div class="col-sm-6">
                                    <div id="dob" class="form-group">
                                        <label>Date of Birth <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text" required="required" name="dob">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div id="gender" class="form-group">
                                            <label class="display-block">Gender:</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sex" id="gender_male" value="1">
                                                <label class="form-check-label" for="gender_male">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sex" id="gender_female" value="2">
                                                <label class="form-check-label" for="gender_female">Female</label>
                                            </div>

                                        </div>
                                    </div>

                                <div class="col-sm-6">
                                    <div id="address" class="form-group">
                                        <label>Address</label>
                                        <input class="form-control" type="text" name="address">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div id="pcontact" class="form-group">
                                        <label>Primary Contact </label>
                                        <input type="text" class="form-control" required="required" name="mob1">
                                    </div>
                                </div>
  

                                <div class="col-sm-6">
                                    <div id="scontact" class="form-group">
                                        <label>Secondary Contact </label>
                                        <input class="form-control" type="text" name="mob2">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div id="idtype" class="form-group">
                                        <label>Select ID Type </label>
                                        <select class="select" name = "idtype">
                                            <option>Select</option>
                                            <option>VoterID</option>
                                            <option>Passport</option>
                                            <option>Ghana Card</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div id="idnumber" class="form-group">
                                        <label>ID Number</label>
                                        <input class="form-control" type="text" required="required" name="idnum">
                                    </div>
                                </div>
                        

                                <div class="col-sm-6">
                                    <div id="district" class="form-group">
                                        <label>Select District </label>
                                        <select class="select" name = "district">
                                            <option>Select</option>
                                            <option>Kintampo</option>
                                            <option>Techiman</option>
                                            <option>Nkuranza</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div id="community" class="form-group">
                                        <label>Community</label>
                                        <input class="form-control" type="text" name="community">
                                    </div>
                                </div>

                            </div>


                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" name="submit" onclick=" return mess()">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>


<script type="text/javascript">


     $(document).ready(function() {

       
       

      });
    
    function mess()
    {
        alert ("Your record is successfully saved");
        return true;
    }
</script>>
    

        <!-- Content End -->
   