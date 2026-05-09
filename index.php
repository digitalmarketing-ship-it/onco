<?php require_once 'header.php'; ?>
<section class="banner-section-one">
    <div class="banner-carousel owl-carousel owl-theme default-arrows dark">
        <div class="slide-item">
            <picture>
                <!-- Mobile image -->
                <source media="(max-width: 767px)" srcset="image_website/banner8.png ">
                <!-- Desktop image -->
                <img src="image_website/banner8.png"
                    alt="Banner Image"                           
                    class="banner-img img-fluid">
            </picture>
        </div>
        <div class="slide-item">
            <picture>
                <!-- Mobile image -->
                <source media="(max-width: 767px)" srcset="image_website/banner7.png ">
                <!-- Desktop image -->
                <img src="image_website/banner7.png"
                    alt="Banner Image"                           
                    class="banner-img img-fluid">
            </picture>
        </div>
    </div>
</section>
<!-- End Bnner Section One mobile-view -->
<style>
    .feature_title {
        display: block;
        font-size: 21px;
        font-weight: 600;
        margin-bottom: 5px;
        color: #00307E;
        text-align: center;
    }

    .feature_title:hover {
        color: #FFF;
    }

    @media only screen and (max-width: 600px) {

        #five_block>* {
            flex-shrink: 0;
            width: 50%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x) * .5);
            padding-left: calc(var(--bs-gutter-x) * .5);
            margin-top: var(--bs-gutter-y);

        }

        .top-features {
            padding: 20px;
        }
    }

    .blck {
        text-decoration: none;
    }
</style>
<style>
    @media only screen and (max-width: 600px) {
        .about-section {
            padding: 20px;
        }

        #hide-mobile {
            display: none;
        }
    }
</style>
<!-- About Section -->
<section class="intro-section mt-5">
    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <h6>We’re Experienced and Trusted Oncology Care.</h6>
                        <h4 style="display: block;font-size: 18px;line-height: 1.2em;font-weight: 700;color: var(--purple-100);;">ABOUT ORCHID SAMAGATI CANCER CENTRE</h4>
                        <span class="sub-title" style="font-size:14px;"><strong>Orchid Samagati Cancer Centre </strong> is dedicated to providing experienced and trusted oncology care with a patient-first approach. Our team of skilled cancer specialists combines advanced medical technology with compassionate support to deliver comprehensive diagnosis, treatment, and follow-up care. We understand that every cancer journey is unique, which is why we focus on personalised treatment plans tailored to each patient’s condition and needs. From early detection and accurate diagnosis to advanced therapies and supportive care, we strive to ensure the best possible outcomes.</span>
                        <span class="divider"></span>
                        <style>
                            .aboutus-icon-box .icon {
                                border: 2px solid #3a1566;
                                border-radius: 50px;
                                float: left;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                min-width: 64px;
                                min-height: 64px;
                                transition: 0.5s;
                                background: #fff;
                            }
                            .aboutus-icon-box-icon.icon:hover {
                                border: 2px solid #006881;
                                background: #006881;
                                box-shadow: 0 0.5rem 1.5rem #006881;
                            }
                            .aboutus-icon-box .icon i {
                                font-size: 32px;
                                color: #3a1566;
                            }
                            .aboutus-icon-box-icon:hover{
                            color: white;
                            }

                            .aboutus-icon-title
                            {
                                font-weight: 700;
                                /* margin-bottom: 10px; */
                            }
                            .aboutus-icon-description {
                                line-height: 20px;
                                font-size: 14px;
                                text-align: left;
                                margin-bottom: 0;
                            }
                        </style>
                        <div class=" mt-3 icon-boxes">
							<div class="aboutus-icon-box d-flex align-items-start">
							    <div class="aboutus-icon-box-icon icon"><i class="fa-solid fa-users aboutus-icon-box-i"></i></div>
								<div class="ml-4">
									<h4 class="aboutus-icon-title">25+ Medical Staff</h4>
									<p class="aboutus-icon-description">Professional staff are trained individuals with specialized knowledge who perform skilled roles in an organization. They maintain professionalism, follow ethical standards, ensure quality work, collaborate effectively, and contribute to achieving organizational goals.</p>
								</div>
							</div>
							<div class="aboutus-icon-box d-flex align-items-start mt-5">
								<div class="aboutus-icon-box-icon icon"><i class="fa-solid fa-star aboutus-icon-box-i"></i></div>
								<div class="ml-4">
									<h4 class="aboutus-icon-title">4.9 Rating</h4>
									<p class="aboutus-icon-description">Modern equipment refers to advanced tools and technology designed to improve efficiency, accuracy, and productivity. They support innovation, enhance performance, reduce effort, and ensure better outcomes across industries and professional environments.</p>
								</div>
							</div>
						</div>
                    </div>   
                </div>
            </div>
            <!-- Images Column -->
            <div class="images-column col-lg-6 col-md-12 col-sm-12 order-2" style="margin-top:-20px;">
                <div class="inner-column" style="padding-left:50px;">
                    <figure class="image-1"><img src="image_website/envelope.png" alt="Video Image" loading="lazy" style="border-radius:20px; height: 100% !important;width: 100% !important;"></figure>
                </div>
            </div>
        </div>
    </div>        
