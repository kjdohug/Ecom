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
                            <a href="cart.php"> Shopping cart</a>
                        </li>
                        <li>
                            <a href="about.php"> About Us</a>
                        </li>
                        <li>
                            <a href="services.php">Services </a>
                        </li>
                        <li>
                            <a href="contactus.php"> Contact Us</a>
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