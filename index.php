<!DOCTYPE html>
<html>

<head>
    <title> E Commerce store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css"
        integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <!--Top Header start-->
    <div class="p-2" id="topheader">
        <div class="container">
            <div class="row">
                <div class="col-12 text-right">
                    <a class="p-2" href="tel:+8801990767087">
                        <i class="fa-sharp fa-solid fa-phone" style="margin-right: 5px;"></i>
                        +8801990767087
                    </a>

                    <a class="p-2" href="mailto:joyemamun888@gmail.com">
                        <i class="fa-sharp fa-solid fa-envelope" style="margin-right: 5px;"></i>
                        joyemamun888@gmail.com
                    </a>

                </div>

            </div>

        </div>

    </div>



    <!--Top Bar start-->

    <div id="top">


        <!--container start-->
        <div class="container ">
            <!-- col-md-6 offer start-->
            <div class="col-md-6 offer">
                <a href="#" class="btn btn-primary btn-sm">
                    <!---->

                    Hello Guest

                </a>
                <a href="#"> Shopping Cart Total price: $100, Total Iteam 2 </a>

            </div> <!-- col-md-6 offer start End-->

            <div class="col-md-6">
                <ul class="menu">

                    <li>
                        <a href="chekout.php"> My Account </a>
                    </li>
                    <li>
                        <a href="chekout.php"> services</a>
                    </li>
                    <li>
                        <a href="cart.php"> Go to Cart</a>
                    </li>
                    <li>
                        <a href="customer_registration.php"> Register</a>
                    </li>

                    <li>
                        <a href="login.php"> login </a>
                    </li>


                </ul>


            </div>


        </div>
        <!--container End  -->



    </div><!-- Top bar End -->

    <!-- navbar navbar-defult start -->
    <div class="navbar navbar-defult" id="navbar">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand home" href="index.php">
                    <!--<img src="images/logo.png" alt="ecommerece" class="hidden-xs">-->

                    <img src="images/logo1.png" alt="ecommerece" class="visible-sl">

                </a>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only"> Toggle navigation</span>
                    <i class="fa fa-align-justify"></i>


                </button>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only"></span>
                    <i class="fa fa-search"></i>


                </button>

            </div>
            <!--Navbar header start-->
            <div class="navbar-collapse collapse" id="navigation" style="background-color: #2f3640;">
                <!-- navbar-collapse collapse start-->

                <div class="padding-nav">
                    <!--padding-nav start-->
                    <ul class="nav navbar-nav navbar-left" style="font-color: white;">
                        <li class="active">
                            <a href="index.php"> Home</a>

                        </li>
                        <li>
                            <a href="shop.php"> Shop</a>
                        </li>
                        <li>
                            <a href="chechout.php"> My Account</a>
                        </li>
                        <li>
                            <a href="cart.php"> Shoping cart</a>
                        </li>
                        <li>
                            <a href="about.php"> About Us</a>
                        </li>
                        <li>
                            <a href="services.php">Services </a>
                        </li>
                        <li>
                            <a href="contact.php"> contact</a>
                        </li>
                    </ul>

                </div>
                <!--padding-nav End-->

                <a href="cart.php" class="btn btn-primary navbar-btn right">
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 iteams In cart</span>

                </a>

                <a href="" class="btn btn-primary navbar-btn right">
                    <i class="fa fa-search"></i>
                </a>
                <div class="navbar-collapse collapse left">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse"
                        data-target="#search">
                        <span class="sr-only"> Toggle Search </span>
                        <i class="fas fa-search"></i>
                    </button>

                </div>


            </div> <!-- navbar-collapse collapse  End-->

            <div class="collapse clearfix" id="search">
                <form class="navbar-form" method="get" action="result.php">

                    <div class="input-group">
                        <input type="text" name="user_query" placeholder="Search" class="form-control" required="">
                        <span class="inout-group-btn">
                            <button type="submit" value="Search" name="search" class="btn btn-primary">
                                <i class="fas fa-search"> </i>

                            </button>
                        </span>
                    </div>

                </form>

            </div>





        </div>

    </div><!-- navbar navbar-defult End -->


    <div class="container" id="slider">

        <!--Container start-->

        <div class="col-md-12">
            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="myCarousel" data-slide-to="0"></li>
                    <li data-target="myCarousel" data-slide-to="1"></li>
                    <li data-target="myCarousel" data-slide-to="2"></li>
                    <li data-target="myCarousel" data-slide-to="3"></li>

                </ol>

                <div class="carousel-inner">
                    <!-- carousel inner start-->
                    <div class="item active">
                        <img src="admin_area/slider_images/01.jpg">
                    </div>
                    <div class="item">
                        <img src="admin_area/slider_images/03.jpg">
                    </div>
                    <div class="item">
                        <img src="admin_area/slider_images/05.jpg">
                    </div>
                    <div class="item">
                        <img src="admin_area/slider_images/04.jpg">
                    </div>




                </div> <!-- carousel inner start-->

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


        </div>

        <div class="col-sm-4">
            <div class="box same-height">

                <i class="fa fa-heart"></i>

            </div>
            <h3><a href="#">WE LOVE OUR CUSTOMER</h3>
            <P> we provide best service ever</P>
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
        <div class="col-sm-4 col-sm-6 single" > <!-- col-sm-4 col-sm-6 single start -->
            <div class="product">
                <a href="details.php">
                    <img src="admin_area/product_images/13.jpg" class="img-responsive">

                </a>
                <div class="text">
                    <h3><a href="details.php "> Rolex Watch</a></h3>
                    <p class="price"> $1999</p>
                    <p class="buttons"> 
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                        <i class=" fa fa-shopping-cart"> </i>  Add to cart </a> 
                    </p>

                    </div>

            </div>

        </div>

    </div>

