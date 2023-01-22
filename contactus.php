<?php include("includes/header.php"); ?>

<div id="content">
  <div class="container">
    <!--container start-->
    <div class="col-md-12">
      <!--col-md-12 start-->
      <ul class="breadcrumb">

        <li>
          <a href="home.php"> Home </a>
        </li>
        <li>
          Contact
        </li>

      </ul>

    </div>
    <!--col-md-12 End-->
    <div class="col-md-3">
      <!--col-md-3 start-->
      <?php
        include("includes/sidebar.php"); 
      ?>

    </div> <!--col-md-3 End-->
    


    <div class="col-md-9"> <!--col-md-9 Start-->
      <div class="box"> <!--box start-->
        <div class="box-header"> <!--box-header start-->
          <center>
            <h2>Contact Us</h2>
            <p class="text-muted"> If you have any questions, please
              feel free to contact us, our customer service center is working
              for you 24/7
            </p>
          </center>
        </div> <!--box-header End-->
        <form action="contactus.php" method="post">

          <div class="form-group">
              <label > Name</label>
              <input type="text" name="name" required="" class="form-control">
          </div>

          <div class="form-group">
            <label>E-mail</label>
            <input type="text" name="email" class="form-control" required="">
          </div>

          <div class="form-group">
            <label> Subject</label>
            <input type="text" name="submit" class="form-control" required="">

          </div>
          <div class="form-group">
            <label> Massage </label>
            <textarea class="form-control" name="massage"></textarea>
          </div>
            <div class="text-center">
             <button type="submit" name="submit" class="btn btn-primary">
              <i class="fa fa-user-md"></i>Send Massage

             </button>
              

            </div>
        </form> 
         
      </div> <!--box end-->
    </div> <!--col-md-9 End-->

  </div>



  <!--Footer start-->
  <?php
include("includes/footer.php");

?>

  <!--Footer end-->