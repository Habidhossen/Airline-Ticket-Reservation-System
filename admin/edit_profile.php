<?php

include '../db_connection.php';
session_start();

// declare variable
$adminname = '';

$sql = "SELECT * FROM `admin_tbl` WHERE Email = '$_SESSION[adminEmail]'";
$result = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $adminname = $row['Name'];
}

// update profile
if (isset($_POST['update_profile'])) {

    $name = $_POST['name'];

    $sql = "UPDATE `admin_tbl` SET Name ='$name'";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        $_SESSION['profileUpdateAlert'] = 'Updated Successfully!';
        header("location: edit_profile.php");
        exit;
    } else {
        echo 'Something went wrong!';
    }
}


// when User press backbutton after logout then he/she cannot access again this page without Login and this condition also use for security purpose.
if (!isset($_SESSION['adminEmail'])) {
    header("location: admin/admin_login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- add custom font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <!-- add bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- add css file -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- add favicon -->
    <link rel="shortcut icon" href="../images/logo_1.svg" type="image/x-icon">
</head>

<body>
    <!-- ======= Header starts here ======= -->
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-0 border-bottom admin-dashboard-header-design">
        <a href="admin_dashboard.php" class="d-flex align-items-center mb-3 mb-lg-0 text-dark text-decoration-none">
            <img class="bi me-2" width="40" height="32" src="../images/logo_1.svg">
            <use xlink:href="#bootstrap"></use></img>
            <span class="navbar-brand mb-0" style="color: cadetblue;"><b>Airline Ticket Reservation System</b></span>
        </a>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li class="nav-item">
                <a class="nav-link custom-nav-link" style="color: darkslateblue;" href="admin_dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link custom-nav-link" style="color: darkslateblue;" href="#">Booked</a>
            </li>
            <li class="nav-item">
                <a class="nav-link custom-nav-link" style="color: darkslateblue;" href="#">Flights</a>
            </li>
            <li class="nav-item">
                <a class="nav-link custom-nav-link" style="color: darkslateblue;" href="#">Airports</a>
            </li>
            <li class="nav-item">
                <a class="nav-link custom-nav-link" style="color: darkslateblue;" href="#">Airlines</a>
            </li>
        </ul>

        <div class="col-md-3 text-end">
            <button class="btn btn-sm dropdown-toggle" style="background-color: lavender;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Admin</button>
            <ul class="dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item small" href="view_profile.php">View Profile</a></li>
                <li><a class="dropdown-item small" href="edit_profile.php">Edit Profile</a></li>
                <li><a class="dropdown-item small" href="change_password.php">Change Password</a></li>
            </ul>
            <a href="logout.php" class="btn btn-sm" style="background-color: lavenderblush;">Log out</a>
        </div>
    </header>
    <!-- ======= Header ends here======= -->




    <!-- ======= Admin-Edit-Profile starts here======= -->
    <div class="container col-lg-6 col-md-8 col-sm-8 custom-profile-card">

        <h5 class="mb-3 fw-bold">Edit Profile</h5>
        <hr class="my-3">

        <!-- PHP Coding for showing alert -->
        <?php
        if (isset($_SESSION['profileUpdateAlert'])) {
        ?>
            <div class="alert alert-success alert-dismissible fade show small" role="alert">
                <?php echo $_SESSION['profileUpdateAlert'];
                unset($_SESSION['profileUpdateAlert']); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group row align-items-center">
                <label class="col-4">Name:</label>
                <div class="col-8">
                    <input name="name" class="form-control alert-success" value="<?php echo $adminname; ?>">
                </div>
            </div>
            <div class="mt-3">
                <button name="update_profile" type="submit" class="w-100 btn btn-sm text-white" style="background-color: cadetblue;">Update Profile</button>
            </div>
        </form>

    </div>
    <!-- ======= Admin-Edit-Profile ends here======= -->




    <!-- ======= Bootstrap, JavaScript CDN add ======= -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>