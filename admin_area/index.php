<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awsome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../styles.css">
    <style>
        .admin_image {
            width: 100px;
            object-fit: contain;
        }
    </style>
</head>

<body>
    <!-- nav bar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.png.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg navbar-light bg-info">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <!-- third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="px-5">
                    <a href=""><img src="../images/pinapples.jpg" alt="" class="admin_image"></a>
                    <p class="text-center text-light">Admin name</p>
                </div>
                <div class="button text-center align-items-center mx-5">
                    <button class="py-2 px-2 mx-1 bg-info"><a href="insert_products.php" class="nav-link text-light  my-1 mx-1">Insert Products</a></button>
                    <button class="py-2 px-2 mx-1 bg-info my-2"><a href="" class="nav-link text-light bg-info my-1 mx-1">View Products</a></button>
                    <button class="py-2 px-2 mx-1 bg-info my-2"><a href="index.php?insert_category" class="nav-link text-light bg-info my-1 mx-1">Insert Categories</a></button>
                    <button class="py-2 px-2 mx-1 bg-info my-2"><a href="" class="nav-link text-light bg-info my-1 mx-1">View Categories</a></button>
                    <button class="py-2 px-2 mx-1 bg-info my-2"><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1 mx-1">Insert Brands</a></button>
                    <button class="py-2 px-2 mx-1 bg-info my-2"><a href="" class="nav-link text-light bg-info my-1 mx-1">View Brands</a></button>
                    <button class="py-2 px-2 mx-1 bg-info my-2"><a href="" class="nav-link text-light bg-info my-1 mx-1">All Orders</a></button>
                    <button class="py-2 px-2 mx-1 bg-info my-2"><a href="" class="nav-link text-light bg-info my-1 mx-1">All Payments</a></button>
                    <button class="py-2 px-2 mx-1 bg-info my-2"><a href="" class="nav-link text-light bg-info my-1 mx-1">List Users</a></button>
                    <button class="py-2 px-2 mx-1 bg-info my-2"><a href="" class="nav-link text-light bg-info my-1 mx-1">Logout</a></button>
                </div>
            </div>
        </div>
        <!-- fourth child -->
         <div class="container my-5">
         <?php 
         if(isset($_GET['insert_category']))
         {
                include ('insert_categories.php');
         }
         if(isset($_GET['insert_brand']))
         {
                include ('insert_brands.php');
         }
         ?>
         </div>
                <!-- last child -->
                <div class="bg-info p-3 text-center">
            <center>
                <p>All Rights Reserved. Sasith Bogahawatte</p>
            </center>
        </div>
    </div>
    <!-- bootrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>