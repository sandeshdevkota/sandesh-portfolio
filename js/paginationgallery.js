
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      initialSlide: 2,  // Start from the third image (index 2)
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      mousewheel: {
        invert: false, // Set to true if you want to invert the scrolling direction
        forceToAxis: true,
      },
      freeMode: true, // Enable free mode
      freeModeMomentum: true, // Enable free mode momentum
      freeModeMomentumBounce: true, // Enable free mode momentum bounce
      autoplay: {
      delay: 4000, // Set the delay in milliseconds (3 seconds in this example)
      disableOnInteraction: false, // Allow autoplay to continue after user interactions
    },
    });
