<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fisacom Capital</title>

        <link rel="apple-touch-icon" sizes="180x180" href=" {{ asset('img/apple-touch-icon.png') }} ">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('img/site.webmanifest') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    </head>
    <body>
        <div class="container-xxl bg-white p-0">
            <!-- Spinner Start -->
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->

            <!-- Navbar & Hero Start -->
            <div class="container-xxl position-relative p-0">
                @include('layouts.header')
                <div class="container-xxl bg-primary hero-header">
                    <div class="container">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 text-center text-lg-start">
                                <h1 class="text-white mb-4 animated zoomIn">Unlocking Critical Insights for Informed Decisions</h1>
                                <p class="text-white pb-3 animated zoomIn">Gain a deeper understanding of the factors that drive success in your organization and market. We provide comprehensive research and analysis across various domains to empower you with the knowledge needed to make strategic choices.</p>
                                <a href="/our-services" class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Explore Our Research Capabilities</a>
                            </div>
                            <div class="col-lg-6 text-center text-lg-start">
                                <img class="img-fluid animated zoomIn" src="img/hero.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                @if (Route::has('login'))
                    <div class="h-14.5 hidden lg:block"></div>
                @endif
            </div>
            <!-- Navbar & Hero End -->

            <!-- About Us Start -->
            <div class="container-xxl py-6">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/about.png" alt="About Our Research Expertise">
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">About Us</div>
                            <h2 class="mb-4">Your Trusted Partner for Data-Driven Insights and Research Solutions</h2>
                            <p class="mb-4">We are a dedicated team of researchers and analysts committed to providing organizations with the knowledge they need to thrive. Through rigorous methodologies and in-depth analysis, we uncover valuable insights that empower informed decision-making and drive meaningful results across various sectors.</p>
                            <div class="row g-3 mb-4">
                                <div class="col-12 d-flex">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                        <i class="fa fa-lightbulb text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h6>Insight Generation</h6>
                                        <span>We specialize in designing and conducting research that goes beyond the surface, delivering actionable insights to address your key challenges and opportunities.</span>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                        <i class="fa fa-chart-bar text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h6>Rigorous Analysis</h6>
                                        <span>Our team employs robust analytical techniques to ensure the accuracy and reliability of our findings, providing you with data you can trust to guide your strategies.</span>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="/our-approach">Our Research Approach</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Us Start -->

            <!-- Newsletter Start -->
            <div class="container-xxl bg-primary my-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container px-lg-5">
                    <div class="row align-items-center" style="height: 250px;">
                        <div class="col-12 col-md-6">
                            <h3 class="text-white">Keep Up-to-Date with Our Latest Research and Findings</h3>
                            <small class="text-white">Sign up for our newsletter to receive regular updates on our research projects, key insights, and perspectives on various industry trends.</small>
                            <div class="position-relative w-100 mt-3">
                                <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="email" placeholder="Enter Your Email" style="height: 48px;">
                                <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-rss text-primary fs-4"></i></button>
                            </div>
                        </div>
                        <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                            <img class="img-fluid mt-5" style="max-height: 250px;" src="img/newsletter.png" alt="Stay Updated on Research">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newsletter End -->

            <!-- Service Start -->
            <div class="container-xxl py-6">
                <div class="container">
                    <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Services</div>
                        <h2 class="mb-5">Specializing in Research to Drive Your Success</h2>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded h-100">
                                <div class="d-flex justify-content-between">
                                    <div class="service-icon">
                                        <i class="fa fa-users fa-2x"></i>
                                    </div>
                                    <a class="service-btn" href="/employee-research">
                                        <i class="fa fa-arrow-right fa-2x"></i>
                                    </a>
                                </div>
                                <div class="p-5">
                                    <h5 class="mb-3">Employee & Workplace Research</h5>
                                    <span>Understanding your workforce through satisfaction surveys, engagement studies, organizational culture assessments, and more.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item rounded h-100">
                                <div class="d-flex justify-content-between">
                                    <div class="service-icon">
                                        <i class="fa fa-store fa-2x"></i>
                                    </div>
                                    <a class="service-btn" href="/customer-research">
                                        <i class="fa fa-arrow-right fa-2x"></i>
                                    </a>
                                </div>
                                <div class="p-5">
                                    <h5 class="mb-3">Customer & Market Research</h5>
                                    <span>Gaining insights into customer needs, market trends, competitor landscapes, and brand perception.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-item rounded h-100">
                                <div class="d-flex justify-content-between">
                                    <div class="service-icon">
                                        <i class="fa fa-sitemap fa-2x"></i>
                                    </div>
                                    <a class="service-btn" href="/organizational-research">
                                        <i class="fa fa-arrow-right fa-2x"></i>
                                    </a>
                                </div>
                                <div class="p-5">
                                    <h5 class="mb-3">Organizational & Operational Research</h5>
                                    <span>Analyzing internal processes, operational efficiency, and organizational structures to identify areas for improvement.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded h-100">
                                <div class="d-flex justify-content-between">
                                    <div class="service-icon">
                                        <i class="fa fa-project-diagram fa-2x"></i>
                                    </div>
                                    <a class="service-btn" href="/program-evaluation">
                                        <i class="fa fa-arrow-right fa-2x"></i>
                                    </a>
                                </div>
                                <div class="p-5">
                                    <h5 class="mb-3">Program Evaluation & Impact Assessment</h5>
                                    <span>Evaluating the effectiveness and impact of programs and initiatives through rigorous research methodologies.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item rounded h-100">
                                <div class="d-flex justify-content-between">
                                    <div class="service-icon">
                                        <i class="fa fa-chart-bar fa-2x"></i>
                                    </div>
                                    <a class="service-btn" href="/data-analytics-and-visualization">
                                        <i class="fa fa-arrow-right fa-2x"></i>
                                    </a>
                                </div>
                                <div class="p-5">
                                    <h5 class="mb-3">Data Analytics & Visualization</h5>
                                    <span>Transforming raw data into meaningful insights through advanced analytics and clear, compelling visualizations.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-item rounded h-100">
                                <div class="d-flex justify-content-between">
                                    <div class="service-icon">
                                        <i class="fa fa-bullseye fa-2x"></i>
                                    </div>
                                    <a class="service-btn" href="/custom-research-solutions">
                                        <i class="fa fa-arrow-right fa-2x"></i>
                                    </a>
                                </div>
                                <div class="p-5">
                                    <h5 class="mb-3">Custom Research Solutions</h5>
                                    <span>Tailoring research approaches and methodologies to meet your unique business challenges and objectives.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->

            <!-- Features Start -->
            <div class="container-xxl py-6">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Why Choose Us</div>
                            <h2 class="mb-4">Trusted Research Partner Delivering Actionable Insights</h2>
                            <p>We are committed to providing organizations with rigorous research and insightful analysis that drives meaningful change. Our experienced team leverages industry best practices and a client-centric approach to deliver reliable and actionable findings.</p>
                            <p>We pride ourselves on our dedication to understanding your unique needs and providing research solutions that empower you to make informed decisions and achieve your strategic objectives.</p>
                            <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="/our-approach">Our Research Philosophy</a>
                        </div>
                        <div class="col-lg-7">
                            <div class="row g-5">
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                            <i class="fa fa-search text-white"></i>
                                        </div>
                                        <h6 class="mb-0">Deep Industry Expertise</h6>
                                    </div>
                                    <span>Our team comprises experienced researchers with a strong understanding of various industries and research methodologies.</span>
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                            <i class="fa fa-check-circle text-white"></i>
                                        </div>
                                        <h6 class="mb-0">Rigorous Research Standards</h6>
                                    </div>
                                    <span>We adhere to the highest ethical and methodological standards to ensure the accuracy and reliability of our research findings.</span>
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                            <i class="fa fa-lightbulb text-white"></i>
                                        </div>
                                        <h6 class="mb-0">Actionable Insights & Recommendations</h6>
                                    </div>
                                    <span>We go beyond data collection to deliver clear, concise insights and practical recommendations that you can implement.</span>
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                            <i class="fa fa-users text-white"></i>
                                        </div>
                                        <h6 class="mb-0">Client-Centric Approach</h6>
                                    </div>
                                    <span>We prioritize understanding your unique needs and tailor our research solutions to meet your specific objectives.</span>
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                            <i class="fa fa-chart-line text-white"></i>
                                        </div>
                                        <h6 class="mb-0">Data-Driven Strategies</h6>
                                    </div>
                                    <span>Our research provides the evidence-based foundation you need to develop effective strategies and achieve measurable results.</span>
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.6s">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                            <i class="fa fa-handshake text-white"></i>
                                        </div>
                                        <h6 class="mb-0">Long-Term Partnership</h6>
                                    </div>
                                    <span>We aim to build lasting relationships with our clients, becoming a trusted partner in their ongoing success.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Features End -->

            <!-- Client Start -->
            <div class="container-xxl bg-primary my-6 py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="owl-carousel client-carousel">
                        <a href="#"><img class="img-fluid" src="img/logo-1.png" alt=""></a>
                        <a href="#"><img class="img-fluid" src="img/logo-2.png" alt=""></a>
                        <a href="#"><img class="img-fluid" src="img/logo-3.png" alt=""></a>
                        <a href="#"><img class="img-fluid" src="img/logo-4.png" alt=""></a>
                        <a href="#"><img class="img-fluid" src="img/logo-5.png" alt=""></a>
                        <a href="#"><img class="img-fluid" src="img/logo-6.png" alt=""></a>
                        <a href="#"><img class="img-fluid" src="img/logo-7.png" alt=""></a>
                        <a href="#"><img class="img-fluid" src="img/logo-8.png" alt=""></a>
                    </div>
                </div>
            </div> 
            <!-- Client End -->

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
            @include('layouts.footer')
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
</html>
