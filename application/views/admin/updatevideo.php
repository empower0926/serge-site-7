<?php 
//header('Cache-Control: max-age=900');
    /* Including header and sidebar */   
    $this->load->view('admin/include/header'); 
    $this->load->view('admin/include/sidebar'); 
  ?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Video Detail
      
      <a class="btn btn-info" href="<?php echo base_url('admin/videos'); ?>">All Videos</a></h1> 
     
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
			
			<style>
			    #link-error {
                      color: red;
                    }
			</style>
			
              <h5 class="card-title">Video Info</h5>

              <!-- General Form Elements -->
			  <?php //echo validation_errors(); 
				if($this->session->flashdata('success')) {
					
						?><div class="flashmsg" style="color:green; margin-left:175px;" ><strong><?php echo $this->session->flashdata('success'); ?><strong></div>
				<?php
				}
      


      
         /*File Validation message ( if not valid extension) */ 
				    if($this->session->flashdata('fileerror')) 
              {
                ?>
                <div class="alert alert-danger">
               <strong> <?php echo $this->session->flashdata('fileerror'); ?></strong>
              </div>
				    <?php  
              }
				   ?> 



              <form method="post" action="<?php echo base_url('admin/updatevideolink'); ?>" enctype="multipart/form-data" name="addblog" id="addblog">
                 <?php
				      $id=$result['VideoId'];		  
				      $urls="https://www.youtube.com/embed/".$id;
				 ?>
				
				
                
							
               
                <input type="hidden"  id="VideoId"  name="VideoId"  value="<?php echo $result['id'];   ?>">
				
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Current Video</label>
                  <div class="col-sm-10">
				            <span style="color:red";><?php echo form_error('file'); ?></span>
                    
                     <iframe width="620" height="315"
                    src="<?php echo $urls; ?>">
                    </iframe> 
                  
                  
                  
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Link</label>
                  <div class="col-sm-10">
				            
                    <input class="form-control" type="text" id="link" name="link">
                  </div>
                </div>
				
               



				
				
				

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit"> 	
					
                  </div>
                </div>
				</form>
               <?php //echo form_close(); ?><!-- End General Form Elements -->

            </div>
          </div>

        </div>

		
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!--<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer>--><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <?php
	$this->load->view('admin/include/footer'); 
	
	
	
	?>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script>
// $().ready(function() {
// $("#addblog").validate({
          
            // rules: {
                    // file: {
                    // required: true
                    // },
                    // 'editor1': {
                    // required: true
                    // }
            // },
            // messages: {
			// file: {
                     // required: "Please enter your image"
                 // }
                // },
			 // ignore: [],	
        // });
// });

$(document).ready(function () {
    $('#addblog').validate({
        rules: {
            'link': {
                required: true
            }
        },
        messages: {
            // Job_Title: "Required",
            // Job_Location: "Required",
            // jobid: "Required",
            // Job_Cat: "Required",
            link: "Please enter YouTube link"
        },
        // errorPlacement: function(error, $elem) {
            // if ($elem.is('textarea')) {
                // $elem.next().css('border', '1px solid red');
            // }
        // },
        ignore: []
    });
});


</script>


  <script src="<?php echo base_url();?>assets/lib/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/dist/jquery.validate.js"></script>		
	<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
</body>

</html>