<?php include("includes/header.php"); 
include("admin_area/functions/functions.php");
include("includes/db.php"); 


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

                </ul>

            </div>
            <!--col-md-12 End-->
            <div class="col-md-3">
                <!--col-md-3 start-->
                <?php
                       include("includes/sidebar.php"); 
                 ?>

            </div><!--col-md-3 End-->
            

            <div class="col-md-9">
                <!--col-md-9 Start-->
                <?php  
                   if(!isset($_GET['p_cat'])){

           
                     if(!isset($_GET['cat_id'])){

                        echo"<div class='box'>
                                <h1>Shop</h1>
                                <p>If you want this product please order it.</p>
                              </div>";

                       }
                    }

                ?>
                
                <div class="row"><!-- row start-->

                <?php
                if(!isset($_GET['p_cat'])){
                    if(!isset($_GET['cat_id'])){

                        $per_page=6;
                        if(isset($_GET['page'])){
                            $page=$_GET['page'];
                        }else{
                            $page=1;
                        }
                        $start_from= ($page-1)  * $per_page;
                        $get_product="SELECT * FROM `products` order by 1 DESC LIMIT $start_from, $per_page";
                        $run_pro=mysqli_query($con,$get_product);
                        while($row=mysqli_fetch_array($run_pro)){
                            $pro_id=$row['product_id'];
                            $pro_title=$row['product_title'];
                            $pro_price=$row['product_price'];
                            $pro_img1=$row['product_img1'];
                            
                            echo "
                                    <div class='col-md-4 col-sm-6 center-responsive'>
                                      <div class='product'>
                                            <a href='details.php?pro_id=$pro_id'>
                                                <img src='admin_area/product_images/$pro_img1  class='img-responsive'>
                                            </a>
                                            <div class='text'>
                                            <h3> <a href='details.php?pro_id'>$pro_title</a></h3>
                                            <p class='price'> $pro_price</p>
                                            <p class='buttons'>
                                            <a href='details.php?pro_id=$pro_id' class='btn btn-defult'>View Details</a>
                                            <a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
                                               <i class='fa fa-shopping-cart'> </i>
                                               Add To Cart
                                            </a>
                                            </p>
                                            </div>

                                         </div>
                                    
                                    
                                    </div>
                            
                                ";
                        }
               
                ?>
                    
                </div><!-- row End-->

                <center>
                    <ul class="pagination">
                        <?php

                           $query ="select * from products";
                           $result=mysqli_query($con,$query);
                           $total_record=mysqli_num_rows($result);
                           $total_page=ceil($total_record / $per_page);
                           echo "
                             <li><a href='shop.php?page=1'>".'First Page'."</a></li>
                           
                           
                           ";

                           for($i=1; $i<=$total_page; $i++){
                            echo "
                            <li><a href='shop.php?page=".$i."'>".$i."</a></li>
                              ";

                           };
                           echo "
                            <li><a href='shop.php?page=$total_page'>".'Last Page'."</a></li>
                           
                           
                           ";



                        
                             }  
                            }
                        ?>                        

                    </ul>
                </center>

                
                    
                    <?php
                    getPcatpro();

                    getCatPro();
                    
                    ?>


                    \
                

            </div><!--col-md-9 End-->
            

</div><!--container End-->
        
    </div> <!--content End-->


    <!--Footer start-->
    <?php
include("includes/footer.php");

?>

    <!--Footer end-->
