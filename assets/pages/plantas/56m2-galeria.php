<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUB Campolim</title>
    <link rel="stylesheet" href="../../css/56m2-galeria.css">
</head>

<body>

    <div class="scene-1"></div>
    <div class="scene-2"></div>
    <div class="btn-voltar" onclick="history.back()"></div>
    <div class="btn-right"></div>
    <div class="btn-left"></div>










    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const gallery = document.querySelector(".scene-2");
            let currentImageIndex = 1;

            function updateGallery() {
                const imagePath = `./galeria/${currentImageIndex}.jpg`; // Tenta jpg
                const alternativeImagePath = `./galeria/${currentImageIndex}.png`; // Tenta png


                const img = new Image();
                img.onload = function() {
                    gallery.style.backgroundImage = `url('${imagePath}')`;
                    gallery.style.backgroundSize = "1500px 700px";
                    gallery.style.backgroundRepeat = "no-repeat";
                };
                img.onerror = function() {
                    // Se não encontrar a imagem em formato jpg, tenta png
                    gallery.style.backgroundImage = `url('${alternativeImagePath}')`;
                    gallery.style.backgroundSize = "1500px 700px";
                    gallery.style.backgroundRepeat = "no-repeat";
                };
                img.src = imagePath;
            }

            function nextImage() {
                currentImageIndex = (currentImageIndex % 39) + 1;
                updateGallery();
            }

            function prevImage() {
                currentImageIndex = (currentImageIndex - 2 + 39) % 39 + 1;
                updateGallery();
            }

            const btnLeft = document.querySelector(".btn-left");
            const btnRight = document.querySelector(".btn-right");

            btnLeft.addEventListener("click", prevImage);
            btnRight.addEventListener("click", nextImage);

            updateGallery();
        });
    </script>

    <script src="../../../goHome.js"></script>
</body>

</html>