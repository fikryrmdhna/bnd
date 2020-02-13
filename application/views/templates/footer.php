<!-- Footer -->
<footer class="section-footer mt-5 mb-4 border-top">
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <div class="col-6 col-lg-3">
                        <h5>FEATURES</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Reviews</a></li>
                            <li><a href="#">Community</a></li>
                            <li><a href="#">Social Media Kit</a></li>
                            <li><a href="#">Affiliate</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-3">
                        <h5>ACCOUNT</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Refund</a></li>
                            <li><a href="#">Security</a></li>
                            <li><a href="#">Rewards</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-3">
                        <h5>COMPANY</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Media</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-3">
                        <h5>GET CONNECTED</h5>
                        <ul class="list-unstyled">
                            <li>Jakarta Selatan</li>
                            <li>Indonesia</li>
                            <li>0812-2222-2020</li>
                            <li>support@nomads.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid">
        <div class="row border-top justify-content-center align-items-center pt-4">
            <div class="col-auto text-center text-gray-500 font-weight-light">
                2019 Copyright BnD . All Right Reserved . Made in Jakarta
            </div>
        </div>
    </div>
</footer>
<!-- Akhir Footer -->
<script src="<?= base_url('assets/frontend/') ?>libraries/jquery/jquery-3.4.1.min.js"></script>
<script src="<?= base_url('assets/frontend/') ?>libraries/bootstrap/js/bootstrap.js"></script>
<script src="libraries/xzoom/xzoom.min.js"></script>
<script src="libraries/combined/js/gijgo.min.js"></script>
<script>
    $(document).ready(function() {

        $('.tombol_detail').on('click', function() {
            let id = $('.tombol_detail').data('id');


            $.ajax({
                url: "<?php echo site_url('home/getDetail/'); ?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('.nama_produk').html(data.nama_produk);
                    $('.stok').html(data.stok);
                    $('.harga_jual').html(data.harga_jual);
                },
                error: function(jsJHR, textStatus, errorThrown) {
                    alert('Error Get Data From Ajax');
                }
            });
        });

    });
</script>
</body>

</html>