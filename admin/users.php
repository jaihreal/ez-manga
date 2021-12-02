<?php
  include_once '../layout/admin/header.html';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content pt-4">
      <div class="container-fluid">
        <!-- <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Classication</th>
                      <th>Status</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="user in users">
                      <td>{{ user.id }}</td>
                      <td>{{ user.name }}</td>
                      <td>{{ user.classification }}</td>
                      <td><span class="tag tag-success">{{ user.status }}</span></td>
                      <td>
                        <a href="#{user.id}" class="btn btn-sm btn-outline-info">Edit</a>
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div> -->
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="float-right d-none d-sm-block">
                  <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modal-user">
                    Add User
                  </button>
                </div>
                <h3 class="card-title font-weight-bold">USERS</h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Type</th>
                      <th>Status</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="user in users">
                      <td>{{ user.id }}</td>
                      <td>{{ user.name }}</td>
                      <td>{{ user.email }}</td>
                      <td>{{ user.type }}</td>
                      <td><span class="tag tag-success">{{ user.status }}</span></td>
                      <td>
                        <a href="#{user.id}" @click="userId(user.id)" class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#modal-edit">Edit</a>
                        <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modal-delete">Delete</button>
                        <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modal-ban">Ban</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- create-modal -->
  <div class="modal fade" id="modal-user">
    <div class="modal-dialog modal-default">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h4 class="modal-title">Create User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="quickForm" role="form">
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
  </div>
  <!-- edit-modal -->
  <div class="modal fade" id="modal-edit">
    <div class="modal-dialog modal-default">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h4 class="modal-title">Edit User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="quickForm" role="form">
            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" class="form-control form-control-border" :value="editName" id="name" placeholder="Enter name here." required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control form-control-border" :value="editEmail" id="email" placeholder="Enter email here." required>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio" checked>
              <label for="customRadio1" class="custom-control-label">Regular</label>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio">
              <label for="customRadio2" class="custom-control-label">Premium</label>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
              <button type="submit" id="submit" class="btn btn-outline-primary sweet-alert-update" data-dismiss="modal">
                Update
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- delete-modal -->
  <div class="modal fade" id="modal-delete">
    <div class="modal-dialog modal-default">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h4 class="modal-title">Delete User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>You are about to delete this user!</p>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" id="submit" class="btn btn-outline-danger sweet-alert-delete" data-dismiss="modal">
              Confirm
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ban-modal -->
  <div class="modal fade" id="modal-ban">
    <div class="modal-dialog modal-default">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h4 class="modal-title">Ban User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>You are about to ban this user!</p>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" id="submit" class="btn btn-outline-danger sweet-alert-ban" data-dismiss="modal">
              Confirm
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.modal -->
<?php
  $page = 'users';
  include_once '../layout/admin/footer.php';
?>