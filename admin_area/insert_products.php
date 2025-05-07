<?php
include '../includes/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin dashboard</title>
    <!-- bootrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awsome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../styles.css">
</head>

<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">
            Insert Products
        </h1>
        <!-- form -->
        <form action="" method="POST" enctype="multipart/form-data">
            <!-- product title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control"
                    placeholder="Enter Product Title" autocomplete="off" required>
            </div>
            <!-- product description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_description" class="form-label">Product Description</label>
                <input type="text" name="product_description" id="product_description" class="form-control"
                    placeholder="Enter Product Description" autocomplete="off" required>
            </div>
            <!-- product keyword -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keyword" class="form-label">Product Keyword</label>
                <input type="text" name="product_keyword" id="product_keyword" class="form-control"
                    placeholder="Enter Product Keyword" autocomplete="off" required>
            </div>
            <!-- categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_categories" class="form-label">Product Category</label>
                <select name="product_categories" id="product_categories" class="form-control">
                    <option value="">Select category</option>
                   <?php
                   $select_query= "select * from categories";
                   $result_select=mysqli_query($con,$select_query);
                   while($row=mysqli_fetch_assoc($result_select)){
                    $category_title=$row['category_title'];
                    $category_id=$row['category_id'];
                    echo "<option value='$category_id'>$category_title</option>";
                   }

                   ?>
                </select>

            </div>
            <!-- Brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_brand" class="form-label">Product Brand</label>
                <select name="product_brand" id="" class="form-control">
                    <option value="">Select Brand </option>
                    <?php
                   $select_query= "select * from brands";
                   $result_select=mysqli_query($con,$select_query);
                   while($row=mysqli_fetch_assoc($result_select)){
                    $brand_title=$row['brand_title'];
                    $brand_id=$row['brand_id'];
                    echo "<option value='$brand_id'>$brand_title</option>";
                   }

                   ?>
                </select>
            </div>
            <!-- product image1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product Image</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control"
                     required>
            </div>
            <!-- product image2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product Image</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control"
                 required>
            </div>
            <!-- product image3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product Image</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control"
                     required>
            </div>
            <!-- product price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control"
                    placeholder="Enter Product Price" autocomplete="off" required>
            </div>
            <!-- Submit Button -->
            <div class="form-outline mb-4 w-50 m-auto">
                      <input type="submit" name="insert_product" id="insert_product" value="Insert Products" class="btn bg-info mb-4 px-3"
                    required>
            </div>
        </form>
    </div>

</body>

</html>