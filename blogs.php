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


	
	<!--Frequently Asked Questions (FAQs) Schema Starts -->

		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "FAQPage",
		  "mainEntity": [
					{
			  "@type": "Question",
			  "name": "What is oncology?",
			  "acceptedAnswer": {
				"@type": "Answer",
				"text": "Oncology is the branch of medicine that deals with the prevention, diagnosis, and treatment of cancer."
			  }
			}
		,			{
			  "@type": "Question",
			  "name": "Where is Orchid Medical Centre located and what is nearby?",
			  "acceptedAnswer": {
				"@type": "Answer",
				"text": "Orchid Medical Centre is located at H.B. Road, Ranchi, Jharkhand-834001. It is near Lalpur Thana."
			  }
			}
		,			{
			  "@type": "Question",
			  "name": "How to get in touch with the hospital?",
			  "acceptedAnswer": {
				"@type": "Answer",
				"text": "For any medical assistance, you can call or mail us at 9117100100/ info@orchidmedcentre.com respectively."
			  }
			}
		,			{
			  "@type": "Question",
			  "name": "Are the doctors and surgeons in your hospitals licensed and credentialed?",
			  "acceptedAnswer": {
				"@type": "Answer",
				"text": "All the doctors and surgeons in our hospital are registered and has their medical degrees from best medical institutions in India."
			  }
			}
		,			{
			  "@type": "Question",
			  "name": "How can I make an appointment with a doctor?",
			  "acceptedAnswer": {
				"@type": "Answer",
				"text": "You can book your appointment either by calling us at 9117100100 or visiting our Contact Us page"
			  }
			}
		,			{
			  "@type": "Question",
			  "name": "Will we get to talk to our surgeon before and after the operation?",
			  "acceptedAnswer": {
				"@type": "Answer",
				"text": "Yes, you can consult the surgeon before and after the operation."
			  }
			}
		,			{
			  "@type": "Question",
			  "name": "How can I avail mediclaim from Orchid Medical Centre in Ranchi, Jharkhand?",
			  "acceptedAnswer": {
				"@type": "Answer",
				"text": "If you are having a planned surgery, then kindly visit our TPA department and submit all the needed documents (Adhaar Card, Insurance card, etc.) before getting hospitalised."
			  }
			}
		,			{
			  "@type": "Question",
			  "name": "Is there any Cashless Hospitalization facility?",
			  "acceptedAnswer": {
				"@type": "Answer",
				"text": "Cashless hospitalisation facilities are available to the corporates having official tie-ups with the hospital. To know more about Alliances."
			  }
			}
				  ]
		}
		</script>

<!--Frequently Asked Questions (FAQs) Schema Ends -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var accordionButtons = document.querySelectorAll('.acc');
            accordionButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var icon = this.querySelector('i');
                    // Toggle the icon class based on the accordion state
                    if (this.getAttribute('aria-expanded') === 'true') {
                        icon.classList.remove('fa-chevron-up');
                        icon.classList.add('fa-chevron-down');
                    } else {
                        icon.classList.remove('fa-chevron-down');
                        icon.classList.add('fa-chevron-up');
                    }
                });
            });
        });
    </script>

    <!--Frequently Asked Questions Section -->    


    <!-- Clients Section -->
    <style>
        .alliance-img {
            width: 300px;
            height: 200px;
        }
    </style>	
	
	<!-- start alliance -->
	

	<!-- start alliance -->
    <!--End Clients Section -->


    


