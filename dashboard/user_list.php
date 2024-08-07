

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.userfront.com/core.js"></script>
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
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
    <div class="topbar">
        <button onclick="toggleSidebar()">☰</button>
    </div>
    <div class="sidebar" id="sidebar">
        <a href="dashboard.php">Dashboard</a>
        <a href="add_post.php">Add New Product</a>
        <a href="order_details.php">Order List</a>
        <a href="user_list.php">User Listk</a>

        <a href="sql/logout.php">Logout</a>
    </div>
    <div class="main-content">
        <h1>Dashboard</h1>
        <h2 class="view-res-h1 text-center">User Feedbacks</h2>
        <table class="table w-100">
            <thead>
                <tr>
                    <th scope="col" class="view-res-td">ID</th>
                    <th scope="col" class="view-res-td">Name</th>
                    <th scope="col" class="view-res-td">Email</th>
                    <th scope="col" class="view-res-td">Telephone Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // database connection 
                    include "../library/db_connection.php";
                    $sql="SELECT * FROM customer ORDER BY id ASC";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc())
                    {
                ?>
                    <tr>
                        <td class="view-res-td"><?php echo $row["id"]; ?></td>
                        <td class="view-res-td"><?php echo $row["name"]; ?></td>
                        <td class="view-res-td"><?php echo $row["email"]; ?></td>
                        <td class="view-res-td"><?php echo $row["phone"]; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("open");
        }
    </script>
</body>

</html>
