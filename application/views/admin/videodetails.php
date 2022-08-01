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


				</form>
               <?php //echo form_close(); ?><!-- End General Form Elements -->

            </div>
          </div>

        </div>

		
      </div>
    </section>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <?php
	$this->load->view('admin/include/footer'); 
	
	
	
	?>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script>

</script>


		
	
</body>

</html>