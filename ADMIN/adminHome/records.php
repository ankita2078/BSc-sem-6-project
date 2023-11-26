<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>record</title>
            <link rel="stylesheet" href="records.css">
            <link rel="stylesheet" href="admin.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
            <style>
                  .nav-link{
                        margin-left: 90px;
                        border-radius: 50px;
                        box-shadow: 10px 10px 8px #292828;
                        text-shadow: 1px 1px 2px #292828;
                        color:black;
                  }

                  .nav-link:hover{
                        border: none;
                        color: red;
                                        }
            </style>
</head>
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
                        <li><a href="records.php?name=$name"><i class="fa fa-file-text"></i>Records</a></li>
                        <?php echo "<li><a href='contact.php?name=$name'><i class='fa fa-address-book'></i>Contact</a></li>"; ?>
                    </ul> 
                    <div class="social_media">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            
            </div>
            <div class="main_content">
            <div class="header"><h1>History</h1></div>
            <br>
            <div id="content" style="margin-right:40px;">
                        <?php
                                    include 'connection.php';
                                    $sql="SELECT * FROM testpapers ORDER BY examDate DESC;";
                                    date_default_timezone_set('Asia/Kolkata');
                                    $query2 = mysqli_query($conn,$sql);
                                    while($res = mysqli_fetch_array($query2)){
                        ?>
                                    <form action="check.php" method="post">
                                                <div class="content-block">
                                                            <div class="content-header">
                                                                        <span id="datetime"><?php echo $res['examDate'];  ?></span>
                                                            </div>
                                                            <div class="mid">
                                                                        <p class="content-middle">
                                                                                    <?php echo $test=$res['testname'];  ?>
                                                                        </p>
                                                                        <span style="padding-left:80%">
                                                                                    <?php 
                                                                                                $now=strtotime(date("H.i.s",strtotime("now")));
                                                                                                $et=$res['examDate'];
                                                                                                $ext=strtotime(date("H.i.s",strtotime($et)));
                                                                                                if($ext>$now){
                                                                                                            echo "<span style='background-color: red;color:aliceblue;font-size:24px;padding:0 1%;'>Pending</span>";
                                                                                                }else{
                                                                                                            $expt=$res['expireTime'];
                                                                                                            $expiret=strtotime(date("H.i.s",strtotime($expt)));
                                                                                                            if($expiret>=$now){
                                                                                                                        echo "<span style='background-color: red;color:aliceblue;font-size:24px;padding:0 1%;'>Exam Going On</span>";
                                                                                                            }else{
                                                                                                                        echo "<span style='background-color: red;color:aliceblue;font-size:24px;padding:0 1%;'>Exam Over</span>&nbsp; &nbsp;&nbsp;";
                                                                                                                        // echo "<span style='font-weight:900;background-color:#bce3f3;color:black;'><a href='result.php?paper=$test'>RESULT</a></span>";
                                                                                                                        echo"<a class='nav-link' href='result.php?paper=$test&name=$name'><h5><strong>RESULT</strong></h5><span class='sr-only'>(current)</span></a>";
                                                                                                            }
                                                                                                }
                                                                                    ?>
                                                                        </span>
                                                            </div>
                                                            <br>
                                                            <input type="hidden" name="paper" value="<?php echo $res['testname'];?>">
                                                            <input type="hidden" name="id" value="<?php echo $res['id'];?>">
                                                            <div>
                                                                        <input type="submit" name="Details" value="Details"></input>
                                                                        <input type="submit" name="Delete" value="Delete"></input>
                                                            </div>
                                                </div>
                                    </form>
                                    <br><br>
                        <?php
                                    }
                        ?>
            </div> 
            
            </div>

            </div>

</body>
</html>