<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>ADMIN</title>
            <link rel="stylesheet" href="profile.css">
            <link rel="stylesheet" href="admin.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
            <style>

            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");
            body {
            
                font-family: "Poppins", sans-serif;
                background-image:url("images/admin/bg.jpg");
                background-repeat:no-repeat;
                background-position:center;
                background-size:cover;
                background-attachment:fixed;
                color:black;

            }
            </style>
</head>
<body>
            <?php
                        include "connection.php";
                        $admin=$_GET['name'];
            ?>
            
            <div class="wrapper">
                <div class="sidebar">
                    <img src="images/logo.png" width="190px" alt="" style="margin-bottom:25px;">
                        <ul>
                            <li><a href="/Project/index2.php"><i class="fas fa-home"></i>Home</a></li>
                            <?php echo "<li><a href='profile.php?name=$admin'><i class='fas fa-user'></i>Profile</a></li>"; ?>
                            <li><a href="host/hostCreateTest.php"><i class="fas fa-address-card"></i>Host</a></li>
                            <li><a href="records.php"><i class="fa fa-file-text"></i>Records</a></li>
                            <?php echo "<li><a href='contact.php?name=$admin'><i class='fa fa-address-book'></i>Contact</a></li>"; ?>
                        </ul> 
                        <div class="social_media">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                
                </div>
                <div class="main_content">
                    <div class="header" style="font-family: 'Poppins', sans-serif;text-shadow: 1px 1px 2px #292828;">Hello <?php echo $admin; ?>!</div>
                    <table style="background-color:white;border:2px solid black;">
                                <tr>
                                            <th style="background-color:rgb(239, 227, 250);border:2px solid black;">USER NAME</th>
                                            <th style="background-color:rgb(239, 227, 250);border:2px solid black;">EMAIL ID</th>
                                            <th style="background-color:rgb(239, 227, 250);border:2px solid black;">MOBILE NO.</th>
                                </tr>
                    
                    <?php 
                                $sql="SELECT * FROM admn WHERE adname='$admin';";
                                $q=mysqli_query($conn,$sql);
                                if($q==TRUE){
                                            while($res=mysqli_fetch_array($q)){
                    ?>
                                                        <tr>
                                                                    <td style="border:2px solid black;"><?php echo $res['adname']; ?></td>
                                                                    <td style="border:2px solid black;"><?php echo $res['email']; ?></td>
                                                                    <td style="border:2px solid black;"><?php echo $res['mobile']; ?></td>
                                                        </tr>
                    <?php
                                            }
                                }
                    ?>
                    </table>
                </div>
            </div>
</body>
</html>