 <?php $pages = [
        "#" => "Beranda",
        "about" => "Tentang Kami",
        "program" => "Program Kami",
        "news" => "Berita",
        "career" => "Karir",
        "gallery" => "Galeri",
        "contact" => "Kontak"
    ] ?>

 <!-- ======= Header ======= -->

 <section id="topbar" class="d-flex align-items-center">
     <div class="container d-flex justify-content-center justify-content-md-between">
         <div class="contact-info d-flex align-items-center">
             <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">rullykustiady@saptasinergi.co.id</a></i>
             <i class="bi bi-phone d-flex align-items-center ms-4"><span>(022) 421-0343</span></i>
         </div>
         <div class="social-links d-none d-md-flex align-items-center">
             <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
             <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
             <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
             <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
         </div>
     </div>
 </section>

 <header id="header" class="d-flex align-items-center">
     <div class="container d-flex justify-content-between">

         <div class="logo">
             <h1 class="text-light"><a href="index.html">BRANDING LOGO</a></h1>
             <!-- Uncomment below if you prefer to use an image logo -->
             <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
         </div>

         <nav id="navbar" class="navbar">
             <ul>
                 <?php foreach ($pages as $pagesId => $pagesTitle) : ?>
                     <li><a <?= (($page == $pagesTitle) ? 'class="active"' : "") ?> href="<?= base_url('/pages/' . $pagesId) ?>"><?= $pagesTitle; ?></a></li>
                 <?php endforeach; ?>
             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->

     </div>
 </header><!-- End Header -->