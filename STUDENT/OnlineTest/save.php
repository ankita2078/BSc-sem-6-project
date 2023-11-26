<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");

body {
        font-family: "Poppins", sans-serif;
        background-image: url("images/test/bg1.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        font-size:larger;
    }
.container{
    padding:20px;
    background-color: rgba(20, 19, 19, 0.5);
    min-width:100vh;
    height:100vh;
}
.wrapper{
    background-color:white;
    margin:40px;
    padding:40px;
}



</style>
<body onload="load()">
            <div class="container">
                <div class="wrapper">
                <form method="post">
                        <input type="hidden" id="result" name="result">
                        <input type="hidden" id="testname" name="testname">
                        <center><h1>Please Save Your Answer </h1></center>
                        <input type="hidden" id="name" name="name">
                        <center><input type="submit" name="save" class="btn" value="Save" style="margin:10px;font-size:larger;"></input></center>
            </form>
                </div>
            </div>
            <script>
                        function load(){
                                    var params = new URLSearchParams(window.location.search),
                                    first = params.get("result"),
                                    second = params.get("test");
                                    document.getElementById("result").value=first;
                                    document.getElementById("testname").value=second;
                                    var name=prompt("Enter Login name");
                                    document.getElementById("name").value=name;
                        }
            </script>
            <?php
                        if(isset($_POST['save'])){
                                    include "connection.php";
                                    $stuname=$_POST['name'];
                                    $checkName=strtolower($stuname);
                                    $marks=$_POST['result'];
                                    $col=$_POST['testname'];
                                    $sql="SELECT * FROM result;";
                                    $q=mysqli_query($conn,$sql);
                                    while($res=mysqli_fetch_array($q)){
                                                $name=strtolower($res['stuName']);
                                                if($checkName==$name){
                                                            $sname=$res['stuName'];
                                                            $tag=1;
                                                            break;
                                                }else{
                                                            $tag=0;
                                                }
                                    }
                                    if($tag==1){
                                                $sql1="UPDATE result SET $col='$marks' WHERE stuName='$sname';";
                                                $q1=mysqli_query($conn,$sql1);
                                    }else{
                                                $sql1="INSERT INTO result (stuName,$col) VALUE ('$stuname','$marks');";
                                                $q1=mysqli_query($conn,$sql1);
                                    }
                                    header("location:/Project/STUDENT/student.php");
                        }
            ?>





<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>