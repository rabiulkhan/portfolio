<!--CONTENT CONTAINER-->
<?php 
		$award   = $this->db->get_where('award',array('award_id' => $id))->result_array();
		foreach($award as $row)
        { 
?>
<div id="content-container" style="padding-top:0px !important;">
<h4 class="modal-title">Profile of Award</h4>
<hr style="margin-top: 10px !important;">
    <div class="text-center pad-all">
        
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
                    <th class="custom_td">Title</th>
                    <td class="custom_td"><?php echo $row['title']?></td>
                </tr>
                <tr>
                    <th class="custom_td">Institute Name</th>
                    <td class="custom_td"><?php echo $row['institute']?></td>
                </tr>
               <tr>
                    <th class="custom_td">Year</th>
                    <td class="custom_td"><?php echo $row['year']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Award Image</th>
                    <td class="custom_td"><img src="<?php echo base_url(); ?>upload/award_image/room_<?php echo $row['award_id'];?>.jpg"  class="img-md img-border img-circle" alt="Profile Picture"></td>
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