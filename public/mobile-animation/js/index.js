
var audio = new Audio('sounds/corona.mp3');

$('.play-button').click(function(){
  $(this).addClass('play');
  $('.status-bar').addClass('show-fast');
  $('.inner-rectangle').addClass('fade-shadow');
  $('.play-triangle').css('visibility', 'hidden');
  $('.stop-square').addClass('show-fast');
  $('.music-player').addClass('show-slow');
  $('.song-title').addClass('show-slow');
  setTimeout(function(){
    audio.play();
  },500);
});



$('.stop-square').click(function(){
  location.reload();
});
