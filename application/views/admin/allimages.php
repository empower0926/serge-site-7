<?php 

    /* Including header and sidebar */   
    $this->load->view('admin/include/header'); 
    $this->load->view('admin/include/sidebar'); 
 ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>All Images</h1>
      
	  <!--<nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>-->
	  
	  
	  
    </div><!-- End Page Title -->


   

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Blog Image Listing <a href="<?php echo base_url('admin/addblogimage');?>" class="btn btn-info">Add New Image</a></h5>
              
              <?php 
         /*File Validation message ( if image uploaded successfully) */ 
				    if($this->session->flashdata('update')) 
              {
                ?>
                <div class="alert alert-success">
               <strong> <?php echo $this->session->flashdata('update'); ?></strong>
              </div>
				    <?php  
              }
				    



         /*File Validation message ( if image uploaded successfully) */ 
				    if($this->session->flashdata('delete')) 
              {
                ?>
                <div class="alert alert-success">
               <strong> <?php echo $this->session->flashdata('delete'); ?></strong>
              </div>
				    <?php  
              }
				   ?> 
 <?php //echo validation_errors(); 
				if($this->session->flashdata('error')) {
					
						?><div class="flashmsg" style="color:red; margin-left:175px;" ><strong><?php echo $this->session->flashdata('error'); ?><strong></div>
				<?php
				}
				?>



              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Path</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php 

                if(empty($result))
                {
                  $result=array();
                }

                  $i="0";
                  foreach($result as $res) { 
                  //echo "<pre>";print_R($res);
                  $i++;
				  ?>
				  <tr>
                    <th scope="row"><?php echo $i; ?></th>
                   
                    <td><img height="50px" width="50px" src="<?php echo base_url();?>upload/blog-gallery/<?php echo $res['image'];?>"></td>

                    <th scope="row"><?php echo base_url();?>upload/blog-gallery/<?php echo $res['image'];?></th>  


                   
                    


                  </tr>
                  <?php } ?>
				  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

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
  </footer>
  -->
  
  
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
 <?php
	$this->load->view('admin/include/footer'); 
	?>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>