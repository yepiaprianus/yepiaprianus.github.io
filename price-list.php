<?php include('./include/header.php'); ?>
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio custom-section" style="padding: 100px 0;">
    <div class="container" data-aos="fade-down">
        <div class="section-title">
            <h2 id="title-price" class="title-price">Price List</h2>
            <p>Kamu bisa menentukan sendiri olah data sesuai kebutuhanmu. Violla menyediakan olah data per uji maupun olah data paket.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <!-- <li data-filter="*" class="filter-active">HARGA SATUAN</li> -->
            <li data-filter=".filter-app" id="harga_satuan">HARGA SATUAN</li>
            <li data-filter=".filter-web" id="harga_paket">HARGA PAKET</li>
        </ul>

        <div class="row portfolio-container row-center" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-12 col-md-12  portfolio-item filter-app">
                <div class="portfolio-img">
                    <!-- <table>
                        <thead>
                            <tr>
                                <th>Satuan</th>
                                <th>Keterangan</th>
                                <th>Harga</th>
                                <th>Yang didapat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Validitas dan Reliabilitas</td>
                                <td>1 variabel</td>
                                <td>Rp. 50.000</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table> -->
                    <img src="assets/img/harga-satuan-web.svg" class="img-fluid img-web" alt="img-1">
                    <img src="assets/img/harga-satuan-mob.svg" class="img-fluid img-mobile" alt="img-1">
                </div>
            </div>

            <div class="col-lg-12 col-md-12 portfolio-item filter-web align-items-center" id="hide-web">
                <div class="portfolio-img">
                    <img src="assets/img/harga-paket-web.svg" class="img-fluid img-web" alt="img-2">
                    <img src="assets/img/harga-paket-mob.svg" class="img-fluid img-mobile" alt="img-2">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Portfolio Section -->
<script type="text/javascript">
    $(document).ready(function() {
        $("#price_list").addClass("active");
        $("#li-price").addClass("li-content");
        $(".portfolio-item").removeAttr('style');
        $("#harga_satuan").trigger('click');
        $("#hide-web").css('display', 'none');
        $("#harga_satuan").addClass('filter-active');
    });
</script>
<?php include('./include/footer.php'); ?>