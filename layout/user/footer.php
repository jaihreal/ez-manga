      <!-- Login Modal -->
      <div class="modal fade" id="modal-login">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">LOGIN</h5>
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
      <!-- Registration Modal -->
      <div class="modal fade" id="modal-register">
        <div class="modal-dialog modal-default">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">REGISTRATION</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="controller/login.php" method="post">
              <div class="modal-body">
                <div class="form-group">
                  <label for="name">Full Name</label>
                  <input type="text" class="form-control form-control-border" id="name" placeholder="Enter name here." required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control form-control-border" id="email" placeholder="Enter email here." required>
                </div>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio" checked>
                  <label for="customRadio1" class="custom-control-label">Regular</label>
                </div>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio">
                  <label for="customRadio2" class="custom-control-label">Premium</label>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="submit" class="btn btn-outline-primary sweet-alert-success" data-dismiss="modal">
                  Register
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /.modal -->
    </div>

    <!-- Main Footer -->
    <!-- <footer class="main-footer navbar-dark fixed-bottom">
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer> -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="./src/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./src/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./src/AdminLTE/dist/js/adminlte.min.js"></script>
  </body>
</html>