</section>
<!-- End About Section -->
<style>
    .coe_text {
        max-height: 80px;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
    }

    .text-expanded {
        max-height: none;
    }

    .coe-read-more-btn {
        cursor: pointer;
        color: #007bff;
        display: inline-block;
        margin-top: 10px;
    }

    @media only screen and (max-width: 600px) {
        .services-section {
            padding: 20px;
        }
    }
</style>
<!-- COE Section -->
<section class="about-section" id="coe">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Oncology Services</h2>
            <span class="sub-title">Providing Oncology Care Services For The Our Community.</span>
            <span class="divider"></span>
        </div>
        <div class="row">
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span><a href=""><img src="https://samagaticancercentre.com/wp-content/uploads/2026/02/Neuro-Oncology.jpg" alt="Cardiac Sciences" loading="lazy" style="width:80%;border-radius:10px;"></a></span>
                    <h3 class="mt-3" style="font-weight: 600;font-weight: 600;line-height: 1.2em; margin-bottom: 10px;font-size: 24px;"><a href="/department/coe_dept/cardiac-sciences" id="1" style="color: #00307E;">Oncology OPD/IPD</a></h3>
                </div>
            </div>						
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span><a href=""><img src="https://samagaticancercentre.com/wp-content/uploads/2026/02/Chemotherapy.jpg" alt="Neurosciences" loading="lazy" style="width:80%;border-radius:10px;"></a></span>
                    <h3 class="mt-3" style="font-weight: 600;font-weight: 600;line-height: 1.2em; margin-bottom: 10px;font-size: 24px;"><a href="/department/coe_dept/neurosciences" id="2" class="btn-title" style="color: #00307E;">Chemotherapy</a></h3>
                </div>
            </div>						
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span><a href=""><img src="https://samagaticancercentre.com/wp-content/uploads/2026/02/Immunotherapy.jpg" alt="Kidney Diseases" loading="lazy" style="width:80%;border-radius:10px;"></a></span>
                    <h3 class="mt-3" style="font-weight: 600;font-weight: 600;line-height: 1.2em; margin-bottom: 10px;font-size: 24px;"><a href="/department/coe_dept/kidney-diseases" id="4" class="btn-title" style="color: #00307E;">Immunotherapy</a></h3>
                </div>
            </div>					
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span><a href=""><img src="https://samagaticancercentre.com/wp-content/uploads/2026/02/Target-Therapy.jpg" alt="Gastroenterology & G.I. Surgery" loading="lazy" style="width:80%;border-radius:10px;"></a></span>
                    <h3 class="mt-3" style="font-weight: 600;font-weight: 600;line-height: 1.2em; margin-bottom: 10px;font-size: 24px;"><a href="/department/coe_dept/gastroenterology-gi-surgery" id="5" style="color: #00307E;">Target Therapy</a></h3>
                </div>
            </div>	
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span><a href=""><img src="https://samagaticancercentre.com/wp-content/uploads/2026/04/Biopsy-IHCNGS.jpg" alt="Cardiac Sciences" loading="lazy" style="width:80%;border-radius:10px;"></a></span>
                    <h3 class="mt-3" style="font-weight: 600;font-weight: 600;line-height: 1.2em; margin-bottom: 10px;font-size: 24px;"><a href="/department/coe_dept/cardiac-sciences" id="1" style="color: #00307E;">Biopsy IHC/NGC</a></h3>
                </div>
            </div>						
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span><a href=""><img src="https://samagaticancercentre.com/wp-content/uploads/2026/04/Cancer-Screening.jpg" alt="Neurosciences" loading="lazy" style="width:80%;border-radius:10px;"></a></span>
                    <h3 class="mt-3" style="font-weight: 600;font-weight: 600;line-height: 1.2em; margin-bottom: 10px;font-size: 24px;"><a href="/department/coe_dept/neurosciences" id="2" class="btn-title" style="color: #00307E;">Cancer Screening</a></h3>
                </div>
            </div>
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span><a href=""><img src="https://samagaticancercentre.com/wp-content/uploads/2026/04/psycho-oncology.jpg" alt="Cardiac Sciences" loading="lazy" style="width:80%;border-radius:10px;"></a></span>
                    <h3 class="mt-3" style="font-weight: 600;font-weight: 600;line-height: 1.2em; margin-bottom: 10px;font-size: 24px;"><a href="/department/coe_dept/cardiac-sciences" id="1" style="color: #00307E;">Physoconcology</a></h3>
                </div>
            </div>						
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span><a href=""><img src="https://samagaticancercentre.com/wp-content/uploads/2026/04/Molecular-Tumor.jpg" alt="Neurosciences" loading="lazy" style="width:80%;border-radius:10px;"></a></span>
                    <h3 class="mt-3" style="font-weight: 600;font-weight: 600;line-height: 1.2em; margin-bottom: 10px;font-size: 24px;"><a href="/department/coe_dept/neurosciences" id="2" class="btn-title" style="color: #00307E;">Molecular Tumor Board</a></h3>
                </div>
            </div>	
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span><a href=""><img src="https://samagaticancercentre.com/wp-content/uploads/2026/02/Preventive-Oncology.jpg" alt="Neurosciences" loading="lazy" style="width:80%;border-radius:10px;"></a></span>
                    <h3 class="mt-3" style="font-weight: 600;font-weight: 600;line-height: 1.2em; margin-bottom: 10px;font-size: 24px;"><a href="/department/coe_dept/neurosciences" id="2" class="btn-title" style="color: #00307E;">Preventive Oncology</a></h3>
                </div>
            </div>                     
        </div>
    </div>
