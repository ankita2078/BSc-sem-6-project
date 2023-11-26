<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin page</title>
	<link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<style>
  body {
 
    background-image:url("images/admin/bg.jpg");
    background-repeat:no-repeat;
    background-position:center;
    background-size:cover;
    background-attachment:fixed;

}
</style>
<body>
  <?php
    include 'connection.php';
    $name=$_GET['name'];
  ?>

<div class="wrapper">
    <div class="sidebar">
      <img src="images/logo.png" width="190px" alt="" style="margin-bottom:25px;">
    <br>
        <ul>
            <li><a href="/Project/index2.php"><i class="fas fa-home"></i>Home</a></li>
            <?php echo "<li><a href='profile.php?name=$name'><i class='fas fa-user'></i>Profile</a></li>"; ?>
            <li><a href="host/hostCreateTest.php"><i class="fas fa-address-card"></i>Host</a></li>
            <?php echo "<li><a href='records.php?name=$name'><i class='fa fa-file-text'></i>Records</a></li>"; ?>
            <?php echo "<li><a href='contact.php?name=$name'><i class='fa fa-address-book'></i>Contact</a></li>"; ?>
            
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">Welcome!! <span id="adname"><?php echo $name; ?></span> </div>  
        <div class="info">
          
      </div>
    </div>
</div>

</body>
</html>