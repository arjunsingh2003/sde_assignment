<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Agency Registration</title>
    <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.css" />
    <script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
    <?php
    session_start();
    ?>
    <style>
        .head-name {
            color: white;
            width: 100%;
            background-color: goldenrod;
            margin: auto;
            margin-bottom: 30px;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;

        }

        .head-name a {
            color: white;
        }

        .heading {
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

        .booking-box {
            width: auto;
            margin: auto;
            margin-top: 50px;
            height: auto;
            background-color: goldenrod;
            padding: 40px 0px;
        }

        .booking-head {
            font-weight: bold;
            text-align: center;
            color: white;
            width: auto;
            height: auto;
            letter-spacing: 2px;
            text-decoration: underline;
        }

        .booking-table {
            margin: auto;
            margin-top: 30px;
            color: white;
            width: 80%;
            height: auto;
        }

        table tr {
            border: 1px solid white;
        }

        table td {
            border: 1px solid white;
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

            table tr {
                display: flex;
                flex-direction: column;
                text-align: center;
                margin-bottom: 10px
            }
        }
    </style>

</head>

<body>
    <div class="head-name fs-2">Agency name : <?php
                                                if (isset($_SESSION['agency_name'])) {
                                                    echo $_SESSION['agency_name'] . " <a href='agency_logout.php' class='p-5'>Logout</a><a href='#book' class='p-5'>Bookings</a>";
                                                } else {
                                                    echo "<a href='agency_login.php'> Login Please</a>";
                                                }
                                                ?></div>
    <form action="process.php" method="POST">
        <div class="heading fs-3">Add Vehicle</div>
        <input type="text" name="agency_name" value="<?php if (isset($_SESSION['agency_name'])) {
                                                            echo $_SESSION['agency_name'];
                                                        } else {
                                                            echo "";
                                                        } ?>" hidden>
        <input type="text" name="v_model" placeholder="Enter vehicle model" required><br>
        <input type="text" name="v_num" placeholder="Enter vehicle number" required><br>
        <input type="text" name="v_seat" placeholder="Enter seating capacity" required><br>
        <input type="text" name="v_rent" placeholder="Enter rent per day" required><br>
        <input type="submit" value="Add" name="add_vehicle">
    </form>
    <!--for viewing book vehicles-->
    <a name="book"></a>
    <div class="booking-box">
        <div class="booking-head fs-4">BOOKINGS</div>
        <table class="booking-table fs-6">
            <tr style="font-weight: bold;">
                <td class="customer-name">Customer Name</td>
                <td class="customer-email">Customer Email</td>
                <td class="book-vehicle-model">Vehicle Model</td>
                <td class="book-vehicle-num">Vehicle Number</td>
                <td class="paid-amount">Rent</td>
            </tr>
            <?php
include "db_connect.php";
$rec=mysqli_query($link, "select * from booking where agency_name='$_SESSION[agency_name]'");
while($reco=mysqli_fetch_object($rec)){
    ?>
            <tr>
                <td class="customer-name"><?php echo $reco->customer_name; ?></td>
                <td class="customer-email"><?php echo $reco->customer_email; ?></td>
                <td class="book-vehicle-model"><?php echo $reco->model; ?></td>
                <td class="book-vehicle-num"><?php echo $reco->num; ?></td>
                <td class="paid-amount"><?php echo $reco->rent; ?></td>
            </tr>
            <?php }; ?>
        </table>
    </div>
</body>

</html>