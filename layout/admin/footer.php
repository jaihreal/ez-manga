      </div>
      <!-- #app -->
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 0.1.4
        </div>
        <strong>Copyright &copy; 2021-2022 <a href="#">EZ Manga</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="../config/js/main.js"></script>
    <!-- jQuery -->
    <script src="../src/AdminLTE/plugins/jquery/jquery.min.js"></script>
        <!-- Page specific script -->
    <!-- <script>
      $(function () {
        bsCustomFileInput.init();
      });
    </script>
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script> -->
    <!-- Sparkline -->
    <script src="../src/AdminLTE/plugins/sparklines/sparkline.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../src/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../src/AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../src/AdminLTE/dist/js/adminlte.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="../src/AdminLTE/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="../src/AdminLTE/plugins/toastr/toastr.min.js"></script>
    <?php
      if ($page == 'admin') {
        include_once '../config/js/admin/admin-script.php';

      } elseif ($page == 'users') {
        include_once '../config/js/admin/users-script.php';
        
      } elseif ($page == 'manga') {
        include_once '../config/js/admin/manga-script.php';

      }
    ?>
  </body>
</html>