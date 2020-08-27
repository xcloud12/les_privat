// Call the dataTables jQuery plugin
$(document).ready(function () {

  var table = $('#pemesanan').DataTable({
    "dom": "<'row'<'col-sm-12 col-md-6'B >>" +
      "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
    buttons: [{
        "extend": 'excel',
        autoFilter: true,
        "text": '<i class="fas fa-file-excel"></i>  Simpan Sebagai Excel',
        "title": 'Data Pemesanan Keseluruhan',
        "className": 'btn btn-success rounded mb-3 mr-3 ',
        "messageBottom": 'Seluruh Data Pemesanan LPPK Universitas Nurul Jadid',
        customize: function (xlsx) {
          var sheet = xlsx.xl.worksheets['sheet1.xml'];
          // $('row:first c', sheet).attr('s', '51');
          //$('row c[r^="A"]', sheet).attr('s', '2'); //untuk mempertebal satu garis kebawah atau row

          // Loop over the cells in column `C`
          $('row c[r^="F"]', sheet).each(function () {
            // Get the value
            if ($('is t', this).text() == 'Sudah Diterima Oleh Tentor') {
              $(this).attr('s', '40');
            } else if ($('is t', this).text() == 'Ditolak Oleh Tentor') {
              $(this).attr('s', '35');
            } else if ($('is t', this).text() == 'Masih Ditangguhkan') {
              $(this).attr('s', '30');
            } else {
              // $(this).attr('s', '30');
            }
          });
          // Loop over the cells in column `C`
          $('row c[r^="E"]', sheet).each(function () {
            // Get the value
            if ($('is t', this).text() == 'Sudah Melakukan Pembayaran') {
              $(this).attr('s', '40');
            } else if ($('is t', this).text() == 'Belum Melakukan Pembayaran') {
              $(this).attr('s', '35');
            } else {
              // $(this).attr('s', '30');
            }
          });

          var sheet = xlsx.xl['styles.xml']; //mengubah ukuran font
          var tagName = sheet.getElementsByTagName('sz');
          for (i = 0; i < tagName.length; i++) {
            tagName[i].setAttribute("val", "12")
          }
        },
        exportOptions: {
          columns: [1, 2, 3, 4, 5, 6, 12, 8, 11] //membatasi kolom yang akan di output
        }

      },
      {
        "extend": 'pdf',
        "text": '<i class="fas fa-file-pdf"></i>  Simpan Sebagai PDF',
        "className": 'btn btn-danger rounded mb-3',
        "title": 'Data Pemesanan Keseluruhan',
        "download": 'open',
        pageSize: 'A4',
        customize: function (doc) {
          doc.defaultStyle.fontSize = 12; //<-- set fontsize to 16 instead of 10 
          // doc.defaultStyle.alignment = 'center'; //Mengetengah semua isi
          doc.styles.tableHeader.fontSize = 14;
          doc.styles.tableHeader.alignment = 'left';
          doc.styles.tableHeader.fillColor = '#5ca2db';
          doc.styles.title.fontSize = 20;
          doc.content[1].layout = "Borders";
          doc.content[1].table.widths = [

            '18%',
            '20%',
            '20%',
            '20%',
            '22%'
          ];
        },
        exportOptions: {
          columns: [1, 2, 3, 4, 8] //membatasi kolom yang akan di output
        },
        orientation: 'landscape',
        messageBottom: '\n\n Seluruh Data Pemesanan Dicetak Oleh Bagian Administrasi LPPK Universitas Nurul Jadid'
      }
    ],

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