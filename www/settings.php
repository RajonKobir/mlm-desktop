<?php
include('php-includes/connect.php');
include('php-includes/check-login.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Ideal IT - Password</title>
<link rel="icon" href="favicon.png" type="image/x-icon">
<!-- Bootstrap Core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- MetisMenu CSS -->
<link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="dist/css/sb-admin-2.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<style>
input[type="password"]{
    width: 50%;
}
</style>


</head>
<body>
<div id="wrapper">
<!-- Navigation -->
<?php include('php-includes/menu.php'); ?>
<!-- Page Content -->
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">Passwords Setting</h1>
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
<div class="col-lg-6 col-lg-offset-3">

</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->



  <h2>Change Admin Passwords Here:</h2>
  <h4>You can change both "login password" && "join password" separately!</h4>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Change Login Password</a></li>
    <li><a data-toggle="tab" href="#menu2">Change Join Member Password</a></li>
  </ul>

  <div class="tab-content" style="font-family:Times New Roman; font-size:16px">
    <div id="home" class="tab-pane fade in active">
      <h1>HOME</h1>
      <h3>The Initial Passwords for "login" && "join member" are the same. 
      If you had never changed these, please use the "factory password" as the "old password",
      which was given by the owner of this software. good luck!</h3>
      <h4>Go To The Tabs Right-->></h4>
    </div>
    <div id="menu1" class="tab-pane fade">

<form method="post">
    <fieldset>
        <div class="form-group">
        Old Password:
            <input class="form-control" placeholder="old pass..." name="old_pass1" type="password" autocomplete="off" autofocus required>
        </div>
        <div class="form-group">
        New Password:
            <input class="form-control" placeholder="new pass..." name="new_pass1" type="password" required>
        </div>
        <div class="form-group">
        Repeat New Password:
            <input class="form-control" placeholder="new pass again..." name="new_pass_repeat1" type="password" required>
        </div>
        <!-- Change this to a button or input when using this as a form -->
        <button type="submit" name="submit1" class="btn btn-lg btn-success ">Change Join Password</button>
    </fieldset>
</form>

</div>
    <div id="menu2" class="tab-pane fade">

<form method="post">
    <fieldset>
        <div class="form-group">
        Old Password:
            <input class="form-control" placeholder="old pass..." name="old_pass2" type="password" autocomplete="off" autofocus required>
        </div>
        <div class="form-group">
        New Password:
            <input class="form-control" placeholder="new pass..." name="new_pass2" type="password" required>
        </div>
        <div class="form-group">
        Repeat New Password:
            <input class="form-control" placeholder="new pass again..." name="new_pass_repeat2" type="password" required>
        </div>
        <!-- Change this to a button or input when using this as a form -->
        <button type="submit" name="submit2"  class="btn btn-lg btn-success ">Change Join Password</button>
    </fieldset>
</form>

</div>
  </div>





  <?php

if(isset($_POST['submit1'])){

    $old_pass1 = $_POST['old_pass1'];
    $new_pass1 = $_POST['new_pass1'];
    $new_pass_repeat1 = $_POST['new_pass_repeat1'];

    if($old_pass1!='' && $new_pass1!=''  && $new_pass_repeat1!=''){

if($new_pass1 == $new_pass_repeat1){

if($new_pass1 != $old_pass1){

    $query = PDO_FetchAll("SELECT * FROM admin WHERE id=1");
    // $results = mysqli_query($con, $query);
    $values = $query[0];
    $num_rows = $values['password'];
    if($num_rows == $old_pass1){
        $query = PDO_Execute("UPDATE `admin` SET `password`='$new_pass1' WHERE id=1");
    echo '<script>alert("Congratulations! Password is changed successfully!");window.location.assign("settings.php");</script>';    

}else{
    echo '<script>alert("Invalid Old Password!");window.location.assign("settings.php");</script>';

}


}else{
    echo '<script>alert("Please Choose A New Password!");window.location.assign("settings.php");</script>';

}

}else{
    echo '<script>alert("New Passwords Do Not Match!");window.location.assign("settings.php");</script>';

}

}else{
    echo '<script>alert("Please Fillout All The Fields!");window.location.assign("settings.php");</script>';
    }
}





if(isset($_POST['submit2'])){
    $old_pass2 = $_POST['old_pass2'];
    $new_pass2 = $_POST['new_pass2'];
    $new_pass_repeat2 = $_POST['new_pass_repeat2'];

    if($old_pass2!='' && $new_pass2!=''  && $new_pass_repeat2!=''){

if($new_pass2 == $new_pass_repeat2){

if($new_pass2 != $old_pass2){

    $query = PDO_FetchAll("SELECT * FROM admin WHERE id=1");
    // $results = mysqli_query($con, $query);
    $values = $query[0];
    $num_rows = $values['join_pass'];
    if($num_rows == $old_pass2){
        $query = PDO_Execute("UPDATE `admin` SET `join_pass`='$new_pass2' WHERE id=1");
    echo '<script>alert("Congratulations! Password is changed successfully!");window.location.assign("settings.php");</script>';    

}else{
    echo '<script>alert("Invalid Old Password!");window.location.assign("settings.php");</script>';

}


}else{
    echo '<script>alert("Please Choose A New Password!");window.location.assign("settings.php");</script>';

}

}else{
    echo '<script>alert("New Passwords Do Not Match!");window.location.assign("settings.php");</script>';

}

}else{
    echo '<script>alert("Please Fillout All The Fields!");window.location.assign("settings.php");</script>';
    }
}


?>







</div>
</div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->






<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="dist/js/sb-admin-2.js"></script>
</body>
</html>