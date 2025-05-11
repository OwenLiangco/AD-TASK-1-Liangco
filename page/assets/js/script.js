document.addEventListener("DOMContentLoaded", () => {
    const gameData = JSON.parse(document.getElementById("gameData").textContent);

    const cards = document.querySelectorAll(".game-card");
    const modal = document.getElementById("gameModal");

    const modalImage = document.getElementById("modalImage");
    const modalTitle = document.getElementById("modalTitle");
    const modalConsole = document.getElementById("modalConsole");
    const modalRelease = document.getElementById("modalRelease");
    const modalReview = document.getElementById("modalReview");

})