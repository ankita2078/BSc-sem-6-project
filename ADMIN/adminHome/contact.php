<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Contact</title>
            <link rel="stylesheet" href="admin.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<style>
            .table{
                        font-size: 28px;
                        padding-left: 20%;
                        padding-top: 7%;
                        font-family: Arial, Helvetica, sans-serif;
                        
            }
            .text-center{
                        text-align: center;
                        font-size: 24px;
            }
            .head{
                        padding-top: 12px;
                        padding-bottom: 12px;
                        text-align: left;
                        background-color: #04AA6D;
                        color: white;
            }
            td, th {
                        border: 1px solid #ddd;
                        padding: 8px;
                    }
            td{
                background-color:white;
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
                    <ul>
                        <li><a href="/Project/index2.php"><i class="fas fa-home"></i>Home</a></li>
                        <?php echo "<li><a href='profile.php?name=$name'><i class='fas fa-user'></i>Profile</a></li>"; ?>
                        <li><a href="host/hostCreateTest.php"><i class="fas fa-address-card"></i>Host</a></li>
                        <li><a href="records.php"><i class="fa fa-file-text"></i>Records</a></li>
                        <?php echo "<li><a href='contact.php?name=$name'><i class='fa fa-address-book' ></i>Contact</a></li>"; ?>
                    </ul> 
                    <div class="social_media">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            
            </div>
            <div class="main_content text-center">
                            <p class="text-center" style="background-color: #04AA6D; color:white; font-size: 32px; margin-top:20px;box-shadow: 10px 10px 8px #292828;">Contact List</p>
                            <table class="table">
                                        <tr class="head text-center">
                                                    <th>Student Name</th>
                                                    <th>Phone Number</th>
                                                    <th><center>Email Id</center></th>
                                        </tr>
                                        <?php
                                                    include 'stuconnection.php';
                                                    $sql="SELECT * FROM registration";
                                                    $query2 = mysqli_query($conn,$sql);
                                                    while($res = mysqli_fetch_array($query2)){
                                        ?>
                                                    <tr class="text-center">
                                                                <td> <?php echo $res['stuName'];  ?> </td>
                                                                <td> <?php echo $res['phNo'];  ?> </td>
                                                                <td> <?php echo $res['emailId'];  ?> </td>
                                                    </tr>
                                                    <?php 
                                                    }
                                                    ?>
                            </table>
            </div>

            </div>
</body>
</html>