<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>TEST</title>
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

            .form-group{
                margin:5px;
            }
            .part{
                margin:10px;
                
            }

</style>
  </head>
  <body>
  <div class="container">
                <div class="wrapper">
                <div id="body">
                    <center><u><div id="title" style="color: black;font-family: Verdana, Geneva, Tahoma, sans-serif;font-weight: bolder;font-size: 28px;"></div></u></center><div class="count" style="color:red;text-align:right;"><span id="H">00</span>:<span id="M">00</span>:<span id="S">00</span></div>
                        
                        <br>

                        
            <script>
                        <?php
                                    $exam=$_GET['exam'];
                                    $right=$_GET['right'];
                                    $wrong=$_GET['wrong'];
                                    $timeDuration=$_GET['time'];
                                    echo "var test='$exam';";
                                    echo "var right='$right';";
                                    echo "var wrong='$wrong';";
                                    echo "var time='$timeDuration';";
                        ?>
                        var rightAnswer=parseFloat(right);
                        var wrongAnswer=parseFloat(wrong);
                        var timeDur=time;
                        var exam=test;
                        var [hours, minutes, seconds] = timeDur.split(':');
                        var totalSeconds = (+hours) * 60 * 60 + (+minutes) * 60 + (+seconds);
                        document.getElementById("title").innerHTML=exam;
                        counting();
                        function counting(){
                                    totalSeconds-=1;
                                    if(totalSeconds>=0){
                                                var h=parseInt(totalSeconds/3600);
                                                var m=parseInt(totalSeconds/60);
                                                var s=parseInt(totalSeconds%60);
                                                document.getElementById("H").innerHTML=h;
                                                document.getElementById("M").innerHTML=m;
                                                document.getElementById("S").innerHTML=s;
                                                setTimeout(counting,1000);
                                    }else{
                                                submit();
                                    }
                        }
                        var wright={};
                        var checkAnswer={};
            </script>
            <?php
                        include "connection.php";
                        $qno=1;
                        $exam=$_GET['exam'];
                        $sql="SELECT * FROM $exam;";
                        $q=mysqli_query($conn,$sql);
                        while($res=mysqli_fetch_array($q)){
            ?>
                                    <form method="post">
                            <?php 
                                $id=$qno;
                                $ans=$res['answer'];
                            ?>
                            <script>
                                <?php
                                            echo "var id='$id';";
                                            echo "var answ='$ans';";
                                ?>
                                wright[id]=answ;
                            </script>
                            
                            <div class="part">
                                <div class="form-group">
                                <?php echo $qno; ?>. <?php echo $res['question']; ?>
                                </div>
                                <div class="form-group">
                                        <div class="form-check form-check-inline" id="options">
                                                <input class="form-check-input" type="radio" name='<?php echo $qno; ?>' value='<?php echo $res['option1'] ?>'><?php echo $res['option1'] ?>
                                        </div>
                                        <div class="form-check form-check-inline" id="option">
                                                <input class="form-check-input" type="radio" name='<?php echo $qno; ?>' value='<?php echo $res['option2'] ?>'><?php echo $res['option2'] ?>
                                        </div>
                                        <div class="form-check form-check-inline" id="option">
                                                <input class="form-check-input" type="radio" name='<?php echo $qno; ?>' value='<?php echo $res['option3'] ?>'><?php echo $res['option3'] ?>
                                        </div>
                                        <div class="form-check form-check-inline" id="option">
                                                <input class="form-check-input" type="radio" name='<?php echo $qno; ?>' value='<?php echo $res['option4'] ?>'><?php echo $res['option4'] ?>
                                        </div>
                                                
                                </div>
                            </div>
                        </form>
            <?php
                    $qno++;
                }
            ?>
            <center><input type="submit" value="Submit" onclick="submit()" class=b></center>
            <input type="hidden" id="testname" value="">
            </div>
            <script>
                        var result=0.00;
                        function submit(){
                                    var answer=document.getElementsByTagName('input');
                                    for(i = 0; i < answer.length; i++) {
                                                if(answer[i].type="radio") {
                                                            if(answer[i].checked){
                                                                        qid=answer[i].name;
                                                                        ans=answer[i].value;
                                                                        checkAnswer[qid]=ans;
                                                            }
                                                }
                                    }
                                    for(var anskey in checkAnswer) {
                                                for(var key in wright) {
                                                            if(anskey==key){
                                                                        if(wright[key]==checkAnswer[key]){
                                                                                    result+=rightAnswer;
                                                                        }else{
                                                                                    result-=wrongAnswer;
                                                                        }
                                                            }
                                                }
                                    }
                                    var params = new URLSearchParams();
                                    params.append("result", result);
                                    params.append("test", exam);
                                    var url = "save.php?" + params.toString();
                                    window.location.href = url;
                        }
            </script>
                </div>
            </div>







    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    
  </body>
</html>
