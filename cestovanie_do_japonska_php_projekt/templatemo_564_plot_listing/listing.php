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
  <link rel="stylesheet" href="assets/css/cookie-banner.css">

  <?php include 'templates/header.php'; ?>
</head>

<body>

<!-- HERO -->
<section class="hero">
    <div class="container">
<h1>Nájdite dokonalé ubytovanie v Japonsku</h1>
        <p>Hotely v Tokiu, Osake a Kjóte na jednom mieste</p>
    </div>
</section>

<!-- FILTER -->
<div class="container text-center my-4 filter-btns">
<button class="btn btn-danger" onclick="filterHotels('all')">Všetky</button>
    <button class="btn btn-outline-danger" onclick="filterHotels('tokyo')">Tokyo</button>
    <button class="btn btn-outline-danger" onclick="filterHotels('osaka')">Osaka</button>
    <button class="btn btn-outline-danger" onclick="filterHotels('kyoto')">Kyoto</button>
</div>

<!-- LISTINGS -->
<div class="container">

    <!-- TOKYO -->
    <div class="hotel tokyo hotel-card row g-0">
        <div class="col-md-5">
            <img src="assets/images/Park Hotel Tokyo.jpg">
        </div>
        <div class="col-md-7 p-4">
            <h4>Park Hotel Tokyo</h4>
<p>Luxusný hotel inšpirovaný umením s úžasným výhľadom na mesto.</p>
            <div class="price">$320 / noc</div>
        </div>
    </div>

    <div class="hotel tokyo hotel-card row g-0">
        <div class="col-md-5">
            <img src="assets/images/Hotel Gracery Shinjuku.webp">
        </div>
        <div class="col-md-7 p-4">
            <h4>Hotel Gracery Shinjuku</h4>
<p>Slávny hotel s hlavou Godzilly v Shinjuku.</p>
            <div class="price">$210 / noc</div>
        </div>
    </div>

    <!-- OSAKA -->
    <div class="hotel osaka hotel-card row g-0">
        <div class="col-md-5">
            <img src="assets/images/Hotel Universal Port.webp">
        </div>
        <div class="col-md-7 p-4">
            <h4>Hotel Universal Port</h4>
<p>Dokonalý hotel vedľa Universal Studios Japan.</p>
            <div class="price">$180 / noc</div>
        </div>
    </div>

    <div class="hotel osaka hotel-card row g-0">
        <div class="col-md-5">
            <img src="assets/images/Swissotel Nankai Osaka.webp">
        </div>
        <div class="col-md-7 p-4">
            <h4>Swissôtel Nankai Osaka</h4>
<p>Luxusný hotel v centre Osaky.</p>
            <div class="price">$260 / noc</div>
        </div>
    </div>

    <!-- KYOTO -->
    <div class="hotel kyoto hotel-card row g-0">
        <div class="col-md-5">
            <img src="assets/images/Park Hyatt Kyoto.jpg">
        </div>
        <div class="col-md-7 p-4">
            <h4>Park Hyatt Kyoto</h4>
<p>Tradičný ryokan v historickej štvrti Gion.</p>
            <div class="price">$450 / noc</div>
        </div>
    </div>

    <div class="hotel kyoto hotel-card row g-0">
        <div class="col-md-5">
            <img src="assets/images/The Celestine Kyoto Gion.webp">
        </div>
        <div class="col-md-7 p-4">
            <h4>Hotel The Celestine Kyoto Gion</h4>
<p>Moderný hotel spájajúci tradíciu a pohodlie.</p>
            <div class="price">$380 / noc</div>
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
  <script src="assets/js/cookie-banner.js"></script>

</body>
</html>

