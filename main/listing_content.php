<?php
$dbConnected = false;
$dbError = '';

require_once __DIR__ . '/../config/database.php';

try {
    $conn = create_db_connection();
    $dbConnected = true;
} catch (mysqli_sql_exception $e) {
    $dbError = $e->getMessage();
    $dbConnected = false;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

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
                            <img src="../assets/images/Park Hotel Tokyo.jpg" class="img-fluid h-100 object-fit-cover" alt="Park Hotel Tokyo" onclick="showHotelPopup(this)" style="cursor:pointer;">
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
                            <img src="../assets/images/Hotel Gracery Shinjuku.webp" class="img-fluid h-100 object-fit-cover" alt="Hotel Gracery Shinjuku" onclick="showHotelPopup(this)" style="cursor:pointer;">
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
                            <img src="../assets/images/Hotel Universal Port.webp" class="img-fluid h-100 object-fit-cover" alt="Hotel Universal Port" onclick="showHotelPopup(this)" style="cursor:pointer;">
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
                            <img src="../assets/images/Swissotel Nankai Osaka.webp" class="img-fluid h-100 object-fit-cover" alt="Swissôtel Nankai Osaka" onclick="showHotelPopup(this)" style="cursor:pointer;">
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
                            <img src="../assets/images/Park Hyatt Kyoto.jpg" class="img-fluid h-100 object-fit-cover" alt="Park Hyatt Kyoto" onclick="showHotelPopup(this)" style="cursor:pointer;">
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
                            <img src="../assets/images/hotl2.jpg" class="img-fluid h-100 object-fit-cover" alt="The Celestine Kyoto Gion" onclick="showHotelPopup(this)" style="cursor:pointer;">
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

<?php
// Adatbázis csatlakozás
$amenities = [];
$hotels = [];

// Connection already established at the top of this file.
// $dbConnected is true when the page continues normally.

if ($dbConnected) {
    // Amenitások lekérése
    try {
        $amenitiesRes = $conn->query("SELECT id, name FROM amenities ORDER BY name ASC");
        if ($amenitiesRes) {
            while ($row = $amenitiesRes->fetch_assoc()) {
                $amenities[] = $row;
            }
        }
    } catch (mysqli_sql_exception $e) {
        // Ha az amenities tábla nem létezik, akkor továbbra is megjelenik a lista.
        $amenities = [];
    }

    // Hotelők lekérése az adatbázisból
    try {
        $sql = "
            SELECT
              h.id, h.title, h.category, h.stars, h.location, h.city, h.price,
              h.rooms, h.checkin, h.checkout, h.room_types, h.description,
              c.contact_name, c.contact_email, c.contact_phone, c.website,
              (SELECT image_path FROM hotel_images hi WHERE hi.hotel_id = h.id ORDER BY id ASC LIMIT 1) AS image_path
            FROM hotels h
            LEFT JOIN contacts c ON c.hotel_id = h.id
            ORDER BY h.stars DESC, h.price ASC
        ";

        $res = $conn->query($sql);
        if ($res) {
            while ($h = $res->fetch_assoc()) {
                $amenityNames = [];

                try {
                    $stmt = $conn->prepare("SELECT a.name FROM hotel_amenities ha JOIN amenities a ON a.id = ha.amenity_id WHERE ha.hotel_id = ? ORDER BY a.name ASC");
                    if ($stmt) {
                        $stmt->bind_param('i', $h['id']);
                        $stmt->execute();
                        $r2 = $stmt->get_result();
                        while ($ar = $r2->fetch_assoc()) {
                            $amenityNames[] = $ar['name'];
                        }
                    }
                } catch (mysqli_sql_exception $e) {
                    // Ha a hotel_amenities vagy amenities tábla hiányzik, akkor simán továbbmegyünk.
                }

                $h['amenity_names'] = $amenityNames;
                $hotels[] = $h;
            }
        }
    } catch (mysqli_sql_exception $e) {
        // Ha a hotels tábla nem létezik, akkor nem töltünk be dinamikus hotel adatokat.
        $hotels = [];
    }
}

?>

<section class="py-5">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-3">
            <h2 class="fw-bold mb-2">Najlepšie hodnotené hotely</h2>
            <?php if ($dbConnected): ?>
                <div class="d-flex gap-2">
                    <a class="btn btn-outline-danger" href="../add-listing.php">+ Pridať hotel</a>
                </div>
            <?php endif; ?>
        </div>

        <div class="row g-4">
            <?php if (!$dbConnected): ?>
                <div class="col-12">
                    <div class="alert alert-danger mb-0">
                        <strong>Chyba pripojenia k databáze:</strong> Stránka sa nemôže pripojiť k databáze. Skontrolujte, prosím, nastavenia databázy.
                        <?php if ($dbError): ?>
                            <br><small class="text-muted">Chyba: <?= htmlspecialchars($dbError) ?></small>
                        <?php endif; ?>
                    </div>
                </div>
            <?php elseif (count($hotels) === 0): ?>
                <div class="col-12">
                    <div class="alert alert-warning mb-0">Zatiaľ nemáte v databáze žiadne hotely. Použite „Pridať hotel“.</div>
                </div>
            <?php endif; ?>

            <?php foreach ($hotels as $hotel):
                $city = strtolower((string)($hotel['city'] ?? ''));
                $cssCity = $city;
                if (str_contains($city, 'tokyo')) $cssCity = 'tokyo';
                if (str_contains($city, 'osaka')) $cssCity = 'osaka';
                if (str_contains($city, 'kyoto')) $cssCity = 'kyoto';

                $img = $hotel['image_path'] ? ('../uploads/' . $hotel['image_path']) : '../assets/images/listing-01.jpg';
            ?>
                <div class="col-lg-6 hotel <?= htmlspecialchars($cssCity) ?>">
                    <div class="card shadow-sm border-0 h-100 overflow-hidden">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-5">
                                <img src="<?= htmlspecialchars($img) ?>" class="img-fluid h-100 object-fit-cover" alt="<?= htmlspecialchars((string)$hotel['title']) ?>" onclick="showHotelPopup(this)" style="cursor:pointer;">
                            </div>
                            <div class="col-md-7 p-4">
                                <div class="d-flex justify-content-between align-items-start gap-2 mb-1">
                                    <h4 class="mb-2"><?= htmlspecialchars((string)$hotel['title']) ?></h4>
                                    <span class="badge bg-danger"><?= htmlspecialchars((string)($hotel['city'] ?? '')) ?></span>
                                </div>

                                <p class="text-muted mb-3"><?= htmlspecialchars((string)($hotel['description'] ?? '')) ?></p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold">$<?= htmlspecialchars((string)$hotel['price']) ?> / noc</span>
                                    <span class="text-muted">⭐ <?= htmlspecialchars((string)($hotel['stars'] ?? '')) ?></span>
                                </div>

                                <div class="mt-3">
                                    <div class="small text-muted"><strong>Kategória:</strong> <?= htmlspecialchars((string)($hotel['category'] ?? '')) ?></div>
                                    <div class="small text-muted"><strong>Typ izby :</strong> <?= htmlspecialchars((string)($hotel['room_types'] ?? '')) ?></div>
                                    <div class="small text-muted"><strong>Komentár:</strong> <?= htmlspecialchars((string)($hotel['description'] ?? '')) ?></div>
                                    <div class="small text-muted"><strong>Pobyt v hoteli:</strong> <?= htmlspecialchars((string)($hotel['checkin'] ?? '')) ?> - <?= htmlspecialchars((string)($hotel['checkout'] ?? '')) ?></div>

                                </div>



                                <?php if ($dbConnected && isset($hotel['id'])): ?>
                                <div class="mt-3 d-flex gap-2">
                                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editHotelModal_<?= (int)$hotel['id'] ?>">Edit</button>
                                    <form method="POST" action="../secondary/hotels_crud.php" onsubmit="return confirm('Naozaj chcete odstrániť tento hotel?');" class="m-0">
                                        <input type="hidden" name="action" value="delete">
                                        <input type="hidden" name="hotel_id" value="<?= (int)$hotel['id'] ?>">
                                        <input type="hidden" name="redirect" value="../listing.php">
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                    </form>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                if ($dbConnected && isset($hotel['id'])) {
                    $hotelForModal = $hotel;
                    include __DIR__ . '/listing_crud_modal.php';
                }
                ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include '../templates/footer.php'; ?>


<div class="modal fade" id="hotelDetailModal" tabindex="-1" aria-labelledby="hotelDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hotelDetailModalLabel">Podrobnosti o hoteli</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zavrieť"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <img id="modalHotelImage" src="" alt="Hotel" class="img-fluid rounded" />
                    </div>
                    <div class="col-md-6">
                        <h4 id="modalHotelTitle" class="mb-3"></h4>
                        <p class="text-muted mb-2"><strong>Miesto:</strong> <span id="modalHotelLocation"></span></p>
                        <p id="modalHotelDescription" class="mb-3"></p>
                        <p class="price mb-4" id="modalHotelPrice"></p>
                        <a id="hotelDetailLink" href="add-listing.php" class="btn btn-danger">Rezervovať / Viac info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/owl-carousel.js"></script>
<script src="../assets/js/animation.js"></script>
<script src="../assets/js/imagesloaded.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../assets/js/cookie-banner.js"></script>
<script src="../assets/js/listing-modal.js"></script>
</body>
</html>



