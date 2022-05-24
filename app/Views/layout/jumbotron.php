<?php

use CodeIgniter\CLI\Console;

$jumbo = [
    [
        'for' => 'Beranda',
        'title' => 'Selamat Datang di <span>Sapta Sinergi Sourcindo</span>',
        'desc' => "Mari kita gapai masa depan bersama! Landasan kami, ide Anda, bersama-sama kita bergerak maju dan tumbuh untuk menciptakan masa depan bersama.",

    ],
    [
        'for' => 'Tentang Kami',
        'title' => 'Sekilas tentang kami!',
        'desc' => "Kami menaruh perhatian pada upaya pengembangan diri, motivasi, dan produktivitas Insan Astra dengan berbagai kegiatan dan komunitas.",
    ],
    [
        'for' => 'Program Kami',
        'title' => 'Wujudkan Mimpimu Bersama Kami, Sekarang!',
        'desc' => "Ikuti kegiatan dan program yang diselenggarakan oleh Sapta! Sampaikan pertanyaanmu, kembangkan dirimu, dan siapkan kariermu bersama kami.",
    ],
];


?>

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner" role="listbox">

            <?php for ($i = 0; $i < count($jumbo); $i++) : ?>
                <!-- Slide 1  -->
                <div class="carousel-item <?= (($page == $jumbo[$i]['for']) ? 'active' : "") ?>" style="background-image: url(<?= base_url("/img/slide/slide-" . ($i + 1) . ".jpg") ?>);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2><?= $jumbo[$i]['title']; ?></h2>
                            <p><?= $jumbo[$i]['desc']; ?></p>
                            <!-- <div class="text-center"><a href="<?= base_url('pages/about') ?>" class="btn-get-started">Baca selengkapnya..</a></div> -->
                        </div>
                    </div>
                </div>
            <?php endfor; ?>


        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
</section><!-- End Hero -->