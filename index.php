<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home - Infinio Technologies</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custome.css" rel="stylesheet">
</head>

<body>

<?php include('./partials/header.php') ?>


  


    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight">Software Development</div>
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight">IT Consulting</div>
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Welcome to Infinio Technology Solutions</h1>
                    <p class="text-white mb-4 animated slideInRight">Empowering Businesses with Innovative Technology Solutions
                    </p>
                    <div class="model-viewer-container">
                    <model-viewer 
                    src="obj/facebook.glb" 
                    seamless-poster shadow-intensity="1" disable-zoom camera-controls  autoplay auto-rotate interaction-prompt="none">
                   </model-viewer>
                   <model-viewer 
                   src="obj/linkedin.glb" 
                   seamless-poster shadow-intensity="1" disable-zoom camera-controls  autoplay auto-rotate interaction-prompt="none">
                  </model-viewer>
                  <model-viewer 
                  src="obj/instagram.glb" 
                  seamless-poster shadow-intensity="1" disable-zoom camera-controls  autoplay auto-rotate interaction-prompt="none">
                 </model-viewer>
                </div>  

                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">

                        <model-viewer 
                        class="model-view-css-fix"src="obj/infiniologo3d.glb" seamless-poster shadow-intensity="1" disable-zoom camera-controls  auto-rotate interaction-prompt="none">
                        </model-viewer>
      
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about_as">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/about-img.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">About Us</div>
                    <h1 class="mb-4">We Make Your Business Smarter with our Solutions</h1>
                    <p class="mb-4">Infinio Technology Solutions was founded with a simple goal: to 
                        help businesses harness the power of technology to achieve their strategic objectives.
                         With years of experience in the IT industry, our team of experts specializes in a wide range 
                         of services, including software development, web development, IT consulting, and digital
                          transformation.
                    </p>
                    <p class="mb-4">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no
                        labore lorem sit. Sanctus clita duo justo et tempor.</p>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light mt-5 py-5" id="services">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Services
                </div>
                <h1 class="mb-4">Comprehensive IT Solutions for Your Business Needs
                </h1>
            </div>
            <div class="row g-5 align-items-center">
                
                <div class="col-lg-12">
                    <div class="row g-4">

                        <div class="col-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-file-code fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Software Development</h5>
                                        <p>Custom software solutions tailored to your business requirements. 
                                            Agile development processes for timely and efficient delivery.</p>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa   fa-window-maximize fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Web Development</h5>
                                        <p>Responsive and user-friendly websites that enhance your online presence.
                                             E-commerce solutions to boost your online sales.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-users fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">IT Consulting</h5>
                                        <p>Expert advice on IT strategy, infrastructure, and implementation. 
                                            Assessment and optimization of your current IT systems.</p>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-brain fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Digital Transformation</h5>
                                        <p>Integration of digital technologies into all areas of your business.
                                             Automation of processes to improve efficiency and reduce costs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-cloud fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Cloud Services
                                        </h5>
                                        <p>Scalable cloud solutions for storage, computing, and collaboration. 
                                            Migration services to ensure a smooth transition to the cloud.</p>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-fingerprint fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Cybersecurity</h5>
                                        <p>Comprehensive security assessments and solutions to protect your data.
                                            Training and support to enhance your organization's security posture.
                                            </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Mission Start -->
    <div class="container-fluid bg-primary feature pt-5" id="mission">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Our Mission</div>
                    <h1 class="text-white mb-4">Deliver customised technology solutions for our clients</h1>
                    <p class="text-light mb-4">Our mission is to deliver innovative and customised technology 
                        solutions that meet the unique needs of our clients. We are committed to:
                    </p>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Providing top-quality IT services and products.
                        </span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Fostering a culture of continuous improvement and learning.</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Building long-term partnerships with our clients based on trust and excellence.</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Utilising advanced tools and methodologies to drive business success</span>
                    </div>
                    <div class="row g-4 pt-3">
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-users fa-3x text-white"></i>
                                <div class="ms-3">
                                    <p class="text-white mb-0">Since</p>
                                    <h2 class="text-white mb-0" data-toggle="counter-up">2016</h2>
                                    <p class="text-white mb-0">In Field</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-handshake fa-3x text-white"></i>
                                <div class="ms-3">
                                   
                                    <h2 class="text-white mb-0" data-toggle="counter-up">5</h2>
                                    <p class="text-white mb-0">year of Connections</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid" src="img/feature.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Values Start -->
    <div class="container-fluid bg-light py-5" id="our_values">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Values</div>
                <h1 class="mb-4">About Infinio Technology Solutions</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/our-value-1.jpg" alt="">
                        <a class="case-overlay text-decoration-none" href="">
                            <small>Innovation</small>
                            <h5 class="lh-base text-white mb-3">We embrace cutting-edge technologies and methodologies to deliver the best solutions
                            </h5>
                            
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/our-value-2.jpg" alt="">
                        <a class="case-overlay text-decoration-none" href="">
                            <small>Excellence</small>
                            <h5 class="lh-base text-white mb-3">We strive for the highest standards in everything we do.
                            </h5>

                        </a>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/our-value-3.jpg" alt="">
                        <a class="case-overlay text-decoration-none" href="">
                            <small>Integrity</small>
                            <h5 class="lh-base text-white mb-3">We conduct our business with honesty and transparency.
                            </h5>
 
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/our-value-4.jpg" alt="">
                        <a class="case-overlay text-decoration-none" href="">
                            <small>Customer Focus</small>
                            <h5 class="lh-base text-white mb-3">Our clients' success is our success.
                            </h5>
                           
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Case End -->


   

    <!-- Vision Start -->
    <div class="container-fluid bg-light py-5" id="vision">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Vision</div>
                    <h1 class="mb-4">Rouse The World With Our Inventive Technology</h1>
                    <p class="mb-4">At Infinio Technology Solutions, we envision a world where technology seamlessly 
                        integrates with everyday business operations, driving unparalleled efficiency, innovation, 
                        and growth. We strive to be the leading provider of cutting-edge technological solutions that
                         empower businesses to achieve their full potential.
                    </p>
                    <a class="btn btn-primary rounded-pill px-4" href="">Read More</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <h2 class="mb-4" style="color:rgb(3, 37, 70);">OUR TRUSTED PARTNERS</h1>
                        <div class="col-md-6">
                            <div class="row g-4">

                                <div class="col-4 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="team-item">
                                        <img class="img-fluid " src="img/partners-1.png" alt="">
                                    </div>
                                </div>

                                <div class="col-4 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="team-item">
                                        <img class="img-fluid " src="img/partners-2.png" alt="">
                                    </div>
                                </div>

                                <div class="col-4 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="team-item">
                                        <img class="img-fluid " src="img/partners-3.png" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">

                                <div class="col-4 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="team-item">
                                        <img class="img-fluid " src="img/partners-4.png" alt="">
                                    </div>
                                </div>

                                <div class="col-4 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="team-item">
                                        <img class="img-fluid " src="img/partners-5.png" alt="">
                                    </div>
                                </div>

                                <div class="col-4 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="team-item">
                                        <img class="img-fluid " src="img/partners-6.png" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">

                                <div class="col-4 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="team-item">
                                        <img class="img-fluid " src="img/partners-7.png" alt="">
                                    </div>
                                </div>

                                <div class="col-4 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="team-item">
                                        <img class="img-fluid " src="img/partners-8.png" alt="">
                                    </div>
                                </div>

                                <div class="col-4 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="team-item">
                                        <img class="img-fluid " src="img/partners-9.png" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">

                                <div class="col-4 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="team-item">
                                        <img class="img-fluid " src="img/partners-10.png" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
   

     <!-- Testimonial Start -->"
     <div class="container-xxl py-5" id="testimonial">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Testimonial</div>
                    <h1 class="mb-4">What Say Our Clients!</h1>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel border-start border-primary">
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4"> We are very satisfied clients and we would be happy to recommend Infinio!</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Muhsin K H</h5>
                                    <span>Newply</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4"> As the years pass, our bond is getting stronger and stronger.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.png"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Zamra International</h5>
                                    <span>Kochi</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4"> One of the best digital marketing teams in today's industry striving to give us the best
                                results! Thank you.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.png"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">LEADS' Venture Lab</h5>
                                    <span>Malappuram</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">Team Infinio strives to satisfy client demands. Their company is trustworthy since it
                                consistently delivers exceptional outcomes.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.png"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Mudra Publications</h5>
                                    <span>Thrissur</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4"> One of the best digital marketing teams in today's industry striving to give us the best
                                results! Thank you.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-5.png"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">LEADS' Venture La</h5>
                                    <span>Malappuram</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


   


    <!-- Contact Start -->
    <div class="container-fluid bg-primary  py-5" id="contact">
        <div class="container  py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-5 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn" data-wow-delay="0.3s">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Contact Us</div>
                    <h1 class="text-white mb-4">We'd love to hear from you! Whether you have a question about our services or need a consultation, our team is here to help.</h1>
                </div>
                <div class="col-md-7 py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="row g-4">

                        <div class="col-12 col-md-4 wow fadeIn" data-wow-delay="0.7s">
                            <div class="team-item  text-center rounded p-4 pt-0" style="box-shadow:  5px 5px 5px ; background-color: rgba(255, 255, 255, 0.884);">
                                <h5 class="underline mb-0">Thrissur</h5>
                                <br/>
                                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>2nd Floor Vimala
                                    Building,</br>Thrissur. Kerala, India.</p>
                                <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>+91 - 4872 426638</p>
                                <p class="mb-2"><i class="fa fa-mobile-alt text-primary me-3"></i>+91 - 94968 39168</p>
                                <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@infinio.co.in</p>
                                
                            </div>
                        </div>

                        <div class="col-12 col-md-4 wow fadeIn" data-wow-delay="0.7s">
                            <div class="team-item  text-center rounded p-4 pt-0"  style="box-shadow:  5px 5px 5px ; background-color: rgba(255, 255, 255, 0.884);">
                                <h5 class="underline mb-0" >Kochi</h5>
                                <br/>
                                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Marampally, Aluva,
                                    Kerala.
                                </p>
                                <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>+91 - 97454 50618</p>
                                <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@infinio.co.in</p>
                                
                            </div>
                        </div>

                        <div class="col-12 col-md-4 wow fadeIn" data-wow-delay="0.7s">
                            <div class="team-item  text-center rounded p-4 pt-0"  style="box-shadow:  5px 5px 5px ; background-color: rgba(255, 255, 255, 0.884);">
                                <h5 class="underline mb-0">DUBAI</h5>
                                <br/>
                                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Jebel Ali, Dubai.
                                </p>
                                <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>+971-0556259175</p>
                                <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@infinio.co.in</p>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s"
        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
        <iframe class="position-relative rounded w-100 h-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.729209875355!2d76.21824!3d10.5219814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7ef2701a50ef3%3A0xbe22b5bb9c036060!2sInfinio%20Technical%20Solutions!5e0!3m2!1sen!2sin!4v1668663346162!5m2!1sen!2sin"
            frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
        </div>
        
    </div>

    <!-- Newsletter End -->


    <?php include('./partials/footer.php') ?>



</body>

</html>