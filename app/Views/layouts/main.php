<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="div">
<aside class="main-sidebar bg-light elevation-4" >
      <!-- Brand Logo -->
      <a href="/dashboard" class="brand-link">

        <span class="brand-text font-weight-light">Restaurant MS | Admin </span>
      </a>
      <div class="sidebar" >
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../dist/img/manager.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin</a>
          </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="/admin" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>


            <!--Subadmins--->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Customer
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="<?php echo site_url('/customer-form') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p >Add</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/customer" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p> Manage</p>
                  </a>
                </li>

              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  food
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="<?php echo site_url('/newfood-form') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p >Add</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/newfood" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p> Manage</p>
                  </a>
                </li>

              </ul>
            </li>





            <!----- Tables--->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>Tables
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="/add-table" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/table" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p> Manage</p>
                  </a>
                </li>



              </ul>
            </li>




            <!--Enrollment--->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Bookings
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="/booktable" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add</p>
                  </a>
                </li>

               

                <li class="nav-item">
                  <a href="/table" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>manage</p>
                  </a>
                </li>



                
              </ul>
            </li>



            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users-cog"></i>
                <p>
                  Employee
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="/emp-form" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add</p>
                  
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/emp" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Manage</p>
                  </a>
                </li>

                <!-- <li class="nav-item">
                  <a href="rejected-bookings.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Rejected</p>
                  </a>
                </li> -->

                 <!-- <li class="nav-item">
                  <a href="all-bookings.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All</p>prf
                  </a>
                </li> -->
              </ul>
            </li>




            <!--Report--->
            <!-- <li class="nav-item">
            <a href="bw-dates-report.php" class="nav-link">
                 <i class="nav-icon fas fa-file"></i>
              <p>
             B/w Dates Report
              </p>
            </a>
          </li> -->





            <!--Profile--->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-cog"></i>
                <p>
                  Account Settings
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="profile.php" class="nav-link">
                    <i class="far fa-user nav-icon"></i>
                    <p>Profile</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="change-password.php" class="nav-link">
                    <i class="fas fa-cog nav-icon"></i>
                    <p>Change Password</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/logout" class="nav-link">
                    <i class="fas fa-sign-out-alt nav-icon"></i>
                    <p>Logout</p>
                  </a>
                </li>

              </ul>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <p> <?= $this->renderSection('content')?></p>
</div>