<style>
    .float {
        position: fixed;
        width: 50px;
        height: 50px;
        bottom: 51px;
        left: 20px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .my-float {
        margin-top: 11px;
    }



    .sticky-icon {
        /* z-index: 100; */
        position: fixed;
        top: 40%;
        right: 0%;
        width: 200px;
        display: flex;
        flex-direction: column;
    }

    .sticky-icon a {
        transform: translate(160px, 0px);
        /* border-radius: 50px 0px 0px 50px; */
        border-radius: 15px 0px 0px 15px;
        text-align: left;
        margin: 2px;
        text-decoration: none;
        /* text-transform:uppercase; */
        padding: 10px;
        font-size: 20px;
        /* font-family: 'Oswald', sans-serif; */
        transition: all 0.8s;
    }

    .sticky-icon a:hover {
        color: #FFF;
        transform: translate(0px, 0px);
    }

    .sticky-icon a:hover i {
        transform: rotate(360deg);
    }

    /*.search_icon a:hover i  {
  transform:rotate(360deg);}*/
    .Facebook {
        background-color: #2C80D3;
        color: #FFF;
    }

    .Youtube {
        background-color: #fa0910;
        color: #FFF;
    }

    .Twitter {
        background-color: #13bfb3;
        color: #FFF;
    }

    .Instagram {
        background-color: #FD1D1D;
        color: #FFF;
    }

    .Google {
        background-color: #00307e;
        color: #FFF;
    }

    .sticky-icon a i {
        /* background-color:#FFF; */
        height: 40px;
        /* width: 40px; */
        color: #fefefe;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        margin-right: 20px;
        transition: all 0.5s;
    }

    .sticky-icon a i.fa-facebook-f {
        background-color: #FFF;
        color: #2C80D3;
    }

    .sticky-icon a i.fa-google-plus-g {
        background-color: #FFF;
        color: #d34836;
    }

    .sticky-icon a i.fa-instagram {
        background-color: #FFF;
        color: #FD1D1D;
    }

    .sticky-icon a i.fa-youtube {
        background-color: #FFF;
        color: #fa0910;
    }

    .sticky-icon a i.fa-twitter {
        background-color: #FFF;
        color: #53c5ff;
    }

    .fas fa-shopping-cart {
        background-color: #FFF;
    }

    #myBtn {
        height: 50px;
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        text-align: center;
        padding: 10px;
        text-align: center;
        line-height: 40px;
        border: none;
        outline: none;
        background-color: #1e88e5;
        color: white;
        cursor: pointer;
        border-radius: 50%;
    }

    .fa-arrow-circle-up {
        font-size: 30px;
    }

    #myBtn:hover {
        background-color: #555;
    }


    @media only screen and (max-width: 600px) {

        .Google {
            display: none;
        }

        .Twitter {
            display: none;
        }

        .float {
            display: none;
        }
    }
</style>









<!--Start Sticky Icon-->
<div class="sticky-icon">
    <a href="tel:9117100100" class="Youtube" style="font-size: 12px;
    font-weight: 600;"><i class="fa-solid fa-truck-medical"></i>Emergency service 24x7</a>
    <a href="http://115.245.191.238:50032/" class="Google"><i class="fa-regular fa-calendar-check" id="appoint"> </i> Appointment </a>

    <a href="https://182.71.200.13:50030/" class="Twitter report-btn" target='_blank'><i class="fa-solid fa-download " id="reports"> </i> Reports</a>


</div>
<!--End Sticky Icon-->



