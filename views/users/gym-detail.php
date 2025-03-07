<?php
include '../layout/userLayout.php';
include '../partials/user-nav.php';
include '../partials/user-sidebar.php';
include '../../config.php';
$gym_id=$_GET['id'];
$sql = "SELECT * FROM gyms WHERE id='$gym_id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $gym_details= $row;
    
}
?>

<section id="content">
    <main>
        <div>
            <h2 class="gym-name"><?php print($gym_details['name']);  ?></h2>
        </div>

        <!-- Carousel container -->
        <div class="gym-detail-carousel-container">
            <!-- Bootstrap Carousel HTML goes here -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    /*
                    <!-- Video 
                     
                    <div class="carousel-item active">
                        <video class="d-block w-100" muted autoplay loop>
                            <source src="data:video/mp4;base64,{{details.video.data}}"
                                type="{{details.video.contentType}}">
                        </video>
                    </div>
                    -->
                    <!-- Images 
                    {{#each details.images}}
                    <div class="carousel-item">
                        <img src="data:{{contentType}};base64,{{data}}" alt="{{imageName}}" alt="Image 1">
                    </div>
                    
                    {{/each}}
                    -->
                    */
                    ?>

                    <div class="carousel-item">
                        <img src="/public/images/Gym Detail/facility zoom out.jpg" class="d-block w-100" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="/public/images/Gym Detail/weight-3.jpg" class="d-block w-100" alt="Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="/public/images/Gym Detail/meeting.jpg" class="d-block w-100" alt="Image 3">
                    </div>
                    <div class="carousel-item">
                        <img src="/public/images/Gym Detail/pilates-1.jpg" class="d-block w-100" alt="Image 4">
                    </div>
                    <div class="carousel-item">
                        <img src="/public/images/Gym Detail/weight-1t.jpg" class="d-block w-100" alt="Image 5">
                    </div>
                    <div class="carousel-item">
                        <img src="/public/images/Gym Detail/weight-4.jpg" class="d-block w-100" alt="Image 6">
                    </div> 
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-6">
                    <!-- Video 
                    <div class="gym-detail-video-container">
                        <video class="d-block w-100" muted autoplay loop>
                            <source src="data:video/mp4;base64,{{details.video.data}}"
                                type="{{details.video.contentType}}">
                        </video>
                    </div>
                    -->
                </div>
                <div class="col-lg-6">
                    <!-- Image container for higher screen sizes -->
                    <div class="gym-detail-image-container">

                        
                        
                        
                        <!-- Images go here -->

                        <img src="/public/images/Gym Detail/weight-3.jpg" alt="Image 2">
                        <img src="/public/images/Gym Detail/meeting.jpg" alt="Image 3">
                        <img src="/public/images/Gym Detail/pilates-1.jpg" alt="Image 4">
                        <img src="/public/images/Gym Detail/weight-1t.jpg" alt="Image 5">
                        <img src="/public/images/Gym Detail/weight-4.jpg" alt="Image 6"> 
                    </div>
                </div>
            </div>
        </div>

        <div class="table-data">
            <div class="order">
                <div class="location container-fluid border-bottom">
                    <div class="row">
                        <div class="col-12 col-lg-6 d-flex flex-column justify-content-center p-0">
                            <div class="d-flex flex-row">
                                <i class="fa-solid fa-location-dot mt-1 mr-3"></i>
                                <p class="address">
                                <?php print($gym_details['address']);  ?>
                                </p>
                            </div>
                            <div>
                                <a class="ml-5" onclick="#__navigateToDirection()" style="cursor:pointer">
                                    <div class="navigate d-flex flex-row">
                                        <p>NAVIGATE</p>
                                        <i class="fa-solid fa-location-arrow ml-1" style="font-size: 1.5rem;"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12  col-lg-6 mb-4 p-0">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
                <div class="working-hour border-bottom mt-3">
                    <div class="d-flex flex-row">
                        <i class="fa-regular fa-clock mt-1 mr-3"></i>
                        <h5>Working hours</h5>
                    </div>
                    <div class="d-flex flex-row">
                        <p style="padding-left: 32px;"><?php print($gym_details['working_hours']);  ?></p>
                        
                        <p class="text-success ml-5">Open</p>
                        <!--
                        {{else}}
                        <p class="text-danger ml-5">Closed</p>
                        {{/if}}
