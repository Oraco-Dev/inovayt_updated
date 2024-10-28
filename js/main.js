// splide slider

document.addEventListener("DOMContentLoaded", function () {
  let splides = document.querySelectorAll(".splide");

  if (splides.length) {
    for (let i = 0; i < splides.length; i++) {
      let splideElement = splides[i];

      // Default options
      let splideDefaultOptions = {
        arrows: false,
        breakpoints: {
          1024: { perPage: 2 },
          768: { perPage: 1 },
        },
      };

      // Initialize Splide
      let splide = new Splide(splideElement, splideDefaultOptions);
      splide.mount();

      // Get previous and next buttons for each Splide instance
      let nextButton;

      if (i === 0) {
        nextButton = document.getElementById("nextButton");
      } else if (i === 1) {
        nextButton = document.getElementById("nextButtonDuplicate");
      }

      // Bind click events to buttons
      if (nextButton) {
        nextButton.addEventListener("click", function () {
          splide.go("+1");
        });
      }
    }
  }
});

// accordion - style one

document.addEventListener("DOMContentLoaded", function () {
  // Get all accordion items
  let accordionItems = document.querySelectorAll(".accordion__styleone");

  // Loop through all accordion items
  accordionItems.forEach(function (item) {
    let head = item.querySelector(".accordion__styleone-head");
    let content = item.querySelector(".accordion__styleone-content");
    // let headImg = head.querySelector(".accordion__styleone-head-img");

    // Add click event listener to the accordion item head
    head.addEventListener("click", function () {
      // Toggle the 'open' class for the content, head, and head image
      content.classList.toggle("open");
      head.classList.toggle("open");
      // headImg.classList.toggle("open");

      // Close other open accordion items
      accordionItems.forEach(function (otherItem) {
        if (otherItem !== item) {
          otherItem
            .querySelector(".accordion__styleone-content")
            .classList.remove("open");
          otherItem
            .querySelector(".accordion__styleone-head")
            .classList.remove("open");
          // otherItem
          //   .querySelector(".accordion__styleone-head-img")
          //   .classList.remove("open");
        }
      });
    });
  });
});

// accordion - style two

document.addEventListener("DOMContentLoaded", function () {
  // Get all accordion items
  let accordionItems = document.querySelectorAll(".accordion__styletwo");

  // Loop through all accordion items
  accordionItems.forEach(function (item) {
    let head = item.querySelector(".accordion__styletwo-head");
    let content = item.querySelector(".accordion__styletwo-content");
    // let headImg = head.querySelector(".accordion__styletwo-head-img");

    // Add click event listener to the accordion item head
    head.addEventListener("click", function () {
      // Toggle the 'open' class for the content, head, and head image
      content.classList.toggle("open");
      head.classList.toggle("open");
      // headImg.classList.toggle("open");

      // Close other open accordion items
      accordionItems.forEach(function (otherItem) {
        if (otherItem !== item) {
          otherItem
            .querySelector(".accordion__styletwo-content")
            .classList.remove("open");
          otherItem
            .querySelector(".accordion__styletwo-head")
            .classList.remove("open");
          // otherItem
          //   .querySelector(".accordion__styletwo-head-img")
          //   .classList.remove("open");
        }
      });
    });
  });
});

// <a> tag smooth scroll

document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll('a[href^="#"]');

  links.forEach((link) => {
    link.addEventListener("click", smoothScroll);
  });

  function smoothScroll(e) {
    e.preventDefault();
    const targetId = this.getAttribute("href");
    const targetElement = document.querySelector(targetId);

    if (targetElement) {
      // Adjust this offset value based on your design needs (e.g., header height)
      const offset = 180; // Adjust this value to fit your needs
      const targetPosition =
        targetElement.getBoundingClientRect().top + window.pageYOffset - offset;

      window.scrollTo({
        top: targetPosition,
        behavior: "smooth",
      });
    }
  }
});

// calculator buttons