<!-- Main Footer -->
<footer class="main-footer">
    <!--Widgets Section-->
    <div class="widgets-section" style="background-image: url(/images/background/7.webp);">
        <div class="auto-container">
            <div class="row">
                <!--Big Column-->
                <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <!--Footer Column-->
                        <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget about-widget">
                                <div class="logo" style="background-color:white;padding:10px;">
                                    <a href="/">
                                        <img src="image_website/onco_logo.png" alt="Orchid Samagati" style="margin-left: -13px;" width="333" height="48" />
                                    </a>
                                </div>
                                <div class="text">
                                    <p>Orchid Medical Centre is committed to delivering exceptional medical care and treatment services. We take pride in our recognition for excellence and accreditation by NABH, NABL, and NABH for Nursing Excellence. Our premier facility provides high-quality medical care and treatment options.</p>
                                </div>
                                <ul class="social-icon-three" style="margin-left:-30px">
                                    <li><a href="https://www.facebook.com/orchidmedcentre" target="_blank" class="fab fa-facebook-f"></a></li>
                                    <li><a href="https://www.instagram.com/orchidmedcentre/" target="_blank" class="fab fa-instagram"></a></li>
                                    <li><a href="https://www.linkedin.com/company/orchid-medical-centre/" target="_blank" class="fab fa-linkedin-in"></a></li>
                                    <li><a href="https://www.youtube.com/@orchidmedcentre" target="_blank" class="fab fa-youtube"></a></li>
                                    <li><a href="https://www.orchidmedcentre.com/admin/" target="_blank" class="fa-solid fa-user-tie"></a></li>
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget">
                                <div class="widget-title">Quick Links</div>
                                <ul class="user-links" style="margin-left:-30px">
                                    <li><a href="index.html">Home</a></li>


                                    <li><a href="/#coe">Centre Of Excellence</a></li>
                                    <li><a href="/#spcl">Specialities</a></li>

                                    <li><a href="https://www.orchidmedcentre.com/academics/">Academics</a></li>
                                    <li><a href="https://www.orchidmedcentre.com/technologies/">Technologies</a></li>
                                    <li><a href="https://www.orchidmedcentre.com/patient_testimonial/">Patient Testimonial</a></li>
                                    <li><a href="https://www.orchidmedcentre.com/contact_us/contact/">Contact Us</a></li>
                                    <li><a href="https://www.orchidmedcentre.com/bmw_reports/">Biomedical Waste Report</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <!--Footer Column-->
                       

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <!--Footer Column-->
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">Contact Us</div>
                                <!--Footer Column-->
                                <div class="widget-content">
                                    <ul class="contact-list" style="margin-left:-30px">
                                        <li class="mt-5">
                                            <span class="icon flaticon-placeholder"></span>
                                            <div class="text">H.B. Road, Ranchi, Jharkhand 834001</div>
                                            <!-- <a href="tel:9117100100"><strong>9117100100</strong></a> -->

                                        </li>

                                        <li class="mt-5">
                                            <span class="icon flaticon-call-1"></span>
                                            <div class="text"><a href="tel:9117100100"><strong>9117100100</strong></a></div>
                                        </li>

                                        <li class="mt-5">
                                            <span class="icon flaticon-email"></span>
                                            <div class="text"> <a href="mailto:info@orchidmedcentre.com"><strong>info@orchidmedcentre.com</strong></a>

                                            </div>
                                        </li>

                                        <!-- <li>
                                                <span class="icon flaticon-back-in-time"></span>
                                                <div class="text">Mon - Sat 8.00 - 18.00<br>
                                                <strong>Sunday CLOSED</strong></div>
                                            </li> -->


                                      
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!--Footer Bottom-->
    <div class="footer-bottom">
        <!-- Scroll To Top -->


        <div class="container">

            <p style="color:white; text-align: center; padding-top: 15px;"> <span style="color:yellow;">*Disclaimer:</span> The information throughout this hospital (www.orchidmedcentre.com) is not intended to be taken as medical advice, diagnosis, or treatment. There is no guarantee of specific results and the results for any treatment mentioned on the website may vary, as every individual and their medical conditions are different.</p>

        </div>

        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>




        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="footer-nav">
                    <ul class="clearfix">
                        <li><a href="https://www.orchidmedcentre.com/sitemap/">Sitemap</a></li>
                        <li><a href="https://www.orchidmedcentre.com/privacy_policy/">Privacy Policy</a></li>
                        <li><a href="https://www.orchidmedcentre.com/contact_us/contact/">Contact</a></li>
                        <li><a href="https://www.orchidmedcentre.com/legal_compliance/">Legal & Compliance</a></li>
                    </ul>
                </div>



                <div class="copyright-text mb-3">
                    <!-- <p>Copyright © 2020 <a href="#">Bold Touch</a>All Rights Reserved.</p> -->
                    <p>
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved <a href="https://www.orchidmedcentre.com/ " target="_blank">Orchid Medical Centre</a>
                    </p>

                </div>
            </div>
        </div>
    </div>
</footer>
<!--End Main Footer -->

</div><!-- End Page Wrapper -->






<style>
    @media only screen and (min-width: 600px) {
        #mob_footer {

            display: none;

        }
    }

    .footer_icon {
        color: black !important;
        margin: 0px;
        padding: 0px;
    }

    .footer_link {
        text-decoration: none !important;
        color: white;
        /* color:#25304c ; */
    }

    .footer_link:hover {
        color: #25304c !important;
        /* color:white !important; */
    }

    .footer_text {

        font-size: 10px;
        margin: 0px;
        padding: 0px;
    }

    .mob_footer {
        background-color: #12beb2;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
        /* box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px; */
        position: fixed;
        bottom: 0px;
        left: 0px;
        width: 100%;
        /* background-color:white; */
        z-index: 58888;
    }
</style>





