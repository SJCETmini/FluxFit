<?php
include '../../config.php';

// Fetch total gyms count
$result = mysqli_query($conn, "SELECT COUNT(*) as gymcount FROM gyms");
$gymcount = mysqli_fetch_assoc($result)['gymcount'];

// Fetch active users count
$result = mysqli_query($conn, "SELECT COUNT(id) as usercount FROM users");
$usercount = mysqli_fetch_assoc($result)['usercount'];

// Fetch total revenue
// $result = mysqli_query($conn, "SELECT SUM(amount) as revenue FROM transactions");
// $revenue = mysqli_fetch_assoc($result)['revenue'];

// Fetch pending verifications
$result = mysqli_query($conn, "SELECT * FROM owners");
$ownersapplied = [];
while ($row = mysqli_fetch_assoc($result)) {
    $ownersapplied[] = $row;
}

// Close the database connection
mysqli_close($conn);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="/public/stylesheets/adminStyles.css">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: hsl(230, 73%, 5%);">
        <div class="container-fluid mb-0">
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
                    <li class="nav-item mr-3">
                        <a class="nav-link active" href="#dashboard">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="#customers">Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#promotions">Promotions</a>
                    </li>
                </ul>
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

    <div class="main-content">
        <main>

            <section class="container-fluid dashboard" id="dashboard">
                <div class="row mt-4">
                    <div class="col-6 col-md-3 s">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-dumbbell"></i>
                            </div>
                            <!-- <div class="stat-value">{{counts.gymcount}}</div> -->
                            <div class="stat-value"><?php echo $gymcount; ?></div>
                            <div class="stat-label">Total Gyms</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 s">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stat-value"> <?php echo $usercount; ?></div>
                            <div class="stat-label">Total Users</div>
                        </div>
                    </div>
                    <!-- <div class="col-6 col-md-3 s">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <div class="stat-value">{{revenue}}</div>
                            <div class="stat-label">Total Revenue</div>
                        </div>
                    </div> -->
                    
                </div>
               
