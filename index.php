<?
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="pl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Knowledge Bricks, Klocki Wiedzy">
    <meta name="author" content="Uniwersytet Pedagogiczny">

    <?
    include 'lang/class.lang.php';
    $langAgent = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['language'])) {
            Lang::changeLang($_POST['language']);
        }
    } else {
        if (isset($_SESSION['lang'])) {
            Lang::changeLang($_SESSION['lang']);
        } else {
            Lang::changeLang($langAgent);
        }
    }


    if(Lang::getLanguage() == 'en') {
        require_once 'lang/lang.en.php';
    } else {
        require_once 'lang/lang.pl.php';
    }

    ?>
    <title><?= $lang['title'];?></title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top"><?= $lang['navbar'];?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio"><?= $lang['menu1'];?></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#instruction"><?= $lang['menu2'];?></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#download"><?= $lang['menu3'];?></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact"><?= $lang['menu4'];?></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- Change Language -->
        <div class="btn-group language-set">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= Lang::getLanguage() == 'en' ? 'EN': 'PL'; ?><span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="./" onclick="setLanguagePl()">PL</a></li>
                <li><a href="./" onclick="setLanguageEn()">EN</a></li>
            </ul>
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name"><?= $lang['intro'];?></span>
                        <hr class="star-light">
                        <span class="skills"><?= $lang['skills'];?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?= $lang['menu1'];?></h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cake.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/circus.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Instruction Section -->
    <section class="success" id="instruction">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?= $lang['menu2'];?></h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p><?= $lang['instruction-desc'];?></p>
                </div>
                <div class="col-lg-4">
                    <p><?= $lang['instruction-desc-short'];?></p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i><?= $lang['instruction-desc-down'];?>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section class="success" id="download">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?= $lang['menu3'];?></h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p><?= $lang['download-desc'];?></p>
                </div>
                <div class="col-lg-4">
                    <p><?= $lang['download-req'];?></p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i><?= $lang['download-game'];?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?= $lang['menu4'];?></h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label><?= $lang['form']['name'];?></label>
                                <input type="text" class="form-control" placeholder="<?= $lang['form']['name'];?>" id="name" required data-validation-required-message="<?= $lang['form']['name-ps'];?>">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label><?= $lang['form']['email'];?></label>
                                <input type="email" class="form-control" placeholder="<?= $lang['form']['email'];?>" id="email" required data-validation-required-message="<?= $lang['form']['email-ps'];?>">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <!--<div class="row control-group">-->
                            <!--<div class="form-group col-xs-12 floating-label-form-group controls">-->
                                <!--<label>Phone Number</label>-->
                                <!--<input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">-->
                                <!--<p class="help-block text-danger"></p>-->
                            <!--</div>-->
                        <!--</div>-->
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label><?= $lang['form']['message'];?></label>
                                <textarea rows="5" class="form-control" placeholder="<?= $lang['form']['message'];?>" id="message" required data-validation-required-message="<?= $lang['form']['message-ps'];?>"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg"><?= $lang['form']['send'];?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-6">
                        <h3><?= $lang['footer']['colh3'];?></h3>
                        <p><?= $lang['footer']['colh3'];?></p>
                    </div>
                    <div class="footer-col col-md-6">
                        <h3><?= $lang['footer']['onas'];?></h3>
                        <p>Napiszemy tutaj coś krótkiego o nas.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Uniwersytet Pedagogiczny <?php echo date('Y'); ?>

                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Skacz</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Opis jednego z ficzerów gry. Opis jednego z ficzerów gry. Opis jednego z ficzerów gry. Opis jednego z ficzerów gry. Opis jednego z ficzerów gry.</p>
                            <ul class="list-inline item-details">
                                <li>Co:
                                    <strong>Raz
                                    </strong>
                                </li>
                                <li>Gdzie:
                                    <strong>Dwa
                                    </strong>
                                </li>
                                <li>Jak:
                                    <strong>Trzy
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Zamknij</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Biegaj</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                            <p>Opis jednego z ficzerów gry. Opis jednego z ficzerów gry. Opis jednego z ficzerów gry. Opis jednego z ficzerów gry. Opis jednego z ficzerów gry.</p>
                            <ul class="list-inline item-details">
                                <li>Co:
                                    <strong>Raz
                                    </strong>
                                </li>
                                <li>Gdzie:
                                    <strong>Dwa
                                    </strong>
                                </li>
                                <li>Jak:
                                    <strong>Trzy
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Zamknij</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Rozwiązuj zagadki</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                            <p>Opis jednego z ficzerów gry. Opis jednego z ficzerów gry. Opis jednego z ficzerów gry. Opis jednego z ficzerów gry. Opis jednego z ficzerów gry.</p>
                            <ul class="list-inline item-details">
                                <li>Co:
                                    <strong>Raz
                                    </strong>
                                </li>
                                <li>Gdzie:
                                    <strong>Dwa
                                    </strong>
                                </li>
                                <li>Jak:
                                    <strong>Trzy
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Zamknij</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>