<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
</head>
<body>
            <form method="post">
                        <div class="field">
                                    <input type="password" id="passwd" name="passwd" placeholder="Password" required /><br><span id = "message4" style="color:orange"> </span><br>
                        </div>
                        <div class="field">
                                    <input type="password" id="Cpasswd" placeholder="Confirm password" required /><br><span id = "message5" style="color:orange"> </span><br>
                        </div>
                        <div class="field btn" onclick="passWdCheck()">
                                    <div class="btn-layer"></div>
                                    <button type="button" name="Check">Check<br>
                        </div>
                        <div>
                                    <input type="submit" name="submit" value="Commit Change">
                        </div>
            </form>
            <?php
                        include "connection.php";
                        if(isset($_POST['submit'])){
                                    $pass=$_POST['passwd'];
                                    $email=$_GET['email'];
                                    $sql="UPDATE registration SET passwd='$pass' WHERE emailId='$email';";
                                    $query = mysqli_query($conn,$sql);
                                    if($query==TRUE){
                                                echo "<script type='text/javascript'>alert('Password change successfully');open('signIn.php','_self');</script>";
                                    }else{
                                                echo "<script type='text/javascript'>alert('There Is Some issuse');open('signIn.php','_self');</script>";
                                    }
                        }
            ?>
            <script>
                        function passWdCheck() {
                                    var pw1 = document.getElementById("passwd").value;
                                    var pw2 = document.getElementById("Cpasswd").value;
                                    if (pw1 == "") {
                                    document.getElementById("message4").innerHTML =
                                    "**Fill the password please!";
                                    return false;
                                    } else {
                                    document.getElementById("message4").innerHTML = "";
                                    }
                                    if (pw2 == "") {
                                    document.getElementById("message5").innerHTML =
                                    "**Enter the password please!";
                                    return false;
                                    } else {
                                    document.getElementById("message5").innerHTML = "";
                                    }
                                    if (pw1.length < 8) {
                                    document.getElementById("message4").innerHTML =
                                    "**length must be atleast 8 characters";
                                    return false;
                                    } else {
                                    document.getElementById("message4").innerHTML = "";
                                    }
                                    if (pw1.length > 15) {
                                    document.getElementById("message4").innerHTML =
                                    "**length must not exceed 15 characters";
                                    return false;
                                    } else {
                                    document.getElementById("message4").innerHTML = "";
                                    }
                                    if (pw1 != pw2) {
                                    document.getElementById("message5").innerHTML =
                                    "**Passwords are not same! Retry with new Password";
                                    return false;
                                    } else {
                                    document.getElementById("message5").innerHTML = "You can Submit Now";
                                    alert("password created successfully");
                                    }
                                    }
            </script>
</body>
</html>