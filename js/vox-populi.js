$('#right-btn').click(function() {
    event.preventDefault();
    $('#vp-content').animate({
      scrollLeft: "+=600px"
    }, "slow");
 });
 
   $('#left-btn').click(function() {
    event.preventDefault();
    $('#vp-content').animate({
      scrollLeft: "-=600px"
    }, "slow");
 });