<!-- 

                <div class="verification mt-4">
                    <h4>Pending Verifications</h4>
                    <ol class="verification-list mt-3">
                        {{#each ownersapplied}}
                        <li class="d-flex justify-content-between align-items-center">
                            <div class="gym-details">
                                <h3>Name: {{this.username}}</h4>
                                    <p class="gym-info">ID: {{this._id}}</p>
                                    <p class="gym-info"><i class="fas fa-user"></i> {{this.email}}</p>
                            </div>
                            <div class="action-buttons">
                                <button class="btn btn-primary view-btn"><a href="/admin/review-application/?id={{this._id}}&uname={{this.username}}&email={{this.email}}">View Application</a></button>
                                <button class="btn btn-success verify-btn">Verify</button>
                                <button class="btn btn-danger reject-btn">Reject</button>
                            </div>
                        </li>
                        {{/each}}
                    </ol>
                </div>
            </section> -->



            <div class="verification mt-4">
    <h4>Pending Verifications</h4>
    <ol class="verification-list mt-3">
        <?php if (!empty($ownersapplied)): ?>
            <?php foreach ($ownersapplied as $owner): ?>
                <li class="d-flex justify-content-between align-items-center">
                    <div class="gym-details">
                        <h3>Name: <?php echo htmlspecialchars($owner['username']); ?></h3>
                        <p class="gym-info">ID: <?php echo htmlspecialchars($owner['_id']); ?></p>
                        <p class="gym-info"><i class="fas fa-user"></i> <?php echo htmlspecialchars($owner['email']); ?></p>
                    </div>
                    <div class="action-buttons">
                        <button class="btn btn-primary view-btn">
                            <a href="/admin/review-application/?id=<?php echo urlencode($owner['_id']); ?>&uname=<?php echo urlencode($owner['username']); ?>&email=<?php echo urlencode($owner['email']); ?>">View Application</a>
                        </button>
                        <button class="btn btn-success verify-btn">Verify</button>
                        <button class="btn btn-danger reject-btn">Reject</button>
                    </div>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>No pending verifications found.</li>
        <?php endif; ?>
    </ol>
</div>

            <section id="customers">
                <div class="gyms" id="gyms">
                    <h5 class="ml-2">Gyms</h5>
                    <div class="ml-1 container-fluid gym-filters mb-3">
                        <form id="gymSearchForm" style="width: 25vw;">
                            <div class="input-group">
                                <input type="text" class="form-control" name="gymName" id="gymNameInput"
                                    placeholder="Search gyms by name" aria-label="Search gyms">
                                <div class="input-group-append">
                                    <button type="submit" id="searchButton" class="btn"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table id="gymsTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Gym Id</th>
                                    <th>Gym Name</th>
                                    <th>Location</th>
                                    <th>Owner</th>
                                    <th>Email</th>
                                    <th>Member Count</th>
                                    <th>Details</th>
                                    <th>Verified</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="gymsTableBody">
                                <tr class="dummy">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                {{!-- <div class="users" id="users">
                    <h5 class="ml-2">Users</h5>
                    <div class="ml-1 user-filters mb-3">
                        <form id="userSearchForm" style="width: 25vw;">
                            <div class="input-group">
                                <input type="text" class="form-control" name="user id" id="gymNameInput"
                                    placeholder="Search users by id" aria-label="Search users">
                                <div class="input-group-append">
                                    <button type="submit" id="searchButton" class="btn"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> --}}
            </section>

            <section id="promotions" class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body p-5">
                                <h5 class="card-title">Upload Promotion Images</h5>

                                <!-- Image 1 -->
                                <div class="mb-4">
                                    <label for="imageUpload1" class="form-label">Image 1</label>
                                    <input type="file" class="form-control mb-2" id="imageUpload1" accept="image/*">
                                    <div id="imagePreview1" class="mt-3 text-center" style="display: none;">
                                        <img id="preview1" src="" alt="Image Preview 1" class="img-fluid">
                                    </div>
                                </div>

                                <!-- Image 2 -->
                                <div class="mb-4">
                                    <label for="imageUpload2" class="form-label">Image 2</label>
                                    <input type="file" class="form-control mb-2" id="imageUpload2" accept="image/*">
                                    <div id="imagePreview2" class="mt-3 text-center" style="display: none;">
                                        <img id="preview2" src="" alt="Image Preview 2" class="img-fluid">
                                    </div>
                                </div>

                                <!-- Image 3 -->
                                <div class="mb-4">
                                    <label for="imageUpload3" class="form-label">Image 3</label>
                                    <input type="file" class="form-control mb-2" id="imageUpload3" accept="image/*">
                                    <div id="imagePreview3" class="mt-3 text-center" style="display: none;">
                                        <img id="preview3" src="" alt="Image Preview 3" class="img-fluid">
                                    </div>
                                </div>

                                <div class="text-center mt-5">
                                    <button class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script src="/javascript/adminscript.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12WlK2Kkhh1zVc6p+0i5awz5yYfRvH+8abtTE1Pi6jizoTw"
        crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#gymSearchForm').submit(function (event) {
                event.preventDefault(); // Prevent the form from submitting normally

                // Get the input value
                var gymName = $('#gymNameInput').val();

                // AJAX request to fetch gyms by name
                $.ajax({
                    type: 'POST',
                    url: '/admin/gyms',
                    data: { gymName: gymName },
                    success: function (response) {
                        console.log(response.response); // Log the response to check data received
                        displayGyms(response.response); // Call function to display gyms in the table
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching gyms:', error); // Log detailed error information
                    }
                });
            });


            function displayGyms(gyms) {
                var gymsTableBody = $('#gymsTableBody');
                gymsTableBody.empty(); // Clear existing table rows

                gyms.forEach(function (gym) {
                    var row = $('<tr>');
                    row.append($('<td class="scrollable-cell">').text(gym._id)); // Adjust according to your gym object structure
                    row.append($('<td class="scrollable-cell">').text(gym.name));
                    row.append($('<td class="scrollable-cell">').text(gym.addressdisp));
                    row.append($('<td class="scrollable-cell">').text(gym.owner.username));
                    row.append($('<td class="scrollable-cell">').text(gym.owner.email));
                    row.append($('<td>').text(gym.memberCount));
                    var link = '<a href="gymowner/owner-gym-detail/?id=' + gym._id + '">View Details</a>';
                    row.append($('<td>').html(link));

                    var verifiedIcon = gym.owner.verified ? '<i class="fas fa-check-circle text-success"></i>' : '<i class="fa-solid fa-xmark text-danger"></i>';
                    row.append($('<td>').html(verifiedIcon));
                    row.append($('<td>').html('<div class="action-buttons"><button class="btn btn-link edit-btn"><i class="fas fa-edit"></i></button><button class="btn btn-link delete-btn"><i class="fas fa-trash"></i></button></div>'));

                    gymsTableBody.append(row);
                });

                // Add an empty row if no gyms are found
                if (gyms.length === 0) {
                    gymsTableBody.append('<tr class="empty-row"><td colspan="9">No gyms found</td></tr>');
                }
            }
        });


    </script>
</body>

</html>