</section>
<!-- COE Section -->
<section class="services-section" id="coe">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>About Oncology</h2>
            <span class="sub-title">he specialized departments at Orchid Medical Centre deliver cutting-edge care by combining unmatched expertise with cutting-edge technology in a broad scope of clinical categories.</span>
            <span class="divider"></span>
        </div>
        <div class="row">
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span><a href=""><img src="https://samagaticancercentre.com/wp-content/uploads/2026/02/breast-cancer.webp" alt="Cardiac Sciences" loading="lazy" style="width:80%;border-radius:10px;"></a></span>
                    <h3 class="mt-3" style="font-weight: 600;font-weight: 600;line-height: 1.2em; margin-bottom: 10px;font-size: 24px;"><a href="/department/coe_dept/cardiac-sciences" id="1" style="color: #00307E;">Breast Cancer</a></h3>
                </div>
            </div>						
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span><a href=""><img src="https://samagaticancercentre.com/wp-content/uploads/2026/02/gastro-intestinal-cancer.webp" alt="Neurosciences" loading="lazy" style="width:80%;border-radius:10px;"></a></span>
                    <h3 class="mt-3" style="font-weight: 600;font-weight: 600;line-height: 1.2em; margin-bottom: 10px;font-size: 24px;"><a href="/department/coe_dept/neurosciences" id="2" class="btn-title" style="color: #00307E;">Gastro Intestinal Cancer</a></h3>
                </div>
            </div>						
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span><a href=""><img src="https://samagaticancercentre.com/wp-content/uploads/2026/02/gynecological-cancer.webp" alt="Kidney Diseases" loading="lazy" style="width:80%;border-radius:10px;"></a></span>
                    <h3 class="mt-3" style="font-weight: 600;font-weight: 600;line-height: 1.2em; margin-bottom: 10px;font-size: 24px;"><a href="/department/coe_dept/kidney-diseases" id="4" class="btn-title" style="color: #00307E;">Gynecological cancer</a></h3>   
                </div>
            </div>					
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span><a href=""><img src="https://samagaticancercentre.com/wp-content/uploads/2026/02/head-and-neck-cancer.webp" alt="Gastroenterology & G.I. Surgery" loading="lazy" style="width:80%;border-radius:10px;"></a></span>
                    <h3 class="mt-3" style="font-weight: 600;font-weight: 600;line-height: 1.2em; margin-bottom: 10px;font-size: 24px;"><a href="/department/coe_dept/gastroenterology-gi-surgery" id="5" style="color: #00307E;">Head and Neck Cancer</a></h3>
                </div>
            </div>	
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span><a href=""><img src="https://samagaticancercentre.com/wp-content/uploads/2026/02/lung-cancer.webp" alt="Cardiac Sciences" loading="lazy" style="width:80%;border-radius:10px;"></a></span>
                    <h3 class="mt-3" style="font-weight: 600;font-weight: 600;line-height: 1.2em; margin-bottom: 10px;font-size: 24px;"><a href="/department/coe_dept/cardiac-sciences" id="1" style="color: #00307E;">Lung Cancer</a></h3>
                </div>
            </div>						
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span><a href=""><img src="https://samagaticancercentre.com/wp-content/uploads/2026/02/pediatric-cancer.webp" alt="Neurosciences" loading="lazy" style="width:80%;border-radius:10px;"></a></span>
                    <h3 class="mt-3" style="font-weight: 600;font-weight: 600;line-height: 1.2em; margin-bottom: 10px;font-size: 24px;"><a href="/department/coe_dept/neurosciences" id="2" class="btn-title" style="color: #00307E;">Pediatric Cancer</a></h3>
                </div>
            </div>						
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span><a href=""><img src="https://samagaticancercentre.com/wp-content/uploads/2026/02/preventive-oncology.webp" alt="Cardiac Sciences" loading="lazy" style="width:80%;border-radius:10px;"></a></span>
                    <h3 class="mt-3" style="font-weight: 600;font-weight: 600;line-height: 1.2em; margin-bottom: 10px;font-size: 24px;"><a href="/department/coe_dept/cardiac-sciences" id="1" style="color: #00307E;">Preventive Oncology</a></h3>
                </div>
            </div>						
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span><a href=""><img src="https://samagaticancercentre.com/wp-content/uploads/2026/02/target-therapy.webp" alt="Neurosciences" loading="lazy" style="width:80%;border-radius:10px;"></a></span>
                    <h3 class="mt-3" style="font-weight: 600;font-weight: 600;line-height: 1.2em; margin-bottom: 10px;font-size: 24px;"><a href="/department/coe_dept/neurosciences" id="2" class="btn-title" style="color: #00307E;">Target Therapy</a></h3>
                </div>
            </div>	                     
        </div>
    </div>    
