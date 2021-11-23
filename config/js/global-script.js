$(document).ready(function () {
  $('#users-table').DataTable({
    "paging": true,
    "pagingType": "full_numbers",
    // responsive: true,
    // simple: true,
    // numbers: true,
    // simple_numbers: true,
    // full: true,
    // full_numbers: true,
    // first_last_numbers: true,
  });
  $('.dataTables_length').addClass('bs-select');
});