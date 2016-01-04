<!--CONTENT CONTAINER-->
			<!--===================================================-->
			<div id="content-container">
				
				<!--Page Title-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<div id="page-title">
					<h1 class="page-header text-overflow">Form Validation</h1>

					<!--Searchbox-->
					<div class="searchbox">
						<div class="input-group custom-search-form">
							<input type="text" class="form-control" placeholder="Search..">
							<span class="input-group-btn">
								<button class="text-muted" type="button"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</div>
				</div>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End page title-->

				<!--Page content-->
				<!--===================================================-->
				<div id="page-content">
					
					<div class="row">
						<div class="col-lg-6">
					
					
							<!-- FORM VALIDATION ON TABS -->
							<!--===================================================-->
							<div class="tab-base">
					
								<!-- Nav tabs -->
								<ul class="nav nav-tabs">
									<li class="active"><a href="#demo-bsc-tab-1" data-toggle="tab"><i class="fa"></i> Information</a></li>
									<li><a href="#demo-bsc-tab-2" data-toggle="tab"><i class="fa"></i> Address</a></li>
								</ul>
					
								<!-- Tabs Content -->
								<?php 
										$val = $this->db->get_where('about')->result_array();
										foreach($val as $row){
								?>
								<form id="demo-bv-bsc-tabs" class="form-horizontal" action="<?php echo base_url();?>index.php/admin/about/do_update" method="post">
									<div class="tab-content">
										<div class="tab-pane pad-btm fade in active" id="demo-bsc-tab-1">
											<h4 class="text-thin mar-btm">Details</h4>
											<hr>
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
													<textarea placeholder="Hobbies are..." rows="6" class="form-control" name="hobbies"><?php echo $row['hobbies']?></textarea>
												</div>
											</div>
											
										</div>
										<div class="tab-pane fade" id="demo-bsc-tab-2">
											<h4 class="mar-btm text-thin">Details</h4>
											<hr>
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
										</div>
										<div class="tab-footer clearfix">
											<div class="col-lg-7 col-lg-offset-3">
												<button type="submit" class="btn btn-primary btn-labeled fa fa-check fa-lg">Save</button>
											</div>
										</div>
									</div>
								</form>
								<?php
									}
								?>
							</div>
							<!--===================================================-->
							<!-- END FORM VALIDATION ON TABS -->
					
					
						
					
						
						
						</div>
						</div>
					
					
					
				</div>
				<!--===================================================-->
				<!--End page content-->


			</div>
			<!--===================================================-->
			<!--END CONTENT CONTAINER-->