$(function() {
    $("#vox-populi").on("click", (e) => {
        let yBlockOffset = $("#vox-populi-header").offset().top;
        let navbarHeight = $(".navbar").height();
        let margins = parseInt($("#vox-populi-header").css('margin-top'));
        let totalScroll = yBlockOffset - navbarHeight - margins - 40;
    
        $('html, body').animate({
            scrollTop: totalScroll
        }, 500);
    
        e.preventDefault();
      });

      $("#head-to-head").on("click", (e) => {
        let yBlockOffset = $("#head-to-head-header").offset().top;
        let navbarHeight = $(".navbar").height();
        let margins = parseInt($("#head-to-head-header").css('margin-top'));
        let totalScroll = yBlockOffset - navbarHeight - margins - 40;
    
        $('html, body').animate({
            scrollTop: totalScroll
        }, 500);
    
        e.preventDefault();
      });

      $("#ft-yes-or-no").on("click", (e) => {
        let yBlockOffset = $("#ft-yes-or-no-header").offset().top;
        let navbarHeight = $(".navbar").height();
        let margins = parseInt($("#ft-yes-or-no-header").css('margin-top'));
        let totalScroll = yBlockOffset - navbarHeight - margins - 40;
    
        $('html, body').animate({
            scrollTop: totalScroll
        }, 500);
    
        e.preventDefault();
      });

      $("#ft-rate").on("click", (e) => {
        let yBlockOffset = $("#ft-rate-header").offset().top;
        let navbarHeight = $(".navbar").height();
        let margins = parseInt($("#ft-rate-header").css('margin-top'));
        let totalScroll = yBlockOffset - navbarHeight - margins - 40;
    
        $('html, body').animate({
            scrollTop: totalScroll
        }, 500);
    
        e.preventDefault();
      });

      $("#features").on("click", (e) => {
        let yBlockOffset = $("#features-header").offset().top;
        let navbarHeight = $(".navbar").height();
        let margins = parseInt($("#features-header").css('margin-top'));
        let totalScroll = yBlockOffset - navbarHeight - margins - 40;
    
        $('html, body').animate({
            scrollTop: totalScroll
        }, 500);
    
        e.preventDefault();
      });
});