<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo \yii::$app->view->theme->baseUrl; ?>/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo \yii::$app->view->theme->baseUrl; ?>/css/style.css" type="text/css" />

    <!-- One Page Module Specific Stylesheet -->
    <link rel="stylesheet" href="<?php echo \yii::$app->view->theme->baseUrl; ?>/css/onepage.css" type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href="<?php echo \yii::$app->view->theme->baseUrl; ?>/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo \yii::$app->view->theme->baseUrl; ?>/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo \yii::$app->view->theme->baseUrl; ?>/css/et-line.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo \yii::$app->view->theme->baseUrl; ?>/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo \yii::$app->view->theme->baseUrl; ?>/css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="<?php echo \yii::$app->view->theme->baseUrl; ?>/css/fonts.css" type="text/css" />

    <link rel="stylesheet" href="<?php echo \yii::$app->view->theme->baseUrl; ?>/css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>

<body class="stretched side-push-panel">

    <div class="body-overlay"></div>

    <div id="side-panel" class="dark">

        <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

        <div class="side-panel-wrap">

           <div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

       <?=Html::input('text', 'user[username]', null,['class' => 'form-control']) ?>
       <?=Html::input('text', 'user[password]', null,['class' => 'form-control']) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>
</div>

        </div>

    </div>

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <header id="header" class="full-header transparent-header border-full-header dark static-sticky" data-sticky-class="not-dark" data-sticky-offset="full" data-sticky-offset-negative="100">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="index.html" class="standard-logo" data-dark-logo="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/canvasone-dark.png"><img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/canvasone.png" alt="Canvas Logo"></a>
                        <a href="index.html" class="retina-logo" data-dark-logo="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/canvasone-dark@2x.png"><img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/canvasone@2x.png" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu">

                        <ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
                            <li><a href="#" data-href="#wrapper"><div>Home</div></a></li>
                            <li><a href="#" data-href="#section-about"><div>About</div></a></li>
                            <li><a href="#" data-href="#section-works"><div>Works</div></a></li>
                            <li><a href="#" data-href="#section-services"><div>Services</div></a></li>
                            <li><a href="#" data-href="#section-blog"><div>Blog</div></a></li>
                            <li><a href="#" data-href="#section-contact"><div>Contact</div></a></li>
                        </ul>

                        <div id="side-panel-trigger" class="side-panel-trigger"><a href="#"><i class="icon-reorder"></i></a></div>

                    </nav><!-- #primary-menu end -->

                </div>

            </div>

        </header><!-- #header end -->

        <!-- Slider
        ============================================= -->
        <section id="slider" class="slider-parallax full-screen force-full-screen">

            <div class="slider-parallax-inner">

                <div class="full-screen force-full-screen dark section nopadding nomargin noborder ohidden" style="background-image: url('<?php echo \yii::$app->view->theme->baseUrl; ?>/images/page/main.jpg'); background-size: cover; background-position: center center;">

                    <div class="container center">
                        <div class="vertical-middle">
                            <div class="emphasis-title">
                                <h1>
                                    <span class="text-rotater nocolor" data-separator="|" data-rotate="fadeIn" data-speed="6000">
                                        <span class="t-rotate t700 font-body opm-large-word">canvas.|different.|creative.|digital.|vision.</span>
                                    </span>
                                </h1>
                            </div>
                            <a href="#" class="button button-border button-light button-circle" data-scrollto="#section-works" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">View our Works</a>
                        </div>
                    </div>

                    <div class="video-wrap">
                        <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                    </div>

                    <a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="65" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

                </div>

            </div>

        </section><!-- #slider end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap nopadding">

                <div id="section-about" class="center page-section">

                    <div class="container clearfix">

                        <h2 class="divcenter bottommargin font-body" style="max-width: 700px; font-size: 40px;">A digital web studio creating stunning &amp; engaging online experiences</h2>

                        <p class="lead divcenter bottommargin" style="max-width: 800px;">Ford Foundation reduce child mortality fight against oppression refugee disruption pursue these aspirations effect. Free-speech Nelson Mandela change liberal; challenges of our times sustainability institutions.</p>

                        <p class="bottommargin" style="font-size: 16px;"><a href="#" data-scrollto="#section-services" data-easing="easeInOutExpo" data-speed="1250" data-offset="70" class="more-link">Learn more <i class="icon-angle-right"></i></a></p>

                        <div class="clear"></div>

                        <div class="row topmargin-lg divcenter" style="max-width: 1000px;">

                            <div class="col-sm-4 bottommargin">

                                <div class="team">
                                    <div class="team-image">
                                        <img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/team/1.jpg" alt="John Doe">
                                        <div class="team-overlay">
                                            <div class="team-social-icons">
                                                <a href="#" class="social-icon si-borderless si-small si-facebook" title="Facebook">
                                                    <i class="icon-facebook"></i>
                                                    <i class="icon-facebook"></i>
                                                </a>
                                                <a href="#" class="social-icon si-borderless si-small si-twitter" title="Twitter">
                                                    <i class="icon-twitter"></i>
                                                    <i class="icon-twitter"></i>
                                                </a>
                                                <a href="#" class="social-icon si-borderless si-small si-github" title="Github">
                                                    <i class="icon-github"></i>
                                                    <i class="icon-github"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-desc team-desc-bg">
                                        <div class="team-title"><h4>John Doe</h4><span>CEO</span></div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-4 bottommargin">

                                <div class="team">
                                    <div class="team-image">
                                        <img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/team/2.jpg" alt="Josh Clark">
                                        <div class="team-overlay">
                                            <div class="team-social-icons">
                                                <a href="#" class="social-icon si-borderless si-small si-twitter" title="Twitter">
                                                    <i class="icon-twitter"></i>
                                                    <i class="icon-twitter"></i>
                                                </a>
                                                <a href="#" class="social-icon si-borderless si-small si-linkedin" title="LinkedIn">
                                                    <i class="icon-linkedin"></i>
                                                    <i class="icon-linkedin"></i>
                                                </a>
                                                <a href="#" class="social-icon si-borderless si-small si-flickr" title="Flickr">
                                                    <i class="icon-flickr"></i>
                                                    <i class="icon-flickr"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-desc team-desc-bg">
                                        <div class="team-title"><h4>Mary Jane</h4><span>Co-Founder</span></div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-4 bottommargin">

                                <div class="team">
                                    <div class="team-image">
                                        <img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/team/3.jpg" alt="Mary Jane">
                                        <div class="team-overlay">
                                            <div class="team-social-icons">
                                                <a href="#" class="social-icon si-borderless si-small si-twitter" title="Twitter">
                                                    <i class="icon-twitter"></i>
                                                    <i class="icon-twitter"></i>
                                                </a>
                                                <a href="#" class="social-icon si-borderless si-small si-vimeo" title="Vimeo">
                                                    <i class="icon-vimeo"></i>
                                                    <i class="icon-vimeo"></i>
                                                </a>
                                                <a href="#" class="social-icon si-borderless si-small si-instagram" title="Instagram">
                                                    <i class="icon-instagram"></i>
                                                    <i class="icon-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-desc team-desc-bg">
                                        <div class="team-title"><h4>Josh Clark</h4><span>Sales</span></div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div id="section-works" class="page-section notoppadding">

                    <div class="section nomargin">
                        <div class="container clearfix">
                            <div class="divcenter center" style="max-width: 900px;">
                                <h2 class="nobottommargin t300 ls1">We create &amp; craft projects that ooze creativity in every aspect. We try to create a benchmark in everything we do. Take a moment to browse through some of our recent completed work.</h2>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Items
                    ============================================= -->
                    <div id="portfolio" class="portfolio grid-container portfolio-nomargin portfolio-full portfolio-masonry mixed-masonry clearfix">

                        <article class="portfolio-item pf-media pf-icons wide">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/portfolio/mixed/1.jpg" alt="Open Imagination">
                                </a>
                                <div class="portfolio-overlay">
                                    <div class="portfolio-desc">
                                        <h3><a href="#">Open Imagination</a></h3>
                                        <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item pf-illustrations">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/portfolio/mixed/2.jpg" alt="Locked Steel Gate">
                                </a>
                                <div class="portfolio-overlay">
                                    <div class="portfolio-desc">
                                        <h3><a href="#">Locked Steel Gate</a></h3>
                                        <span><a href="#">Illustrations</a></span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item pf-graphics pf-uielements">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/portfolio/mixed/3.jpg" alt="Mac Sunglasses">
                                </a>
                                <div class="portfolio-overlay">
                                    <div class="portfolio-desc">
                                        <h3><a href="#">Mac Sunglasses</a></h3>
                                        <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item pf-media pf-icons wide">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/portfolio/mixed/4.jpg" alt="Open Imagination">
                                </a>
                                <div class="portfolio-overlay">
                                    <div class="portfolio-desc">
                                        <h3><a href="#">Open Imagination</a></h3>
                                        <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item pf-uielements pf-media wide">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/portfolio/mixed/5.jpg" alt="Console Activity">
                                </a>
                                <div class="portfolio-overlay">
                                    <div class="portfolio-desc">
                                        <h3><a href="#">Console Activity</a></h3>
                                        <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item pf-media pf-icons">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/portfolio/mixed/6.jpg" alt="Open Imagination">
                                </a>
                                <div class="portfolio-overlay">
                                    <div class="portfolio-desc">
                                        <h3><a href="#">Open Imagination</a></h3>
                                        <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item pf-uielements pf-icons">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/portfolio/mixed/7.jpg" alt="Backpack Contents">
                                </a>
                                <div class="portfolio-overlay">
                                    <div class="portfolio-desc">
                                        <h3><a href="#">Backpack Contents</a></h3>
                                        <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
                                    </div>
                                </div>
                            </div>
                        </article>

                    </div><!-- #portfolio end -->

                    <div class="topmargin center"><a href="#" class="button button-border button-circle t600">View More Projects</a></div>

                </div>

                <div id="section-services" class="page-section notoppadding">

                    <div class="section nomargin">
                        <div class="container clearfix">
                            <div class="divcenter center" style="max-width: 900px;">
                                <h2 class="nobottommargin t300 ls1">We enjoy working on the Services &amp; Products we provide as much as you need them. This help us in delivering your Goals easily. Browse through the wide range of services we provide.</h2>
                            </div>
                        </div>
                    </div>

                    <div class="common-height clearfix">

                        <div class="col-md-4 hidden-xs" style="background: url('<?php echo \yii::$app->view->theme->baseUrl; ?>/images/services/main-bg.jpg') center center no-repeat; background-size: cover;"></div>
                        <div class="col-md-8">
                            <div class="max-height">
                                <div class="row common-height grid-border clearfix">
                                    <div class="col-md-4 col-sm-6 col-padding">
                                        <div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
                                            <div class="fbox-icon">
                                                <a href="#"><i class="icon-et-mobile"></i></a>
                                            </div>
                                            <h3>Responsive Framework</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-padding">
                                        <div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
                                            <div class="fbox-icon">
                                                <a href="#"><i class="icon-et-presentation"></i></a>
                                            </div>
                                            <h3>Beautifully Presented</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-padding">
                                        <div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
                                            <div class="fbox-icon">
                                                <a href="#"><i class="icon-et-puzzle"></i></a>
                                            </div>
                                            <h3>Extensively Extendable</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-padding">
                                        <div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
                                            <div class="fbox-icon">
                                                <a href="#"><i class="icon-et-gears"></i></a>
                                            </div>
                                            <h3>Powerfully Customizable</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-padding">
                                        <div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
                                            <div class="fbox-icon">
                                                <a href="#"><i class="icon-et-genius"></i></a>
                                            </div>
                                            <h3>Geniusly Transformable</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-padding">
                                        <div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
                                            <div class="fbox-icon">
                                                <a href="#"><i class="icon-et-hotairballoon"></i></a>
                                            </div>
                                            <h3>Industrial Support</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="section dark nomargin">
                        <div class="divcenter center" style="max-width: 900px;">
                            <h2 class="nobottommargin t300 ls1">Like Our Services? Get an <a href="#" data-scrollto="#template-contactform" data-offset="140" data-easing="easeInOutExpo" data-speed="1250" class="button button-border button-circle button-light button-large notopmargin nobottommargin" style="position: relative; top: -3px;">Instant Quote</a></h2>
                        </div>
                    </div>

                    <div class="section parallax nomargin dark" style="background-image: url('<?php echo \yii::$app->view->theme->baseUrl; ?>/images/page/testimonials.jpg'); padding: 150px 0;" data-stellar-background-ratio="0.3">

                        <div class="container clearfix">

                            <div class="col_two_fifth nobottommargin">&nbsp;</div>

                            <div class="col_three_fifth nobottommargin col_last">

                                <div class="fslider testimonial testimonial-full nobgcolor noborder noshadow nopadding" data-arrows="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide">
                                                <div class="testi-content">
                                                    <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque vero numquam?</p>
                                                    <div class="testi-meta">
                                                        Steve Jobs
                                                        <span>Apple Inc.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide">
                                                <div class="testi-content">
                                                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                                    <div class="testi-meta">
                                                        Collis Ta'eed
                                                        <span>Envato Inc.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide">
                                                <div class="testi-content">
                                                    <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                                                    <div class="testi-meta">
                                                        John Doe
                                                        <span>XYZ Inc.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div id="section-blog" class="page-section">

                    <h2 class="center uppercase t300 ls3 font-body">Recently From the Blog</h2>

                    <div class="section nobottommargin">
                        <div class="container clearfix">

                            <div class="row topmargin clearfix">

                                <div class="ipost col-sm-6 bottommargin clearfix">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="entry-image nobottommargin">
                                                <a href="#"><img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/blog/1.jpg" alt="Paris"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="margin-top: 20px;">
                                            <span class="before-heading" style="font-style: normal;">Press &amp; Media</span>
                                            <div class="entry-title">
                                                <h3 class="t400" style="font-size: 22px;"><a href="#">Global Meetup Program is Launching!</a></h3>
                                            </div>
                                            <div class="entry-content">
                                                <a href="#" class="more-link">Read more <i class="icon-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ipost col-sm-6 bottommargin clearfix">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="entry-image nobottommargin">
                                                <a href="#"><img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/blog/2.jpg" alt="Paris"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="margin-top: 20px;">
                                            <span class="before-heading" style="font-style: normal;">Inside Scoops</span>
                                            <div class="entry-title">
                                                <h3 class="t400" style="font-size: 22px;"><a href="#">The New YouTube Economy unfolds itself</a></h3>
                                            </div>
                                            <div class="entry-content">
                                                <a href="#" class="more-link">Read more <i class="icon-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ipost col-sm-6 bottommargin clearfix">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="entry-image nobottommargin">
                                                <a href="#"><img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/blog/3.jpg" alt="Paris"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="margin-top: 20px;">
                                            <span class="before-heading" style="font-style: normal;">Video Blog</span>
                                            <div class="entry-title">
                                                <h3 class="t400" style="font-size: 22px;"><a href="#">Kicking Off Design Party in Style</a></h3>
                                            </div>
                                            <div class="entry-content">
                                                <a href="#" class="more-link">Read more <i class="icon-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ipost col-sm-6 bottommargin clearfix">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="entry-image nobottommargin">
                                                <a href="#"><img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/blog/4.jpg" alt="Paris"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="margin-top: 20px;">
                                            <span class="before-heading" style="font-style: normal;">Inspiration</span>
                                            <div class="entry-title">
                                                <h3 class="t400" style="font-size: 22px;"><a href="#">Top Ten Signs You're a Designer</a></h3>
                                            </div>
                                            <div class="entry-content">
                                                <a href="#" class="more-link">Read more <i class="icon-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><div class="topmargin center"><a href="<?= Url::to(['blog-post/index']) ?>" class="button button-border button-circle t600">View More Blog</a></div>
                    </div>

                    <div class="container topmargin-lg clearfix">

                        <div id="oc-clients" class="owl-carousel topmargin image-carousel carousel-widget" data-margin="80" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false"data-items-xxs="2" data-items-xs="3" data-items-sm="4" data-items-md="5" data-items-lg="6">

                            <div class="oc-item"><a href="#"><img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/clients/1.png" alt="Clients"></a></div>
                            <div class="oc-item"><a href="#"><img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/clients/2.png" alt="Clients"></a></div>
                            <div class="oc-item"><a href="#"><img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/clients/3.png" alt="Clients"></a></div>
                            <div class="oc-item"><a href="#"><img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/clients/4.png" alt="Clients"></a></div>
                            <div class="oc-item"><a href="#"><img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/clients/5.png" alt="Clients"></a></div>
                            <div class="oc-item"><a href="#"><img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/clients/6.png" alt="Clients"></a></div>
                            <div class="oc-item"><a href="#"><img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/clients/7.png" alt="Clients"></a></div>
                            <div class="oc-item"><a href="#"><img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/clients/8.png" alt="Clients"></a></div>
                            <div class="oc-item"><a href="#"><img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/clients/9.png" alt="Clients"></a></div>
                            <div class="oc-item"><a href="#"><img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/clients/10.png" alt="Clients"></a></div>

                        </div>

                    </div>

                </div>

                <div id="section-contact" class="page-section notoppadding">

                    <div class="row noleftmargin norightmargin bottommargin-lg common-height">
                        <div id="map" class="col-md-8 col-sm-6 gmap hidden-xs"></div>
                        <div class="col-md-4 col-sm-6" style="background-color: #F5F5F5;">
                            <div class="col-padding max-height">
                                <h3 class="font-body t400 ls1">Our Headquarters</h3>

                                <div style="font-size: 16px; line-height: 1.7;">
                                    <address style="line-height: 1.7;">
                                        <strong>North America:</strong><br>
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                    </address>

                                    <div class="clear topmargin-sm"></div>

                                    <address style="line-height: 1.7;">
                                        <strong>Europe:</strong><br>
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                    </address>

                                    <div class="clear topmargin"></div>

                                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                                    <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="container clearfix">

                        <div class="divcenter topmargin" style="max-width: 850px;">

                            <div class="contact-widget">

                                <div class="contact-form-result"></div>

                                <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

                                    <div class="form-process"></div>

                                    <div class="col_half">
                                        <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control border-form-control required" placeholder="Name" />
                                    </div>
                                    <div class="col_half col_last">
                                        <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control border-form-control" placeholder="Email Address" />
                                    </div>

                                    <div class="clear"></div>

                                    <div class="col_one_third">
                                        <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control border-form-control" placeholder="Phone" />
                                    </div>

                                    <div class="col_two_third col_last">
                                        <input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control border-form-control" placeholder="Subject" />
                                    </div>

                                    <div class="clear"></div>

                                    <div class="col_full">
                                        <textarea class="required sm-form-control border-form-control" id="template-contactform-message" name="template-contactform-message" rows="7" cols="30" placeholder="Your Message"></textarea>
                                    </div>

                                    <div class="col_full center">
                                        <button class="button button-border button-circle t500 noleftmargin topmargin-sm" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                                        <br>
                                        <small style="display: block; font-size: 13px; margin-top: 15px;">We'll do our best to get back to you within 6-8 working hours.</small>
                                    </div>

                                    <div class="clear"></div>

                                    <div class="col_full hidden">
                                        <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section><!-- #content end -->

        <!-- Footer
        ============================================= -->
        <footer id="footer" class="dark noborder">

            <div class="container center">
                <div class="footer-widgets-wrap">

                    <div class="row divcenter clearfix">

                        <div class="col-md-4">

                            <div class="widget clearfix">
                                <h4>Site Links</h4>

                                <ul class="list-unstyled footer-site-links nobottommargin">
                                    <li><a href="#" data-scrollto="#wrapper" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Top</a></li>
                                    <li><a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">About</a></li>
                                    <li><a href="#" data-scrollto="#section-works" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Works</a></li>
                                    <li><a href="#" data-scrollto="#section-services" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Services</a></li>
                                    <li><a href="#" data-scrollto="#section-blog" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Blog</a></li>
                                    <li><a href="#" data-scrollto="#section-contact" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Contact</a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="widget subscribe-widget clearfix" data-loader="button">
                                <h4>Subscribe</h4>

                                <div class="widget-subscribe-form-result"></div>
                                <form id="widget-subscribe-form" action="../include/subscribe.php" role="form" method="post" class="nobottommargin">
                                    <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control input-lg not-dark required email" placeholder="Your Email Address">
                                    <button class="button button-border button-circle button-light topmargin-sm" type="submit">Subscribe Now</button>
                                </form>
                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="widget clearfix">
                                <h4>Contact</h4>

                                <p class="lead">795 Folsom Ave, Suite 600<br>San Francisco, CA 94107</p>

                                <div class="center topmargin-sm">
                                    <a href="#" class="social-icon inline-block noborder si-small si-facebook" title="Facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon inline-block noborder si-small si-twitter" title="Twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon inline-block noborder si-small si-github" title="Github">
                                        <i class="icon-github"></i>
                                        <i class="icon-github"></i>
                                    </a>
                                    <a href="#" class="social-icon inline-block noborder si-small si-pinterest" title="Pinterest">
                                        <i class="icon-pinterest"></i>
                                        <i class="icon-pinterest"></i>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <div id="copyrights">
                <div class="container center clearfix">
                    Copyright Canvas 2015 | All Rights Reserved
                </div>
            </div>

        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="<?php echo \yii::$app->view->theme->baseUrl; ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo \yii::$app->view->theme->baseUrl; ?>/js/plugins.js"></script>

    <!-- Google Map JavaScripts
    ============================================= -->
    <script async defer src="https://maps.google.com/maps/api/js?key=AIzaSyAAjJH_JV9vwqC_5gO-_2zhkivJ1EcojLQ&callback=initMap"></script>
    <script type="text/javascript" src="<?php echo \yii::$app->view->theme->baseUrl; ?>/js/jquery.gmap.js"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="<?php echo \yii::$app->view->theme->baseUrl; ?>/js/functions.js"></script>
  <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>