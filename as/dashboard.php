<?php include "include/adminHeader.php"; ?>

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-3"> <?php include "include/sidebar.php"; ?> </div>
      <div class="col-lg-9">
        <div class="card">
              <i class="fa fa-users  mb-2" style="font-size: 70px;"></i>
              <h4 style="color:white;">Total Users</h4>
              <h5 style="color:white;"> 
              <?php
              $sql = "SELECT * from users where isAdmin=0";
              $result = $conn->query($sql);
              $count = 0;
              if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      $count = $count + 1;
                  }
              }
              echo $count;
              ?> </h5>
            </div>
            <div class="card">
              <i class="fa fa-th-large mb-2" style="font-size: 70px;"></i>
              <h4 style="color:white;">Total Categories</h4>
              <h5 style="color:white;"> <?php
              $sql = "SELECT * from category";
              $result = $conn->query($sql);
              $count = 0;
              if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      $count = $count + 1;
                  }
              }
              echo $count;
              ?> </h5>
            </div>
            <div class="card">
              <i class="fa fa-th mb-2" style="font-size: 70px;"></i>
              <h4 style="color:white;">Total Products</h4>
              <h5 style="color:white;"> <?php
              $sql = "SELECT * from product";
              $result = $conn->query($sql);
              $count = 0;
              if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      $count = $count + 1;
                  }
              }
              echo $count;
              ?> </h5>
            </div>
            <div class="card">
              <i class="fa fa-list mb-2" style="font-size: 70px;"></i>
              <h4 style="color:white;">Total orders</h4>
              <h5 style="color:white;"> <?php
              $sql = "SELECT * from orders";
              $result = $conn->query($sql);
              $count = 0;
              if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      $count = $count + 1;
                  }
              }
              echo $count;
              ?> </h5>
            </div>
      <div>
    </div>
     <?php
            if (isset($_GET['category']) && $_GET['category'] == "success") {
                echo '<script> alert("Category Successfully Added")</script>';
            }else if (isset($_GET['category']) && $_GET['category'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
            if (isset($_GET['size']) && $_GET['size'] == "success") {
                echo '<script> alert("Size Successfully Added")</script>';
            }else if (isset($_GET['size']) && $_GET['size'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
            if (isset($_GET['variation']) && $_GET['variation'] == "success") {
                echo '<script> alert("Variation Successfully Added")</script>';
            }else if (isset($_GET['variation']) && $_GET['variation'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
        ?>
  </div>