<!-- add_ti_cart -->
<?php
include "../db.php";

if (isset($_POST['update_customer'])) {

    $id = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $contact_no = $_POST['contact_no'];
    $address = $_POST['address'];
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $path = "../customer/assets/img/" . $file_name . rand(600, 8680450050);
    move_uploaded_file($file_temp, $path);
    $hash = md5($password);


    $sql = "UPDATE customer 
         SET email='$email',
         name='$name',
         image='$path',
         contact_no='$contact_no',
         password='$hash',
         address='$address',
         gender='$gender'
          WHERE id=$id";
    if ($connect->query($sql) === TRUE) {
        echo '<script language="javascript"> alert("Record Updated")</script>';
        echo '<script language="javascript">    window.location.href = "./index.php";;</script>';
    } else {

        echo '<script language="javascript"> alert("correct the errors")</script>';
        echo '<script language="javascript">    window.location.href = "./index.php";;</script>';
    }
}
if (isset($_POST['delcustomer'])) {
    $id = $_POST['id'];
    $sql = "UPDATE customer 
         SET 
         name=null,
         image=null,
         contact_no=null,
         address=null,
         gender=null
          WHERE id=$id";

    if ($connect->query($sql) === TRUE) {
        echo '<script language="javascript">  alert("deleted successfully");</script>';
        echo '<script language="javascript"> window.location.href = "./index.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
if (isset($_POST['Add_extra_info'])) {

    $u_id = $_POST['u_id'];
    $task = $_POST['task'];
    $s_detail = $_POST['s_detail'];
    $c_date = $_POST['c_date'];


    $sql = "INSERT INTO profile_info (u_id, task,s_detail,c_date)  
    VALUES ('$u_id', '$task','$s_detail','$c_date')";
    if ($connect->query($sql) === TRUE) {
        echo '<script language="javascript">  alert("Add successfully");</script>';
        header('Location: extra-info.php?id='. $u_id);

    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
if (isset($_POST['update_info'])) {
    $u_id = $_POST['u_id'];
    $id = $_POST['id'];
    $task = $_POST['task'];
    $s_detail = $_POST['s_detail'];
    $c_date = $_POST['c_date'];
    $sql = "UPDATE profile_info 
         SET 
         task='$task',
         s_detail='$s_detail',
         c_date='$c_date'
          WHERE id=$id";

    if ($connect->query($sql) === TRUE) {
        echo '<script language="javascript">  alert("Updated successfully");</script>';
        header('Location: extra-info.php?id='. $u_id);

    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
if (isset($_POST['del_task'])) {
    $u_id = $_POST['u_id'];
    $id = $_POST['id'];

    $sql = "DELETE FROM  profile_info
         WHERE id=$id";

    if ($connect->query($sql) === TRUE) {
        echo '<script language="javascript">  alert("Delete  successfully");</script>';
        header('Location: extra-info.php?id='. $u_id);

    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
?>