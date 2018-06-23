$(document).ready(function () {

    $("#myCarousel").carousel(2);
    
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
    var id = $('body input[name=id]').val();
    if(id != 0) {
        $("#id_instructor option[value="+ $("#id_instructor").attr('data-id') +"]").attr("selected",true);
    }
});
