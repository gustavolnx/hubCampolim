<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUB Campolim</title>
    <link rel="stylesheet" href="../../css/home.css">
</head>

<body>
    <div class="scene-1"></div>
    <div class="btn-projeto" onclick="location.href='../projeto/projeto.php'"></div>
    <div class="btn-localizacao" onclick="location.href='../localizacao/localizacao.php'"></div>
    <div class="btn-video"></div>
    <div class="btn-galeria" onclick="location.href='../galeria/galeria.php'"></div>
    <div class="btn-plantas" onclick="location.href='../plantas/plantas.php'"></div>
    <div class="btn-home" onclick="location.href='../../../index.php'"></div>
    <script>
        var timer;
        var secondsRemaining = 300;

        function redirectAfterTimeout() {

            window.location.href = '../home/home.php';
        }

        function resetTimer() {

            clearTimeout(timer);
            secondsRemaining = 10;
            startCountdown();
        }

        function startCountdown() {
            console.clear();
            console.log("Tempo até voltar pra home: " + secondsRemaining + " segundos");

            if (secondsRemaining === 0) {
                redirectAfterTimeout();
            } else {
                secondsRemaining--;
                timer = setTimeout(startCountdown, 1000);
            }
        }


        document.addEventListener("DOMContentLoaded", startCountdown);
    </script>
</body>

</html>