<?php

session_start();
include '../db_connection.php';

if (isset($_POST['login'])) {

    $email = $_POST['email']; //input-email stored in variable
    $password = $_POST['password']; ////input-password stored in variable

    $sql = "SELECT * FROM `admin_tbl` WHERE Email = '$email'";
    $result = mysqli_query($connection, $sql);

    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($_POST['password'] === $row['Password']) {

                $_SESSION['adminId'] = $row['Id'];
                $_SESSION['adminName'] = $row['Name'];
                $_SESSION['adminEmail'] = $row['Email'];

                header("location: admin_dashboard.php");
                exit;
            } else {
                // echo 'Wrong password';
                $_SESSION['wrongPasswordAlert'] = 'Wrong Password!';
                header("location: admin_login.php");
                exit;
            }
        }
    } else {
        // echo 'Invalid email';
        $_SESSION['invalidEmailAlert'] = 'Invalid Email!';
        header("location: admin_login.php");
        exit;
    }
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
    <!-- ======= Admin-header starts here ======= -->
    <div class="admin-header">
        <div class="d-flex flex-column">
            <header class="mb-auto header-nav-bg">
                <div>
                    <a href="../index.php" class="d-flex float-md-start text-decoration-none text-white justify-content-center">
                        <img src="../images/logo_1.svg" width="40" height="32">
                        <h3><strong>ATRS</strong></h3>
                    </a>
                    <nav class="nav nav-masthead justify-content-center float-md-end">
                        <a class="nav-link custom-nav-link" aria-current="page" href="../index.php">Home</a>
                        <a class="nav-link custom-nav-link" href="../about.php">About</a>
                        <a class="nav-link custom-nav-link" href="../contact.php">Contact us</a>
                        <a class="nav-link custom-nav-link" href="admin_login.php">Admin login</a>
                    </nav>
                </div>
            </header>
            <!-- Admin-login Section starts here -->
            <main>
                <div class="admin-login-container">
                    <div class="col-md-4 p-5 border rounded">
                        <h5 class="fw-bold text-center">Admin login!</h5>
                        <hr>
                        <!-- PHP Coding for showing alert -->
                        <?php
                        if (isset($_SESSION['wrongPasswordAlert'])) {
                        ?>
                            <div class="alert alert-danger alert-dismissible fade show small" role="alert">
                                <?php echo $_SESSION['wrongPasswordAlert'];
                                unset($_SESSION['wrongPasswordAlert']); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        }
                        if (isset($_SESSION['invalidEmailAlert'])) {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show small" role="alert">
                                <?php echo $_SESSION['invalidEmailAlert'];
                                unset($_SESSION['invalidEmailAlert']); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        }
                        ?>
                        <form action="" method="POST">
                            <div class="row">
                                <div class="pt-2">
                                    <div class="form-group">
                                        <!-- <label for="floatingInput">Email</label> -->
                                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="pt-3">
                                    <div class="form-group">
                                        <!-- <label for="floatingPassword">Password</label> -->
                                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row py-4">
                                <button class="btn btn-outline-light w-100 shadow btn-sm" type="submit" name="login">Log in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
            <!-- Admin-login Section ends here -->
        </div>
    </div>
    <!-- ======= Admin-header ends here ======= -->




    <!-- ======= Bootstrap, JavaScript CDN add ======= -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

</html>