<?php
$request = $_SERVER['REQUEST_URI'];
if (substr($request, -4) == '.php') {
    $new_url = substr($request, 0, -4);
    header("Location: $new_url", true, 301);
    exit();
}
?>

<style>
/* Change the color of the navbar toggle lines to white */
.navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%28255, 255, 255, 1%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

.dropdown-menu {
    background-color: #14165b; /* Change background color */
}

.dropdown-item {
    color: #FEA116; /* Change text color to white for visibility */
}

.dropdown-item:hover {
    background-color: #FEA116; /* Optional: Lighter shade on hover */
    color: #fff; /* Ensure text stays white */
}

.profile-pic {
    color: #fff; /* Change login text to white */
}

@media (max-width: 576px) {
    .navbar-brand h1 {
        font-size: 1.25rem;
        padding: 1rem;
    }
}
</style>

<div class="container-fluid bg-dark px-0">
    <div class="row gx-0">
        <div class="col-lg-6 bg-dark d-flex align-items-center">
            <!-- Brand and Toggle Button -->
            <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
        <h1 class="m-0 text-primary text-uppercase display-6 display-md-4">Rio Management System</h1>
               </a>
            <!-- Toggle button visible only on mobile -->
            <button type="button" class="navbar-toggler ms-3 d-lg-none" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-lg-6">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Services</a>
                        <a href="room.php" class="nav-item nav-link">Rooms</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <a href="check_status.php" class="nav-item nav-link">Status</a>
                    </div>
                    <!-- Navbar container -->
  <div class="container">
   
   <!-- Navbar items -->
   <ul class="navbar-nav ms-auto">
     <!-- Dropdown trigger -->
     <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle profile-pic" href="#" id="loginTrigger" role="button">
         <span class="fw-bold">Login</span>
       </a>

       <!-- Dropdown menu -->
       <ul class="dropdown-menu dropdown-user animated fadeIn" id="loginDropdown">
         <div class="dropdown-user-scroll scrollbar-outer">
           <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="staff">
             <i class="fas fa-user-tie"></i> Staff
           </a>
           <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="customer">
             <i class="fas fa-users"></i> Customer
           </a>
           <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="admin">
             <i class="fas fa-user-shield"></i> Admin
           </a>
         </div>
       </ul>
     </li>
   </ul>
 </div>
</nav>

<!-- JavaScript to toggle the dropdown -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const loginTrigger = document.getElementById('loginTrigger');
    const loginDropdown = document.getElementById('loginDropdown');

    // Toggle the dropdown on click
    loginTrigger.addEventListener('click', function (e) {
      e.preventDefault();
      loginDropdown.style.display = loginDropdown.style.display === 'none' ? 'block' : 'none';
    });

    // Close dropdown if clicked outside
    document.addEventListener('click', function (e) {
      if (!loginTrigger.contains(e.target) && !loginDropdown.contains(e.target)) {
        loginDropdown.style.display = 'none';
      }
    }); 
  });
</script>



</div>                          
</div>
</nav>
</div>
</div>
</div>