</section>
<script>
    function coetoggleReadMore(btn) {
        var innerBox = btn.closest('.inner-box');
        var textDiv = innerBox.querySelector('.coe_text');

        if (textDiv) {
            textDiv.classList.toggle('text-expanded');
            btn.innerText = textDiv.classList.contains('text-expanded') ? 'Read less' : 'Read more';
        }
    }
</script>
<style>
    .service-block h3 a:hover {
        color: #13bfb3 !important;
    }

    .spcl_text {
        max-height: 80px;
        /* Adjust the max height according to your needs */
        overflow: hidden;
        transition: max-height 0.3s ease-out;
    }

    .text-expanded {
        max-height: none;
    }

    .spcl-read-more-btn {
        cursor: pointer;
        color: #007bff;
        display: inline-block;
        margin-top: 10px;
    }
</style>
<!-- Specialities Section  -->
<script>
    function toggleReadMore(btn) {
        var innerBox = btn.closest('.inner-box');
        var textDiv = innerBox.querySelector('.spcl_text');
        if (textDiv) {
            textDiv.classList.toggle('text-expanded');
            btn.innerText = textDiv.classList.contains('text-expanded') ? 'Read less' : 'Read more';
        }
    }
</script>
<!-- End Specialities Section  -->
<style>
    .service-block-five .lower-content h3 a {
        color: #00307E;
    }

    .service-block-five .lower-content h3 a:hover {
        color: #13bfb3 !important;
    }

    .num {
        color: #072f66;
    }

    .num:hover {
        color: #072f66;
    }
</style>

