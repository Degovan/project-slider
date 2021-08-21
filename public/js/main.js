// core owl carouse
  $(".owl-carousel").owlCarousel({
  	items:1,
  });

// counter slide 
$(".owl-carousel").on("initialized.owl.carousel changed.owl.carousel", function(e) {
    if (!e.namespace) {
      return;
    }
    $("#counter").text(
      e.relatedTarget.relative(e.item.index) + 1 + "/" + e.item.count
    );
  });


// custom button next event
$('.customNextBtn').click(function() {
       $(".owl-carousel").trigger('next.owl.carousel');
})
$('.customPrevBtn').click(function() {
       $(".owl-carousel").trigger('prev.owl.carousel');
})