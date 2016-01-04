<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        	<div class="row">
        	<div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">About Myself</h3>
                </div>
                <!--Form for Accountant-->
			<?php 
				$val = $this->db->get_where('about')->result_array();
				foreach($val as $row){
			?>	
            <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/about/do_update" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                <div class="panel-body"> 
                    <div class="form-group">
												<label class="col-lg-3 control-label">First name</label>
												<div class="col-lg-7">
													<input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>" placeholder="First name">
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-3 control-label">Second name</label>
												<div class="col-lg-7">
													<input type="text" class="form-control" name="sname" value="<?php echo $row['sname'];?>" placeholder="Second name">
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-3 control-label">Company</label>
												<div class="col-lg-7">
													<input type="text" class="form-control" name="company" value="<?php echo $row['company'];?>" placeholder="Company">
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-3 control-label">Birthday</label>
												<div class="col-lg-7">
													<input type="date" class="form-control" name="birthday" value="<?php echo $row['birthday'];?>" placeholder="birthday">
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-3 control-label">Birthplace</label>
												<div class="col-lg-7">
													<input type="text" class="form-control" name="birthplace" value="<?php echo $row['birthplace'];?>" placeholder="birthplace">
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-3 control-label">Hobbies</label>
												<div class="col-lg-7">
													<input type="text" class="form-control" name="hobbies" value="<?php echo $row['hobbies'];?>" placeholder="Hobbies are...">
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-3 control-label">Address</label>
												<div class="col-lg-7">
													<input type="text" class="form-control" name="address" value="<?php echo $row['address'];?>" placeholder="Address">
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-3 control-label">Phone</label>
												<div class="col-lg-7">
													<input type="number" class="form-control" name="phone" value="<?php echo $row['phone'];?>" placeholder="Phone" >
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-3 control-label">Email</label>
												<div class="col-lg-7">
													<input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>" placeholder="@example.com">
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-3 control-label">Web</label>
												<div class="col-lg-7">
													<input type="text" class="form-control" name="web" value="<?php echo $row['web'];?>" placeholder="Web">
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-3 control-label">City</label>
												<div class="col-lg-7">
													<input type="text" class="form-control" name="city" value="<?php echo $row['city'];?>" placeholder="City">
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-3 control-label">Job Experience</label>
												<div class="col-lg-7">
													<input type="number" class="form-control" name="experience" value="<?php echo $row['experience'];?>" placeholder="hints : just input a number" >
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-3 control-label">Description</label>
												<div class="col-lg-7">
													<textarea placeholder="Description" rows="6" class="form-control" name="description"><?php echo $row['description']?></textarea>
												</div>
											</div>
                    
                <!--Meta Tag--------->
                </div>
                    <div class="panel-footer" style="">
                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-success" 
                                type="submit">save</button>
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
        <div class="row">
        	<div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Gallary</h3>
                </div>
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/about/gallary" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                
                    <div class="panel-body">
                        <!--Meta Tag--------->
                        <div class="form-group">
                            <label for="demo-is-inputlarge" class="col-sm-3 control-label">Gallary</label>
                            <div class="col-sm-6">
                                 <span class="pull-left btn btn-default btn-file">
                                    Upload your photo <input name="files[]" type="file" multiple />
                                </span>
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
                        
                        <div class="row">
							<?php
								$this->db->limit(6);
                                $image1 = $this->db->get('about_gallary')->result_array();
                                foreach($image1 as $row1){
                            ?>
                        	<div class="col-lg-2 col-sm-6">	
                                <div class="text-center pad-all">
                                    <img src="<?php echo base_url(); ?>uploads/about_gallary_image/about_gallary_<?php echo $row1['about_gallary_id'];?>.jpg" class="img-responsive thumbnail"/>
                                    <a class="btn btn-danger btn-labeled fa fa-times-circle" onclick="return confirm('Are you sure?')" 
                                        href="<?php echo base_url();?>index.php/admin/about/delete1/<?php echo $row1['about_gallary_id']; ?>" data-original-title="Delete">Delete Image
                                </a> 
                                </div> 
                                 
                              </div>
							<?php } ?>
                          </div>
                       </div>
                </form>
                
                <!--===================================================-->
        </div>
        </div>
        </div>
        
		
		
		<div class="row">
       		<div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Background Image Settings</h3>
                </div>
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/about/add" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                
                    <div class="panel-body">
                        <!--Meta Tag--------->
						<div class="row">
							
                        	<div class="col-lg-2 col-sm-6">	
                                <div class="text-center pad-all">
                                    <img src="<?php echo base_url(); ?>uploads/parallax_image/bck.jpg" class="img-responsive thumbnail"/>
                                     
                                </div> 
                                 
                              </div>
                          </div>
                        <div class="form-group">
                            <label for="demo-is-inputlarge" class="col-sm-3 control-label">Upload Background Image</label>
                            <div class="col-sm-6">
                                <span class="pull-left btn btn-default btn-file">
                                    Choose your photo <input type="file" name="image">
                                </span>
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
                
                <!--===================================================-->
        </div>
        </div>
        </div>
		
		
		<div class="row">
       		<div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Resume Upload</h3>
                </div>
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/about/r_add" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                
                    <div class="panel-body">
                        <!--Meta Tag--------->
						<tr>
							<td>
								<div class="text-center pad-all">
								<strong>Please Upload just a pdf file </strong>
								</div>
							</td>
						</tr>
                        <div class="form-group">
                            <label for="demo-is-inputlarge" class="col-sm-3 control-label">Upload Resume</label>
                            <div class="col-sm-6">
                                <span class="pull-left btn btn-default btn-file">
                                    Choose your Resume <input type="file" name="image">
                                </span>
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
                
                <!--===================================================-->
        </div>
        </div>
        </div>
	</div>
</div>
    
				<!--===================================================-->
				<!--End page content-->

			<!--===================================================-->
			<!--END CONTENT CONTAINER-->
