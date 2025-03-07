<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Application</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="/public/stylesheets/gymdashboard.css">
</head>

<body>

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
                        <a class="nav-link" href="/gymowner/analytics">Analytics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/gymowner/apply-for-monetization">Get Verified</a>
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

    <section class="verification-section mt-4">
        <div class="container">
            <h1>Verify Status</h1>
            <div class="conditions">
                <div class="condition">
                    <span>Members Enrolled</span>
                    {{#if conditions.membersEnrolled}}
                        <span class="met">&#10004;</span>
                    {{else}}
                        <span class="not-met">&#10008;</span>
                    {{/if}}
                </div>
                <div class="condition">
                    <span>Monthly Revenue</span>
                    {{#if conditions.monthlyRevenue}}
                        <span class="met">&#10004;</span>
                    {{else}}
                        <span class="not-met">&#10008;</span>
                    {{/if}}
                </div>
                <div class="condition">
                    <span>Average Rating</span>
                    {{#if conditions.averagerating}}
                        <span class="met">&#10004;</span>
                    {{else}}
                        <span class="not-met">&#10008;</span>
                    {{/if}}
                </div>
            </div>
            {{#if conditions.allmet}}
                <a href="/gymowner/proceed-application" class="btn btn-primary">Proceed with Application</a>
            {{else}}
                <a href="#" class="btn btn-primary disabled" aria-disabled="true">Proceed with Application</a>
            {{/if}}

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>

</html>