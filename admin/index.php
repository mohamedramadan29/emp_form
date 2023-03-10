<?php
$pagetitle = ' صفحة الدخول  ';
ob_start();
session_start();
$Nonavbar = '';
include 'init.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $stmt = $connect->prepare(
        'SELECT * FROM admin WHERE admin_name=? AND admin_password=?'
    );
    $stmt->execute([$username, $password]);
    $data = $stmt->fetchColumn();
    $count = $stmt->rowCount();
    if ($count > 0) {
        $_SESSION['admin_id'] = $data['admin_id'];
        header('Location:main.php?dir=dashboard&page=dashboard');
        // exit();
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="login_form/fonts/icomoon/style.css">

    <link rel="stylesheet" href="login_form/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="login_form/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="login_form/css/style.css">

    <title>Login #5</title>
</head>

<body>

    <div class="d-md-flex half text-right">
        <div class="bg" style="background-image: url('uploads/header1.jpg');"></div>
        <div class="contents">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12">
                        <div class="form-block mx-auto">
                            <div class="text-center mb-5">
                                <h3 class="text-uppercase"> تسجيل دخول <strong> </strong></h3>
                            </div>
                            <form action="" method="POST">
                                <div class="form-group first">
                                    <label for="username"> اسم المتستخدم </label>
                                    <input name="username" type="text" class="form-control" placeholder=" اسم المستخدم "
                                        id="username">
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">كلمة المرور</label>
                                    <input name="password" type="password" class="form-control"
                                        placeholder=" كلمة المرور " id="password">
                                </div>
                                <!-- 
                                <div class="d-sm-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption"> تذكرنى
                                        </span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                </div>
                                -->
                                <input type="submit" value=" تسجيل دخول " class="btn btn-block py-2 btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="login_form/js/jquery-3.3.1.min.js"></script>
    <script src="login_form/js/popper.min.js"></script>
    <script src="login_form/js/bootstrap.min.js"></script>
    <script src="login_form/js/main.js"></script>
</body>

</html>