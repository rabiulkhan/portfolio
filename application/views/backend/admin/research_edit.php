<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Edit Project</h3></center>
                    </div>
					<?php 
					$research = $this->db->get_where('research',array('research_id' => $id))->result_array();
					foreach($research as $row)
                        { 
                    ?>
                    <!--Form for Accountant-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/research/do_update/<?php echo $row['research_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                            <!--Name--------->
							<div class="form-group">
								<label for="demo-is-inputlarge" 
								class="col-sm-3 control-label">Name</label>
								<div class="col-sm-6">
									<input type="text" id="demo-msk-phone" class="form-control" 
									placeholder="Resarch Name" name="name" value="<?php echo $row['name']?>">
								</div>
							 </div>
							
                             <!--Description-->
							  <div class="form-group">
								<label for="demo-textarea-input" 
								class="col-sm-3 control-label">Description</label>
								<div class="col-sm-6">
									<textarea placeholder="Description" rows="6" class="form-control" name="description"><?php echo $row['description']?></textarea>
								</div>
							  </div>
							
							  <!--Duration-->
							  <div class="form-group">
								<label for="demo-is-inputlarge" 
								class="col-sm-3 control-label">Duration</label>
								<div class="col-sm-6">
									<input type="text" id="demo-msk-phone" class="form-control" 
									placeholder="Duration" name="duration" value="<?php echo $row['duration']?>">
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