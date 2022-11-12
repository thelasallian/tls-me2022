// Get JSON data and it as an associative array into a variable
var yes_no_data = {};
$.ajax({
    url: "./json/fast-talk-YN.json",
    async: false,
    dataType: 'json',
    success: function (data) {
        yes_no_data = data;
    }
});

// When #issues-dropdown changes, trigger changes
$("#issues-dropdown").on('change', function() {
    // Get currently selection option in dropdown
    var selected_option = $("#issues-dropdown").val();
    
    // Trigger animation
    $(".ft-cand-flip").addClass("scale-in-center");
    setTimeout(function(){
        $('.ft-cand-flip').removeClass('scale-in-center');
    },1000);

    // Iterate through yes/no data for each candidate based on surname
    $.each(yes_no_data, function( key, value ){
        // Replace any spaces with dashes, if any
        var surname_id = value["surname"];
        surname_id = surname_id.replaceAll(' ', '-');

        // Reset red/green colors
        $("#" + surname_id).removeClass("ft-cand-yes ft-cand-no");
        
        // Re-add red/green color based on Yes or No answer
        if (value[selected_option] == "Yes") {
            $("#" + surname_id).addClass("ft-cand-yes");
        } else if (value[selected_option] == "No") {
            $("#" + surname_id).addClass("ft-cand-no");
        }
    })
});