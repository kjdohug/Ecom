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
                    Cart
                </li>

            </ul>

        </div> <!--col-md-12 End-->
        

        <div class=" col-md-9"><!-- col-md-9 start -->
            
            <div class="box">
                <form action="cart.php" method="post" enctype="multipart-form-data">
                    <h1> Shopping Cart</h1>
                    <p class="text-muted">Currently you have 3 item(s) in your cart</p>
                    <div class="table-responsive"> <!--table-responsive Start-->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                    <th colspan="2">Product</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Size</th>
                                    <th colspan="1">Delete</th>
                                    <th colspan="1">Sub-Total</th>

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="admin_area/product_images/tshirt03.jpg"> </td>
                                    <td>Men`s Cotton Multi- color T-Shirt </td>
                                    <td>2</td>
                                    <td>$ 100</td>
                                    <td>Large</td>
                                    <td><input type="checkbox" name="remove[]"></td>
                                    <td>$ 150</td>
                                </tr>
                                </tr>
                                </thead>
                            <tbody>
                                <tr>
                                    <td><img src="admin_area/product_images/tshirt03.jpg"> </td>
                                    <td>Men`s Cotton Multi- color T-Shirt </td>
                                    <td>2</td>
                                    <td>$ 200</td>
                                    <td>Large</td>
                                    <td><input type="checkbox" name="remove[]"></td>
                                    <td>$ 250</td>
                                </tr>
                            </tbody>
                             
                            <tfoot>
                                <tr>
                                    <th colspan="5">Total</th>
                                    <th colspan="2"> $400</th>
                                </tr>

                             </tfoot>

                        </table>

                    </div> <!--table-responsive End-->
                    <div class="box-footer">
                        <div class="pull-left"> <!--pull-left Start-->
                            <a href="index.php" class="btn btn-default">
                                <i class="fa fa-chevron-left"></i>Continue Shopping
                            </a>
                        </div>  <!--pull-left End-->
                        
                        <div class="pull-right"> <!--pull-Right Start-->
                            <button class="btn btn-defult"  type="submit" name="update" value="update cart">
                                <i class="fa fa-refresh"> update cart</i>
                            </button>
                            <a href="checkout.php" class="fa fa-primary">
                                Proceed to checkout <i class="fa fa-chevron-right"></i>
                            </a>

                        </div> <!--pull-Right End-->

                    </div>
                </form>

            </div>
            <!--col-md-9 End -->

            <div id="row same-height-row"><!--row same-height-row start-->
                    
                    <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Start-->
                        
                        <div class="box-same-height headline"><!--Box same height headline start-->
                            
                            <h3 class="text-center"> You Also Like These product

                            </h3>

                        </div><!--Box same height headline End-->
                        

                    </div><!-- col-md-3 col-sm-6 End-->
                    <div class=" center-responsive col-md-3">
                        <!-- center-responsive col-md-6 Start-->

                        <div class="product same-height">
                            <a href="">
                                <img src="admin_area/product_images/tshirt03.jpg" class="img-responsive">

                            </a>
                            <div class="text">
                                <h3>
                                    <a href="details.php">Men`s Cotton Multi- color T-Shirt</a>
                                </h3>
                                <p class="price">$150</p>

                            </div>

                        </div>

                    </div><!-- center-responsive col-md-3 End-->
                    <div class=" center-responsive col-md-3">
                        <!-- center-responsive col-md-6 Start-->

                        <div class="product same-height">
                            <a href="">
                                <img src="admin_area/product_images/tshirt03.jpg" class="img-responsive">

                            </a>
                            <div class="text">
                                <h3>
                                    <a href="details.php">Men`s Cotton Multi- color T-Shirt</a>
                                </h3>
                                <p class="price">$150</p>

                            </div>

                        </div>

                    </div><!-- center-responsive col-md-3 End-->

                    <div class=" center-responsive col-md-3">
                        <!-- center-responsive col-md-6 Start-->

                        <div class="product same-height">
                            <a href="">
                                <img src="admin_area/product_images/tshirt03.jpg" class="img-responsive">

                            </a>
                            <div class="text">
                                <h3>
                                    <a href="details.php">Men`s Cotton Multi- color T-Shirt</a>
                                </h3>
                                <p class="price">$150</p>

                            </div>

                        </div>

                    </div><!-- center-responsive col-md-3 End-->


                </div> <!--row same-height-row End-->
               
            
        </div> <!-- col-md-9 End -->
                <div class="col-md-3"> <!-- col-md-3 start -->
                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3> Order Summary </h3>
                        </div>
                        <p class ="text-muted">
                            Shipping and additional costs are calculated based on the values you have entred

                        </p>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody> 
                                    <tr>
                                        <td>Order Subtotal</td>
                                        <th>$150</th>
                                    </tr>
                                    <tr>
                                        <td>Shipping and handling</td>
                                        <th>$0</th>
                                    </tr>
                                    <tr>
                                        <td>TAX</td>
                                        <th>$0</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>$150</th>

                                    </tr>
                                </tbody>

                            </table>

                        </div>
                    

                    </div>

                </div> <!-- col-md-3 End -->
        
    </div> <!--CONTENEAR END-->   

    </div><!--content End-->
    


    <!--Footer start-->
    <?php include("includes/footer.php"); ?>

    <!--Footer end-->