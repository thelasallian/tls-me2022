// Import candidates JSON data into variable
var candidates = {};
$.ajax({
    url: "./json/fast-talk-YN.json",
    async: false,
    dataType: 'json',
    success: function (data) {
        candidates = data.candidates;
    }
});