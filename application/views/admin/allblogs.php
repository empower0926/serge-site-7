<?php 

    /* Including header and sidebar */   
    $this->load->view('admin/include/header'); 
    $this->load->view('admin/include/sidebar'); 
 ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>All Blogs</h1>
      
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
              <h5 class="card-title">Blog Listing <a href="<?php echo base_url('admin/addblog');?>" class="btn btn-info">Add New Blog</a></h5>
              
              <?php 
            /*if blogs updated successfully */ 
				    if($this->session->flashdata('update')) 
              {
                ?>
                <div class="alert alert-success">
               <strong> <?php echo $this->session->flashdata('update'); ?></strong>
              </div>
				    <?php  
              }
				   ?> 



          <?php 
            /*if blogs updated successfully */ 
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
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Edit</th>
					<th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
				  $i="0";
          if(empty($result))
          {
            $result=array();
          }
          foreach($result as $res) { 
  			  $i++;
				  ?>
				  <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $res['title']; ?></td>
                    <td><img height="50px" width="50px" src="<?php echo $res['image'];?>"></td>
                    <td><a class="btn btn-success" href="<?php echo base_url() ?>admin/blogdetail/<?php echo $res['id']; ?>">Detail</a></td>
                    <td><a class="btn btn-primary" href="<?php echo base_url() ?>admin/editblog/<?php echo $res['id']; ?>">Edit</a></td>
					
                    <td><a class="btn btn-danger" href="<?php echo base_url() ?>admin/deleteblog/<?php echo $res['id']; ?>" onclick="return confirm('Are you sure you want to delete this blog ?')">Delete</a></td>
					
                    


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