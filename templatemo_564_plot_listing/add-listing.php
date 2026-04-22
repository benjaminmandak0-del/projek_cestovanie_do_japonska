<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Add Your Property Listing - Plotlist">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- Updated fonts: Poppins for modern look -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <title>Add Your Listing - Plotlist</title>
    <!-- Existing styles -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/add-listing.css">
</head>
<body>
    <!-- Preloader -->
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

    <!-- Header -->
    <?php include 'templates/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-label">SHARE YOUR PROPERTY</div>
                <h1 class="hero-heading">Add Your Listing And Reach More Customers</h1>
                <p class="hero-desc">Create your property listing with our intuitive form and connect with potential buyers instantly.</p>
            </div>
        </div>
    </section>

    <!-- Main Form Section -->
    <section class="listing-form-page">
        <div class="container">
            <div class="form-card">
                <h3 class="section-title">Create New Listing</h3>
                
                <form id="add-listing" action="process.php" method="post" enctype="multipart/form-data">
                    <div class="form-grid">
                        
                        <!-- Listing Title -->
                        <div class="form-field">
                            <input type="text" name="title" id="title" placeholder="Listing Title" autocomplete="on" required>
                        </div>

                        <!-- Category -->
                        <div class="form-field">
                            <select name="category" id="category" required>
                                <option value="">Select Category</option>
                                <option value="apartments">Apartments</option>
                                <option value="houses">Houses</option>
                                <option value="commercial">Commercial</option>
                                <option value="land">Land</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <!-- Price with $ -->
                        <div class="form-field price-field">
                            <input type="number" name="price" id="price" placeholder="0" step="0.01" min="0" required>
                        </div>

                        <!-- Location -->
                        <div class="form-field">
                            <input type="text" name="location" id="location" placeholder="Location / Address" autocomplete="on" required>
                        </div>

                        <!-- Area Size -->
                        <div class="form-field">
                            <input type="number" name="area" id="area" placeholder="Area Size (sq ft)" min="0">
                        </div>

                        <!-- Bedrooms -->
                        <div class="form-field">
                            <input type="number" name="bedrooms" id="bedrooms" placeholder="Number of Bedrooms" min="0">
                        </div>

                        <!-- Description -->
                        <div class="form-field form-grid-full">
                            <textarea name="description" id="description" placeholder="Property Description" required></textarea>
                        </div>

                        <!-- Amenities -->
                        <div class="form-grid-full">
                            <h4 class="section-title" style="font-size: 1.5rem; margin-bottom: 24px;">Amenities</h4>
                            <div class="amenities-grid">
                                <label class="amenity-item">
                                    <input type="checkbox" name="parking" value="parking">
                                    <span>Parking</span>
                                </label>
                                <label class="amenity-item">
                                    <input type="checkbox" name="wifi" value="wifi">
                                    <span>WiFi</span>
                                </label>
                                <label class="amenity-item">
                                    <input type="checkbox" name="pool" value="pool">
                                    <span>Pool</span>
                                </label>
                                <label class="amenity-item">
                                    <input type="checkbox" name="gym" value="gym">
                                    <span>Gym</span>
                                </label>
                                <label class="amenity-item">
                                    <input type="checkbox" name="garden" value="garden">
                                    <span>Garden</span>
                                </label>
                                <label class="amenity-item">
                                    <input type="checkbox" name="ac" value="air_conditioning">
                                    <span>Air Conditioning</span>
                                </label>
                                <label class="amenity-item">
                                    <input type="checkbox" name="furnished" value="furnished">
                                    <span>Furnished</span>
                                </label>
                            </div>
                        </div>

                        <!-- Image Upload (full width) -->
                        <div class="form-field form-grid-full">
                            <input type="file" name="image" id="image" accept="image/*" class="form-control">
                        </div>

                        <!-- User Information Section -->
                        <div class="form-grid-full user-section">
                            <h4 class="section-title" style="font-size: 1.75rem;">Your Information</h4>
                            <div class="form-grid">
                                <div class="form-field">
                                    <input type="text" name="contact_name" id="contact_name" placeholder="Your Name" autocomplete="on" required>
                                </div>
                                <div class="form-field">
                                    <input type="email" name="contact_email" id="contact_email" placeholder="Your Email" required>
                                </div>
                                <div class="form-field form-grid-full">
                                    <input type="tel" name="contact_phone" id="contact_phone" placeholder="Your Phone Number" autocomplete="on">
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="submit-btn">
                            <i class="fa fa-paper-plane"></i>
                            Submit Listing
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'templates/footer.php'; ?>

    <!-- Scripts (existing) -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>
