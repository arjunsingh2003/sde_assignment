<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration</title>
    <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.css" />
    <script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
    <style>
        .heading {
            color: white;
            width: 85%;
            color: goldenrod;
            height: auto;
            margin: auto;
            text-align: center;
            margin-bottom: 30px;
            background-color: white;
            padding: 2% 2%;
            border-radius: 20px;
        }

        form {
            margin: auto;
            margin-top: 30px;
            width: 30%;
            height: auto;
            background-color: goldenrod;
            padding-top: 40px;
            padding-bottom: 40px;
            border-radius: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-weight: bold;
        }

        form input {
            color: white;
            border: none;
            border-bottom: 1px solid white;
            height: 50px;
            width: 65%;
            background: none;
        }

        form input:focus {
            outline: none;
            border-bottom: 1px solid white;

        }

        input[type=submit] {
            color: goldenrod;
            border: none;
            border: 1px solid white;
            height: 50px;
            width: 65%;
            background-color: white;
        }

        input::placeholder {
            color: white;
        }

        .for-click {
            width: 65%;
            color: white;
            font-weight: normal;
        }


        .for-click a {
            color: white;

        }

        /* for small desktop */

        @media screen and (min-width: 990px) and (max-width: 1200px) {
            form {
                width: 38%;
            }
        }

        /*for tablet*/
        @media (min-width: 700px) and (max-width: 989px) {
            form {
                width: 55%;
            }
        }

        /*for mobile*/
        @media (min-width: 0px) and (max-width: 699px) {
            form {
                width: 90%;
                border-radius: 30px;
            }

            form input {
                width: 85%;
                height: 40px;
            }

            form input[type=submit] {
                width: 85%;
                height: 40px;
            }

            .for-click {
                width: 85%;
            }
        }
    </style>
</head>

<body>

    <form action="process.php" method="POST" class="fs-6">
        <div class="heading fs-3">Customer Registration</div>
        <input type="text" id="username" name="username" placeholder="Enter name" required><br>
        <input type="email" id="email" name="email" placeholder="Enter email" required><br>
        <input type="password" id="password" name="password" placeholder="Create password" required><br>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password" required><br>
        <input type="submit" value="Register" name="customer_register">
        <div class="for-click mt-4">Already customer? <a href="customer_login.php">Login</a></div>
        <div class="for-click mt-2">Continue as agency? <a href="agency_register.php">Agency</a></div>
        <div class="for-click mt-2">Continue as a guest? <a href="customer_dashboard.php">Guest</a></div>    </form>
   
</body>

</html>