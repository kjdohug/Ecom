<?php include("includes/header.php"); 
include("admin_area/functions/functions.php");
include("includes/db.php");
?>
<?php
if (isset($_GET['pro_id'])){
    $pro_id=$_GET['pro_id'];
    $get_product=" SELECT * FROM `products` WHERE product_id='$pro_id'";
    $run_product=mysqli_query($con,$get_product);
    $row_product=mysqli_fetch_array($run_product);
    $p_cat_id=$row_product['P_cat_id'];
    $p_title=$row_product['product_title'];
    $p_price=$row_product['product_price'];
    $p_desc=$row_product['product_desc'];
    $p_img1=$row_product['product_img1'];
    $p_img2=$row_product['product_img2'];
    $p_img3=$row_product['product_img3'];
    $get_p_cat="SELECT * FROM `product_categories` WHERE p_cat_id='$p_cat_id'";
    $run_p_cat=mysqli_query($con,$get_p_cat);
    $row_p_cat=mysqli_fetch_array($run_p_cat);
    $p_cat_id=$row_p_cat['p_cat_id'];
    $p_cat_title=$row_p_cat['p_cat_title'];

}

?>

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
                        Shop
                    </li>
                    <li>
                       <a href="shop.php?p_cat=<?php echo $p_cat_id;?> "> <?php echo $p_cat_title ?></a> 
                       
                    </li>
                    <li>
                        <?php echo $p_title ?>
                        
                    </li>

                </ul>

            </div>
            <!--col-md-12 End-->
            <div class="col-md-3">
                <!--col-md-3 start-->
                <?php
                    include("includes/sidebar.php"); 
                     ?>

            </div>
            <!--col-md-3 End-->

            <div class="col-md-9">
                <!-- <div class="col-md-9 start"> -->

                <div class="row" id="productmain">
                    <!-- <div class="row Start"> -->
                    <div class="col-sm-6">
                        <!--col-sm-6 slidebar start-->
                        <div id="mainimage">
                            <div id="mycarousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel indicators" style="list-style: none;">
                                    <li data target="#mycarousel" data-slide-to="0" class="active"></li>
                                    <li data target="#mycarousel" data-slide-to="1"></li>
                                    <li data target="#mycarousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <!-- "carousel-inner start"> -->
                                    <div class="item active">
                                        <center>
                                            <img src="admin_area/product_images/<?php echo $p_img1  ?> class="img-responsive">
                                        </center>

                                    </div>
                                    <div class="item">
                                        <center>
                                            <img src="admin_area/product_images/<?php echo $p_img2  ?>" class="img-responsive">
                                        </center>

                                    </div>
                                    <div class="item">
                                        <center>
                                            <img src="admin_area/product_images/<?php echo $p_img3  ?>" class="img-responsive">
                                        </center>

                                    </div><!-- "carousel-inner  End -->
                                    <a href="#mycarousel" class="left carousel-control" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only"> Previous </span>
                                    </a>


                                    <a href="#mycarousel" class="right carousel-control" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only"> Next </span>
                                    </a>
                                </div>

                            </div>

                        </div>

                    </div>
                    <!--col-sm-6 sildebar End-->







                    <div class="col-sm-6"> <!--col-sm-6 Start-->
                       
                        <div class="box"><!--Box Start-->
                            
                            <h1 class="text-center">  <?php echo $p_title  ?></h1>
                            <form action="index.php?add_cart=<?php echo $prp_id  ?>" method="post" class="fom-horizontal"> <!--Form Start-->
                                
                                <div class="form-group"><!-- <form-group start> -->
                                    
                                    <label class="col-md-5 control-label">Product Quantity</label>
                                    <div class="col-md-7"><!--col-md-7 start-->
                                        
                                        <select name="product_qty " class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div><!--col-md-7 End-->
                                    
                                </div><!--form group end-->
                                
                                <div class="form-group">
                                    <label class="col-md-5 control-label"> Product Size</label>
                                    <div clas="col-md-7">
                                        <select name="product_size" class="form-control">
                                            <option> Select a Size</option>
                                            <option> Small(S)</option>
                                            <option> Medium(M)</option>
                                            <option> Large(L)</option>
                                            <option> Extra-Large(XL)</option>
                                        </select>

                                    </div>

                                </div>

                                <p class="price">$ <?php echo $p_price;  ?></p>
                                <p class="text-center buttons">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-shopping-cart"></i> Add to cart
                                    </button>
                                </p>
                            </form>
                            <!--Form End-->

                        </div>
                        <!--Box end-->

                        <div class="col-xs-4">
                            <a href="#" class="thumb">
                                <img src="admin_area/product_images/<?php echo $p_img1  ?>" class="img-responsive">

                            </a>

                        </div>

                        <div class="col-xs-4">
                            <a href="#" class="thumb">
                                <img src="admin_area/product_images/<?php echo $p_img2  ?>" class="img-responsive">

                            </a>

                        </div>

                        <div class="col-xs-4">
                            <a href="#" class="thumb">
                                <img src="admin_area/product_images/<?php echo $p_img3  ?>" class="img-responsive">

                            </a>

                        </div>


                    </div>
                    <!--col-sm-6 End-->

                </div> <!-- row End"> -->
                
                <div class="box" id="details">
                    <h4>Product Details</h4>
                    <p><?php echo $p_desc  ?>

                    </p>


                    <h4>Size</h4>
                    <ul>
                        <li> Small(S)</li>
                        <li> Medium(M)</li>
                        <li> Large(L)</li>
                        <li> Extra-large(xL)</li>
                    </ul>

                </div>

                <div id="row same-height-row"><!--row same-height-row start-->
                    
                    <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Start-->
                        
                        <div class="box-same-height headline"><!--Box same height headline start-->
                            
                            <h3 class="text-center"> You Also Like These product

                            </h3>

                        </div><!--Box same height headline End-->
                        

                    </div><!-- col-md-3 col-sm-6 End-->
                    


                </div>
                <!--row same-height-row End-->

                <?php
                $get_product="SELECT * FROM `products` order by 1 LIMIT 0,3";
                $run_product=mysqli_query($con,$get_product);
                while($row=mysqli_fetch_array($run_product)){
                    $pro_id=$row['product_id'];
                    $pro_title=$row['product_title'];
                    $pro_price=$row['product_price'];
                    $pro_img1=$row['product_img1'];
                        echo"
                                <div class='center-responsive col-md-3 col-sm-6'>
                                <div class='product same-height'>
                                <a href='details.php?pro_id'> 
                                     <img src='admin_area/product_images/$pro_img1' class='img-responsive'> 
                                </a>
                                <div class=''text>
                                <h3> <a href='details.php?$pro_id'> $pro_title</a></h3>
                                <p class='price'>
                                $ $pro_price
                                </p>
                                </div>
                                </div>
                                </div>
                                
                        ";

                }
                
                
                ?>

            </div>
            <!--col-md-9 End-->

        </div>
        <!--container End-->

    </div>
    <!--content End-->


    <!--Footer start-->
     
    <?php include("includes/footer.php"); ?>

    <!--Footer end-->

