<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-title bg-info text-white h5 p-2">Tabel Barang</div>
            <div class="card-body p-2">
                <a href="javascript:void(0);" class="btn btn-danger mb-3" data-toggle="modal"
                    data-target="#modalbarang">Tambah Data</a>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Barang</th>
                                <th>Nama Barang</th>
                                <th>Qty</th>
                                <th>Harga Satuan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="databrg"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="modalbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <table>
                    <tr>
                        <td>ID Barang</td>
                        <td>
                            <input type="text" name="idbrg" id="idbrg">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Barang</td>
                        <td>
                            <input type="text" name="nmbrg" id="nmbrg">
                        </td>
                    </tr>
                    <tr>
                        <td>QTY</td>
                        <td>
                            <input type="number" name="qty" id="qty">
                        </td>
                    </tr>
                    <tr>
                        <td>Harga Satuan</td>
                        <td>
                            <input type="number" name="harga" id="harga">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="javascript:void(0)" id="simpan">Simpan Data</a>
            </div>
        </div>
    </div>
</div>
<script>
    databarang();

    function databarang() {
        $.ajax({
            url: "<?php echo base_url('admin/getbarang')?>",
            success: function (response) {
               $("#databrg").html(response);

            }
        });
    }

    $(document).ready(function () {
        $("#simpan").click(function (e) { 
            e.preventDefault();
            let id= $("#idbrg").val();
            let nama= $("#nmbrg").val();
            let qty= $("#qty").val();
            let harga= $("#harga").val();

            $.ajax({
                type: "post",
                url: "<?php echo base_url('admin/simpandatabarang')?>",
                data: {
                    id: id,
                    nama: nama,
                    qty: qty,
                    harga: harga,
                },
                dataType: "json",
                success: function (response) {
                    if(response.pesan == "sukses") {
                        $("#idbrg").val('');
                        $("#nmbrg").val('');
                        $("#qty").val('');
                        $("#harga").val('');

                        databarang();
                        $("#modalbarang").modal('hide');
                    }
                }
            });
        });
    });
</script>