<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell lifestyle.</h1>
                       <p>Flat 40% OFF on all premium brands.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="https://us.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton--M45077_PM2_Front%20view.jpg?wid=1024&hei=1024" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Bags</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="https://us.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton--M30409_PM2_Front%20view.jpg?wid=1024&hei=1024" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Backpack</p>
                                    <p>Original watches from the best brands.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="https://us.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton--M55700_PM2_Front%20view.jpg?wid=1024&hei=1024" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Clutch</p>
                                   <p>Our exquisite collection of shirts.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy Lifestyle Store. </p>
                   <p>This website is developed by Viktor Ablazhevich</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>