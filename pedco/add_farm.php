<?php 
include 'mainheader/mainheader.php';
include 'insert_farm.php';
include 'idgenerate.php';

?>




<!-- Content -->
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
						<div class="buy-form">
						  <h4 class="page-title" align="center">Add Farm Details</h4>


                        <form>



                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Search</label>
                                    <div class="col-md-10">
                                    
                                        <select class="select farmer-search" name = "service" style="width:100% important;">

                                             <option value="" data-fname="" data-fid="" data-sname="" data-mname="">Please select farmer</option>
                                            
                                            <?php

                                              $query_loop = fetch_farmers($conn);
                                              while ($row = mysqli_fetch_array($query_loop))
                                               {

                                                $fid =  $row['fid'];
                                                $fname = $row['fname'];
                                                $sname = $row['sname'];
                                                $mname = $row['mname'];

                                              ?>   
                                                
                                                 <option data-fname="<?php echo $fname;  ?>" data-fid="<?php  echo $fid; ?>" data-sname="<?php  echo $sname ?>" data-mname="<?php  echo $mname; ?>" value="<?php ?>"> <?php echo $sname." ".$fname." ".$mname." (".$fid." )"; ?></option>
                                              
                                            <?php
                                                }
                                             ?>
                                           
                                           
                                        </select>
                                   
                                    </div>
                                </div>


  

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>ID <span class="text-danger">*</span></label>
                                         <input type="text" class="form-control fid" value="" readonly="readonly">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control fname" value="" readonly="readonly">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Middle Name </label>
                                        <input type="text" class="form-control mname" value="" readonly="readonly">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Surname </label>
                                        <input type="text" class="form-control sname" value="" readonly="readonly">
                                    </div>
                                </div>
           



                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Farm Size (Meters)<span class="text-danger">*</span></label>
                                        <input class="form-control" type="tex" name = "farmsize">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Plant Population<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name = "plantpop">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Planting Distance (Meters)<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name = "plantdistance">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Year of Plantation <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text" name="plantyear">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Service Requesting</label>
                                        <select class="select" name = "service">
                                            <option>Select</option>
                                            <option>Spraying</option>
                                            <option>Pruning</option>
                                            <option>Harvesting </option>
                                            <option>Weed Control</option>
                                            <option>Planting </option>
                                            <option>Lining and Pegging</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Assigned Suppervisor</label>
                                        <select class="select" name = "supervisor">
                                            <option>Select</option>
                                            <option>Suppervisor1</option>
                                            <option>Suppervisor2</option>
                                            <option>Suppervisor3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" name = "submit" onclick=" return mess()">Submit</button>
                            </div>
                        </form>
						</div>
                    </div>
                </div>
            </div>
            
		<!-- Content End -->

        <script type="text/javascript">


            $(document).ready(function() {



              $('.farmer-search').select2();


              $(".farmer-search").select2().on("change",function(e){


                 
                
                //$(".farmer-search").select2().find(":selected").data("id");

                $fid =    $(".farmer-search").select2().find(":selected").data("fid"); 
                $fname =  $(".farmer-search").select2().find(":selected").data("fname"); 
                $sname =  $(".farmer-search").select2().find(":selected").data("sname"); 
                $mname =  $(".farmer-search").select2().find(":selected").data("mname"); 


                $(".fid").val( $fid);
                $(".fname").val( $fname);
                $(".sname").val($sname);
                $(".mname").val($mname);



              });




            });
        
    
          function mess()
          {
                 alert ("Your record is successfully saved");
                    return true;
         }
    </script>
    