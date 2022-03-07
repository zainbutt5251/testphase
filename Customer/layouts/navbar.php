  <header>
      <!-- Intro settings -->
      <style>
          /* Default height for small devices */
          #intro-example {
              height: 400px;
          }

          /* Height for devices larger than 992px */
          @media (min-width: 992px) {
              #intro-example {
                  height: 600px;
              }
          }
          .card-img-top{
              height:12pc;;
          }
          body{
            font-family: "Times New Roman", Times, serif;
          }
      </style>

      <!-- Navbar -->
      <nav class="navbar navbar-expand-sm navbar-light bg-white">
          <div class="container">
              <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse justify-content-start" id="navbarExample01">
                  <ul class="navbar-nav mel-auto mb-2 mb-lg-0">
                      <li class="nav-item active">
                          <a class="nav-link" aria-current="page" href="./index.php"> <span class="text-info  ms-4"> Test</span>Phase</a>
                      </li>

                  </ul>
              </div>
              <div class="collapse navbar-collapse  justify-content-end" id="navbarExample01">
                  <ul class="navbar-nav  mel-auto mb-2 mb-lg-0">
                      <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="view_cart.php"><span style="position: absolute;top: 1px;font-size: 15px;margin-left: 9px; color:darkturquoise" > 
                    </span></a>
                      </li>
                    
                     
                      <?php
                       if(!$_SESSION['email']){
        
                        ?>
                         <li class="nav-item">
                      <a class="nav-link" href="../CustomerRegister.php">Register</a>
                       
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../CustomerLogin.php">Login</a>
                    </li>
                        <?php
                    }else{
                      ?>
                      <li class="nav-item">
                          
                        <form action="" method="post">
                            <button type="submit" class="btn btn-outline-info"  name="logout">logout</button>
                        </form>
                    </li>
                          <?php
                    }
                      ?>
                  </ul>
              </div>
          </div>
      </nav>
      <!-- Navbar -->

    
  </header>
  <div class="container">