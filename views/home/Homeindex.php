<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLEXI LINK- A GYM WEBSITE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;700&family=Sora:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="/public/stylesheets/Homestyle.css">
</head>

<body>

    <div class="loader-section">
        <div class="loader">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
        </div>
    </div>


    <main id="first-page">

        <!-- HEADER -->
        
        <header id="header" class="primary-header navbar-hidden fixed-top">
            <div class="pl-5 pr-5">
                <div class="nav-wrapper">
                    <a class="logo">
                        <i class="fa-solid fa-dumbbell mb-3"></i>  FLEXI LINK</a>
                        <button class="mobile-nav-toggle display-lg-block" aria-controls="primary-navigation" aria-expanded="false">
                            <span class="fa-solid fa-bars" aria-hidden="true"></span>
                            <span class="visually-hidden">Menu</span>
                        </button>
                    <nav class="primary-navigation display-sm-none ml-auto mr-auto" id="primary-navigation">
                        <ul aria-label="Primary" role="list" class="nav-list">
                            <li><a href="#first-page">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#Why-Us">Why Us</a></li>
                            <li><a href="#testimonials">Testimonials</a></li>
                            <li><a href="#pricing-section">Pricing</a></li>
                            <li><a href="#contact-us">Contact</a></li>
                            <li class="nav-signup">
                                <div>
                                    <a href="#" role="button" class="dropdown-toggle" id="signupDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sign Up
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="signupDropdown" style="background-color: transparent;">
                                        <ul class="nav-ul">
                                            <li><a class="dropdown-item" href="/views/users/login.php">User Sign Up</a></li>
                                            <li><a class="dropdown-item" href="/vews/gym-owner/register.php">Owner Sign Up</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li> 
                        </ul>
                    </nav>
                
                     <div class="dropdown show">
                        <a class="btn | display-sm-none dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sign Up
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a style="color: white;" class="dropdown-item" href="/views/users/login.php">User</a>
                            <a style="color: white;" class="dropdown-item" href="/views/gym-owner/register.php">Owner</a>
                        </div>
                    </div> 
                </div>
            </div>
        </header>


        <!-- HERO-SECTION -->
        <section class="hero-section">
            <div class="container">
                <div class="flow | text-center-sm-only hero">
                    <h1 class="fs-primary-heading fw-bold uppercase"><span class="special-text"> Fitness</span> is your
                        passion <span class="special-text">with</span> aggression</h1>
                    <p>A unified fitness centers platform.</p>
                    <a href="/views/users/login.php" role="button" class="btn">User Sign In</a>
                    <a href="/views/gym-owner/login.php" role="button" class="btn ml-3">Owner Sign In</a>
                    <!-- <button class="btn">Get Started</button> -->
                </div>
            </div>
        </section>
    </main>


    <!-- INTRODUCTION-SECTION -->
    <section class="introduction | padding-block-900" id="about">
        <div class="container about-container d-flex">
                <div class="about-text-container | text-center">
                    <h2 class="fs-secondary-heading fw-bold uppercase text-center">Welcome to <span class="special-text">Flexi Link</span></h2>
                    <p data-width="wide" class="fs-500 text-justify">Flexi Link offers the ultimate freedom and flexibility for fitness enthusiasts. With our innovative platform, customers can access a variety of top-notch fitness centers on a daily fee basis, eliminating the need for long-term commitments or memberships. Whether you're a traveler, a busy professional, or simply prefer variety in your workouts, Flexi Link provides seamless access to a network of gyms, ensuring you never miss a workout wherever you go. Say goodbye to restrictive contracts and hello to convenience with Flexi Link because fitness should adapt to your lifestyle, not the other way around.Our approach not only benefits users but also offers significant advantages to gym owners. By offering daily usage options, fitness centers can tap into a new revenue stream and attract a wider customer base. Moreover, our platform simplifies membership management for gym owners, allowing them to track active members and monitor fee payments efficiently.</p>
                    <!-- <button class="btn">Get Started</button> -->
                </div>
                <div class="about-img-container display-sm-none">
                    <img src="/public/images/program-img1.jpg" alt="" class="introduction-img">
                </div>
        </div>
    </section>


    <!-- WHY US SECTION -->
    <section class="WhyUs | padding-block-900" id="Why-Us">
        <div class="container">
            <h2 class="fs-secondary-heading fw-bold uppercase text-center mb-5">Why <span class="special-text">Us</span></h2>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 why-us-box">
                    <div class="why-us-sub bg-secondary">
                        <h5 class="text-center">ULTIMATE FLEXIBILITY</h5>
                        <p class="p-2"> Provides seamless access to a network of gyms, ensuring you never miss a workout wherever you go.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 why-us-box">
                    <div class="why-us-sub bg-secondary">
                        <h5 class="text-center">POOL OF CHOICES</h5>
                        <p class="p-2">Extensive Array of Choices for the customers to choose from.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 why-us-box">
                    <div class="why-us-sub bg-secondary">
                        <h5 class="text-center">COST-EFFECTIVE</h5>
                        <p class="p-2">Say goodbye to restrictive contracts, access a variety of top-notch fitness centers on a daily fee basis.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 why-us-box">
                    <div class="why-us-sub bg-secondary">
                        <h5 class="text-center">EASE OF USE</h5>
                        <p class="p-2">Advanced algorithms to streamline bookings, payments, and offer personalized recommendations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimnonials SECTION -->
    <section class="products | padding-block-900" id="testimonials">
        <div class="testimonials text-center">
            <div class="container">
              <h2 class="fs-secondary-heading fw-bold uppercase text-center mb-5">Testi<span class="special-text">monials</span></h2>
              <div class="row">
                <div class="col-md-6 col-lg-4">
                  <div class="card border-light text-center">
                    <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                    <div class="card-body blockquote">
                      <p class="card-text">"This website changed the game for me. Now, I can access top-notch gyms near my location with just a few clicks. It's convenient, flexible, and perfect for staying fit on-the-go!"</p>
                      <footer class="blockquote-footer"><cite title="Source Title">Billy</cite></footer>
                    </div>
                  </div>
                </div>
        
                <div class="col-md-6 col-lg-4">
                  <div class="card border-light bg-light text-center">
                    <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                    <div class="card-body blockquote">
                      <p class="card-text">"No more commitments! With this website, I can pay a daily fee to access fitness centers nearby. It's convenient, motivating, and exactly what I need to stay on track."</p>
                      <footer class="blockquote-footer"><cite title="Source Title">Jennifer</cite></footer>
                    </div>
                  </div>
                </div>
        
                <div class="col-md-6 col-lg-4">
                  <div class="card border-light bg-light text-center">
                    <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                    <div class="card-body blockquote">
                      <p class="card-text">"This website boosted our business! Now, we attract more customers with daily usage fees and efficiently manage memberships. It's a win-win for both gym owners and customers."</p>
                      <footer class="blockquote-footer"><cite title="Source Title">Kevin</cite></footer>
                    </div>
                  </div>
                </div>
        
              </div>
            </div>
        
          </div>
    </section>

    <!-- PRICING SECTION -->
