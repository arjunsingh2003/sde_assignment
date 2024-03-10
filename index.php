<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.css" />
    <script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
    <style>
        .heading {
            margin-top: 100px;
            width: 100%;
            height: auto;
            color: goldenrod;
            font-weight: bold;
            letter-spacing: 2px;
            text-align: center;
        }

        .btn-container {
            width: 40%;
            height: auto;
            margin: auto;
            margin-top: 50px;
            background-color: goldenrod;
            color: white;
            display: flex;
            flex-direction: column;
            padding-top: 20px;
            padding-bottom: 50px;
            justify-content: center;
            text-align: center;
        }

        .btn-container a button {
            width: 50%;
            height: auto;
            margin-top: 30px;
            background-color: white;
            color: goldenrod;
            letter-spacing: 1px;
            border: none;
            border-radius: 25px;
            padding: 15px;
        }

        /* for small desktop */

        @media screen and (min-width: 990px) and (max-width: 1200px) {
            .heading{
                margin-top: 70px;
            }
            .btn-container{
                width: 50%;
            }
        }

        /*for tablet*/
        @media (min-width: 700px) and (max-width: 989px) {
            .heading{
                margin-top: 50px;
            }
            .btn-container{
                width: 70%;
            }
        }

        /*for mobile*/
        @media (min-width: 0px) and (max-width: 699px) {
            .heading{
                margin-top: 50px;
            }
            .btn-container{
                width: 100%;
            }
            .btn-container a button{
                width: 80%;
            }
        }
    </style>
</head>

<body>
    <div class="heading fs-2">WELCOME!</div>
    <div class="btn-container">
        <a href="customer_register.php"><button class="btn1">Customer</button></a>
        <a href="agency_register.php"><button class="btn2">Car Rental Agency</button></a>
        <a href="customer_dashboard.php"><button class="btn3">Guest</button></a>

    </div>
</body>

</html>