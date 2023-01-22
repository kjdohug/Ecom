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
          Registration
        </li>

      </ul>

    </div>
    <!--col-md-12 End-->
    <div class="col-md-3">
      <!--col-md-3 start-->
      

    </div>
    <!--col-md-3 End-->



    <div class="col-md-9">
      <!--col-md-9 Start-->
      <div class="box">
        <!--box start-->
        <div class="box-header">
          <!--box-header start-->
          <center>
            <h2>Customer Registration</h2>

          </center>
        </div>
        <!--box-header End-->
        <form action="customer_registration.php" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label> Customer Name</label>
            <input type="text" name="c_name" required="" class="form-control">
          </div>


          <div class="form-group">
            <label>Customer E-mail</label>
            <input type="text" name="c_email" class="form-control" required="">
          </div>
          <div class="form-group">
            <label>Customer Password</label>
            <input type="Password" name="c_Password" class="form-control" required="">
          </div>

          <div class="form-group">
            <label>Country</label>
            <input type="text" name="c_country" class="form-control" required="">
          </div>
          <div class="form-group">
            <label>City</label>
            <input type="text" name="c_city" class="form-control" required="">
          </div>
          <div class="form-group">
            <label>Contact Number</label>
            <input type="text" name="c_contact" class="form-control" required="">
          </div>

          <div class="form-group">
            <label>Address</label>
            <input type="text" name="c_address" class="form-control" required="">
          </div>
          <div class="form-group">
            <label>Image</label>
            <input type="file" name="c_image" class="form-control" required="">
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
              <i class="fa fa-user-md"></i>Register

            </button>


          </div>
        </form>

      </div>
      <!--box end-->
    </div>
    <!--col-md-9 End-->

  </div>



  <!--Footer start-->
  <?php
include("includes/footer.php");

?>

  <!--Footer end-->