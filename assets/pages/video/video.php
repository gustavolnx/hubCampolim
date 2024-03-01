<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUB Campolim</title>
    <link rel="stylesheet" href="../../css/video.css">
    <link rel="preload" href="../../../assets/video/video.mp4" as="video">
</head>

<body>
    <div class="scene-1" onclick="location.href='../home/home.php'">

    </div>
    <!-- autoplay video -->
    <video autoplay>
        <source src="../../../assets/video/video.mp4" type="video/mp4">
    </video>
    <div class="btn-play"></div>


    <div class="btn-close" onclick="location.href='../home/home.php'"></div>]
    <script>
        //  .btn-play onclick play video and hide button
        document.querySelector('.btn-play').addEventListener('click', function() {
            document.querySelector('video').play();
            document.querySelector('.btn-play').style.display = 'none';
        });

        // video onclick pause video and show button
        document.querySelector('video').addEventListener('click', function() {
            if (document.querySelector('video').paused) {
                document.querySelector('video').play();
                document.querySelector('.btn-play').style.display = 'none';
            } else {
                document.querySelector('video').pause();
                document.querySelector('.btn-play').style.display = 'block';
            }
        });
    </script>
    <script src="../../../goHome.js"></script>

</body>

</html>