<section class="pricing | padding-block-900" id="pricing-section">
    <div class="container">
        <h2 class="fs-secondary-heading fw-bold text-center">OUR <span class="special-text">PLANS</span></h2>
        <div class="plans padding-block-700 items-wrapper">
            <div class="plan-item bg-secondary">
                <div class="plan-icon">
                    <i class="fas fa-calendar-day"></i>
                </div>
                <h5 class="fs-700 fw-semi-bold pricing-type">Daily Fee</h5>
                <p class="fs-400">Say goodbye to restrictive contracts, access a variety of top-notch fitness centers on a daily fee basis.</p>
            </div>
            <div class="plan-item bg-secondary">
                <div class="plan-icon">
                    <i class="fas fa-id-card"></i>
                </div>
                <h5 class="fs-700 fw-semi-bold pricing-type">Membership</h5>
                <p class="fs-400">Upgrade to a Membership so that you could access gyms on a long course.</p>
            </div>
        </div>
    </div>
</section>


    <!-- FOOTER -->
    <footer class="primary-footer | padding-block-900" id="contact-us">
        <div class="container mt-3">
            <div class="even-columns text-center-sm-only">
                <div>
                    <h4 class="fs-700 uppercase fw-bold">Follow us</h4>
                    <ul class="social-icons " role="list">
                        <li><a href=""><i class="fa-brands fa-facebook | text-white fs-700"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-twitter | text-white fs-700"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-instagram | text-white fs-700"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-linkedin | text-white fs-700"></i></a></li>
                    </ul>
                    <a class="logo">
                        <i class="fa-solid fa-dumbbell"></i>Flexi Link</a>
                </div>
                <div>
                    <h4 class="fs-700 uppercase fw-bold">Links</h4>
                    <ul role="list" class="primary-footer-links">
                        <li><a href="#first-page">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#Why-Us">Why Us</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#pricing-section">Pricing</a></li>
                        <li><a href="#contact-us">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="fs-700 uppercase fw-bold">Quick Contacts</h4>
                    <ul role="list" class="contact-links">
                        <li><a href=""><i class="fa-solid fa-phone"></i>+93**35***52</a></li>
                        <li><a href=""><i class="fa-solid fa-envelope"></i></i>flexilink123@test.com</a></li>
                        <li><a href=""><i class="fa-solid fa-user"></i>@test__123</a></li>
                        <li><a href=""><i class="fa-solid fa-globe"></i>www.flexi.com</a></li>
                        <li><a href=""><i class="fa-solid fa-location-dot"></i>123/4 block 5 street #44 near bakery
                                california, America, USA</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <h5 class="fs-500 fw-semi-bold text-center"><span class="special-text"><i
                class="fa-solid fa-dumbbell"></i>FLEXI LINK</span> Ⓒ 2024 - All Rights Reserved</h5>
            </div>


    </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="/public/javascript/Homescript.js"></script>

</body>
</html>