<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Contact Us Form </title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

   </head>
 

   <style>
     body{
            background-image: url("images/bg.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            min-height: 100vh;
            width: 100%;
            /* background: #c8e8e9; */
            display: flex;
            align-items: center;
            justify-content: center;
          }

     .nav{
          background-color:rgba(0,0,0,0);
        }
        nav li a{
          margin-left:90px;
          
          border-radius:50px;
          /* background-color:#96c2dbcb;
          box-shadow: 10px 10px 8px #292828; */
          text-shadow:1px 1px 2px #292828;
        }

        nav li a:hover{

          border: none;
          color: white;
          box-shadow: 10px 10px 8px #292828;
          border: 2px solid white;
          
        }
   </style>

   <?php
      include "connection.php";
      $sql="SELECT * FROM admn LIMIT 1;";
      $q=mysqli_query($conn,$sql);
      if($q==TRUE){
        while($res=mysqli_fetch_array($q)){
          $phone=$res['mobile'];
          $email=$res['email'];
        }
      }
   ?>
<body>

<!-- navbar -->


  <div class="row justify-content-center align-items-center text-center">
    <div class="col-13">
      <nav class="navbar navbar-expand-lg  navbar-dark">
        <img src="images/logo.png" width="190px" alt="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/Project/index2.php"><h5><strong>Home</strong></h5><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/Project/STUDENT/Online Test/OnlineTest.php"><h5><strong>Test</strong></h5><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/Project/STUDENT/practice.php"><h5 ><strong>Practice</strong></h5><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/Project/STUDENT/resources.php"><h5><strong>Resources</strong></h5><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/Project/aboutUs/aboutUs.php"><h5 ><strong>About Us</strong></h5><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/Project/STUDENT/contact.php" style="border: none;
                color: white;
                box-shadow: 10px 10px 8px #292828;
                border: 2px solid white;border-radius:50px;"><h5><strong>Contact</strong></h5><span class="sr-only">(current)</span></a>
            </li>            
          </ul>
          
        </div>
      </nav>
    </div>
    <div class="col-auto">
      <div class="container">
        <div class="content">
          <div class="left-side">
            <div class="phone details">
              <i class="fas fa-phone-alt"></i>
              <div class="topic">Phone</div>
              <div class="text-one"><?php echo $phone; ?></div>
            </div>
            <div class="email details">
              <i class="fas fa-envelope"></i>
              <div class="topic">Email</div>
              <div class="text-one"><?php echo $email; ?></div>
            </div>
          </div>
          <div class="right-side" style="margin-right:15px;">
            <div class="topic-text">Send us a message</div>
            <p>If you have any work for us or any types of queries or issues while operating this website, you can send us a message from here. It's our pleasure to help you.</p>
          <form action="#">
            <div class="input-box">
              <input type="text" placeholder="Enter your name">
            </div>
            <div class="input-box">
              <input type="text" placeholder="Enter your email">
            </div>
            <div class="input-box message-box">
              <textarea placeholder="Enter your message"></textarea>
            </div>
            <div class="button" onclick="send()">
              <input type="button" value="Send Now" >
            </div>
          </form>
        </div>
        </div>
      </div>
    </div>
  </div>



<!-- navbar end -->


  
  <script>
    function send() {
      alert("Thank You For FeedBack");
      window.open("myTest.php");
    }
  </script>

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>
</html>
