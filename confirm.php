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
          My Account
        </li>

      </ul>

    </div>
    <!--col-md-12 End-->

    <div class="col-md-3">
      <!--col-md-3 start-->

      <?php
                   include("my_account_sidebar.php"); 
                 ?>

    </div>
    <!--col-md-3 End-->


    <div class="col-md-9">
      <!--col-md-9 Start-->
      <div class="box">
        <h1 align="center">Please confirm your payment</h1>
        <form action="confirm.php" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label>Invoice Number</label> <br>
            <input type="text" name="invoice_number " required="">
          </div>

          <div class="form-group">
            <label> Amount</label> <br>
            <input type="text" name="amount " required="">
          </div>

          <div class="form-group">
            <label>Select payment Mode</label>
            <select class="form-control" name="payment_mode">
              <option> Bank Transfer</option>
              <option> Paypal</option>
              <option> Bkash</option>
              <option> PayTm</option>
            </select>
          </div>

          <div class="form-group">
            <label>Transection Number</label> <br>
            <input type="text" name="trfr_number " required="">
          </div>

          <div class="form-group">
            <label>Payment Date</label> <br>
            <input type="date" name="date " required="">
          </div>

          <div class="text-center">
            <button type="submit" name="confirm_payment" class="btn btn-primary btn-lg">
              Confirm Payment
            </button>
          </div>
        </form>
      </div>

    </div> <!--col-md-9 End-->
    





  </div>



  <!--Footer start-->
  <?php
include("includes/footer.php");

?>

  <!--Footer end-->