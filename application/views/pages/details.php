    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Product</li>
                                <li class="breadcrumb-item active">More Product</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 pl-lg-0">
                        <div class="card card-details">
                            <h1>Our Product</h1>
                            <p>All product is a premium</p>
                            <div class="more-product">
                                <div class="container">
                                    <div class="row justify-content-start">
                                        <?php foreach ($barang as $b) : ?>
                                            <div class="col-lg-2 col-md-4">
                                                <div class="card-details-product text-center d-flex flex-column" style="background-image: url('<?= base_url('assets/frontend') ?>/images/chair_index_1.png');">
                                                    <div class="product-tag">LIVING CHAIR</div>
                                                    <div class="name-product"><?= $b->nama_produk ?></div>
                                                    <div class="product-button mt-auto">
                                                        <a href="details.html" class="btn btn-get-started px-2 py-0" data-toggle="modal" data-target="#modalDetails">
                                                            Details
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="modalDetails" tabindex="-1" role="dialog" aria-labelledby="modalDetailsTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDetailsTitle">Details Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body product-details">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <img src="/images/chair_index_1.png" alt="product" style="width:150px;">
                            </div>
                            <div class="col-md-8 offset-1">
                                <div class="row justify-content-center">
                                    <div class="col-7 main-information">Nama Product</div>
                                    <div class="col-5" style="color: #b1b1b1 !important;">: Petra</div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-7 main-information">Stock</div>
                                    <div class="col-5" style="color: #b1b1b1 !important;">: 10</div>
                                </div>
                                <div class="row justify-content-center mt-2">
                                    <div class="col-10 badge badge-lg badge-success px-5 py-2">Rp 2.000.000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>