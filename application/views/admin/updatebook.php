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
			<style>
			    #text-error {
                      color: red;
                    }
			  </style>
			
			
              <h5 class="card-title">Blog details</h5>

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



              <form method="post" action="<?php echo base_url('admin/updatebook'); ?>" enctype="multipart/form-data" name="addblog" id="addblog">
                 <?php
						 // echo "<pre>";print_R($result);
						  
						  ?>
				
				
                
							
                <input type="hidden"  id="old"  name="old"  value="<?php echo $result['image'];   ?>">
                <input type="hidden"  id="bookId"  name="bookId"  value="<?php echo $result['id'];   ?>">
				
				
				<div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Title (English)</label>
                  <div class="col-sm-10">
				   <span style="color:red";><?php  ?></span>
                    <input class="form-control validate[required]" type="text" id="title" name="title" value="<?php echo $result['title']; ?>" required>
                  </div>
                </div>
                
                
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Title(French)</label>
                  <div class="col-sm-10">
				   <span style="color:red";><?php  ?></span>
                    <input class="form-control validate[required]" type="text2" id="title2" name="titlefr" value="<?php echo $result['titlefr']; ?>" >
                  </div>
                </div>
                
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Title (Spnaish)</label>
                  <div class="col-sm-10">
				   <span style="color:red";><?php  ?></span>
                    <input class="form-control validate[required]" type="text" id="text4" name="titlesp" value="<?php echo $result['titlesp']; ?>">
                </div>
                </div>
                
                
                
                
                
				
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Link</label>
                  <div class="col-sm-10">
				   <span style="color:red";><?php  ?></span>
                    <input class="form-control validate[required]" type="text" id="text" name="text" value="<?php echo $result['link']; ?>">
                  
                  
                  </div>
                </div>
                
                
                
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Current Image</label>
                  <div class="col-sm-10">
				            <span style="color:red";><?php echo form_error('file'); ?></span>
                    <img src="<?php echo $result['image']; ?>" height="50px" width="50px" >
                  </div>
                </div>


                    




                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
				            <span style="color:red";><?php echo form_error('file'); ?></span>
                    <input class="form-control validate[required]" type="file" id="file" name="file">
                  </div>
                </div>
				
               
                 <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Description in English (Max characters - 60 )</label>
                  <div class="col-sm-10">
				   <span style="color:red";><?php  ?></span>
                   
                  <textarea id="w3review" id="smalltext" name="smalltext" rows="4" cols="50" maxlength="60"><?php echo $result['description']; ?></textarea>
                  
                  </div>
                </div>   


				<div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Description in French (Max characters - 60 )</label>
                  <div class="col-sm-10">
				   <span style="color:red";><?php  ?></span>
                   
                  <textarea id="w3review2" id="smalltext2" name="smalltextfr" rows="4" cols="50" maxlength="60"><?php echo $result['descriptionfr']; ?></textarea>
                  
                  </div>
                </div>
                
                
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Description in Spanish (Max characters - 60 )</label>
                  <div class="col-sm-10">
				   <span style="color:red";><?php  ?></span>
                   
                  <textarea id="w3review3" id="smalltext3" name="smalltextsp" rows="4" cols="50" maxlength="60"><?php echo $result['descriptionsp']; ?></textarea>
                  
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