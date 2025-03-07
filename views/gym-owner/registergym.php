<?php
include '../../config.php';

$ownerName = isset($_GET['name']) ? $_GET['name'] : 'Guest';
$ownerId = isset($_GET['id']) ? $_GET['id'] : null;
?>



<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gym Information Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="/public/stylesheets/gymdashboard.css" />
</head>

<body>
  <div class="gym-register-section" style="min-height: 100vh;">
    <div class="container-fluid my-4 mx-auto">
      <h2>Gym Details Form</h2>
      <form id="gymForm" action="ownerReg.php?name=<?php echo $ownerName; ?>&id=<?php echo $ownerId; ?>" method="post">
        <div class="pt-3 row mb-4">
          <div class="col-lg-5">
            <!-- Gym Name -->
            <div class="form-group">
              <label for="gymName"><strong><i class="fas fa-building"></i>
                  Name of the Gym:</strong></label>
              <input type="text" class="form-control" id="gymName" name="gymName" placeholder="Enter gym name"
                required />
            </div>
            <!-- Address -->
            <div class="form-group">
              <label for="address"><strong><i class="fas fa-map-marker-alt"></i>
                  Address:</strong></label>
              <textarea class="form-control" id="address" name="address" placeholder="Enter gym address" rows="3"
                required></textarea>
            </div>
            <!-- Membership Fee -->
            <div class="form-group">
              <label for="membershipFee"><strong><i class="fas fa-dollar-sign"></i>
                  Membership Fee:</strong></label>
              <input type="number" class="form-control" id="membershipFee" name="membershipFee"
                placeholder="Enter membership fee" required />
            </div>
            <!-- Monthly fee -->
            <!-- <div class="form-group">
              <label for="monthlyFees"><strong><i class="fas fa-money-bill-alt"></i>
                  Monthly Fees:</strong></label>
              <input type="number" class="form-control" id="monthlyFees" name="monthlyFees"
                placeholder="Enter monthly fees" required />
            </div> -->
          </div>
          <div class="col-lg-7 second-col">
            <!-- Peak time -->
            <!-- <div class="form-group">
                            <div class="form-row justify-content-between">
                                <div class="form-group">
                                    <label for="peakTime"><i class="fas fa-clock"></i> Morning Peak Time:</label>
                                    <div class="input-group">
                                        <input type="time" class="form-control" id="morningPeakStartTime"
                                            name="morningPeakStartTime" required>
                                        <div class="input-group-prepend input-group-append">
                                            <span class="input-group-text">to</span>
                                        </div>
                                        <input type="time" class="form-control" id="morningPeakEndTime"
                                            name="morningPeakEndTime" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nightPeakTime"><i class="fas fa-moon"></i> Night Peak Time:</label>
                                    <div class="input-group">
                                        <input type="time" class="form-control" id="nightPeakStartTime"
                                            name="nightPeakStartTime" required>
                                        <div class="input-group-prepend input-group-append">
                                            <span class="input-group-text">to</span>
                                        </div>
                                        <input type="time" class="form-control" id="nightPeakEndTime"
                                            name="nightPeakEndTime" required>
                                    </div>
                                </div>
                            </div>
                        </div> -->
            <!-- Holidays -->
            <!-- <div class="form-group">
              <label><strong><i class="fas fa-calendar-alt"></i>
                  Holiday Days:</strong></label><br />
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="monday" name="holidayDays" value="Monday" />
                <label class="form-check-label" for="monday">Monday</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="tuesday" name="holidayDays" value="Tuesday" />
                <label class="form-check-label" for="tuesday">Tuesday</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="wednesday" name="holidayDays" value="Wednesday" />
                <label class="form-check-label" for="wednesday">Wednesday</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="thursday" name="holidayDays" value="Thursday" />
                <label class="form-check-label" for="thursday">Thursday</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="friday" name="holidayDays" value="Friday" />
                <label class="form-check-label" for="friday">Friday</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="saturday" name="holidayDays" value="Saturday" />
                <label class="form-check-label" for="saturday">Saturday</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="sunday" name="holidayDays" value="Sunday" />
                <label class="form-check-label" for="sunday">Sunday</label>
              </div>
            </div> -->
            <!-- Opening Hours -->
            <div class="form-group opening-hours">
              <label><strong><i class="fas fa-clock"></i>
                  Opening Hours:</strong></label>
              <div class="form-row">
                <div class="form-group col-md-4 col-6">
                  <label for="mondayStartTime">Opening Time:</label>
                  <input type="time" class="form-control" id="mondayStartTime" name="startingtime" />
                </div>
                <div class="form-group col-md-4 col-6">
                  <label for="mondayEndTime">Closing Time:</label>
                  <input type="time" class="form-control" id="mondayEndTime" name="closingtime" />
                </div>
              </div>
            </div>

            <!-- Monthly fee -->
            <div class="form-group">
              <label for="monthlyFees"><strong><i class="fas fa-money-bill-alt"></i>
                  Monthly Fees:</strong></label>
              <input type="number" class="form-control" id="monthlyFees" name="monthlyFees"
                placeholder="Enter monthly fees" required />
            </div>

            <div class="row">
              <!-- Short Desciption -->
              <div class="form-group w-100">
                <label for="gymDescription"><strong><i class="fas fa-edit"></i>
                    Short Description:</strong></label>
                <textarea class="form-control desc" id="gymDescription" name="gymDescription" rows="3"
                  placeholder="Enter a short description of the gym" required></textarea>
              </div>
            </div>

             <!-- peak time  -->

            <!-- <div class="form-group">
              <label><strong><i class="fas fa-calendar-alt"></i>
                  Peak Time:</strong></label><br />
              <div class="form-row justify-content-between">
                <div class="form-group col-md-6 col-12">
                  <label for="morningPeakTime"><i class="fas fa-clock"></i> Morning Peak Time:</label>
                  <div class="input-group">
                    <input type="time" class="form-control" id="morningPeakStartTime" name="morningPeakStartTime"
                      required>
                    <div class="input-group-prepend input-group-append">
                      <span class="input-group-text">to</span>
                    </div>
                    <input type="time" class="form-control" id="morningPeakEndTime" name="morningPeakEndTime" required>
                  </div>
                </div>
                <div class="form-group col-md-6 col-12">
                  <label for="nightPeakTime"><i class="fas fa-moon"></i> Night Peak Time:</label>
                  <div class="input-group">
                    <input type="time" class="form-control" id="nightPeakStartTime" name="nightPeakStartTime" required>
                    <div class="input-group-prepend input-group-append">
                      <span class="input-group-text">to</span>
                    </div>
                    <input type="time" class="form-control" id="nightPeakEndTime" name="nightPeakEndTime" required>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>

        <!-- <div class="row mb-4">
          
          <div class="col-md-6">
            <div class="form-group">
              <label><strong> Amenities:</strong></label><br />
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="locker" name="amenities" value="Locker" />
                <label class="form-check-label" for="locker">Locker</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="carParking" name="amenities" value="Car Parking" />
                <label class="form-check-label" for="carParking">Car Parking</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="bikeParking" name="amenities" value="Bike Parking" />
                <label class="form-check-label" for="bikeParking">Bike Parking</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="shower" name="amenities" value="Shower" />
                <label class="form-check-label" for="shower">Shower</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="cctv" name="amenities" value="CCTV" />
                <label class="form-check-label" for="cctv">CCTV</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="lounge" name="amenities" value="Lounge" />
                <label class="form-check-label" for="lounge">Lounge</label>
              </div>
            </div>
          </div>
          
          <div class="col-md-6">
            <div class="form-group">
              <label><strong> Specialties:</strong></label><br />
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="crossfitBox" name="specialties"
                  value="crossfitBox" />
                <label class="form-check-label" for="crossfitBox">CrossFit Box</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="yogaStudio" name="specialties" value="yogaStudio" />
                <label class="form-check-label" for="yogaStudio">Yoga Studio</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="pilatesStudio" name="specialties"
                  value="pilatesStudio" />
                <label class="form-check-label" for="pilatesStudio">Pilates
                  Studio</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="mmaGym" name="specialties" value="mmaGym" />
                <label class="form-check-label" for="mmaGym">MMA Gym</label>
              </div>
            </div>
          </div>
        </div> -->
        
        <!-- <div class="row">
          <div class="form-group w-100">
            <label for="gymDescription"><strong><i class="fas fa-edit"></i>
                Short Description:</strong></label>
            <textarea class="form-control desc" id="gymDescription" name="gymDescription" rows="3"
              placeholder="Enter a short description of the gym" required></textarea>
          </div>
        </div> -->


        <div class="text-center">
          <button type="submit" name="addEnterprise" class="btn btn-primary"><i class="fas fa-paper-plane"></i>
            Submit</button>
        </div>
      </form>
      <!-- <p class="text-center mt-3"><em>Note: You can inform us about changes in holiday days through this form.</em>
            </p> -->
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>