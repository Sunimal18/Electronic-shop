<?php
    session_start();
    $id=$_SESSION["id"];
    // database connection 
    include '../library/db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAC Electronic Shop</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<body>

    <!-- top navbar -->
    <div class="top-navbar">
        <p>WELCOME TO OUR SHOP</p>
        <div class="icons">
            <a href="login.html"><img src="./images/register.png" alt="" width="18px">Login</a>
            <a href="register.html"><img src="./images/register.png" alt="" width="18px">Register</a>
        </div>
    </div>
    <!-- top navbar -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php" id="logo"><span id="span1">AAC E</span>lectronic <span></span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="./images/menu.png" alt="" width="30px"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- navbar -->

    
    <!-- home content -->
    <section class="home">
    <div class="content">
      <h1> <span>Electronic Products</span>
        <br>
        Up To <span id="span2">50%</span> Off
      </h1>
      </p>
      <div class="btn"><button>Shop Now</button></div>

    </div>
    <div class="img">
      <img src="./images/background.png" alt="">
    </div>
  </section>
    <!-- home content -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>iPhone 13 Pro Max Description</title> -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
        <div class="product-description">
        <!-- <p>The iPhone 13 Pro Max is Apple's flagship smartphone, featuring a 6.7-inch Super Retina XDR display, the powerful A15 Bionic chip, and an advanced triple-camera system with improved low-light performance and ProRAW capabilities. It offers up to 1TB of storage, a ceramic shield front cover, and impressive battery life. Available in various colors, it's the ultimate device for photography, gaming, and everything in between.</p> -->
    </div>
</body>
</html>

              
            </div>
          </div>
        </div>
        

      <div class="row" style="margin-top: 30px;">
        <?php
            // database connection 
            include "../library/db_connection.php";
            $sql="SELECT * FROM product WHERE category=0 ORDER BY id ASC";
            $result=$conn->query($sql);
            while($row=$result->fetch_assoc())
          {
        ?>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="../images/<?php echo $row["image"];?>" alt="">
            <div class="card-body">
              <h3 class="text-center"><?php echo $row["name"];?></h3>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2>$<?php echo $row["price"];?> <a href="my_cart.php?id=<?php echo $row["id"]; ?>" style="color:black;"><span><li class="fa-solid fa-cart-shopping"></li></span></a></h2>
            </div>
          </div>
        </div>
        <?php } ?>
        


    <!-- other cards -->
    <div class="container" id="other-cards">
      <div class="row">
        <div class="col-md-6 py-3 py-md-0">
          <div class="card">
            <img src="./images/c1.png" alt="">
            <div class="card-img-overlay">
              <h3>Best Laptop</h3>
              <h5>Latest Collection</h5>
              <p>Up To 50% Off</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 py-3 py-md-0">
          <div class="card">
            <img src="./images/c2.png" alt="">
            <div class="card-img-overlay">
              <h3>Best Headphone</h3>
              <h5>Latest Collection</h5>
              <p>Up To 50% Off</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- other cards -->
   






    <!-- banner -->
    <section class="banner">
      <div class="content">
        <h1> <span>Electronic Gadget</span>
          <br>
          Up To <span id="span2">50%</span> Off
        </h1>
        </p>
  
      </div>
      <div class="img">
        <img src="./images/image1.png" alt="">
      </div>
    </section>
    <!-- banner -->








    <!-- product cards -->
    <div class="row" style="margin-top: 30px;">

      <?php
            // database connection 
            include "../library/db_connection.php";
            $sql="SELECT * FROM product WHERE category=2 ORDER BY id ASC";
            $result=$conn->query($sql);
            while($row=$result->fetch_assoc())
          {
        ?>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="../images/<?php echo $row["image"];?>" alt="">
            <div class="card-body">
              <h3 class="text-center"><?php echo $row["name"];?></h3>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2>$<?php echo $row["price"];?> <a href="my_cart.php?id=<?php echo $row["id"]; ?>" style="color:black;"><span><li class="fa-solid fa-cart-shopping"></li></span></a></h2>
            </div>
          </div>
        </div>
        <?php } ?>
    </div>

      <!-- other cards -->
    <div class="container" id="other">
      <div class="row">
        <div class="col-md-4 py-3 py-md-0">
          <div class="card">
            <img src="./images/c3.png" alt="">
            <div class="card-img-overlay">
              <h3>Home Gadget</h3>
              <p>Latest collection Up To 50% Off</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card">
            <img src="./images/c4.png" alt="">
            <div class="card-img-overlay">
              <h3>Gaming Gadget</h3>
              <p>Latest collection Up To 50% Off</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card">
            <img src="./images/c5.png" alt="">
            <div class="card-img-overlay">
              <h3>Electronic Gadget</h3>
              <p>Latest collection Up To 50% Off</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- other cards -->




    <div class="row" style="margin-top: 30px;">

    <?php
          // database connection 
          include "../library/db_connection.php";
          $sql="SELECT * FROM product WHERE category=1 ORDER BY id ASC";
          $result=$conn->query($sql);
          while($row=$result->fetch_assoc())
        {
      ?>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="../images/<?php echo $row["image"];?>" alt="">
          <div class="card-body">
            <h3 class="text-center"><?php echo $row["name"];?></h3>
            <div class="star text-center">
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
            </div>
            <h2>$<?php echo $row["price"];?> <a href="my_cart.php?id=<?php echo $row["id"]; ?>" style="color:black;"><span><li class="fa-solid fa-cart-shopping"></li></span></a></h2>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
      </div>
    </div>
    <!-- product cards -->









    <!-- offer -->
    <div class="container" id="offer">
      <div class="row">
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-cart-shopping"></i>
          <h3>Free Shipping</h3>
          <p>On order over $1000</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-rotate-left"></i>
          <h3>Free Returns</h3>
          <p>Within 30 days</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-truck"></i>
          <h3>Fast Delivery</h3>
          <p>World Wide</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-thumbs-up"></i>
          <h3>Big choice</h3>
          <p>Of products</p>
        </div>
      </div>
    </div>
    <!-- offer -->





    
    <!-- newslater -->
    <div class="container" id="newslater">
      <h3 class="text-center">Subscribe To The Electronic Shop For Latest upload.</h3>
      <div class="input text-center">
        <input type="text" placeholder="Enter Your Email..">
        <button id="subscribe">SUBSCRIBE</button>
      </div>
    </div>
    <!-- newslater -->






    <!-- footer -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Electronic Shop</h3>
              <p>
                45, <br>
                middle Rd <br>
                Singapore <br>
              </p>
              <strong>Phone:</strong> +65 9613 0476 <br>
              <strong>Email:</strong> electronicshop@.com <br>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Usefull Links</h4>
             <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policey</a></li>
             </ul>
            </div>



           

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>

             <ul>
              <li><a href="#">Mobile Phone</a></li>
              <li><a href="#">Computers</a></li>
              <li><a href="#">Home Appliances</a></li>
              <li><a href="#">Kitchen Appliances</a></li>
             </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>

              <div>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-skype"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
              </div>
            
            </div>

          </div>
        </div>
      </div>
      <hr>
      <div class="container py-4">
        <div class="copyright">
          &copy; Copyright <strong><span>AAC Electronic Shop</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="#">CA coding</a>
        </div>
      </div>
    </footer>
    <!-- footer -->







    <a href="#" class="arrow"><i><img src="./images/arrow.png" alt=""></i></a>













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>