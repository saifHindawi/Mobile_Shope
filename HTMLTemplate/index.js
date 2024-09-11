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
  let $deal_price = $("#deal-price");

  $(".qty-input").val(1);

  $qty_up.click(function (e) {

    let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
    let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

    //change product price ajax call
    $.ajax({url:"Template/ajax.php", type:"post", data:{itemid:$(this).data("id")},success: function(result){
      let obj = JSON.parse(result);
      let item_price = obj[0]['item_price'];

      let currentVal = parseInt($input.val());
      if (currentVal >= 1 && currentVal < 10) {
        $input.val(currentVal + 1);

        // increase price of the product
        $price.text(parseInt(item_price * $input.val()).toFixed(2));

         // set subtotal price
         let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
         $deal_price.text(subtotal.toFixed(2));
      }
      }});//closing ajax

    
  });

  $qty_down.click(function (e) {

    let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
    let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

    //change product price ajax call
    $.ajax({
        url: "Template/ajax.php",
        type: "post",
        data: { itemid: $(this).data("id") },
        success: function (result) {
            let obj = JSON.parse(result);
            let item_price = obj[0]['item_price'];

            let currentVal = parseInt($input.val());
            if (currentVal > 1) {
                $input.val(currentVal - 1);
            }

            // increase price of the product
            $price.text(parseInt(item_price * $input.val()).toFixed(2));

             // set subtotal price
             let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
             $deal_price.text(subtotal.toFixed(2));
        }
    }); //closing ajax

}); //closing $qty_down.click

    
  });

 
