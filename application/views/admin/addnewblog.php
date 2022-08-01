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
      <h1>Add Blogs 
        
      <a href="<?php echo base_url('admin/blogs');?>" class="btn btn-info">All Blogs</a>
      
      <!--<button type="button" class="btn btn-info">All Blogs</button></h1> -->
    
    
    
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

      
         <?php 
            /*if blogs added successfully */ 
				    if($this->session->flashdata('success')) 
              {
                ?>
                <div class="alert alert-success">
               <strong> <?php echo $this->session->flashdata('success'); ?></strong>
              </div>
				    <?php  
              }
				   ?> 





        


              <?php 
            /*if image not uploding*/ 
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
            /*if Title already exist*/ 
				    if($this->session->flashdata('exist')) 
              {
                ?>
                <div class="alert alert-danger">
               <strong> <?php echo $this->session->flashdata('exist'); ?></strong>
              </div>
				    <?php  
              }
				   ?>


              <form method="post" action="<?php echo base_url('admin/addblog'); ?>" enctype="multipart/form-data" name="addblog" id="addblog">
                 <?php
						//$attributes = array('id' => 'addblog','name' => 'addblog');
						//echo form_open_multipart('admin/addblog', $attributes);
							
					?>
				
				<div class="row mb-3">
		             <label for="inputText" class="col-sm-2 col-form-label">Title (English)</label>
                      <div class="col-sm-10">
		             <span style="color:red";><?php echo form_error('title'); ?></span>
                     <input type="text" class="form-control" name="title" id="title" value="<?php echo set_value('title'); ?>">
                    </div>
                </div>
                
                <div class="row mb-3">
		             <label for="inputText" class="col-sm-2 col-form-label">Title (French)</label>
                      <div class="col-sm-10">
		             <span style="color:red";><?php //echo form_error('title'); ?></span>
                     <input type="text" class="form-control" name="titlefr" id="titlefr" value="<?php echo set_value('titlefr'); ?>">
                    </div>
                </div>
                
                
                
                <div class="row mb-3">
		             <label for="inputText" class="col-sm-2 col-form-label">Title (Spanish)</label>
                      <div class="col-sm-10">
		             <span style="color:red";><?php //echo form_error('title'); ?></span>
                     <input type="text" class="form-control" name="titlesp" id="titlesp" value="<?php echo set_value('titlesp'); ?>">
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
				      <label for="inputNumber" class="col-sm-2 col-form-label">Content (English)</label>
				      <div class="col-sm-10">
				      <span style="color:red";><?php echo form_error('editor1'); ?></span>
				        <textarea class="ckeditor" name="editor1" id="editor1"><?php echo set_value('editor1'); ?> </textarea>
				</div>

                
                
                <div class="row mb-3">
				      <label for="inputNumber" class="col-sm-2 col-form-label">Content (French)</label>
				      <div class="col-sm-10">
				      <span style="color:red";><?php echo form_error('editor2'); ?></span>
				        <textarea class="ckeditor" name="editor2" id="editor2"><?php echo set_value('editor2'); ?> </textarea>
				</div>



                <div class="row mb-3">
				      <label for="inputNumber" class="col-sm-2 col-form-label">Content (Spanish)</label>
				      <div class="col-sm-10">
				      <span style="color:red";><?php echo form_error('editor3'); ?></span>
				        <textarea class="ckeditor" name="editor3" id="editor3"><?php echo set_value('editor3'); ?> </textarea>
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

 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <?php
	$this->load->view('admin/include/footer'); 
	
	
	
	?>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script>
 $().ready(function() {
 $("#addblog").validate({
          
            rules: {
                    title: {
                     required: true
                     },
                     file: {
                     required: true
                     },
                  'editor1': {
                    required:  required: function() 
                    {
                     CKEDITOR.instances.cktext.updateElement();
                    }
             },
             messages: {
			          file: {
                      required: "Please enter your image"
                  }
                 },
			  ignore: [],	
        });
 });



</script>

<!--
  <script src="<?php //echo base_url();?>assets/lib/jquery.js"></script>
  <script src="<?php// echo base_url();?>assets/dist/jquery.validate.js"></script>-->		
	<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
</body>

</html>