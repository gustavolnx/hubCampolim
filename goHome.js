var timer;
var secondsRemaining = 600;

function redirectAfterTimeout() {
  window.location.href = "../home/home.php";
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
