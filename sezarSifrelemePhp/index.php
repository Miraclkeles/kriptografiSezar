<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sezar Şifreleme</title>
    <meta charset="utf-8">
    <?php include 'project.php'; ?>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>
    <br>
    <h1 style="text-align:center">Sezar Şifreleme ve Kendi Şifreleme Tekniğim</h1>
    <form action="index.php" method="post">
        <div class="card text-bg-primary mb-3" style="margin: 50px; text-align:center">
            <div class="card-header">
                <div>
                    <select name="sifrele">
                        <option value="cesar" selected>5. Soru Sezar Şifreleme</option>
                    </select>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text">


                <div>

                    <div>

                        <div>
                            <label for="anahtar">ANAHTAR </label><br>
                            <input type="number" class="anahtar" name="anahtar" id="anahtar">
                        </div>
                    </div>
                    <hr />
                    <div>
                        <div>
                            <label for="orijinalMetin">ASIL METİN</label><br>
                            <textarea style="width: 500px;" name="orijinalMetin" id="orijinalMetin"><?php if (isset($_POST['sifrele']) && $_POST['sifrele'] === "cesar" && $_POST['sifrelemeyiCozButonu']) {
                                                                                                        SezarCoz();
                                                                                                    } ?></textarea>
                        </div>
                        <div>
                            <button style="border-radius: 8px;" name="sifrelemeYapButonu">ŞİFRELE</button><br>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div>
                            <label for="sifreCoz">ŞİFRELENEN METİN</label><br>
                            <textarea style="width: 500px;" name="sifreCoz" id="sifreCoz"><?php
                                                                                            if (isset($_POST['sifrele']) && $_POST['sifrele'] === "cesar") {
                                                                                                Sezar();
                                                                                            } ?></textarea>
                        </div>

                        <div>
                            <button style="border-radius: 8px;" name="sifrelemeyiCozButonu" value="1">Şifreyi Çöz</button><br>
                        </div>

                    </div>
                </div><br>
                <hr>
                <div>
                    <button style="width: 200px; background-color: black; border-radius:5px"><a href="offsetTahminleme.php" style="color:aliceblue; text-decoration:none"> --ANAHTAR BUL-- </a></button>
                </div>







                </p>
            </div>
        </div>

</body>

</html>
<!-- 




-->