<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting Pembeli</title>
    <link href="<?php echo base_url('assets/admin/') ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/') ?>vendor/datatables/dataTables.bootstrap4.min.css"
        rel="stylesheet">
</head>

<body>
    <table width="100%">
    <tr>
        <td>
            <h2>Konfigurasi Pembeli</h2>
        </td>
            <td align="right">
                <a href="<?php echo base_url('admin/add_pembeli')?>"
                    class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                        <span class="text">Tambah Data</span>
                </a>
            </td>
        </tr>
    </table>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Pembeli</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User ID</th>
                            <th>Nama Pembeli</th>
                            <th>Telepone</th>
                            <th>E-mail</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php
                    $n = 1;
                    foreach ($pembeli as $row) {
                        ?>
                        <tr>
                            <td>
                                <?= $n++ ?>
                            </td>
                            <td>
                                <?= $row->userid ?>
                            </td>
                            <td>
                                <?= $row->nama_pembeli ?>
                            </td>
                            <td>
                                <?= $row->telepon ?>
                            </td>
                            <td>
                                <?= $row->email ?>
                            </td>
                            <td>
                                <a href="<?= base_url('admin/edit_pembeli/') . $row->userid ?>">Edit</a>
                                <a href="<?= base_url('admin/hapus_pembeli/') . $row->userid ?>"
                                    onclick="confirm('Apakah anda akan menghapus data ini?')">Hapus</a>
                                <a href="<?= base_url('admin/detail_pembeli/') . $row->userid ?>">Detail</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>User Id</th>
                            <th>Nama Pembeli</th>
                            <th>Telepone</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/admin/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/admin/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/admin/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/admin/') ?>js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="<?php echo base_url('assets/admin/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/admin/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('assets/admin/') ?>js/demo/datatables-demo.js"></script>
</body>

</html>