<!-- Doctor Team Section -->
<style>
    @media only screen and (max-width: 600px) {
        .team-section-two {
            padding: 20px;
        }
    }

    /* Custom styles for navigation buttons */
    .owl-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 100%;
    }

    .owl-prev,
    .owl-next {
        font-size: 24px;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: transparent;
        border: none;
        cursor: pointer;
        z-index: 1;
    }
    /* Custom styles for image boxes */
    .owl-carousel .item {
        width: 175px;
        /* Set a fixed width */
        height: 350px;
        /* Set a fixed height */
        margin-bottom: 12px !important;
    }
    .owl-carousel .item .inner-box {
        width: 100%;
        height: 360px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 5px;
        /* Add padding for better spacing */
        background-color: #f9f9f9;
        /* Add background color for better visibility */
    }
    .owl-carousel .item img {
        max-width: 100%;
        max-height: 200px;
        /* Limit image height to half of the container height */
        width: auto;
        height: 360px;
        display: block;
        margin: auto;
    }
    .owl-carousel .item .info-box {
        text-align: center;
        font-size: small;
    }
    .owl-carousel .item .name,
    .owl-carousel .item .designation {
        margin: 0;
        overflow: hidden;
        /* Hide overflow to prevent text from extending beyond the container */
        white-space: normal;
        /* Allow text to wrap */
    }
    .owl-carousel .item .name-new,
    .owl-carousel .item .designation-new {
        margin: 0;
        overflow: hidden;
        /* Hide overflow to prevent text from extending beyond the container */
        white-space: normal;
        /* Allow text to wrap */
    }
    .owl-prev {
        margin: -6px;
    }

    .owl-next {
        right: 2px !important;
        margin: -6px;
    }

    /* Custom styles for images */
    .owl-carousel .item {
        margin: 0 1px;
        /* Add margin between images */
    }

    .owl-carousel .item img {
        width: auto;
        display: block;
    }

    @media (max-width: 768px) {
        .col-sm-7 {
            flex: 0 0 50%;
            /* Ensure only 2 columns are shown on mobile view */
            right: auto;
            /* Remove right positioning */
            width: 155px !important;
            left: -15px !important;
            margin: 5px !important;
        }

        .col-sm-7 img {
            width: calc(50% - 20px);
            /* Set width to fit two images in one row with margins */
            height: auto;
            /* Maintain aspect ratio */
            display: inline-block;
            /* Ensure images are displayed in a row */
            margin: 0 5px;
            /* Add some space between images */
            border-radius: 5px;
            /* Add border-radius for a better look */
            right: 32px
        }
        /* .owl-carousel {
        display: none; Hide carousel container
        } */
    }
    /* For small phone screens */
    @media (max-width: 767px) {
        .owl-carousel .item .inner-box {
            width: 264px !important;
            /* Make images responsive, filling their container */
            height: 357px !important;
            /* Maintain aspect ratio */
            object-fit: cover;
            /* Ensure images cover the entire container */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 5px;
        }

        .team-block-two .image-box .image img {
            display: block;
            width: 200px !important;
            height: 200px !important;
            transition: all 500ms ease;
            object-fit: cover;
        }

        .owl-nav {
            margin-top: 10px;
            /* Adjust margin for better spacing */
        }
    }

        .team-block-two .image-box .image img {
            display: block;
            width: 168px;
            height: 200px;
            transition: all 500ms ease;
            object-fit: cover;
        }
    </style>



    <section class="team-section-two alternate alternate2">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Team Member</h2>
                <span class="sub-title">Meet Our Specialist And Expert Oncologist Doctors</span>
                <span class="divider"></span>
            </div>

            <style>
            /* .doctor-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            } */

            .doctor-card {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            }

            .doctor-card:hover {
            box-shadow: 0 0.5rem 1.5rem #3a1566;
            }


            .doctor-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            }

            /* Overlay hidden by default */
            .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            opacity: 0;
            transition: 0.4s ease;
            text-align: center;
            }

            /* Show on hover */
            .doctor-card:hover .overlay {
            opacity: 1;
            }

            .overlay h3 {
            margin-top: 80%;
            font-size: 18px;
            }

            .overlay p {
            margin-top: 0px;
            font-size: 14px;
            color: white !important;
            }
            </style>
            <div class="doctor-container">
                <div class="row g-4">
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="doctor-card">
                            <img src="image_website/Dr-Satish-Sharma.jpeg" alt="Doctor">
                                <h3>Dr Satish Sharma</h3>
                                <p style="font-size:11px !important; ">MBBS | DNB (Medicine) | DM (Medical Oncology) ECMO (European Certified Medical Oncologist)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,

            /* Autoplay settings */
            autoplay: true,
            autoplayTimeout: 1200,      // 3 seconds
            autoplayHoverPause: false,  // Pause on mouse hover
            smartSpeed: 1000,            // Smooth transition speed

            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 6
                }
            },

            navText: [
                "<i class='fa fa-chevron-left'></i>",
                "<i class='fa fa-chevron-right'></i>"
            ],
            navClass: ["owl-prev button-primary", "owl-next button-primary"]
        });
    });
