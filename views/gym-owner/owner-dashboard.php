<?php
include '../../config.php';

//$ownerName = isset($_COOKIE['owner_name']) ? $_COOKIE['owner_name'] : 'Guest';
$ownerName = isset($_GET['name']) ? $_GET['name'] : 'Guest';
$ownerId = isset($_GET['id']) ? $_GET['id'] : null;

echo "$ownerId";

$gyms = [];

$sql = "SELECT id, name, address, description FROM gyms WHERE ownerId='$ownerId'";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $gyms[] = $row;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gym-Owner Dashboard</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <link rel="stylesheet" href="/public/stylesheets/gymdashboard.css">
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: hsl(230, 73%, 5%);">
    <div class="container-fluid">
      <a href="/" class="navbar-brand brand" style="color: hsl(169, 88%, 75%); font-weight: 700; font-size: 1.5rem;">
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

<div class="owner-dashboard-section pt-4">
  <!-- Page Content -->
  <div class="container-fluid ">
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-4">Welcome, <?php echo htmlspecialchars($ownerName); ?></h1>
        <p class="lead">Manage your enterprises here.</p>
        <div class="text-center">
          <a class="add-enterprice" href="/views/gym-owner/registergym.php?name=<?php echo $ownerName; ?>&id=<?php echo $ownerId; ?>" role="button">Add Enterprise</a>
          <!-- <button> Add Enterprice</button> -->
        </div>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-12">
        <h1 class="owner-section-heading">Enterprise Listing</h1>
      </div>
      <?php foreach ($gyms as $gym): ?>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="shadow owner-item-card p-3 mb-3">
          <div id="carouselExampleSlidesOnly{{@index}}" class="carousel slide" data-ride="carousel">
            <!-- <div class="carousel-inner" style="border-radius: 16px;">
              {{#each images}}
              <div class="carousel-item {{#if @first}}active{{/if}}">
                <img src="data:{{contentType}};base64,{{data}}" alt="{{imageName}}"
                  class="d-block w-100 owner-item-image" alt="...">
              </div>
              {{/each}}
            </div> -->
          </div>
          <h1 class="owner-card-title"><?php echo htmlspecialchars($gym['name']); ?></h1>
          <p id="description" class="owner-card-description description"><?php echo htmlspecialchars($gym['description']); ?></p>
          <a href="gymowner/owner-gym-detail/?id={{this._id}}" class="owner-item-link">
            Know more
            <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="#d0b200"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
            </svg>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
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

</body>

</html>