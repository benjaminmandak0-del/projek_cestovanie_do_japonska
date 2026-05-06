<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubytovanie v Japonsku</title>

    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="../assets/css/animated.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/listing.css">
    <link rel="stylesheet" href="../assets/css/cookie-banner.css">
</head>

<body>

<?php include '../templates/header.php'; ?>

<section class="py-5 bg-light">
    <div class="container text-center">
        <h1 class="display-5 fw-bold mb-3">Objavte svoje ideálne ubytovanie v Japonsku</h1>
        <p class="lead text-muted mb-4">Vyberte si zo starostlivo vybraných hotelov v Tokiu, Osake a Kjóte.</p>
        <div class="d-flex flex-wrap justify-content-center gap-2">
            <button class="btn btn-danger px-4" onclick="filterHotels('all')">Všetky</button>
            <button class="btn btn-outline-danger px-4" onclick="filterHotels('tokyo')">Tokyo</button>
            <button class="btn btn-outline-danger px-4" onclick="filterHotels('osaka')">Osaka</button>
            <button class="btn btn-outline-danger px-4" onclick="filterHotels('kyoto')">Kyoto</button>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-6 hotel tokyo">
                <div class="card shadow-sm border-0 h-100 overflow-hidden">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5">
                            <img src="../assets/images/Park Hotel Tokyo.jpg" class="img-fluid h-100 object-fit-cover" alt="Park Hotel Tokyo">
                        </div>
                        <div class="col-md-7 p-4">
                            <h4 class="mb-2">Park Hotel Tokyo</h4>
                            <p class="text-muted mb-3">Luxusný hotel inšpirovaný umením s úžasným výhľadom na mesto.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-danger">Tokyo</span>
                                <span class="fw-bold">$320 / noc</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 hotel tokyo">
                <div class="card shadow-sm border-0 h-100 overflow-hidden">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5">
                            <img src="../assets/images/Hotel Gracery Shinjuku.webp" class="img-fluid h-100 object-fit-cover" alt="Hotel Gracery Shinjuku">
                        </div>
                        <div class="col-md-7 p-4">
                            <h4 class="mb-2">Hotel Gracery Shinjuku</h4>
                            <p class="text-muted mb-3">Slávny hotel s hlavou Godzilly v živom Shinjuku.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-danger">Tokyo</span>
                                <span class="fw-bold">$210 / noc</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 hotel osaka">
                <div class="card shadow-sm border-0 h-100 overflow-hidden">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5">
                            <img src="../assets/images/Hotel Universal Port.webp" class="img-fluid h-100 object-fit-cover" alt="Hotel Universal Port">
                        </div>
                        <div class="col-md-7 p-4">
                            <h4 class="mb-2">Hotel Universal Port</h4>
                            <p class="text-muted mb-3">Výborná poloha priamo pri Universal Studios Japan.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-danger">Osaka</span>
                                <span class="fw-bold">$180 / noc</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 hotel osaka">
                <div class="card shadow-sm border-0 h-100 overflow-hidden">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5">
                            <img src="../assets/images/Swissotel Nankai Osaka.webp" class="img-fluid h-100 object-fit-cover" alt="Swissôtel Nankai Osaka">
                        </div>
                        <div class="col-md-7 p-4">
                            <h4 class="mb-2">Swissôtel Nankai Osaka</h4>
                            <p class="text-muted mb-3">Prestížny hotel v centre Osaky s panoramatickým výhľadom.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-danger">Osaka</span>
                                <span class="fw-bold">$260 / noc</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 hotel kyoto">
                <div class="card shadow-sm border-0 h-100 overflow-hidden">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5">
                            <img src="../assets/images/Park Hyatt Kyoto.jpg" class="img-fluid h-100 object-fit-cover" alt="Park Hyatt Kyoto">
                        </div>
                        <div class="col-md-7 p-4">
                            <h4 class="mb-2">Park Hyatt Kyoto</h4>
                            <p class="text-muted mb-3">Tradičný ryokan v historickej štvrti Gion.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-danger">Kyoto</span>
                                <span class="fw-bold">$450 / noc</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 hotel kyoto">
                <div class="card shadow-sm border-0 h-100 overflow-hidden">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5">
                            <img src="../assets/images/hotl2.jpg" class="img-fluid h-100 object-fit-cover" alt="The Celestine Kyoto Gion">
                        </div>
                        <div class="col-md-7 p-4">
                            <h4 class="mb-2">Hotel The Celestine Kyoto Gion</h4>
                            <p class="text-muted mb-3">Moderný hotel spájajúci tradíciu a pohodlie.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-danger">Kyoto</span>
                                <span class="fw-bold">$380 / noc</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include '../templates/footer.php'; ?>

<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/owl-carousel.js"></script>
<script src="../assets/js/animation.js"></script>
<script src="../assets/js/imagesloaded.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../assets/js/cookie-banner.js"></script>
<script>
function filterHotels(city) {
    let hotels = document.querySelectorAll('.hotel');
    hotels.forEach(hotel => {
        hotel.style.display = city === 'all' || hotel.classList.contains(city) ? 'flex' : 'none';
    });
}
</script>
</body>
</html>

