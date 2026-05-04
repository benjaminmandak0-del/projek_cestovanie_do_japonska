<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pridať hotel</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/cookie-banner.css">

    <style>
      .hotel-form-card {
        background: #ffffff;
        border: none;
        border-radius: 18px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.08);
        padding: 40px;
      }
      .hotel-form-header h2 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 0.4rem;
      }
      .hotel-form-header p {
        color: #6c757d;
        margin-bottom: 1.8rem;
      }
      .form-section-title {
        font-size: 1rem;
        font-weight: 600;
        color: #2a2a2a;
        margin-bottom: 18px;
        padding-bottom: 10px;
        border-bottom: 1px solid #e9ecef;
      }
      .custom-checkbox-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 0.75rem 1.5rem;
      }
      .custom-checkbox-grid .form-check {
        margin-bottom: 0;
      }
      .hotel-form-card .form-control,
      .hotel-form-card .form-select {
        border-radius: 12px;
        padding: 1rem 1rem;
        border: 1px solid #d8dbe0;
      }
      .hotel-form-card .btn-primary {
        min-width: 210px;
        border-radius: 10px;
        padding: 0.95rem 1.6rem;
        font-weight: 600;
      }
      .hotel-details-subtitle {
        color: #6c757d;
        font-size: 0.95rem;
      }
      @media (max-width: 767px) {
        .custom-checkbox-grid {
          grid-template-columns: 1fr;
        }
      }
    </style>
</head>

<body>

  <!-- ***** Header Area Start ***** -->
  <?php include 'templates/header.php'; ?>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="top-text header-text">
            <h6>Pridať nový hotel</h6>
            <h2>Vyplňte údaje o vašom hoteli</h2>
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
          <p>Vyplňte jednoduchým spôsobom všetky dôležité informácie o hoteli a jeho službách.</p>
        </div>

        <form action="process.php" method="POST" enctype="multipart/form-data">

          <input type="hidden" name="form_type" value="hotel">

          <div class="form-section mb-4">
            <div class="form-section-title">Základné údaje</div>
            <div class="row gy-3">
              <div class="col-md-6">
                <label class="form-label">Názov hotela</label>
                <input type="text" name="title" class="form-control" placeholder="Napr. Sakura Travel Hotel" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Typ hotela</label>
                <select name="category" class="form-select" required>
                  <option value="">Vyberte kategóriu</option>
                  <option value="luxury">Luxusný</option>
                  <option value="boutique">Boutique</option>
                  <option value="business">Biznis</option>
                  <option value="resort">Resort</option>
                  <option value="family">Rodinný</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Hodnotenie</label>
                <select name="stars" class="form-select">
                  <option value="">Počet hviezdičiek</option>
                  <option value="5">5 hviezdičiek</option>
                  <option value="4">4 hviezdičky</option>
                  <option value="3">3 hviezdičky</option>
                  <option value="2">2 hviezdičky</option>
                  <option value="1">1 hviezdička</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Adresa</label>
                <input type="text" name="location" class="form-control" placeholder="Ulica, mesto, krajina" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Mesto</label>
                <input type="text" name="city" class="form-control" placeholder="Napr. Tokio" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Cena / noc</label>
                <input type="number" name="price" class="form-control" placeholder="Cena za noc" required>
              </div>
            </div>
          </div>

          <div class="form-section mb-4">
            <div class="form-section-title">Izby a služby</div>
            <div class="row gy-3">
              <div class="col-md-4">
                <label class="form-label">Počet izieb</label>
                <input type="number" name="rooms" class="form-control" placeholder="Napr. 120">
              </div>
              <div class="col-md-4">
                <label class="form-label">Check-in</label>
                <input type="text" name="checkin" class="form-control" placeholder="Napr. 14:00">
              </div>
              <div class="col-md-4">
                <label class="form-label">Check-out</label>
                <input type="text" name="checkout" class="form-control" placeholder="Napr. 11:00">
              </div>
              <div class="col-12">
                <label class="form-label">Typy izieb</label>
                <input type="text" name="room_types" class="form-control" placeholder="Napr. standard, deluxe, rodinný, suite">
              </div>
            </div>

            <div class="mt-4">
              <div class="hotel-details-subtitle mb-3">Hlavné služby</div>
              <div class="custom-checkbox-grid">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="breakfast" name="amenities[]" value="breakfast">
                  <label class="form-check-label" for="breakfast">Raňajky</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="wifi" name="amenities[]" value="wifi">
                  <label class="form-check-label" for="wifi">WiFi</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="pool" name="amenities[]" value="pool">
                  <label class="form-check-label" for="pool">Bazén</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="spa" name="amenities[]" value="spa">
                  <label class="form-check-label" for="spa">Spa</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gym" name="amenities[]" value="gym">
                  <label class="form-check-label" for="gym">Fitness</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="parking" name="amenities[]" value="parking">
                  <label class="form-check-label" for="parking">Parkovanie</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="shuttle" name="amenities[]" value="shuttle">
                  <label class="form-check-label" for="shuttle">Transfer</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="restaurant" name="amenities[]" value="restaurant">
                  <label class="form-check-label" for="restaurant">Reštaurácia</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="roomservice" name="amenities[]" value="room_service">
                  <label class="form-check-label" for="roomservice">Izbová služba</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="petfriendly" name="amenities[]" value="pet_friendly">
                  <label class="form-check-label" for="petfriendly">Prívetivý pre zvieratá</label>
                </div>
              </div>
            </div>
          </div>

          <div class="form-section mb-4">
            <div class="form-section-title">Popis hotela</div>
            <div class="mb-3">
              <textarea name="description" class="form-control" rows="6" placeholder="Krátky profesionálny popis hotela..." required></textarea>
            </div>
          </div>

          <div class="form-section mb-4">
            <div class="form-section-title">Fotografie a média</div>
            <div class="mb-3">
              <input type="file" name="images[]" class="form-control" multiple accept="image/*">
            </div>
            <div class="form-text">Nahrajte čo najviac fotografií izieb, spoločných priestorov a služieb.</div>
          </div>

          <div class="form-section mb-4">
            <div class="form-section-title">Kontaktné údaje</div>
            <div class="row gy-3">
              <div class="col-md-6">
                <label class="form-label">Meno kontaktného zástupcu</label>
                <input type="text" name="contact_name" class="form-control" placeholder="Meno" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" name="contact_email" class="form-control" placeholder="Email" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Telefón</label>
                <input type="text" name="contact_phone" class="form-control" placeholder="+421 900 123 456">
              </div>
              <div class="col-md-6">
                <label class="form-label">Web alebo rezervačný odkaz</label>
                <input type="url" name="website" class="form-control" placeholder="https://">
              </div>
            </div>
          </div>

          <div class="text-end">
            <button type="submit" class="btn btn-primary">Uložiť hotel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include 'templates/footer.php'; ?>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/cookie-banner.js"></script>

</body>
</html>
