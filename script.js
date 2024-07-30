document.addEventListener("DOMContentLoaded", function () {
    var params = new URLSearchParams(window.location.search);
    var urunLinki = params.get('urunLinki');
    var urunAdi = params.get('urunAdi');

    if (urunLinki && urunAdi) {
        document.getElementById('urunAdi').textContent = urunAdi;

        QRCode.toCanvas(document.getElementById('qrcode'), urunLinki, function (error) {
            if (error) {
                console.error(error);
            } else {
                console.log('QR Kodu başarıyla oluşturuldu!');
            }
        });
    }

    document.getElementById('downloadBtn').addEventListener('click', function () {
        var canvas = document.createElement('canvas');
        var context = canvas.getContext('2d');
        var qrCanvas = document.getElementById('qrcode');

        var lineHeight = 25; // Satır yüksekliği
        var padding = 10; // Padding
        var qrWidth = qrCanvas.width;
        var qrHeight = qrCanvas.height;

        context.font = "20px Arial";
        var textWidth = context.measureText(urunAdi).width;
        var canvasWidth = Math.max(qrWidth, textWidth + 20); // Canvas genişliği QR kodu veya metnin genişliği ile belirlenir

        // Ürün adını satırlara böl
        var lines = [];
        var words = urunAdi.split(' ');
        var line = '';

        for (var n = 0; n < words.length; n++) {
            var testLine = line + words[n] + ' ';
            var testWidth = context.measureText(testLine).width;

            if (testWidth > canvasWidth && n > 0) {
                lines.push(line);
                line = words[n] + ' ';
            } else {
                line = testLine;
            }
        }
        lines.push(line);

        // Canvas boyutunu ayarla
        var totalHeight = qrHeight + (lines.length * lineHeight) + padding;
        canvas.width = canvasWidth;
        canvas.height = totalHeight;

        // QR kodunu çiz
        context.drawImage(qrCanvas, (canvas.width - qrWidth) / 2, 0); // Ortala

        // Ürün adını çiz
        context.font = "20px Arial";
        context.textAlign = "center";
        context.fillStyle = "black";

        for (var i = 0; i < lines.length; i++) {
            context.fillText(lines[i], canvas.width / 2, qrHeight + (i + 1) * lineHeight);
        }

        // İndir
        var link = document.createElement('a');
        link.href = canvas.toDataURL();
        link.download = urunAdi + '.png';
        link.click();
    });
});