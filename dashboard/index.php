<!DOCTYPE HTML>
<html>

<head>
    <title>Green Way Sri Lanka.LK | Login</title>
    <meta name="Description" content="The aim of 'Green Way Sri Lanka.LK' is to promote tourism in Sri Lanka.">
    <meta name="Keywords" content="tourism, Sri Lanka, travel">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/animate.min.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <style>
        body {
            font-family: 'Raleway', sans-serif;
            background-color: #f2f2f2;
        }

        .login-container {
            max-width: 400px;
            padding: 20px;
            margin: 100px auto;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #4cae4c;
        }

        .error-message {
            color: red;
            display: none;
        }
    </style>
    <script>
        // function validateForm() {
        //     var email = document.forms["loginForm"]["email"].value;
        //     var password = document.forms["loginForm"]["password"].value;
        //     var errorMessage = document.getElementById("error-message");

        //     if (email == "" || password == "") {
        //         errorMessage.style.display = "block";
        //         errorMessage.innerHTML = "Both fields are required.";
        //         return false;
        //     }

        //     var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        //     if (!emailPattern.test(email)) {
        //         errorMessage.style.display = "block";
        //         errorMessage.innerHTML = "Please enter a valid email address.";
        //         return false;
        //     }

        //     return true;
        // }
    </script>
</head>

<body>
    <div class="login-container wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
        <h2>Login</h2>
        <form name="loginForm" action="sql/login.php" onsubmit="return validateForm()" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn">Login</button>
            </div>
            <div id="error-message" class="error-message"></div>
        </form>
    </div>
</body>

</html>
