/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */

particlesJS.load('particles-js', './js/assets/particles.json', function() {
    console.log('callback - particles.js config loaded');
  });


// плавная прокрутка к якорю
$(document).ready(function() {
    $("body").on('click', '[href*="#"]', function(e){
        var fixed_offset = 100;
        $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
        e.preventDefault();
      });
});


// Добавляем текущим ссылкам класс active
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
