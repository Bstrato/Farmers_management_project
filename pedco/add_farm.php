<?php 
include 'mainheader/mainheader.php';
include 'insert_farm.php';

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
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Search</span>
                                            </div>
                                            <input class="form-control" type="text" name="search">
                                            <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


  

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>ID <span class="text-danger">*</span></label>
                                         <input type="text" class="form-control" value="readonly" readonly="readonly">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" value="readonly" readonly="readonly">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Middle Name </label>
                                        <input type="text" class="form-control" value="readonly" readonly="readonly">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Surname </label>
                                        <input type="text" class="form-control" value="readonly" readonly="readonly">
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
    
    function mess()
    {
        alert ("Your record is successfully saved");
        return true;
    }
</script>>
    