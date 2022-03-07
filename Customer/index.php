<?php
include "../Customer/layouts/header.php"; ?>
<?php include "../Customer/layouts/navbar.php"; ?>
<?php include "../db.php"; ?>

<!-- Start your project here-->
<div class="row">

    <div class="col-md-12">
        <marquee behavior="" direction="">Welcome <?php echo $_SESSION['email']; ?></marquee>
        <div class="card text-center mt-5">
            <h1>Manage profile</h1>

        </div>

    </div>
    <?php
	$email = $_SESSION['email'];
	$sql = "SELECT DISTINCT * FROM customer where email='$email'";
	$result = $connect->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while ($row = $result->fetch_assoc()) {
	?>
    <div class="col-md-6 mt-5">
        <div class="card heightr">
            <img src="<?php if ($row['image']) {
									echo $row['image'];
								} else {
									echo 'https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp';
								} ?>" class="card-img-top" alt="Fissure in Sandstone" />
            <div class="card-body ">
                <h5 class="card-title pb-2">Name :<?php echo $row['name'] ?></h5>
                <h5 class="card-text pb-2">Email :<?php echo $row['email'] ?></h5>
                <h5 class="card-text pb-2">Gender :<?php echo $row['gender'] ?></h5>
                <h5 class="card-text pb-2">Address :<?php echo $row['address'] ?></h5>
                <form action="./function.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

                    if you want to delete your profile information except your email and password ?click here <button
                        class="btn btn-danger" name="delcustomer">Delete</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6 mt-5">
        <div class="card p-4 heightr">
            <h4 class="text-center">Update profile</h4>
            <hr>
            <form action="function.php" method="post" enctype="multipart/form-data">
                <div class="form-froup">
                    <label for="">Name</label>
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <input type="text" name="name" value="<?php echo $row['name'] ?>" required class="form-control">
                </div>
                <div class="form-froup">
                    <label for="">email</label>
                    <input type="text" name="email" value="<?php echo $row['email'] ?>" class="form-control">
                </div>
                <div class="form-froup">
                    <label for="">Contact No</label>
                    <input type="text" name="contact_no" value="<?php echo $row['contact_no'] ?>" required
                        class="form-control">
                </div>
                <div class="form-froup">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="form-froup">
                    <label for="">Gender</label>
                    <select name="gender" id="" class="form-control">
                        <option disabled> ________________Pleas Choose one option ______________</option>
                        <option value="Male">Male</option>
                        <option value="female">Fe Male</option>
                    </select>
                </div>
                <div class="form-froup">
                    <label for="">Address</label>
                    <input type="text" name="address" required value="<?php echo $row['address'] ?>"
                        class="form-control">
                </div>
                <div class="form-froup">
                    <label for="">password</label>
                    <input type="number" name="password" required class="form-control">
                </div>
                <div class="form-froup pt-2">
                    <Button class="btn btn-success" name="update_customer" type="submit">Update</Button>
                </div>
            </form>
        </div>
    </div>


    <marquee behavior="" direction="">if you want to add some extra information about your self so you can click bellow
        link</marquee>
    <a class="text-center" href="./extra-info.php?id=<?php echo $row['id']; ?>">Extra Info Add</a>

    <?php

		}
	} else {
		echo "0 results";
	}
	?>
</div>

</div>



</div>
</div>
<!-- End your project here-->
<?php include "../Customer/layouts/footer.php"; ?>