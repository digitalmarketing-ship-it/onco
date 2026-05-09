<?php

$page_title = "Blog";   // breadcrumb title

require_once("header.php");

$data = get_banners_image_info();

if ($data) {
    // print_r($data);
    foreach ($data as $banner) {

        $img = 'image_website/banner9.png';
    }
}
?>

<!--Page Title-->
<section class="auto-container"> 
  <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span> › </span>
    <span class="current">Blog</span>
  </nav>
</section>
  <section class="hero" style="
    background-image: url('<?= $img ?>');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
">
        <div class="container-fluid">
            <div class="glass-card">
                <h2 class="text-dark"><strong>Blog</strong></h2>
                <p>Orchid Medical Centre, a state-of-the-art hospital located in the heart of Ranchi, Jharkhand, is committed to delivering exceptional medical care and treatment services. We take pride in our recognition for excellence and accreditation by NABH, NABL, and NABH for Nursing Excellence. Our premier facility provides high-quality medical care and treatment options.</p>
                <button class="btn btn-custom" >Learn More</button>
            </div>
            <div class="row justify-content-center align-items-center" style="margin-left:-50% !important;">
                <div class="col-lg-2 col-md-2">
                    <div class="inner-image">
                        <img decoding="async" src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/img1-1.jpg" alt="inner image">
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
                    <div class="inner-info">
                        <div class="box">
                            <span class="sub text-white">  Welcome To Orchid Medical Center. We are open <strong>24/7</strong> at your service.</span>
                            <p class="text-white">For online appointment or emergency service at anytime.</p>
                            <div class="phone-btn">
                                <div class="icon">
                                    <i class="ti ti-phone-call"></i>
                                </div>
                                                    
                                <span>CALL:  <a href="tel:01132534567">+91 9117100100</a></span>
                            </div>
                                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="gallery-section">
  <div class="container">

    <h2 class="gallery-title">Images</h2>

    <div class="row g-4">

      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=1200&auto=format&fit=crop" alt="">
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <img src="https://images.unsplash.com/photo-1579154204601-01588f351e67?q=80&w=1200&auto=format&fit=crop" alt="">
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <img src="https://images.unsplash.com/photo-1581594693702-fbdc51b2763b?q=80&w=1200&auto=format&fit=crop" alt="">
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <img src="https://images.unsplash.com/photo-1580281657527-47d7f2d8d7b3?q=80&w=1200&auto=format&fit=crop" alt="">
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?q=80&w=1200&auto=format&fit=crop" alt="">
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?q=80&w=1200&auto=format&fit=crop" alt="">
        </div>
      </div>

    </div>

  </div>


<!-- End Portfolio Section -->


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const portfolioBlocks = document.getElementById('portfolioBlocks');

        searchInput.addEventListener('input', function() {
            const searchTerm = searchInput.value.toLowerCase();
            const blocks = portfolioBlocks.getElementsByClassName('portfolio-block');

            Array.from(blocks).forEach(function(block) {
                const title = block.querySelector('h2').textContent.toLowerCase();
                if (title.includes(searchTerm)) {
                    block.style.display = 'block';
                } else {
                    block.style.display = 'none';
                }
            });
        });
    });
</script>

<?php
require_once("footer.php");
?>