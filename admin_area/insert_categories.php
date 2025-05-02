<?php
include '../includes/connect.php';
if (isset($_POST['insert_cat'])) {
  $category_title = $_POST['cat_title'];

  //selsect data from databse
  $select_query="select * from `categories` where category_title='$category_title'";
  $result_select = mysqli_query($con, $select_query);
  $numbers=mysqli_num_rows(  $result_select);
  if ($numbers>0){
    echo "<script>alert('Category alrealdy added');</script>";
  }else{
  $insert_query = "insert into `categories` (category_title) values ('$category_title') ";
  
  $result = mysqli_query($con, $insert_query);
  if ($result) {
    echo "<script>alert('Category has been added to database');</script>";
  }
}}
?>

<form action="" method="POST" class="mb-2">

  <div class="input-group mb-3 w-90">
    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-receipt"></i> </span>
    <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="Username"
      aria-describedby="basic-addon1">
  </div>

  <div class="input-group w-10 mb-2 ">

    <input type="submit" class="bg-info p-2 border-0 my-3" name="insert_cat" value="Insert Categories">
      

  </div>

</form>