<?php include("./functions/functions.php"); ?>

<div class="panel panel-default sidebar-menu">
  <!--panel panel-default sidebar-menu start -->
  <div class="panel-heading"><!--panel-heading start-->
      
  <h3 class="panel-title"> Product Categories</h3>
   
</div><!--panel-heading End-->
<div  class="panel-body">
      <ul class="nav nav-pills nav-stacked category-menu">
         <?php getPCats();   ?> 
        
       </ul>
    </div>

</div><!--panel panel-default sidebar-menu End -->

<div class="panel panel-default sidebar-menu">
  <!--panel panel-default sidebar-menu nstart -->
  <div class="panel-heading"><!--panel-heading start-->
      
      <h3 class="panel-title"> Categories</h3>
   
  </div><!--panel-heading End-->
    <div  class="panel-body">
      <ul class="nav nav-pills nav-stacked category-menu">
          <?php getcat();  ?>
          
        </ul>
    </div>

</div><!--panel panel-default sidebar-menu End -->