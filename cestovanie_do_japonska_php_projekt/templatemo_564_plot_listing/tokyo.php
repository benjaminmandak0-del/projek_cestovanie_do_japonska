<?php
$pageTitle = "Tokyo - Travel Japan";
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
 
    <?php include 'templates/header.php'; ?>



    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background:#f5f7fa;
            color:#333;
            line-height:1.6;
        }

        header{
            background:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
            url('https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
            height:100vh;
            color:white;
            display:flex;
            align-items:center;
            justify-content:center;
            text-align:center;
            flex-direction:column;
        }

        header h1{
            font-size:70px;
            margin-bottom:20px;
        }

        header p{
            font-size:22px;
            max-width:700px;
        }

        nav{
            position:fixed;
            top:0;
            width:100%;
            background:rgba(0,0,0,0.7);
            padding:15px 50px;
            display:flex;
            justify-content:space-between;
            z-index:1000;
        }

        nav a{
            color:white;
            text-decoration:none;
            margin-left:20px;
            font-size:18px;
        }

        section{
            padding:70px 10%;
        }

        h2{
            font-size:40px;
            margin-bottom:25px;
            color:#bc002d;
        }

        .cards{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
            gap:25px;
        }

        .card{
            background:white;
            border-radius:12px;
            overflow:hidden;
            box-shadow:0 4px 12px rgba(0,0,0,0.1);
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-8px);
        }

        .card img{
            width:100%;
            height:220px;
            object-fit:cover;
        }

        .card-content{
            padding:20px;
        }

        .hotel-box{
            background:white;
            padding:20px;
            border-left:5px solid #bc002d;
            margin-bottom:20px;
            border-radius:8px;
            box-shadow:0 3px 8px rgba(0,0,0,0.08);
        }

        .food-list li{
            margin-bottom:10px;
            font-size:18px;
        }

        .btn{
            display:inline-block;
            margin-top:20px;
            padding:12px 28px;
            background:#bc002d;
            color:white;
            text-decoration:none;
            border-radius:30px;
            transition:0.3s;
        }

        .btn:hover{
            background:#8f001f;
        }

        footer{
            background:#111;
            color:white;
            text-align:center;
            padding:20px;
        }
    </style>
</head>
<body>



<header>
    <h1>Tokyo</h1>
    <p>Objav moderné srdce Japonska plné technológií, tradícií a nezabudnuteľných zážitkov.</p>
    <a href="#about" class="btn">Objaviť viac</a>
</header>

<section id="about">
    <h2>O Tokiu</h2>
    <p>
        Tokio je hlavné mesto Japonska a jedno z najväčších miest na svete. 
        Spája moderné technológie, vysoké mrakodrapy, rušný nočný život a tradičné svätyne.
        Môžeš tu zažiť futuristické štvrte ako Shibuya či Akihabara, ale aj pokojné miesta 
        ako Meiji Shrine alebo Ueno Park.
    </p>
</section>

<section id="places">
    <h2>Top atrakcie</h2>
    <div class="cards">
        <div class="card">
            <img src="https://images.unsplash.com/photo-1503899036084-c55cdd92da26?auto=format&fit=crop&w=800&q=80">
            <div class="card-content">
                <h3>Shibuya Crossing</h3>
                <p>Najznámejšia križovatka sveta plná svetiel a energie.</p>
            </div>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1526481280695-3c4691f8b7d3?auto=format&fit=crop&w=800&q=80">
            <div class="card-content">
                <h3>Tokyo Tower</h3>
                <p>Ikonická veža s nádherným výhľadom na celé mesto.</p>
            </div>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1578469645742-46cae010e5d4?auto=format&fit=crop&w=800&q=80">
            <div class="card-content">
                <h3>Senso-ji Temple</h3>
                <p>Najstarší a najznámejší chrám v Tokiu.</p>
            </div>
        </div>
    </div>
</section>

<section id="hotels">
    <h2>Odporúčané hotely</h2>

    <div class="hotel-box">
        <h3>Park Hotel Tokyo</h3>
        <p>Luxusný hotel v centre Tokia s panoramatickým výhľadom na mesto.</p>
    </div>

    <div class="hotel-box">
        <h3>Hotel Gracery Shinjuku</h3>
        <p>Populárny hotel v Shinjuku známy ikonickou Godzilla hlavou.</p>
    </div>
</section>

<section id="food">
    <h2>Čo ochutnať?</h2>
    <ul class="food-list">
        <li>🍣 Sushi – čerstvé a tradičné japonské sushi.</li>
        <li>🍜 Ramen – horúca rezancová polievka plná chuti.</li>
        <li>🍢 Yakitori – grilované kuracie špízy.</li>
        <li>🥟 Gyoza – chutné japonské knedličky.</li>
    </ul>
    <a href="#" class="btn">Rezervovať teraz</a>
</section>


<?php include 'templates/footer.php'; ?>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>
</html>