<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Detail Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="/public/stylesheets/gymdashboard.css">

    <style>
        .search-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 1rem;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    
        .search-form .input-group {
            display: flex;
        }
    
        .search-form .form-control {
            flex: 1;
            padding: 0.75rem 1rem;
            height: 100% !important;
            border: 1px solid #ced4da;
            border-radius: 4px 0 0 4px;
            font-size: 1rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
    
        .search-form .form-control:focus,
        .search-form .btn:focus{
            outline: none !important;
            box-shadow: none !important;
        }

        .search-form .btn {
            background-color: #007bff !important;
            color: #fff;
            border: none;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            transition: background-color 0.15s ease-in-out;
        }
    
        .btn:hover {
            background-color: #0069d9;
        }
    
        .btn i {
            margin-right: 0.5rem;
        }
    </style>

</head>

<body>

    <!-- NAV BAR -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: hsl(230, 73%, 5%);">
        <div class="container-fluid">
            <a href="/" class="navbar-brand brand"
                style="color: hsl(169, 88%, 75%); font-weight: 700; font-size: 1.5rem;">
                <i class="fa-solid fa-dumbbell ml-3 mr-2"></i>
                <span id="brand-text">FLEXI LINK</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-3"> <!-- Add margin-right to create spacing -->
                        <a class="nav-link active" href="/gymowner">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-3"> <!-- Add margin-right to create spacing -->
                        <a class="nav-link" href="/gymowner/analytics">Analytics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gymowner/apply-for-monetization">Get Monetized</a>
                    </li>
                </ul>
                <!-- Logout Button -->
                <div class="ml-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Logout<i class="fa-solid fa-right-from-bracket ml-2"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="owner-gym-section">

        <main class="p-md-5 p-3">
            <section class="container-fluid stats-section">
                <div class="row justify-content-center">
                    <div class="col-12 mb-md-5 mb-3">
                        <h1 class="text-uppercase text-center">{{details.name}}</h1>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6 mb-4">
                        <div class="stat-card">
                            <i class="fas fa-users"></i>
                            <h5>Total Members</h5>
                            <p class="stat-value">{{noofmembers}}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6 mb-4">
                        <div class="stat-card">
                            <i class="fas fa-calendar-alt"></i>
                            <h5>Daily Fee Customers</h5>
                            <p class="stat-value">{{dailyfeeuser}}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6 mb-4">
                        <div class="stat-card">
                            <i class="fa-solid fa-chart-pie"></i>
                            <h5>Monthly Revenue</h5>
                            <p class="stat-value">Rs {{total}}</p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="text-right mt-3"><em style="font-size: 0.8rem;">stats are displayed based on current month
                    only</em>
            </div>

            <section class="gym-media">
                <h2>Gym Gallery</h2>
                <!-- Carousel container -->
                <div class="gym-detail-carousel-container px-5">
                    <!-- Bootstrap Carousel HTML goes here -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Video -->
                            <div class="carousel-item active">
                                <video class="d-block w-100" muted autoplay loop>
                                    <source src="data:video/mp4;base64,{{details.video.data}}"
                                        type="{{details.video.contentType}}">
                                </video>
                            </div>
                            <!-- Images -->
                            {{#each details.images}}
                            <div class="carousel-item">
                                <img src="data:{{contentType}};base64,{{data}}" alt="{{imageName}}" alt="Image 1">
                            </div>
                            {{/each}}
                             <!-- <div class="carousel-item">
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
                            </div>  -->
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Video -->
                            <div class="gym-detail-video-container">
                                <video class="d-block w-100" muted autoplay loop>
                                    <source src="data:video/mp4;base64,{{details.video.data}}"
                                        type="{{details.video.contentType}}">
                                </video>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Image container for higher screen sizes -->
                            <div class="gym-detail-image-container">
                                <!-- Images go here -->
                                {{#each details.images}}
                                <img src="data:{{contentType}};base64,{{data}}" alt="{{imageName}}" alt="Image 1">
                                {{/each}}
                                <!-- <img src="/images/Gym Detail/facility zoom out.jpg" alt="Image 1">
                                <img src="/images/Gym Detail/weight-3.jpg" alt="Image 2">
                                <img src="/images/Gym Detail/meeting.jpg" alt="Image 3">
                                <img src="/images/Gym Detail/pilates-1.jpg" alt="Image 4">
                                <img src="/images/Gym Detail/weight-1t.jpg" alt="Image 5">
                                <img src="/images/Gym Detail/weight-4.jpg" alt="Image 6"> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="gym-info">
                <h2>Gym Information</h2>
                <div class="info-card p-4">
                    <!-- ADDRESS -->
                    <div class="d-flex border-bottom">
                        <i class="fas fa-map-marker-alt mr-3"></i>
                        <p class="gymAddress">
                            {{details.addressdisp}}
                        </p>
                    </div>
                    <!-- WORKING HOURS -->
                    <div class="working-hour border-bottom mt-3">
                        <div class="d-flex flex-row">
                            <i class="fa-regular fa-clock mr-3"></i>
                            <h5>Working hours</h5>
                        </div>
                        <div class="d-flex flex-row">
                            <p style="padding-left: 32px;">{{details.workingHours.morningStartTime}}am -
                                {{details.workingHours.morningEndTime}}pm</p>
                            <!-- <p class="text-success ml-5 open-status">open</p>
                            <p class="text-danger ml-5 close-status">closed</p> -->
                        </div>
                    </div>
                    <!-- AMNETIES -->
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
                    <!-- DESCRIPTION -->
                    <div class="gym-description mt-3">
                        <h5>Desciption</h5>
                        <p class="py-2">
                            {{details.description}}</p>
                    </div>
                    <!-- <button type="submit" class="btn btn-danger">Update</button> -->
                </div>
            </section>

            <section class="table">
                <h2>Customer Details</h2>
                <!-- Tab Navigation -->
                <ul class="nav nav-pills nav-justified mb-3 bg-light rounded-pill shadow-sm animated-nav"
                    role="tablist">
                    <li class="nav-item">
                        <a class="nav-link rounded-pill px-4 py-2 active" id="dailyFeeUsers-tab" data-toggle="pill"
                            href="#dailyFeeUsers" role="tab" aria-controls="dailyFeeUsers" aria-selected="false">
                            <i class="fas fa-calendar-alt me-2"></i> Daily Fee Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-pill px-4 py-2" id="registeredUsers-tab" data-toggle="pill"
                            href="#registeredUsers" role="tab" aria-controls="registeredUsers" aria-selected="false">
                            <i class="fas fa-users me-2"></i> Registered Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-pill px-4 py-2" id="recentPayments-tab" data-toggle="pill"
                            href="#recentPayments" role="tab" aria-controls="recentPayments" aria-selected="true">
                            <i class="fas fa-money-bill-wave me-2"></i> Search By Id
                        </a>
                    </li>

                </ul>
                <!-- Tab Content -->
                <div class="tab-content px-3">

                    <!-- Daily Fee Users Tab Content -->
                    <div class="tab-pane fade show active" id="dailyFeeUsers">
                        <div class="row dark rounded-top py-2 fw-bold">
                            <div>Ticket Id</div>
                            <div>User Id</div>
                            <div>Issue Date</div>
                        </div>

                        {{#unless tickets.length}}
                        <div class="text-center p-2" style="width: 100%;">No tickets</div>
                        {{else}}
                        {{#each tickets}}
                        <div class="row py-2 border-bottom">
                            <div>{{this.ticketid}}</div>
                            <div class="overflow-auto">{{this.username}}</div>
                            <div>{{this.formattedisdate}}</div>
                        </div>
                        {{/each}}
                        {{/unless}}


                    </div>

                    <!-- Registered Users Tab Content -->
                    <div class="tab-pane fade" id="registeredUsers">
                        <div class="row dark rounded-top py-2 fw-bold">
                            <div>Membership Id</div>
                            <div>User Name</div>
                            <div>Valid Date</div>
                        </div>

                        {{#unless membership.length}}
                        <div class="text-center p-2" style="width: 100%;">No registered users</div>
                        {{else}}
                        {{#each membership}}
                            <div class="row py-2 border-bottom">
                                <div>{{this.membershipid}}</div>
                                <div class="overflow-auto">{{this.username}}</div>
                                <div>{{formattedisdate}} - {{formattedexdate}}</div>
                            </div>
                        {{/each}}
                        {{/unless}}

                    </div>

                    <!-- Recent Payments Tab Content -->
                    <div class="tab-pane fade py-3" id="recentPayments">
                        <form id="searchForm" method="post" action="/gymowner/ticket-verification" class="search-form">
                            <div class="input-group">
                                <input type="text" name="ticketid" id="searchInput" class="form-control" placeholder="Search by user ID"
                                    required>
                                <input style="display: none;" name="gymId" type="text" value="{{gymId}}">
                                <button type="button" onclick="search()" class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                        
                        <div class="mt-4" id="searchResults" style="display: none;">
                            <div class="row dark rounded-top py-2 fw-bold">
                                <div>Ticket Id</div>
                                <div>User Id</div>
                                <div>Issue Date</div>
                            </div>
                            <div class="row py-2 border-bottom">
                                <div id="ticketId"></div>
                                <div id="username" class="overflow-auto"></div>
                                <div id="issuedDate"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <div class="text-right">
                <button id="removeGym" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#removeGymModal">Remove Gym</button>
            </div>

            <!-- Remove Gym Modal -->
            <div class="modal fade" id="removeGymModal" tabindex="-1" aria-labelledby="removeGymModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="removeGymModalLabel">Remove Gym</h5>
                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                            Are you sure you want to remove this gym? This action cannot be undone.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" id="confirmRemoveGym">Remove</button>
                        </div>
                    </div>
                </div>
            </div>

        </main>

    </div>
    <script>
        document.getElementById('removeGym').addEventListener('click', function () {
            var removeGymModal = new bootstrap.Modal(document.getElementById('removeGymModal'));
            removeGymModal.show();
        });

        document.getElementById('confirmRemoveGym').addEventListener('click', function () {
            // Add your logic here to remove the gym
             const gymid="{{details._id}}"
            window.location.href = `/gymowner/removegym?id=${gymid}`;
            console.log('Gym removed');
            var removeGymModal = bootstrap.Modal.getInstance(document.getElementById('removeGymModal'));
            removeGymModal.hide();
        });


        function search() {
            var formData = $('#searchForm').serialize(); // Serialize form data
            $.ajax({
                type: "POST",
                url: "/gymowner/ticket-verification",
                data: formData,
                dataType: "json", // Expect JSON response
                success: function(response) {
                    var issuedDate = new Date(response.response[0].issueddate);
                    var formattedDate = issuedDate.toLocaleDateString('en-US', {
                        day: '2-digit',
                        month: '2-digit',
                        year: '2-digit'
                    });

                    document.getElementById('searchResults').style.display = 'block';
                    // Update the HTML elements with response data
                    $('#ticketId').text(response.response[0].ticketid);
                    $('#username').text(response.response[0].username);
                    $('#issuedDate').text(formattedDate);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert("An error occurred while processing your request. Please try again later.");
                }
            });
        }

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>

</html>