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
    <h1 style="text-align:center">Doğru Metin ve Doğru Key Bulucu</h1>
    <form action="offsetTahminleme.php" method="post">
        <div class="card text-bg-primary mb-3" style="margin: 50px; text-align:center">
            <div class="card-header">
                <div>
                    <select style="border-radius: 8px;" name="sifrele">
                        <option disabled value="offset" selected>Sezar Offset Bul</option>

                    </select>

                </div>
            </div>
            <div class="card-body">
                <p class="card-text">
                <div>
                    <hr />
                    <div>
                        <div>
                            <label for="sifreliMetin">ŞİFRELİ METİN</label><br>
                            <textarea style="width: 500px;" name="sifreliMetin" id="sifreliMetin"></textarea>
                        </div>
                        <div>
                            <button style="border-radius: 5px;" name="sifreKeyBul">ŞİFRE VE KEY BUL</button><br>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <label for="anahtar">ANAHTAR </label><br>
                        <input type="number" disabled class="anahtar" name="anahtar" id="anahtar">
                    </div>
                    <hr>
                    <div>
                        <div>
                            <label for="sifreCoz">DOĞRU MESAJ</label><br>
                            <textarea style="width: 500px;" name="sifreCoz" id="sifreCoz"></textarea>
                        </div>

                    </div>
                </div>
                </p>
                <hr>
                <button style="width: 200px; background-color: black; border-radius:5px"><a href="index.php" style="color:aliceblue; text-decoration:none"> --Sezar Şifreleme-- </a></button>

            </div>
        </div>




</body>

</html>
<!-- 




-->