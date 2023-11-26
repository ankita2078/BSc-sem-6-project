<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>create</title>
  </head>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");
    body {
      font-family: "Poppins", sans-serif;
      background-image: url("images/admin/bg.jpg");
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      background-attachment: fixed;
    }

    table {
      background-color: rgb(255, 254, 254) !important;
    }
    p {
      text-align: center;
      font-size: 48px;
      color: black;
      font-weight: 600;
      padding-top: 2%;
    }
    .row {
      background-color: rgba(20, 19, 20, 0.5);
      padding: 60px;
      box-shadow: 10px 10px 8px #292828;
      margin: auto;
    }
    form {
      background-color: rgb(231, 223, 236);
      border-radius: 5px;
      margin: auto;
      padding: 30px;
      text-align: center;
    }
    label {
      font-size: 32px;
      font-weight: 700;
      /* font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; */
    }
    input {
      font-size: 28px;
    }
    button {
      font-size: 24px;
      background-color: rgb(223, 193, 235);
      color: rgb(0, 0, 0);
      border-radius: 5px;
      box-shadow: 10px 10px 8px #292828;
    }
    button:hover {
      font-size: 24px;
      background-color: rgb(155, 20, 185);
      color: rgb(255, 255, 255);
      border: 2px solid white;
    }
  </style>
  <body>
    <p style="color: white; text-shadow: 1px 1px 2px #292828">
      <u>Test Details</u>
    </p>
    <div class="container">
      <div
        class="row justify-content-center align-items-center text-center"
        style="width: 50%"
      >
        <div class="col-6 justify-item-center text-center">
          <form method="POST">
            <div
              class="form-row text-center justify-content-center align-items-center"
            >
              <div class="col-auto">
                <label>Enter test paper name</label>
                <input type="text" name="test" /><br /><br />
              </div>
              <div class="col-auto">
                <label>Enter Exam Date</label>
                <input type="date" name="date" /><br /><br /><br />
              </div>
              <div class="col-auto">
                <label>Enter Exam Time </label>
                <input type="time" name="etime" /><br /><br /><br />
              </div>
              <div class="col-auto">
                <label
                  >Enter Exam Time Duration &nbsp;<span style="color: red"> </label
                ><br /><br />
                <input type="time" name="time" /><br /><br /><br />
              </div>
              <div class="col-auto">
                <label>Enter Right Answer Marks </label>
                <input type="float" name="right" /><br /><br /><br />
              </div>
              <div class="col-auto">
                <label>Enter Wrong Answer Marks </label>
                <input type="float" name="wrong" /><br /><br /><br />
              </div>
              <div class="col-auto">
                <label>Test Expire Time </label>
                <input type="time" name="expire" /><br /><br /><br />
              </div>
            </div>

            <button type="submit" name="create" value="Create">Create</button>
          </form>
        </div>
      </div>
    </div>
  </body>
  <?php
            if(isset($_POST['create'])){
                        include 'Connection.php';
                        $tablename=$_POST['test'];
                        $examDate=$_POST['date'];
                        $examtime=$_POST['etime'];
                        $examTimeDuration=$_POST['time'];
                        $right=$_POST['right'];
                        $wrong=$_POST['wrong'];
                        $expire=$_POST['expire'];
                        $examDateAndTime=date("Y/m/d H.i.s",strtotime($examDate." ".$examtime));
                        $sql="CREATE TABLE testpapers(
                                    id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                    testname VARCHAR(255),
                                    examDate DATETIME,
                                    examDuration TIME,
                                    rightAnswer Float,
                                    wrongAnswer Float,
                                    expireTime TIME
                        );";
                        if ($conn->query($sql) === TRUE) { 
                          $sql2="ALTER TABLE result ADD $tablename INT;";
                          if($conn->query($sql2)!=TRUE){ 
                            echo "no"; 
                          }
                          $sql1="CREATE TABLE $tablename( id INT(10) NOT NULL AUTO_INCREMENT PRIMARY
                          KEY, question VARCHAR(255), option1 VARCHAR(255), option2 VARCHAR(255),
                          option3 VARCHAR(255), option4 VARCHAR(255), answer VARCHAR(255) );";
                          if($conn->query($sql1)==TRUE){ 
                            $q="INSERT INTO testpapers
                          (testname,examDate,examDuration,rightAnswer,wrongAnswer,expireTime) VALUES
                          ('$tablename','$examDateAndTime',
                          '$examTimeDuration','$right','$wrong','$expire');"; $query =
                          mysqli_query($conn,$q); header("location:hostQuestion.php"); 
                          }else{ 
                            echo "Error
                          creating table: " . $conn->error; echo "Please change the table name"; 
                        }
                        }else { 
                          $sql2="ALTER TABLE result ADD $tablename INT;";
                          if($conn->query($sql2)!=TRUE){ 
                            echo "no"; 
                          } 
                          $sql1="CREATE TABLE $tablename( id
                          INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY, question VARCHAR(255), option1
                          VARCHAR(255), option2 VARCHAR(255), option3 VARCHAR(255), option4
                          VARCHAR(255), answer VARCHAR(255) );"; if($conn->query($sql1)==TRUE){
                          $q="INSERT INTO testpapers
                          (testname,examDate,examDuration,rightAnswer,wrongAnswer,expireTime) VALUES
                          ('$tablename','$examDateAndTime',
                          '$examTimeDuration','$right','$wrong','$expire');"; $query =
                          mysqli_query($conn,$q); header("location:hostQuestion.php"); }else{ echo "Error
                          creating table: " . $conn->error; echo "Please change the table name"; } } }
  ?>
</html>
