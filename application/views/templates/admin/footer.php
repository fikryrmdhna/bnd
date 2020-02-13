    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url('vendor/AdminLTE/') ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('vendor/AdminLTE/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="<?= base_url('vendor/AdminLTE/') ?>dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/fc-3.3.0/datatables.min.js"></script>
    <script src="<?= base_url('vendor/AdminLTE/') ?>plugins/chart.js/Chart.min.js"></script>
    <script src="<?= base_url('vendor/AdminLTE/') ?>dist/js/demo.js"></script>
    <script src="<?= base_url('vendor/AdminLTE/') ?>dist/js/pages/dashboard3.js"></script>

    <!--JS-->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table_barang').DataTable();
        });

        var save_method;
        var tb_barang;

        function edit_barang(id) {
            save_method = 'update';
            $('#form')[0].reset();

            //load data dari ajax
            $.ajax({
                url: "<?php echo site_url('admin/databarang/ajax_edit/'); ?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('[name="kode_produk"]').val(data.kode_produk);
                    $('[name="nama_produk"]').val(data.nama_produk);
                    $('[name="image"]').val(data.image);
                    $('[name="harga_beli"]').val(data.harga_beli);
                    $('[name="harga_jual"]').val(data.harga_jual);
                    $('[name="stok"]').val(data.stok);

                    $('#myModal').modal('show');
                    $('#myModal_title').text('Edit Barang');

                },
                error: function(jsJHR, textStatus, errorThrown) {
                    alert('Error Get Data From Ajax');
                }
            })

        }

        function delete_barang(id) {
            if (confirm('Are you sure delete this data?')) {
                //ajax delete data dari database

                $.ajax({
                    url: "<?php echo base_url('databarang/delete_barang') ?>/" + id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data) {
                        location.reload();
                    },
                    error: function(jsJHR, textStatus, errorThrown) {
                        alert('Error Delete Data From Ajax');
                    }
                })
            }


        }
    </script>
    </body>

    </html>