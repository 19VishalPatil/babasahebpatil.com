<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php include "meta.php";?>
    <!-- Title  -->
    <title>Babasaheb Patil</title>

    <?php include "upscript.php";?>

</head>

<body class="home-main-crev main-bg">

    <?php include "preloader.php";?>


    <div class="cursor"></div>


    <?php include "scrolltop.php";?>



    <div id="smooth-wrapper">

        <!-- ==================== Start Navbar ==================== -->

        <?php include "menu.php";?>

        <!-- ==================== End Navbar ==================== -->

        <div id="smooth-content">

            <div class="main-box main-bg ontop">
                <main>

                    <!-- ==================== Start Slider ==================== -->

                    <header class="work-header section-padding pb-0">
                        <div class="container mt-80">
                            <div class="row">
                                <div class="col-12">
                                    <div class="caption">
                                        <h6 class="sub-title">Movies / Adds / TV Shows</h6>
                                        <h1>All Projects</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>

                    <!-- ==================== End Slider ==================== -->



                    <!-- ==================== Start Portfolio ==================== -->

                    <section class="portfolio section-padding pb-70">
                        <div class="container-xxl">

                            <div class="row">
                                <!-- filter links -->
                                <div class="filtering col-12 mb-80 text-center">
                                    <div class="filter">
                                        <span class="text">Filter By :</span>
                                        <?php
                                            $category_query = mysqli_query($conn,"SELECT * FROM `project_category`")or die(mysqli_error($conn));
                                            while($s = mysqli_fetch_array($category_query)){
                                            $cat_name = $s['category_name'];
                                            $cat_id = $s['category_id'];
                                        ?>
                                        <span class='active'><?php echo $cat_name;?></span>
                                        <?php
                                            }
                                    ?>
                                    </div>
                                </div>
                            </div>

                            <div class="gallery">

                                <div class="row grid md-marg">

                                    <div class="col-lg-4 col-md-6 items web info-overlay mb-50">
                                        <div class="item-img o-hidden">
                                            <a href="project-details1.html" class="imago wow">
                                                <div class="inner wow">
                                                    <img src="assets/imgs/freelancer/works/2002_Navra Hava All Rounder.jpg"
                                                        alt="image">
                                                </div>
                                            </a>
                                            <div class="info">
                                                <span class="mb-15">
                                                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <h6 class="sub-title tag"><a href="project-details1.html">© 2023 <br>
                                                        Design ART</a></h6>
                                                <h5><a href="project-details1.html">Character Design</a></h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 items app info-overlay mb-50">
                                        <div class="item-img o-hidden">
                                            <a href="project-details1.html" class="imago wow">
                                                <div class="inner wow">
                                                    <img src="assets/imgs/freelancer/works/2004_Juiley.jpg" alt="image">
                                                </div>
                                            </a>
                                            <div class="info">
                                                <span class="mb-15">
                                                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <h6 class="sub-title tag"><a href="project-details1.html">© 2023 <br>
                                                        Design ART</a></h6>
                                                <h5><a href="project-details1.html">Character Design</a></h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 items brand info-overlay mb-50">
                                        <div class="item-img o-hidden">
                                            <a href="project-details1.html" class="imago wow">
                                                <div class="inner wow">
                                                    <img src="assets/imgs/freelancer/works/2005_davbindu.jpg"
                                                        alt="image">
                                                </div>
                                            </a>
                                            <div class="info">
                                                <span class="mb-15">
                                                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <h6 class="sub-title tag"><a href="project-details1.html">© 2023 <br>
                                                        Design ART</a></h6>
                                                <h5><a href="project-details1.html">Character Design</a></h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 items web info-overlay mb-50">
                                        <div class="item-img o-hidden">
                                            <a href="project-details1.html" class="imago wow">
                                                <div class="inner wow">
                                                    <img src="assets/imgs/freelancer/works/2005_Jo Andar Fit Wo Bahar Hit.jpg"
                                                        alt="image">
                                                </div>
                                            </a>
                                            <div class="info">
                                                <span class="mb-15">
                                                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <h6 class="sub-title tag"><a href="project-details1.html">© 2023 <br>
                                                        Design ART</a></h6>
                                                <h5><a href="project-details1.html">Character Design</a></h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 items brand info-overlay mb-50">
                                        <div class="item-img o-hidden">
                                            <a href="project-details1.html" class="imago wow">
                                                <div class="inner wow">
                                                    <img src="assets/imgs/freelancer/works/2006_Akhand Saubhagyavati.jpg"
                                                        alt="image">
                                                </div>
                                            </a>
                                            <div class="info">
                                                <span class="mb-15">
                                                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <h6 class="sub-title tag"><a href="project-details1.html">© 2023 <br>
                                                        Design ART</a></h6>
                                                <h5><a href="project-details1.html">Character Design</a></h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 items app info-overlay mb-50">
                                        <div class="item-img o-hidden">
                                            <a href="project-details1.html" class="imago wow">
                                                <div class="inner wow">
                                                    <img src="assets/imgs/freelancer/works/2006_Labaad Kutali.jpg"
                                                        alt="image">
                                                </div>
                                            </a>
                                            <div class="info">
                                                <span class="mb-15">
                                                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <h6 class="sub-title tag"><a href="project-details1.html">© 2023 <br>
                                                        Design ART</a></h6>
                                                <h5><a href="project-details1.html">Character Design</a></h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 items web info-overlay mb-50">
                                        <div class="item-img o-hidden">
                                            <a href="project-details1.html" class="imago wow">
                                                <div class="inner wow">
                                                    <img src="assets/imgs/freelancer/works/2007_mulgi lagnachi aahe.jpg"
                                                        alt="image">
                                                </div>
                                            </a>
                                            <div class="info">
                                                <span class="mb-15">
                                                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <h6 class="sub-title tag"><a href="project-details1.html">© 2023 <br>
                                                        Design ART</a></h6>
                                                <h5><a href="project-details1.html">Character Design</a></h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 items brand info-overlay mb-50">
                                        <div class="item-img o-hidden">
                                            <a href="project-details1.html" class="imago wow">
                                                <div class="inner wow">
                                                    <img src="assets/imgs/freelancer/works/2007_Pyar Kare Dis.jpg"
                                                        alt="image">
                                                </div>
                                            </a>
                                            <div class="info">
                                                <span class="mb-15">
                                                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <h6 class="sub-title tag"><a href="project-details1.html">© 2023 <br>
                                                        Design ART</a></h6>
                                                <h5><a href="project-details1.html">Character Design</a></h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 items app info-overlay mb-50">
                                        <div class="item-img o-hidden">
                                            <a href="project-details1.html" class="imago wow">
                                                <div class="inner wow">
                                                    <img src="assets/imgs/freelancer/works/2008_Supari.jpg" alt="image">
                                                </div>
                                            </a>
                                            <div class="info">
                                                <span class="mb-15">
                                                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <h6 class="sub-title tag"><a href="project-details1.html">© 2023 <br>
                                                        Design ART</a></h6>
                                                <h5><a href="project-details1.html">Character Design</a></h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 items app info-overlay mb-50">
                                        <div class="item-img o-hidden">
                                            <a href="project-details1.html" class="imago wow">
                                                <div class="inner wow">
                                                    <img src="assets/imgs/freelancer/works/2009_Yalkot Yalkot Jai Malhar.jpg"
                                                        alt="image">
                                                </div>
                                            </a>
                                            <div class="info">
                                                <span class="mb-15">
                                                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <h6 class="sub-title tag"><a href="project-details1.html">© 2023 <br>
                                                        Design ART</a></h6>
                                                <h5><a href="project-details1.html">Character Design</a></h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 items app info-overlay mb-50">
                                        <div class="item-img o-hidden">
                                            <a href="project-details1.html" class="imago wow">
                                                <div class="inner wow">
                                                    <img src="assets/imgs/freelancer/works/Prem Pakhar .jpg"
                                                        alt="image">
                                                </div>
                                            </a>
                                            <div class="info">
                                                <span class="mb-15">
                                                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <h6 class="sub-title tag"><a href="project-details1.html">© 2023 <br>
                                                        Design ART</a></h6>
                                                <h5><a href="project-details1.html">Character Design</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </section>

                    <!-- ==================== End Portfolio ==================== -->


                </main>

            </div>

            <?php include "contact.php";?>


            <?php include "footer.php";?>


        </div>
    </div>

    <?php include "downscript.php";?>

</body>

</html>