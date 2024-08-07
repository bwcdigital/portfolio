<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue waves</title>
    <!-- -----External CSS file Link----- -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hom_section_style.css">
    <link rel="stylesheet" href="team_style.css">
    <link rel="stylesheet" href="footer_style.css">
    <link rel="stylesheet" href="about_section_style.css">
    <link rel="stylesheet" href="service_section_style.css">
    <link rel="stylesheet" href="client_section_style.css">
    <link rel="stylesheet" href="contact_section_style.css">
    <link rel="stylesheet" href="project_section_style.css">
    <style>
        @media (max-width: 900px) {
            .project-container {
                flex-direction: column;
                padding: 20px;
            }

            .project-item {
                margin: 10px 0;
            }

            .project-wraper {
                width: 90%;
            }
        }
    </style>
    <!-- -----Bootstrap css link----- -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <!-- ----- Home section----- -->
    <div id="home">
        <div class="nav">
            <h1 class="logo">Blue Wave Pvt. Ltd.</h1>
            <nav class="navbar">
                <ul id="ulMenu" class="nav-list">
                    <img id="closeIcon" onclick="hideMenu()" src="images/close.png" alt="" srcset="">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li class="dropdown">
                        <a href="#services" class="dropbtn">Services</a>
                        <div class="dropdown-content">
                            <a href="#suppliers">Suppliers</a>
                            <a href="#it">IT</a>
                            <a href="#civil">Civil</a>
                            <a href="#electrical">Electrical</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#project-section" class="dropbtn">Projects</a>
                        <div class="dropdown-content">
                            <a href="#project-it">IT</a>
                            <a href="#project-civil">Civil</a>
                            <a href="#project-electrical">Electrical</a>
                        </div>
                    </li>
                    <li><a href="#client-section">Clients</a></li>
                    <li><a href="#contact-section">Contacts</a></li>
                </ul>
                <img id="slideIcon" onclick="showMenu()" src="images/menu.png" alt="" srcset="">

            </nav>
        </div>
        <div class="home-content">
            <div>
                <h1>Blue Wave Pvt. Ltd. Comapany</h1>
                <h2>Think out of the box..</h2>
                <a href="#about" class="about-btn">About Us</a>
            </div>
        </div>
    </div>

    <!-- -----Team Section----- -->
    <div id="our-team">
        <h1 class="our-team-text">Our Team</h1>
        <div class="devloper">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active "></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div id="crousel-item" class="carousel-item active">
                        <div class="it">
                            <h1 class="it-heading">IT & SOFTWARE</h1>
                        </div>
                        <div class="crousel">
                            <div class="team">
                                <div class="team-image">
                                    <img class="image" src="./images/team/Sushil.jpg" alt="First slide">
                                </div>
                                <div class="member-description">
                                    <h1 class="name">Sushil Kumar Singh</h1>
                                    <span class="description">Project Manager</span>
                                </div>
                            </div>
                            <div class="team">
                                <div class="team-image">
                                    <img class="image" src="./images/team/sumit.jpg" alt="First slide">
                                </div>
                                <div class="member-description">
                                    <h1 class="name">Sumit Kumar Yadav</h1>
                                    <span class="description">Full Stack Developer</span>
                                </div>
                            </div>
                            <div class="team">
                                <div class="team-image">
                                    <img class="image" src="./images/team/Sanjay.png" alt="First slide">
                                </div>
                                <div class="member-description">
                                    <h1 class="name">Sanjay Kumar Das</h1>
                                    <span class="description">Frontent Developer & Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="it">
                            <h1 class="it-heading">IT & SOFTWARE</h1>
                        </div>
                        <div class="crousel">
                            <div class="team">
                                <div class="team-image">
                                    <img class="image" src="./images/team/Sweksha.jpg" alt="First slide">
                                </div>
                                <div class="member-description">
                                    <h1 class="name">Swechha Yadav</h1>
                                    <span class="description">Full stack Developer</span>
                                </div>
                            </div>
                            <div class="team">
                                <div class="team-image">
                                    <img class="image" src="./images/team/Arun.jpg" alt="First slide">
                                </div>
                                <div class="member-description">
                                    <h1 class="name">Arun Kumar Yadav</h1>
                                    <span class="description">Full Stack Developer</span>
                                </div>
                            </div>
                            <div class="team">
                                <div class="team-image">
                                    <img class="image" src="./images/team/Ajay.jpg" alt="First slide">
                                </div>
                                <div class="member-description">
                                    <h1 class="name">Ajay Kumar Prajapati</h1>
                                    <span class="description">Frontent</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="it">
                            <h1 class="it-heading">Civil & Architect</h1>
                        </div>
                        <div class="crousel">
                            <div class="team">
                                <div class="team-image">
                                    <img class="image" src="./images/team/Ansu.jpg" alt="First slide">
                                </div>
                                <div class="member-description">
                                    <h1 class="name">Ansu Kumar pal</h1>
                                    <span class="description">Project Manager</span>
                                </div>
                            </div>
                            <div class="team">
                                <div class="team-image">
                                    <img class="image" src="./images/team/Neelu.jpg" alt="First slide">
                                </div>
                                <div class="member-description">
                                    <h1 class="name">Neelu Chaurasiya</h1>
                                    <span class="description">Architect</span>
                                </div>
                            </div>
                            <div class="team">
                                <div class="team-image">
                                    <img class="image Shashikant" src="./images/team/sri.jpg" alt="First slide">
                                </div>
                                <div class="member-description">
                                    <h1 class="name">Shashikant Shah</h1>
                                    <span class="description">General Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="it">
                            <h1 class="it-heading">Electrical</h1>
                        </div>
                        <div class="crousel">
                            <div class="team">
                                <div class="team-image">
                                    <img class="image" src="./images/team/Sashi.jpg" alt="First slide">
                                </div>
                                <div class="member-description">
                                    <h1 class="name">Indra Deo Yadav</h1>
                                    <span class="description">Project Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- <div class="salutation">

        </div> -->
    </div>
    <div id="our-team1">
        <h1 class="our-team-text">Our Team</h1>
        <div class="devloper">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active "></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                </ol>
                <div class="carousel-inner">
                    <div id="crousel-item" class="carousel-item active">
                        <div class="it">
                            <h1 class="it-heading">IT & SOFTWARE</h1>
                        </div>
                        <div class="crousel">
                            <div class="team">
                                <div class="team-image">
                                    <img class="image" src="./images/team/Sushil.jpg" alt="First slide">
                                </div>
                                <div class="member-description">
                                    <h1 class="name">Sushil Kumar Singh</h1>
                                    <span class="description">Project Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="it">
                            <h1 class="it-heading">IT & SOFTWARE</h1>
                        </div>
                        <div class="crousel">
                            <div class="team">
                                <div class="team-image">
                                    <img class="image" src="./images/team/sumit.jpg" alt="First slide">
                                </div>
                                <div class="member-description">
                                    <h1 class="name">Sumit Kumar Yadav</h1>
                                    <span class="description">Full Stack Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="it">
                            <h1 class="it-heading">IT & SOFTWARE</h1>
                        </div>
                        <div class="crousel">
                            <div class="team">
                                <div class="team-image">
                                    <img class="image" src="./images/team/Sanjay.png" alt="First slide">
                                </div>
                                <div class="member-description">
                                    <h1 class="name">Sanjay Kumar Das</h1>
                                    <span class="description">Frontent Developer & Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="it">
                            <h1 class="it-heading">IT & SOFTWARE</h1>
                        </div>
                        <div class="crousel">
                            <div class="team">
                                <div class="team-image">
                                    <img class="image" src="./images/team/Sweksha.jpg" alt="First slide">
                                </div>
                                <div class="member-description">
                                    <h1 class="name">Swechha Yadav</h1>
                                    <span class="description">Full Stack Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="it">
                            <h1 class="it-heading">IT & SOFTWARE</h1>
                        </div>
                        <div class="crousel">
                            <div class="team">
                                <div class="team-image">
                                    <img class="image" src="./images/team/Arun.jpg" alt="First slide">
                                </div>
                                <div class="member-description">
                                    <h1 class="name">Arun Kumar Yadav</h1>
                                    <span class="description">Full Stack Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="it">
                            <h1 class="it-heading">IT & SOFTWARE</h1>
                        </div>
                        <div class="crousel">
                            <div class="team">
                                <div class="team-image">
                                    <img class="image" src="./images/team/Ajay.jpg" alt="First slide">
                                </div>
                                <div class="member-description">
                                    <h1 class="name">Ajay Kumar Prajapati</h1>
                                    <span class="description">Frontent Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="it">
                            <h1 class="it-heading">Civil & Architect</h1>
                        </div>
                        <div class="crousel">
                            <div class="team">
                                <div class="team-image">
                                    <img class="image" src="./images/team/Ansu.jpg" alt="First slide">
                                </div>
                                <div class="member-description">
                                    <h1 class="name">Ansu Kumar pal</h1>
                                    <span class="description">Project Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="it">
                            <h1 class="it-heading">Civil & Architect</h1>
                        </div>
                        <div class="crousel">
                            <div class="team">
                                <div class="team-image">
                                    <img class="image" src="./images/team/Neelu.jpg" alt="First slide">
                                </div>
                                <div class="member-description">
                                    <h1 class="name">Neelu Chaurasiya</h1>
                                    <span class="description">Architect</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="it">
                            <h1 class="it-heading">Civil & Architect</h1>
                        </div>
                        <div class="crousel">
                            <div class="team">
                                <div class="team-image">
                                    <img class="image Shashikant" src="./images/team/sri.jpg" alt="First slide">
                                </div>
                                <div class="member-description">
                                    <h1 class="name">Shashikant Shah</h1>
                                    <span class="description">General Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="it">
                            <h1 class="it-heading">Electrical</h1>
                        </div>
                        <div class="crousel">
                            <div class="team">
                                <div class="team-image">
                                    <img class="image" src="./images/team/Sashi.jpg" alt="First slide">
                                </div>
                                <div class="member-description">
                                    <h1 class="name">Indra Deo Yadav</h1>
                                    <span class="description">Project Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <!-- -----About Section----- -->
    <div id="about" class="about-section">
        <h1 class="about-us">About Us</h1>
        <div class="about-content">
            <span class="about-text">Welcome to Blue Waves, a leading provider of comprehensive services across IT &
                Software, Civil, Architecture, and
                Electrical Engineering. Our team of dedicated professionals is committed to delivering innovative and
                efficient
                solutions tailored to meet your specific needs. With expertise in cutting-edge technology and design, we
                ensure
                top-notch IT solutions, from software development to system integration. In civil and architecture, we
                offer sustainable
                and aesthetically pleasing designs that stand the test of time. Our electrical engineering services
                provide reliable and
                safe power solutions for a wide range of applications. At Blue Waves, we pride ourselves on our
                customer-centric
                approach and a track record of successful projects. Partner with us for excellence, innovation, and
                quality
                in every endeavor.
            </span>
        </div>
    </div>

    <!-- -----Services Section----- -->
    <div id="Service-section">
        <h1 class="service-heading">Our Services</h1>
        <div class="services-container">
            <div id="suppliers" class="service-wraper">
                <h2 class="sub-heading">Suppliers</h2>
                <span class="service-content">Our company specialises in supplying a wide range of high-quality office
                    materials to various institutions, including
                    the government of Nepal, schools, and private offices. We pride ourselves on our extensive inventory
                    that includes
                    everything from basic stationery, such as pens, notebooks, and paper, to specialised equipment like
                    printers, scanners,
                    whiteboards, projectors, and shredders. Our commitment to quality ensures that all products meet
                    international
                    standards, providing durability and reliability for our clients. We also supply office furniture,
                    including ergonomic
                    chairs, desks, and filing cabinets, ensuring a comfortable and efficient work environment.
                    Additionally,
                    we offer a
                    variety of IT accessories, such as keyboards, mouse, and monitors, to support the technological
                    needs of
                    modern
                    workplaces.
                    For government contracts, we adhere strictly to all regulatory requirements and procurement
                    guidelines,
                    ensuring
                    transparency and accountability.
                    .</span>
            </div>
            <div id="it" class="service-wraper">
                <h2 class="sub-heading">IT</h2>
                <span class="service-content">Our company specialises in delivering comprehensive IT and software
                    solutions
                    tailored to meet the diverse needs of
                    businesses and organisations. We offer a range of services including custom software development, IT
                    consulting, cloud
                    computing solutions, and robust cybersecurity measures. Our expert team handles specific tasks such
                    as
                    developing
                    enterprise resource planning (ERP) systems, implementing customer relationship management (CRM)
                    software, and setting up
                    and managing cloud infrastructure on platforms like AWS and Azure. We also provide network design
                    and
                    optimization, data
                    migration, and disaster recovery planning. Additionally, our cybersecurity services include
                    vulnerability assessments,
                    penetration testing, and implementing advanced security protocols. Our commitment to excellence and
                    customer
                    satisfaction drives us to deliver high-quality services that enhance productivity and drive business
                    growth.</span>
            </div>
            <div id="civil" class="service-wraper">
                <h2 class="sub-heading">Civil & Architect</h2>
                <span class="service-content">Our company excels in providing comprehensive services in civil
                    construction,
                    structural design, and architectural
                    design. We offer end-to-end civil construction solutions, from surveying, soil test, site
                    preparation
                    and project
                    management to the final build. Our structural design services ensure the safety and integrity of
                    buildings and
                    infrastructure through meticulous planning and innovative engineering techniques.
                    In architectural design, we create aesthetically pleasing and functional spaces tailored to meet our
                    clients' unique
                    needs and visions. We employ advanced software and technologies to deliver precise and efficient
                    designs. Our team of
                    skilled professionals is committed to delivering high-quality, sustainable, and cost-effective
                    solutions. We prioritise
                    customer satisfaction and work closely with clients to bring their projects to life.
                </span>
            </div>
            <div id="electrical" class="service-wraper">
                <h2 class="sub-heading">Electrical</h2>
                <span class="Electrical">At Blue Waves, we offer comprehensive electrical engineering services,
                    leveraging advanced tools and software to deliver
                    exceptional results. Our team utilises AutoCAD Electrical, ETAP, and Revit MEP for precise design
                    and
                    modelling,
                    ensuring robust and efficient electrical systems. On the field, we employ state-of-the-art
                    instruments
                    like multimeters,
                    oscilloscopes, and thermal imaging cameras to perform accurate diagnostics and assessments. Our
                    expertise spans power
                    system analysis, lighting design, and automation project planning, all aimed at providing
                    innovative,
                    safe, and
                    sustainable solutions. Committed to excellence, we ensure every project meets the highest industry
                    standards.
                    We prioritise energy efficiency and compliance with industry standards. Our skilled technicians
                    handle
                    electrical
                    installation work, including wiring, panel installations, lighting systems, overhead as well as
                    underground transmission
                    lines,transformers and integration of smart technologies.
                    We also provide maintenance and troubleshooting services to ensure the longevity and reliability of
                    electrical systems.
                    Our commitment to quality and safety drives us to deliver exceptional services that meet our
                    clients'
                    needs and exceed
                    their expectations.
                </span>
            </div>
        </div>
    </div>
    <!-- -----Project Section----- -->
    <div id="project-section">
        <h1 class="project-heading">Running Project</h1>
        <div class="project-container">
            <div id="project-it" class="project-wraper">
                <h2 class="sub-heading">IT & Software</h2>
                <span class="project-content">Our company specialises in delivering comprehensive IT and software
                    solutions
                    tailored to meet the diverse needs of
                    businesses and organisations. We offer a range of services including custom software development, IT
                    consulting, cloud
                    computing solutions, and robust cybersecurity measures. Our expert team handles specific tasks such
                    as
                    developing
                    enterprise resource planning (ERP) systems, implementing customer relationship management (CRM)
                    software, and setting up
                </span>
            </div>
            <div id="project-civil" class="project-wraper">
                <h2 class="sub-heading">Civil & Architect</h2>
                <span class="project-content">Our company excels in providing comprehensive services in civil
                    construction,
                    structural design, and architectural
                    design. We offer end-to-end civil construction solutions, from surveying, soil test, site
                    preparation
                    and project
                    management to the final build. Our structural design services ensure the safety and integrity of
                    buildings and
                    infrastructure through meticulous planning and innovative engineering techniques.
                    In architectural design, we create aesthetically pleasing and functional spaces tailored to meet our
                    clients' unique
                    needs and visions. We employ advanced software and technologies to deliver precise and efficient
                    designs.

                </span>
            </div>
            <div id="project-electrical" class="project-wraper">
                <h2 class="sub-heading">Electrical</h2>
                <span class="Electrical">At Blue Waves, we offer comprehensive electrical engineering services,
                    leveraging advanced tools and software to deliver
                    exceptional results. Our team utilises AutoCAD Electrical, ETAP, and Revit MEP for precise design
                    and
                    modelling,
                    ensuring robust and efficient electrical systems. On the field, we employ state-of-the-art
                    instruments
                    like multimeters,
                    oscilloscopes, and thermal imaging cameras to perform accurate diagnostics and assessments. Our
                    expertise spans power
                    system analysis, lighting design, and automation project planning, all aimed at providing
                    innovative,


                </span>
            </div>
        </div>
    </div>

    <!-- -----Client Section----- -->
    <div id="client-section">
        <h1 class="client-heading">Our Clients</h1>
        <div class="client-logo-container">
            <div class="client-logo">
                <img src="images/clientlogo/nepal_government.png" alt="">
            </div>
            <div class="client-logo">
                <img src="images/clientlogo/bhoomi_construction.png" alt="">
            </div>
            <div class="client-logo">
                <img src="images/clientlogo/anaram_group.png" alt="">

            </div>
        </div>
    </div>

    <!-- -----Contact Section----- -->
    <div id="contact-section">
        <span class="contact-heading">Contact Me</span>
        <div class="contact-container">
            <div class="contact-form">
                <form action="send.php" method="post">
                    <div style="display: flex; justify-content: center;color: rgb(58, 255, 58);gap: 5px;">
                        <i id="icon"></i>
                        <span id="msg"></span>
                    </div>

                    <input type="text" placeholder="Name" name="Username" required class="input-field">
                    <input type="email" placeholder="Email Id" name="email" required class="input-field">
                    <textarea name="message" id="" class="message-field" required placeholder="Message"></textarea>
                    <input type="submit" class="btn">
                </form>
            </div>
            <div class="contact-info">
                <h2 class="contact-subheading">Blue Wave Pvt. Ltd</h2>
                <div class="contact-details">
                    <div class="contact-item">
                        <span>Teku-12, Kathmandu-Nepal</span>
                    </div>
                    <div class="contact-item">
                        <a href="tel:+9779746803078">+9779844520873</a>
                    </div>
                    <div class="contact-item">
                        <a href="mailto:sanjaykdas1996@gmail.com">admin@bwcdigital.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- -----Footer Section----- -->
    <div class="footer-container">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Navigation</h5>
                    <ul class="footer-link flex-column">
                        <li class="nav-item mb-2"><a href="#home" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#about" class="nav-link p-0 text-muted">About</a></li>
                        <li class="nav-item mb-2"><a href="#Service-section"
                                class="nav-link p-0 text-muted">Services</a></li>
                        <li class="nav-item mb-2"><a href="#project-section"
                                class="nav-link p-0 text-muted">Projects</a></li>
                        <li class="nav-item mb-2"><a href="#client-section" class="nav-link p-0 text-muted">Clients</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#contact-section" class="nav-link p-0 text-muted">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>About</h5>
                    <ul class="footer-link flex-column">
                        <li class="nav-item mb-2"><a href="#about" class="nav-link p-0 text-muted">About us</a></li>
                        <li class="nav-item mb-2"><a href="#contact-section" class="nav-link p-0 text-muted">Contact
                                us</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted" hidden>Career</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Services</h5>
                    <ul class="footer-link flex-column">
                        <li class="nav-item mb-2"><a href="#it" class="nav-link p-0 text-muted">It & Software</a></li>
                        <li class="nav-item mb-2"><a href="#civil" class="nav-link p-0 text-muted">Civil & Architect</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#electrical" class="nav-link p-0 text-muted">Electrical</a>
                        </li>
                    </ul>
                </div>



                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5>Subscribe to our newsletter</h5>
                        <p>Monthly digest of what's new and exciting from us.</p>
                        <label for="newsletter1" class="visually-hidden">Email:</label>

                        <div class="subscribe-container d-flex flex-column w-100 gap-5">
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn w-25" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>

            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-2 my-2 border-top">
                <p>© 2024 Blue Wave Pvt.Ltd. Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <i style="display: block !important;" class="fa-brands fa-square-facebook"></i>
                    <a href="https://www.youtube.com/@bluewaves-y4v" target="_blank"><i
                            class="fa-brands fa-square-youtube"></i></a>
                    <i class="fa-brands fa-square-twitter"></i>
                </ul>
            </div>
        </footer>
    </div>

    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const msg = urlParams.get('msg');

        if (msg === "suc") {
            document.getElementById("icon").classList.add("fa-regular");
            document.getElementById("icon").classList.add("fa-circle-check");
            document.getElementById('msg').textContent = " Successfully Sent!";
            setTimeout(function () {
                urlParams.delete('msg');
                const newUrl = window.location.pathname + '?' + urlParams.toString();
                window.history.replaceState({}, '', newUrl);
                document.getElementById("icon").classList.remove("fa-regular");
                document.getElementById("icon").classList.remove("fa-circle-check");
                document.getElementById('msg').textContent = "";
            }, 20000);
        } else {
            var spanText = document.getElementById('msg');
            spanText.textContent = msg;
            spanText.style.color = "red";
            setTimeout(function () {
                urlParams.delete('msg');
                const newUrl = window.location.pathname + '?' + urlParams.toString();
                window.history.replaceState({}, '', newUrl);
                document.getElementById("icon").classList.remove("fa-regular");
                document.getElementById("icon").classList.remove("fa-circle-check");
                document.getElementById('msg').textContent = "";
            }, 20000);
        }
    </script>

    <script src="https://kit.fontawesome.com/1b7c1e7840.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Bootstrap Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

</body>


</html>