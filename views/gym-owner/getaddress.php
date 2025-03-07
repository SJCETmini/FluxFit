<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Location Selector</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <link rel="stylesheet" href="/public/stylesheets/gymdashboard.css" />
</head>

<body style="margin: 0px;">
  <section class="get-address-section">
    <div class="container">
      <h1>Location</h1>

      <div class="form-group">
        <input type="text" class="form-control" id="locationInput" placeholder="Type a location">
        <div class="find ml-3">
          <button class="btn btn-primary" onclick="findLocation()">Find</button>
        </div>
      </div>


      <form id="locationForm" action="/gymowner/address" method="POST">       
        <div class="form-group">
          <input type="text" class="form-control" id="coordinates" name="coordinates" placeholder="Coordinates"
            readonly>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="address" name="address" placeholder="Address" readonly>
        </div>
        <div class="confirm-btn">
          <button type="submit" class="btn btn-success">Confirm</button>
        </div>
      </form>

      <div id="map"></div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
  <script src="/public/javascript/gymowner.js"></script>
</body>

</html>