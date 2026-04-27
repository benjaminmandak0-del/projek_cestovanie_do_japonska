<?php include 'templates/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
  <link rel="stylesheet" href="assets/css/animated.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/listing.css">

  <?php include 'templates/header.php'; ?>
</head>

<body>

<!-- HERO -->
<section class="hero">
    <div class="container">
        <h1>Find the Perfect Stay in Japan</h1>
        <p>Tokyo, Osaka & Kyoto hotels in one place</p>
    </div>
</section>

<!-- FILTER -->
<div class="container text-center my-4 filter-btns">
    <button class="btn btn-danger" onclick="filterHotels('all')">All</button>
    <button class="btn btn-outline-danger" onclick="filterHotels('tokyo')">Tokyo</button>
    <button class="btn btn-outline-danger" onclick="filterHotels('osaka')">Osaka</button>
    <button class="btn btn-outline-danger" onclick="filterHotels('kyoto')">Kyoto</button>
</div>

<!-- LISTINGS -->
<div class="container">

    <!-- TOKYO -->
    <div class="hotel tokyo hotel-card row g-0">
        <div class="col-md-5">
            <img src="assets/images/tokyo1.jpg">
        </div>
        <div class="col-md-7 p-4">
            <h4>Park Hotel Tokyo</h4>
            <p>Art-inspired luxury hotel with stunning city views.</p>
            <div class="price">$320 / night</div>
        </div>
    </div>

    <div class="hotel tokyo hotel-card row g-0">
        <div class="col-md-5">
            <img src="assets/images/tokyo2.jpg">
        </div>
        <div class="col-md-7 p-4">
            <h4>Hotel Gracery Shinjuku</h4>
            <p>Famous hotel with Godzilla head in Shinjuku.</p>
            <div class="price">$210 / night</div>
        </div>
    </div>

    <!-- OSAKA -->
    <div class="hotel osaka hotel-card row g-0">
        <div class="col-md-5">
            <img src="assets/images/osaka1.jpg">
        </div>
        <div class="col-md-7 p-4">
            <h4>Hotel Universal Port</h4>
            <p>Perfect hotel next to Universal Studios Japan.</p>
            <div class="price">$180 / night</div>
        </div>
    </div>

    <div class="hotel osaka hotel-card row g-0">
        <div class="col-md-5">
            <img src="assets/images/osaka2.jpg">
        </div>
        <div class="col-md-7 p-4">
            <h4>Swissôtel Nankai Osaka</h4>
            <p>Luxury hotel in Osaka city center.</p>
            <div class="price">$260 / night</div>
        </div>
    </div>

    <!-- KYOTO -->
    <div class="hotel kyoto hotel-card row g-0">
        <div class="col-md-5">
            <img src="assets/images/kyoto1.jpg">
        </div>
        <div class="col-md-7 p-4">
            <h4>Gion Hatanaka</h4>
            <p>Traditional ryokan in historic Gion district.</p>
            <div class="price">$450 / night</div>
        </div>
    </div>

    <div class="hotel kyoto hotel-card row g-0">
        <div class="col-md-5">
            <img src="assets/images/kyoto2.jpg">
        </div>
        <div class="col-md-7 p-4">
            <h4>Hotel The Celestine Kyoto Gion</h4>
            <p>Modern hotel blending tradition and comfort.</p>
            <div class="price">$380 / night</div>
        </div>
    </div>

</div>

<!-- FILTER SCRIPT -->
<script>
function filterHotels(city) {
    let hotels = document.querySelectorAll('.hotel');

    hotels.forEach(hotel => {
        if (city === 'all') {
            hotel.style.display = 'flex';
        } else {
            if (hotel.classList.contains(city)) {
                hotel.style.display = 'flex';
            } else {
                hotel.style.display = 'none';
            }
        }
    });
}
</script>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

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

