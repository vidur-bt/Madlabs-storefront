document.addEventListener("DOMContentLoaded", function () {
  var splide = new Splide(".splide", {
    direction: "ttb",
    height: "616px",
    arrows: false,
    paginationDirection: "ttb",
    drag: true,
    classes: {
      pagination:
        "liquid-glass !absolute items-center h-fit !left-[38px] lg:!left-auto !right-[107px] !top-1/2 -translate-y-1/2 w-[25px] lg:!w-[38px]",
    },
  });
  splide.mount();
});
