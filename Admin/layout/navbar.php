  <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="../admin/index.php" class="list-group-item list-group-item-action py-2 ripple   <?php if($_SERVER['PHP_SELF']=='/online_crockery_store/admin/index.php') {echo "active";} ?>" aria-current="true">
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Home</span>
          </a>
         
        
        </div>
      </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand " href="#">
          <span class="text-info  ms-4"> Test</span>phase
        </a>
        

        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">
          <li class="nav-item ">
          <form action="" method="post">
          <button class="btn btn-info dropdown-item"  name="logout" type="submit"> Logout
          </button>
          </form>
            </ul>
          </li>
        </ul>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>
  <!--Main Navigation-->
 