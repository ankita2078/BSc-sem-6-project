<?php

  include 'connection.php';
  $i=0;
  if(isset($_POST['done'])){
    $q="SELECT * FROM testpapers ORDER BY id DESC LIMIT 1;";
    $query = mysqli_query($conn,$q);
    $row = mysqli_fetch_row($query);
    $questionpaper=$row[1];

    $question = $_POST['question'];
    $option1 = $_POST['option1'];
    $option2 = $_POST['option2'];
    $option3 = $_POST['option3'];
    $option4 = $_POST['option4'];
    $answer = $_POST['answer'];



    $sql = " INSERT INTO  `$questionpaper` (`question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES ( '$question', '$option1', '$option2', '$option3', '$option4', '$answer' )";

    $query = mysqli_query($conn,$sql);
    ++$i;

  }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


    <link rel="stylesheet" href="hostQuestion.css">
    <title>Admin Question Setting</title>
  </head>
  <body>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    
    <div class="container-fluid text-center text-white" style="border:3px solid rgb(255, 254, 254);background-color:#154564;margin-top:25px;box-shadow: 10px 10px 8px #888888;;">
      <h1>
        * * * INSERT QUESTION * * *
      </h1>
    </div>
    <div class="container text-center justify-content-center align-items-center" >
        <form method="post">
            
            <div class="form-group">
                <label id="label" for="exampleFormControlTextarea1" ><h3>QUESTION</h3></label>
                <input type="text" class="form-control" id="input" placeholder="Type your Question here" rows="3" name="question"></input>
            </div>

            <div class="container">
                <div class="form-group">
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon">1.</span>
                        </div>
                        <input type="text" class="form-control" placeholder="First Option" aria-label="Username" aria-describedby="basic-addon1" id="input" name="option1">
                      </div>
                </div>
                <div class="form-group">
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon">2.</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Second Option" aria-label="Username" aria-describedby="basic-addon1" id="input" name="option2">
                      </div>
                </div>
                <div class="form-group">
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon">3.</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Third Option" aria-label="Username" aria-describedby="basic-addon1" id="input" name="option3">
                      </div>
                </div>
                <div class="form-group">
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon">4.</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Fourth Option" aria-label="Username" aria-describedby="basic-addon1" id="input" name="option4">
                      </div>
                </div>
            </div>

            <div class="form-group">
                <label id="label" for="exampleFormControlTextarea1" ><h3>ANSWER</h3></label>
                <input type="text" class="form-control" id="input" placeholder="Type your Question here" rows="3" name="answer"></input>
            </div>

            <button class="btn btn-success" type="submit" name="done"> Add Another Question </button><br><br>
            <?php  echo "<a href='hostDisplayQuestions.php?i=$i' class='btn btn-success'>Submit</a><br>"; ?>
            
          </form>
    </div>
  </body>
</html>