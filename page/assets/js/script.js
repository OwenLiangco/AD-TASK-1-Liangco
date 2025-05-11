document.addEventListener("DOMContentLoaded", () => {
    const gameData = JSON.parse(document.getElementById("gameData").textContent);

    const cards = document.querySelectorAll(".game-card");
    const modal = document.getElementById("gameModal");

    const modalImage = document.getElementById("modalImage");
    const modalTitle = document.getElementById("modalTitle");
    const modalConsole = document.getElementById("modalConsole");
    const modalRelease = document.getElementById("modalRelease");
    const modalReview = document.getElementById("modalReview");

    cards.forEach((card, index) => {
        card.addEventListener("click", () => {
            const game = gameData[index];

            modalImage.src = game.image;
            modalTitle.textContent = game.title;
            modalConsole.textContent = `Console: ${game.console}`;
            modalRelease.textContent = `Released: ${game.year}`;

            modal.classList.remove("hidden");
        });
    });

    window.closemodal = function() {
        modal.classList.add("hidden");
    };

    modal.addEventListener("click", (e) => {
        if (e.target === modal) {
            closemodal();
        }
    });
});