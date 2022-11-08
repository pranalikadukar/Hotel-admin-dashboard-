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
  <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../../css/style.css" />
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
// echo "Connected successfully";

// define variables to empty values  
$nameErr = $emailErr = $mobilenoErr = $genderErr  = $passErr = $cpassErr = $desErr = $departErr = $dobErr = $addrErr = $eduErr = "";
$name = $email = $mobileno = $gender  = $password = $cpassword = $designation = $department = $DOB = $addr = $edu = "";

//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = Test_input($_POST["name"]);
  $password =  Test_input($_POST['pass']);
  $cpassword = Test_input($_POST['cpass']);
  $email =  Test_input($_POST["email"]);
  $mobileno =  Test_input($_POST["mobileno"]);
  $gender =  Test_input($_POST["gender"]);
  $designation = Test_input($_POST["desig"]);
  $department = Test_input($_POST["depart"]);
  $DOB = Test_input($_POST["birth"]);
  $addr = Test_input($_POST["addr"]);
  $edu = Test_input($_POST["edu"]);

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else{ if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
    $nameErr = "Only alphabets and white space are allowed";
  }
}
  //Email Validation   
   if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  }
  }
  //address validation
  if (empty($_POST["addr"])) {
    $addrErr = "Name is required";
  } else {
    if (!preg_match("/^(\\d{1,}) [a-zA-Z0-9\\s]+(\\,)? [a-zA-Z]+(\\,)? [A-Z]{2} [0-9]{5,6}$/", $addr)) {
    $addrErr = "(3344 W Alameda Avenue, Lakewood, CO 80222') write  in proper way";
  }
}
  if (empty($_POST["edu"])) {
    $eduErr = "Education is required";
  } else{ if (!preg_match("/^[a-zA-Z ]*$/", $edu)) {
    $eduErr = "Only alphabets and white space are allowed";
  }
}
  //Number Validation  
  if (empty($_POST["mobileno"])) {
    $mobilenoErr = "Mobile no is required";
  } else {if (!preg_match("/^[0-9]*$/", $mobileno)) {
    // check if mobile no is well-formed 
    $mobilenoErr = "Only numeric value is allowed.";
  }
}
  //check mobile no length should not be less and greator than 10  
   if (strlen($mobileno) != 10) {
    $mobilenoErr = "Mobile no must contain 10 digits.";
  }
  //password
   if (empty($_POST["pass"])) {
    $passErr = "Passward is required";
  } else{ if (strlen($password) < 8 || strlen($password) > 20) {

    $passErr = "Passwords must be between 8 and 20 characters in length ";
  }
}
  //conform password
   if (empty($_POST["cpass"])) {
    $cpassErr = "conform Passward is required";
  } else{
    if ($pass != $cpassword) {
    $cpassErr = "Passwords do not match ";
  }
}
  //Empty Field Validation  
   if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } 
   if (empty($_POST["desig"])) {
    $desErr = "designation is required";
  } 
  if (empty($_POST["depart"])) {
    $departErr = "department is required";
  } 
   if (empty($_POST["birth"])) {
    $dobErr = "date of birth is required";
  } else {
    $sql = "INSERT INTO hstaff (pName,	Gender,	email	,phone_no	,passward,	cpass	,designation,	department,	DOB	,addr,	education	)
  VALUES('" . $name . "','" . $gender . "','" . $email . "','" . $mobileno . "','" . $password . "','" . $cpassword . "','" . $designation . "','" . $department . "','" . $DOB . "','" . $addr . "','" . $edu . "')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  $conn->close();
}
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex align-items-center">
        <a class="navbar-brand brand-logo" href="../../index%20-%20Copy.php">
          <img src="../../images/logo.svg" alt="logo" class="logo-dark" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="../../index%20-%20Copy.php"><img src="../../images/logo-mini.svg" alt="logo" /></a>
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
            <a class="nav-link" href="../../pages/forms/booking.php">
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
              <span class="menu-title">Detail Tables</span>
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
            <h3 class="page-title"> Staff </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Staff</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">

            </div>
            <div class="col-md-6 grid-margin stretch-card">

            </div>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Staff</h4>
                  <p class="card-description"> Add Staff </p>
                  <form class="forms-sample" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                    <div class="form-group">
                      <label for="exampleInputName1">Full Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Name">
                      <span class="error" style="color:red">* <?php echo $nameErr; ?> </span>
                      <br><br>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Gender</label>
                      <select class="form-control" name="gender">
                        <option value="0">-----Gender-----</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                      <span class="error" style="color:red">* <?php echo $genderErr; ?> </span>
                      <br><br>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>
                      <input type="email" class="form-control" name="email" placeholder="Email">
                      <span class="error" style="color:red">* <?php echo $emailErr; ?> </span>
                      <br><br>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputnumber">Phone</label>
                      <input type="tel" class="form-control" name="mobileno" placeholder="Contact number">
                      <span class="error" style="color:red">* <?php echo $mobilenoErr; ?> </span>
                      <br><br>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputnumber">Password</label>
                      <input type="password" class="form-control" name="pass" placeholder="Password">
                      <span class="error" style="color:red">* <?php echo $passErr; ?> </span>
                      <br><br>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputnumber"> Conform Password</label>
                      <input type="password" class="form-control" name="cpass" placeholder="Re-Enter Password">
                      <span class="error" style="color:red">* <?php echo $cpassErr; ?> </span>
                      <br><br>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Designation</label>
                      <select class="form-control" name="desig">
                        <option value="0">---select. Designation-------</option>
                        <option value="cook">Cook</option>
                        <option value="Driver">Driver</option>
                        <option value="Kitchen Manager">Kitchen Manager</option>
                        <option value="Casino Host">Casino Host</option>
                        <option value="Purchase Officer">Purchase Officer</option>
                        <option value="Receptionist">Receptionist</option>
                        <option value="Event Manager">Event Manager</option>
                      </select>
                      <span class="error" style="color:red">* <?php echo $desErr; ?> </span>
                      <br><br>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Department</label>
                      <select class="form-control" name="depart">
                        <option value="0">---Select department----</option>
                        <option value="HouseKeeping">HouseKeeping</option>
                        <option value="Food and Beverage">Food and Beverage</option>
                        <option value="Kitchen">Kitchen</option>
                        <option value="Accounts">Accounts</option>
                        <option value="Security">Security</option>
                        <option value="Transport">Transport</option>
                        <option value="Purchase">Purchase</option>
                      </select>
                      <span class="error" style="color:red">* <?php echo $departErr; ?> </span>
                      <br><br>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputnumber"> Date Of Birth</label>
                      <input type="date" class="form-control" name="birth" placeholder="Date Of Birth">
                      <span class="error" style="color:red">* <?php echo $dobErr; ?> </span>
                      <br><br>
                    </div>
                <div class="form-group">
                  <label for="exampleInputCity1">Address</label>
                  <input type="text" class="form-control" name="addr" placeholder="Address">
                  <span class="error" style="color:red">* <?php echo $addrErr; ?> </span>
                  <br><br>
                </div>
              <div class="form-group">
                <label for="exampleInputCity1">Education</label>
                <input type="text" class="form-control" name="edu" placeholder="Education">
                <span class="error" style="color:red">* <?php echo $eduErr; ?> </span>
                <br><br>
              </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-12 grid-margin stretch-card">

      </div>
      <div class="col-md-6 grid-margin stretch-card">
      </div>
      <div class="col-md-6 grid-margin stretch-card">

      </div>
      <div class="col-12 grid-margin stretch-card">

      </div>
      <div class="col-12 grid-margin">
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
  <script src="../../vendors/select2/select2.min.js"></script>
  <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="../../js/typeahead.js"></script>
  <script src="../../js/select2.js"></script>
  <!-- End custom js for this page -->
</body>

</html>