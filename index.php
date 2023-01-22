<?php
  include("includes/db.php");
  include("admin_area/functions/functions.php");

?>

<!DOCTYPE html>
<html>


<?php include("includes/header.php"); ?>



    <div class="container" id="slider"> <!--Container start-->

        

        <div class="col-md-12">
            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="myCarousel" data-slide-to="0"></li>
                    <li data-target="myCarousel" data-slide-to="1"></li>
                    <li data-target="myCarousel" data-slide-to="2"></li>
                    <li data-target="myCarousel" data-slide-to="3"></li>

                </ol>

                <div class="carousel-inner"><!-- carousel inner start-->
                <?php
                    $get_slider= "select * from slider LIMIT 0,1";
                    $run_slider= mysqli_query($con,$get_slider);
                        while ($row=mysqli_fetch_array($run_slider)) {
                            $slider_name= $row['slider_name'];
                            $slider_image=$row['slider_image'];
                            echo "<div class='item active'>
                            <img src = 'admin_area/slider_images/$slider_image'>
                            </div>
                            ";

                                                    
                    }
                ?>

                <?php
                    $get_slider="select * from slider LIMIT 1,3";
                    $run_slider=mysqli_query($con, $get_slider);
                    while ($row=mysqli_fetch_array($run_slider)){
                        $slider_name=$row['slider_name'];
                        $slider_image=$row['slider_image'];
                        echo "
                                <div class=item>
                                    <img src='admin_area/slider_images/$slider_image'>
                                </div>
                          
                            ";
                    }
                ?>



                </div> <!-- carousel inner End-->

                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">previous</span>

                </a>

                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>

                </a>


            </div>

        </div>

    </div> <!-- container End-->
    <!--advantage start-->
    <div id="advantage">
        <div class="container">
            <div class="same-height-row">

                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#"> BEST PRICES</h3>
                        <P> You can check on all others sites about the prices and than compare with us.</P>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#"> 100% SATISFACTION</h3>
                        <P> Free returns on everything </P>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">WE LOVE OUR CUSTOMER</h3>
                        <P>We provide best service ever</P>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!--advantage End-->

    <div id="hot"> <!--hot start-->
        <div class=" box">
          <div class="container">
                <div class="col-md-12">
                    <h2> Latest this week</h2>
                </div>
          </div>
        </div>
    </div><!--hot End-->

<div id="content" class="container">
    <div class="row">
           <?php
             getpro();
           ?>     
        
    </div>

</div>

<!--Footer start-->
<?php
 include("includes/footer.php");

?>

<!--Footer end-->
