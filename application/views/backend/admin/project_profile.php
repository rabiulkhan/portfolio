<!--CONTENT CONTAINER-->
<?php 
		$project   = $this->db->get_where('project',array('project_id' => $id))->result_array();
		foreach($project as $row)
        { 
?>
<div id="content-container" style="padding-top:0px !important;">
<h4 class="modal-title">Profile of Project</h4>
<hr style="margin-top: 10px !important;">
    <div class="text-center pad-all">
        <div class="pad-ver">
            <img src="<?php echo base_url(); ?>uploads/project_image/project_<?php echo $row['project_id'];?>.jpg"  class="img-md img-border img-circle" alt="Profile Picture">
        </div>
        <h4 class="text-lg text-overflow mar-no"></h4>
        <p class="text-sm"></p>
        <div class="pad-ver btn-group">
            <a href="" class="btn btn-icon btn-hover-primary fa fa-facebook icon-lg"></a>
            <a href="" class="btn btn-icon btn-hover-info fa fa-twitter icon-lg"></a>
            <a href="" class="btn btn-icon btn-hover-danger fa fa-google-plus icon-lg"></a>
            <a href="#" class="btn btn-icon btn-hover-mint fa fa-envelope icon-lg"></a>
        </div>
        <hr>
    </div>


<div class="row">
    <div class="col-sm-12">
        <div class="panel-body">
		
            <table class="table table-striped" style="border-radius:3px;">
                <tr>
                    <th class="custom_td">Name</th>
                    <td class="custom_td"><?php echo $row['name']?></td>
                </tr>
               <tr>
                    <th class="custom_td">Description</th>
                    <td class="custom_td"><?php echo $row['description']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Duration</th>
                    <td class="custom_td"><?php echo $row['duration']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Project Type</th>
                    <td class="custom_td"><?php echo $row['type']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Language</th>
                    <td class="custom_td"><?php echo $row['language']?></td>
                </tr>
				<tr>
                    <th class="custom_td">DataBase</th>
                    <td class="custom_td"><?php echo $row['database']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Design Tools</th>
                    <td class="custom_td"><?php echo $row['design']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Frameworks</th>
                    <td class="custom_td"><?php echo $row['frameworks']?></td>
                </tr>
            </table>
			
		</div>
			<!--===================================================-->
            <!--End Hover Rows-->
	</div>
</div>					
</div>					
</div>
</div>
<?php 
				}
			?>
            
<style>
.custom_td{
border-left: 1px solid #ddd;
border-right: 1px solid #ddd;
border-bottom: 1px solid #ddd;
}
</style>