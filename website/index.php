<?php include "./layouts/navbar.php" ?>


<!-- Start your project here-->
<div class="container" style="background-color: lightgray;">
    <a href="../index.php">
        <--Go back</a>

            <div class="row">
                <div class="col-md-12 " style="padding:10% 30%;">
                    <div style="background-color: white;padding:5%">

                        <h4 class="text-center border-bottom mb-5">Customer Sign in Form</h4>
                        <form action="./layouts/function.php" method="post">
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" name="email" id="email" class="form-control" />
                                <label class="form-label" for="email">Email address</label>
                            </div>


                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="password" id="form2Example2" class="form-control" />
                                <label class="form-label" for="form2Example2">Password</label>
                            </div>

                            <!-- 2 column grid layout for inline styling -->

                            <!-- Submit button -->
                            <button type="submit" name="log_now" class="btn btn-primary btn-block mb-4">Sign in</button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Not a member? <a href="./CustomerRegister.php">Register</a></p>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
</div>

<!-- End your project here-->
<?php include "./layouts/footer.php" ?>