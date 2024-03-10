<?php
include 'db_connect.php';
//for sending customer deatils to customer table
if (isset($_POST['customer_register'])) {
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password != $confirm_password) {
        echo "<script>alert('Confirm password does not match with password!!!');
        if(confirm){
            window.location='customer_register.php';
        };
        </script>";
    } else {
        $c_register = mysqli_query($link, "insert into customers (customer_name, customer_email, customer_password) 
		values('$_POST[username]', '$_POST[email]', '$confirm_password')");
        if ($c_register) {
            echo "<script>
      alert('You id is register. Please login!!!');
      if(confirm){
        document.location='customer_login.php';
    }
      </script>";
        } else {
            echo "<script>alert('Error to register. Retry!!!');
        if(confirm){
            document.location='customer_register.php';
        }
        </script>";
        }
    }
}
//for sending car rental agencies deatils to car rental agencies table
if (isset($_POST['agency_register'])) {
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password != $confirm_password) {
        echo "<script>alert('Confirm password does not match with password!!!');
        if(confirm){
            window.location='agency_register.php';
        };
        </script>";
    } else {
        $a_register = mysqli_query($link, "insert into car_rental_agencies (cra_name, cra_email, cra_password) 
		values('$_POST[username]', '$_POST[email]', '$confirm_password')");
        if ($a_register) {
            echo "<script>
      alert('You id is register. Please login!!!!!!');
      if(confirm){
        document.location='agency_login.php';
    }
      </script>";
        } else {
            echo "<script>alert('Error to register. Retry!!!');
        if(confirm){
            document.location='agency_register.php';
        }
        </script>";
        }
    }
}
//for customer login
if (isset($_POST['customer_login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_con = mysqli_query($link, "select * from customers
     where customer_email='$email'");
    $c_login = mysqli_fetch_object($c_con);
    $ch_pass = $c_login->customer_password;
    if ($ch_pass === $password) {
        session_start();
        $_SESSION['customer_name'] = $c_login->customer_name;
        $_SESSION['customer_email'] = $c_login->customer_email;

        header('location:customer_dashboard.php');
    } else {
        echo "<script>alert('Recheck email or passoword!!!');
        if(confirm){
            document.location='customer_login.php';
        }
        </script>";
    }
}
//for agency login
if (isset($_POST['agency_login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_con = mysqli_query($link, "select * from car_rental_agencies
     where cra_email='$email'");
    $c_login = mysqli_fetch_object($c_con);
    $ch_pass = $c_login->cra_password;
    if ($ch_pass === $password) {
        session_start();
        $_SESSION['agency_name'] = $c_login->cra_name;
        header('location:agency_dashboard.php');
    } else {
        echo "<script>alert('Recheck email or passoword!!!');
        if(confirm){
            document.location='agency_login.php';
        }
        </script>";
    }
}

//for sending agency add car details to database
if (isset($_POST['add_vehicle'])) {
    if ($_POST['agency_name'] === '') {
        echo "<script>
        alert('Please login!!!');
        if(confirm){
          document.location='index.php';
      }
        </script>";
    } else {
        $add_vehicle = mysqli_query($link, "insert into vehicle_details (agency_name, v_model, v_num, v_seat, v_rent) 
		values('$_POST[agency_name]', '$_POST[v_model]', '$_POST[v_num]', '$_POST[v_seat]', '$_POST[v_rent]')");
        if ($add_vehicle) {
            echo "<script>
      alert('Add sucessfully!!!');
      if(confirm){
        document.location='agency_dashboard.php';
    }
      </script>";
        } else {
            echo "<script>alert('Error to uploading. Please retry!!!');
        if(confirm){
            document.location='agency_dashboard.php';
        }
        </script>";
        }
    }
}
//for booking a vehicle
if($_GET['uid']){
    session_start();
    $customer_name=$_SESSION['customer_name'];
    $customer_email=$_SESSION['customer_email'];

    $sel=mysqli_query($link, "select * from vehicle_details where v_id='$_GET[uid]'");
    $det=mysqli_fetch_object($sel);
    $ins=mysqli_query($link, "insert into booking(customer_name, customer_email, agency_name, model, num, rent) 
    values('$customer_name', '$customer_email', '$det->agency_name', '$det->v_model', '$det->v_num', '$det->v_rent')");
    if($ins){
        echo "<script>alert('Your vehicle is book and details are send in your email!!!');
        if(confirm){
            document.location='customer_dashboard.php';
        }
        </script>";
    }
    else{
        echo "<script>alert('Error in booking. Retry!!!');
        if(confirm){
            document.location='customer_dashboard.php';
        }
        </script>";
    }
}
