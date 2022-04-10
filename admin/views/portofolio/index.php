<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="webku" />
    <meta name="author" content="webku" />
    <title>Webku</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img/tsundere.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap) -->
    <!-- <link href="css/styles.css" rel="stylesheet" /> -->
    <link href="<?= baseurl ?>/assets/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav" style="background-color:#273036">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="<?= baseurl ?>/assets/img/black.png" width="60px" alt=""> Webku</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Home</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <?php foreach ($data['profile'] as $pro) : ?>
        <header class="masthead bg-warning text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5 rounded-circle" src="<?= baseurl ?>/assets/img/<?= $pro['foto'] ?>" alt="<?= $pro['foto'] ?>" />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0"><?= $pro['nama'] ?></h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-gamepad"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0"><?= $pro['jabatan'] ?>|<?= $pro['perusahaan'] ?></p>
            </div>
        </header>
    <?php endforeach ?>
    <!-- getwaves -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="bg-warning">
        <path fill="#273036" fill-opacity="1" d="M0,0L102.9,128L205.7,192L308.6,192L411.4,160L514.3,256L617.1,224L720,224L822.9,96L925.7,96L1028.6,128L1131.4,192L1234.3,288L1337.1,32L1440,128L1440,320L1337.1,320L1234.3,320L1131.4,320L1028.6,320L925.7,320L822.9,320L720,320L617.1,320L514.3,320L411.4,320L308.6,320L205.7,320L102.9,320L0,320Z"></path>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#273036" fill-opacity="1" d="M0,0L102.9,128L205.7,192L308.6,192L411.4,160L514.3,256L617.1,224L720,224L822.9,96L925.7,96L1028.6,128L1131.4,192L1234.3,288L1337.1,32L1440,128L1440,0L1337.1,0L1234.3,0L1131.4,0L1028.6,0L925.7,0L822.9,0L720,0L617.1,0L514.3,0L411.4,0L308.6,0L205.7,0L102.9,0L0,0Z"></path>
    </svg>
    <!-- getwaves -->
    <!-- Portfolio Section-->

    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                <?php foreach ($data['about'] as $about) : ?>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal<?= $about['id_p'] ?>">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><?= $about['nama_p'] ?></div>
                            </div>
                            <img class="" width="400px" height="400px" src="<?= baseurl ?>/assets/img/<?= $about['foto'] ?>" alt="..." />
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <!-- About Section-->
        <!-- getwaves -->
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#273036" fill-opacity="1" d="M0,0L102.9,128L205.7,192L308.6,192L411.4,160L514.3,256L617.1,224L720,224L822.9,96L925.7,96L1028.6,128L1131.4,192L1234.3,288L1337.1,32L1440,128L1440,320L1337.1,320L1234.3,320L1131.4,320L1028.6,320L925.7,320L822.9,320L720,320L617.1,320L514.3,320L411.4,320L308.6,320L205.7,320L102.9,320L0,320Z"></path>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="bg-warning">
        <path fill="#273036" fill-opacity="1" d="M0,0L102.9,128L205.7,192L308.6,192L411.4,160L514.3,256L617.1,224L720,224L822.9,96L925.7,96L1028.6,128L1131.4,192L1234.3,288L1337.1,32L1440,128L1440,0L1337.1,0L1234.3,0L1131.4,0L1028.6,0L925.7,0L822.9,0L720,0L617.1,0L514.3,0L411.4,0L308.6,0L205.7,0L102.9,0L0,0Z"></path>
    </svg>
    <!-- getwaves -->
    <section class="page-section bg-warning text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <?php foreach ($data['profile'] as $pro) : ?>
                    <div class="col-lg-4 ms-auto">
                        <p class="lead"><?= $pro['kolom1'] ?></p>
                    </div>
                    <div class="col-lg-4 ms-auto">
                        <p class="lead"><?= $pro['kolom2'] ?></p>
                    </div>
                <?php endforeach ?>
            </div>
            <!-- About Section Button-->
            <div class="text-center mt-4">
                <a class="btn btn-xl btn-outline-light" href="#">
                    <i class="fas fa-download me-2"></i>
                    lebih lanjut
                </a>
            </div>
        </div>
    </section>
    <!-- getwaves -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="bg-warning">
        <path fill="#273036" fill-opacity="1" d="M0,0L102.9,128L205.7,192L308.6,192L411.4,160L514.3,256L617.1,224L720,224L822.9,96L925.7,96L1028.6,128L1131.4,192L1234.3,288L1337.1,32L1440,128L1440,320L1337.1,320L1234.3,320L1131.4,320L1028.6,320L925.7,320L822.9,320L720,320L617.1,320L514.3,320L411.4,320L308.6,320L205.7,320L102.9,320L0,320Z"></path>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#273036" fill-opacity="1" d="M0,0L102.9,128L205.7,192L308.6,192L411.4,160L514.3,256L617.1,224L720,224L822.9,96L925.7,96L1028.6,128L1131.4,192L1234.3,288L1337.1,32L1440,128L1440,0L1337.1,0L1234.3,0L1131.4,0L1028.6,0L925.7,0L822.9,0L720,0L617.1,0L514.3,0L411.4,0L308.6,0L205.7,0L102.9,0L0,0Z"></path>
    </svg>
    <!-- getwaves -->
    <!-- Contact Section-->
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <form action="<?= baseurl ?>/Portofolio/Pesan" method="POST">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input name="email" class="form-control" id="email" type="email" placeholder="name@example.com" required />
                            <label for="email">Email</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input name="users" class="form-control" id="users" type="text" placeholder="doctor strange" />
                            <label for="users">Users</label>
                        </div>
                        <!-- Phone number input-->
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea name="pesan" class="form-control" id="pesan" type="text" placeholder="masukan pesan..." data-sb-validations="required" required></textarea>
                            <label for="message">Pesan</label>
                        </div>
                        <!-- Submit Button-->
                        <button name="kirim" class="btn btn-primary btn-xl" id="submitButton" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#273036" fill-opacity="1" d="M0,0L102.9,128L205.7,192L308.6,192L411.4,160L514.3,256L617.1,224L720,224L822.9,96L925.7,96L1028.6,128L1131.4,192L1234.3,288L1337.1,32L1440,128L1440,320L1337.1,320L1234.3,320L1131.4,320L1028.6,320L925.7,320L822.9,320L720,320L617.1,320L514.3,320L411.4,320L308.6,320L205.7,320L102.9,320L0,320Z"></path>
    </svg>
    <footer class="footer text-center" style="background-color: #273036;">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">
                        Tasikmalaya,purbaratu
                        <br />
                        sukajaya,kp golempang
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Around the Web</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/profile.php?id=100023891420826"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">About Freelancer</h4>
                    <p class="lead mb-0">
                        Seorang
                        <a href="#about">Manusia</a>
                        .
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white" style="background:#273036">
        <hr>
        <div class="container"><small>Copyright &copy; Your Website 2022</small></div>
    </div>
    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    <?php foreach ($data['about'] as $about) : ?>
        <div class="portfolio-modal modal fade" id="portfolioModal<?= $about['id_p'] ?>" tabindex="-1" aria-labelledby="portfolioModal<?= $about['id_p'] ?>" aria-hidden="true">
            <div class="modal-dialog modal-s">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-1"><?= $about['nama_p'] ?></h2>
                                    <!-- Icon Divider-->
                                    <hr>
                                    <!-- <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div> -->
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-2" src="<?= baseurl ?>/assets/img/<?= $about['foto'] ?>" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4"><?= $about['ket'] ?></p>
                                    <!-- <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="http://localhost/latihanukk/public/assets/js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>