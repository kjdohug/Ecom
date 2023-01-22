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

          </div><!--col-md-3 End-->

            <div class="col-md-9">
                 <!-- includong my order.php page start-->
                <?php
                    if(isset($_GET['my_order'])){
                         include("my_order.php");
                    }
                ?>

                <!-- includong my order.php page END-->

                <!-- includong pay offline.php page Start-->

                <?php
                    if(isset($_GET['pay_offline'])){
                        include("pay_offline.php");
                    }
                ?>
                <!-- includong pay offline.php page Start-->

                <!-- includong edit_account.php page Start-->
                <?php
                    if(isset($_GET['edit_act'])){
                        include("edit_act.php");
                    }
                ?>
                <!-- includong edit Account.php page End-->
                <!-- includong Change_password.php page Start-->
                <?php
                    if(isset($_GET['change_pass'])){
                        include("change_password.php");
                    }
                ?>
                <!-- includong chnage passweod.php page End-->
                <!-- includong Delete.php page Start-->
                <?php
                    if(isset($_GET['delete_ac'])){
                        include("delete_ac.php");
                    }
                ?>
                <!-- includong Delete.php page End-->

            </div>

</div>



    <!--Footer start-->
    <?php
        include("includes/footer.php");

    ?>

    <!--Footer end-->
