/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */

particlesJS.load('particles-js', 'js/assets/particles.json', function() {
    console.log('callback - particles.js config loaded');
  });


// плавная прокрутка к якорю
$(function(){
    $("a[href^='#']").click(function(){
            var _href = $(this).attr("href");
            $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
            return false;
    });
  });

// // Инициализация паралакса от материалайза
// $(document).ready(function(){
//     $('.parallax').parallax();
//   });

$(document).ready(function() {
    $.each($('a'), function(){
        if (this.href == window.location.href){
            $(this).addClass('active');
        }
    });

});
// Автоматический margin для footer'a для эффекта скольжения
// Небольшая задержка для корректного срабатывания ибо бывает redy documet запускает чуть раньше и высота не корректная
$(document).ready(function() {
    setTimeout(autoHeight, 300); // 0.7 sec
});
//сама функция
function autoHeight() {
  var footer_height = $('.page-footer').height();
  $('#main').css('margin-bottom',footer_height+'px')
}
