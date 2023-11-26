<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- FontAwesome -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">

    
    <title>index</title>
  </head>
  <body>


    

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="index2.css">


    <!-- navbar -->

    <nav class="navbar navbar-expand-lg  navbar-dark">
        <img src="images/logo.png" width="190px" alt="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"><h5><strong>Home</strong></h5><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#"><h5><strong>Test</strong></h5><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#"><h5><strong>Practice</strong></h5><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#"><h5><strong>Resources</strong></h5><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/project/aboutUs/aboutUs.php"><h5><strong>About Us</strong></h5><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#"><h5><strong>Contact</strong></h5><span class="sr-only">(current)</span></a>
            </li>            
          </ul>
          
        </div>
      </nav>


      <!-- navbar end -->



      <!-- content -->

      <div class="container" id="content">
          <br>
          <br>
          
          <br>
          <br>
          <div class="row justify-content-center align-items-center text-center text-white">
            <div class="col-12">
                <section id="home">
                    <h2>Enhance your future with intelliMe</h2>
                    <p>Welcome to intelliMe <br>Your One-Stop destination for achieving<br>SUCCESS</p>
                    <br>
                    <div class="btn">
                        <a  style="color:white;"  data-toggle="modal" data-target="#popup1"><strong>Get Started</strong></a>
                        
                    </div>
                </section>
              </div>
          </div>
      </div>

      <!-- content-end -->








    <!--Popup  Modal -->
    <div class="modal fade" id="popup1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><strong>WELCOME!</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center align-items-center text-center">
              <div class="col-auto">
                <div class="box">
                  <i class="fas fa-user-cog"></i>
                  <p><h3>Conduct self-designed tests for free!</h3></p>
                  
                  <div class="button">
                    <div class="btn">
                      <a href="ADMIN/adminSignUp.php" style="color:white;"  data-toggle="#" data-target="#"><strong>Admin</strong></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="box">
                  <i class="fad fa-user-graduate"></i>
                    <p><h3>Learn,practice and Test your progress!</h3></p>
                    
                  <div class="button">
                    <div class="btn">
                      <a  style="color:white;"  data-toggle="#" data-target="#" href="STUDENT/signIn.php"><strong>Student</strong></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
        </div>
      </div>
  </div>
  <!-- Popup Modal End -->






  </body>
</html>