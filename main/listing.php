<?php
include '../templates/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="../assets/css/fontawesome.css">
<link rel="stylesheet" href="../assets/css/templatemo-plot-listing.css">
<link rel="stylesheet" href="../assets/css/animated.css">
<link rel="stylesheet" href="../assets/css/owl.css">
<link rel="stylesheet" href="../assets/css/listing.css">

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

<?php
// DB beolvasás CSAK a fenti "LISTINGS" (hotel kártyák) szekcióhoz, hogy a képek is megjelenjenek.
require_once __DIR__ . '/../src/App.php';
$conn = new mysqli("localhost", "root", "", "weboldal");
$hotels = [];
$hotelImages = [];

if (!$conn->connect_error) {
    $stmt = $conn->prepare("SELECT id, title, city, price, stars, category FROM hotels ORDER BY id DESC");
    $stmt->execute();
    $res = $stmt->get_result();
    while ($row = $res->fetch_assoc()) {
        $hotels[] = $row;
    }

    if (count($hotels) > 0) {
        $ids = array_map(fn($h) => (int)($h['id'] ?? 0), $hotels);
        $ids = array_filter($ids, fn($x) => $x > 0);
        if (count($ids) > 0) {
            $in = implode(',', $ids);
            $q = $conn->query("SELECT hotel_id, image_path FROM hotel_images WHERE hotel_id IN ($in) ORDER BY id ASC");
            while ($r = $q->fetch_assoc()) {
                $hid = (int)($r['hotel_id'] ?? 0);
                if ($hid > 0 && !isset($hotelImages[$hid])) {
                    $hotelImages[$hid] = $r['image_path'];
                }
            }
        }
    }
}

function citySlug($city) {
    $c = mb_strtolower(trim((string)$city));
    if (str_contains($c, 'tokyo')) return 'tokyo';
    if (str_contains($c, 'osaka')) return 'osaka';
    if (str_contains($c, 'kyoto')) return 'kyoto';
    return 'other';
}

function safeImg($imagePath) {
    if (!$imagePath) return '../assets/images/listing-01.jpg';
    $clean = preg_replace('#^(?:\.\./)?uploads/[\\/]?#i', '', (string)$imagePath);
    return '../uploads/' . $clean;
}

// Válasszunk city-ként max 2 hotelt (ha van), különben marad a korábbi hardcoded kép.
$hardcoded = [
    'tokyo' => [
        ['img' => 'assets/images/Park Hotel Tokyo.jpg', 'title' => 'Park Hotel Tokyo'],
        ['img' => 'assets/images/Hotel Gracery Shinjuku.webp', 'title' => 'Hotel Gracery Shinjuku'],
    ],
    'osaka' => [
        ['img' => 'assets/images/Hotel Universal Port.webp', 'title' => 'Hotel Universal Port'],
        ['img' => 'assets/images/Swissotel Nankai Osaka.webp', 'title' => 'Swissôtel Nankai Osaka'],
    ],
    'kyoto' => [
        ['img' => 'assets/images/Park Hyatt Kyoto.jpg', 'title' => 'Park Hyatt Kyoto'],
        ['img' => 'assets/images/The Celestine Kyoto Gion.webp', 'title' => 'Hotel The Celestine Kyoto Gion'],
    ],
];

