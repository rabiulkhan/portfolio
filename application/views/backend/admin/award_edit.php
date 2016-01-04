<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Edit Award</h3></center>
                    </div>
					<?php 
					$award = $this->db->get_where('award',array('award_id' => $id))->result_array();
					foreach($award as $row)
                        { 
                    ?>
                    
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/award/do_update/<?php echo $row['award_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
						
						   <!--Title-->
						   <div class="form-group">
							  <label for="demo-is-inputlarge" 
							  class="col-sm-3 control-label">Title</label>
							  <div class="col-sm-6">
								 <input type="text" id="demo-msk-phone" class="form-control" 
								  placeholder="Title" name="title" value="<?php echo $row['title']?>">
							  </div>
						    </div>
                            <!--Institute Name--------->
							<div class="form-group">
								<label for="demo-is-inputlarge" 
								class="col-sm-3 control-label">Institute Name</label>
								<div class="col-sm-6">
									<input type="text" id="demo-msk-phone" class="form-control" 
									placeholder="Institute Name" name="institute" value="<?php echo $row['institute']?>">
								</div>
							 </div>
							
                             <!--Year-->
							  <div class="form-group">
								<label for="demo-is-inputlarge" 
								class="col-sm-3 control-label">Year</label>
								<div class="col-sm-6">
									<input type="number" id="demo-msk-phone" class="form-control" 
									placeholder="Year" name="year" value="<?php echo $row['year']?>">
								</div>
							  </div>
							  
							  <!--Award Image-->
							<div class="form-group">
								<label for="demo-is-inputlarge" class="col-sm-3 control-label">Award Image</label>
								<div class="col-sm-6">
								   <span class="pull-left btn btn-default btn-file">
										Choose your photo <input type="file" name="image">
									</span>
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