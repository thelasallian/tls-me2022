$('#right-btn').click(function() {
    event.preventDefault();
    $('#vp-content').animate({
      scrollLeft: "+=300px"
    }, "slow");
 });
 
   $('#left-btn').click(function() {
    event.preventDefault();
    $('#vp-content').animate({
      scrollLeft: "-=300px"
    }, "slow");
 });