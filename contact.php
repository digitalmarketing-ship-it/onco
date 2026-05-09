<?php

$page_title = "Contact us";   // breadcrumb title

require_once('header.php');


$data = get_banners_image_info();
if ($data) {
    // print_r($data);
    foreach ($data as $banner) {
        $img = 'image_website/banner9.png';
    }
}
?>


<!--Page Title-->


   <section class="hero" style="
    background-image: url('<?= $img ?>');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
">
        <div class="container-fluid">
            <div class="glass-card">
                <h2 class="text-dark"><strong>Contact Us</strong></h2>
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


    <?php

$data = get_website_info();

if ($data) {
    // print_r($data);
    foreach ($data as $details) {
        $address = $details['address'];
        $mobile_number = $details['mobile_number'];
        $email = $details['email'];
    }
}

?> 



    <section class="py-5">
<div class="container">
<div class="row g-4">


    <!-- LEFT SIDE -->
    <div class="col-lg-4">
        
        <div class="contact-info-card bg-purple">
            <h6><i class="fa-solid fa-location-dot"></i> ADDRESS </h6>
            <p class="mt-3"><?= $address ?></p>
        </div>

        <div class="contact-info-card bg-pink">
            <h6><i class="fa-solid fa-phone"></i> PHONE </h6>
            <p class="mt-3"><?= $mobile_number ?></p>
        </div>

        <div class="contact-info-card bg-green">
            <h6><i class="fa-solid fa-clock"></i> Email</h6>
            <p class="mt-3">
                <?= $email ?>
            </p>
        </div>

    </div>

    <!-- RIGHT SIDE -->
    <div class="col-lg-8">
        <div class="contact-form">
            
            <h2 class="title mb-3">Send Us A <span>Message</span> Anytime</h2>
            <p class="text-muted">Your email address will not be published. Required fields are marked *</p>

            <form action="#" method="post" id="orderform">
                    <div class="row">
                        <div class="form-group col-lg-12">
                            <div class="response"></div>

                        </div>



                        <div class="col-lg-12 col-md-12">

                            <div class="form-group">
                                <input type="text" name="name" class="form-control name" id="name" placeholder=" Name*" required>
                            </div>


                            <div class="form-group">
                                <input type="text" name="number" class="form-control number" id="number" placeholder="Mobile*" required>
                            </div>



                            <div class="form-group">
                                <input type="email" name="email" class="form-control email" id="email" placeholder="Email*" required>
                            </div>





                            <div class="form-group">

                                <select id="preffered_time" class="form-control">

                                    <option>Preferred time to reach out to you</option>
                                    <option>Morning</option><br>
                                    <option>AfterNoon</option><br>
                                    <option>Evening</option><br>

                                </select>
                            </div>
                             <div class="form-group">
                                <textarea name="contact_message" class="form-control message" id="message" placeholder=" Message"></textarea>
                            </div>
                        </div>



                      



                        <div class="form-group col-lg-12 text-center pt-3">
                            <button class="default-btn btn-style-one" type="button" onclick="submitForm()" id="submit" name="submit"><span class="btn-title"><i class="fa-solid fa-circle-right"></i> &nbsp; Send Message</span></button>
                        </div>
                    </div>
                </form>
        </div>
    </div>

</div>
</div>
</section>

<!--End Page Title-->

<!--End Contact Section -->



<script>

    function submitForm() {

        // Prevent form submission

        event.preventDefault();


    // Get the form data
    const name = document.getElementById('name').value;
    const phoneNumber = document.getElementById('number').value;
    const email = document.getElementById('email').value;
  
    const preffered_time = document.getElementById('preffered_time').value;
    const message = document.getElementById('message').value;





    // Make sure other fields are not empty
if (name.trim() === "") {
alert("Please enter your name");
return;
}


// Phone number validation
const phonePattern = /^\d{10}$/; // Regular expression for 10-digit phone number
if (!phonePattern.test(phoneNumber)) {
alert("Please enter a valid phone number");
return;
}

   // Email validation
   const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Regular expression for email
if (!emailPattern.test(email)) {
alert("Please enter a valid email address");
return;
}






if (preffered_time.trim() === "") {
alert("Please enter  preffered time");
return;
}




if (message.trim() === "") {
alert("Please enter message");
return;
}


// If all validations pass, proceed with form submission
const formData = new FormData();
formData.append('name', name);
formData.append('number', phoneNumber);
formData.append('email', email);
formData.append('preffered_time', preffered_time);
formData.append('message', message);







        // alert('hio');



        





        // Make an AJAX request to submit the form data

        jQuery.ajax({

            url: "/contact_us/contact/ajax.php",

            data: formData,
        type: "POST",
        contentType: false,
        processData: false,

            success: function(data) {

                // Handle the response from the server after successful submission



                alert("Submitted successfully !");





                location.reload();

            },

            error: function(xhr, status, error) {

                // Handle errors, if any

                // ...

                alert('Error');

            }

        });

    }

</script>







<!-- Top Features -->



<!-- End Features Section -->









<?php

require_once('footer.php');

?>