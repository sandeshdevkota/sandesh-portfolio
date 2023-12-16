document.addEventListener("DOMContentLoaded", function () {
    // Get the home section element
    const homeSection = document.getElementById("home");
  
    // Add a scroll event listener
    window.addEventListener("scroll", function () {
      // Calculate the opacity based on the scroll position
      const scrollOpacity = 1 - window.scrollY / homeSection.offsetHeight;
  
      // Set the opacity of the home section
      homeSection.style.opacity = scrollOpacity;
  
      // Optionally, you can also hide the home section when it's not visible
      if (scrollOpacity <= 0) {
        homeSection.style.display = "block";
      } else {
        homeSection.style.display = "block";
      }
    });
  });

  //    Active Navigation Button
  document.addEventListener("DOMContentLoaded", function () {
    // Get all the navigation buttons
    const navButtons = document.querySelectorAll(".nav-bar-button button");
  
    // Add click event listeners to the navigation buttons
    navButtons.forEach(function (button, index) {
      button.addEventListener("click", function () {
        // Remove the "active" class from all buttons
        navButtons.forEach(function (btn) {
          btn.classList.remove("active");
        });
  
        // Add the "active" class to the clicked button
        button.classList.add("active");
  
        // Scroll to the corresponding section
        const sectionId = button.getAttribute("data-section");
        const section = document.getElementById(sectionId);
        if (section) {
          section.scrollIntoView({
            behavior: "smooth",
          });
        }
      });
    });
  
    // Add a scroll event listener
    window.addEventListener("scroll", function () {
      // Get the current scroll position
      const scrollPosition = window.scrollY;
  
      // Loop through each section and check if it is in the viewport
      document.querySelectorAll("section").forEach(function (section, index) {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
  
        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
          // Add the "active" class to the corresponding navigation button
          navButtons.forEach(function (button) {
            button.classList.remove("active");
          });
          navButtons[index].classList.add("active");
        }
      });
    });
  });