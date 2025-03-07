<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video Upload Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="/public/stylesheets/gymdashboard.css">
</head>

<body style="margin: 0px;">
  <section class="videoUpload-section p-5">
    <div class="container">
      <h2 class="mb-4">Video Upload Form</h2>
      <form class="px-3" id="videoUploadForm" action="/gymowner/videoupload" method="post"
        enctype="multipart/form-data">
        <div>
          <label for="videoFile">Select Video File:</label>
          <input class="form-control-file" type="file" id="videoFile" name="video" accept="video/*"
            onchange="previewVideo(event)">
        </div>
        <div>
          <label for="videoPreview">Preview:</label>
          <video id="videoPreview" class="preview" controls></video>
        </div>
        <div class="text-center">
          <button class="btn" type="submit">Upload Video</button>
        </div>
      </form>
    </div>
  </section>
  <script src="/public/javascript/gymowner.js"></script>
</body>

</html>