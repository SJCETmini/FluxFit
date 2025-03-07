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
                        <a class="nav-link" href="/gymowner">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-3"> <!-- Add margin-right to create spacing -->
                        <a class="nav-link active" href="/gymowner/analytics">Analytics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gymowner/apply-for-monetization">Get Verified</a>
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
    <div class="owner-gym-section analytics-section pt-4">

        <main class="p-md-5">
            <section class="container-fluid stats-section">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-5 col-sm-6 mb-4">
                        <div class="stat-card">
                            <i class="fas fa-users"></i>
                            <h5>Total Gyms</h5>
                            <p class="stat-value">{{response.totalgym}}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6 mb-4">
                        <div class="stat-card">
                            <i class="fas fa-calendar-alt"></i>
                            <h5>Memberships</h5>
                            <p class="stat-value">{{response.totalMemberships}}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6 mb-4">
                        <div class="stat-card">
                            <i class="fa-solid fa-chart-pie"></i>
                            <h5>Total Monthly Revenue</h5>
                            <p class="stat-value">Rs {{response.wholeRevenue}}</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="table mt-5">
                <!-- Tab Navigation -->
                <ul class="nav nav-pills nav-justified mb-3 bg-light rounded-pill shadow-sm animated-nav"
                    role="tablist">
                    <li class="nav-item">
                        <a class="nav-link rounded-pill px-4 py-2 active" id="dailyFeeUsers-tab" data-toggle="pill"
                            href="#dailyFeeUsers" role="tab" aria-controls="dailyFeeUsers" aria-selected="false">
                            <i class="fas fa-calendar-alt me-2"></i> Gyms
                        </a>
                    </li>
                </ul>
                <!-- Tab Content -->
                <div class="tab-content px-3">

                    <!-- Gyms Tab Content -->
                    <div class="tab-pane fade show active" id="dailyFeeUsers">
                        <div class="row dark rounded-top py-2 fw-bold">
                            <div>Gym Id</div>
                            <div>Gym Name</div>
                            <div>Total Revenue</div>
                        </div>

                        {{#each response.gymsWithRevenue}}
                        <div class="row py-2 border-bottom">
                            <div>{{_id}}</div>
                            <div class="overflow-auto">{{name}}</div>
                            <div>{{revenue}}</div>
                        </div>
                        {{/each}}

                    </div>
                </div>
            </section>

        </main>
        <div class="text-left mt-3 ml-3"><em style="font-size: 0.8rem;">revenue is displayed based on current month
            only</em>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>

</html>