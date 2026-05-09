<?php

$page_title = "Alliance";   // breadcrumb title

require_once("header.php");

$data = get_banners_image_info();

if ($data) {
    // print_r($data);
    foreach ($data as $banner) {

        // $img = 'https://www.orchidmedcentre.com/admin/banners_image/image/' . $banner['alliance_image'];
        $img = 'image_website/banner9.png';
    }
}
?>









<!--Page Title-->
<section class="auto-container"> 
  <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span> › </span>
    <span class="current">Alliance</span>
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
                <h2 class="text-dark"><strong>Alliance</strong></h2>
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








<style>
    .search-bar {
        display: flex;
        /* Use flexbox for responsive layout */
        align-items: center;
        /* Align items vertically */
        margin-bottom: 20px;
        /* Adjust margin as needed */
    }

    .search-bar input[type="text"] {
        flex: 1;
        /* Take remaining space */
        padding: 12px 20px;
        /* Adjust padding as needed */
        border: 2px solid #000000;
        /* Border color */
        border-radius: 50px;
        /* Rounded corners */
        font-size: 16px;
        /* Font size */
        transition: border-color 0.3s;
        /* Smooth transition for border color */
    }

    .search-bar input[type="text"]:focus {
        border-color: #000000;
        /* Change border color on focus */
    }

    .search-bar input[type="text"]::placeholder {
        color: #999;
        /* Placeholder color */
    }

    .search-bar button {
        background-color: #007bff;
        /* Button background color */
        color: #fff;
        /* Button text color */
        border: none;
        border-radius: 30px;
        /* Rounded corners */
        padding: 10px 20px;
        /* Adjust padding as needed */
        margin-left: 10px;
        /* Adjust margin as needed */
        cursor: pointer;
        transition: background-color 0.3s;
        /* Smooth transition for background color */
    }

    .search-bar button:hover {
        background-color: #0056b3;
        /* Darker background color on hover */
    }
</style>

<style>
    @media only screen and (max-width: 600px) {
        .portfolio-section {
            padding: 20px !important;

        }
    }
</style>



<!-- Portfolio Section -->
<section class="portfolio-section alternate">
    <div class="auto-container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <!-- Search Bar -->
                <div class="search-bar">
                    <input type="text" id="searchInput" placeholder="Search for alliance name...">

                </div>
            </div>
        </div>

        <!--MixitUp Galery-->
        <div class="row mid-spacing" id="portfolioBlocks">
            <!-- Portfolio Block -->
            <?php
            $data = get_alliance_info();
            if ($data) {
                foreach ($data as $alliance) {
                    $img = 'https://www.orchidmedcentre.com//admin/alliances/image/' . $alliance['image'];
                    $name = $alliance["name"];
            ?>
                    <div class="portfolio-block all mix detal-care dental col-lg-3 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="<?= $img ?>" alt="<?= $name ?>"></figure>
                            <div class="overlay">
                                <!-- <a href="" class="icon-box lightbox-image" data-fancybox="gallery"><span class="fa fa-expand"></span></a> -->
                                <div class="title-box">
                                    <h2 style="font-size: 20px;line-height: 1.2em;color: #ffffff;font-weight: 600;display: block;margin-bottom: 0px;"><?= $name ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>
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