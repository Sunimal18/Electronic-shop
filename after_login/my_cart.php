<?php
session_start();
include '../library/db_connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart - AAC Electronic Shop</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html" id="logo"><span id="span1">AAC E</span>lectronic</a>
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
                        <a class="nav-link" href="my_cart.php">My Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contact.html">Contact</a>
                    </li>
                </ul>
                <form class="d-flex" id="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Cart content -->
    <div class="container" id="cart-container" style="margin-top: 30px;">
        <h1 class="text-center">My Cart</h1>
            <div class="row">
                <div class="col-md-12" >
                <?php
                    // database connection 
                    include "../library/db_connection.php";
                    $id=$_REQUEST['id'];
                    $sql="SELECT * FROM product WHERE id=$id";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc())
                {
                ?>
                    <div class="col-md-3 py-3 py-md-0" style="width:50%;text-align:center;padding:2px;margin:0 auto">
                        <div class="card">
                            <img src="../images/<?php echo $row["image"];?>" alt="" style="width:50%;text-align:center;padding:2px;margin:0 auto">
                            <div class="card-body">
                            <h3 class="text-center"><?php echo $row["name"];?></h3>
                            <div class="star text-center">
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                            </div>
                            <h2>$<?php echo $row["price"];?> <br> <a href="sql/add_order.php?id=<?php echo $row["id"]; ?>" style="color:black; color:blue;">Buy Now</span></a></h2>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
    </div>
<br><br><br>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="footer-col">
                        <h4>AAC ELECTRONIC SHOP</h4>
                        <p>Shop Electronics Item at AAC Shop, the leading online electronic store in the world.</p>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="footer-col">
                        <h4>CONTACT US</h4>
                        <p>+123 456 7890</p>
                        <p>info@aacshop.com</p>
                        <div class="social">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="footer-col">
                        <h4>QUICK LINKS</h4>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-KsvDb8kNacp91h7pG6r13Y7W9wQ/5D5Zl7f6xv8QQNRS6VZCFl5HbFNJ/j24Zr3b" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiVQ6pGdFNEMw8lo7zI3zAJMGK6HpGmJQFhJpHl4x0iwfVJfAdyQG/Xu" crossorigin="anonymous"></script>
</body>
</html>
