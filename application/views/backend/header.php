<header id="navbar">
			<div id="navbar-container" class="boxed">

				<!--Brand logo & name-->
				<!--================================-->
				<div class="navbar-header">
					<a href="index.html" class="navbar-brand">
						<img src="<?php echo base_url();?>template/back/img/logo.png" alt="Nifty Logo" class="brand-icon">
						<?php 
							$val = $this->db->get_where('system_settings')->result_array();
							foreach($val as $row){
					   ?>
						<div class="brand-title">
							<span class="brand-text"><?php echo $row['system_title'];?></span>
						</div>
						<?php 
							}
						?>
					</a>
				</div>
				<!--================================-->
				<!--End brand logo & name-->


				<!--Navbar Dropdown-->
				<!--================================-->
				<div class="navbar-content clearfix">
					<ul class="nav navbar-top-links pull-left">

						<!--Navigation toogle button-->
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<li class="tgl-menu-btn">
							<a class="mainnav-toggle" href="#">
								<i class="fa fa-navicon fa-lg"></i>
							</a>
						</li>
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<!--End Navigation toogle button-->


					</ul>
					
						<!--User dropdown-->
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<li id="dropdown-user" class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
								<span class="pull-right">
									<img class="img-circle img-user media-object" src="<?php echo base_url();?>template/back/img/av1.png" alt="Profile Picture">
								</span>
								<?php 
									$val = $this->db->get_where('system_settings')->result_array();
									foreach($val as $row){
							   ?>
								<div class="username hidden-xs"><?php echo $row['system_name'];?></div>
								<?php } ?>
							</a>


							<div class="dropdown-menu dropdown-menu-md dropdown-menu-right with-arrow panel-default">

								<!-- Dropdown heading  -->
								<div class="pad-all bord-btm">
									<p class="text-lg text-muted text-thin mar-btm">750Gb of 1,000Gb Used</p>
									<div class="progress progress-sm">
										<div class="progress-bar" style="width: 70%;">
											<span class="sr-only">70%</span>
										</div>
									</div>
								</div>


								<!-- User dropdown menu -->
								<ul class="head-list">
									<li>
										<a href="<?php echo base_url();?>index.php/admin/about/view">
											<i class="fa fa-user fa-fw fa-lg"></i> Profile
										</a>
									</li>
									<li>
										<a href="<?php echo base_url()?>index.php/admin/system_settings/view">
											<span class="label label-success pull-right">New</span>
											<i class="fa fa-gear fa-fw fa-lg"></i> Settings
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-question-circle fa-fw fa-lg"></i> Help
										</a>
									</li>
								</ul>

								<!-- Dropdown footer -->
								<div class="pad-all text-right">
									<a href="<?php echo base_url()?>/index.php/login/logout" class="btn btn-primary">
										<i class="fa fa-sign-out fa-fw"></i> Logout
									</a>
								</div>
							</div>
						</li>
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<!--End user dropdown-->

					</ul>
				</div>
				<!--================================-->
				<!--End Navbar Dropdown-->

			</div>
		</header>
		<!--===================================================-->
		<!--END NAVBAR-->