<?php
  include("db.php");

?>
<div id="footer"><!-- footer section start--> 
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6"> <!--col-md-3 col-sm-6 start-->
        <h4> Pages</h4>
        <ul>
          <li><a href="cart.php">Shopping Cart</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="shop.php"> Shop</a></li>
          <li><a href="checkout.php"> My Account</a></li>
        </ul>
        <hr>
        <h4> User Section</h4>
        <ul>
          <li><a href="checkout.php">Login</a></li>
          <li><a href="customer_registration.php">Register</a></li>
        </ul>
        <hr class="hidden-md hidden-lg hidden-sm">

      </div> <!--col-md-3 col-sm-6 End-->

           <div class="col-md-3 col-sm-6"> <!--col-md-3 col-sm-6 start-->
               <h4> TOP  product Categories </h4>

               <ul>
               <?php
                    $get_p_cats="SELECT * FROM `product_categories`";
                    $run_p_cats=mysqli_query($con,$get_p_cats);
                    while ($row_p_cat=mysqli_fetch_array($run_p_cats)){
                      $p_cat_id=$row_p_cat['p_cat_id'];
                      $p_cat_title=$row_p_cat['p_cat_title'];
                      echo "<li>
                                <a href='shop.php?p_cat=$p_cat_id'> $p_cat_title</a>
                            </li>";
                    }
                  ?>
                <hr class="hidden-md hidden-lg">


           </div> <!--col-md-3 col-sm-6 End-->

            <div class=" col-md-3 col-sm-6"><!--col-md-3 col-sm-6 Start-->
              <h4>Where to find us</h4>
              <p>
                <strong>E-commerce.com</strong>
                <br>Gopalgonj
                <br>Dhaka
                <br>Bangladesh
                <br>joyemamun888@gmail.com
                <br>+880 1990767087
              </p>
              <a href="contact.php"> Go to contact us page</a>
              <hr class="hidden-md hidden-lg">

            </div><!--col-md-3 col-sm-6 End-->

            <div class="col-md-3 col-sm-6"> <!--col-md-3 col-sm-6 Start-->
              <h4> Get the news</h4>
              <p class="text-muted"> 
                Subscribe here for geeting News of E-Commerce
              </p>
                  <div class="input-group">
                    <input type="text" name="email" class="form-control" >
                    <span class="input-group-btn">
                      <input type="submit" class="btn btn-defult" value="subscribe">
                    </span>

                  </div>
              </form>
              <hr>
              <h4> Stay In Touch </h4>  
              <p class="social">
                <!-- <div class="col-2"> -->
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                <a href="#"><i class="fa fa-envelope"></i></a>
                <!-- </div> -->
              </p>


            </div><!--col-md-3 col-sm-6 End-->

          </div>

           </div>

</div><!-- footer section End--> 

<div id="copyright"><!--copyright section start--> 
<div class="container">
    <div class="col-md-6">
      <p class="pull-left">
        &copy; 2022 Eng. Joy-E-Mamun
      </p>
    </div>
    <div class="col-md-6">
      <p class="pull-right">
        Tamplate By: <a href="WWW.ECommerce.com"> E-Commerce.com</a>

      </p>
    </div>


</div>

</div><!--copyright section end-->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>