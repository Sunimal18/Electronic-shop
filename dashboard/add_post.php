<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add new post</title> 
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.userfront.com/core.js"></script>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            /* display: flex; */
            height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            flex-shrink: 0;
            transition: width 0.3s;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar h2 {
            text-align: center;
            padding: 15px;
            background: #1abc9c;
            margin: 0;
        }

        .sidebar a {
            display: block;
            padding: 15px;
            color: white;
            text-decoration: none;
            border-bottom: 1px solid #34495e;
        }

        .sidebar a:hover {
            background-color: #16a085;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
            width: 100%;
        }

        .topbar {
            display: none;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 60px;
            }

            .sidebar h2 {
                font-size: 18px;
                padding: 10px;
            }

            .sidebar a {
                text-align: center;
                padding: 10px;
                font-size: 14px;
            }

            .main-content {
                margin-left: 60px;
                width: calc(100% - 60px);
            }

            .topbar {
                display: block;
                position: fixed;
                width: 100%;
                background-color: #2c3e50;
                padding: 10px;
                color: white;
                z-index: 1000;
            }

            .sidebar {
                position: absolute;
                left: -250px;
                width: 250px;
                transition: left 0.3s;
            }

            .sidebar.open {
                left: 0;
            }

            .main-content {
                margin-left: 0;
                width: 100%;
            }
        }
    </style>

</head>
<body>
    <!-- Nav bar File -->
    <div class="topbar">
        <button onclick="toggleSidebar()">☰</button>
    </div>
    <div class="sidebar" id="sidebar">
        <a href="dashboard.php">Dashboard</a>
        <a href="add_post.php">Add New Product</a>
        <a href="order_details.php">Order List</a>
        <a href="user_list.php">User List</a>

        <!-- <a href="#"></a> -->
        <a href="sql/logout.php">Logout</a>
    </div>

    <!-- Main area Start -->
    <div class="row">
        <div class="container-fluid col-sm-6 col-lg-6 col-md-6 div-1 my-3 border border-warning border-3 rounded">
                <h1 class="text-center div-3">Add Product</h1>
                <hr>
                <div class="container mt-8 col-sm-8 col-lg-8">
                    <div class="bg-white rounded p-3">
                        <form action="sql/addproduct.php" class="form-control" method="POST" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                 <input type="text" class="form-control" placeholder="title" name="Product_name" required>
                                <label>Product Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                 <input type="text" class="form-control" placeholder="title" name="Price" required>
                                <label>Price</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="category" name="category" required>
                                    <option value="0" selected>Technical</option>
                                    <option value="1">Electric</option>
                                    <option value="2">Home</option>
                                </select>
                                <label for="category">Category</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea name="details" placeholder="description" cols="45" rows="15" class="form-control" style="height:200px"></textarea>
                                <label>Description</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" name="img" required>
                                <label>Photo</label>
                            </div>
                            <div class="text-end mt-5 ms-0">
                                <a href="dashboard.php" class="btn btn-dark text-warning" role="button">Cancel</a>
                                <input type="Submit" class="btn btn-success" value="Add Product">
                            </div>
                        </form>
                    </div> 
                </div> 
                
        </div>  
    </div>

    <!-- Main area End-->

    
</body>
</html>