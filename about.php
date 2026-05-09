<?php require_once 'header.php'; ?>
<?php

$page_title = "About";   // breadcrumb title

require_once("header.php");

$data = get_banners_image_info();

if ($data) {
    // print_r($data);
    foreach ($data as $banner) {

        $img = 'image_website/banner9.png';
    }
}
?>
<section class="auto-container"> 
  <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span> › </span>
    <span class="current">About</span>
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
                <h2 class="text-dark"><strong>About</strong></h2>
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
<!-- End Bnner Section One mobile-view -->
<!-- About Section -->
<section class="intro-section mt-5">
    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <h6>ABOUT ORCHID SAMAGATI CANCER CENTRE</h6>
                        <span class="sub-title" style="font-size:14px;"><strong>Orchid Samagati Cancer Centre </strong> is a dedicated oncology facility in Ranchi and Varanasi, offering advanced cancer diagnosis and comprehensive treatment options such as chemotherapy, immunotherapy, and targeted therapy. Our experienced medical team combines expertise with modern technology to ensure accurate diagnosis, effective treatment planning, and improved patient outcomes.
                        We are deeply committed to compassionate care and early cancer detection, helping patients begin timely treatment and improve their chances of recovery. Our approach focuses on personalized attention, emotional support, and continuous guidance, ensuring every patient feels cared for and confident throughout their entire cancer treatment journey.</span>
                        <span class="divider"></span>
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
<section class="team-section-two alternate alternate2">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Team Member</h2>
                <span class="sub-title">Meet Our Specialist And Expert Oncologist Doctors</span>
                <span class="divider"></span>
            </div>
            <div class="doctor-container">
                <div class="row g-4">
                    <div class="col-6 col-md-4 col-lg-4">
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
<!-- End About Section -->
	<?php require_once('footer.php'); ?>