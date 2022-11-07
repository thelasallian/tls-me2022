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
    $("li").addClass("animate__animated animate__flip");
    setTimeout(function(){
        $('li').removeClass('animate__animated animate__flip');
    },1000);
    $("#current-selection").text(selected_option);

    // Iterate through yes/no data for each candidate based on surname
    $.each(yes_no_data, function( key, value ){
        // Replace any spaces with dashes, if any
        var surname_id = value["surname"];
        surname_id = surname_id.replaceAll(' ', '-');

        // Reset red/green colors
        $("#" + surname_id).removeClass("text-success text-danger");
        
        // Re-add red/green color based on Yes or No answer
        if (value[selected_option] == "Y") {
            $("#" + surname_id).addClass("text-success");
        } else {
            $("#" + surname_id).addClass("text-danger");
        }
    })
});