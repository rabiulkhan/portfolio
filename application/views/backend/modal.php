<div id="demo-lg-modal" class="modal fade" tabindex="-1" id="modal_new"  >
    <div class="modal-dialog modal-lg" style="margin-top:20px;">
        <div class="modal-content" id='modal_content'>
            <div class="modal-body" id="modal_inner" style="overflow:hidden;" >
                
            </div>
        </div>
    </div>
</div>

<script>

	function calcHeight()
	{
		//var the_height=document.getElementById('iframe_1').contentWindow.document.body.scrollHeight;
		//document.getElementById('modal_content').style.height=the_height+'px';
		var p 		= $( "#iframe_1" ).contents();
		var height 	= p.height();
		height_1 = Number(height)+00;
		height_3 = Number(height)+50;
		height_4 = Number(height)+150;
		document.getElementById('modal_content').style.height=height_1+'px';
		document.getElementById('modal_content').style.height=height_3+'px';
		the_height_2 = Number(height)-100;
		document.getElementById('iframe_1').style.height=the_height_2+'px';
		document.getElementsByClassName('modal-backdrop')[0].style.height=height_4+'px';
		//alert(the_height);
	}
	
	function reload_frame()
	{
		document.getElementById('iframe_1').contentWindow.location.reload();
	}
	
	function modal_form(page_name,id){
		document.getElementById('modal_inner').innerHTML="";
		document.getElementById('modal_inner').innerHTML="<iframe src='<?php echo base_url(); ?>index.php/modal/form/"+page_name+"/"+id+"' style='width:100%; height:500px; border:none;' id='iframe_1' onLoad='calcHeight();' scrolling='no' ></iframe>";
		//calcHeight();
	}



</script>