</script>

 



    
    
    <!-- Doctor End Team Section -->

    <!-- Ribbon colors Section -->

        <style>
        .coe_text {
            max-height: 80px;
            /* Adjust the max height according to your needs */
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .text-expanded {
            max-height: none;
        }

        .coe-read-more-btn {
            cursor: pointer;
            color: #007bff;
            display: inline-block;
            margin-top: 10px;
        }

        @media only screen and (max-width: 600px) {
            .services-section {
                padding: 20px;
            }
        }
        /* .inner-box img{
            width:100%;
            border-radius:10px;
            height:200px;
        } */
        .inner-box-ribbons img{
            width:100%;
            border-radius:10px;
            height:100px;
        }
        .inner-box-ribbons h3{
            color:#3a1566;
            font-weight: 600;
            line-height: 1.2em; 
            margin-bottom: 10px;
            font-size: 14px;
        }
    </style>

    <!-- Ribbon colors Section -->
    <section class="color-ribbons-section" id="color-ribbons">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Cancer Awareness Ribbons</h2>
                <span class="sub-title">Awareness ribbons are powerful symbols in the fight against cancer. Each color represents a specific type of cancer and helps raise awareness, honor patients and survivors, and inspire action to support research.</span>
                <span class="divider"></span>
            </div>
            <div class="row" id="cancer-ribbon-row">

                <!-- Cancer Ribbon Block -->
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/pink-breast-cancer.png" alt="Breast Cancer" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">Breast Cancer</h3>
                    </div>
                </div>		
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/gold-childhood-cancer.png" alt="Childhood Cancer" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">Childhood Cancer</h3>
                    </div>
                </div>
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/gray-brain-cancer.png" alt="Brain Cancer" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">Brain Cancer</h3>
                    </div>
                </div>		
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/orange-leukemia-kidney-cancer.png" alt="Kidney Cancer" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">Kidney Cancer</h3>
                    </div>
                </div>	
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/red-blood-cancer.png" alt="Blood Cancer" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">Blood Cancer</h3>
                    </div>
                </div>	
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/burgundy-multiple-myeloma-cancer.png" alt="Multiple Myeloma Cancer" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">Multiple Myeloma</h3>
                    </div>
                </div>
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/violet-hodgkin-lymphoma-cancer.png" alt="Hodgkin Lymphoma Cancer" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">Hodgkin Lymphoma</h3>
                    </div>
                </div>
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/lime-green-non-hodgkin-lymphoma.png" alt="Non-Hodgkin Lymphoma Cancer" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">Non-Hodgkin Lymphoma</h3>
                    </div>
                </div>	
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/light-blue-prostate-cancer.png" alt="Prostate Cancer" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">Prostate Cancer</h3>
                    </div>
                </div>
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/dark-blue-colorectal-cancer.png" alt="Colorectal Cancer" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">Colorectal Cancer</h3>
                    </div>
                </div>	
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/yellow-sarcoma-bone-cancer.png" alt="Sarcoma & Bone Cancer" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">Sarcoma & Bone Cancer</h3>
                    </div>
                </div>
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/black-skin-cancer.png" alt="SKin Cancer" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">Skin Cancer</h3>
                    </div>
                </div>
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/pearl-white-lung-cancer.png" alt="Lung Cancer" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">Lung Cancer</h3>
                    </div>
                </div>
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/purple-pancreatic-cancer.png" alt="Pancreatic Cancer" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">Pancreatic Cancer</h3>
                    </div>
                </div>
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/teal-ovarian-cancer.png" alt="Ovarian Cancer" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">Ovarian Cancer</h3>
                    </div>
                </div>
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/white-teal-cervical-cancer.png" alt="Cervical Cancer" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">Cervical Cancer</h3>
                    </div>
                </div>
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/peach-uterine-endometrial-cancer.png" alt="Uterine / Endometrial Cancer" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">Uterine / Endometrial Cancer</h3>
                    </div>
                </div>
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/amber-appendix-cancer.png" alt="Appendix Cancer" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">Appendix Cancer</h3>
                    </div>
                </div>
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/emerald-green-liver-cancer.png" alt="Liver Cancer" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">Liver Cancer</h3>
                    </div>
                </div>
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/light-purple-testicular-cancer.png" alt="Testicular Cancer" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">Testicular Cancer</h3>
                    </div>
                </div>
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/zebra-print-carcinoid-neuroendocrine-tumors.png" alt="Carcinoid & Neuroendocrine Tumors" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">Carcinoid & Neuroendocrine Tumors</h3>
                    </div>
                </div>
                <div class="cancer-ribbon-block col-lg-1 col-md-3 col-sm-4">
                    <div class="inner-box-ribbons">
                        <img src="image_website/cancer_ribbons/lavender-all-cancer.png" alt="All Cancer" loading="lazy" style="width:80%;border-radius:10px;">
                        <h3 class="mt-3 text-center">All cancer</h3>
                    </div>
                </div>
                
                
                
                
                
                

            </div>
        </div>
    </section>

    <script>
        function coetoggleReadMore(btn) {
            var innerBox = btn.closest('.inner-box');
            var textDiv = innerBox.querySelector('.coe_text');

            if (textDiv) {
                textDiv.classList.toggle('text-expanded');
                btn.innerText = textDiv.classList.contains('text-expanded') ? 'Read less' : 'Read more';
            }
        }
    </script>
    <!--End COE Section -->


    <style>
        .service-block h3 a:hover {
            color: #13bfb3 !important;
        }

        .spcl_text {
            max-height: 80px;
            /* Adjust the max height according to your needs */
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .text-expanded {
            max-height: none;
        }

        .spcl-read-more-btn {
            cursor: pointer;
            color: #007bff;
            display: inline-block;
            margin-top: 10px;
        }
    </style>


    <!-- Specialities Section  -->


    <script>
        function toggleReadMore(btn) {
            var innerBox = btn.closest('.inner-box');
            var textDiv = innerBox.querySelector('.spcl_text');
            if (textDiv) {
                textDiv.classList.toggle('text-expanded');
                btn.innerText = textDiv.classList.contains('text-expanded') ? 'Read less' : 'Read more';
            }
        }
    </script>
    <!-- End Specialities Section  -->




















    <style>
        .num {
            color: #072f66;
        }

        .num:hover {
            color: #072f66;
        }
    </style>

    <style>
        @media only screen and (max-width: 600px) {
            .appointment-section {
                padding: 20px;
                padding-bottom: 80px;
            }
        }
    </style>




    <style>
        @media only screen and (max-width: 600px) {
            .testimonial-section {
                padding: 20px;
            }
        }
    </style>


    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title text-center">
                <span class="title">Don’t just take our word for it,</span>
                <h2>Testimonials</h2>
                <span class="divider"></span>
            </div>
            <div class="elfsight-app-77fc7542-bb54-43cc-88bf-aad12858c864" data-elfsight-app-lazy></div>        </div>
    </section>
    <!-- End Testimonial Section -->


   
    
    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title text-center">
                <h2>News</h2>
                <span class="sub-title text-center">Our patients are our best advocates; listen to their inspiring stories about their treatment journey with Orchid.</span>
                <span class="divider"></span>
            </div>
            <div class="row">
                <!-- News Block -->





                <div class="row">
  <div class="col-md-4">
    <div class="card">
      <img src="image_website/oral_cancer.jpg" alt="Oral Cancer" class="card-img-top" />
      <div class="date-tag px-4">March 24, 2026</div>
      <div class="card-body">
        <h5 class="card-title"><a href="https://www.maxhealthcare.in/blogs/what-do-you-need-to-know-about-oral-cancer">Oral Cancer: All You Need to Know</a></h5>
        <p class="card-text">
          Oral Cancer mostly affects people above the age of 40 years but Dr. Sowrabh Kumar Arora , Principal Consultant, Surgical
        </p>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card">
      <img src="image_website/bone_marrow_transplant.jpeg" alt="Bone Marrow Transplant" class="card-img-top" />
      <div class="date-tag px-4">March 24, 2026</div>
      <div class="card-body">
        <h5 class="card-title"><a href="https://www.maxhealthcare.in/blogs/recovery-after-bone-marrow-transplant">Recovery After Bone Marrow Transplant: Follow up & Precautions</a></h5>
        <p class="card-text">
          A bone marrow transplant is a significant step in the treatment journey for many patients with serious blood
        </p>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card">
      <img src="image_website/robot_assisted.jpeg" alt="Robot assisted cancer surgery" class="card-img-top" />
      <div class="date-tag px-4">March 24, 2026</div>
      <div class="card-body">
        <h5 class="card-title"><a href="https://www.maxhealthcare.in/blogs/robot-cancer-surgery-myths-and-facts">Robot Cancer Surgery Myths & Facts: Benefits & Risks</a></h5>
        <p class="card-text">
          Robotic surgery is becoming more common in cancer treatment, but there’s a lot of confusion about what it actually
        </p>
      </div>
    </div>
  </div>
</div>



            </div>
        </div>
    </section>
    <!--End News Section -->



    <!-- Frequently Asked Questions Section -->

    <style>
        .acc {
            font-weight: 600;
            font-size: 14px;
        }

        .acc:hover {
            background-color: #18beb48f;
        }

        .custom_card_header {
            padding: 0;
            /* margin: 12px; */
            /* color: #f7f7f7; */
            height: 44px;
        }

        .btn-check:focus+.btn,
        .btn:focus {
            box-shadow: 0 0 0 0.25rem rgb(255 255 255 / 0%) !important;
        }

        .btn {
            display: block !important;
        }

        /* Media query for screens with a maximum width of 768px (typical for mobile devices) */
        @media (max-width: 768px) {
            .custom_card_header {
                height: 0%;
                padding: 0;

            }
        }

        @media only screen and (max-width: 600px) {
            .services-section-three {
                padding: 20px;
            }
        }
    </style>

    <section class="services-section-three">
        <div class="auto-container">
            <div class="row">
                <div class="images-column col-lg-6 col-md-12 col-sm-12 order-2">
                     <div class="inner-column" style="padding-left:50px;">
                        <figure class="image-1"><img src="image_website/faq_envelope.png" alt="Video Image" loading="lazy" style="box-shadow:0 0.5rem 1.5rem #3a1566; border-radius:20px; height: 100% !important;width: 100% !important;"></figure>
                         <!-- <div class="link-box">
                            <a href="/about_us/" class="theme-btn btn-style-one" style="padding:10%;border-radius:20px;width: 75%;"><span class="btn-title">Read More </span></a>
                          
                        </div> -->
                    </div>
                </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="sec-title text-center">
                <span class="sub-title text-center">FAQ</span>
                <h2>Frequently Asked Questions</h2>
                <span class="divider"></span>
            </div>
<style>
.accordion .card{
    margin-bottom:1 rem;
    background-color: #fff;
    border: 1px solid #eee;
}
</style>
            <div class="accordion" id="accordionExample">
                <div class="card ">
                    <div class="card-header custom_card_header" id="headingOne1">
                        <h2 class="mb-0">
                            <button class="btn  btn-block text-left acc" type="button" data-toggle="collapse" data-target="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1">
                                What is oncology?                                        <i class="fas fa-chevron-down float-right"></i>
                            </button>
                        </h2>
                    </div>
                            <div id="collapseOne_1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Oncology is the branch of medicine that deals with the prevention, diagnosis, and treatment of cancer.  </div>
                            </div>
                        </div>
                                        <div class="card ">
                            <div class="card-header custom_card_header" id="headingOne2">
                                <h2 class="mb-0">
                                    <button class="btn  btn-block text-left acc" type="button" data-toggle="collapse" data-target="#collapseOne_2" aria-expanded="true" aria-controls="collapseOne_2">
                                        Who is an oncologist?                                      <i class="fas fa-chevron-down float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne_2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    An oncologist is a doctor specialized in treating cancer using different therapies.                               </div>
                            </div>
                        </div>
                                        <div class="card ">
                            <div class="card-header custom_card_header" id="headingOne3">
                                <h2 class="mb-0">
                                    <button class="btn  btn-block text-left acc" type="button" data-toggle="collapse" data-target="#collapseOne_3" aria-expanded="true" aria-controls="collapseOne_3">
                                        What are the main types of oncology?                                      <i class="fas fa-chevron-down float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne_3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Medical, surgical, and radiation oncology.                                </div>
                            </div>
                        </div>
                                        <div class="card ">
                            <div class="card-header custom_card_header" id="headingOne4">
                                <h2 class="mb-0">
                                    <button class="btn  btn-block text-left acc" type="button" data-toggle="collapse" data-target="#collapseOne_4" aria-expanded="true" aria-controls="collapseOne_4">
                                        What treatments are used in oncology?                                        <i class="fas fa-chevron-down float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne_4" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Common treatments include chemotherapy, surgery, radiation therapy, targeted therapy, and immunotherapy.                               </div>
                            </div>
                        </div>
                                        <div class="card ">
                            <div class="card-header custom_card_header" id="headingOne5">
                                <h2 class="mb-0">
                                    <button class="btn  btn-block text-left acc" type="button" data-toggle="collapse" data-target="#collapseOne_5" aria-expanded="true" aria-controls="collapseOne_5">
                                        Is cancer always curable?                                       <i class="fas fa-chevron-down float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne_5" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Not all cancers are curable, but many are treatable, especially when detected early.                                </div>
                            </div>
                        </div>
                                        <div class="card ">
                            <div class="card-header custom_card_header" id="headingOne6">
                                <h2 class="mb-0">
                                    <button class="btn  btn-block text-left acc" type="button" data-toggle="collapse" data-target="#collapseOne_6" aria-expanded="true" aria-controls="collapseOne_6">
                                        What is chemotherapy?                                       <i class="fas fa-chevron-down float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne_6" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Chemotherapy uses drugs to kill or slow the growth of cancer cells.                               </div>
                            </div>
                        </div>
                                        <div class="card ">
                            <div class="card-header custom_card_header" id="headingOne7">
                                <h2 class="mb-0">
                                    <button class="btn  btn-block text-left acc" type="button" data-toggle="collapse" data-target="#collapseOne_7" aria-expanded="true" aria-controls="collapseOne_7">
                                        What is radiation therapy?                                        <i class="fas fa-chevron-down float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne_7" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    It uses high-energy rays to destroy cancer cells.                                </div>
                            </div>
                        </div>
                                        <div class="card ">
                            <div class="card-header custom_card_header" id="headingOne8">
                                <h2 class="mb-0">
                                    <button class="btn  btn-block text-left acc" type="button" data-toggle="collapse" data-target="#collapseOne_8" aria-expanded="true" aria-controls="collapseOne_8">
                                        Can cancer be prevented?                                     <i class="fas fa-chevron-down float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne_8" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Some cancers can be prevented through healthy lifestyle choices and regular screenings.                                </div>
                            </div>
                        </div>
                </div>
                </div>
                </div>
        </div>
    </section>
	<?php require_once('footer.php'); ?>