<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('include/head'); ?>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php $this->load->view('include/navbar'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php $this->load->view('include/sidebar'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1><?= $title; ?></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><?= $title; ?></li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <!-- <h3 class="card-title">DataTable with default features</h3> -->
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                    Input Penjualan
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Tanggal</th>
                        <th>Nomor Transaksi</th>
                        <th>Total Berat</th>
                        <th>Total Harga</th>
                        <th>Detail</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>CV. Lestari Galvanis</b>
      </div>
      <strong>Copyright &copy; <?= date('Y'); ?>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?= base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/jszip/jszip.min.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- date-range-picker -->
  <script src="<?= base_url(); ?>assets/plugins/moment/moment.min.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Select2 -->
  <script src="<?= base_url(); ?>assets/plugins/select2/js/select2.full.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url(); ?>assets/dist/js/adminlte.min.js"></script>

  <script>
    $(document).ready(function() {
      var table = $('#data_table').DataTable({
        paging: false, // Menonaktifkan paging
        searching: false, // Menonaktifkan pencarian
        info: false, // Menonaktifkan informasi jumlah data
        ordering: false, // Menonaktifkan pengurutan kolom
        lengthChange: false // Menonaktifkan pilihan perubahan jumlah tampilan data per halaman
      });

      //Initialize Select2 Elements
      $('.select2').select2();

      //Date range picker
      $('#inputtanggal').daterangepicker({
          "singleDatePicker": true,
          "locale": {
            "format": "DD/MM/YYYY",
            "separator": " - ",
            "applyLabel": "Apply",
            "cancelLabel": "Cancel",
            "fromLabel": "From",
            "toLabel": "To",
            "customRangeLabel": "Custom",
            "weekLabel": "W",
            "daysOfWeek": [
              'Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'
            ],
            "monthNames": [
              "Januari",
              "Februari",
              "Maret",
              "April",
              "Mei",
              "Juni",
              "Juli",
              "Agustus",
              "September",
              "Oktober",
              "November",
              "Desember"
            ],
            "firstDay": 1
          },
          "parentEl": "#modal-default .modal-body"
        },
        function(start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        });


      // Adjust DateRangePicker position when the modal is shown
      $('#modal-default').on('shown.bs.modal', function() {
        $('#inputtanggal').css('z-index', 1600);
      });

      $("#inputjumlahbahanbaku").on("input", function() {
        // Menghapus karakter selain angka menggunakan regular expression
        var sanitizedInput = $(this).val().replace(/[^0-9]/g, '');
        $(this).val(sanitizedInput);
      });

      // Inisialisasi Select2 dengan opsi createTag
      $('#inputnama').select2({
        placeholder: "Tulis / Pilih Supplier",
        allowClear: true,
        tags: true,
        createTag: function(params) {
          var term = $.trim(params.term);

          if (term === '') {
            return null;
          }

          return {
            id: term,
            text: term,
            newTag: true // Menandai tag baru
          };
        }
      });

      // Menangani peristiwa pemilihan tag
      $('#inputnama').on('select2:select', function(e) {
        var data = e.params.data;

        // Cek jika ini adalah tag baru
        if (data.newTag) {
          console.log('Tag baru dibuat: ' + data.text);
        }
      });

      // Ketika tombol "Tambah" ditekan, tambahkan data ke dalam tabel
      $('#btn_tambah').click(function() {
        var nama = $('#inputnama').val();
        var jumlah = $('#inputjumlahbahanbaku').val();
        var satuan = $('#inputsatuan').val();
        var keterangan = $('#inputketerangan').val();

        if (nama != '' && jumlah != '') {
          // Tambahkan baris ke dalam tabel DataTable
          table.row.add([nama, jumlah, satuan, keterangan]).draw();
        }

        // Reset nilai input
        $('#inputnama').val('');
        $('#inputjumlahbahanbaku').val('');
        $('#inputsatuan').val('');
        $('#inputketerangan').val('');
      });

      // Ketika tombol "Kirim Data" ditekan
      $('#kirim_data').click(function() {
        // Mengambil data dari DataTable
        var data = table.rows().data().toArray();
        console.log(data);
      });

    });

    function tampilinput() {
      $('#inputbahanbaku').slideDown("slow");
      $('#btn_tampil').slideUp();
    }

    function tambahbahanbaku() {
      $('#inputbahanbaku').slideUp();
      $('#btn_tampil').slideDown("slow");
    }
  </script>

  <div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Input Penjualan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Tanggal:</label>

            <div class="input-group col-sm-5">
              <input type="text" class="form-control float-right" id="inputtanggal">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="far fa-calendar-alt"></i>
                </span>
              </div>
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->

          <div class="form-group">
            <label for="inputnomortransaksi" class="col-sm-4 col-form-label">Nomor Transaksi</label>
            <div class="input-group col-sm-5">
                  <input type="text" class="form-control" id="inputnomortransaksi" readonly>
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->

          <div class="form-group">
            <label for="inputnama" class="col-sm-4 col-form-label">Nama</label>
            <div class="input-group col-sm-5">
              <select id="inputnama" class="form-control" style="width: 100%;"></select>
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->

          <div class="form-group">
            <label for="inputalamat" class="col-sm-4 col-form-label">Alamat</label>
            <div class="input-group col-sm-5">
              <textarea class="form-control" id="inputalamat" rows="3" placeholder="Enter ..."></textarea>
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->

          <div class="form-group">
            <label for="" class="col-sm-4 col-form-label">Bahan Baku</label>
            <div class="col-sm-8">
              <!-- Tabel DataTable -->
              <table id="data_table" class="table table-bordered table-hover dataTable dtr-inline" style="width:100%">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Isi tabel akan ditambahkan dengan JavaScript -->
                </tbody>
              </table>
            </div>
            <div class="col-sm-2">
              <button type="button" class="btn btn-outline-primary btn-block" id="btn_tampil" onclick="tampilinput();"><i class="fa fa-plus"></i></button>
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->

          <div class="row" id="inputbahanbaku" style="display: none;">
            <div class="col-sm-6">
              <div class="form-group col-sm-8">
                <label for="inputnama" class="col-form-label">Nama</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="inputnama" placeholder="Nama Bahan Baku">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <div class="form-group">
                <label for="inputketerangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="input-group col-sm-10">
                  <textarea class="form-control" id="inputketerangan" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <div class="col-sm-5">
                <button type="button" class="btn btn-block btn-outline-primary" id="btn_tambah" onclick="tambahbahanbaku();">Tambah</button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="inputjumlahbahanbaku" class="col-form-label">Jumlah</label>
                <div class="row">
                  <div class="input-group col-sm-5 mb-2">
                    <input type="text" class="form-control" id="inputjumlahbahanbaku" placeholder="Jumlah">
                  </div>
                  <div class="input-group col-sm-3">
                    <select id="inputsatuan" class="form-control select2" style="width: 100%;">
                      <option value="kg" selected="selected">Kg</option>
                      <option value="L">L</option>
                      <option value="ml">ml</option>
                    </select>
                  </div>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="tambahbahanbaku();">Close</button>
          <button type="button" class="btn btn-primary" id="kirim_data">Save changes</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["csv", "excel", "pdf", "print", "colvis"],
        columnDefs: [{
          orderable: false,
          targets: 5
        }],
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
</body>

</html>