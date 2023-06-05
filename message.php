<?php require 'inc/header.php';  ?>

<body>
  <div class="container-scroller">
    <!-- partial:partials/navbar.html -->
    <?php require 'inc/navbar.html'; ?>

    <div class="container-fluid page-body-wrapper">

    <!-- partial:partials/_sidebar.html -->
    <?php require 'inc/sidebar.php'; ?>
     
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark">Hi, welcome back!</h4>
              <p class="font-weight-normal mb-2 text-muted">APRIL 1, 2019</p>
            </div>
          </div>
          <div class="container message-table">
            <div class="row message-header">
              <div class="col-md-7">
                <h4>Message</h4>
              </div>
              <div class="col-md-1"><h4>Date</h4></div>
              <div class="col-md-2"><h4>Status</h4></div>
              <div class="col-md-2"><h4>Delete</h4></div>
            </div>
            <!-- message display -->
            <?php

              $sql = "SELECT * FROM `message`";
              $result = mysqli_query($conn, $sql);

              if ($result) {
                while($row = mysqli_fetch_assoc($result)) {

              // $id = $row['id'];               
              // $name = $row['name'];               
              // $email	 = $row['email'];               
              // $subject = $row['subject'];               
              // $message = $row['message'];               
              // $status = $row['status'];               
              // $date = $row['date'];  

              $first = $row['first'];
              $middle = $row['middle'];
              $last = $row['last'];
              $street = $row['street'];
              $unit = $row['unit'];
              $city = $row['city'];
              $state = $row['state'];
              $zip = $row['zip'];
              $phonenumber = $row['phonenumber'];
              $type = $row['type'];
              $email = $row['email'];
              $ssn = $row['ssn'];
              $date = $row['date'];
              $file1 = $row['file1'];
              $file2 = $row['file2'];
          ?>


            <div class="row">
              <div class="col-md-7 message-info">

              <div class="box">
              <p>Name: <?=$first?></p>
              <p>Email: <?=$middle?></p>
              <p>Subject: <?=$last?></p>
              <p>Message: <?=$street?></p>
                </div> 
              </div>
              <div class="col-md-1">
                <div class="date">
                <p>Date: <?=$date?></p>
                <p>Time: 10:00pm</p>
                </div>
              </div>
              <div class="col-md-2 box-satus"><a href="" class='btn btn-info' style = "background-color: #00c476;">Mark as read</a></div>
              <div class="col-md-2 box-satus"><a href="" class='btn btn-danger'>Delete message</a></div>
            </div>

            <?php

            }                            
          }

          ?>

          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>

  <!-- js library -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>

  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

