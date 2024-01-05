
    var glider = new Glider(document.querySelector('.glider'), 
    {
      slidesToShow: 1,
      slidesToScroll: 1,
      draggable: true,
      rewind: false,
      resizeLock: true,
      duration: 2,
      dots: '#resp-dots',
      arrows: {
        prev: '.glider-prev',
        next: '.glider-next'
      },
      responsive: [
        {
          // screens greater than or equal to 450px
          breakpoint: 450,
          settings: {
            slidesToShow: 0.5,
            slidesToScroll: 1,
            itemWidth: 150,
            duration: 2,
            scrollLock: false,
            rewind: false,
            
          }
        },
        {
          // screens greater than or equal to 800px
          breakpoint: 800,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            itemWidth: 0, // Set itemWidth to 0 for full-width slides
            duration: 2,
            scrollLock: false,
            rewind: false,
          }
        },
        {
          // screens greater than or equal to 775px
          breakpoint: 775,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            itemWidth: 150,
            duration: 2,
            scrollLock: false,
            rewind: false,
          }
        },
        {
          // screens greater than or equal to 1024px
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            itemWidth: 150,
            duration: 2,
            scrollLock: false,
            rewind: false,
          }
        }
      ]
    });