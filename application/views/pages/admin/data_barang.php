        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"><?= $title ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"><?= $title ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Produk</h5>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 button-add my-3">
                                            <button class="btn btn-primary btn-sm px-4" data-toggle="modal" data-target="#myModal">Add New</button>
                                        </div>
                                        <div class="col-md-12">
                                            <table class="table table-hover" id="table_barang">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Nama Barang</th>
                                                        <th scope="col">Images</th>
                                                        <th scope="col">Harga Jual</th>
                                                        <th scope="col">Harga Beli</th>
                                                        <th scope="col">Stock</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($barang as $b) {; ?>
                                                        <tr>
                                                            <td scope="row"><?php echo $b->kode_produk; ?></td>
                                                            <td><?php echo $b->nama_produk; ?></td>
                                                            <td>
                                                                <img src="<?= base_url('assets/frontend/images/') . $b->image ?>" alt="" style="width:75px;">
                                                            </td>
                                                            <td><?php echo $b->harga_jual; ?></td>
                                                            <td><?php echo $b->harga_beli; ?></td>
                                                            <td><?php echo $b->stok; ?></td>
                                                            <td>
                                                                <button class="btn btn-warning btn-sm" onclick="edit_barang(<?php echo $b->kode_produk; ?>)"><i class="glyphicon glyphicon-pencil">Edit</i></button>
                                                                <button class="btn btn-danger btn-sm" onclick="delete_barang(<?php echo $b->kode_produk; ?>)"><i class="glyphicon glyphicon-trash">Delete</i></button>
                                                            </td>
                                                        </tr>
                                                    <?php }; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.col -->
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- ./card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModal_title">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= form_open_multipart('admin/databarang/add_barang'); ?>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputNama">Nama Produk</label>
                                <input type="text" class="form-control" placeholder="..." id="inputNama" name="nama_produk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputJual">Harga Jual</label>
                            <input type="text" class="form-control" id="inputJual" placeholder="..." name="harga_jual">
                        </div>
                        <div class="form-group">
                            <label for="inputBeli">Harga Beli</label>
                            <input type="text" class="form-control" id="inputBeli" placeholder="..." name="harga_beli">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputStock">Stock</label>
                                <input type="text" class="form-control" placeholder="..." id="inputStock" name="stok">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputImages">Images</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                        </div>
                        <div class="form-group text-center mt-4">
                            <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2020 BnD .</strong>
            All rights reserved.
        </footer>
        </div>
        <!-- ./wrapper -->