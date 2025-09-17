document.addEventListener("DOMContentLoaded", function () {
  var splide = new Splide(".splide", {
    direction: "ttb",
    height: "616px",
    arrows: false,
    paginationDirection: "ttb",
    drag: true,
    classes: {
      pagination:
        "liquid-glass !absolute items-center h-fit !right-[107px] !top-1/2 -translate-y-1/2 !w-[38px]",
    },
  });
  splide.mount();
});
