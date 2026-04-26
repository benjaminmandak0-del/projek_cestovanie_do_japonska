<?php
$conn = new mysqli("localhost", "root", "", "weboldal");

if ($conn->connect_error) {
    die("Hiba: " . $conn->connect_error);
}

/* =========================
   ADD LISTING FORM
========================= */
if (isset($_POST['title'])) {

    $title = $_POST['title'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $location = $_POST['location'];
    $area = $_POST['area'];
    $bedrooms = $_POST['bedrooms'];
    $description = $_POST['description'];

    // checkboxok (ha nincs bepipálva → 0)
    $parking = isset($_POST['parking']) ? 1 : 0;
    $wifi = isset($_POST['wifi']) ? 1 : 0;
    $pool = isset($_POST['pool']) ? 1 : 0;
    $gym = isset($_POST['gym']) ? 1 : 0;
    $garden = isset($_POST['garden']) ? 1 : 0;
    $ac = isset($_POST['ac']) ? 1 : 0;
    $furnished = isset($_POST['furnished']) ? 1 : 0;

    $contact_name = $_POST['contact_name'];
    $contact_email = $_POST['contact_email'];
    $contact_phone = $_POST['contact_phone'];

    // kép feltöltés
    $image_name = "";
    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . "_" . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "uploads/" . $image_name);
    }

    $stmt = $conn->prepare("INSERT INTO listings 
    (title, category, price, location, area, bedrooms, description,
     parking, wifi, pool, gym, garden, ac, furnished,
     image, contact_name, contact_email, contact_phone)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssdsiiissiiiiissss",
        $title, $category, $price, $location, $area, $bedrooms, $description,
        $parking, $wifi, $pool, $gym, $garden, $ac, $furnished,
        $image_name, $contact_name, $contact_email, $contact_phone
    );

    $stmt->execute();

    header("Location: thank-you.php");
    exit;
}


/* =========================
   CONTACT FORM
========================= */
if (isset($_POST['surname'])) {

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO contact_messages (name, surname, email, message)
                            VALUES (?, ?, ?, ?)");

    $stmt->bind_param("ssss", $name, $surname, $email, $message);
    $stmt->execute();

    header("Location: thank-you.php");
    exit;
}
?>