document.addEventListener("DOMContentLoaded", function () {
  // Select all the <a> tags inside the buttons divs
  const buttons = document.querySelectorAll(".calculators-banner__tiles a");

  buttons.forEach((button) => {
    button.addEventListener("click", function (e) {
      e.preventDefault();

      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });

      // Get the href value of the clicked <a> tag
      const targetId = this.getAttribute("href").substring(1); // Remove '#' from href

      const allAccordionHeads = document.querySelectorAll(
        ".accordion__styleone-head"
      );
      const allAccordionContents = document.querySelectorAll(
        ".accordion__styleone-content"
      );

      allAccordionHeads.forEach((head) => {
        head.classList.remove("open");
      });

      allAccordionContents.forEach((content) => {
        content.classList.remove("open");
      });

      // Find the corresponding accordion sections
      const accordionHead = document.querySelector(
        `#${targetId} .accordion__styleone-head`
      );
      const accordionContent = document.querySelector(
        `#${targetId} .accordion__styleone-content`
      );

      // Toggle the 'open' class on the accordion sections
      if (accordionHead && accordionContent) {
        accordionHead.classList.toggle("open");
        accordionContent.classList.toggle("open");
      }

      // Delay scroll calculation to allow DOM updates
      setTimeout(() => {
        // Calculate the target position
        const targetElement = document.getElementById(targetId);
        let targetPosition = 0;
        if (targetElement) {
          const elementRect = targetElement.getBoundingClientRect();
          const offsetTop =
            window.pageYOffset || document.documentElement.scrollTop;
          targetPosition = elementRect.top + offsetTop - 150; // Adjusted for header height or other offsets
        }

        // Scroll to the target position
        window.scrollTo({
          top: targetPosition,
          behavior: "smooth",
        });
      }, 300); // Adjust timeout duration if necessary
    });
  });

  let lastScrollTop = 0;

  // Function to close all accordion items
  function closeAllAccordions() {
    const allAccordionHeads = document.querySelectorAll(
      ".accordion__styleone-head"
    );
    const allAccordionContents = document.querySelectorAll(
      ".accordion__styleone-content"
    );

    allAccordionHeads.forEach((head) => {
      head.classList.remove("open");
    });

    allAccordionContents.forEach((content) => {
      content.classList.remove("open");
    });
  }

  // Calculate the scroll threshold based on the top 20% of the page
  function calculateScrollThreshold() {
    const pageHeight =
      document.documentElement.scrollHeight - window.innerHeight;
    return Math.ceil(0.175 * pageHeight); // 20% of the page height
  }

  // Initial check to close all accordions when page is in the top 20%
  if (window.pageYOffset <= calculateScrollThreshold()) {
    closeAllAccordions();
  }
});

// header - search overlay

document.addEventListener("DOMContentLoaded", function () {
  var searchOverlay = document.getElementById("search-overlay");
  var searchButton = document.querySelector(
    ".header__inner-right-buttons.search"
  );
  var closeButton = document.getElementById("close-search-overlay");

  // Show the search overlay
  searchButton.addEventListener("click", function () {
    searchOverlay.classList.add("visible");
  });

  // Hide the search overlay
  closeButton.addEventListener("click", function () {
    searchOverlay.classList.remove("visible");
  });
});

// talk to expert - popup

document.addEventListener("DOMContentLoaded", function () {

  // hamburger menu
  let popupMenuOverlay = document.getElementById("popup-menu-overlay");
  let popupMenu = document.getElementById("popup-menu");

  // open modal
  let talkToExpert = document.getElementById("talk-expert");
  let talkToExpertBtn = document.querySelectorAll(".talk-to-an-expert-btn");

  // close modal
  let talkToExpertClose = document.querySelector('#talk-expert-close');
  let talkToExpertOverlay = document.querySelector('.talk-expert__overlay');

  // select buttons
  let talkToExpertSelectBtns = document.querySelector(".talk-expert__select");

  // open modal function
  talkToExpertBtn.forEach((button) => {
    button.addEventListener("click", function () {
      
      // if (popupMenu && popupMenuOverlay) {
      //   popupMenuOverlay.classList.remove("visible");
      //   popupMenu.classList.remove("visible");
      // }

      talkToExpert.classList.add('visible');
    });
  });

  // close modal functions
  // talkToExpertOverlay.addEventListener('click', function() {
  //   talkToExpert.classList.remove('visible');
  //   talkToExpertSelectBtns.classList.remove('hidden');
  //   talkToExpertFinance.classList.remove('visible');
  //   talkToExpertWealth.classList.remove('visible');
  //   talkToExpertCommercial.classList.remove('visible');
  //   talkToExpertVehicle.classList.remove('visible');
  // })

  talkToExpertClose.addEventListener('click', function() {
    talkToExpert.classList.remove('visible');
    talkToExpertSelectBtns.classList.remove('hidden');
    talkToExpertFinance.classList.remove('visible');
    talkToExpertWealth.classList.remove('visible');
    talkToExpertCommercial.classList.remove('visible');
    talkToExpertVehicle.classList.remove('visible');
  })



  // finance
  let talkToExpertFinanceBtn = document.getElementById("talk-expert-finance");
  let talkToExpertFinance = document.querySelector(".talk-expert__finance");

  // show finance section
  talkToExpertFinanceBtn.addEventListener('click', function() {
    talkToExpertSelectBtns.classList.add('hidden');
    talkToExpertFinance.classList.add('visible');
  })

  // wealth
  let talkToExpertWealthBtn = document.getElementById("talk-expert-wealth");
  let talkToExpertWealth = document.querySelector(".talk-expert__wealth");
  
  // show wealth section
  talkToExpertWealthBtn.addEventListener('click', function() {
      talkToExpertSelectBtns.classList.add('hidden');
      talkToExpertWealth.classList.add('visible');
  })

  // commercial
  let talkToExpertCommercialBtn = document.getElementById("talk-expert-commercial");
  let talkToExpertCommercial = document.querySelector(".talk-expert__commercial");
  
  // show commercial section
  talkToExpertCommercialBtn.addEventListener('click', function() {
      talkToExpertSelectBtns.classList.add('hidden');
      talkToExpertCommercial.classList.add('visible');
  })
  
  // commercial
  let talkToExpertVehicleBtn = document.getElementById("talk-expert-vehicle");
  let talkToExpertVehicle = document.querySelector(".talk-expert__vehicle");
    
  // show commercial section
  talkToExpertVehicleBtn.addEventListener('click', function() {
        talkToExpertSelectBtns.classList.add('hidden');
        talkToExpertVehicle.classList.add('visible');
  })
});

