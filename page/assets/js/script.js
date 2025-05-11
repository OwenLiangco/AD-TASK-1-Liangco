document.addEventListener("DOMContentLoaded", () => {
  const gameData = JSON.parse(document.getElementById("gameData").textContent);
  const cards = document.querySelectorAll(".game-card");
  const modal = document.getElementById("gameModal");

  const modalImage = document.getElementById("modalImage");
  const modalTitle = document.getElementById("modalTitle");
  const modalConsole = document.getElementById("modalConsole");
  const modalRelease = document.getElementById("modalRelease");
  const modalReview = document.getElementById("modalReview");

  // Open modal on card click
  cards.forEach((card, index) => {
    card.addEventListener("click", () => {
      const game = gameData[index];

      modalImage.src = game.image;
      modalTitle.textContent = game.title;
      modalConsole.textContent = `Console: ${game.console}`;
      modalRelease.textContent = `Released: ${game.year}`;
      modalReview.textContent = game.review;

      modal.classList.remove("hidden");
    });
  });

  // Close modal function (global so your inline call works)
  window.closemodal = function () {
    modal.classList.add("hidden");
  };

  // Optional: Close modal when clicking outside the content
  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      closemodal();
    }
  });
});