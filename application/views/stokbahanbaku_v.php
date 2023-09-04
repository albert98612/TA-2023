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
                    Input Stok
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Kode</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                        <th>Satuan</th>
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
      //Initialize Select2 Elements
      $('.select2').select2();

      $("#inputjumlahbahanbaku").on("input", function() {
        // Menghapus karakter selain angka menggunakan regular expression
        var sanitizedInput = $(this).val().replace(/[^0-9]/g, '');
        $(this).val(sanitizedInput);
      });
    });
  </script>

  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Input Stok Bahan Baku</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label for="inputnamabahanbaku" class="col-sm-4 col-form-label">Nama Bahan Baku</label>
            <div class="input-group col-sm-10">
              <input type="text" class="form-control" id="inputnamabahanbaku" placeholder="Nama Bahan Baku">
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->

          <div class="form-group">
            <label for="inputkodebahanbaku" class="col-sm-4 col-form-label">Kode</label>
            <div class="input-group col-sm-6">
              <input type="text" class="form-control" id="inputkodebahanbaku" placeholder="Kode">
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->

          <div class="form-group">
            <label for="inputjumlahbahanbaku" class="col-sm-4 col-form-label">Jumlah</label>

            <div class="row">
              <div class="input-group col-sm-5">
                <input type="text" class="form-control" id="inputjumlahbahanbaku" placeholder="Jumlah">
              </div>
              <div class="input-group col-sm-3">
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Kg</option>
                  <option>L</option>
                  <option>ml</option>
                </select>
              </div>
            </div>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label for="inputketerangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="input-group col-sm-10">
              <textarea class="form-control" id="inputketerangan" rows="3" placeholder="Enter ..."></textarea>
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
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