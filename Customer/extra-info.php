<?php
include "../Customer/layouts/header.php"; ?>
<?php include "../Customer/layouts/navbar.php"; ?>
<?php include "../db.php"; ?>

<!-- Start your project here-->

<div class="row">

    <div class="col-md-12">
        <marquee behavior="" direction="">Welcome <?php echo $_SESSION['email']; ?></marquee>
        <div class="card text-center mt-5">
            <h1>Add Extra Information </h1>

        </div>

    </div>

    <div class="col-md-6 mt-5">
        <div class="card heightr">
            <div class="card-body " style="overflow: auto!important;">
                <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Task</th>
                        <th>Short detail</th>
                        <th> Complete date</th>
                        <th>Delete</th>
                    </tr>
                    <?php

                    $sql = "SELECT  * FROM profile_info where u_id='$_GET[id]'";
                    $result = $connect->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['task']; ?></td>
                        <td><?php echo $row['s_detail']; ?></td>
                        <td><?php echo $row['c_date']; ?></td>

                        <td>
                            <div class="d-flex">

                                <button class="btn btn-info"
                                    onclick="update('<?php echo $row['id'] ?>','<?php echo $row['task'] ?>','<?php echo $row['s_detail'] ?>','<?php echo $row['c_date'] ?>')">edit</button>
                                <form action="./function.php" method="post">
                                <input type="hidden" name="u_id" value="<?php echo $_GET['id']; ?>">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <button class="btn btn-danger" name="del_task" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php
                        }
                    }

                    ?>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-6 mt-5">
        <div class="card p-4 heightr">
            <h4 class="text-center">Save/Update information</h4>
            <hr>
            <form action="function.php" method="post" enctype="multipart/form-data">
                <div class="form-froup">
                    <label for="">Task</label>
                    <input type="hidden" name="u_id" id="u_id" value="<?php echo $_GET['id'] ?>">
                    <input type="hidden" name="id" id="id">
                    <input type="text" name="task" id="task" required class="form-control">
                </div>
                <div class="form-froup">
                    <label for="">short detail</label>
                    <input type="text" name="s_detail" id="s_detail" required class="form-control">
                </div>
                <div class="form-froup">
                    <label for="">Complete Date</label>
                    <input type="date" name="c_date" id="c_date" required class="form-control">
                </div>

                <div class="form-froup pt-2 d-flex">
                    <Button class="btn btn-danger ml-2" type="reset" onclick="resetclick()">Reset</Button>
                    <div id="update_for">

                        <Button class="btn btn-success" name="Add_extra_info" type="submit">save</Button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <marquee behavior="" direction="">if you want to go back click below link</marquee>
    <a class="text-center" href="./index.php">Go Back</a>

</div>

</div>



</div>
</div>
<script>
function update(id, task, s_detail, date) {
    console.log(id,task, s_detail, date);
    var url = 'http://localhost/mc200404480/Customer/extra-info.php?id=3';
    var U_id = url.substring(url.lastIndexOf('=') + 1);

    $('#u_id').val(U_id)
    $('#id').val(id)
    $('#task').val(task)
    $('#s_detail').val(s_detail)
    $('#c_date').val(date)
    $('#update_for').html(`<Button class="btn btn-success" name="update_info" type="submit">update</Button>`)
}

function resetclick() {
    $('#update_for').html(`<Button class="btn btn-success" name="Add_extra_info" type="submit">save</Button>`)

}
</script>
<!-- End your project here-->
<?php include "../Customer/layouts/footer.php"; ?>