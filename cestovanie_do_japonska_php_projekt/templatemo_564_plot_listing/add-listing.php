<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Add Your Listing</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

TemplateMo 564 Plot Listing

https://templatemo.com/tm-564-plot-listing

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <?php include 'templates/header.php'; ?>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="top-text header-text">
            <h6>Share Your Property</h6>
            <h2>Add Your Listing and Reach More Customers</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-content">
            <div class="row">

              <!-- Add Listing Form -->
              <div class="col-lg-12">
                <form id="add-listing" action="process.php" method="post" enctype="multipart/form-data">
                  <div class="row">

                    <!-- Title -->
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="title" id="title" placeholder="Listing Title" autocomplete="on" required>
                      </fieldset>
                    </div>

                    <!-- Category -->
                    <div class="col-lg-6">
                      <fieldset>
                        <select name="category" id="category" required>
                          <option value="">Select Category</option>
                          <option value="apartments">Apartments</option>
                          <option value="houses">Houses</option>
                          <option value="commercial">Commercial</option>
                          <option value="land">Land</option>
                          <option value="other">Other</option>
                        </select>
                      </fieldset>
                    </div>

                    <!-- Price -->
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="number" name="price" id="price" placeholder="Price" step="0.01" required>
                      </fieldset>
                    </div>

                    <!-- Location -->
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="location" id="location" placeholder="Location/Address" autocomplete="on" required>
                      </fieldset>
                    </div>

                    <!-- Area Size -->
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="area" id="area" placeholder="Area Size (sq ft)" autocomplete="on">
                      </fieldset>
                    </div>

                    <!-- Bedrooms -->
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="number" name="bedrooms" id="bedrooms" placeholder="Number of Bedrooms" min="0">
                      </fieldset>
                    </div>

                    <!-- Description -->
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="description" class="form-control" id="description" placeholder="Property Description" required></textarea>  
                      </fieldset>
                    </div>

                    <!-- Amenities -->
                    <div class="col-lg-12">
                      <h4>Amenities</h4>
                      <ul>
                        <li><input type="checkbox" name="parking" value="parking"><span>Parking</span></li>
                        <li><input type="checkbox" name="wifi" value="wifi"><span>WiFi</span></li>
                        <li><input type="checkbox" name="pool" value="pool"><span>Pool</span></li>
                        <li><input type="checkbox" name="gym" value="gym"><span>Gym</span></li>
                        <li><input type="checkbox" name="garden" value="garden"><span>Garden</span></li>
                      </ul>
                    </div>

                    <!-- Image Upload -->
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="file" name="image" id="image" accept="image/*" placeholder="Upload Main Image">
                      </fieldset>
                    </div>

                    <!-- Contact Name -->
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="contact_name" id="contact_name" placeholder="Your Name" autocomplete="on" required>
                      </fieldset>
                    </div>

                    <!-- Contact Email -->
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="email" name="contact_email" id="contact_email" placeholder="Your Email" required>
                      </fieldset>
                    </div>

                    <!-- Contact Phone -->
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="tel" name="contact_phone" id="contact_phone" placeholder="Your Phone Number" autocomplete="on">
                      </fieldset>
                    </div>

                    <!-- Submit Button -->
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button">
                          <i class="fa fa-paper-plane"></i> Submit Listing
                        </button>
                      </fieldset>
                    </div>

                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>
