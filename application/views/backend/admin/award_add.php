<div id="content-container" style="padding-top: 15px !important;">
<!--Page content-->
<div id="page-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Please fill the form to create Award</h3></center>
                </div>
                
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/award/add" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                    <div class="panel-body">
						<!--Title-->
						 <div class="form-group">
                            <label for="demo-is-inputlarge" 
                            class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-6">
                                <input type="text" id="demo-msk-phone" class="form-control" 
                                placeholder="Title" name="title">
                            </div>
                          </div>
						  
                          <!--Institute Name--------->
						  <div class="form-group">
                             <label for="demo-is-inputlarge" 
                             class="col-sm-3 control-label">Institute Name</label>
                             <div class="col-sm-6">
                                <input type="text" id="demo-msk-phone" class="form-control" 
                                placeholder="Institute Name" name="institute">
                             </div>
                           </div>
                        
                           <!--Year-->
						   <div class="form-group">
                             <label for="demo-is-inputlarge" 
                             class="col-sm-3 control-label">Year</label>
                             <div class="col-sm-6">
                                <input type="number" id="demo-msk-phone" class="form-control" 
                                placeholder="Year" name="year">
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