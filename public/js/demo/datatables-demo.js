// Call the dataTables jQuery plugin
$(document).ready(function () {

  $('#dataTable').DataTable({
    "language": {
      "sEmptyTable": "Tidak ada data yang tersedia",
      "sProcessing": "Sedang memproses...",
      "sLengthMenu": "Tampilkan _MENU_ data",
      "sZeroRecords": "Tidak ada hasil yang cocok",
      "sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
      "sInfoEmpty": "Menampilkan 0 - 0 dari 0 data",
      "sInfoFiltered": "(Disaring dari _MAX_ data keseluruhan)",
      "sInfoPostFix": "",
      "searchPlaceholder": "Cari Data...",
      "sSearch": "Pencarian :",
      "sUrl": "",
      "oPaginate": {
        "sFirst": "Pertama",
        "sPrevious": "Sebelumnya",
        "sNext": "Selanjutnya",
        "sLast": "Terakhir"
      }


    }
  });
});