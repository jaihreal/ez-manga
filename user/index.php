<?php
  include_once '../layout/user/header-user.php';
?>
  <!-- carousel -->
  <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="w-100" height="300" src="../src/image-one.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Lorem Ipsum</h5>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto vitae enim consectetur autem illum reiciendis, maiores obcaecati ducimus, dolore explicabo maxime tenetur nesciunt modi consequuntur ipsum suscipit quam doloribus recusandae.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="w-100" height="300" src="../src/image-two.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Lorem Ipsum</h5>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto vitae enim consectetur autem illum reiciendis, maiores obcaecati ducimus, dolore explicabo maxime tenetur nesciunt modi consequuntur ipsum suscipit quam doloribus recusandae.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="w-100" height="300" src="../src/image-three.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Lorem Ipsum</h5>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto vitae enim consectetur autem illum reiciendis, maiores obcaecati ducimus, dolore explicabo maxime tenetur nesciunt modi consequuntur ipsum suscipit quam doloribus recusandae.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="container-fluid text-light px-5">
        <div class="row mb-3 pt-4">
          <h5 class="latest-released">LATEST RELEASED</h5>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="card-body">
              <img src="../src/image-one-portrait.jpg" alt="image" width="150" height="200">
              <h6 class="mt-1" >Naruto <span class="badge badge-secondary">New</span></h6>
              <p class="m-0" >Chapt.r</p>
              <p class="m-0" >UPDATED JUST NOW</p>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="card-body">
              <img src="../src/image-two-portrait.jpg" alt="image" width="150" height="200">
              <h6 class="mt-1" >Astro Boy <span class="badge badge-secondary">New</span></h6>
              <p class="m-0" >Chapter</p>
              <p class="m-0" >UPDATED JUST NOW</p>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="card-body">
              <img src="../src/image-three-portrait.jpg" alt="image" width="150" height="200">
              <h6 class="mt-1" >Title <span class="badge badge-secondary">New</span></h6>
              <p class="m-0" >Chapter</p>
              <p class="m-0" >UPDATED JUST NOW</p>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="card-body">
              <img src="../src/image-one-portrait.jpg" alt="image" width="150" height="200">
              <h6 class="mt-1" >Naruto <span class="badge badge-secondary">New</span></h6>
              <p class="m-0" >Chapter</p>
              <p class="m-0" >UPDATED JUST NOW</p>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="card-body">
              <img src="../src/image-two-portrait.jpg" alt="image" width="150" height="200">
              <h6 class="mt-1" >Astro Boy <span class="badge badge-secondary">New</span></h6>
              <p class="m-0" >Chapter</p>
              <p class="m-0" >UPDATED JUST NOW</p>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="card-body">
              <img src="../src/image-three-portrait.jpg" alt="image" width="150" height="200">
              <h6 class="mt-1" >Title <span class="badge badge-secondary">New</span></h6>
              <p class="m-0" >Chapter</p>
              <p class="m-0" >UPDATED JUST NOW</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
  $page = 'users';
  include_once '../layout/user/footer-user.php';
?>