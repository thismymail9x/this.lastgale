$(document).ready(function () {
    let average = $(".average").text();
    if (average < 1) {
        $(".star-1, .star-2, .star-3, .star-4, .star-5").css("color", "gray");
    } else if (average < 2) {
        $(".star-2, .star-3, .star-4, .star-5").css("color", "gray");
    } else if (average < 3) {
        $(".star-3, .star-4, .star-5").css("color", "gray");
    } else if (average < 4) {
        $(".star-4, .star-5").css("color", "gray");
    } else if (average < 5) {
        $(".star-5").css("color", "gray");
    }
    let linkMap = $(".map").text();
    $(".google-map").html(linkMap);
});
