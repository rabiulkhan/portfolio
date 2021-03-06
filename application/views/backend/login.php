<?php include 'top_links.php'; ?>
<!-- LOGIN FORM -->
		<!--===================================================-->
		<div class="cls-content">
			<div class="cls-content-sm panel">
				<div class="panel-body">
					<p class="pad-btm">Sign In to your account</p>
					<form action="<?php echo base_url()?>index.php/login" method="post">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user"></i></div>
								<input type="email" class="form-control" placeholder="Email" name="email">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
								<input type="password" class="form-control" placeholder="Password" name="password">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8 text-left checkbox">
								<label class="form-checkbox form-icon">
								<input type="checkbox"> Remember me
								</label>
							</div>
							<div class="col-xs-4">
								<div class="form-group text-right">
								<button class="btn btn-success text-uppercase" type="submit">Sign In</button>
								</div>
							</div>
						</div>
						<div class="mar-btm"><em>- or -</em></div>
						<button class="btn btn-primary btn-lg btn-block" type="button">
							<i class="fa fa-facebook fa-fw"></i> Login with Facebook
						</button>
					</form>
				</div>
			</div>
			<div class="pad-ver">
				<a href="pages-password-reminder.html" class="btn-link mar-rgt">Forgot password ?</a>
				<a href="pages-register.html" class="btn-link mar-lft">Create a new account</a>
			</div>
		</div>
		<!--===================================================-->
		
		<!--===================================================-->
		
		<?php include 'bottom_scripts.php';?>