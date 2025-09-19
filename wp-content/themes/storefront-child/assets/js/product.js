document.addEventListener("DOMContentLoaded", function () {
  var splide = new Splide(".product-rating-card-splide", {
    perPage: 3,
    focus: 0,
    pagination: true,
    arrows: false,
    gap: 37,
    // arrowPath:
    //   "M6.66663 16L25.3333 16M25.3333 16L16 6.66665M25.3333 16L16 25.3333",
    // classes: {
    //   arrows: "absolute -top-24 right-0 flex gap-4",
    //   arrow:
    //     "splide-custom-arrow static bg-black w-14.5 h-14.5 flex items-center justify-center rounded-full cusror-pointer [&_path]:stroke-white [&_path]:stroke-3 stroke-linecap-round",
    // },
  });

  splide.mount();
  document
    .getElementById("best-seller-arrow-prev")
    .addEventListener("click", () => splide.go("<"));
  document
    .getElementById("best-seller-arrow-next")
    .addEventListener("click", () => splide.go(">"));
});
