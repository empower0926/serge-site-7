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
      <h1>Settings </h1> 
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
			
			
			
              <h5 class="card-title">Change Passoword</h5>

              <!-- General Form Elements -->
			 <style>
         #password-error {
          color: red; 
          }
          #cpassword-error {
            color: red;
          }

         </style>
       
       
       <?php 
         /*if password changed successfully */ 
				    if($this->session->flashdata('success')) 
              {
                ?>
                <div class="alert alert-success">
               <strong> <?php echo $this->session->flashdata('success'); ?></strong>
              </div>
				    <?php  
              }

            //  echo '<pre>'; print_r($this->session->all_userdata());
              //echo  $this->session->userdata['logged_in']['id'];
				   ?> 

              <form method="post" action="<?php echo base_url('admin/changepassword'); ?>" enctype="multipart/form-data" name="addblog" id="addblog">
                 <?php
						//$attributes = array('id' => 'addblog','name' => 'addblog');
						//echo form_open_multipart('admin/addblog', $attributes);
							
					?>
				
				<div class="row mb-3">
				
                  <label for="inputText" class="col-sm-2 col-form-label">New Password</label>
                  <div class="col-sm-10">
				  <span style="color:red";><?php echo form_error('title'); ?></span>
                    <input type="password" class="form-control" name="password" id="password" value="" required>
                  </div>
                </div>
                
                <div class="row mb-3">
				
        <label for="inputText" class="col-sm-2 col-form-label">Confirm Password</label>
        <div class="col-sm-10">
        <span style="color:red";><?php echo form_error('title'); ?></span>
          <input type="password" class="form-control" name="cpassword" value="" required>
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
      rules : {
                password : {
                    minlength : 5
                },
                cpassword : {
                    minlength : 5,
                    equalTo : "#password"
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