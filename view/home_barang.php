<?php
$data = file_get_contents("../asset/json/data_barang.json");
$barang = json_decode($data, true);
$data_barang = $barang["barang"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/style_home.css">
</head>

<body>
    <input type="checkbox" id="check">
    <label for="check">
        <i id="btn">-></i>
        <i id="cancel">X</i>
    </label>
    <div class="sidebar">
        <header>KPLK STORE</header>
        <ul>
            <li><a href="home_barang.php">Home</a></li>
            <li><a href="pesan_barang.php">Pesan Barang</a></li>
            <li><a href="list_pesan.html">list pesan</a></li>
            <li><a href="aboutus.html">About Us</a></li>
        </ul>
    </div>
    <section>
        <nav>

        </nav>
        <div class="isi">
            <img src="gambar/banner.jpg" style="width: 1366px;height: auto; ">
        </div>
        <div class="row">
            <?php foreach ($data_barang as $key) : ?>
                <div class="column">
                    <div class="card">
                        <img src="../asset/image/<?= $key["gambar"]; ?>" style="width: 150px;height: auto;padding-top: 10px;">
                        <h1><?= $key["nama"] ?></h1>
                        <h2>Rp.<?= $key["harga"] ?></h2>
                        <button>beli</button>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>
</body>
<div class="footer" <p style="color: white;padding-top: 40px">| Baju | Celana | Topi |</p>
</div>

</html>
<!-- 
    nama kelompok :
    1. Achmad Fadlan Bhahreisy (06.2018.1.06992)
    2. Dimas Pratikto (06.2018.1.06958)
    3. Miftakul Rifai (06.2018.1.06986)
 -->