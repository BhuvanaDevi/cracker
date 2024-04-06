
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<?php
$cook = $_COOKIE['username'];
?>
<header class="app-header"><a class="app-header__logo" href="dashboard.php">Jeyalakshmi Priya</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       <li class="dropdown"><a style="text-decoration:none" class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i>&nbsp;<span style="font-size:14px;font-weight: bold;">Admin</span></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li>
              <form method="POST">
                <button class="dropdown-item" type="submit" name="logout" id="logout"><i class="fa fa-sign-out fa-lg"></i> Logout</button>
                </form>
                </li>
              </ul>
        </li>
      </ul>
    </header>
   <?php 
   if(isset($_POST['logout'])){
    if($cook) {
      setcookie('username','');
      header("location:index.php");
    }
    else{
      header("location:dashboard.php");
    }
   }
   ?>