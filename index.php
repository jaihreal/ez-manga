<?php
  // session_start();
  // if (isset($_SESSION["alertMessage"])) {
  //   $alertMsg = $_SESSION["alertMessage"];
  // }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EZ Manga</title>

    <!-- Favicon -->
    <link rel="icon" href="./src/logo.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <!-- DataTables -->
    <link rel="stylesheet" href="./src/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="./src/AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="./src/AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="./src/AdminLTE/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="./src/AdminLTE/plugins/toastr/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./src/AdminLTE/dist/css/adminlte.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./config/css/global.css">

  </head>
  <body style="background-color: #343a40;">
    <div id="app">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-2">
            <header>
              <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-dark">
                <div class="container">
                  <a class="navbar-brand" href="#">EZ Manga (Logo)</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">New</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Popular</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Browse</a>
                      </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="nav-link disabled float-right" href="#">{{userName}}</a>
                      </li>
                      <li class="nav-item">
                        <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#modal-login">
                          Login
                        </button>
                      </li>
                      <!-- <button @click="myModal=true" class="btn btn-sm btn-outline-secondary float-right">
                        {{loginValue}}
                      </button> -->
                    </ul>
                  </div>
                </div>
              </nav>
            </header>
          </div>
        </div>
        <div class="row">
          <div class="container mb-4 mt-5">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/image-one.jpg" alt="image" class="w-100" height="300">
                </div>
                <div class="carousel-item">
                  <img src="./src/image-two.jpg" alt="image" class="w-100" height="300">
                </div>
                <div class="carousel-item">
                  <img src="./src/image-three.jpg" alt="image" class="w-100" height="300">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="container text-light">
            <div class="row mb-4">
              <h5>Latest Released</h5>
            </div>
            <div class="row justify-content-center text-center">
              <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="card-body">
                  <img src="./src/image-one-portrait.jpg" alt="image" width="150" height="200">
                  <h6 class="mt-1" >Naruto</h6>
                  <p class="m-0" >Chapt.r</p>
                  <p class="m-0" >UPDATED JUST NOW</p>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="card-body">
                  <img src="./src/image-two-portrait.jpg" alt="image" width="150" height="200">
                  <h6 class="mt-1" >Astro Boy</h6>
                  <p class="m-0" >Chapter</p>
                  <p class="m-0" >UPDATED JUST NOW</p>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="card-body">
                  <img src="./src/image-three-portrait.jpg" alt="image" width="150" height="200">
                  <h6 class="mt-1" >Title</h6>
                  <p class="m-0" >Chapter</p>
                  <p class="m-0" >UPDATED JUST NOW</p>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="card-body">
                  <img src="./src/image-one-portrait.jpg" alt="image" width="150" height="200">
                  <h6 class="mt-1" >Naruto</h6>
                  <p class="m-0" >Chapter</p>
                  <p class="m-0" >UPDATED JUST NOW</p>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="card-body">
                  <img src="./src/image-two-portrait.jpg" alt="image" width="150" height="200">
                  <h6 class="mt-1" >Astro Boy</h6>
                  <p class="m-0" >Chapter</p>
                  <p class="m-0" >UPDATED JUST NOW</p>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="card-body">
                  <img src="./src/image-three-portrait.jpg" alt="image" width="150" height="200">
                  <h6 class="mt-1" >Title</h6>
                  <p class="m-0" >Chapter</p>
                  <p class="m-0" >UPDATED JUST NOW</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Login Modal -->
        <div class="modal fade" id="modal-login">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">LOGIN</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="controller/login.php" method="post">
                <div class="modal-body">
                  <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                  <div class="form-group">
                    <button id="btn-login" name="btn-login" class="btn btn-md btn-outline-primary">
                      Login
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.modal -->
      </div> 
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script type="text/javascript" src="./config/js/main.js"></script>

    <!-- jQuery -->
    <script src="./src/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./src/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="./src/AdminLTE/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="./src/AdminLTE/plugins/toastr/toastr.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./src/AdminLTE/dist/js/adminlte.min.js"></script>
  </body>
</html>
<?php
  include_once './config/js/user/user-landing-page.php';
?>