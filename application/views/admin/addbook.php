<?php 
header('Cache-Control: max-age=900');
    /* Including header and sidebar */   
    $this->load->view('admin/include/header'); 
    $this->load->view('admin/include/sidebar'); 
  ?>
  <!-- ======= Sidebar ======= -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Book  <a href="<?php echo base_url('admin/allbooks'); ?>" class="btn btn-info">All Books</a></h1> 
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
			
			
			
              <h5 class="card-title" style="margin-right:60px;">Book Info</h5>

              <!-- General Form Elements -->
			  <style>
			      #file-error {
                  color: red;
                }
                #text2-error {
                      color: red;
                    }
			  </style>

        

          
          <?php 
          /*File Validation message ( if file is empty) */ 
				    if($this->session->flashdata('empty')) 
              {
                ?>
                <div class="alert alert-danger">
               <strong>Error!</strong> <?php echo $this->session->flashdata('empty'); ?>
              </div>
				    <?php  
              }
				   ?> 
           
           <?php 
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
        
        <?php 
         /*File Validation message ( if image uploaded successfully) */ 
				    if($this->session->flashdata('success2')) 
              {
                ?>
                <div class="alert alert-success">
               <strong> <?php echo $this->session->flashdata('success2'); ?></strong>
              </div>
				    <?php  
              }
				   ?> 

              <form method="post" action="<?php echo base_url('admin/addbook'); ?>" enctype="multipart/form-data" name="addblog" id="addblog">
                
                
                 <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Title (English)</label>
                  <div class="col-sm-10">
				   <span style="color:red";><?php  ?></span>
                    <input class="form-control validate[required]" type="text" id="text2" name="title" required>
                </div>
                </div>
                
                
                 <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Title (French)</label>
                  <div class="col-sm-10">
				   <span style="color:red";><?php  ?></span>
                    <input class="form-control validate[required]" type="text" id="text3" name="titlefr">
                </div>
                </div>
                
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Title (Spnaish)</label>
                  <div class="col-sm-10">
				   <span style="color:red";><?php  ?></span>
                    <input class="form-control validate[required]" type="text" id="text4" name="titlesp">
                </div>
                </div>
                
                
                
                
                 <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Link</label>
                  <div class="col-sm-10">
				   <span style="color:red";><?php  ?></span>
                    <input class="form-control validate[required]" type="text" id="text" name="text">
                </div>
                </div>
                
                
                
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
				   <span style="color:red";><?php echo form_error('file'); ?></span>
                    <input class="form-control validate[required]" type="file" id="file" name="file" >
                    
                    
                  </div>
                </div>
				
		       
		        
		        <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Description in English (Max characters - 60 )</label>
                  <div class="col-sm-10">
				   <span style="color:red";><?php  ?></span>
                   
                  <textarea id="w3review" id="smalltext" name="smalltext" rows="4" cols="50" maxlength="60"></textarea>
                  
                  </div>
                </div>
                
                
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Description in French (Max characters - 60 )</label>
                  <div class="col-sm-10">
				   <span style="color:red";><?php  ?></span>
                   
                  <textarea id="w3review2" id="smalltext2" name="smalltextfr" rows="4" cols="50" maxlength="60"></textarea>
                  
                  </div>
                </div>
                
                
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Description in Spanish (Max characters - 60 )</label>
                  <div class="col-sm-10">
				   <span style="color:red";><?php  ?></span>
                   
                  <textarea id="w3review3" id="smalltext3" name="smalltextsp" rows="4" cols="50" maxlength="60"></textarea>
                  
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
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
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
            'file': {
              required:true,
              extension: "xls|csv"
            }
            
        },
        messages: {
            file: "Please enter your image",
            
        }
        // errorPlacement: function(error, $elem) {
            // if ($elem.is('textarea')) {
                // $elem.next().css('border', '1px solid red');
            // }
        // },
       
    });
});


</script>


  <script src="<?php echo base_url();?>assets/lib/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/dist/jquery.validate.js"></script>		

</body>

</html>