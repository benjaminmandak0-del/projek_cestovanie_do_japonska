<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upraviť hotel</title>

    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="../assets/css/animated.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/cookie-banner.css">
    <link rel="stylesheet" href="../assets/css/add-listing.css">
</head>
<body>

<?php include '../templates/header.php'; ?>

<?php
require_once __DIR__ . '/../src/App.php';

$conn = new mysqli("localhost", "root", "", "weboldal");
if ($conn->connect_error) {
    die("Hiba: " . $conn->connect_error);
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$hotel = null;
if ($id > 0) {
    $stmt = $conn->prepare("SELECT * FROM hotels WHERE id = ? LIMIT 1");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $hotel = $res ? $res->fetch_assoc() : null;
}

if (!$hotel) {
    echo '<div class="container py-5"><div class="alert alert-warning" role="alert">Hotel sa nenašiel.</div><a class="btn btn-primary" href="listing.php">Späť na zoznam</a></div>';
    include '../templates/footer.php';
    exit;
}

// Vytiahneme amenity aktuálneho hotela
$amenities = [];
$stmt = $conn->prepare("SELECT a.name FROM amenities a INNER JOIN hotel_amenities ha ON ha.amenity_id = a.id WHERE ha.hotel_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$res = $stmt->get_result();
if ($res) {
    while ($row = $res->fetch_assoc()) {
        $amenities[$row['name']] = true;
    }
}

$allAmenityOptions = ['breakfast','wifi','pool','spa','gym','parking','shuttle','restaurant','room_service','pet_friendly'];
?>

<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="top-text header-text">
                    <h6>Upraviť hotel</h6>
                    <h2><?php echo htmlspecialchars($hotel['title'] ?? 'Hotel'); ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="hotel-form-card">
        <div class="hotel-form-header text-center">
          <h2>Hotelový formulár</h2>
          <p>Upravte údaje o hoteli a uložte zmeny.</p>
        </div>

        <form action="../secondary/update-process.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="form_type" value="hotel_update">
            <input type="hidden" name="hotel_id" value="<?php echo (int)$id; ?>">

            <div class="form-section mb-4">
                <div class="form-section-title">Základné údaje</div>
                <div class="row gy-3">
                    <div class="col-md-6">
                        <label class="form-label">Názov hotela</label>
                        <input type="text" name="title" class="form-control" value="<?php echo htmlspecialchars($hotel['title'] ?? ''); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Typ hotela</label>
                        <select name="category" class="form-select" required>
                            <?php
                            $categories = ['luxury'=>'Luxusný','boutique'=>'Boutique','business'=>'Biznis','resort'=>'Resort','family'=>'Rodinný'];
                            $current = $hotel['category'] ?? '';
                            echo '<option value="">Vyberte kategóriu</option>';
                            foreach ($categories as $val=>$label) {
                                $sel = $current === $val ? 'selected' : '';
                                echo '<option value="'.$val.'" '.$sel.'>'.$label.'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Hodnotenie</label>
                        <select name="stars" class="form-select">
                            <option value="">Počet hviezdičiek</option>
                            <?php
                            for ($s=5;$s>=1;$s--) {
                                $sel = ((string)($hotel['stars'] ?? '')) === (string)$s ? 'selected' : '';
                                echo '<option value="'.$s.'" '.$sel.'>'.$s.' hviezdičiek</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Adresa</label>
                        <input type="text" name="location" class="form-control" value="<?php echo htmlspecialchars($hotel['location'] ?? ''); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Mesto</label>
                        <input type="text" name="city" class="form-control" value="<?php echo htmlspecialchars($hotel['city'] ?? ''); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Cena / noc</label>
                        <input type="number" name="price" class="form-control" value="<?php echo htmlspecialchars($hotel['price'] ?? ''); ?>" required>
                    </div>
                </div>
            </div>

            <div class="form-section mb-4">
                <div class="form-section-title">Izby a služby</div>
                <div class="row gy-3">
                    <div class="col-md-4">
                        <label class="form-label">Počet izieb</label>
                        <input type="number" name="rooms" class="form-control" value="<?php echo htmlspecialchars($hotel['rooms'] ?? ''); ?>">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Check-in</label>
                        <input type="text" name="checkin" class="form-control" value="<?php echo htmlspecialchars($hotel['checkin'] ?? ''); ?>">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Check-out</label>
                        <input type="text" name="checkout" class="form-control" value="<?php echo htmlspecialchars($hotel['checkout'] ?? ''); ?>">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Typy izieb</label>
                        <input type="text" name="room_types" class="form-control" value="<?php echo htmlspecialchars($hotel['room_types'] ?? ''); ?>">
                    </div>
                </div>

                <div class="mt-4">
                    <div class="hotel-details-subtitle mb-3">Hlavné služby</div>
                    <div class="custom-checkbox-grid">
                        <?php
                        $labels = [
                            'breakfast'=>'Raňajky',
                            'wifi'=>'WiFi',
                            'pool'=>'Bazén',
                            'spa'=>'Spa',
                            'gym'=>'Fitness',
                            'parking'=>'Parkovanie',
                            'shuttle'=>'Transfer',
                            'restaurant'=>'Reštaurácia',
                            'room_service'=>'Izbová služba',
                            'pet_friendly'=>'Prívetivý pre zvieratá'
                        ];
                        foreach ($allAmenityOptions as $amen) {
                            $checked = isset($amenities[$amen]) ? 'checked' : '';
                            echo '<div class="form-check">'
                               .'<input class="form-check-input" type="checkbox" id="'.$amen.'" name="amenities[]" value="'.$amen.'" '.$checked.'>'
                               .'<label class="form-check-label" for="'.$amen.'">'.$labels[$amen].'</label>'
                               .'</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="form-section mb-4">
                <div class="form-section-title">Popis hotela</div>
                <div class="mb-3">
                    <textarea name="description" class="form-control" rows="6" required><?php echo htmlspecialchars($hotel['description'] ?? ''); ?></textarea>
                </div>
            </div>

            <div class="form-section mb-4">
                <div class="form-section-title">Fotografie a média</div>
                <div class="mb-3">
                    <input type="file" name="images[]" class="form-control" multiple accept="image/*">
                </div>
                <div class="form-text">Ak chcete pridať nové fotky, nahrajte ich. Staré zostanú.</div>
            </div>

            <?php
            // contacts (zjednodušene, ak je viac, vezmeme prvú)
            $contact = null;
            $stmt = $conn->prepare("SELECT * FROM contacts WHERE hotel_id = ? LIMIT 1");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $cres = $stmt->get_result();
            if ($cres) { $contact = $cres->fetch_assoc(); }
            $contact_name = $contact['contact_name'] ?? '';
            $contact_email = $contact['contact_email'] ?? '';
            $contact_phone = $contact['contact_phone'] ?? '';
            $website = $contact['website'] ?? '';
            ?>

            <div class="form-section mb-4">
                <div class="form-section-title">Kontaktné údaje</div>
                <div class="row gy-3">
                    <div class="col-md-6">
                        <label class="form-label">Meno kontaktného zástupcu</label>
                        <input type="text" name="contact_name" class="form-control" value="<?php echo htmlspecialchars($contact_name); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="contact_email" class="form-control" value="<?php echo htmlspecialchars($contact_email); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Telefón</label>
                        <input type="text" name="contact_phone" class="form-control" value="<?php echo htmlspecialchars($contact_phone); ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Web alebo rezervačný odkaz</label>
                        <input type="url" name="website" class="form-control" value="<?php echo htmlspecialchars($website); ?>">
                    </div>
                </div>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary">Uložiť zmeny</button>
            </div>
        </form>

      </div>
    </div>
  </div>
</div>

<?php include '../templates/footer.php'; ?>

<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/owl-carousel.js"></script>
<script src="../assets/js/animation.js"></script>
<script src="../assets/js/imagesloaded.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../assets/js/cookie-banner.js"></script>
</body>
</html>

