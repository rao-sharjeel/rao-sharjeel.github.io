<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sigma Soft AI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Custom Software Development Experts" name="keywords">
    <meta content="Custom Software Development Experts" name="description">

    <!-- Favicon -->
    <link href="img/Sigma AI symbol only.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=MuseoModerno:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';
    require 'phpmailer/src/Exception.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $subject = $_POST["subject"];
        if (isset($name) && empty($name) && isset($email) && empty($email) && isset($subject) && empty($subject)) {
            echo '<script>alert("Name and email and subject mandatory");</script>';
        } else {
            $to = "sharjeel.rao089@gmail.com"; // Replace with your own email address
            $body = "Name: " . $name . "\n\nEmail: " . $email . "\n\nMessage: " . $message;

            $headers = "From: " . $email;

            $mail = new PHPMailer(true);

            $mail->SMTPDebug = false;
            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'kumaillatif60@gmail.com'; // SMTP username
            $mail->Password = 'xgxaqnzyzfjgaxfe'; // SMTP password
            $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
    
            $mail->Port = 465; // TCP port to connect to
            $mail->setFrom($email, $name); //Your application NAME and EMAIL 
            $mail->addAddress('kumaillatif60@gmail.com', 'Sigma Soft AI'); // Target email
            $mail->isHTML(true); // Set email format to HTML
    
            $mail->Subject = $subject; //Message subject
            $mail->Body = $body;
            $mail->addCC('sharjeel.rao089@gmail.com');

            try {
                $mail->send();
                echo '<script>alert("Message sent successfully");</script>';
            } catch (Exception $e) {
                echo '<script>alert("Error sending request");</script>';
            }
        }
    }
    ?>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <!-- <small class="me-3 text-light"><i class="fa fa-map-marker me-2 text-custom-dark"></i>123 Street, New York, USA</small> -->
                    <small class="me-3 text-light"><i class="bi bi-whatsapp me-2"></i>+92 346 9637106</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>contact@sigmasoftai.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.linkedin.com/company/sigma-soft-tech" target="_blank"
                        rel="noopener noreferrer"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://twitter.com/SigmaSoftAI" target="_blank" rel="noopener noreferrer"><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.facebook.com/profile.php?id=100094257815011" target="_blank"
                        rel="noopener noreferrer"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.instagram.com/sigmasoftai" target="_blank" rel="noopener noreferrer"><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle"
                        href="https://youtube.com/@SigmaSoftAI" target="_blank" rel="noopener noreferrer"><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <h1 class="m-0 title-font" style="font-family: 'MuseoModerno', cursive;">
                    <!-- <i class="fa fa-user-tie me-2"></i> -->
                    Sigma Soft AI
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a> -->
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="detail.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a> -->
                        <div class="dropdown-menu m-0">
                            <a href="price.html" class="dropdown-item">Pricing Plan</a>
                            <a href="feature.html" class="dropdown-item">Our features</a>
                            <a href="team.html" class="dropdown-item">Team Members</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="quote.html" class="dropdown-item">Free Quote</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link active">Contact</a>
                </div>
                <!-- <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a> -->
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn title-font">Contact Us</h1>
                    <!-- <a href="" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Contact</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-custom-dark text-uppercase">Contact Us</h5>
                <h1 class="mb-0">Reach Out to Us Today
                </h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-3">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-custom-dark d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="bi bi-whatsapp text-white"></i>
                        </div>
                        <div class="ps-3">
                            <h5 class="mb-2">WhatApp</h5>
                            <h4 class="text-custom-dark mb-0">+92 346 9637106</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-custom-dark d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="bi bi-envelope-open text-white"></i>
                        </div>
                        <div class="ps-3">
                            <h5 class="mb-2">Email</h5>
                            <h4 class="text-custom-dark mb-0" style="font-size: larger;">contact@sigmasoftai.com</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-custom-dark d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-building text-white"></i>
                        </div>
                        <div class="ps-3">
                            <h5 class="mb-2">Headquaters</h5>
                            <h4 class="text-custom-dark mb-0">Lahore, Pakistan</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-custom-dark d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="bi bi-building text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Office</h5>
                            <h4 class="text-custom-dark mb-0">London, UK</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form method="post" action="">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control border-0 bg-light px-4"
                                    placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control border-0 bg-light px-4"
                                    placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" name="subject" class="form-control border-0 bg-light px-4"
                                    placeholder="Subject" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control border-0 bg-light px-4 py-3" rows="4"
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d217759.99380853778!2d74.3343893!3d31.482940349999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C%20Punjab!5e0!3m2!1sen!2s!4v1686776603008!5m2!1sen!2s"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/WTPU.png" alt="">
                    <img src="img/findmebgpng.png" alt="">
                    <img src="img/PBACS.png" alt="">
                    <img src="img/smileenhancerlogo2.png" alt="">
                    <img src="img/easymed.jpg" alt="">
                    <img src="img/bodymeasureAI.png" alt="">
                    <img src="img/VISIFACE.png" alt="">
                    <img src="img/weapon detection2.png" alt="">
                    <img src="img/automailer.png" alt="">
                    <img src="img/videogen.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-custom-dark p-4">
                        <a href="index.php" class="navbar-brand">
                            <h1 class="m-0 text-white footer-title"><i class="me-2"></i>Sigma Soft AI</h1>
                        </a>
                        <p class="mt-3 mb-4">Unleashing the Power of Artificial Intelligence for Innovative Solutions.
                            Empowering Businesses with Cutting-Edge AI Technology: Sigma AI, Your Trusted Partner.</p>
                        <form action="">
                            <!-- <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                            <button class="btn btn-dark">Sign Up</button>
                        </div> -->
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <!-- <i class="bi bi-geo text-custom-dark me-2"></i>
                            <p class="mb-0">123 Street, New York, USA</p> -->
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-custom-dark me-2"></i>
                                <p class="mb-0">contact@sigmasoftai.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-custom-dark me-2"></i>
                                <p class="mb-0">+92 346 96371060</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2"
                                    href="https://www.linkedin.com/company/sigma-soft-tech" target="_blank"
                                    rel="noopener noreferrer"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https://twitter.com/SigmaSoftAI"
                                    target="_blank" rel="noopener noreferrer"><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2"
                                    href="https://www.facebook.com/profile.php?id=100094257815011" target="_blank"
                                    rel="noopener noreferrer"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https://www.instagram.com/sigmasoftai"
                                    target="_blank" rel="noopener noreferrer"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="https://youtube.com/@SigmaSoftAI"
                                    target="_blank" rel="noopener noreferrer"><i
                                        class="fab fa-youtube fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Featured Products</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="nopage.html"><i
                                        class="bi bi-arrow-right text-custom-dark me-2"></i>VisiFace</a>
                                <a class="text-light mb-2" href="nopage.html"><i
                                        class="bi bi-arrow-right text-custom-dark me-2"></i>Smile Enhancer</a>
                                <a class="text-light mb-2" href="nopage.html"><i
                                        class="bi bi-arrow-right text-custom-dark me-2"></i>Find Me</a>
                                <a class="text-light mb-2" href="nopage.html"><i
                                        class="bi bi-arrow-right text-custom-dark me-2"></i>EasyMed</a>
                                <a class="text-light mb-2" href="nopage.html"><i
                                        class="bi bi-arrow-right text-custom-dark me-2"></i>MailFlow</a>
                                <a class="text-light" href="nopage.html"><i
                                        class="bi bi-arrow-right text-custom-dark me-2"></i>Video Gen</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Company</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="index.php"><i
                                        class="bi bi-arrow-right text-custom-dark me-2"></i>Home</a>
                                <a class="text-light mb-2" href="about.html"><i
                                        class="bi bi-arrow-right text-custom-dark me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="service.html"><i
                                        class="bi bi-arrow-right text-custom-dark me-2"></i>Our Services</a>
                                <!-- <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-custom-dark me-2"></i>Our Products</a> -->
                                <!-- <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-custom-dark me-2"></i>Latest Blog</a> -->
                                <!-- <a class="text-light" href="contact.php"><i class="bi bi-arrow-right text-custom-dark me-2"></i>Contact Us</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="index.php">sigmasoftai.com</a>
                            All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a> -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>