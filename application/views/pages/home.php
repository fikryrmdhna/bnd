    <!-- Navbar -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <a href="" class="navbar-brand">
                <img src="<?= base_url('assets/frontend/') ?>images/nomads_logo.png" alt="logo nomads">
            </a>

            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2"><a href="#" class="nav-link active">Home</a></li>
                    <li class="nav-item mx-md-2"><a href="#" class="nav-link">About Us</a></li>
                    <li class="nav-item mx-md-2"><a href="#" class="nav-link">Popular</a></li>
                    <li class="nav-item mx-md-2"><a href="#" class="nav-link">Testimonial</a></li>
                </ul>

                <!-- Button Mobile -->
                <form class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0">
                        Masuk
                    </button>
                </form>
                <!-- Akhir Button Mobile -->

                <!-- Button Desktop -->
                <form class="form-inline d-none d-md-block my-2 my-lg-0">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                        Masuk
                    </button>
                </form>
                <!-- Akhir Button Desktop -->
            </div>

        </nav>
    </div>
    <!-- Akhir Navbar -->

    <!-- Header -->
    <header class="text-center">
        <h1>Premium Rattan</br> Is In Your Hand</h1>
        <p class="mt-3">We will give you</br>the amazing rattan product</p>
        <a href="#" class="btn btn-get-started px-4 mt-4">Get Started</a>
    </header>
    <!-- Akhir Header -->

    <!-- Main -->
    <main>

        <!-- Statistik -->
        <div class="container">
            <section class="section-stats row justify-content-center" id="section-stats">
                <div class="col-12 col-md-12 stats-details">
                    <div class="alert alert-info" role="alert">
                        Jawaban untuk soal test ada di Halaman Admin. <a href="#" class="alert-link">Login</a> dengan
                        email <strong>fikryramadhana8@gmail.com</strong> dan password <strong>admin123</strong>
                    </div>
                </div>
            </section>
        </div>
        <!-- Akhir Statistik -->

        <!-- Section Popular -->
        <section class="section-popular" id="popular">
            <div class="container">

                <!-- Popular Heading -->
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Popular Chairs</h2>
                        <p>Something that you never see<br> before in this world</p>
                    </div>
                </div>
                <!-- Akhir Popular Heading -->


            </div>
        </section>

        <!-- Section Popular Content -->
        <section class="popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-product row justify-content-center">

                    <?php foreach ($barang as $b) : ?>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-product text-center d-flex flex-column" style="background-image: url('<?= base_url('assets/frontend/') . $b->image ?>');">
                                <div class="product-country">DINING CHAIR</div>
                                <div class="product-location"><?= $b->nama_produk ?></div>
                                <div class="product-button mt-auto">
                                    <button class="btn btn-product-details px-4 tombol_detail" data-toggle="modal" data-target="#modalDetails" data-id="<?= $b->kode_produk ?>">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <div class="see-more col-lg-12 text-center">
                        <a href="<?= base_url('details') ?>" class="text-center mt-4">See More Product</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Section Popular Content -->

        <!-- Section About -->
        <section class="section-about text-center" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>About Us</h2>
                        <p>
                            BnD is an Indonesian furniture company and brand, which is specialised in
                            designing and producing superb quality of handmade-handwoven lifestyle furniture. The
                            company is established in 2015 unifying two local furniture factories, PT. Balagi Rattan and
                            PT. Dilmoni Citra Mebel Indonesia, which have shared 40 years of experience in designing,
                            producing and supplying the world with outstanding handwoven furniture quality.
                        </p>
                        <p>
                            In each of our design we put forward core values that exhibit the aesthetic significance of
                            the design, the high ergonomic level we try to achieve, the workmanship excellence, the
                            finest quality and variety of materials we used, and the customer-oriented professional
                            service. We believe by exhibiting these core design values we are able to maximally deliver
                            our products and services to our customers.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Section About -->

        <!-- Akhir Section Popular -->

        <!-- Section Testimonial -->
        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>Moments were giving them<br>the best experience</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="<?= base_url('assets/frontend/') ?>images/fikry_testimoni@2x.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Fikry Ramadhana</h3>
                                <p class="testimonial">"Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Perferendis iure eum velit cupiditate."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="<?= base_url('assets/frontend/') ?>images/ana_testimoni@2x.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Ana Ivanovic</h3>
                                <p class="testimonial">"Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Perferendis iure eum velit cupiditate."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="<?= base_url('assets/frontend/') ?>images/wilson_testimoni@2x.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Wilson Fisk</h3>
                                <p class="testimonial">"Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Perferendis iure eum velit cupiditate."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Section Testimonial -->
    </main>
    <!-- Akhir Main -->

    <!-- Modal -->
    <?php foreach ($barang as $b) : ?>
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
                                    <img src="<?= base_url('assets/frontend/') . $b->image ?>" alt="product" style="width:150px;">
                                </div>
                                <div class="col-md-8 offset-1">
                                    <div class="row justify-content-center">
                                        <div class="col-7 main-information">Nama Product</div>
                                        <div class="col-5" style="color: #b1b1b1 !important;">: <span class="nama_produk"></span>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-7 main-information">Stock</div>
                                        <div class="col-5" style="color: #b1b1b1 !important;">: <span class="stok"></span></div>
                                    </div>
                                    <div class="row justify-content-center mt-2">
                                        <div class="col-10 badge badge-lg badge-success px-5 py-2">Rp <span class="harga_jual"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>