</div> <!-- col-sm-4 col-sm-6 single End  -->

<div class="col-sm-4 col-sm-6 single" > <!-- col-sm-4 col-sm-6 single start -->
            <div class="product">
                <a href="details.php">
                    <img src="admin_area/product_images/5.jpg" class="img-responsive">

                </a>
                <div class="text">
                    <h3><a href="details.php "> Ladies Hand Bag </a></h3>
                    <p class="price"> $170 </p>
                    <p class="buttons"> 
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                        <i class=" fa fa-shopping-cart"> </i>  Add to cart </a> 
                    </p>

                    </div>

            </div>

        </div>

    </div>

</div> <!-- col-sm-4 col-sm-6 single End  -->

<div class="col-sm-4 col-sm-6 single" > <!-- col-sm-4 col-sm-6 single start -->
            <div class="product">
                <a href="details.php">
                    <img src="admin_area/product_images/12.jpg" class="img-responsive">

                </a>
                <div class="text">
                    <h3><a href="details.php "> Boys Carry Bag</a></h3>
                    <p class="price"> $110</p>
                    <p class="buttons"> 
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                        <i class=" fa fa-shopping-cart"> </i>  Add to cart </a> 
                    </p>

                    </div>

            </div>

        </div>

    </div>

</div> <!-- col-sm-4 col-sm-6 single End  -->

<div class="col-sm-4 col-sm-6 single" > <!-- col-sm-4 col-sm-6 single start -->
            <div class="product">
                <a href="details.php">
                    <img src="admin_area/product_images/category-2.jpg" class="img-responsive">

                </a>
                <div class="text">
                    <h3><a href="details.php "> Mobile 14 Pro MAX </a></h3>
                    <p class="price"> $1550</p>
                    <p class="buttons"> 
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                        <i class=" fa fa-shopping-cart"> </i>  Add to cart </a> 
                    </p>

                    </div>

            </div>

        </div>

    </div>

</div> <!-- col-sm-4 col-sm-6 single End  -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>