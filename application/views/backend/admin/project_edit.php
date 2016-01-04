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
					$project = $this->db->get_where('project',array('project_id' => $id))->result_array();
					foreach($project as $row)
                        { 
                    ?>
                    <!--Form for Accountant-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/project/do_update/<?php echo $row['project_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                            <!--Name--------->
							<div class="form-group">
								<label for="demo-is-inputlarge" 
								class="col-sm-3 control-label">Name</label>
								<div class="col-sm-6">
									<input type="text" id="demo-msk-phone" class="form-control" 
									placeholder="Project Name" name="name" value="<?php echo $row['name']?>">
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
							  <!--Branch--------->
							  <div class="form-group">
								<label class="col-sm-3 control-label">Project Type</label>
								<div class="col-sm-6">
									<select data-placeholder="Choose a Branch..." name="type" id="demo-chosen-select" tabindex="2">
                                    <option value="" name="type">Choose Project Type...</option>
                                    <option value="web" name="type">Web</option>
									<option value="java" name="type">java</option>
									<option value="c" name="type">C</option>
									<option value="cs" name="type">C#</option>
                                </select>
								</div>
							</div>
                          <!--Photo--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">Photo</label>
                                <div class="col-sm-6">
                                   <span class="pull-left btn btn-default btn-file">
										Choose your photo <input type="file" name="image" value="<?php echo base_url(); ?>uploads/project_image/project_<?php echo $row['project_id']; ?>.jpg">
									</span>
                                </div>
                            </div>
						     <!--Language--------->
							<div class="form-group">
								<label for="demo-is-inputlarge" 
								class="col-sm-3 control-label">Language</label>
								<div class="col-sm-6">
									<input type="text" id="demo-msk-phone" class="form-control" 
									placeholder="Language" name="language" value="<?php echo $row['language']?>">
								</div>
							 </div>
							 
							 <!--DataBase--------->
							<div class="form-group">
								<label for="demo-is-inputlarge" 
								class="col-sm-3 control-label">DataBase</label>
								<div class="col-sm-6">
									<input type="text" id="demo-msk-phone" class="form-control" 
									placeholder="DataBase" name="database" value="<?php echo $row['database']?>">
								</div>
							 </div>
							 
							 <!--Design--------->
							<div class="form-group">
								<label for="demo-is-inputlarge" 
								class="col-sm-3 control-label">Design Tools</label>
								<div class="col-sm-6">
									<input type="text" id="demo-msk-phone" class="form-control" 
									placeholder="Design tools" name="design" value="<?php echo $row['design']?>">
								</div>
							 </div>
							 
							 <!--Frameworks--------->
							<div class="form-group">
								<label for="demo-is-inputlarge" 
								class="col-sm-3 control-label">Frameworks</label>
								<div class="col-sm-6">
									<input type="text" id="demo-msk-phone" class="form-control" 
									placeholder="Frameworks" name="frameworks" value="<?php echo $row['frameworks']?>">
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