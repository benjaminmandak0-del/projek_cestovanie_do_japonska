<?php include 'templates/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pridať inzerát</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

<div class="container mt-5">
<h2>Pridať nový inzerát</h2>

    <form action="process.php" method="POST" enctype="multipart/form-data">

        <!-- FONTOS: form azonosító -->
        <input type="hidden" name="form_type" value="listing">

        <!-- Title -->
        <div class="mb-3">
            <input type="text" name="title" class="form-control" placeholder="Listing Title" required>
        </div>

        <!-- Category -->
        <div class="mb-3">
            <select name="category" class="form-control" required>
<option value="">Vyberte kategóriu</option>
                <option value="apartments">Apartments</option>
                <option value="houses">Houses</option>
                <option value="commercial">Commercial</option>
                <option value="land">Land</option>
            </select>
        </div>

        <!-- Price -->
        <div class="mb-3">
            <input type="number" name="price" class="form-control" placeholder="Price" required>
        </div>

        <!-- Location -->
        <div class="mb-3">
            <input type="text" name="location" class="form-control" placeholder="Location" required>
        </div>

        <!-- Area -->
        <div class="mb-3">
            <input type="number" name="area" class="form-control" placeholder="Area Size">
        </div>

        <!-- Bedrooms -->
        <div class="mb-3">
            <input type="number" name="bedrooms" class="form-control" placeholder="Bedrooms">
        </div>

        <!-- Description -->
        <div class="mb-3">
            <textarea name="description" class="form-control" placeholder="Description" required></textarea>
        </div>

        <!-- Amenities -->
        <div class="mb-3">
            <label><input type="checkbox" name="parking"> Parking</label><br>
            <label><input type="checkbox" name="wifi"> WiFi</label><br>
            <label><input type="checkbox" name="pool"> Pool</label><br>
            <label><input type="checkbox" name="gym"> Gym</label><br>
            <label><input type="checkbox" name="garden"> Garden</label><br>
            <label><input type="checkbox" name="ac"> AC</label><br>
            <label><input type="checkbox" name="furnished"> Furnished</label>
        </div>

        <!-- Image -->
        <div class="mb-3">
            <input type="file" name="image" class="form-control">
        </div>

        <!-- Contact Info -->
<h4>Vaše údaje</h4>

        <div class="mb-3">
            <input type="text" name="contact_name" class="form-control" placeholder="Your Name" required>
        </div>

        <div class="mb-3">
            <input type="email" name="contact_email" class="form-control" placeholder="Your Email" required>
        </div>

        <div class="mb-3">
            <input type="text" name="contact_phone" class="form-control" placeholder="Phone">
        </div>

        <!-- Submit -->
<button type="submit" class="btn btn-primary">Odoslať inzerát</button>

    </form>
</div>

<?php include 'templates/footer.php'; ?>


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>
  
</body>
</html>
