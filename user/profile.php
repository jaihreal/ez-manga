<?php
  include_once '../layout/user/header-user.php';
?>
  <div class="col-md-12">
    <div class="container-fluid mt-5" style="border-radius:5px;">
      <div class="row m-5">
        <div class="col-md-3">
          <div class="card p-3">
            <div class="card-title">
              <h5>PROFILE</h5>
            </div>
            <div class="card-body">
              <table class="table table-responsive">
                <tbody>
                  <tr>
                    <td> Name</td>
                    <td> : </td>
                    <td> John Doe  </td>
                  </tr>
                  <tr>
                    <td> Account Type </td>
                    <td> : </td>
                    <td> Premium </td>
                  </tr>
                  <tr>
                    <td> Uploaded Manga </td>
                    <td> : </td>
                    <td> 8 </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="card p-3">
            <div class="row">
              <div class="col-md-6">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#manga" data-toggle="tab">Manga</a></li>
                  <li class="nav-item"><a class="nav-link" href="#manga-sold" data-toggle="tab">Manga Sold</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li> -->
                </ul>
              </div>
              <div class="col-md-6">
                <button class="btn btn-md btn-outline-primary float-right" data-toggle="modal" data-target="#modal-manga">
                  Add Manga
                </button>
              </div>
            </div>
            <!-- <div class="card-title">
              <h5>MANGA</h5>
            </div>
            <hr> -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="manga">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Chapter</th>
                        <th>Genre</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="manga in mangas">
                        <td>{{ manga.title }}</td>
                        <td>{{ manga.chapter }}</td>
                        <td>{{ manga.genre }}</td>
                        <td>{{ manga.status }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane" id="manga-sold">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Bought Count</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="manga in mangas">
                        <td>{{ manga.title }}</td>
                        <td>{{ manga.chapter }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>  
            </div>
          </div>
        </div>
        <!-- create-modal -->
        <div class="modal fade" id="modal-manga">
          <div class="modal-dialog modal-default">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <h4 class="modal-title">Add Manga</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="quickForm" role="form">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control form-control-border" id="title" placeholder="Enter title here." required>
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" rows="3" placeholder="Enter description here."></textarea>
                  </div>
                  <div class="form-group">
                        <label for="genre">Chapters</label>
                        <select class="form-control" required multiple name="genre[]"  id="genre">
                            <option value="#" selected>Choose genre</option>
                            <option value="slice">Slice of Life</option>
                            <option value="gourmet">Gourmet</option>
                            <option value="political">Political</option>
                            <option value="history">History</option>
                        </select>
                        <span id="genre_error" class="" role="alert" >

                        </span>
                      </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="chapter">Chapters</label>
                        <input type="number" min="1" class="form-control" rows="3" placeholder="Enter chapter here.">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" min="1" class="form-control" rows="3" placeholder="Enter price here.">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="upload_image">Chapters</label>
                        <div class="custom-file">
                          <label class="custom-file-label" for="exampleInputFile">Choose chapters.</label>
                          <input type="file" class="form-control-file custom-file-input" id="exampleInputFile" multiple>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="upload_image">Cover Photo</label>
                        <div class="custom-file">
                          <label class="custom-file-label" for="exampleInputFile">Choose cover image.</label>
                          <input type="file" class="form-control-file custom-file-input" id="exampleInputFile">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="submit" class="btn btn-outline-primary sweet-alert-success" data-dismiss="modal">
                      Add
                    </button>
                  </div>
                </form>
              </div>
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