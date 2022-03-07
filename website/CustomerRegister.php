 <?php include "./layouts/navbar.php" ?>


 <!-- Start your project here-->
 <div class="container">
     <div class="row">
         <div class="col-md-12 " style="padding:10% 30%;">
             <div style="background-color: white;padding:5%">
                 <h4 class="text-center border-bottom mb-5">Customer Registration Form</h4>
                 <form action="./layouts/function.php" method="post">
                     <!-- Name input -->
                     <div class="form-outline mb-4">
                         <input type="text" name="name" id="name" class="form-control" required />
                         <label class="form-label" for="name">Name</label>
                     </div>
                     <!-- Email input -->
                     <div class="form-outline mb-4">
                         <input type="email" name="email" id="email" class="form-control" required />
                         <label class="form-label" for="email">Email address</label>
                     </div>


                     <!-- Password input -->
                     <div class="form-outline mb-4">
                         <input type="password" name="password" id="form2Example2" class="form-control" required />
                         <label class="form-label" for="form2Example2">Password</label>
                     </div>

                     <!--repeat  Password input -->
                     <div class="form-outline mb-4">
                         <input type="password" name="c_password" id="c_password" class="form-control" required />
                         <label class="form-label" for="c_password">Repeat Password</label>
                     </div>


                     <div class="form-outline mb-4">

                         <input type="text" name="contactno" class="form-control" required>
                         <label class="form-label" for="contact">contact no</label>
                     </div>
                     <div class="form-outline mb-4">
                         <input type="text" name="address" class="form-control" required>
                         <label class="form-label" for="address">Address</label>
                     </div>
                     <div class="form-outline mb-4">
                         <select name="gender" id="" class="form-control" style="border:1px solid #c3baba;" required>
                             <option selected disabled>--------Select Gender----</option>
                             <option value="Male">Male</option>
                             <option value="Female">Female</option>
                         </select>
                     </div>

                     <!-- Submit button -->
                     <button type="submit" name="reg_now" class="btn btn-primary btn-block mb-4">Sign up</button>


                     <div class="text-center">
                         <p>Already a member? <a href="./index.php">Sign in</a></p>

                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>

 <!-- End your project here-->
 <?php include "./layouts/footer.php" ?>