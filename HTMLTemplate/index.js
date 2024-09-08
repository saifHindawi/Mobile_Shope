$(document).ready(function () {
  // banner owl carousel
  $("#banner-area .owl-carousel").owlCarousel({
    dots: true,
    items: 1,
  });

  //Top Sale
  $("#top-sale .owl-carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });

  //isotop filter
  var $grid = $(".grid").isotope({
    itemSelector: ".grid-items",
    layoutMode: "fitRows",
  });

  $(".button-group").on("click", "button", function () {
    var filterValue = $(this).attr("data-filter");
    $grid.isotope({ filter: filterValue });
  });

  //New phones
  $("#new-phones .owl-carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });

  //Blogs owa
  $("#blogs .owl-carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
    },
  });

  //   let $input = $(".qty .qty-input");

  let $qty_up = $(".qty .qty-up");
  let $qty_down = $(".qty .qty-down");

  // تعيين قيمة ابتدائية داخل input
  $(".qty-input").val(1);

  // عند الضغط على زر الزيادة
  $qty_up.click(function (e) {
    // اختيار الـ input المقابل بناءً على data-id
    let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
    let currentVal = parseInt($input.val());
    if (currentVal >= 1 && currentVal < 10) {
      $input.val(currentVal + 1);
    }
  });

  // عند الضغط على زر النقصان
  $qty_down.click(function (e) {
    // اختيار الـ input المقابل بناءً على data-id
    let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
    let currentVal = parseInt($input.val());
    if (currentVal > 1) {
      $input.val(currentVal - 1);
    }
  });
});
