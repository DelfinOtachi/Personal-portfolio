<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Open+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="style.css">
    <style>
    body {
        background-color: #111;
        color: #fff;
        font-family: 'Open Sans', sans-serif;
        /* Body font */
    }

    .navbar {
        /* background-color: #222; */
        background-color: rgba(34, 34, 34, 0.8);
        /* Semi-transparent navbar */
        transition: background-color 0.5s ease;
    }

    .navbar:hover {
        background-color: rgba(34, 34, 34, 1);
        /* Solid on hover */
    }
     .nav-link:hover {
        background-color: #FFC107;
        transform: translateY(-10px);

        /* Solid on hover */
    }



    .navbar-brand,
    .nav-link {
        color: #fff !important;
        font-family: 'Montserrat', sans-serif;
        font-weight: 400;
    }

    section h2+hr {
        border: none;
        height: 5px;
        background-color: yellow;
        width: 100px;
        margin: 10px auto 20px;
    }


    .home {
       /* height: 100vh; */
        background-image: url('img/1683961185888-removebg-preview.png');
        /* Replace 'your-image.jpg' with the actual image path */
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    .typed {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
    }

    .dark-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.7);
        /* Dark overlay for readability of text */
    }

    h1,
    h2 {
        font-family: 'Montserrat', sans-serif;
        /* Heading font */
        font-weight: 700;
    }


    .home h1 {
        font-size: 4rem;
        font-family: 'Montserrat', sans-serif;
        color: #f39c12;
        /* Add vibrant orange to the heading */
        text-shadow: 2px 2px 15px rgba(0, 0, 0, 0.7);
        animation: fadeInDown 2s ease-in-out;
        /* Adding animation */
    }




    .home p {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.5rem;
        color: #fff;
        text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        animation: fadeIn 3s ease-in-out;
    }

    .section {
        padding: 60px 0;
    }

    .skills .progress {
        background-color: #333;
    }

    .skills .progress-bar {
        background-color: #ff6347;
    }

    .footer {
        text-align: center;
        padding: 20px 0;
        background-color: #222;
        color: #fff;
        font-family: 'Open Sans', sans-serif;

    }

    .footer {
        font-family: 'Open Sans', sans-serif;
    }

    /* Make the background a little transparent */
    .dark-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.7);
    }

    /* Interests Section */
    .interests {
        background: #111;
        padding: 60px 0;
    }

    .interests .section-title h2 {
        color: #fff;
        font-size: 2.5rem;
        margin-bottom: 40px;
    }

    .icon-box {
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
        transition: transform 0.3s, box-shadow 0.3s;
        background-color: rgba(27, 27, 27, 0.8);
        transition: transform 0.3s ease, background-color 0.5s;
    }


    .icon-box:hover {
        transform: translateY(-10px);
        background-color: #f39c12;
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.3);
    }




    .icon-box img {
        width: 80px;
        height: 80px;
    }

    . .icon-box h3 {
        color: #fff;
        font-size: 1.2rem;
        margin-top: 15px;
        transition: color 0.3s ease;
    }

    .icon-box:hover h3 {
        color: #222;
        /* Changes text color on hover */
    }

    /* Section Titles */
    h2 {
        font-family: 'Montserrat', sans-serif;
        color: #f39c12;
        /* Vibrant orange for section headings */
        animation: slideInLeft 2s ease;
        /* Add animation */
    }

    /* Buttons */
    .btn {
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn-primary {
        /*background-color: #28a745; */
        border: none;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: blue;

        transform: scale(1.1);
    }

    .btn-warning {
        /*background-color: rgba(255, 255, 255, 0.8); */
        border: none;
    }

    .btn-warning:hover {
        /* background-color: rgba(255, 255, 255, 1); */
        background-color: yellow-orange;
        transform: scale(1.1);
    }

    /* Portfolio section animations */
    .portfolio-image {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 2s ease forwards;
    }

    .text-center {
        text-align: center;
    }

    .mb-4 {
        margin-bottom: 1.5rem;
    }

    /* Services Section */
    #services .icon-box {
        background: #222;
        padding: 30px;
        border-radius: 8px;
        transition: all 0.3s ease-in-out;
        text-align: center;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        margin-bottom: 40px;
        /* Increased margin-bottom */

    }
    .col-md-6{
      

    }

    #services .icon-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.2);
    }

    #services .icon-box .icon {
        margin-bottom: 15px;
        font-size: 40px;
        color: #f39c12;
    }

    #services .icon-box h4 {
        font-weight: 700;
        margin-bottom: 15px;
        font-size: 22px;
        color: #fff;
    }

    #services .icon-box p {
        color: #aaa;
        font-size: 15px;
    }

    /* General Styles */
    body {
        font-family: 'Montserrat', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f9;
    }

    section {
        padding: 60px 0;
        background-color: #f4f4f9;
    }

    .container {
        width: 80%;
        margin: 0 auto;
    }

    .section-title h2 {
        font-size: 2.5em;
        text-align: center;
        color: #007bff;
        /* Blue */
        margin-bottom: 10px;
    }

    .section-title p {
        text-align: center;
        font-size: 1.2em;
        color: #555;
        /* Dark gray */
    }

    .info-box {
        /* background: white;  White background */
        padding: 20px;
        text-align: left;
        color: #555;
        /* border-radius: 10; */
        /*box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); */
        transition: 0.3s;
    }

    .info-box:hover {
        background: #f9f9f9;
        /* Light hover effect */
    }

    .icon-column {
        width: 30%;
        text-align: center;
    }

    .icon-column i {
        font-size: 3em;
        /* color: #007bff;  Blue for icons */
    }

    .text-column {
        width: 70%;
        padding-left: 15px;
    }

    .text-column h3 {
        font-size: 1.4em;
        color: #007bff;
        /* Blue for titles */
        margin-bottom: 5px;
    }

    .text-column p {
        font-size: 1em;
        color: #555;
        /* Dark gray */
    }

    /* WhatsApp Special Colors */
    .info-box a {
        text-decoration: none;
    }

    .info-box a:hover .icon-column i {
        color: #25D366;
        /* WhatsApp green on hover */
    }

    /* Form Styles */
    .php-email-form {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 1em;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .form-control:focus {
        outline: none;
        border-color: #007bff;
        /* Blue border on focus */
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .text-center button {
        background-color: #ffc107;
        /* Yellow */
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 1.2em;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .text-center button:hover {
        background-color: #e0a800;
        /* Darker yellow on hover */
    }

    /* Loading, Error, and Success messages */
    .loading,
    .error-message,
    .sent-message {
        display: none;
        text-align: center;
    }

    .loading {
        color: #007bff;
        font-size: 1.2em;
    }

    .error-message {
        color: red;
    }

    .sent-message {
        color: green;
    }
    .social-icons {
    display: flex;
    justify-content: center;
    flex-wrap: wrap; /* Allow icons to wrap */
    margin-top: 1rem; /* Space above the icons */
}

.social-icons a {
    font-size: 2rem; /* Adjust size as needed */
    text-decoration: none; /* Remove underline */
    margin: 0.5rem; /* Space between icons */
    flex: 0 1 auto; /* Allow items to shrink but not grow */
}


    /* Responsive Layout */
    @media (max-width: 768px) {
        .row .col-md-6 {
            margin-bottom: 30px;
        }

        .info-box {
            padding: 20px;
        }

        .section-title h2 {
            font-size: 2em;
        }

        .icon-column,
        .text-column {
            width: 100%;
            text-align: center;
        }

        .text-column {
            padding-left: 0;
        }
    }

    /* Adding custom animations */
    @keyframes fadeInDown {
        0% {
            opacity: 0;
            transform: translateY(-50px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(50px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes slideInLeft {
        0% {
            opacity: 0;
            transform: translateX(-50px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }
    @media (max-width: 576px) {
    .social-icons a {
        font-size: 1.5rem; /* Smaller icons on small screens */
    }
}

    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-3">
        <div class="container">
            <a class="navbar-brand" href="#">My Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Home Section -->
   <!-- Home Section -->
<section id="home" class="home text-center bg-dark" data-aos="zoom-in" style="position: relative; top:0; hight:100">
    <div class="dark-overlay"></div>
    <div class="container position-relative ">
        <h1><span class="text-primary">Hi</span> I am Delfin Otachi</h1>
        <p class="lead">A highly skilled and motivated web developer who delivers the best quality and scalable software for your business.</p>
        <p class="lead">
            <span class="typed text-warning" id="typed"></span>
        </p>
        <a href="#" class="btn btn-primary" style="width:30%; font-weight:200;color:white;">
            <i class=""></i> Resume
        </a>

       <!-- Social Icons -->
<div class="social-icons mt-3 d-flex justify-content-center flex-wrap">
    <a href="https://www.linkedin.com/in/your-profile" target="_blank" class="text-white mx-2" style="font-size: 2rem;">
        <i class="fab fa-linkedin"></i>
    </a>
    <a href="https://wa.me/your-number" target="_blank" class="text-white mx-2" style="font-size: 2rem;">
        <i class="fab fa-whatsapp"></i>
    </a>
    <a href="https://github.com/your-username" target="_blank" class="text-white mx-2" style="font-size: 2rem;">
        <i class="fab fa-github"></i>
    </a>
</div>

    </div>
</section>



    <!-- About Section -->
    <!-- About Section with AOS -->
    <section id="about" class="section bg-dark" data-aos="fade-up" style="margin">
        <div class="container">
            <h2 class="text-center" data-aos="fade-down">About Me</h2>
            <hr class="bg-primary">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <img src="img/Snapcha2.jpg" alt="about Image" class="img-fluid rounded"
                        style="height:300px; width:80%;object-fit:contain;">
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <p class="text-center">
                    I am a passionate fullstack developer with expertise in PHP, Laravel, React, Vue, and modern CSS frameworks like Bootstrap and Tailwind. My experience includes designing and building responsive web applications that enhance user experiences and drive business results. I thrive in collaborative environments and enjoy tackling complex challenges, always striving to implement best practices and keep up with the latest technologies in the industry
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <!-- ======= Interests Section ======= -->
    <section id="interests" class="interests bg-black" style=" padding: 60px 0;">
        <div class="container">
            <div class="section-title text-center">
                <h2 style="color: #f39c12; margin-bottom: 40px; position:relative;"> My Skills</h2>
                <hr class="bg-primary" style="color: #f39c12;">
            </div>

            <div class="row">
                <!-- Laravel -->
                <div class="col-lg-3 col-md-4 text-center mb-4">
                    <div class="icon-box p-3" style="background: #1b1b1b; border-radius: 8px;">
                        <img src="https://www.svgrepo.com/show/353985/laravel.svg" style="width: 80px; height: 80px;"
                            alt="Laravel">
                        <h3 style="color: #fff; font-size: 1.2rem; margin-top: 15px;">Laravel</h3>
                    </div>
                </div>

                <!-- PHP -->
                <div class="col-lg-3 col-md-4 text-center mb-4">
                    <div class="icon-box p-3" style="background: #1b1b1b; border-radius: 8px;">
                        <img src="https://www.php.net/images/logos/new-php-logo.svg" style="width: 80px; height: 80px;"
                            alt="PHP">
                        <h3 style="color: #fff; font-size: 1.2rem; margin-top: 15px;">PHP</h3>
                    </div>
                </div>

                <!-- React JS -->
                <div class="col-lg-3 col-md-4 text-center mb-4">
                    <div class="icon-box p-3" style="background: #1b1b1b; border-radius: 8px;">
                        <img src="https://img.icons8.com/?size=80&id=viH7JJy51bHj&format=png"
                            style="width: 80px; height: 80px;" alt="React">
                        <h3 style="color: #fff; font-size: 1.2rem; margin-top: 15px;">React JS</h3>
                    </div>
                </div>

                <!-- jQuery -->
                <div class="col-lg-3 col-md-4 text-center mb-4">
                    <div class="icon-box p-3" style="background: #1b1b1b; border-radius: 8px;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="80" height="80">
    <path fill="none" d="M0 0h24v24H0z"/>
    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-2c0-1.1-.9-2-2-2H8v-1c0-1.1.9-2 2-2h2V7h-1c-1.1 0-2-.9-2-2V4.41c2.93-.89 6.12.26 7.79 2.61C19.87 10.33 19.43 15.68 17.9 17.39z" fill="#fff"/>
</svg>

                        <h2 style="color: #fff; font-size: 1.2rem; margin-top: 15px;">API Integration</h2>
                    </div>
                </div>

                <!-- JavaScript -->
                <div class="col-lg-3 col-md-4 text-center mb-4">
                    <div class="icon-box p-3" style="background: #1b1b1b; border-radius: 8px;">
                        <img src="https://www.svgrepo.com/show/349419/javascript.svg" style="width: 80px; height: 80px;"
                            alt="JavaScript">
                        <h3 style="color: #fff; font-size: 1.2rem; margin-top: 15px;">JavaScript</h3>
                    </div>
                </div>

                <!-- HTML -->
                <div class="col-lg-3 col-md-4 text-center mb-4">
                    <div class="icon-box p-3" style="background: #1b1b1b; border-radius: 8px;">
                        <img src="https://www.svgrepo.com/show/303205/html-5-logo.svg"
                            style="width: 80px; height: 80px;" alt="HTML">
                        <h3 style="color: #fff; font-size: 1.2rem; margin-top: 15px;">HTML</h3>
                    </div>
                </div>

                <!-- CSS -->
                <div class="col-lg-3 col-md-4 text-center mb-4">
                    <div class="icon-box p-3" style="background: #1b1b1b; border-radius: 8px;">
                        <img src="img/mpesa.png"
                            style="width: 80px; height: 80px;" alt="CSS">
                        <h2 style="color: #fff; font-size: 1.2rem; margin-top: 15px;">M-PESA INTEGRATION</h2>
                    </div>
                </div>

                <!-- Vue JS -->
                <div class="col-lg-3 col-md-4 text-center mb-4">
                    <div class="icon-box p-3" style="background: #1b1b1b; border-radius: 8px;">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Vue.js_Logo_2.svg/512px-Vue.js_Logo_2.svg.png"
                            style="width: 80px; height: 80px;" alt="Vue JS">
                        <h3 style="color: #fff; font-size: 1.2rem; margin-top: 15px;">Vue JS</h3>
                    </div>
                </div>

                <!-- CodeIgniter -->
                <div class="col-lg-3 col-md-4 text-center mb-4">
                    <div class="icon-box p-3" style="background: #1b1b1b; border-radius: 8px;">
                        <img src="https://cdn.worldvectorlogo.com/logos/codeigniter.svg"
                            style="width: 80px; height: 80px;" alt="CodeIgniter">
                        <h3 style="color: #fff; font-size: 1.2rem; margin-top: 15px;">CodeIgniter</h3>
                    </div>
                </div>

                <!-- Bootstrap -->
                <div class="col-lg-3 col-md-4 text-center mb-4">
                    <div class="icon-box p-3" style="background: #1b1b1b; border-radius: 8px;">
                        <img src="https://cdn.worldvectorlogo.com/logos/bootstrap-5-1.svg"
                            style="width: 80px; height: 80px;" alt="Bootstrap">
                        <h3 style="color: #fff; font-size: 1.2rem; margin-top: 15px;">Bootstrap</h3>
                    </div>
                </div>

                <!-- Git -->
                <div class="col-lg-3 col-md-4 text-center mb-4">
                    <div class="icon-box p-3" style="background: #1b1b1b; border-radius: 8px;">
                        <img src="https://cdn.worldvectorlogo.com/logos/git.svg" style="width: 80px; height: 80px;"
                            alt="Git">
                        <h3 style="color: #fff; font-size: 1.2rem; margin-top: 15px;">Git</h3>
                    </div>
                </div>

                <!-- MySQL -->
                <div class="col-lg-3 col-md-4 text-center mb-4">
                    <div class="icon-box p-3" style="background: #1b1b1b; border-radius: 8px;">
                        <img src="https://cdn.icon-icons.com/icons2/2699/PNG/512/mysql_logo_icon_169941.png"
                            style="width: 80px; height: 80px;" alt="MySQL">
                        <h3 style="color: #fff; font-size: 1.2rem; margin-top: 15px;">MySQL</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Portfolio Section -->
    <section id="portfolio" class="section bg-dark" style="color:white; ">
        <div class="container">
            <h2 class="text-center"><span class="text-primary">My</span> Works</h2>
            <hr class="bg-white">
            <div class="section-title">

            </div>
            <!-- ======= Portfolio Details ======= -->

            <div class="row">

                <div class="col-lg-6 port" style="margin-bottom:30px;">
                    <img src="img/com.png" alt="" class="img-fluid portfolio-image">
                    <p style="margin:0;">Ecommerce website made with PHP, Bootstrap, HTML, and CSS</p>
                    <div class="details d-flex">
                        <!-- Github button -->
                        <a href="#" class="btn btn-primary">
                            <i class="bi bi-github"></i> GitHub Repository
                        </a>
                        <!-- Live site button with margin -->
                        <a href="http://kaysretail.atwebpages.com/" class="btn btn-warning ms-2 text-light text-light">
                            <i class='bx bx-show text-light'></i> Live Site
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="img/salon.png" alt="" class="img-fluid portfolio-image">
                    <p style="margin:0;">Salon booking website made with PHP, Bootstrap, HTML, and CSS</p>
                    <div class="details d-flex">
                        <a href="#" class="btn btn-primary">
                            <i class="bi bi-github"></i> GitHub Repository
                        </a>
                        <a href="http://glowhaven.atwebpages.com/" class="btn btn-warning ms-2 text-light">
                            <i class='bx bx-show text-light'></i> Live Site
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6" style="margin-bottom:20px;">
                    <img src="img/real.png" alt="" class="img-fluid portfolio-image">
                    <p style="margin:0;">Real Estate Management System made with Laravel, Bootstrap, HTML, and CSS</p>
                    <div class="details d-flex">
                        <a href="#" class="btn btn-primary">
                            <i class="bi bi-github"></i> GitHub Repository
                        </a>
                        <a href="#" class="btn btn-warning ms-2 text-light">
                            <i class='bx bx-show text-light'></i> Live Site
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="img/news.png" alt="" class="img-fluid portfolio-image">
                    <p style="margin:0;">News website made with Laravel, Bootstrap, HTML, and CSS</p>
                    <div class="details d-flex">
                        <a href="#" class="btn btn-primary">
                            <i class="bi bi-github"></i> GitHub Repository
                        </a>
                        <a href="#" class="btn btn-warning ms-2 text-light">
                            <i class='bx bx-show text-light'></i> Live Site
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <!-- Services Section -->
    <section id="services" class="section bg-dark text-light">
        <div class="container">
            <h2 class="text-center">My Services</h2>
            <hr class="bg-white">

            <div class="row">
                <!-- Web Design -->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box bg-black">
                        <div class="icon"><i class="bx bx-paint"></i></div>
                        <h4><a href="#" style="text-decoration:none;">Web Design</a></h4>
                        <p>Crafting visually appealing and user-friendly websites that reflect your brand.</p>
                    </div>
                </div>

                <!-- Frontend Development -->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box bg-black">
                        <div class="icon"><i class="bx bx-code-alt"></i></div>
                        <h4><a href="#" style="text-decoration:none;">Frontend Development</a></h4>
                        <p>Developing responsive and high-performance user interfaces using modern frameworks.</p>
                    </div>
                </div>

                <!-- Backend Development -->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box bg-black">
                        <div class="icon"><i class="bx bx-server"></i></div>
                        <h4><a href="#" style="text-decoration:none;">Backend Development</a></h4>
                        <p>Building robust server-side applications with secure and scalable architecture.</p>
                    </div>
                </div>

                <!-- Web Hosting -->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box bg-black">
                        <div class="icon"><i class="bx bx-cloud-upload"></i></div>
                        <h4><a href="#" style="text-decoration:none;">Web Hosting</a></h4>
                        <p>Offering reliable web hosting services to keep your website live and accessible.</p>
                    </div>
                </div>

                <!-- Website Maintenance -->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box bg-black">
                        <div class="icon"><i class="bx bx-wrench"></i></div>
                        <h4><a href="#" style="text-decoration:none;">Website Maintenance</a></h4>
                        <p>Providing regular updates, security checks, and performance optimization.</p>
                    </div>
                </div>

                <!-- Software Testing -->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box bg-black">
                        <div class="icon"><i class="bx bx-bug"></i></div>
                        <h4><a href="#" style="text-decoration:none;">Software Testing</a></h4>
                        <p>Ensuring software reliability and quality with thorough testing and bug fixes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact bg-black">
        <div class="container">
            <div class="section-title">
                <h2 class="text-warning">Contact <span class="text-primary">Me</span></h2>
                <hr class="bg-white">
            </div>

            <div class="row mt-2">
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="info-box d-flex">
                        <div class="icon-column">
                            <a href="https://wa.me/+254711346265"><i class="fab fa-whatsapp text-success"
                                    ></i></a>
                        </div>
                        <div class="text-column">
                            <h3 class="text-success">WhatsApp</h3>
                            <p>Send me a message</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                    <div class="info-box d-flex">
                        <div class="icon-column">
                            <i class="fab fa-linkedin" style="color:blue; "></i>
                        </div>
                        <div class="text-column">
                            <h3>LinkedIn</h3>
                            <p>
                                <a href="https://www.linkedin.com/in/delfin-otachi-3713aa25b/" class="linkedin text-white">Visit my
                                    LinkedIn profile</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box d-flex">
                        <div class="icon-column">
                            <i class="fas fa-envelope text-warning"></i>
                        </div>
                        <div class="text-column">
                            <h3 class="text-warning">Email Me</h3>
                            <p>delfinotachi@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box d-flex">
                        <div class="icon-column">
                            <i class="fas fa-phone-alt" style="color: white;"></i>
                        </div>
                        <div class="text-column">
                            <h3 style="color: white;">Call Me</h3>
                            <p>+254711346265</p>
                        </div>
                    </div>
                </div>
            </div>

            <form action="contact.php" method="post" role="form" class="php-email-form mt-4 bg-black">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control bg-light" id="name" placeholder="Your Name"
                            required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control bg-light" name="email" id="email"
                            placeholder="Your Email" required>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control bg-light" name="subject" id="subject" placeholder="Subject"
                        required>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control bg-light" name="message" rows="5" placeholder="Message"
                        required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" name="contact_me">Send Message</button>
                </div>
            </form>

        </div>
    </section>


    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2023 Delfin Otachi. All Rights Reserved.</p>
    </footer>
    <!-- Typed.js script -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
    var typed = new Typed('#typed', {
        strings: ['webdeveloper', 'Computer Scientist'], // Strings to type
        typeSpeed: 100, // Typing speed
        backSpeed: 50, // Backspacing speed
        loop: true, // Looping the typing effect
    });
    </script>
    <script>
    const typed = new Typed('#typed', {
        strings: ["Fullstack Developer", "PHP Expert", "React Enthusiast", "UI/UX Designer"],
        typeSpeed: 70,
        backSpeed: 50,
        loop: true
    });
    </script>

    <script>
    // Initialize AOS
    AOS.init({
        duration: 1000,
        once: true
    });
    </script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>