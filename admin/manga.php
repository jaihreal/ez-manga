<?php
  include_once '../layout/admin/header.html';
?>
  <div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
      <div class="card card-info shadow" style="height: 600px;">
        <div class="card-header shadow p-3" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
            <div class="row d-flex">
              <div class="col-md-6">
                <h5 class="card-title text-light">
                  MANGA
                </h5> 
              </div>
              <div class="col-md-6 d-flex justify-content-end">
                <div class="card-tool">
                  <button class="btn btn-sm btn-primary">Add Manga</button>
                </div>
              </div>
            </div>
        </div>
        <div class="card-body p-2">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-lg-12 col-sm-12">
                <table id="users-table" class="table table-sm table-striped table-hover table-responsive">
                  <thead>
                    <tr>
                      <th scope="col" width="3%">#</th>
                      <th scope="col" width="">Title</th>
                      <th scope="col" width="20%">Genre</th>
                      <th scope="col" width="10%">Chapter</th>
                      <th scope="col" width="15%">Status</th>
                      <th scope="col" width="15%">Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(manga, index) in mangas">
                      <th scope="row">{{index+1}}</th>
                      <td>{{ manga.title }}</td>
                      <td>{{ manga.genre }}</td>
                      <td>{{ manga.chapter }}</td>
                      <td>{{ manga.status }}</td>
                      <td>
                        <button class="btn btn-sm btn-outline-secondary">Edit</button>
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
  include_once '../layout/admin/footer.html';
?>