-->
                    </div>
                </div>
                <!--
                <div class="amneties border-bottom mt-3">
                    <h5>Amneties</h5>
                    <div class="amneties-flex-container">

                    {{#each amenities}}
                    <div class="amneties-item">
                        <i class="fa-solid {{lookup ../iconMap this}} mr-2"></i>
                        {{this}}
                    </div>
                    {{/each}}
                    
                    </div>
                </div>
-->
                <div class="gym-description border-bottom mt-3">
                    <h5>Desciption</h5>
                    <p>
                    <?php print($gym_details['description']);  ?></p>
                </div>

                <div class="container-fluid mt-3">
                    <div class="row">
                        <div class="col-12 col-md-6 my-3">
                            <div class="gym-detail-card-basic mx-auto">
                                <div class="gym-detail-card-header gym-detail-header-basic">
                                    <h4>Use it once</h4>
                                </div>
                                <div class="gym-detail-card-body">
                                    <p>
                                    <h2>Rs <?php print($gym_details['daily_fee']);  ?>/day</h2>
                                    </p>
                                    <div class="card-element-hidden-basic p-3">
                                        <ul class="gym-detail-card-element-container m-3 text-left">
                                            <li class="card-element">Access to gym facilities for 3 hours</li>
                                            <li class="card-element">Basic nutritional guidance</li>
                                            <li class="card-element">One-time entry</li>
                                            <!-- <li class="card-element">20000 users</li> -->
                                        </ul>
                                        <button id="bookNowBtn" class="price-btn price-btn-basic">Book now</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 my-3">
                            <div class="gym-detail-card-standard mx-auto">
                                <div class="gym-detail-card-header gym-detail-header-standard">
                                    <h4>Be our member <br>@Rs <?php print($gym_details['membership_fee']);  ?></h4>
                                </div>
                                <div class="gym-detail-card-body">
                                    <p>
                                    <h2>Rs <?php print($gym_details['monthly_fee']);  ?> / mo</h2>
                                    </p>
                                    <div class="card-element-hidden-standard p-3">
                                        <ul class="gym-detail-card-element-container card-element-list m-3 text-left">
                                            <li class="card-element">Unlimited access to gym facilities</li>
                                            <li class="card-element">Personalized workout plans</li>
                                            <li class="card-element">Assessment of progress on a quarterly basis
                                            </li>
                                            <!-- <li class="card-element">40000 users</li> -->
                                        </ul>
                                        <a href="/views/users/membership.php?id=<?php print($gym_details['id']);  ?>"
                                            class="price-btn price-btn-standard">Book now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <label style="display: none;" for="" id="moonjan">{{longitude}}</label>
            <label style="display: none;" for="" id="moonjan2">{{lattitude}}</label>
        </div>

        <div class="review-section mt-4">
            <div class="gym-reviews">
                <h3 class="section-title">Reviews</h3>
        
                <div class="overall-rating">
                    <div class="rating-circle">
                        <span class="rating-number">4.7</span>
                    </div>
                    <div class="rating-details">
                         <div class="star-rating" id="overallStarRating"></div>
                        <span class="total-reviews">Based on 128 reviews</span>
                    </div>
                </div>
        
                <div class="review-list">
                    <div class="review-item">
                        <div class="reviewer-info">
                            <div class="reviewer-initial">J</div>
                            <div class="reviewer-details">
                                <span class="reviewer-name">John D.</span>
                                <span class="review-date">2 days ago</span>
                            </div>
                        </div>
                        <div class="review-content">
                            <div class="star-rating" id="reviewStarRating"></div>
                            <p class="review-text">Great equipment and friendly staff! The classes are challenging and fun.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</section>

<script>
    document.getElementById("bookNowBtn").addEventListener("click", function () {
        const gymName = "{{details.name}}"; // Assuming details.name is accessible from Handlebars
        const dailyFee = {{ details.dailyFee }};
        const gymid = "{{details._id}}";

        const bookingDetails = {
            gymName: gymName,
            dailyFee: dailyFee,
            gymid: gymid
        };

        // Send request to server to check ticket count
        fetch('/users/check-ticket-count', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ gymid: gymid })
        })
        .then(response => response.json())
        .then(data => {
            if (data.allowed) {
                // If allowed to proceed, send booking details to server for Stripe payment
                fetch('/users/stripe-checkout', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(bookingDetails)
                })
                .then(response => response.json())
                .then(data => {
                    // Redirect to the URL received from the server
                    window.location.href = data.url;
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            } else {
                // Display a message that the ticket limit has been reached
                console.log("Message:",data.message)
                alert(data.message);
                window.location.href = `/users/member/payment?id=${gymid}`;
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });



    function createStarRating(elementId, rating) {
            const starRatingElement = document.getElementById(elementId);
            starRatingElement.innerHTML = '';  

            for (let i = 1; i <= 5; i++) {
                const star = document.createElement('span');
                star.classList.add('star');
                if (rating >= i) {
                    star.classList.add('filled');
                } else if (rating >= i - 0.5) {
                    star.classList.add('half-filled');
                }
                starRatingElement.appendChild(star);
            }
    }

    createStarRating('overallStarRating', 4.7);
    createStarRating('reviewStarRating', 4.5);

</script>


