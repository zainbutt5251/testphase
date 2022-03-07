<?php include "../../db.php"; ?>
<?php

if (isset($_POST['reg_now'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    $gender = $_POST['gender'];
    $contactno = $_POST['contactno'];
    $address = $_POST['address'];
    if ($password == $c_password) {
        $hash = md5($password);
        $sql = "INSERT INTO customer (email, name, password,gender,contact_no,address) 
         VALUES ('$email', '$name', '$hash','$gender','$contactno','$address')";
        if ($connect->query($sql) === TRUE) {
            echo "New record created successfully";
            header("location:../../Customer/index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
    } else {
        echo "pleas correct the errors";
        header("location:../../Customer/CustomerRegister.php");
    }
}
// log_now
if (isset($_POST['log_now'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = md5($password);

    $sql = "SELECT * from customer where email='$email' AND password='$hash'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row

        while ($row = $result->fetch_assoc()) {

            session_start();

            // Add values to the session.
            $_SESSION['email'] = $email; // string
            $_SESSION['id'] = $row['id']; // string
            echo '<script language="javascript"> alert("Welcome TO Website")</script>';
            echo '<script language="javascript">    window.location.href = "../../Customer/index.php";;</script>';
        }
    } else {

        echo '<script language="javascript">  alert("invalid Credientials");</script>';
        echo '<script language="javascript">       window.location.href = "../../Customer/index.php";</script>';
    }
}
if (isset($_POST['Alog_now'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = md5($password);

    $sql = "SELECT email,password from admin where email='$email' AND password='$hash'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row

        while ($row = $result->fetch_assoc()) {

            session_start();

            // Add values to the session.
            $_SESSION['email'] = $email; // string
            echo '<script language="javascript">
            alert("Welcome Admin")</script>';

            echo '<script language="javascript">    window.location.href = "../../Admin/index.php";;</script>';
        }
    } else {
        echo '<script language="javascript">
        alert("invalid Credientials");
        window.location.href =  "../../Admin/index.php";
        </script>';
    }
}

include("../assets/js/configure.php")



?>