document.addEventListener("DOMContentLoaded", function () {
  var splide = new Splide(".product-rating-card-splide", {
    perPage: 4,
    perMove: 1,
    omitEnd: true,
    type: "loop",
    pagination: true,
    arrows: false,
    gap: 37,
    classes: {
      pagination: "flex items-center justify-center gap-6 mt-8",
      page: "bg-gray w-3.5 h-3.5 rounded-full [&.is-active]:bg-black",
    },
  });

  var prevButton = document.getElementById("best-seller-arrow-prev");
  var nextButton = document.getElementById("best-seller-arrow-next");

  // Move to previous or next slide on button click
  prevButton.addEventListener("click", function () {
    splide.go("<");
  });
  nextButton.addEventListener("click", function () {
    splide.go(">");
  });

  // Enable/disable buttons based on the current slide
  splide.on("move", function (newIndex) {
    prevButton.disabled = newIndex === 0;
    nextButton.disabled = newIndex === splide.length - 1;
  });

  // Initialize button states when slider is mounted
  splide.on("mounted", function () {
    prevButton.disabled = true; // initial slide is first one
  });

  splide.mount();
});
