<?php
  include_once '../layout/admin/header.html';
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content pt-4">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#manga-uploaded" data-toggle="tab">Manga Uploaded</a></li>
                  <li class="nav-item"><a class="nav-link" href="#manga-sold" data-toggle="tab">Manga Sold</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li> -->
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="manga-uploaded">
                    <div class="row">
                      <div class="col-12">
                        <div class="card pb-0">
                          <div class="card-header">
                            <h3 class="card-title">
                              <h3 class="card-title font-weight-bold">MANGA LIST</h3>
                            </h3>
                            <div class="card-tools">
                            </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Title</th>
                                  <th>Chapter</th>
                                  <th>Genre</th>
                                  <th>Status</th>
                                  <th>Options</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr v-for="manga in mangas">
                                  <td>{{ manga.id }}</td>
                                  <td>{{ manga.title }}</td>
                                  <td>{{ manga.chapter }}</td>
                                  <td>{{ manga.genre }}</td>
                                  <td>{{ manga.status }}</td>
                                  <td>
                                    <button class="btn btn-sm btn-outline-info">Edit</button>
                                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>
                  </div>
                  <!-- <div class="tab-pane" id="manga-sold">
                    <div class="row">
                      <div class="col-12">
                        <div class="card pb-0">
                          <div class="card-header">
                            <h3 class="card-title">
                              <h3 class="card-title font-weight-bold">MANGA SOLD</h3>
                            </h3>
                            <div class="card-tools">
                            </div>
                          </div>
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Title</th>
                                  <th>Chapter</th>
                                  <th>Genre</th>
                                  <th>Status</th>
                                  <th>Options</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr v-for="manga in mangas">
                                  <td>{{ manga.id }}</td>
                                  <td>{{ manga.title }}</td>
                                  <td>{{ manga.chapter }}</td>
                                  <td>{{ manga.genre }}</td>
                                  <td>{{ manga.status }}</td>
                                  <td>
                                    <button class="btn btn-sm btn-outline-info">Edit</button>
                                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="tab-pane" id="settings">

                  </div> -->
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php
  $page = 'manga';
  include_once '../layout/admin/footer.php';
?>