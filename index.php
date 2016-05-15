<?php
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

    <?php
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
	
	<!-- Slick slider CSS -->
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
	<!--<link href="css/user.css" rel="stylesheet">-->
	
	
	<script src="js/jquery-1.12.3.js"></script>
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
	<script src="js/user.js"></script>
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
                        <a href="#desc"><?= $lang['menu1'];?></a>
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
                    <li class="page-scroll">
                        <a href="#about"><?= $lang['menu5'];?></a>
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
                <!--<div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name"><?= $lang['intro'];?></span>
                        <hr class="star-light">
                        <span class="skills"><?= $lang['skills'];?></span>
                    </div>
                </div>-->
				<div class="col-lg-12 text-center">
                    <h3 class="white"><?php echo $lang['title'];?></h3>
                </div>
				<div class="col-lg-12">
					<p><?php echo $lang['header-desc'];?></p>
				</div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <!--<section id="portfolio">
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
    </section>-->
	<section id="desc" class="game_info">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
                    <h3 class="black"><?php echo $lang['game-info'];?></h3>
                </div>
				<div class="col-lg-12">
					<p><?php echo $lang['short-info'];?></p>
				</div>
			</div>
		</div>
	</section>
	
	<section id="instruction" class="instruction">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
                    <h3 class="white"><?php echo $lang['menu2'];?></h3>
                </div>
				<div class="col-lg-12">
					<div class="instruction_slider">
						<div class="col-lg-12 slide_wrapper">
							<div class="col-lg-3">
								<img src="img/img_slider.jpg" alt=""/>
							</div>
							<div class="col-lg-9 slide_info">
								<h1 class="white"><span>0.1 -</span> <?php echo $lang['instruction1'];?></h1>
								<p><?php echo $lang['instruction-text1'];?></p>
							</div>
						</div>
						
						<div class="col-lg-12 slide_wrapper">
							<div class="col-lg-3">
								<img src="img/img_slider.jpg" alt=""/>
							</div>
							<div class="col-lg-9 slide_info">
								<h1 class="white"><span>0.2 -</span> <?php echo $lang['instruction2'];?></h1>
								<p><?php echo $lang['instruction-text2'];?></p>
							</div>
						</div>
						
						<div class="col-lg-12 slide_wrapper">
							<div class="col-lg-3">
								<img src="img/img_slider.jpg" alt=""/>
							</div>
							<div class="col-lg-9 slide_info">
								<h1 class="white"><span>0.3 -</span> <?php echo $lang['instruction3'];?></h1>
								<p><?php echo $lang['instruction-text3'];?></p>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>

    <!-- Instruction Section -->
	<div id="download" class="download_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center download_intro">
                    <h3 class="black"><?php echo $lang['download-game'];?></h3>
                </div>
				<section class="success col-lg-6">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h2 class="black"><?php echo $lang['download-req'];?></h2>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<ul class="col-lg-offset-4">
									<li><?php echo $lang['proc'];?></li>
									<li><?php echo $lang['graf'];?></li>
									<li><?php echo $lang['sound'];?></li>
									<li><?php echo $lang['mouse'];?></li>
									<li><?php echo $lang['keyboard'];?></li>
								</ul>
							</div>
						</div>
				</section>


				<!-- About Section -->
				<section class="success col-lg-6">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h2><?php echo $lang['download-full'];?></h2>
							</div>
							<div class="col-lg-12 text-center buttons">
								<a href="#" class="btn btn-lg btn-outline">
									<?= $lang['download-game'];?>
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 text-center">
								<h2><?php echo $lang['instruction-desc-down'];?></h2>
							</div>
							<div class="col-lg-12 buttons">
								<a href="#" class="btn btn-lg btn-outline">
                                    <?php echo $lang['instruction-desc-down-b'];?>
								</a>
							</div>
						</div>
				</section>
			</div>
		</div>
	</div>
	
    <!-- Contact Section -->
    <section id="contact">
		<div class="darker">
		</div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="white"><?php echo $lang['form']['title'];?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
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
                            <div class="form-group col-xs-12 text-center">
                                <button type="submit" class="btn btn-user"><?= $lang['form']['send'];?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="about" class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-12 text-center">
                        <h3 class="black"><?php echo $lang['team'];?></h3>
                        <p></p>
						<ul class="col-md-5 col-md-offset-4">
							<li>Justyna Bejgrowicz</li>
							<li>Macięj Sępiak</li>
							<li>Tomasz Wądrzyk</li>
							<li>Marcin Gąsiorek</li>
						</ul>
						
						<p><?php echo $lang['lead'];?>:</p>
						<p>dr. inż. Tomasz Hachaj</p>
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
	
	<!--<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->
	<script type="text/javascript" src="slick/slick.min.js"></script>

</body>

</html>
