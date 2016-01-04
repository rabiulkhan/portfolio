<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Edit Education</h3></center>
                    </div>
					<?php 
					$education = $this->db->get_where('education',array('education_id' => $id))->result_array();
					foreach($education as $row)
                        { 
                    ?>
                    <!--Form for Accountant-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/education/do_update/<?php echo $row['education_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                            <!--Institute Name--------->
							<div class="form-group">
								<label for="demo-is-inputlarge" 
								class="col-sm-3 control-label">Institute Name</label>
								<div class="col-sm-6">
									<input type="text" id="demo-msk-phone" class="form-control" 
									placeholder="Institute Name" name="institute" value="<?php echo $row['institute']?>">
								</div>
							 </div>
							
                            
                            <!--Subject-->
							 <div class="form-group">
								<label for="demo-is-inputlarge" 
								class="col-sm-3 control-label">Programs</label>
								<div class="col-sm-6">
									<input type="text" id="demo-msk-phone" class="form-control" 
									placeholder="Subject" name="subject" value="<?php echo $row['subject']?>">
								</div>
							  </div>
						     
                              <!--Starting Year-->
							  <div class="form-group">
								<label for="demo-is-inputlarge" 
								class="col-sm-3 control-label">Starting Year</label>
								<div class="col-sm-6">
									<input type="number" id="demo-msk-phone" class="form-control" 
									placeholder="Starting Year" name="starting_year" value="<?php echo $row['starting_year']?>">
								</div>
							  </div>
							  <!--Ending Year--> 
							  <div class="form-group">
								<label for="demo-is-inputlarge" 
								class="col-sm-3 control-label">Ending Year</label>
								<div class="col-sm-6">
									<input type="number" id="demo-msk-phone" class="form-control" 
									placeholder="Ending Year" name="ending_year" value="<?php echo $row['ending_year'];?>">
								</div>
							  </div>
							 <!--City-->
							 <div class="form-group">
								<label for="demo-is-inputlarge" 
								class="col-sm-3 control-label">City</label>
								<div class="col-sm-6">
									<input type="text" id="demo-msk-phone" class="form-control" 
									placeholder="City" name="city" value="<?php echo $row['city']?>">
								</div>
							  </div>
							  <!--Description-->
							 <div class="form-group">
								<label for="demo-is-inputlarge" class="col-sm-3 control-label">Description</label>
									<div class="col-sm-6">
										<textarea placeholder="Description" rows="13" class="form-control" name = "description"><?php echo $row['description'];?></textarea>
									</div>	
							</div>
						  </div>
                            
                            <div class="panel-footer" style="">
								<div class="row">
									<div class="col-sm-9 col-sm-offset-3">
										<button class="btn btn-success btn-labeled fa fa-wrench fa-lg" 
										type="submit">Save</button>
									</div>
								</div>
							</div>
                        </div>  
                    </form>
					<?php 
						}
					?>
                </div>
            </div>
        </div>
</div>
    
				<!--===================================================-->
				<!--End page content-->

			<!--===================================================-->
			<!--END CONTENT CONTAINER-->