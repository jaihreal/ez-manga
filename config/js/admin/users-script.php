<!-- jquery-validation -->
<script src="../src/AdminLTE/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../src/AdminLTE/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../src/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../src/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../src/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../src/AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../src/AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../src/AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../src/AdminLTE/plugins/jszip/jszip.min.js"></script>
<script src="../src/AdminLTE/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../src/AdminLTE/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../src/AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../src/AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../src/AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Datatable in Users Page -->
<script>
  $(function () {
    // Validation
    // $('#quickForm').validate({
    //   rules: {
    //     email: {
    //       required: true,
    //       email: true,
    //     },
    //     name: {
    //       required: true,
    //       minlength: 2
    //     },
    //   },
    //   messages: {
    //     email: {
    //       required: "Please enter an email address",
    //       email: "Please enter a vaild email address"
    //     },
    //     password: {
    //       required: "Please enter your name",
    //       minlength: "Your name must be at least 2 characters long"
    //     },
    //   },
    //   errorElement: 'span',
    //   errorPlacement: function (error, element) {
    //     error.addClass('invalid-feedback');
    //     element.closest('.form-group').append(error);
    //   },
    //   highlight: function (element, errorClass, validClass) {
    //     $(element).addClass('is-invalid');
    //   },
    //   unhighlight: function (element, errorClass, validClass) {
    //     $(element).removeClass('is-invalid');
    //   }
    // });
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "lengthMenu": [7, 10, 25, 50, "All"], "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "lengthMenu": [7, 10, 25, 50, "All"],
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

    // Alert
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    // user => create
    $('.sweet-alert-success').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'User Created Successfully!'
      })
    });
    // user => edit
    $('.sweet-alert-update').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'User Updated Successfully!'
      })
    });
    // user => delete
    $('.sweet-alert-delete').click(function() {
      Toast.fire({
        icon: 'warning',
        title: 'User Deleted!'
      })
    });
    // user => ban
    $('.sweet-alert-ban').click(function() {
      Toast.fire({
        icon: 'warning',
        title: 'User Banned!'
      })
    });
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        icon: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultError').click(function() {
      Toast.fire({
        icon: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultQuestion').click(function() {
      Toast.fire({
        icon: 'question',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultInfo').click(function() {
      toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultWarning').click(function() {
      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });

    $('.toastsDefaultDefault').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultTopLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'topLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomRight').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomRight',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultAutohide').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        autohide: true,
        delay: 750,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultNotFixed').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        fixed: false,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultFull').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        icon: 'fas fa-envelope fa-lg',
      })
    });
    $('.toastsDefaultFullImage').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        image: '../../dist/img/user3-128x128.jpg',
        imageAlt: 'User Picture',
      })
    });
    $('.toastsDefaultSuccess').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultInfo').click(function() {
      $(document).Toasts('create', {
        class: 'bg-info',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultWarning').click(function() {
      $(document).Toasts('create', {
        class: 'bg-warning',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultDanger').click(function() {
      $(document).Toasts('create', {
        class: 'bg-danger',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultMaroon').click(function() {
      $(document).Toasts('create', {
        class: 'bg-maroon',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
  });
</script>