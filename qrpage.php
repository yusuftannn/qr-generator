<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Primary Meta Tags -->
    <meta name="title" content="" />
    <meta name="author" content="Yusuf Tan" />
    <meta name="description" content="" />
    <title>QR Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- QR Code JS Library -->
    <script src="https://cdn.jsdelivr.net/npm/qrcode@1.4.4/build/qrcode.min.js"></script>
</head>
<body class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <canvas id="qrcode"></canvas>
                <h3 id="urunAdi"></h3>
                <button class="btn btn-primary mt-3" id="downloadBtn">İndir</button>
                <a href="index.php" class="btn btn-secondary mt-3">Geri Dön</a>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
