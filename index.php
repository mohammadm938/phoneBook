<?php
session_start();
include_once 'app/users.php';
if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    $obj = new user();
    $obj->login($data);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">
    <title>ورود | دفترچه تلفن آنلاین</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet"/>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-body">
<div class="container">
    <form class="form-signin" action="" method="post">
        <h2 class="form-signin-heading">همین حالا وارد شوید</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" placeholder="نام کاربری" name="frm[email]" autofocus>
            <input type="password" class="form-control" name="frm[password]" placeholder="کلمه عبور">
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> مرا به خاطر بسپار
                <span class="pull-right"> <a href="#"> کلمه عبور را فراموش کرده اید؟</a></span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit" name="btn">ورود</button>
        </div>
    </form>
</div>
</body>
</html>
