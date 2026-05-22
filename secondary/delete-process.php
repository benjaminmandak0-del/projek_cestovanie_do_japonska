<?php
$conn = new mysqli("localhost", "root", "", "weboldal");
if ($conn->connect_error) {
    die("Hiba: " . $conn->connect_error);
}

if (isset($_POST['form_type']) && $_POST['form_type'] === 'hotel_delete') {

    $hotel_id = isset($_POST['hotel_id']) ? (int)$_POST['hotel_id'] : 0;
    if ($hotel_id <= 0) {
        die('Neplatné ID');
    }

    // najprv prepojovacie tabuľky + závislé tabuľky
    $stmtDelAmenities = $conn->prepare("DELETE FROM hotel_amenities WHERE hotel_id = ?");
    $stmtDelAmenities->bind_param("i", $hotel_id);
    $stmtDelAmenities->execute();

    $stmtDelImages = $conn->prepare("DELETE FROM hotel_images WHERE hotel_id = ?");
    $stmtDelImages->bind_param("i", $hotel_id);
    $stmtDelImages->execute();

    $stmtDelContacts = $conn->prepare("DELETE FROM contacts WHERE hotel_id = ?");
    $stmtDelContacts->bind_param("i", $hotel_id);
    $stmtDelContacts->execute();

    // potom hotel
    $stmtDelHotel = $conn->prepare("DELETE FROM hotels WHERE id = ?");
    $stmtDelHotel->bind_param("i", $hotel_id);
    $stmtDelHotel->execute();

    header("Location: thank-you.php");
    exit;
}

die('Neplatný request');