// hamburger menu

document.addEventListener("DOMContentLoaded", function () {
  let openButton = document.getElementById("open-popup-menu");
  let closeButton = document.getElementById("close-popup-menu");
  let popupMenuOverlay = document.getElementById("popup-menu-overlay");
  let popupMenu = document.getElementById("popup-menu");

  openButton.addEventListener("click", function () {
    popupMenuOverlay.classList.add("visible");
    popupMenu.classList.add("visible");
  });

  closeButton.addEventListener("click", function () {
    popupMenuOverlay.classList.remove("visible");
    popupMenu.classList.remove("visible");
  });
  

  // Function to handle the toggle logic for nested accordion
  function toggleNestedAccordion(header) {
    const content = header.nextElementSibling;
    const isOpen = content.classList.contains("visible"); // Check if the content is currently open
    header.classList.add("visible");

    // Close all nested accordion content
    document.querySelectorAll(".nested-accordion-content").forEach((c) => {
      if (c !== content) {
        c.classList.remove("visible");
        c.style.maxHeight = null; // Ensure the height is reset
      }
    });

    document.querySelectorAll(".nested-accordion-header").forEach((c) => {
      if (c !== content) {
        c.classList.remove("visible");
      }
    });

    // Toggle the current nested accordion content
    if (!isOpen) {
      header.classList.add("visible");
      content.classList.add("visible");
      content.style.maxHeight = 1500 + "px"; // Set maxHeight to fit content
    } else {
      header.classList.remove("visible");
      content.classList.remove("visible");
      content.style.maxHeight = null; // Reset maxHeight
    }
  }

  // Function to handle the toggle logic for parent accordion
  function toggleParentAccordion(button) {
    const menuLink = button.closest(".popup-menu-link");
    const container = button.closest(".popup-menu-link-container");
    const content = container.querySelector(".popup-link-accordion-content");
    const isOpen = content.classList.contains("visible");

    // Close all other parent accordion contents
    document.querySelectorAll(".popup-link-accordion-content").forEach((c) => {
      if (c !== content) {
        c.classList.remove("visible");
        c.style.maxHeight = null;
      }
    });

    // Close all other parent accordion links
    document.querySelectorAll(".popup-menu-link").forEach((link) => {
      if (link !== menuLink) {
        link.classList.remove("visible");
      }
    });

    // Toggle the selected parent accordion
    if (!isOpen) {
      content.classList.add("visible");
      menuLink.classList.add("visible");
      requestAnimationFrame(() => {
        // Ensure height calculation occurs after visibility changes
        content.style.maxHeight = content.scrollHeight + 30 + "px";
      });
    } else {
      content.classList.remove("visible");
      menuLink.classList.remove("visible");
      content.style.maxHeight = null;
    }
  }

  // Setup click events for nested accordions
  function setupNestedAccordionHeaders() {
    const nestedAccordionHeaders = document.querySelectorAll(
      ".nested-accordion-header"
    );

    nestedAccordionHeaders.forEach((header) => {
      header.removeEventListener("click", handleNestedAccordionClick); // Remove any existing handlers
      header.addEventListener("click", handleNestedAccordionClick);
    });
  }

  function handleNestedAccordionClick() {
    toggleNestedAccordion(this);

    // Expand parent accordion to fit nested content
    const parentAccordion = this.closest(".popup-link-accordion-content");
    if (parentAccordion) {
      // Ensure the parent accordion is visible
      parentAccordion.classList.add("visible");
      requestAnimationFrame(() => {
        // Ensure height calculation occurs after visibility changes
        parentAccordion.style.maxHeight = 1500 + "px";
      });
    }
  }

  // Setup click events for parent accordions
  function setupAccordionButtons() {
    const accordionButtons = document.querySelectorAll(
      ".popup-link-accordion-button"
    );

    accordionButtons.forEach((button) => {
      button.removeEventListener("click", handleParentAccordionClick); // Remove any existing handlers
      button.addEventListener("click", handleParentAccordionClick);
    });
  }

  function handleParentAccordionClick() {
    // Toggle the parent accordion
    toggleParentAccordion(this);

    // Setup nested accordion headers after toggling parent accordion
    setTimeout(setupNestedAccordionHeaders, 100); // Delay to ensure parent accordion is updated
  }

  // Initial setup of all accordion buttons
  setupAccordionButtons();
});