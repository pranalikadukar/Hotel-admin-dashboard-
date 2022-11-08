<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Stellar Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../../css/style.css" <!-- End layout styles -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, 3325);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
<?php

if (isset($_GET['Delete'])) {

  $s_id = $_GET['id'];
  $sql = "delete from hbooking where id='" . $s_id . "'";


  if ($conn->query($sql) === TRUE) {
    echo "record Deleted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>
<?php
if (isset($_GET['room'])) {

  $no = $_GET['id'];
  $sql = "delete from hroom where id='" . $no . "'";


  if ($conn->query($sql) === TRUE) {
    echo "record Deleted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

?>
<?php

if (isset($_GET['depart'])) {

  $s_id = $_GET['id'];
  $sql = "delete from hdepartment where id='" . $s_id . "'";


  if ($conn->query($sql) === TRUE) {
    echo "record Deleted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>
<?php

if (isset($_GET['staff'])) {

  $s_id = $_GET['id'];
  $sql = "delete from hstaff where id='" . $s_id . "'";


  if ($conn->query($sql) === TRUE) {
    echo "record Deleted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>



<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex align-items-center">
        <a class="navbar-brand brand-logo" href="../../index%20-%20Copy.html">
          <img src="../../images/logo.svg" alt="logo" class="logo-dark" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="../../index%20-%20Copy.html"><img src="../../images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
        <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome stallar dashboard!</h5>
        <ul class="navbar-nav navbar-nav-right ml-auto">
          <form class="search-form d-none d-md-block" action="#">
            <i class="icon-magnifier"></i>
            <input type="search" class="form-control" placeholder="Search Here" title="Search here">
          </form>
          <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>
          <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chart"></i></a></li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="icon-speech"></i>
              <span class="count">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../../images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                  <p class="font-weight-light small-text"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../../images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                  <p class="font-weight-light small-text"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../../images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                  <p class="font-weight-light small-text"> The meeting is cancelled </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
            <a class="nav-link d-flex align-items-center dropdown-toggle" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="d-inline-flex mr-3">
                <i class="flag-icon flag-icon-us"></i>
              </div>
              <span class="profile-text font-weight-normal">English</span>
            </a>
            <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
              <a class="dropdown-item">
                <i class="flag-icon flag-icon-us"></i> English </a>
              <a class="dropdown-item">
                <i class="flag-icon flag-icon-fr"></i> French </a>
              <a class="dropdown-item">
                <i class="flag-icon flag-icon-ae"></i> Arabic </a>
              <a class="dropdown-item">
                <i class="flag-icon flag-icon-ru"></i> Russian </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle ml-2" src="../../images/faces/face8.jpg" alt="Profile image"> <span class="font-weight-normal"> Henry Klein </span></a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="../../images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3">Allen Moreno</p>
                <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
              <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
              <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a>
              <a class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="profile-image">
                <img class="img-xs rounded-circle" src="../../images/faces/face8.jpg" alt="profile image">
                <div class="dot-indicator bg-success"></div>
              </div>
              <div class="text-wrapper">
                <p class="profile-name">Allen Moreno</p>
                <p class="designation">Administrator</p>
              </div>
              <div class="icon-container">
                <i class="icon-bubbles"></i>
                <div class="dot-indicator bg-danger"></div>
              </div>
            </a>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Dashboard</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../index%20-%20Copy.php">
              <span class="menu-title">Dashboard</span>
              <i class="icon-screen-desktop menu-icon"></i>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/booking.php">
              <span class="menu-title">Booking</span>
              <i class="icon-book-open menu-icon"></i>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/booking.php">
              <span class="menu-title">Add Booking</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/edit_booking.php">
              <span class="menu-title">Edit Booking</span>
            </a>
          </li>

          </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/add_room.php">
              <span class="menu-title">Rooms</span>
              <i class="icon-book-open menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/department.php">
              <span class="menu-title">Department</span>
              <i class="icon-book-open menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/staff.php">
              <span class="menu-title">Staff</span>
              <i class="icon-book-open menu-icon"></i>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="../../pages/tables/detail_table.php">
              <span class="menu-title"> Detail Tables</span>
              <i class="icon-grid menu-icon"></i>
            </a>
          </li>
          
          <li class="nav-item pro-upgrade">
            <span class="nav-link">
              <a class="btn btn-block px-0 btn-rounded btn-upgrade" href="https://www.bootstrapdash.com/product/stellar-admin-template/" target="_blank"> <i class="icon-badge mx-2"></i> Upgrade to Pro</a>
            </span>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> All Detail tables</h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail table</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">

            </div>
            <div class="col-lg-6 grid-margin stretch-card">

            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> All Booking</h4>
                  <p class="card-description"> All Booking <code>.table-striped</code>
                  </p>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th> Name </th>
                        <th> Gender </th>
                        <th> Mobile </th>
                        <th>Email </th>
                        <th>total_person</th>
                        <th>Room Type</th>
                        <th>address</th>
                        <th>city</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>

                        <?php

                        $sql = "SELECT id , pname,  email, gender	, mobileno  ,	total_person,	room_type,	addr	,city FROM hbooking";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                          // output data of each row  
                          while ($row = $result->fetch_assoc()) { ?>
                            <td><?php echo $row["id"] ?></td>
                            <td><?php echo $row["pname"] ?></td>
                            <td><?php echo $row["gender"] ?></td>
                            <td><?php echo $row["mobileno"] ?></td>
                            <td><?php echo $row["email"] ?></td>
                            <td><?php echo $row["total_person"] ?></td>
                            <td><?php echo $row["room_type"] ?></td>
                            <td><?php echo $row["addr"] ?></td>
                            <td><?php echo $row["city"] ?></td>

                            <td>
                              <form action="#">

                                <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                <label class="badge badge-danger"> <input type="submit" style="color:red" value="Delete" name="Delete"></label>
                              </form>
                            </td>
                      </tr>
                  <?php
                          }
                        } else {
                          echo "0 results";
                        }
                  ?>

                  
                    </tbody>
                  </table>
                </div>
                <div class="d-flex mt-4 flex-wrap">
                  <p class="text-muted">Showing 1 to 10 of 57 entries</p>
                  <nav class="ml-auto">
                    <ul class="pagination separated pagination-info">
                      <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>
                      <li class="page-item active"><a href="#" class="page-link">1</a></li>
                      <li class="page-item"><a href="#" class="page-link">2</a></li>
                      <li class="page-item"><a href="#" class="page-link">3</a></li>
                      <li class="page-item"><a href="#" class="page-link">4</a></li>
                      <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All Room</h4>
                  <p class="card-description"> Add Room <code>.table-bordered</code>
                  </p>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                      <th> <b>Id</th>
                        <th> <b>Room No </th>
                        <th> <b>Type </th>
                        <th> <b>floor</th>
                        <th> <b>person </th>
                        <th> <b>Bed Capacity </th>
                        <th> <b>Rent</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <?php
                        $sql = "SELECT id,room_no,room_type,floor_no,Person,beds,Rent FROM hroom";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                          // output data of each row  
                          while ($row = $result->fetch_assoc()) { ?>
                           <td><?php echo $row["id"] ?></td>
                            <td><?php echo $row["room_no"] ?></td>
                            <td><?php echo $row["room_type"] ?></td>
                            <td><?php echo $row["floor_no"] ?></td>
                            <td><?php echo $row["Person"] ?></td>
                            <td><?php echo $row["beds"] ?></td>
                            <td><?php echo $row["Rent"] ?></td>
                            
                            <td>
                              <form action="#">

                                <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                <label class="badge badge-danger"> <input type="submit" style="color:red" value="Delete" name="room"></label>
                              </form>
                            </td>

                      </tr>
                  <?php
                          }
                        } else {
                          echo "0 results";
                        }
                        
                  ?>
                  </tr>
                  
                    </tbody>
                  </table>
                </div>

                <div class="d-flex mt-4 flex-wrap">
                  <p class="text-muted">Showing 1 to 10 of 57 entries</p>
                  <nav class="ml-auto">
                    <ul class="pagination separated pagination-info">
                      <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>
                      <li class="page-item active"><a href="#" class="page-link">1</a></li>
                      <li class="page-item"><a href="#" class="page-link">2</a></li>
                      <li class="page-item"><a href="#" class="page-link">3</a></li>
                      <li class="page-item"><a href="#" class="page-link">4</a></li>
                      <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All Department</h4>
                  <p class="card-description"> Add Department <code>.table-dark</code>
                  </p>
                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th><b> Department Name </th>
                        <th> <b>Head of Department</b> </th>
                        <th> <b>Email</b> </th>
                        <th> <b>Phone</b> </th>
                        <th><b>Total staff</b></th>
                        <th><b>detail</b></th>
                        <th><b>action</b></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php
                        $sql = "SELECT *FROM hdepartment";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                          // output data of each row  
                          while ($row = $result->fetch_assoc()) { ?>
                          <td><?php echo $row["id"] ?></td>
                            <td><?php echo $row["Name_depart"] ?></td>
                            <td><?php echo $row["head_of_department"] ?></td>
                            <td><?php echo $row["email"] ?></td>
                            <td><?php echo $row["mobileno"] ?></td>
                            <td><?php echo $row["total_staff"] ?></td>
                            <td><?php echo $row["detail"] ?></td>
                            
                            <td>
                              <form action="#">

                                <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                <label class="badge badge-danger">  <input type="submit" style="color:red" value="Delete" name="depart"></label>
                              </form>
                            </td>

                      </tr>
                  <?php
                      }
                    } else {
                      echo "0 results";
                    }
                    
              ?>
              </tr>
                    </tbody>
                  </table>
                </div>
                <div class="d-flex mt-4 flex-wrap">
                  <p class="text-muted">Showing 1 to 10 of 57 entries</p>
                  <nav class="ml-auto">
                    <ul class="pagination separated pagination-info">
                      <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>
                      <li class="page-item active"><a href="#" class="page-link">1</a></li>
                      <li class="page-item"><a href="#" class="page-link">2</a></li>
                      <li class="page-item"><a href="#" class="page-link">3</a></li>
                      <li class="page-item"><a href="#" class="page-link">4</a></li>
                      <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> All Staff</h4>
                  <p class="card-description"> All Booking <code>.table-striped</code>
                  </p>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th> ID </th>
                        <th> Name </th>
                        <th> Gender </th>
                        <th>Email </th>
                        <th> Mobile </th>
                        <th> password </th>
                        <th> Department</th>
                        <th>DOB</th>
                        <th>Address</th>
                        <th>education</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php
                        $sql = "SELECT id, pName,	Gender,	email	,phone_no	,passward,	department,	DOB	,addr,	education	 FROM hstaff";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                          // output data of each row  
                          while ($row = $result->fetch_assoc()) { ?>
                           <td><?php echo $row["id"] ?></td>
                            <td><?php echo $row["pName"] ?></td>
                            <td><?php echo $row["Gender"] ?></td>
                            <td><?php echo $row["email"] ?></td>
                            <td><?php echo $row["phone_no"] ?></td>
                            <td><?php echo $row["passward"] ?></td>
                            <td><?php echo $row["department"] ?></td>
                            <td><?php echo $row["DOB"] ?></td>
                            <td><?php echo $row["addr"] ?></td>
                            <td><?php echo $row["education"] ?></td>
                            
                            <td>
                              <form action="#">

                                <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                <label class="badge badge-danger">  <input type="submit" style="color:red" value="Delete" name="staff"></label>
                              </form>
                            </td>

                      </tr>
                  <?php
                          }
                        } else {
                          echo "0 results";
                        }
                        
                  ?>
                  </tr>
                    </tbody>
                  </table>
                </div>
                <div class="d-flex mt-4 flex-wrap">
                  <p class="text-muted">Showing 1 to 10 of 57 entries</p>
                  <nav class="ml-auto">
                    <ul class="pagination separated pagination-info">
                      <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>
                      <li class="page-item active"><a href="#" class="page-link">1</a></li>
                      <li class="page-item"><a href="#" class="page-link">2</a></li>
                      <li class="page-item"><a href="#" class="page-link">3</a></li>
                      <li class="page-item"><a href="#" class="page-link">4</a></li>
                      <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
</body>

</html>