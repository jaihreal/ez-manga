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
  $(function(){
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
  });
</script>
