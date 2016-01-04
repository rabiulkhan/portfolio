<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Email Settings</h3>
                    </div>
					<?php 
							$val = $this->db->get_where('admin')->result_array();
							foreach($val as $row){
					   ?>
                    <!--Form for Accountant-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/manage_profile/update_profile_info" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                            <!--Email--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Email</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Email" name="email" value="<?php echo $row['email'];?>"
                                    class="form-control input-sm" id="name">
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
		
		
		<div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Password Settings</h3>
                    </div>
					
                    <!--Form for Accountant-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/manage_profile/change_password" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                            <!--Email--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Password</label>
                                <div class="col-sm-6">
                                    <input type="password" placeholder="Password" name="password"
                                    class="form-control input-sm" id="name">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-3 control-label" for="name">New Password</label>
                                <div class="col-sm-6">
                                    <input type="password" placeholder="New Password" name="new_password"
                                    class="form-control input-sm" id="name">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Confirm Password</label>
                                <div class="col-sm-6">
                                    <input type="password" placeholder="Confirm Password" name="confirm_new_password"
                                    class="form-control input-sm" id="name">
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
					
                </div>
            </div>
        </div>
</div>
</div>
    
				<!--===================================================-->
				<!--End page content-->

			<!--===================================================-->
			<!--END CONTENT CONTAINER-->