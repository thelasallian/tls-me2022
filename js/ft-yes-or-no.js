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
    $(".ft-cand-portrait").addClass("animate__animated animate__flip");
    setTimeout(function(){
        $('.ft-cand-portrait').removeClass('animate__animated animate__flip');
    },1000);
    $("#current-selection").text(selected_option);

    // Iterate through yes/no data for each candidate based on surname
    $.each(yes_no_data, function( key, value ){
        // Replace any spaces with dashes, if any
        var surname_id = value["surname"];
        surname_id = surname_id.replaceAll(' ', '-');

        // Reset red/green colors
        $("#" + surname_id).removeClass("bg-success bg-danger");
        
        // Re-add red/green color based on Yes or No answer
        if (value[selected_option] == "Yes") {
            $("#" + surname_id).addClass("bg-success");
        } else if (value[selected_option] == "No") {
            $("#" + surname_id).addClass("bg-danger");
        }
    })
});