<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Upload Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="/public/stylesheets/gymdashboard.css">
</head>

<body>
  <section class="image-upload-section p-5">
    <div class="container px-5">
      <h2 class="mb-5 text-center">Upload Images</h2>
      <form id="imageUploadForm" action="/gymowner/imageupload" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="form-group">
              <label for="image1">Image 1</label>
              <input type="file" class="form-control-file" id="image1" name="photos" accept="image/*"
                onchange="validateAndPreviewImage(event, 'preview1')" required>
              <img id="preview1" class="mt-2 img-thumbnail preview-image" alt="Preview Image">
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="form-group">
              <label for="image2">Image 2</label>
              <input type="file" class="form-control-file" id="image2" name="photos" accept="image/*"
                onchange="validateAndPreviewImage(event, 'preview2')" required>
              <img id="preview2" class="mt-2 img-thumbnail preview-image" alt="Preview Image">
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="form-group">
              <label for="image3">Image 3</label>
              <input type="file" class="form-control-file" id="image3" name="photos" accept="image/*"
                onchange="validateAndPreviewImage(event, 'preview3')" required>
              <img id="preview3" class="mt-2 img-thumbnail preview-image" alt="Preview Image">
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="form-group">
              <label for="image4">Image 4</label>
              <input type="file" class="form-control-file" id="image4" name="photos" accept="image/*"
                onchange="validateAndPreviewImage(event, 'preview4')" required>
              <img id="preview4" class="mt-2 img-thumbnail preview-image" alt="Preview Image">
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="form-group">
              <label for="image5">Image 5</label>
              <input type="file" class="form-control-file" id="image5" name="photos" accept="image/*"
                onchange="validateAndPreviewImage(event, 'preview5')" required>
              <img id="preview5" class="mt-2 img-thumbnail preview-image" alt="Preview Image">
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="form-group">
              <label for="image6">Image 6</label>
              <input type="file" class="form-control-file" id="image6" name="photos" accept="image/*"
                onchange="validateAndPreviewImage(event, 'preview6')" required>
              <img id="preview6" class="mt-2 img-thumbnail preview-image" alt="Preview Image">
            </div>
          </div>
        </div>
        <div class="form-group text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </section>

  <!-- Bootstrap JS and jQuery (required for Bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="/public/javascript/gymowner.js"></script>
</body>

</html>