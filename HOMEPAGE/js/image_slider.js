      const initSlider = (imageListId, scrollbarId, prevButtonId, nextButtonId) => {
        const imageList = document.getElementById(imageListId);
        const slideButtons = [document.getElementById(prevButtonId), document.getElementById(nextButtonId)];
        const sliderScrollbar = document.getElementById(scrollbarId);
        const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
        const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

        // ... (unchanged scrollbar drag logic) ...

        // Slide images according to the slide button clicks
        slideButtons.forEach(button => {
          button.addEventListener("click", () => {
            const direction = button.id.includes("prev") ? -1 : 1;
            const scrollAmount = imageList.clientWidth * direction;
            imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
          });
        });

         // Show or hide slide buttons based on scroll position
       const handleSlideButtons = () => {
        slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
        slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
    }


        // Update scrollbar thumb position based on image scroll
        const updateScrollThumbPosition = () => {
          const scrollPosition = imageList.scrollLeft;
          const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
          scrollbarThumb.style.left = `${thumbPosition}px`;
        };

        // Call these two functions when image list scrolls
        imageList.addEventListener("scroll", () => {
          updateScrollThumbPosition();
          handleSlideButtons();
        });
      };

      // Initialize the sliders separately
      window.addEventListener("resize", () => {
        initSlider("image-list-1", "slider-scrollbar-1", "prev-slide-1", "next-slide-1");
        initSlider("image-list-2", "slider-scrollbar-2", "prev-slide-2", "next-slide-2");
      });

      window.addEventListener("load", () => {
        initSlider("image-list-1", "slider-scrollbar-1", "prev-slide-1", "next-slide-1");
        initSlider("image-list-2", "slider-scrollbar-2", "prev-slide-2", "next-slide-2");
      });
