$('#nav_lithotherapy').mouseenter(function(){
    $('#our-crystals').removeClass('hidden');
})

$('#nav_lithotherapy').mouseleave(function(){
    $('#our-crystals').addClass('hidden');
});

$(document).ready(function(){
    $('#carousel').slick({
        autoplay: true,
        arrows: false,
    });
});
