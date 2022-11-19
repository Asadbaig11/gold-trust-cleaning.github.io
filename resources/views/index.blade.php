@extends('layouts.default_layout')

@section('content')

        <!-- Pre Loader Start -->
        <div class="loader-content">
            <div class="d-table">
                <div class="d-table-cell">
                    <div id="loading-center">
                        <div id="loading-center-absolute">
                            <div class="object" id="object_one"></div>
                            <div class="object" id="object_two"></div>
                            <div class="object" id="object_three"></div>
                            <div class="object" id="object_four"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pre Loader End -->

        <!-- Header Section Start -->
        <div class="header-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="header-widget">
                                <ul>
                                    <li>
                                        <i class="icofont-clock-time"></i>
                                        Sun - Thu : 10:00AM - 06:00PM
                                    </li>
                                    <li>
                                        <i class="icofont-location-pin"></i>
                                        4615 101A Avenue Unit 06 NW, Edmonton, AB, Canada, T6A 0L3
                                    </li>
                                    <li>
                                        <i class="icofont-phone"></i>
                                        <a href="tel:+880123456789">
                                            +1 780-267-1890
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="header-social text-end">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100086356337419"><i class="icofont-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>              
                    </div>
                </div>
            </div>
            <!-- Header Section End -->

        <!-- Navbar Section Start -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="{{asset('assets/img/gold_trust_logo.png')}}" class="main-logo" alt="logo">
                    <!-- <img src="{{asset('assets/img/gold_trust_logo.png')}}" class="white-logo" alt="logo"> -->
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="#home">
                            <!-- <img src="assets/img/logo.png" class="main-logo" alt="logo"> -->
                            <img src="{{asset('assets/img/gold_trust_logo.png')}}" alt="logo">
                            <!-- <h3> Gold Trust Cleaning </h3> -->
                            <!-- <h2>Gold Trust <br> <span>Cleaning</span></h2> -->
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="#home" class="nav-link dropdown-toggle active">
                                        Home
                                        <!-- <i class="icofont-rounded-right"></i> -->
                                    </a>
                                    <!-- <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link active">Home Page 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-two.html" class="nav-link">Home Page 2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-three.html" class="nav-link">Home Page 3</a>
                                        </li>
                                    </ul> -->
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="about.html" class="nav-link">About</a>
                                </li> -->
                                <li class="nav-item">
                                    <a href="#services" class="nav-link dropdown-toggle">
                                        Services
                                        <!-- <i class="icofont-rounded-right"></i> -->
                                    </a>
                                    <!-- <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="service.html" class="nav-link">Service one</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="service-two.html" class="nav-link">Services two</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="service-three.html" class="nav-link">Service three</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="service-details.html" class="nav-link">Service details</a>
                                        </li>
                                    </ul> -->
                                </li>
                                <li class="nav-item">
                                    <a href="#packages" class="nav-link dropdown-toggle">
                                        Packages
                                        <!-- <i class="icofont-rounded-right"></i> -->
                                    </a>
                                    <!-- <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog.html" class="nav-link">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-right-sidebar.html" class="nav-link">Blog Right sidebar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">Blog details</a>
                                        </li>
                                    </ul> -->
                                </li>
                                <li class="nav-item">
                                    <a href="#pricing_plan" class="nav-link dropdown-toggle">
                                        Pricing Plans
                                        <!-- <i class="icofont-rounded-right"></i> -->
                                    </a>
                                    <!-- <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="pricing.html" class="nav-link">Pricing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="testimonial.html" class="nav-link">Testimonial</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="recent-project.html" class="nav-link">Recent Project</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="404.html" class="nav-link">404 Page</a>
                                        </li>
                                    </ul> -->
                                </li>
                                <li class="nav-item">
                                    <a href="#testimonials" class="nav-link dropdown-toggle">
                                        Testimonials
                                        <!-- <i class="icofont-rounded-right"></i> -->
                                    </a>
                                    <!-- <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="team.html" class="nav-link">Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="team-two.html" class="nav-link">Team two</a>
                                        </li>
                                    </ul> -->
                                </li>
                                <li class="nav-item">
                                    <a href="#contact" class="nav-link">Contact</a>
                                </li>
                            </ul>
                            <!-- <div class="navbar-button">
                                <a href="testimonial.html">Get Quote</a>
                            </div> -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar Section End -->

        <!-- Home Section Start -->
        <div id="home" class="home-section">            
            <div class="home-slider-area owl-carousel owl-theme">
                <div class="home-slider-item items-bg1">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container">
                                <div class="home-text">
                                    <h1>Your Hygienic Home Our Responsibility</h1>
                                    <p>Relax and leave the cleaning to a Pro.</p>
                                    
                                    <!-- <div class="theme-button">
                                        <a href="about.html" class="default-btn active-btn">know More</a>
                                        <a href="contact.html" class="default-btn">Get Started</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-slider-item items-bg2">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container">
                                <div class="home-text">
                                    <h1>We provide High Quality Service</h1>
                                    <p>Commit to making your home sparkle and shine.</p>
                                    
                                    <!-- <div class="theme-button">
                                        <a href="about.html" class="default-btn active-btn">know More</a>
                                        <a href="contact.html" class="default-btn">Get Started</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-slider-item items-bg3">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container">
                                <div class="home-text">
                                    <h1>Our Working Process is Unique</h1>
                                    <p>Quick and efficient with a solo specialist, or an expert team of two.</p>
                                    
                                    <!-- <div class="theme-button">
                                        <a href="about.html" class="default-btn active-btn">know More</a>
                                        <a href="contact.html" class="default-btn">Get Started</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Section End -->

        <!-- Service Section Start -->
        <section id="services" class="service-section pt-100 pb-100 mb-100">
            <div class="container">
                <div class="section-head text-center">
                    <h2>Gold Trust Cleaning Provided <span>Services</span></h2>
                    <p>When your home is in need of a professional cleaning, you don’t want any cleaner. We’re a residential cleaning service providers that doesn’t stop until the cleaning job is done right.
                        Our team will not only compete their work in a timely matter, they will go above and & beyond to leave you with a smile..</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="service-card">
                            <i class="flaticon-clean-house"></i>
                            <h3>Residential Cleaning</h3>
                            <p>Looking for a one-time cleaning or something more frequent? Our residential cleaning team will get your home looking brand new.</p>

                            <div class="theme-button">
                                <!-- <a href="service-details.html" class="default-btn">Read More</a> -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="service-card active-service">
                            <i class="flaticon-wiper"></i>
                            <h3>Move-Out & Move-In Cleaning​</h3>
                            <p>Moving is always a struggle, we’re here to make the transition easier for you. We’ll get your new place ready, or give your old place one final scrub down.​</p>

                            <div class="theme-button">
                                <!-- <a href="service-details.html" class="default-btn">Read More</a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="service-card">
                            <i class="flaticon-spray"></i>
                            <h3>Commercial Cleaning​</h3>
                            <p>No one wants to work in a dingy, dirty office. We are able to keep your space fresh with a daily, weekly, or bi-weekly clean.​</p>

                            <div class="theme-button">
                                <!-- <a href="service-details.html" class="default-btn">Read More</a> -->
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="service-card">
                            <i class="flaticon-icon-1584892"></i>
                            <h3>Professional Cleaning</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc.</p>

                            <div class="theme-button">
                                <a href="service-details.html" class="default-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="service-card">
                            <i class="flaticon-medal"></i>
                            <h3>House Cleaning</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc.</p>

                            <div class="theme-button">
                                <a href="service-details.html" class="default-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="service-card">
                            <i class="flaticon-credit-card"></i>
                            <h3>Office Cleaning</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc.</p>

                            <div class="theme-button">
                                <a href="service-details.html" class="default-btn">Read More</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- Service Section End -->

        <!-- Areas Section -->
        <section class="service-section pt-100 pb-100 mt-100 mb-100">
            <div class="container">
                <div class="section-head text-center">
                    <h2>Cleaning <span>Canada</span></h2>
                </div>
                <div class="row">
                    <div class="elementor-widget-container text-center">
                        <ul class="elementor-icon-list-items elementor-inline-items">
                            <li class="elementor-icon-list-item elementor-inline-item p-3">
                                <!-- <a href="https://fussycleaning.ca/locations/edmonton/"> -->
                                    <span class="elementor-icon-list-icon">
                                        <i class="fa-solid fa-circle-check"></i> </span>
                                    <span class="elementor-icon-list-text">Southeast Edmonton</span>
                                <!-- </a> -->
                            </li>
                            <li class="elementor-icon-list-item elementor-inline-item p-3">
                                <!-- <a href="https://fussycleaning.ca/locations/sherwood-park/"> -->
                                    <span class="elementor-icon-list-icon">
                                        <i class="fa-solid fa-circle-check"></i> </span>
                                    <span class="elementor-icon-list-text">Beaumont</span>
                                <!-- </a> -->
                            </li>
                            <li class="elementor-icon-list-item elementor-inline-item p-3">
                                <!-- <a href="https://fussycleaning.ca/locations/st-albert/"> -->
                                    <span class="elementor-icon-list-icon">
                                        <i class="fa-solid fa-circle-check"></i> </span>
                                    <span class="elementor-icon-list-text">Downtown Edmonton</span>
                                <!-- </a> -->
                            </li>
                            <li class="elementor-icon-list-item elementor-inline-item p-3">
                                <!-- <a href="https://fussycleaning.ca/locations/stony-plain/"> -->
                                    <span class="elementor-icon-list-icon">
                                        <i class="fa-solid fa-circle-check"></i> </span>
                                    <span class="elementor-icon-list-text">Stony Plain</span>
                                <!-- </a> -->
                            </li>
                            <li class="elementor-icon-list-item elementor-inline-item p-3">
                                <!-- <a href="https://fussycleaning.ca/locations/leduc/"> -->
                                    <span class="elementor-icon-list-icon">
                                        <i class="fa-solid fa-circle-check"></i> </span>
                                    <span class="elementor-icon-list-text">Edmonton</span>
                                <!-- </a> -->
                            </li>
                            <li class="elementor-icon-list-item elementor-inline-item p-3">
                                <!-- <a href="https://fussycleaning.ca/locations/fort-saskatchewan/"> -->
                                    <span class="elementor-icon-list-icon">
                                        <i class="fa-solid fa-circle-check"></i> </span>
                                    <span class="elementor-icon-list-text">Sherwood Park</span>
                                <!-- </a> -->
                            </li>
                            <li class="elementor-icon-list-item elementor-inline-item p-3">
                                <!-- <a href="https://fussycleaning.ca/locations/spruce-grove/"> -->
                                    <span class="elementor-icon-list-icon">
                                        <i class="fa-solid fa-circle-check"></i> </span>
                                    <span class="elementor-icon-list-text">Wetaskiwin</span>
                                <!-- </a> -->
                            </li>
                            <li class="elementor-icon-list-item elementor-inline-item p-3">
                                <span class="elementor-icon-list-icon">
                                    <i class="fa-solid fa-circle-check"></i> </span>
                                <span class="elementor-icon-list-text">Spruce Grove</span>
                            </li>
                            <li class="elementor-icon-list-item elementor-inline-item p-3">
                                <span class="elementor-icon-list-icon">
                                    <i class="fa-solid fa-circle-check"></i> </span>
                                <span class="elementor-icon-list-text">Camrose</span>
                            </li>
                            <li class="elementor-icon-list-item elementor-inline-item p-3">
                                <span class="elementor-icon-list-icon">
                                    <i class="fa-solid fa-circle-check"></i> </span>
                                <span class="elementor-icon-list-text">Leduc</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Areas Section End -->

        <!-- Experties Section -->
        <section class="experties-section pt-100 pb-100 mt-100 mb-100">
            <div class="container">
                <div class="section-head text-center ">
                    <h2>Gold Trust Cleaning Goes <span>Above & Beyond</span></h2>
                </div>
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="{{asset('assets/img/experties/window-cleaning.jpg')}}" alt="team member">
                            </div>
                            <div class="team-text">
                                <h4>Window Cleaning</h4>
                                <p>Enjoy a streak-free shine on your windows</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="{{asset('assets/img/experties/dish-wash.jpg')}}" alt="team member">
                            </div>
                            <div class="team-text">
                                <h4>Dishwashing</h4>
                                <p>Soaking is good for the dishes, but not when they have been there all week, let us get that sink clean and clear of clutter!</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="{{asset('assets/img/experties/laundry.png')}}" alt="team member">
                            </div>
                            <div class="team-text">
                                <h4>Laundry Service</h4>
                                <p>We get it, you’re busy and probably don’t love doing all the sorting, washing, & folding. Let us keep your dirty laundry under control.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="{{asset('assets/img/experties/organizing.jpg')}}" alt="team member">
                            </div>
                            <div class="team-text">
                                <h4>De-Cluttering & Organizing</h4>
                                <p>Is the pantry getting a little crowded? If you’re constantly having trouble finding things when you need them a quick reorganization is what you need.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="{{asset('assets/img/experties/upholstery.jpg')}}" alt="team member">
                            </div>
                            <div class="team-text">
                                <h4>Upholstery Cleaning</h4>
                                <p>Keeping your furniture free of dirt</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="{{asset('assets/img/experties/carpet.jpg')}}" alt="team member">
                            </div>
                            <div class="team-text">
                                <h4>Carpet Cleaning</h4>
                                <p>Have a pesky stain? Or does your carpet not pop as much as it used to? We’ve got you covered.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Experties Section End -->

        <!-- Process Section Start -->
        <div class="process-section pt-100 pb-100 mt-100 mb-100">
            <div class="container">
                <div class="section-head text-center">
                    <h2>When We Say Full Service Cleaning, <span>We Mean It:</span></h2>
                </div>

                <div class="row service-cleaning">
                    <div class="col-md-4 col-sm-6">
                        <div class="process-card">
                            <i class="icofont-travelling"></i>
                            <h3>Move Out Cleaning</h3>
                            <p>When you are moving out or moving into a new home, getting a deep cleaning is essential. Sometimes it’s to get your security deposit back, or it’s negotiated into your purchase contract. Fussy Cleaning will take that task off your list so you can move out with one less thing to worry about!</p>
                            <!-- <img src="assets/img/process-pattern-2.png" alt="arrow"> -->
                        </div>
                    </div> 
                    
                    <div class="col-md-4 col-sm-6">
                        <div class="process-card">
                            <i class="icofont-people"></i>
                            <h3>Before & After Party Clean-Up</h3>
                            <p>This service has become a hit as a gift, but it’s just as valuable if you’re hosting a get together yourself. Worry about entertaining your guests, and not that you forgot to dust the bannisters.</p>
                            <!-- <img src="assets/img/process-pattern-2.png" alt="arrow"> -->
                        </div>
                    </div> 

                    <div class="col-md-4 col-sm-6">
                        <div class="process-card">
                            <i class="icofont-under-construction-alt"></i>
                            <h3>Pre & Post Construction Cleaning</h3>
                            <p>For both residential & commercial clients, keep that freshly completed home looking it’s best. No one likes to walk through a gorgeous new home, that’s covered in dust.</p>
                        </div>
                    </div> 

                    <div class="col-md-4 col-sm-6 offset-sm-3 offset-md-0">
                        <div class="process-card">
                            <i class="icofont-military"></i>
                            <h3>Military March Out Cleaning</h3>
                            <p>If you are getting ready to deploy or relocating. There are other things you need to be focussing on. Let us handle the cleaning.</p>
                        </div>
                    </div> 

                </div>
            </div>
        </div>
        <!-- Process Section End -->

        <!-- Why Choose Section Start -->
        <section id="packages" class="why-choose-section why-choose-bg pt-100 pb-100 mt-100 mb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 offset-lg-12 offset-md-0">
                        <div class="why-choose-text">
                            <div class="text-center">
                                <h2 class="color-white">Package of your Choice</h2>
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items elementor-inline-items">
                                        <li class="elementor-icon-list-item elementor-inline-item p-3">
                                            <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check-circle"></i> </span>
                                            <span class="elementor-icon-list-text color-white">One-time House Cleaning</span>
                                        </li>
                                        <li class="elementor-icon-list-item elementor-inline-item p-3">
                                            <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check-circle"></i> </span>
                                            <span class="elementor-icon-list-text color-white">Weekly House Cleaning</span>
                                        </li>
                                        <li class="elementor-icon-list-item elementor-inline-item p-3">
                                            <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check-circle"></i> </span>
                                            <span class="elementor-icon-list-text color-white">Bi-Weekly House Cleaning</span>
                                        </li>
                                        <li class="elementor-icon-list-item elementor-inline-item p-3">
                                            <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check-circle"></i> </span>
                                            <span class="elementor-icon-list-text color-white">Monthly House Cleaning</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="why-choose-shape">
                    <img src="assets/img/why-choose/shape-1.png" alt="shape">
                </div>
            </div>          
        </section>
        <!-- Why Choose Section End -->

        <!-- Pricing Section Start -->
        <section id="pricing_plan" class="pricing-section pt-100 pb-100 mt-100 mb-100">
            <div class="container">
                <div class="section-head text-center">
                    <h2>Our <span>Pricing Plan</span></h2>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc ut labore et dolore magna aliqua.</p> -->
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="price-card-area">
                            <div class="price-head-text">
                                <h4>2,000 Square-foot House</h4>
                                <h2>$<span>260</span></h2>
                            </div>

                            <div class="plan-features">
                                <ul>
                                    <li>
                                        <i class="icofont-check-circled"></i>
                                        Fully Satisfaction
                                    </li>
                                    <li>
                                        <i class="icofont-check-circled"></i>
                                        5 Hours 
                                    </li>
                                    <li>
                                        <i class="icofont-check-circled"></i>
                                        1 time in a week
                                    </li>
                                    <li>
                                        <i class="icofont-check-circled"></i>
                                        Full Cleaning
                                    </li>
                                    <li>
                                        <i class="icofont-check-circled"></i>
                                        All Our Equipment
                                    </li>
                                </ul>
                            </div>

                            <!-- <div class="plan-btn">
                                <a href="#">Booking Now</a>
                            </div> -->
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="price-card-area active-price">
                            <div class="price-head-text">
                                <h4>3,000 Square-foot House</h4>
                                <h2>$<span>400</span></h2>
                            </div>

                            <div class="plan-features">
                                <ul>
                                    <li>
                                        <i class="icofont-check-circled"></i>
                                        Fully Satisfaction
                                    </li>
                                    <li>
                                        <i class="icofont-check-circled"></i>
                                        7 Hours 
                                    </li>
                                    <li>
                                        <i class="icofont-check-circled"></i>
                                        2 time in a week
                                    </li>
                                    <li>
                                        <i class="icofont-check-circled"></i>
                                        Full Cleaning
                                    </li>
                                    <li>
                                        <i class="icofont-check-circled"></i>
                                        All Our Equipment
                                    </li>
                                </ul>
                            </div>

                            <!-- <div class="plan-btn">
                                <a href="#">Booking Now</a>
                            </div> -->
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 offset-md-3 col-sm-6  offset-lg-0 offset-sm-3">
                        <div class="price-card-area">
                            <div class="price-head-text">
                                <h4>4,000 Square-foot House</h4>
                                <h2>$<span>540</span></h2>
                            </div>

                            <div class="plan-features">
                                <ul>
                                    <li>
                                        <i class="icofont-check-circled"></i>
                                        Fully Satisfaction
                                    </li>
                                    <li>
                                        <i class="icofont-check-circled"></i>
                                        10 Hours 
                                    </li>
                                    <li>
                                        <i class="icofont-check-circled"></i>
                                        3 time in a week
                                    </li>
                                    <li>
                                        <i class="icofont-check-circled"></i>
                                        Full Cleaning
                                    </li>
                                    <li>
                                        <i class="icofont-check-circled"></i>
                                        All Our Equipment
                                    </li>
                                </ul>
                            </div>

                            <!-- <div class="plan-btn">
                                <a href="#">Booking Now</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Section End -->

        <!-- Room Pricing Section Start -->
        <section id="room-pricing" class="service-section pt-100 pb-100 mt-100 mb-100">
            <div class="container">
                <div class="section-head text-center">
                    <h2>Cleaning Cost Per <span>Bedroom</span></h2>
                    <p>(Strarting Prices)</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="service-card">
                            <i class="flaticon-clean-house"></i>
                            <h3>1 Bedroom</h3>
                            <p>110$</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="service-card">
                            <i class="flaticon-clean-house"></i>
                            <h3>2 Bedrooms</h3>
                            <p>126$</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="service-card">
                            <i class="flaticon-clean-house"></i>
                            <h3>3 Bedrooms</h3>
                            <p>143$</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="service-card">
                            <i class="flaticon-clean-house"></i>
                            <h3>4 Bedrooms</h3>
                            <p>175$</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="service-card">
                            <i class="flaticon-clean-house"></i>
                            <h3>5 Bedrooms</h3>
                            <p>198$</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Room Pricing Section End -->

        <!-- Counter Section Start -->
        <div class="counter-section pt-100 pb-100 mt-100 mb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="offer-text">
                            <h2>Your <span>Satisfication</span> is our Progress.</h2>
                            <div class="theme-button">
                                <!-- <a href="pricing.html" class="default-btn">Book Now</a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="counter-area">
                            <div class="row">
                                <div class="col-lg-5 col-md-3 col-6 offset-lg-1">
                                    <div class="counter-text">
                                        <h2><span class="counter">1</span>K</h2>
                                        <p>Job Done</p>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-3 col-6">
                                    <div class="counter-text">
                                        <h2><span class="counter">989</span></h2>
                                        <p>Happy Clients</p>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-3 col-6 offset-lg-1">
                                    <div class="counter-text">
                                        <h2><span class="counter">45</span></h2>
                                        <p>Experts</p>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-3 col-6">
                                    <div class="counter-text">
                                        <h2><span class="counter">12</span></h2>
                                        <p>Years of Experience</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="counter-shape">
                    <img src="assets/img/counter/1.png" alt="shape">
                    <img src="assets/img/counter/2.png" alt="shape">
                    <img src="assets/img/counter/3.png" alt="shape">
                    <img src="assets/img/counter/4.png" alt="shape">
                    <img src="assets/img/counter/5.png" alt="shape">
                    <img src="assets/img/counter/6.png" alt="shape">
                    <img src="assets/img/counter/7.png" alt="shape">
                    <img src="assets/img/counter/1.png" alt="shape">
                    <img src="assets/img/counter/8.png" alt="shape">
                    <img src="assets/img/counter/4.png" alt="shape">
                    <img src="assets/img/counter/shape-1.png" alt="bubble shape">
                    <img src="assets/img/counter/shape-1.png" alt="bubble shape">
                </div>
            </div>
        </div>
        <!-- Counter Section End -->

        <!-- Team Section Start -->
        <!-- <section class="team-section pt-100 pb-70">
            <div class="container">
                <div class="section-head text-center">
                    <h2>Our <span>Team Members</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc ut labore et dolore magna aliqua.</p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="assets/img/team/1.png" alt="team member">

                                <div class="team-social">                           
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                    <a href="#"><i class="icofont-twitter"></i></a>                  
                                    <a href="#"><i class="icofont-linkedin"></i></a>
                                    <a href="#"><i class="icofont-instagram"></i></a>                        
                                </div>
                            </div>
                            <div class="team-text">
                                <h4>John Smith</h4>
                                <p>Head of Cleaner</p>
                            </div>
                        </div>
                    </div> 
                    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="assets/img/team/2.png" alt="team member">

                                <div class="team-social">                           
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                    <a href="#"><i class="icofont-twitter"></i></a>                  
                                    <a href="#"><i class="icofont-linkedin"></i></a>
                                    <a href="#"><i class="icofont-instagram"></i></a>                        
                                </div>
                            </div>
                            <div class="team-text">
                                <h4>Marry</h4>
                                <p>Cleaner</p>
                            </div>
                        </div>
                    </div> 

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="assets/img/team/3.png" alt="team member">

                                <div class="team-social">                           
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                    <a href="#"><i class="icofont-twitter"></i></a>                  
                                    <a href="#"><i class="icofont-linkedin"></i></a>
                                    <a href="#"><i class="icofont-instagram"></i></a>                        
                                </div>
                            </div>
                            <div class="team-text">
                                <h4>John Smith</h4>
                                <p>Office Cleaner</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="assets/img/team/4.png" alt="team member">

                                <div class="team-social">                           
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                    <a href="#"><i class="icofont-twitter"></i></a>                  
                                    <a href="#"><i class="icofont-linkedin"></i></a>
                                    <a href="#"><i class="icofont-instagram"></i></a>                        
                                </div>
                            </div>
                            <div class="team-text">
                                <h4>Eve</h4>
                                <p>Assistant</p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section> -->
        <!-- Team Section End -->

        <!-- Testimonial Section Start -->
        <div id="testimonials" class="testimonial-section testimonial-bg pt-100 pb-100 mt-100 mb-100">
            <div class="testimonial-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 offset-lg-0 col-md-10 offset-md-1 col-sm-10 offset-sm-1">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                    <div class="testimonial-image-slider slider-nav text-center">
                                        <div class="sin-testiImage">
                                            <img src="{{asset('assets/img/avatar/male.png')}}" alt="Client image">
                                        </div>
                                         <div class="sin-testiImage">
                                            <img src="{{asset('assets/img/avatar/male.png')}}" alt="Client image">
                                        </div>
                                        <div class="sin-testiImage">
                                            <img src="{{asset('assets/img/avatar/female.png')}}" alt="Client image">
                                        </div>
                                        <div class="sin-testiImage">
                                            <img src="{{asset('assets/img/avatar/male.png')}}" alt="Client image">
                                        </div>
                                        <div class="sin-testiImage">
                                            <img src="{{asset('assets/img/avatar/male.png')}}" alt="Client image">
                                        </div>
                                        <!-- <div class="sin-testiImage">
                                            <img src="assets/img/testimonial/2.png" alt="Client image">
                                        </div> -->
                                    </div>
                                </div>
                            </div> 
                            <div class="testimonial-text-slider slider-for text-center">
                                <div class="sin-testiText">
                                    <h2>Anwer Zahid</h2>
                                    <!-- <span>Co-worker of 3S</span> -->
                                    <p>Absolutely. Amazing service provided at a very reasonable price. Gold Trust is now my preferred stop for all my cleaning requirements. Highly recommend them to everyone!.</p>
                                </div>
                                <div class="sin-testiText">
                                    <h2>Sahibzada Junayd Zaffar</h2>
                                    <!-- <span>Graphics Designer of 3S</span> -->
                                    <p>Best quality service at your convenience! Will Definitely recommend for everyone.</p>
                                </div>
                                <div class="sin-testiText">
                                    <h2>Tokyo Williams</h2>
                                    <!-- <span>Web Developer of 3S</span> -->
                                    <p>Did an amazing job with my suv super friendly!!! Thanks so much! 💫💫.</p>
                                </div>
                                <div class="sin-testiText">
                                    <h2>Gaurav Bansal</h2>
                                    <!-- <span>Co-worker of 3S</span> -->
                                    <p>Perfect service perfect timing and he did their job 101% I highly recommended definitely I wll use again.</p>
                                </div>
                                <div class="sin-testiText">
                                    <h2>Kim Mahe</h2>
                                    <!-- <span>Co-worker of 3S</span> -->
                                    <p>I had them detail my car. Definitely would recommend this company, my car looks great!! Thanks again guys 😀.</p>
                                </div>
                                <!-- <div class="sin-testiText">
                                    <h2>Amelia</h2>
                                    <span>SEO Expert of 3S</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do is ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices . Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                </div> -->
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
            <div class="counter-shape">
                <img src="assets/img/counter/1.png" alt="shape">
                <img src="assets/img/counter/2.png" alt="shape">
                <img src="assets/img/counter/3.png" alt="shape">
                <img src="assets/img/counter/4.png" alt="shape">
                <img src="assets/img/counter/5.png" alt="shape">
                <img src="assets/img/counter/6.png" alt="shape">
                <img src="assets/img/counter/7.png" alt="shape">
                <img src="assets/img/counter/1.png" alt="shape">
                <img src="assets/img/counter/8.png" alt="shape">
                <img src="assets/img/counter/4.png" alt="shape">
                <img src="assets/img/counter/shape-1.png" alt="bubble shape">
                <img src="assets/img/counter/shape-1.png" alt="bubble shape">
            </div>
        </div>
        <!-- Testimonial Section End -->

        <!-- Blog Section Start -->
        <!-- <section class="blog-section pt-100">
            <div class="container">
                <div class="section-head text-center">
                    <h2>Latest <span>Blogs</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc ut labore et dolore magna aliqua.</p>
                </div>


                <div class="blog-slider owl-carousel owl-theme">
                    <div class="blog-area">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/1.png" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">How to cleanroom yourself</a></h4>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    20 Feb 2021
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">John Doe</a>
                                </li>
                            </ul>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc ut labore.</p>

                            <a href="blog-details.html" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="blog-area">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/2.png" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">Enjoy the working time</a></h4>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    20 Feb 2021
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">John Doe</a>
                                </li>
                            </ul>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc ut labore.</p>

                            <a href="blog-details.html" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="blog-area">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/3.png" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">Self cleaning is the best drill</a></h4>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    20 Feb 2021
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">John Doe</a>
                                </li>
                            </ul>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc ut labore.</p>

                            <a href="blog-details.html" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="blog-area">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/1.png" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">How to cleanroom yourself</a></h4>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    20 Feb 2021
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">John Doe</a>
                                </li>
                            </ul>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc ut labore.</p>

                            <a href="blog-details.html" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="blog-area">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/2.png" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">Enjoy the working time</a></h4>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    20 Feb 2021
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">John Doe</a>
                                </li>
                            </ul>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc ut labore.</p>

                            <a href="blog-details.html" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="blog-area">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/3.png" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">Self cleaning is the best drill</a></h4>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    20 Feb 2021
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">John Doe</a>
                                </li>
                            </ul>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc ut labore.</p>

                            <a href="blog-details.html" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="blog-area">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/1.png" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="#">How to cleanroom yourself</a></h4>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    20 Feb 2021
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">John Doe</a>
                                </li>
                            </ul>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc ut labore.</p>

                            <a href="blog-details.html" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="blog-area">
                        <div class="blog-img">
                            <a href="#">
                                <img src="assets/img/blog/2.png" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="#">Enjoy the working time</a></h4>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    20 Feb 2021
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">John Doe</a>
                                </li>
                            </ul>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc ut labore.</p>

                            <a href="blog-details.html" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="blog-area">
                        <div class="blog-img">
                            <a href="#">
                                <img src="assets/img/blog/3.png" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="#">Self cleaning is the best drill</a></h4>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    20 Feb 2021
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">John Doe</a>
                                </li>
                            </ul>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc ut labore.</p>

                            <a href="blog-details.html" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>
                </div>                 
            </div>
        </section> -->
        <!-- Blog Section End -->

        <!-- Contact Section Start -->
        <div id="contact" class="contact-section pt-100 pb-100 mt-100 mb-100">
            <div class="container">
                <div class="contact-area">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="contact-img">
                                <img src="assets/img/contact-img.png" alt="contact image">      
                            </div>           
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="contact-text">
                                <div class="section-head">
                                    <h2>We Love to <span> Hear from You</span></h2>
                                    <p>Feel free and share with us. We will get you</p>
                                </div>
                                <div class="contact-form">
                                    <form id="contactForm">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        
                                            <div class="col-md-12 col-sm-6">
                                                <div class="form-group">
                                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-sm-6">
                                                <div class="form-group">
                                                    <input type="phone" name="phone" id="phone" class="form-control" required data-error="Please enter your phone number" placeholder="Your Phone Number">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        
                                            <div class="col-lg-12 col-md-12">
                                                <button type="submit" class="default-btn page-btn">
                                                    Send Message
                                                </button>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>               
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

        <!-- Footer Section Start -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/img/logo-2.png" alt="logo">
                                </a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, tur adipiscing elit, sed do eiusmod tempor contratc.</p>
                            <div class="email">
                                <form class="newsletter-form" data-bs-toggle="validator">
                                    <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required autocomplete="off">
    
                                    <button class="default-btn electronics-btn" type="submit">
                                        <i class="icofont-location-arrow"></i>
                                    </button>
    
                                    <div id="validator-newsletter" class="form-result"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget pl-40">
                            <h3>Services</h3>
                            <ul>
                                <li>
                                    <i class="icofont-simple-right"></i>
                                    <a href="service-details.html">Low Cost</a>                    
                                </li>
                                <li>
                                    <i class="icofont-simple-right"></i>
                                    <a href="service-details.html">Fastest Service</a>
                                </li>
                                <li>
                                    <i class="icofont-simple-right"></i>
                                    <a href="service-details.html">Professional Cleaning</a>
                                </li>
                                <li>
                                    <i class="icofont-simple-right"></i>
                                    <a href="service-details.html">Home Cleaning</a>
                                </li>
                                <li>
                                    <i class="icofont-simple-right"></i>
                                    <a href="service-details.html">Office Cleaning</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget pl-40">
                            <h3>Quick Links</h3>
                            <ul>
                                <li>
                                    <i class="icofont-simple-right"></i>
                                    <a href="index.html">Home</a>                 
                                </li>
                                <li>
                                    <i class="icofont-simple-right"></i>
                                    <a href="about.html">About Us</a>
                                </li>
                                <li>
                                    <i class="icofont-simple-right"></i>
                                    <a href="blog.html">Blog</a>
                                </li>
                                <li>
                                    <i class="icofont-simple-right"></i>
                                    <a href="team.html">Team</a>
                                </li>
                                <li>
                                    <i class="icofont-simple-right"></i>
                                    <a href="testimonial.html">Testimonial</a>
                                </li>
                            </ul>
                        </div>
                    </div> -->

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3>Find Us</h3>
                            <!-- <p class="find-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed</p> -->
                            <ul class="find-us">
                                <li>                                   
                                    <i class="icofont-location-pin"></i>
                                    4615 101A Avenue Unit 06 NW, Edmonton, AB, Canada, T6A 0L3    
                                </li>
                                <li>
                                    <i class="icofont-phone"></i>
                                    <a href="tel:+880123456789">
                                        +1 780-267-1890
                                    </a>
                                </li>
                                <li>
                                    <i class="icofont-ui-message"></i>
                                    <a href="mailto:info@viscous.com">
                                        Sun - Thu : 10:00AM - 06:00PM
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="container">
                    <div class="row  align-items-center">
                        <div class="col-lg-6">
                            <div class="footer-social">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100086356337419"><i class="icofont-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-linkedin"></i></a>
                                    </li>             
                                    <li>
                                        <a href="#"><i class="icofont-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="copyright-text text-end">
                                <p>&copy;2022 Viscous. All Rights Reserved By <a href="#" target="_blank">ABTechnologia</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        <!-- Back to top -->
        <div class="top-btn">
            <i class="icofont-scroll-long-up"></i>
        </div>
@stop

@section('js')

<script>
    $('#contactForm').submit(function() {
        $.ajax({
            url : '<?php echo route('sendEmail') ?>',
            type : 'GET',
            data : {
                name : $('#name').val(),
                email : $('#email').val(),
                phone : $('#phone').val(),
                message : $('#message').val(),
            },
            success : function(res) {
            },
            error : function(error) {

            },

        })
    })
</script>

@stop
