<?php
include '../layout/userLayout.php';
include '../partials/user-nav.php';
include '../partials/user-sidebar.php';
include '../../config.php';


$gyms = [];

$sql = "SELECT id, name, address, description, membership_fee, monthly_fee, daily_fee, working_hours FROM gyms";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $gyms[] = $row;
    }
}


?>

<section id="content">
    <main>
        <div class="head-title">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/public/images/c-2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/public/images/c-3.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/public/images/c-4.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <ul class="box-info">
            <a href="/users/gym-list/?id=crossfitBox&type=speciality">
                <li id="crossfit">
                    <span class="text">
                        <h3>CrossFit Boxes</h3>
                    </span>
                </li>
            </a>
            <a href="/users/gym-list/?id=yogaStudio&type=speciality">
                <li id="yoga">
                    <span class="text">
                        <h3>Yoga Studios</h3>
                    </span>
                </li>
            </a>
            <a href="/users/gym-list/?id=pilatesStudio&type=speciality">
                <li id="pilate">
                    <span class="text">
                        <h3>Pilates Studios</h3>
                    </span>
                </li>
            </a>
            <a href="/users/gym-list/?id=mmaGym&type=speciality">
                <li id="mma">
                    <span class="text">
                        <h3>MMA Gyms</h3>
                    </span>
                </li>
            </a>
        </ul>




        <div class="table-data">
            <div class="order" style="padding-bottom: 50px;">
                <div class="head">
                    <h3>Best Gyms for you</h3>
                </div>
                <div class="table">
                    <?php foreach ($gyms as $gym): ?>
                        <div class="card">
                            <div class="row no-gutters m-1">
                                <!-- Display image if available, otherwise show default image -->
                                <div class="col-md-4 d-flex align-items-center">

                                    <img class="card-img" src="/public/images/default-gym.jpg" alt="Default Gym Image">

                                </div>

                                <div class="col-md-8 d-flex align-items-stretch">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <h5 class="card-title"><?php echo htmlspecialchars($gym['name']); ?>
                                            <span class="verified-badge">
                                                <i class="fa-solid fa-dumbbell" style="color: #87f7e3;"></i> Verified
                                            </span>
                                        </h5>
                                        <p><?php echo htmlspecialchars($gym['address']); ?></p>
                                        <p class="card-text description">
                                            <?php echo htmlspecialchars($gym['description']); ?></p>
                                        <div>
                                            <a href="/views/users/gym-detail.php?id=<?php echo $gym['id']; ?>"
                                                class="btn btn-primary">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <div class="text-center mt-5">
                        <a href="/users/gym-list?type=exploreMore" class="btn btn-info">Explore More</a>
                    </div>
                </div>
            </div>
        </div>

        <?php /*

   <div class="table-data">
       <div class="order" style="padding-bottom: 50px;">
           <div class="head">
               <h3>Best Gyms for you</h3>
           </div>
           <div class="table">
               {{#if userloggedin}}
               {{#each gymscloser}}
               <div class="card">
                   <div class="row no-gutters m-1">

                       <!-- Check if the images array is not empty -->



                       {{#if images.[0]}}
                       <div class="col-md-4 d-flex align-items-center">
                           <img class="card-img" src="data:{{images.[0].contentType}};base64,{{images.[0].data}}">
                       </div>
                       {{/if}}


                       <div class="col-md-8 d-flex align-items-stretch">
                           <div class="card-body d-flex flex-column justify-content-between">
                               <h5 class="card-title">{{this.name}} <span class="verified-badge">
                                       <i class="fa-solid fa-dumbbell" style="color: #87f7e3;"></i>Verified
                                   </span></h5>
                               <p>{{this.address}}</p>
                               <p class="card-text description">{{this.description}}</p>
                               <div>
                                   <a href="/users/gym-detail/?id={{this._id}}" class="btn btn-primary">Book
                                       Now</a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               {{/each}}
               <div class="text-center mt-5">
                   <a href="/users/gym-list?type=exploreMore" class="btn btn-info">Explore More</a>
               </div>
               {{else}}
               <!-- Render message to prompt user to log in -->
               <div class="message-container">
                   <div class="message">
                       <p>To access nearest fitness centers, please log in or create an account.</p>
                       <a href="/users/login" class="btn btn-primary">Log In</a>
                   </div>
               </div>
               {{/if}}

           </div>
       </div>
   </div>
   */ ?>

        <a class="flexi-button" href="/users/chat">
            <svg class="gym-svgIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                <path
                    d="M96 64c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V224v64V448c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V384H64c-17.7 0-32-14.3-32-32V288c-17.7 0-32-14.3-32-32s14.3-32 32-32V160c0-17.7 14.3-32 32-32H96V64zm448 0v64h32c17.7 0 32 14.3 32 32v64c17.7 0 32 14.3 32 32s-14.3 32-32 32v64c0 17.7-14.3 32-32 32H544v64c0 17.7-14.3 32-32 32H480c-17.7 0-32-14.3-32-32V288 224 64c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32zM416 224v64H224V224H416z" />
            </svg>
        </a>

    </main>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var descriptions = document.getElementsByClassName("description");
        var maxLength = 150; // Maximum length of description

        for (var i = 0; i < descriptions.length; i++) {
            var descriptionElement = descriptions[i];
            var description = descriptionElement.textContent.trim();

            if (description.length > maxLength) {
                var shortenedDescription = description.substr(0, maxLength) + " ";
                var moreText = document.createElement("span");
                moreText.innerHTML = "<strong>more...</strong>";
                descriptionElement.textContent = "";
                descriptionElement.appendChild(document.createTextNode(shortenedDescription));
                descriptionElement.appendChild(moreText);
            }
        }
    });

</script>