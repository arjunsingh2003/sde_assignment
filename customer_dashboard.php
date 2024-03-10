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

        .booking-box tr {
            border: 1px solid white;
        }

        .booking-box td {
            border: 1px solid white;
        }

        .container {
            width: 80%;
            height: auto;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .container table {
            width: 20%;
            background-color: goldenrod;
            border: 1px solid white;
            color: white;
            margin: 20px;
            text-align: center;
            padding-top: 20px;
            padding-bottom: 20px;
            line-height: 40px;

        }

        .container table tr {
            display: flex;
            flex-direction: column;
        }

        .container table td button {
            border: none;
            background-color: white;
            color: goldenrod;
            margin-bottom: 20px;
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
    <div class="head-name fs-2">Customer name : <?php
                                                if (isset($_SESSION['customer_name'])) {
                                                    echo $_SESSION['customer_name'] . "--" . $_SESSION['customer_email'] . " <a href='customer_logout.php' class='p-5'>Logout</a>";
                                                } else {
                                                    echo "<a href='customer_login.php'> Login Please</a>";
                                                }
                                                ?></div>
    <!--for vehicle cart-->
    <div class="container">
        <?php
        include "db_connect.php";
        $rec = mysqli_query($link, "select * from vehicle_details");
        while ($reco = mysqli_fetch_object($rec)) {
        ?>
            <table>
                <tr>
                    <td>
                        <?php echo $reco->v_model; ?>
                    </td>
                    <td>
                        <?php echo $reco->v_num; ?>
                    </td>
                    <td>
                        <?php echo $reco->v_seat; ?>
                    </td>
                    <td>
                        <?php echo $reco->v_rent; ?>
                    </td>
                    <td>
                        <?php
                        if (isset($_SESSION['customer_name'])) {
                            echo "<a href='process.php?uid={$reco->v_id}'><button>Rent Vehicle</button></a>";
                        } else {
                            echo "<button onclick='login_first();'>Rent Vehicle</button>";
                        }
                        ?>
                    </td>
                </tr>
            </table>
        <?php
        };
        ?>
    </div>
    <script>
        function login_first(){
            alert('Please login!!!');
            if(confirm){
                window.location='customer_login.php';
            }
            else{
                window.location='customer_login.php';
            }
        }
    </script>
</body>

</html>