<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<main id="main">
    <!-- callout section -->
    <section class="call-to-action no-padding text-light bluesapta">
        <div class="container">
            <div class="action-style-box">
                <div class="row">
                    <div class="col-md-8 text-center text-md-left">
                        <div class="call-to-action-text">
                            <h3 class="action-title">Kami menciptakan lapangan pekerjaan</h3>
                        </div>
                    </div><!-- Col end -->
                    <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                        <div class="call-to-action-btn">
                            <a class="btn btn-danger" href="contact.html">LIHAT INFO</a>
                        </div>
                    </div><!-- col end -->
                </div><!-- row end -->
            </div><!-- Action style box -->
        </div><!-- Container end -->
    </section><!-- Action end -->

    <!-- ======= Fact Section ======= -->
    <section id="cta" class="cta">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3>Kami merekrut <span class="counterUp" data-count="890">>0</span><span> Karyawan</span> tahun ini</h3>
                    <p> Penjelasan tentang pencapaian tahun ini.</p>
                </div>
                <!-- <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Request a quote</a>
                </div> -->
            </div>

        </div>

        <div class="container mt-4">
            <div class="facts-wrapper">
                <div class="row justify-content-center">
                    <div class="col-md-3 col-sm-6 ts-facts">
                        <div class="ts-facts-img">
                            <img loading="lazy" src="<?= base_url() ?>/img/icon-image/SMA.png" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="150">0</span></h2>
                            <h3 class="ts-facts-title">SMA PRIA</h3>
                        </div>
                    </div><!-- Col end -->

                    <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                        <div class="ts-facts-img">
                            <img loading="lazy" src="<?= base_url() ?>/img/icon-image/SMA 2.png" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="160">0</span></h2>
                            <h3 class="ts-facts-title">SMA WANITA</h3>
                        </div>
                    </div><!-- Col end -->

                    <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                        <div class="ts-facts-img">
                            <img loading="lazy" src="<?= base_url() ?>/img/icon-image/SARJANA.png" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="200">0</span></h2>
                            <h3 class="ts-facts-title">SARJANA PRIA</h3>
                        </div>
                    </div><!-- Col end -->

                    <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                        <div class="ts-facts-img">
                            <img loading="lazy" src="<?= base_url() ?>/img/icon-image/SARJANA 2.png" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="380">0</span></h2>
                            <h3 class="ts-facts-title">SARJANA WANITA</h3>
                        </div>
                    </div><!-- Col end -->


                </div> <!-- Facts end -->
            </div>
            <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </section><!-- End Cta Section -->

    <!-- ======= Bisnis Section ======= -->
    <section id="bisnis" class="services">
        <div class="container mb-0">
            <div class="row" data-aos="fade-up">
                <div class="col  d-flex justify-content-center">
                    <div class="section-title col-md-6" data-aos="fade-up">
                        <h2><strong>Bisnis</strong></h2>
                        <p><strong>Sapta Sinergi Sourcindo</strong> adalah perusahaan outsourcing yang berdiri dari tahun 2003, dengan client mayoritas perbankan, start up dan perusahaan swasta TBK Indonesia.
                            <br>
                            <a href="<?= base_url("/pages/about") ?>"> Selengkapnya</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-4 col-md-6  align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-briefcase"></i></div>
                        <h4><a href="">Outsourcing & Head Hunter</a></h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6  align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-group"></i></div>
                        <h4><a href="">Team Building & EO <br><br></a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-list-check"></i></div>
                        <h4><a href="">Training <br><br></a></h4>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Bisnis Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Dokumentasi</li>
                        <!-- <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li> -->
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="<?= base_url() ?>/img/portfolio/Sapta 1.jpeg" class="img-fluid" width="222" alt="">
                    <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>App</p>
                        <a href="<?= base_url() ?>/img/portfolio/Sapta 1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="<?= base_url() ?>/img/portfolio/Sapta 2.jpeg" class="img-fluid" height="222" alt="">
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="<?= base_url() ?>/img/portfolio/Sapta 2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="<?= base_url() ?>/img/portfolio/Sapta 3.jpeg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 2</h4>
                        <p>App</p>
                        <a href="<?= base_url() ?>/img/portfolio/Sapta 3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="<?= base_url() ?>/img/portfolio/Sapta 4.jpeg" class="img-fluid" width="222" alt="">
                    <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                        <a href="<?= base_url() ?>/img/portfolio/Sapta 4.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="<?= base_url() ?>/img/portfolio/Sapta 5.jpeg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <a href="<?= base_url() ?>/img/portfolio/Sapta 5.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="<?= base_url() ?>/img/portfolio/Sapta 6.jpeg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>App</p>
                        <a href="<?= base_url() ?>/img/portfolio/Sapta 6.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="<?= base_url() ?>/img/portfolio/Sapta 7.jpeg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 1</h4>
                        <p>Card</p>
                        <a href="<?= base_url() ?>/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="<?= base_url() ?>/img/portfolio/Sapta 8.jpeg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 3</h4>
                        <p>Card</p>
                        <a href="<?= base_url() ?>/img/portfolio/Sapta 8.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->


</main><!-- End #main -->

<?= $this->endSection(); ?>