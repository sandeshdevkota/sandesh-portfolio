
        // Select all the section elements
    const sections = document.querySelectorAll('section');
    
    // Select all the corresponding icons in the left navigation bar
    const navIcons = document.querySelectorAll('.left-nav i');
    
    // Function to check which section is currently in view
    function updateActiveSection() {
      const scrollPosition = window.scrollY;
    
      sections.forEach((section, index) => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
    
        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
          // Remove the 'active' class from all icons
          navIcons.forEach((icon) => {
            icon.classList.remove('active');
          });
    
          // Add the 'active' class to the corresponding icon
          navIcons[index].classList.add('active');
        }
      });
    }
    
    // Listen for the 'scroll' event and update the active section accordingly
    document.addEventListener('scroll', updateActiveSection);
    
    // Initial update to set the active section when the page loads
    updateActiveSection();
    