<div id='mob_footer' class="mob_footer pt-2 pb-2">


    <table style='width:100%;text-align:center;'>

        <tr>

            <td style='width:20%;'>

                <a href="https://www.orchidmedcentre.com/doctors/" class='footer_link' target='_blank'>

                    <span class="material-symbols-outlined">stethoscope</span>

                    <div class='footer_text' style="line-height:0.5;"> Doctor </div>


                </a>


            </td>





            <td style='width:20%;'>

                <a href="http://115.245.191.238:50032/" class='footer_link' target='_blank'>

                    <span class="material-symbols-outlined">calendar_month</span>

                    <div class='footer_text' style="line-height:0.5;"> Book Appt. </div>


                </a>


            </td>


            <td style='width:20%;'>

                <a href="https://182.71.200.13:50030/" class='footer_link report-btn' target='_blank'>

                    <span class="material-symbols-outlined">summarize</span>

                    <div class='footer_text' style="line-height:0.5;"> Report </div>


                </a>


            </td>







            <td style='width:20%;'>
                <a href="https://api.whatsapp.com/send/?phone=9117100100&text&type=phone_number&app_absent=0" class='footer_link' target='_blank'>


                    <i class="fa-brands fa-whatsapp" style="font-size: 24px; vertical-align: 5px;"></i>

                    <div class='footer_text' style="line-height:0.5;"> Whatsapp </div>

                </a>

            </td>

            <td style='width:20%;'>
                <a href="https://www.google.com/maps/dir//H.B.+Road+Near+Lalpur+Thana,+New+Barhi+Toli,+Ranchi,+Jharkhand+834001/@23.3711664,85.2509274,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x39f4e10d47207009:0x8a579a6aab7ecd78!2m2!1d85.333329!2d23.371188?entry=ttu" class='footer_link' target='_blank'>
                    <i class="fas fa-location" style="font-size: 24px; vertical-align: 5px;"></i>
                    <div class='footer_text' style="line-height:0.5;"> Get Direction </div>
                </a>

            </td>

        </tr>


    </table>



</div>


<!-- zecpaa tag -->



<script type="application/javascript">
    (function(w, d, s, o, f, js, fjs) {
        w['zcWidget'] = o;
        w[o] = w[o] || function() {
            (w[o].q = w[o].q || []).push(arguments)
        };
        js = d.createElement(s), fjs = d.getElementsByTagName(s)[0];
        js.id = o;
        js.src = f;
        js.async = 1;
        fjs.parentNode.insertBefore(js, fjs);

    }(window, document, 'script', 'zc', 'https://widget.zceppa.com//zc-widget.min.js'));
    zc('init', {
        domain: 'prod'
    });
</script>


<!-- zecpaa tag -->



<!-- Third-party CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
        defer></script>

<script src="https://static.elfsight.com/platform/platform.js"
        data-use-service-core
        defer></script>

<!-- Core Libraries -->

<script src="js/popper.min.js" defer></script>

<!-- jQuery Plugins -->
<script src="js/jquery.fancybox.js" defer></script>
<script src="js/jquery.modal.min.js" defer></script>
<script src="js/mmenu.polyfills.js" defer></script>
<script src="js/mmenu.js" defer></script>
<script src="js/owl.js" defer></script>
<script src="js/wow.js" defer></script>
<script src="js/appear.js" defer></script>

<!-- Bootstrap (local if still needed) -->
<script src="js/bootstrap.min.js" defer></script>

<!-- Custom Script (MUST BE LAST) -->
<script src="js/script.js" defer></script>


<!-- Color Setting -->

<!-- <script src="/js/color-settings.js"></script> -->



<!-- script for active  menu color -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var currentPageUrl = window.location.pathname;
        var menuLinks = document.querySelectorAll('.navigation a');

        menuLinks.forEach(function(link) {
            if (link.getAttribute('href') === currentPageUrl) {
                link.classList.add('active');
                // If the menu item is inside a dropdown, also mark its parent as active
                var dropdownParent = link.closest('.dropdown');
                if (dropdownParent) {
                    dropdownParent.querySelector('span').classList.add('active');
                }
                // Change text color of active menu item
                link.style.color = '#004083'; // Example color
            }
        });
    });
</script>
<!-- script for active  menu color -->


<script>
    $(document).ready(function() {
        $('.report-btn').on('click', function(e) {
            $.ajax({
                url: 'track_click.php',
                method: 'POST',
                success: function(response) {
                    console.log('Click tracked successfully.');
                },
                error: function() {
                    console.log('Error tracking click.');
                }
            });
        });
    });
</script>

</body>

</html>
    