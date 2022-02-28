
$(".show-sidebar-btn").click(function () {
    $(".sidebar").animate({marginLeft:0});
});

$(".hide-sidebar-btn").click(function () {
    $(".sidebar").animate({marginLeft:"-100%"});
});


$('.radio-btn').click(function (){
    $('.radio-inner').toggleClass('active');
    $('body').toggleClass("dark-theme-variables");
})
function LinkTo($l)
{

    window.location = '$l'

}
function home()
{

    window.location = 'index.html'

}



