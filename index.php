<?php
// Load session messages
require_once 'includes/SessionMessage.php'

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->

    <!-- Webpage title and icon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/logos/CalibTech Logo.png">
    <title>CalibTech - Your level 1 BBBEE partner for calibration in South Africa</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <header id="main-content">
        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand client-font" href="#">CalibTech</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="#services">SERVICES</a>
                        <a class="nav-link" href="#portfolio">PORTFOLIO</a>
                        <a class="nav-link" href="#about">ABOUT</a>
                        <a class="nav-link" href="#team">TEAM</a>
                        <a class="nav-link" href="#contact">CONTACT</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Jumbotron -->
        <div class="jumbotron">
            <div class="container">
                <div class="row text-center">
                    <div class="col overlay pt-5">
                        <h3 class="client-font jumbotron-text-1 welcome text-dark pt-5">Welcome to CalibTech</h3>
                        <p class="client-font jumbotron-text-2 text-dark fw-bold mb-3">We are at your service</p>
                        <a href="#contact" class="btn btn-warning btn-lg">Contact us now</a>
                        <div class="col-4 offset-4 mt-5">
                            <img class="img-fluid w-75" src="assets/img/logos/CalibTech Logo.png" alt="CalibTech Logo">
                        </div>
                    </div>
                    <cite class="d-none">Image by Marc-Olivier Jodoin on Unsplash</cite>
                </div>

            </div>
        </div>
    </header>
    <section id="services" class="py-5 bg-light">
        <div class="container">
            <!-- Row with services brief -->
            <div class="row ">
                <div class="col-md-8 offset-md-2">
                    <h3 class="text-center client-font fw-bold h1">Services</h3>
                    <p class="lead text-center">We have over 17 years experience with nuclear density/moisture gauges and provide quality calibration and repair services to all material testing civil engineering laboratories without prejudice and at cost effective price.</p>
                </div>
            </div>
            <!-- Row with icon descriptions -->
            <div class="row mt-3">
                <div class="col-md-4 text-center">
                    <img class="w-25" src="assets/img/services/sales.png" alt="Sales services iconography">
                    <h3 class="">Sales</h3>
                    <p>We provide "equipment list here" quality civil engineering equipment across Africa</p>
                </div>
                <div class="col-md-4 text-center">
                    <img class="w-25" src="assets/img/services/repair.png" alt="Repair services iconography">
                    <h3 class="">Repairs</h3>
                    <p>We repair "equipment here" to as good as new condition</p>
                </div>
                <div class="col-md-4 text-center">
                    <img class="w-25" src="assets/img/services/calibrate.png" alt="Calibration service iconography">
                    <h3 class="">Calibrations</h3>
                    <p>We provide accurate calibration of the following</p>
                </div>
            </div>
            <!-- Row with services list -->
            <div class="row mt-3">
                <div class="col-md-6 text-center">
                    <h4>Nuclear density/moisture gauges</h4>
                    <ul class="list-unstyled">
                        <li class="lead">CPN</li>
                        <li class="lead">Troxler</li>
                        <li class="lead">Humboldt</li>
                        <li class="lead">InstroTek</li>
                    </ul>
                    <h4>Compression Presses, Ovens and Scales</h4>
                    <ul class="list-unstyled">
                        <li class="lead">Concrete cube press</li>
                        <li class="lead">CBR/UCS/ITS/MAR press</li>
                        <li class="lead">Marshall presss</li>
                        <li class="lead">Ovens</li>
                        <li class="lead">Scales</li>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <h4>Nuclear Moisture/Density Gauge Calibrations (Full 3 block calibration)</h4>
                    <ul class="list-unstyled">
                        <li class="lead">Full mechanical inspection</li>
                        <li class="lead">Cleaning and lubrication</li>
                        <li class="lead">Signal adjustment and inspection</li>
                        <li class="lead">24 hour extended electronic inspection tes</li>
                    </ul>
                    <h4>General</h4>
                    <ul class="list-unstyled">
                        <li class="lead">Full mechanical inspection, adjustment and repair of most civil engineering equipment</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="py-5">
        <div class="container text-center">
            <!-- Row of pics -->
            <h3 class="client-font fw-bold h1">Portfolio</h3>
            <p class="lead">Here are some of the projects that we worked on</p>

            <!-- 1st Row of pics -->
            <!-- Card 1 -->
            <div class="row">
                <div class="col-md-4 mt-2 port-card">
                    <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#portfolio-1">
                        <div class="card">
                            <img src="assets/img/portfolio/Port 1 thumb.png" class="card-img-top img-fluid" alt="Nuclear Density Gauges thumbnail">
                            <div class="card-body bg-success port-thumbnail-text">
                                <h4 class="card-text text-light">Nuclear Density Gauges thumbnail</h4>
                            </div>
                        </div>
                    </button>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4 mt-2 port-card">
                    <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#portfolio-2">
                        <div class="card">
                            <img src="assets/img/portfolio/Port 2 thumb.png" class="card-img-top img-fluid" alt="3 Block Calibration thumbnail">
                            <div class="card-body bg-success port-thumbnail-text">
                                <h4 class="card-text text-light">3 Block Calibration</h4>
                            </div>
                        </div>
                    </button>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mt-2 port-card">
                    <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#portfolio-3">
                        <div class="card">
                            <img src="assets/img/portfolio/Port 3 thumb.png" class="card-img-top img-fluid" alt="Concrete Crushing Machine thumbnail">
                            <div class="card-body bg-success port-thumbnail-text">
                                <h4 class="card-text text-light">Concrete Crushing Machine thumbnail</h4>
                            </div>
                        </div>
                    </button>
                </div>
            </div>

            <!-- 2nd Row of pics -->
            <!-- Card 4 -->
            <div class="row mt-3 justify-content-center">
                <div class="col-md-4 mt-2 port-card">
                    <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#portfolio-4">
                        <div class="card">
                            <img src="assets/img/portfolio/Port 4 thumb.png" class="card-img-top img-fluid" alt="Laboratory Ovens thumbnail">
                            <div class="card-body bg-success port-thumbnail-text">
                                <h4 class="card-text text-light">Laboratory Ovens thumbnail</h4>
                            </div>
                        </div>
                    </button>
                </div>
                <!-- Card 5 -->
                <div class="col-md-4 mt-2 port-card">
                    <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#portfolio-5">
                        <div class="card">
                            <img src="assets/img/portfolio/Port 5 thumb.png" class="card-img-top img-fluid" alt="Lab Scales thumbnail">
                            <div class="card-body bg-success port-thumbnail-text">
                                <h4 class="card-text text-light">Lab Scales</h4>
                            </div>
                        </div>
                    </button>
                </div>
                <!-- Card 6 -->
                <div class="col-md-4 mt-2 port-card">
                    <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#portfolio-6">
                        <div class="card">
                            <img src="assets/img/portfolio/Port 6 thumb.png" class="card-img-top img-fluid" alt="CBR/Marshall/ITS/UCS thumbnail">
                            <div class="card-body bg-success port-thumbnail-text">
                                <h4 class="card-text text-light">CBR/Marshall/ITS/UCS</h4>
                            </div>
                        </div>
                    </button>
                </div>

                <!-- All Modals -->
                <!-- Modal 1 -->
                <div class="modal fade" id="portfolio-1" tabindex="-1" aria-labelledby="portfolio-1Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="portfolio-1Label">Nuclear Density Gauges</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body container-fluid">
                                <img src="assets/img/portfolio/Port 1 full.png" alt="Nuclear density gauge full picture" class="img-fluid">
                            </div>
                            <div class="modal-footer">
                                <p class="lead">Nuclear moisture-density gauges are used by engineers and contractors for compaction control of concrete, asphalt and soil aggregates.</p>
                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 2 -->
                <div class="modal fade" id="portfolio-2" tabindex="-1" aria-labelledby="portfolio-2Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="portfolio-1Label">3 Block calibration</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body container-fluid">
                                <img src="assets/img/portfolio/Port 2 full.png" alt="3 BLOCK CALIBRATION full picture" class="img-fluid">
                            </div>
                            <div class="modal-footer">
                                <!-- List -->
                                <ul class="list-unstyled">
                                    <li class="fw-bold">Full three block calibration:</li>
                                    <li>Calibration standard was designed following ASTM Standard Guide D 7013</li>
                                    <li class="fw-bold">Full mechanical inspection:</li>
                                    <li>Cleaning and Service</li>
                                    <li>Signal adjustment and Inspection</li>
                                    <li>Extended Electronic inspection test</li>
                                    <li>Leak test</li>
                                </ul>
                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 3 -->
                <div class="modal fade" id="portfolio-3" tabindex="-1" aria-labelledby="portfolio-3Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="portfolio-1Label">Concrete crushing machine</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body container-fluid">
                                <img src="assets/img/portfolio/Port 3 full.png" alt="Concrete crushing machine full picture" class="img-fluid">
                            </div>
                            <div class="modal-footer">
                                <p class="lead">These compression test machines, usually operates in the range of 0 to 2000 kN, are used to determine the strength of concrete. Crushing strength tests (ACV) can also be conducted using this machine.</p>
                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Model 4 -->
                <div class="modal fade" id="portfolio-4" tabindex="-1" aria-labelledby="portfolio-4Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title " id="portfolio-1Label">Laboratory Ovens</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body container-fluid">
                                <img src="assets/img/portfolio/Port 1 full.png" alt="Nuclear density gauge full picture" class="img-fluid">
                            </div>
                            <div class="modal-footer">
                                <p class="lead">Used in civil laboratories for the drying of samples these convection ovens come a variety of sizes to fulfil the desired requirements.</p>
                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Model 5 -->
                <div class="modal fade" id="portfolio-5" tabindex="-1" aria-labelledby="portfolio-5Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="portfolio-1Label">Lab Scales</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body container-fluid">
                                <img src="assets/img/portfolio/Port 5 full.png" alt="Lab scales full picture" class="img-fluid">
                            </div>
                            <div class="modal-footer">
                                <p class="lead">Laboratory scales are used by engineers and professionals for weighing samples to a high level of precision. Accurate measuring scales are of the utmost importance when producing mix designs for concrete and soil aggregates.</p>
                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Model 6 -->
                <div class="modal fade" id="portfolio-6" tabindex="-1" aria-labelledby="portfolio-6Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="portfolio-1Label">CBR/Marshall/ITS/UCS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body container-fluid">
                                <img src="assets/img/portfolio/Port 6 full.png" alt="CBR Press full picture" class="img-fluid">
                            </div>
                            <div class="modal-footer">
                                <p class="lead">Operating in the range of 0 to 200 kN, these machines offer four possible tests. These tests include the California Bearing Ratio (CBR), Uniaxial Compressive Strength (UCS), Indirect Tensile Strength (ITS) and Marshall Stability (MAR).</p>
                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="about" class="bg-light py-5">
        <div class="container">
            <div class="row text-center">
                <h3 class="client-font fw-bold h1">About</h3>
                <p class="lead">Here are some key points about our business.</p>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="hand with a lightbulb floating">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="subheading">Why we exist!</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">
                                            CalibTech (PTY)Ltd is a new B-BBEE Level 1 enterprise established to provide quality calibration and repairs to laboratory equipment services to all material testing civil engineering laboratories across South Africa and Africa with a strong focus on customer satisfaction. We can also provide SANAS Calibration (All laboratory Presses) through a subsidize company. </p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="Specticles on a table">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="subheading">Vision</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">To expand and service the civil engineering industry across the African continent adhering to the highest measurement standards and aligning to industry best practices.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="assets/img/about/4def.jpg" alt="Moantain range view">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="subheading">Mission</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">CalibTech strife for operation excellence and efficiency to ensure that all services rendered meets industry standards and customer expectations.
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="Chess rook (or castle) piece on a chess board">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="subheading">Strategy</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Uphold and contribute to measurement standards in conjunction with the various industry bodies (CSIR, SANAS and NLA)</p>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <h4>Come and experience the best</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h3 class="client-font fw-bold h1 text-uppercase">Our management team</h3>
                </div>
                <div class="row">
                    <div class="col-md-4 offset-md-2 team-member">
                        <img class="mx-auto rounded-circle w-50" src="assets/img/team/1.png" alt="Picture of the director Thurstan">
                        <h4>Thurstan Scheepers</h4>
                        <p class="text-muted">Director</p>
                        <!-- <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul> -->
                    </div>
                    <div class="col-md-4 team-member">
                        <img class="mx-auto rounded-circle w-50" src="assets/img/team/2.png" alt="Picture of the mechanical engineer Virayan">
                        <h4>Virayan Naidoo</h4>
                        <p class="text-muted">Mechanical Engineer</p>
                        <!-- <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul> -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="contact" class="bg-warning py-5">

        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 offset-md-3 bg-light py-4 rounded">
                    <h3 class="client-font">Come to use for the best service and price</h3>
                    <?php
                    SessionMessage::display_message();
                    ?>
                    <form action="mail.php" method="POST">
                        <div class="mb-3">
                            <label class="visually-hidden form-label" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="visually-hidden form-label" for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <label class="visually-hidden form-label" for="contact">Contact Number</label>
                            <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact Number">
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                            <label class="text-muted" for="floatingTextarea2">Your Message</label>
                        </div>
                        <div class="mb-3 d-grid">
                            <button type="submit" class="btn btn-warning" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="text-center p-4 bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>Copyright &copy; <span id="year"></span> CalibTech</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Custom JS if Needed -->
    <script>
        // Get the current year for the copyright
        $('#year').text(new Date().getFullYear());
    </script>
</body>

</html>