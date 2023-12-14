// Add JavaScript to toggle visibility class after a delay -->

    // Add JavaScript to toggle visibility class after a delay
    document.addEventListener('DOMContentLoaded', function () {
      var startAfterDelayElement = document.getElementById('startAfterDelay');
      setTimeout(function () {
        startAfterDelayElement.classList.remove('hide-animation');
      }, 3200); // 3.2s delay before displaying
    });
