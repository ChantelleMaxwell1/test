<?php
echo '
<html>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>

<aside class="main-sidebar sidebar-dark-primary elevation-4 ud_nav">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link ud_logo">
        <img src="img/underdog_logo.png" alt="AdminLTE Logo">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">USER NAM HERE</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
			  <a href="./index.php" class="nav-link active">
				<p>
					Dashboard
				</p>
			  </a>
            </a>
          </li>
           <li class="nav-item">
            <a href="calendar.php" class="nav-link">
              <p>
                Calendar
                <i class="nav-icon far fa-calendar-alt"></i>
              </p>
            </a>
          </li>
		  <li class="nav-item">
           
			 <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Creation
                <i class="fas fa-angle-left right"></i>
              </p>
            </a> 
			<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="blank.php" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
							<p>Create Group</p>
					</a>
				</li>
                    
            </ul>
			<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="blank.php" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
							<p>Create Event</p>
					</a>
				</li>
                    
            </ul>
			<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="blank.php" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
							<p>Create Session</p>
					</a>
				</li>
                    
            </ul>
				<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="blank.php" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
							<p>Create User</p>
					</a>
				</li>
                    
            </ul>
				<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="blank.php" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
							<p>Create Venue</p>
					</a>
				</li>
                    
            </ul>			
          </li>
          <li class="nav-item">
			  <a href="#" class="nav-link">
			  <i class="nav-icon fas fa-book"></i>
				<p>
					Reports
					<i class="fas fa-angle-left right"></i>
				</p>
			  </a>
          <ul class="nav nav-treeview">
				 <li class="nav-item">
                <a href="blank.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
                    
            </ul>
          </li> 
		<li class="nav-item">
			  <a href="#" class="nav-link">
			  <i class="nav-icon fas fa-book"></i>
				<p>
					Profile
					<i class="fas fa-angle-left right"></i>
				</p>
			  </a>
          <ul class="nav nav-treeview">
				 <li class="nav-item">
                <a href="blank.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
                    
            </ul>
          </li> 		  
          <li class="nav-item">
            <a href="#" class="nav-link">
			 <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
               
				<i class="fas fa-angle-left right"></i>
              </p>
            </a> 
			<ul class="nav nav-treeview">
				 <li class="nav-item">
                <a href="blank.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Group Information</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="blank.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Session Information</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="blank.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Event Information</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="blank.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Information</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="blank.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Venue Information</p>
                </a>
              </li>
                    
            </ul>
          </li>
		   <li class="nav-item menu-open">
			  <a href="./index.html" class="nav-link active">
				<p>
					Donation
				</p>
			  </a>
            </a>
          </li>
          
        

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


<html>
';
?>