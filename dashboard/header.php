<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp" />
    <!-- ===== Style CSS ===== -->
    <link rel="stylesheet" href="../assets/css/dashboardstyle.css">
    <title>Dashboard</title>
</head>
<body>
     <div class="container">
        <!-- ------------------------ Start Aside ------------------------ -->
        <aside>

            <div class="logo">
                <h2>Dash<span class="danger">board </span></h2>
                <div class="close" id="close-btn">
                    <span class="material-symbols-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="dashboard.php" class="active">
                    <span class="material-symbols-sharp ">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="customers.php" class="">
                    <span class="material-symbols-sharp">group</span>
                    <h3>Customers</h3>
                </a>
                <a href="products.php">
                    <span class="material-symbols-sharp">grid_view</span>
                    <h3>Products</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">settings</span>
                    <h3>settings</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside> 
        <!-- ------------------------ End Aside ------------------------ -->

        <!-- ------------------------ start Main ------------------------ -->
         <main>
            <!-- --------------------- start Header --------------------- -->
            <header class="top">
                <button id="menu-btn">
                        <span class="material-symbols-sharp">menu</span>
                </button>
                <div class="profile">
                    <div class="profile-photo">
                        <img src="../assets/img/cropped-DSC_0043.jpg">
                    </div>
                    <div class="info">
                        <small class="role">Administrator</small>
                        <p>yassine sahyane</p>
                    </div>
                </div>
            </header>
            <!-- --------------------- End Header --------------------- -->