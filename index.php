<?php include 'inc/inc.seo.php' ?>
</head>

<body>

    <!-- header -->
    <?php include 'inc/inc.header.php' ?>
    <!-- header -->

    <main>
        <section id="carouselExampleIndicators" class="banner-area carousel slide mob-top" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <picture>
                        <source media="(max-width: 575px)" srcset="img/banner/reuniao-banner.jpg">
                        <!--mobile-->
                        <source media="(min-width: 576px)" srcset="img/banner/reuniao-banner.jpg">
                        <img class="d-block w-100" src="img/banner/reuniao-banner.jpg" alt="Banner 1" title="Banner 1">
                    </picture>
                    <div class="carousel-caption txt-car h-100">
                        <p>Lorem, ipsum dolor.</p>
                        <span>Lorem, ipsum.</span>
                    </div>
                </div>
                <div class="carousel-item">
                    <picture>
                        <source media="(max-width: 575px)" srcset="img/banner/construction-banner.jpg">
                        <!--mobile-->
                        <source media="(min-width: 576px)" srcset="img/banner/construction-banner.jpg">
                        <img class="d-block w-100" src="img/banner/construction-banner.jpg" alt="Banner 2"
                            title="Banner 2">
                    </picture>
                    <div class="carousel-caption txt-car h-100">
                        <p>Lorem, ipsum dolor.</p>
                        <span>Lorem, ipsum.</span>
                    </div>
                </div>
                <div class="carousel-item">
                    <picture>
                        <source media="(max-width: 575px)" srcset="img/banner/predio-banner.jpg">
                        <!--mobile-->
                        <source media="(min-width: 576px)" srcset="img/banner/predio-banner.jpg">
                        <img class="d-block w-100" src="img/banner/banner3.jpg" alt="Banner 3" title="Banner 3">
                    </picture>
                    <div class="carousel-caption txt-car h-100">
                        <p>Lorem, ipsum dolor.</p>
                        <span>Lorem, ipsum.</span>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <i class="fas fa-chevron-left"></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <i class="fas fa-chevron-right"></i>
                <span class="visually-hidden">Next</span>
            </button>
        </section>

        <section class="about-area" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="section-title text-center mb-5">
                        <h1 class="underline-title">About us</h1>
                    </div>
                    <div class="col-lg-6">
                        <p>For over 30 years, commitment to our Core Values has made Edifice Construction Company the
                            ideal building partner for the region’s most forward-thinking organizations. Our success
                            comes from a steadfast commitment to the client’s vision and a culture of balance,


                            <div class="box-icon mt-5">
                                <div class="d-flex">
                                    <img src="img/logo/icon-lista.png" alt="Professional Approach"
                                        title="Professional Approach">
                                    <div class="content">
                                        <h2>Professional Approach</h2>
                                        <p>Our approach to building sustainable facilities is based on high
                                            professionalism
                                            and delivering projects with fairness and excellence.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="box-icon mt-5">
                                <div class="d-flex">
                                    <img src="img/logo/icon-pessoa.png" alt="Expert team" title="Expert team">
                                    <div class="content">
                                        <h2>Expert team</h2>
                                        <p>We employ the best experts in construction that make our every project a
                                            reliable
                                            one. You can trust each member of Edifice team.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="box-icon mt-5">
                                <div class="d-flex">
                                    <img src="img/logo/icon-lapis.png" alt="Best solutions" title="Best solutions">
                                    <div class="content">
                                        <h2>Best solutions</h2>
                                        <p>Our company offers top-notch construction solutions to corporate and
                                            individual
                                            clients worldwide, while also covering their needs.</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center">
                        <div class="thumb">
                            <img class="img-fluid" src="img/gallery/about.jpg" alt="Sobre Nós" title="Sobre Nós">
                            <!-- <span><strong class="counter" data-val="30">30</strong> anos de <br> empresa
                            </span> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="counter-section" id="counter">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 counter-item">
                        <i class="fas fa-building"></i>
                        <span class="counter" data-target="100">0</span>
                        <p>PROJECTS ANNUALLY</p>
                    </div>
                    <div class="col-md-3 counter-item">
                        <i class="fas fa-trophy"></i>
                        <span class="counter" data-target="45">0</span>
                        <p>AWARDS</p>
                    </div>
                    <div class="col-md-3 counter-item">
                        <i class="fas fa-comments"></i>
                        <span class="counter" data-target="98">0</span>
                        <p>POSITIVE REVIEWS</p>
                    </div>
                    <div class="col-md-3 counter-item">
                        <i class="fas fa-users"></i>
                        <span class="counter" data-target="147000">0</span>
                        <p>HAPPY CUSTOMERS</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery-area section-padding" id="gallery">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <div class="section-title mb-5">
                            <h2 class="underline-title">Our Projects</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="d-flex justify-content-center">
                            <a href="img/gallery/about.jpg" data-fancybox="gallery">
                                <img src="img/gallery/gallery01.jpg" class="img-fluid gallery-image" alt="Galeria"
                                    title="Galeria">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="d-flex justify-content-center">
                            <a href="img/gallery/about.jpg" data-fancybox="gallery">
                                <img src="img/gallery/gallery02.jpg" class="img-fluid gallery-image" alt="Galeria"
                                    title="Galeria">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="d-flex justify-content-center">
                            <a href="img/gallery/about.jpg" data-fancybox="gallery">
                                <img src="img/gallery/gallery03.jpg" class="img-fluid gallery-image" alt="Galeria"
                                    title="Galeria">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="d-flex justify-content-center">
                            <a href="img/gallery/about.jpg" data-fancybox="gallery">
                                <img src="img/gallery/gallery04.jpg" class="img-fluid gallery-image" alt="Galeria"
                                    title="Galeria">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="d-flex justify-content-center">
                            <a href="img/gallery/about.jpg" data-fancybox="gallery">
                                <img src="img/gallery/gallery05.jpg" class="img-fluid gallery-image" alt="Galeria"
                                    title="Galeria">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="d-flex justify-content-center">
                            <a href="img/gallery/about.jpg" data-fancybox="gallery">
                                <img src="img/gallery/gallery06.jpeg" class="img-fluid gallery-image" alt="Galeria"
                                    title="Galeria">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="d-flex justify-content-center">
                            <a href="img/gallery/about.jpg" data-fancybox="gallery">
                                <img src="img/gallery/construction.jpg" class="img-fluid gallery-image" alt="Galeria"
                                    title="Galeria">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="d-flex justify-content-center">
                            <a href="img/gallery/about.jpg" data-fancybox="gallery">
                                <img src="img/gallery/workers.jpg" class="img-fluid gallery-image" alt="Galeria"
                                    title="Galeria">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta" id="cta">
            <div
                class="container-fluid text-white text-uppercase text-center d-flex align-items-center justify-content-between">
                <h2 class="fw-bold">If you can envision it, then we can build it.<br>Tell us more about your project!
                </h2>
                <a href="#" class="btn btn-light">Contact Us</a>
            </div>
        </section>

        <section class="services-area section-padding" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="section-title text-center mb-5">
                        <h2 class="underline-title">Our Services</h2>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="box-icon mt-5">
                            <div class="d-flex">
                                <img src="img/logo/icon-esquadro.png" alt="Professional Approach"
                                    title="Professional Approach">
                                <div class="content">
                                    <h3>PRE-CONSTRUCTION SERVICES</h3>
                                    <p>OWe take our time on initial planning before any construction begins, to balance
                                        all the financial and efficiency issues beforehand...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="box-icon mt-5">
                            <div class="d-flex">
                                <img src="img/logo/icon-pessoas2.png" alt="Professional Approach"
                                    title="Professional Approach">
                                <div class="content">
                                    <h3>GENERAL CONTRACTING</h3>
                                    <p>We have a long list of professional contractors, whom our engineers and
                                        architects enjoy to work with on a majority of our projects!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="box-icon mt-5">
                            <div class="d-flex">
                                <img src="img/logo/icon-parede.png" alt="Professional Approach"
                                    title="Professional Approach">
                                <div class="content">
                                    <h3>CONSTRUCTION SERVICES</h3>
                                    <p>Our customers love the pace/quality tempo that we show during each of the
                                        principal construction processes!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="box-icon mt-5">
                            <div class="d-flex">
                                <img src="img/logo/icon-predio.png" alt="Professional Approach"
                                    title="Professional Approach">
                                <div class="content">
                                    <h3>CONSTRUCTION MANAGEMENT</h3>
                                    <p>Construction project management is essential. We're using the most time and
                                        iterations efficient life cycles methods for that.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="box-icon mt-5">
                            <div class="d-flex">
                                <img src="img/logo/logo-casa.png" alt="Professional Approach"
                                    title="Professional Approach">
                                <div class="content">
                                    <h3>BUILDING INFORMATION MODELING (BIM)</h3>
                                    <p>Oftentimes physical and functional essence of any construction project needs to
                                        be represented digitally, in a 3D model format.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="box-icon mt-5">
                            <div class="d-flex">
                                <img src="img/logo/icon-lapis.png" alt="Professional Approach"
                                    title="Professional Approach">
                                <div class="content">
                                    <h3>DESIGN-BUILD</h3>
                                    <p>If a project is not too complex, we may hire a designer-builder type of
                                        contractor, to make the longevity of the construction shorter.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="box-icon mt-5">
                            <div class="d-flex">
                                <img src="img/logo/icon-custo.png" alt="Professional Approach"
                                    title="Professional Approach">
                                <div class="content">
                                    <h3>COST CONTAINMENT</h3>
                                    <p>It is vital for any contractor not to exceed the budget and that is why we pay
                                        utmost attention to cost containment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="box-icon mt-5">
                            <div class="d-flex">
                                <img src="img/logo/icon-lista.png" alt="Professional Approach"
                                    title="Professional Approach">
                                <div class="content">
                                    <h3>QUALITY ASSURANCE</h3>
                                    <p>Every project we work on is checked for quality assurance to satisfy the needs of
                                        the modern society.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="box-icon mt-5">
                            <div class="d-flex">
                                <img src="img/logo/icon-pessoa.png" alt="Professional Approach"
                                    title="Professional Approach">
                                <div class="content">
                                    <h3>EQUIPMENT INSTALLATION</h3>
                                    <p>Our professional team can install all kinds of equipment in the finished building
                                        as a part of post-construction services.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="plains-area" id="plains">
            <div class="container">
                <div class="row align-items-stretch">
                    <div class="section-title text-center mb-5">
                        <h2 class="underline-title">Pricing</h2>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card text-center shadow h-100">
                            <h3>STARTER</h3>
                            <p>$14.89<span class="fs-6">/monthly</span></p>
                            <hr>
                            <ul class="list-unstyled">
                                <li>Construction Planning</li>
                                <li>Cost Containment</li>
                                <li>General Contracting</li>
                                <li>Phone Consultation</li>
                            </ul>
                            <a href="#" class="btn btn-warning">BUY NOW!</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card text-center shadow h-100 position-relative">
                            <div class="badge text-white position-absolute top-0 start-50 translate-middle">
                                MOST POPULAR</div>
                            <h3>STANDARD</h3>
                            <p>$32.89<span class="fs-6">/monthly</span></p>
                            <hr>
                            <ul class="list-unstyled">
                                <li>Pre-construction Services</li>
                                <li>Construction Administration</li>
                                <li>Virtual Design</li>
                                <li>Project Management</li>
                            </ul>
                            <a href="#" class="btn btn-warning">BUY NOW!</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card text-center shadow h-100">
                            <h3>BUSINESS</h3>
                            <p>$76.89<span class="fs-6">/monthly</span></p>
                            <hr>
                            <ul class="list-unstyled">
                                <li>Construction Services</li>
                                <li>Self-perform</li>
                                <li>Construction management</li>
                                <li>Cost Estimation</li>
                            </ul>
                            <a href="#" class="btn btn-warning">BUY NOW!</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card text-center shadow h-100">
                            <h3>PROFESSIONAL</h3>
                            <p>$89.89<span class="fs-6">/monthly</span></p>
                            <hr>
                            <ul class="list-unstyled">
                                <li>Design-build</li>
                                <li>Equipment Installation</li>
                                <li>Quality Assurance</li>
                                <li>Green Construction</li>
                            </ul>
                            <a href="#" class="btn btn-warning">BUY NOW!</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonial-area fix" id="testimonial">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="section-title text-center">
                        <h2 class="underline-title">WHAT PEOPLE SAY</h2>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- Depoimento 1 -->
                                <div class="carousel-item active text-center">
                                    <div class="testimonial-icon mb-4">
                                        <img src="img/gallery/testimonialperson1.png" class="testimonial-img"
                                            alt="Jane Smith">
                                    </div>
                                    <div class="testimonial-caption">
                                        <p>For 22 years, we have partnered with Edifice on a variety of projects, and
                                            each time they are
                                            completed on time and on budget. Our relationship is built on quality and
                                            trust. We recommend them
                                            for any job—big or small.</p>
                                        <h5 class="testimonial-name">JANE SMITH</h5>
                                    </div>
                                </div>
                                <!-- Depoimento 2 -->
                                <div class="carousel-item text-center">
                                    <div class="testimonial-icon mb-4">
                                        <img src="img/gallery/testimonialperson2.jpg" class="testimonial-img"
                                            alt="David Jonathan">
                                    </div>
                                    <div class="testimonial-caption">
                                        <p>or 22 years, we have partnered with Edifice on a variety of projects, and
                                            each time they are
                                            completed on time and on budget. Our relationship is built on quality and
                                            trust. We recommend them
                                            for any job—big or small.</p>
                                        <h5 class="testimonial-name">DAVID JONATHAN</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0"
                                    class="active"></button>
                                <button type="button" data-bs-target="#testimonialCarousel"
                                    data-bs-slide-to="1"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="recent-news py-5" id="news">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="section-title text-center">
                        <h2 class="underline-title">Recent News</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="news-card">
                                <img src="img/gallery/construction.jpg" class="img-fluid" alt="Building construction">
                                <h4>667 CONGRESS STREET PROJECT IS FINISHED!</h4>
                                <p><em>Jan. 20, 2018</em> by Brian Williamson</p>
                                <p>Today we commemorated the completion of steel erection at the 667 Congress Street
                                    Apartments project...</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="news-card">
                                <img src="img/gallery/blueprint.jpg" class="img-fluid"
                                    alt="Engineers at construction site">
                                <h4>RIBBON “CUT” TO OPEN NEW BUS CENTER</h4>
                                <p><em>Jan. 20, 2018</em> by Brian Williamson</p>
                                <p>Yesterday was a big day for the City of Burlington as a Green Mountain Transit bus
                                    literally drove through the ribbon...</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="news-card">
                                <img src="img/gallery/workers.jpg" class="img-fluid" alt="Cranes at sunset">
                                <h4>NEW DOUBLERED RESIDENCE FACILITY</h4>
                                <p><em>Jan. 20, 2018</em> by Brian Williamson</p>
                                <p>Last month, our construction company turned over the 110,000-square-foot, 237-bed Fox
                                    Run at Fulton housing facility...</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>

    <iframe src="<?php echo CONF_SITE_MAP_IFRAME;?>" id="local" width="100%" height="450" frameborder="0" style="border:0;"
        allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/slick.min.js"></script>

    <!-- footer -->
    <?php include 'inc/inc.footer.php' ?>
    <!-- footer -->

    <?php include 'inc/inc.js.php' ?>
    <!-- JS here -->

</body>

</html>