$cityKeys = ['tokyo','osaka','kyoto'];
$selectedByCity = [];
foreach ($cityKeys as $ck) {
    $filtered = array_values(array_filter($hotels, function($h) use ($ck) {
        return citySlug($h['city'] ?? '') === $ck;
    }));
    $selectedByCity[$ck] = array_slice($filtered, 0, 2);
}
?>


    <!-- TOKYO -->
    <div class="hotel tokyo hotel-card row g-0">
        <div class="col-md-5">
            <img src=" ../assets/images/Park Hotel Tokyo.jpg">
        </div>
        <div class="col-md-7 p-4">
            <h4>Park Hotel Tokyo</h4>
            <p>Luxusný hotel inšpirovaný umením s úžasným výhľadom na mesto.</p>
            <div class="price">$320 / noc</div>
        </div>
    </div>

    <div class="hotel tokyo hotel-card row g-0">
        <div class="col-md-5">
            <img src="../assets/images/Hotel Gracery Shinjuku.webp">
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
            <img src="../assets/images/Hotel Universal Port.webp">
        </div>
        <div class="col-md-7 p-4">
            <h4>Hotel Universal Port</h4>
            <p>Dokonalý hotel vedľa Universal Studios Japan.</p>
            <div class="price">$180 / noc</div>
        </div>
    </div>

    <div class="hotel osaka hotel-card row g-0">
        <div class="col-md-5">
            <img src="../assets/images/Swissotel Nankai Osaka.webp">
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
            <img src="../assets/images/Park Hyatt Kyoto.jpg">
        </div>
        <div class="col-md-7 p-4">
            <h4>Park Hyatt Kyoto</h4>
            <p>Tradičný ryokan v historickej štvrti Gion.</p>
            <div class="price">$450 / noc</div>
        </div>
    </div>

    <div class="hotel kyoto hotel-card row g-0">
        <div class="col-md-5">
            <img src="../assets/images/The Celestine Kyoto Gion.webp">
        </div>
        <div class="col-md-7 p-4">
            <h4>Hotel The Celestine Kyoto Gion</h4>
            <p>Moderný hotel spájajúci tradíciu a pohodlie.</p>
            <div class="price">$380 / noc</div>
        </div>
    </div>

</div>

<!-- RECOMMENDED / RATING SECTION (STATIC IMAGES) -->
<div class="container mt-5">
    <div class="section-heading">
    </div>

   

    <div class="section-heading">
        <h2>Odporúčané hotely</h2>
        <h6>Najlepšie hodnotené podľa uložených hotelov</h6>
    </div>

    <?php if (count($hotels) === 0): ?>
        <div class="alert alert-info" style="margin-top:20px;">Zatiaľ nie sú uložené žiadne hotely.</div>
    <?php else: ?>
        <?php foreach ($cityKeys as $key => $label): ?>
            <?php
                $filtered = array_values(array_filter($hotels, function($h) use ($key) {
                    $c = mb_strtolower(trim((string)($h['city'] ?? '')));
                    return str_contains($c, $key);
                }));

                usort($filtered, function($a, $b) {
                    return starsInt($b['stars'] ?? 0) <=> starsInt($a['stars'] ?? 0);
                });

                $topHotels = array_slice($filtered, 0, 2);
            ?>

            <div class="mt-4">
                <h3 class="mb-3"><?php echo htmlspecialchars($label); ?></h3>
                <div class="row g-3">
                    <?php if (count($topHotels) === 0): ?>
                        <div class="col-12"><div class="alert alert-light">V tejto kategórii zatiaľ nie sú hotely.</div></div>
                    <?php else: ?>
                        <?php foreach ($topHotels as $th):
                            $thId = (int)($th['id'] ?? 0);
                            $thTitle = $th['title'] ?? '';
                            $thStars = $th['stars'] ?? '';
                            $thImgPath = $hotelImages[$thId] ?? null;
$clean = $thImgPath ? preg_replace('#^(?:\.\./)?uploads/[\\/]?#i', '', (string)$thImgPath) : null;
                            $thImgUrl = $thImgPath ? ('../uploads/' . $clean) : '../assets/images/listing-01.jpg';
                        ?>
                            <div class="col-md-6">
                                <div class="card hotel-card shadow-sm mb-3">
                                    <img src="<?php echo htmlspecialchars($thImgUrl); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($thTitle); ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo htmlspecialchars($thTitle); ?></h5>
                                        <div class="text-muted">Hodnotenie: <?php echo htmlspecialchars((string)$thStars); ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
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

<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<?php include '../templates/footer.php'; ?>

<!-- Scripts -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/owl-carousel.js"></script>
<script src="../assets/js/animation.js"></script>
<script src="../assets/js/imagesloaded.js"></script>
<script src="../assets/js/custom.js"></script>

</body>
</html>

