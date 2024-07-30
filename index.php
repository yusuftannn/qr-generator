<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Primary Meta Tags -->
    <meta name="title" content="" />
    <meta name="author" content="Yusuf Tan" />
    <meta name="description" content="" />
    <title>QR Generator</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form id="qrForm" action="qrpage.php" method="GET">
                    <div class="mb-3">
                        <label for="urunLinki" class="form-label">Ürün Linki</label>
                        <input type="text" class="form-control" name="urunLinki" id="urunLinki" placeholder="Ürün linkini giriniz" required>
                    </div>
                    <div class="mb-3">
                        <label for="urunAdi" class="form-label">Ürün Adı</label>
                        <input type="text" class="form-control" name="urunAdi" id="urunAdi" placeholder="Ürün adını giriniz" required>
                    </div>
                    <button type="submit" class="btn btn-primary">QR Oluştur</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
