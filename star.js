$(document).ready(function() {
    $("#st1").hover(function() {
        $(".fa-star").css("color", "black");
        $("#st1").css("color", "orange");

    });
    $("#st2").hover(function() {
        $(".fa-star").css("color", "black");
        $("#st1, #st2").css("color", "orange");

    });
    $("#st3").hover(function() {
        $(".fa-star").css("color", "black")
        $("#st1, #st2, #st3").css("color", "orange");

    });
    $("#st4").hover(function() {
        $(".fa-star").css("color", "black");
        $("#st1, #st2, #st3, #st4").css("color", "orange");

    });
    $("#st5").hover(function() {
        $(".fa-star").css("color", "black");
        $("#st1, #st2, #st3, #st4, #st5").css("color", "orange");

    });
  });