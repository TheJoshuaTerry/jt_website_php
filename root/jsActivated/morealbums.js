//Load in images using AJAX JQuery
$(document).ready(function(){
    $(".moreAlbums").click(function(){
      $(".rest").html(`<img src="mediafiles/bluealbum.jpeg" class="bigLogo mx-auto d-block">
      <img src="mediafiles/spikealbum.jpeg" class="bigLogo mx-auto d-block">
      <img src="mediafiles/shipalbum.jpeg" class="bigLogo mx-auto d-block">
      <img src="mediafiles/futureblues.jpeg" class="bigLogo mx-auto d-block">
      <img src="mediafiles/vitaminless.jpeg" class="bigLogo mx-auto d-block">
      <img src="mediafiles/cdbox.jpeg" class="bigLogo mx-auto d-block">`);
    });
  });