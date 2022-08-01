<?php 
//header('Cache-Control: max-age=900');
    /* Including header and sidebar */   
    $this->load->view('admin/include/header'); 
    $this->load->view('admin/include/sidebar'); 
  ?>
  <!-- ======= Sidebar ======= -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Blogs <a href="<?php echo base_url('admin/blogs');?>" class="btn btn-info">All Blogs</a></h1> 
     <!-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>-->
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
			
			
			
              <h5 class="card-title">Blog details</h5>

              <!-- General Form Elements -->
			          <?php
			                /*for english language */
					        $des=$result['description'];
            		        
            		        /*for english language */
					        $french=$result['description_front_french'];
					        
					        /*for english language */
					        $spanish=$result['description_front_spanish'];
    		    ?>
			    <div class="row mb-3">
				<label for="inputNumber" class="col-sm-2 col-form-label">Content in (English)</label>
				<div class="col-sm-10">
				 <span style="color:red";><?php echo form_error('editor1'); ?></span>
				<!--<textarea class="ckeditors" name="editor1" name="editor1" id="editor1" ></textarea>-->
					
					<textarea class="ckeditor" name="editor1" id="editor1"><?php echo html_entity_decode($des); ?> </textarea>
				
				</div>
				</div>
				
				
				<div class="row mb-3">
				<label for="inputNumber" class="col-sm-2 col-form-label">Content in (French)</label>
				<div class="col-sm-10">
				 <span style="color:red";><?php //echo form_error('editor1'); ?></span>
				<!--<textarea class="ckeditors" name="editor1" name="editor1" id="editor1" ></textarea>-->
					
					<textarea class="ckeditor" name="editor1" id="editor1"><?php echo html_entity_decode($french); ?> </textarea>
				
				</div>
				</div>
				
				
				
				<div class="row mb-3">
				<label for="inputNumber" class="col-sm-2 col-form-label">Content in (Spanish)</label>
				<div class="col-sm-10">
				 <span style="color:red";><?php //echo form_error('editor1'); ?></span>
				<!--<textarea class="ckeditors" name="editor1" name="editor1" id="editor1" ></textarea>-->
					
					<textarea class="ckeditor" name="editor1" id="editor1"><?php echo html_entity_decode($spanish); ?> </textarea>
				
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
            'editor1': {
                required: true
            }
        },
        messages: {
            // Job_Title: "Required",
            // Job_Location: "Required",
            // jobid: "Required",
            // Job_Cat: "Required",
            editor1: "Requiredss"
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