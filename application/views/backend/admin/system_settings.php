<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">General Settings</h3>
                    </div>
					<?php 
							$val = $this->db->get_where('system_settings')->result_array();
							foreach($val as $row){
					   ?>
                    <!--Form for Accountant-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/system_settings/do_update" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                            <!--System Name--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">System Name</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="System Name" name="system_name" value="<?php echo $row['system_name'];?>"
                                    class="form-control input-sm" id="name">
                                </div>
                            </div>
                           <!--System Title--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">System Title</label>
                                <div class="col-sm-6">
                                    <input type="text" id="demo-msk-phone" class="form-control" name="system_title" value="<?php echo $row['system_title'];?>"
                                    placeholder="System Title">
                                </div>
                            </div>
							
							  <!--Address--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">Address</label>
                                <div class="col-sm-6">
                                    <input type="text" id="demo-msk-phone" class="form-control" name="address" value="<?php echo $row['address'];?>"
                                    placeholder="Address">
                                </div>
                            </div>
                            
                             <!--Phone number-->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">Phone number</label>
                                <div class="col-sm-6">
                                    <input type="text" id="demo-msk-phone" class="form-control" name="phone" value="<?php echo $row['phone'];?>"
                                    placeholder="Phone number">
                                </div>
                            </div>
						<!--About--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">About</label>
                                <div class="col-sm-6">
                                    <input type="text" id="demo-msk-phone" class="form-control" name="about" value="<?php echo $row['about'];?>"
                                    placeholder="About">
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
			
			
			<div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Network Settings</h3>
                    </div>
					<?php 
							$val = $this->db->get_where('network_settings')->result_array();
							foreach($val as $row){
					   ?>
                    <!--Form for Accountant-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/system_settings/network_update" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                            <!--Facebook--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Facebook</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Facebook" name="facebook" value="<?php echo $row['facebook'];?>"
                                    class="form-control input-sm" id="name">
                                </div>
                            </div>
                           <!--Linked In--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">Linked In</label>
                                <div class="col-sm-6">
                                    <input type="text" id="demo-msk-phone" class="form-control" name="linkedin" value="<?php echo $row['linkedin'];?>"
                                    placeholder="Linked In">
                                </div>
                            </div>
							
							  <!--Google Plus--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">Google Plus</label>
                                <div class="col-sm-6">
                                    <input type="text" id="demo-msk-phone" class="form-control" name="google_plus" value="<?php echo $row['google_plus'];?>"
                                    placeholder="Google Plus">
                                </div>
                            </div>
                            
                             <!--Twitter-->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">Twitter</label>
                                <div class="col-sm-6">
                                    <input type="text" id="demo-msk-phone" class="form-control" name="twitter" value="<?php echo $row['twitter'];?>"
                                    placeholder="Twitter">
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