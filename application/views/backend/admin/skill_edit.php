<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Edit Skill</h3></center>
                    </div>
					<?php 
					$skill = $this->db->get_where('skill',array('skill_id' => $id))->result_array();
					foreach($skill as $row)
                        { 
                    ?>
                    <!--Form for Accountant-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/skill/do_update/<?php echo $row['skill_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                            
						     
                             <!--Name--------->
							<div class="form-group">
								<label for="demo-is-inputlarge" 
								class="col-sm-3 control-label">Name</label>
								<div class="col-sm-6">
									<input type="text" id="demo-msk-phone" class="form-control" 
									placeholder="Name" name="name" value="<?php echo $row['name']?>">
								</div>
							 </div>
							
							 <!--Percentage-->
							 <div class="form-group">
								<label for="demo-is-inputlarge" class="col-sm-3 control-label">Percentage</label>
								<div class="col-sm-6">
									<input type="number" id="demo-msk-phone" class="form-control" 
									placeholder="(999) 999-9999" name="percentage" value="<?php echo $row['percentage']?>">
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