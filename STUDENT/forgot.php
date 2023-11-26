<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>FORGOT</title>
</head>
<body>
            <form method="post">
                        <label>Enter Email</label><br>
                        <input type="text" name="email">
                        <input type="submit" name="submit" value="Submit">
            </form>
            <?php
                        include "connection.php";
                        if(isset($_POST['submit'])){
                                    $email=$_POST['email'];
                                    $sql="SELECT * FROM registration WHERE emailId='$email';";
                                    $result=mysqli_query($conn,$sql);
                                    $check = mysqli_fetch_array($result);
                                    if(isset($check)){
                                                header("location:pswd.php?email=$email");
                                    }else{
                                                echo "<script type='text/javascript'>
                                                            alert('Wrong Email Id');
                                                            history.back();
                                                </script>";
                                    }
                        }
            ?>
</body>
</html>