<div id="content-container" style="padding-top: 15px !important;">
<!--Page content-->
<div id="page-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Please fill the form to create Education</h3></center>
                </div>
                <!--Form for Accountant-->
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/education/add" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                    <div class="panel-body">
                        <!--Institute Name--------->
						<div class="form-group">
                            <label for="demo-is-inputlarge" 
                            class="col-sm-3 control-label">Institute Name</label>
                            <div class="col-sm-6">
                                <input type="text" id="demo-msk-phone" class="form-control" 
                                placeholder="Institute Name" name="institute">
                            </div>
                         </div>
                        
                         <!--Subject-->
						 <div class="form-group">
                            <label for="demo-is-inputlarge" 
                            class="col-sm-3 control-label">Programs</label>
                            <div class="col-sm-6">
                                <input type="text" id="demo-msk-phone" class="form-control" 
                                placeholder="Subject" name="subject">
                            </div>
                          </div>
                        
						  <!--Starting Year-->
						  <div class="form-group">
                            <label for="demo-is-inputlarge" 
                            class="col-sm-3 control-label">Starting Year</label>
                            <div class="col-sm-6">
                                <input type="number" id="demo-msk-phone" class="form-control" 
                                placeholder="Starting Year" name="starting_year">
                            </div>
                          </div>
                          <!--End Date--> 
                          <div class="form-group">
                            <label for="demo-is-inputlarge" 
                            class="col-sm-3 control-label">Ending Year</label>
                            <div class="col-sm-6">
                                <input type="number" id="demo-msk-phone" class="form-control" 
                                placeholder="Ending Year" name="ending_year">
                            </div>
                          </div>
						  <!--City-->
						<div class="form-group">
                            <label for="demo-is-inputlarge" 
                            class="col-sm-3 control-label">City</label>
                            <div class="col-sm-6">
                                <input type="text" id="demo-msk-phone" class="form-control" 
                                placeholder="City" name="city">
                            </div>
                          </div>
						  <!--Description-->
						 <div class="form-group">
							<label for="demo-is-inputlarge" class="col-sm-3 control-label">Description</label>
								<div class="col-sm-6">
									<textarea placeholder="Description" rows="13" class="form-control" name = "description"></textarea>
								</div>	
						</div>
                        
                         </div>
                        
                         <div class="panel-footer" style="">
							<div class="row">
								<div class="col-sm-9 col-sm-offset-3">
									<button class="btn btn-success btn-labeled fa fa-user fa-lg" 
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

<script>
	// FORM VALIDATION ON TABS
	// =================================================================
	$('#demo-bv-bsc-tabs').bootstrapValidator({
		excluded: [':disabled'],
		feedbackIcons: faIcon,
		fields: {
			name: {
				validators: {
					notEmpty: {
						message: 'The full name is required'
					}
				}
			}
		}
	}).on('status.field.bv', function(e, data) {
		var $form     = $(e.target),
		validator = data.bv,
		$tabPane  = data.element.parents('.tab-pane'),
		tabId     = $tabPane.attr('id');

		if (tabId) {
			var $icon = $('a[href="#' + tabId + '"][data-toggle="tab"]').parent().find('i');
	
			// Add custom class to tab containing the field
			if (data.status == validator.STATUS_INVALID) {
				$icon.removeClass(faIcon.valid).addClass(faIcon.invalid);
			} else if (data.status == validator.STATUS_VALID) {
				var isValidTab = validator.isValidContainer($tabPane);
				$icon.removeClass(faIcon.valid).addClass(isValidTab ? faIcon.valid : faIcon.invalid);
			}
		}
	});

</script>