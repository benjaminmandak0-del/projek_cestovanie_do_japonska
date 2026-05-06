<?php
$conn = new mysqli("localhost", "root", "", "weboldal");

if ($conn->connect_error) {
    die("Hiba: " . $conn->connect_error);
}

/* =========================
   HOTEL FORM
========================= */
if (isset($_POST['form_type']) && $_POST['form_type'] === "hotel") {

    // alap adatok
    $title = $_POST['title'];
    $category = $_POST['category'];
    $stars = $_POST['stars'] ?: null;
    $location = $_POST['location'];
    $city = $_POST['city'];
    $price = $_POST['price'];

    $rooms = $_POST['rooms'] ?: null;
    $checkin = $_POST['checkin'] ?: null;
    $checkout = $_POST['checkout'] ?: null;
    $room_types = $_POST['room_types'];
    $description = $_POST['description'];

    // CONTACT
    $contact_name = $_POST['contact_name'];
    $contact_email = $_POST['contact_email'];
    $contact_phone = $_POST['contact_phone'];
    $website = $_POST['website'];

    /* ===== HOTEL INSERT ===== */
    $stmt = $conn->prepare("
        INSERT INTO hotels 
        (title, category, stars, location, city, price, rooms, checkin, checkout, room_types, description)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");

    $stmt->bind_param(
        "ssissdissss",
        $title,
        $category,
        $stars,
        $location,
        $city,
        $price,
        $rooms,
        $checkin,
        $checkout,
        $room_types,
        $description
    );

    $stmt->execute();

    // hotel ID
    $hotel_id = $conn->insert_id;

    /* ===== AMENITIES ===== */
    if (!empty($_POST['amenities'])) {
        foreach ($_POST['amenities'] as $amenity_name) {

            // lekérjük az ID-t
            $stmt = $conn->prepare("SELECT id FROM amenities WHERE name = ?");
            $stmt->bind_param("s", $amenity_name);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($row = $result->fetch_assoc()) {
                $amenity_id = $row['id'];

                // kapcsolat mentése
                $stmt2 = $conn->prepare("
                    INSERT INTO hotel_amenities (hotel_id, amenity_id)
                    VALUES (?, ?)
                ");
                $stmt2->bind_param("ii", $hotel_id, $amenity_id);
                $stmt2->execute();
            }
        }
    }

    /* ===== IMAGES ===== */
    if (!empty($_FILES['images']['name'][0])) {

        foreach ($_FILES['images']['name'] as $key => $name) {

            $tmp_name = $_FILES['images']['tmp_name'][$key];
            $new_name = time() . "_" . $name;

            move_uploaded_file($tmp_name, "uploads/" . $new_name);

            $stmt = $conn->prepare("
                INSERT INTO hotel_images (hotel_id, image_path)
                VALUES (?, ?)
            ");
            $stmt->bind_param("is", $hotel_id, $new_name);
            $stmt->execute();
        }
    }

    /* ===== CONTACT ===== */
    $stmt = $conn->prepare("
        INSERT INTO contacts 
        (hotel_id, contact_name, contact_email, contact_phone, website)
        VALUES (?, ?, ?, ?, ?)
    ");

    $stmt->bind_param(
        "issss",
        $hotel_id,
        $contact_name,
        $contact_email,
        $contact_phone,
        $website
    );

    $stmt->execute();

    header("Location: thank-you.php");
    exit;
}


/* =========================
   CONTACT FORM (maradhat)
========================= */
if (isset($_POST['surname'])) {

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("
        INSERT INTO contact_messages (name, surname, email, message)
        VALUES (?, ?, ?, ?)
    ");

    $stmt->bind_param("ssss", $name, $surname, $email, $message);
    $stmt->execute();

    header("Location: thank-you.php");
    exit;
}
?>